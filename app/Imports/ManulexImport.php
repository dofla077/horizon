<?php

namespace App\Imports;

use App\Enums\GradeLevel;
use App\Enums\ManulexColumns;
use App\Models\Grade;
use App\Models\Manulex;
use DB;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\SkipsEmptyRows;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithChunkReading;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithProgressBar;

class ManulexImport implements ToCollection, WithHeadingRow, WithChunkReading, SkipsEmptyRows, WithProgressBar
{
    use Importable;

    /**
     * @param GradeLevel $grade
     */
    public function __construct(readonly protected GradeLevel $grade){}

    /**
     * @param Collection $collection
     * @throws \Throwable
     */
    public function collection(Collection $collection)
    {
        $data = [];
        $ortho = [];

        foreach ($collection as $row) {
            if (isset($row[ManulexColumns::ortho->value])) {
                $item = [];
                foreach (collect(ManulexColumns::cases())->values() as $manulex) {
                    $item[$manulex->value] = $row[$manulex->value];
                    $item['created_at'] = now();
                    $item['updated_at'] = now();
                }

                $ortho[] = $row[ManulexColumns::ortho->value];

                $data[] = $item;
            }
        }

        DB::transaction(function () use ($ortho, $data) {
            Db::table('manulexs')->upsert($data, 'ortho');

            $manulex = Manulex::whereIn('ortho', $ortho)->get('id');

           Grade::whereLabel($this->grade)->first()->manulexs()->syncWithoutDetaching($manulex);
        });

    }

    /**
     * @return int
     */
    public function headingRow(): int
    {
        return 4;
    }

    /**
     * @return int
     */
    public function chunkSize(): int
    {
        return 1000;
    }
}
