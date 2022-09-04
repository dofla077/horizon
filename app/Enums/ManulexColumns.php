<?php

namespace App\Enums;

enum ManulexColumns:string
{
    case ortho = 'ortho';
    case phon = 'phon';
    case synt = 'synt';
    case u = 'u';
    case psyll = 'psyll';
    case nbsyll = 'nbsyll';
    case gseg = 'gseg';
    case pseg = 'pseg';
    case gpmatch = 'gpmatch';
    case nblet = 'nblet';
    case nbphon = 'nbphon';
    case nbgraoh = 'nbgraph';
    case puortho = 'puortho';
}
