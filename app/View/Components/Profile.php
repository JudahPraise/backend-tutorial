<?php

namespace App\View\Components;

use App\User;
use Illuminate\View\Component;
use Illuminate\Support\Facades\Auth;

class Profile extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        $user = User::where('id','=',Auth::user()->id)->first();
        return view('components.profile', compact('user'));
    }
}
