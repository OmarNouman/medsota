<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Storage;

class StoreProductRequest extends FormRequest
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
            'name' => 'required',
            'description' => 'required',
            'quantity' => 'required|integer',
            'category_id' => 'required|integer',
            'image_url.*' => 'required|image'
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'Product name is required',
            'description.required' => 'Product description is required',
            'quantity.required' => 'Product quantity is required',
            'category.required' => 'Product category is required',
            'image_url.required' => 'Product image is required',
            'image_url.image' => 'The uploaded file must be an image'
        ];
    }



    public function validated()
    {
        $request = $this->validator->validated();
        foreach ($request['image_url'] as $index => $image) {
            $request['image_url'][$index] = Storage::disk('local')->put('public/images/products', $image);
        }
        return $request;
    }

}
