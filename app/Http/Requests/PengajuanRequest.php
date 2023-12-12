<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PengajuanRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'instansi' => 'required|max:255',
            'kategori' => 'required|max:255',
            'tgl_surat' => 'required|max:255',
            'no_surat' => 'required|max:255',
            'nama_domain' => 'required|max:255',
            'nama_webapk' => 'required|max:255',
            'spk_hosting' => 'required|max:255',
            'dsk_webapk' => 'required|max:255',
            'photo' => 'required|mimes:pdf,xlx,csv|max:2048',
            'kontak' => 'required|max:255',
            'keterangan' => 'required|max:255'
        ];
    }
}
