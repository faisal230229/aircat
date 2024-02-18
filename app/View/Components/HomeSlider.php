<?php

namespace App\View\Components;

use App\Models\Slider;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class HomeSlider extends Component
{
    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $sliders = Slider::query()
            ->where('status', 1)
            ->orderBy('order')
            ->get();
        return view('components.home-slider', compact('sliders'));
    }
}
