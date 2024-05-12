<?php

namespace App\Http\Requests;

use App\Models\Slider;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Storage;

class StoreSliderRequest extends FormRequest
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
            'image_url' => 'required|image'
        ];
    }

    public function validated()
    {
        $request = $this->validator->validated();
        $request['image_url'] = Storage::disk('local')->put('public/images/slider', $request['image_url']);
        $request['order'] = Slider::count() + 1;
        return $request;
    }
}
