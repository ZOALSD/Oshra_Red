<?php

namespace App\Http\Livewire;

use App\Learn;
use Livewire\Component;

class LearnTreing extends Component
{

    public function render()
    {
        $learn = Learn::find(1)->dd();
        return view('livewire.learn-treing',
            compact('learn'))
            ->extends('front.layouts.index');
    }

}
