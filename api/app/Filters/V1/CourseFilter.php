<?php

namespace App\Filters\V1;

use Illuminate\Http\Request;
use App\Filters\ApiFilter;


class CourseFilter extends ApiFilter{

    protected $safeParams = [
        'statusId' => ['eq', 'ne'],
        'name' => ['eq'],
        'beschreibung' => ['eq'],
        'treffpunkt' => ['eq'],
        'preisKurs' => ['eq', 'lt', 'lte', 'gt', 'gte'],
        'preisMaterial' => ['eq', 'lt', 'lte', 'gt', 'gte'],
        'vonDatum' => ['eq', 'lt', 'lte', 'gt', 'gte'],
        'bisDatum' => ['eq', 'lt', 'lte', 'gt', 'gte'],
        'ort' => ['eq', 'ne'],
        'land' => ['eq', 'ne'],
        'kursStufe' => ['eq'],
        'sportArt' => ['eq'],
        'typ' => ['eq', 'ne'],
        'guide' => ['eq', 'ne'],
        'wirdAngezeigt' => ['eq', 'ne'],
        'paddelreiseGruppe' => ['eq'],
        'anzahlPausentage' => ['eq', 'ne'],
        'anmeldeSchluss' => ['eq', 'lt', 'lte', 'gt', 'gte']
    ];

    protected $columnMap = [
        'statusId' => 'status_id',
        'preisKurs' => 'preis_kurs',
        'preisMaterial' => 'preis_material',
        'vonDatum' => 'von_datum',
        'bisDatum' => 'bis_datum',
        'kursStufe' => 'kurs_stufe',
        'sportArt' => 'sport_art',
        'paddelreiseGruppe' => 'paddelreise_gruppe', 
        'anzahlPausentage' => 'anzahl_pausentage',
        'anmeldeSchluss' => 'anmelde_schluss'
    ];

    protected $operatorMap = [
        'eq' => '=',
        'lt' => '<',
        'lte' => '<=',
        'gt' => '>',
        'gte' => '>=',
        'ne' => '!='
    ];
}