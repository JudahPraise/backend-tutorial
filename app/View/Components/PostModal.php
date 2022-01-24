<?php

namespace App\View\Components;

use Illuminate\View\Component;

class PostModal extends Component
{

    // public $modal;

    // public function __construct( $modal)
    // {
    //     $this->modal = $modal;

    // }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.post-modal');
    }
}
