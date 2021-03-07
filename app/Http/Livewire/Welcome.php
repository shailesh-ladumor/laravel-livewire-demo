<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Welcome extends Component
{
    public $title ="Livewire Data Binding Demo";

    public function changeTitle()
    {
        //   $this->title ="New Livewire Demo";
    }

    public function render()
    {
        return view('livewire.welcome');
    }
}
