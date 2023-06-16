<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Resources\Json\JsonResource;

class CourseResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'statusId' => $this->status_id,
            'name' => $this->name,
            'beschreibung' => $this->beschreibung,
            'treffpunkt' => $this->treffpunkt,
            'preisKurs' => $this->preis_kurs,
            'preisMaterial' => $this->preis_material,
            'vonDatum' => $this->von_datum,
            'bisDatum' => $this->bis_datum,
            'ort' => $this->ort,
            'land' => $this->land,
            'kursStufe' => $this->kurs_stufe,
            'sportArt' => $this->sport_art,
            'typ' => $this->typ,
            'guide' => $this->guide,
            'wirdAngezeigt' => $this->wirdAngezeigt,
            'paddelreiseGruppe' => $this->paddelreise_gruppe,
            'anzahlPausentage' => $this->anzahl_pausentage,
            'anmeldeSchluss' => $this->anmelde_schluss
        ];
    }
}
