<?php

namespace App\View\Components;

use Illuminate\View\Component;

class cards extends Component
{

    public $image;
    public $title;
    public $description;
    public $tags;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($image, $title, $description, $tags)
    {
        $this->image = $image;
        $this->title = $title;
        $this->description = $description;
        $this->tags = $tags;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.cards');
    }
}
