<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreSliderRequest;
use App\Models\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    private $dir = 'backend.sliders.';


    function index()
    {
        $sliders = Slider::orderBy('order')->paginate(10);
        return view($this->dir . 'index', compact('sliders'));
    }
    function create()
    {
        return view($this->dir . 'create');
    }

    function store(StoreSliderRequest $request)
    {
        $slider = Slider::create($request->validated());
        $slider->images()->create(['url' => $request->validated()['image_url']]);
        return redirect()->route('sliders.index')->with('Image added successfully');
    }

    function up($id)
    {
        Slider::changeOrder($id, -1);
        return redirect()->route('sliders.index')->with('Order changed successfully');
    }

    function down($id)
    {
        Slider::changeOrder($id, +1);
        return redirect()->route('sliders.index')->with('Order changed successfully');
    }
}
