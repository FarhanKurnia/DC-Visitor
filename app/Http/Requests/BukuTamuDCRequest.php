<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BukuTamuDCRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //'title' => 'required|unique:posts|max:200',
            'nama'=> 'required',
            'no_ktp'=> 'required',
            'instansi'=> 'required',
            'no_rack'=> 'required',
            'no_slot'=> 'required',
            'pekerjaan'=> 'required'
        ];
    }

    public function messages(){
        return [
            'nama.required'=> 'Name is required',
            'no_ktp.required'=> 'No KTP is required',
            'instansi.required'=> 'Instansi is required',
            'no_rack.required'=> 'No Rack required',
            'no_slot.required'=> 'NO Slot is required',
            'pekerjaan.required'=> 'Pekerjaan required',
        ];
    }
}
