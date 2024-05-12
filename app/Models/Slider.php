<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphMany;

class Slider extends Model
{
    use HasFactory;

    protected $fillable = ['active', 'order'];

    public function images(): MorphMany
    {
        return $this->morphMany(Image::class, 'imageable');
    }

    public static function changeOrder($slider_id, $direction)
    {
        $slider = Slider::find($slider_id);

        if (!$slider) {
            return; // Slider not found
        }

        // Get the adjacent slider based on the direction
        $adjacent_slider = Slider::where('order', $slider->order + $direction)->first();

        if (!$adjacent_slider) {
            return; // No adjacent slider found
        }

        // Swap the order values
        $temp_order = $slider->order;
        $slider->order = $adjacent_slider->order;
        $adjacent_slider->order = $temp_order;

        // Save the changes
        $slider->save();
        $adjacent_slider->save();
    }
}
