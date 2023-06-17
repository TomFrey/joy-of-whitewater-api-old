<?php

namespace App\Http\Requests\V1;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreCourseRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        $user = $this->user();
        return $user != null && $user->tokenCan('create');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'statusId' => ['required'],
            'name' => ['required'],
            'beschreibung' => ['nullable'],
            'treffpunkt' => ['nullable'],
            'preisKurs' => ['required'],
            'preisMaterial' => ['required'],
            'vonDatum' => ['required'],
            'bisDatum' => ['required'],
            'ort' => ['nullable'],
            'land' => ['nullable'],
            'kursStufe' => ['required', Rule::in(['Level1', 'Level2', 'Level3', 'Level4', 'Level5', 'alle', 'Level3-Level4', 'Level4-Level5'])],
            'sportArt' => ['required', Rule::in(['Kajak', 'Kanadier', 'Packraft', 'alle'])],
            'typ' => ['required', Rule::in(['Paddelreise', 'Kanukurs', 'Eskimotieren', 'Packraft Kurs'])],
            'guide' => ['nullable'],
            'wirdAngezeigt' => ['required', 'boolean'],
            'paddelreiseGruppe' => ['nullable'],
            'anzahlPausentage' => ['nullable'],
            'anmeldeSchluss' => ['nullable']
        ];
    }

    protected function prepareForValidation(){
        $this->merge([
            'status_id' => $this->statusId,
            'preis_kurs' => $this->preisKurs,
            'preis_material' => $this->preisMaterial,
            'von_datum' => $this->vonDatum,
            'bis_datum' => $this->bisDatum,
            'kurs_stufe' => $this->kursStufe,
            'sport_art' => $this->sportArt,
            'paddelreise_gruppe' => $this->paddelreiseGruppe,
            'anzahl_pausentage' => $this->anzahlPausentage,
            'anmelde_schluss' => $this->anmeldeSchluss
        ]);
    }
}
