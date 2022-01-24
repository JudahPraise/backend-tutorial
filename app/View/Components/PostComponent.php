<?php

namespace App\View\Components;

use App\Like;
use App\Post;
use Illuminate\View\Component;
use Illuminate\Support\Facades\Auth;

class PostComponent extends Component
{
    public $id;
    public $postid;
    
    public function __construct($id, $postid)
    {
        $this->id = $id;
        $this->postid = $postid;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        $post = Post::where('id','=',$this->postid)->with('user', 'likes')->first();
        // dd($post->likes);
        // $likeBy = Like::where([['post_id' => $this->postid],['likeBy' => Auth::user()->name]])->first();
        return view('components.post-component', compact('post'));
    }
}
