<?php

namespace App\Console\Commands;

use App\Enums\GradeLevel;
use App\Imports\ManulexImport;
use Database\Seeders\ManulexSeeder;
use Illuminate\Console\Command;

class ManulexExcel extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'manulex:import';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Manulex import';

    /**
     * Execute the console command.
     *
     */
    public function handle()
    {
        $this->output->title('Starting import');
        (new ManulexImport(GradeLevel::CP))->withOutput($this->output)->import(storage_path('app/manulex/Manulex-infra-CP.xls'));
        (new ManulexImport(GradeLevel::CE1))->withOutput($this->output)->import(storage_path('app/manulex/Manulex-infra-CE1.xls'));
        (new ManulexImport(GradeLevel::CE2CM2))->withOutput($this->output)->import(storage_path('app/manulex/Manulex-infra-CE2-CM2.xls'), null, \Maatwebsite\Excel\Excel::XLS);
        $this->output->success('Import successful');

    }
}
