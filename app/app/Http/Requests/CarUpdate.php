<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Car;
use Illuminate\Support\Facades\Auth;

class CarUpdate extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        $carId = $this->route('car');
        return Car::where('id', $carId)
            ->where('user_id', Auth::id())->exists();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'model' => 'string',
            'description' => 'string',
            'manufacturer' => 'string'
        ];
    }
}
