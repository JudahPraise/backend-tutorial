<?php

namespace App\View\Components;

use App\Like;
use Illuminate\View\Component;

class LikesComponent extends Component
{

    public $modal;
    public $postid;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($modal, $postid)
    {
        $this->modal = $modal;
        $this->postid = $postid;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        $likes = Like::where('post_id','=',$this->postid)->get();
        return view('components.likes-component', compact('likes'));
    }
}
