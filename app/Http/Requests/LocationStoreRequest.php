<?php

namespace App\Http\Requests;

class LocationStoreRequest extends BaseRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get custom attributes for validator errors.
     *
     * @return array
     */
    public function attributes()
    {
        return [
            'cover.img' => 'Gambar Cover Depan',
            'cover.name' => 'Nama Cover Depan',
            'cover.description' => 'Deskripsi Cover Depan',
            'about.img' => 'Gambar Section 1',
            'about.title' => 'Judul Section 1',
            'about.description' => 'Deskripsi Section 1',
            'content.video' => 'Video Section 2',
            'content.title' => 'Judul Section 2',
            'content.description' => 'Deskripsi Section 2',
            'seo.title' => 'Meta Title',
            'seo.description' => 'Meta Description',
            'seo.keywords' => 'Meta Keywords',
            'seo.image' => 'OG Image',
            'images.*' => 'Galeri Gambar',
        ];
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'cover.img' => 'required|image',
            'cover.name' => 'required',
            'cover.description' => 'required',
            'about.img' => 'image',
            'content.video' => 'mimes:mp4,ogx,oga,ogv,ogg,webm',
            'images.*' => 'image',
        ];
    }
}
