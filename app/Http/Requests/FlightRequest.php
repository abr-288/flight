<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FlightRequest extends FormRequest
{
    public function rules()
    {
        return [
            'name' => 'required|string',
            'origin' => 'required|string',
            'destination' => 'required|string',
            'departure' => 'required|date',
            'arrival' => 'required|date|after:departure',
        ];
    }
}