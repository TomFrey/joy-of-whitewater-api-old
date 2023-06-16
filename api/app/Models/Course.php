<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable = [
        'status_id',
        'name',
        'beschreibung',
        'treffpunkt',
        'preis_kurs',
        'preis_material',
        'von_datum',
        'bis_datum',
        'ort',
        'land',
        'kurs_stufe',
        'sport_art',
        'typ',
        'guide',
        'wirdAngezeigt',
        'paddelreise_gruppe',
        'anzahl_pausentage',
        'anmelde_schluss'
    ];

    public function status(){
        return $this->hasOne(Status::class);
    }
}
