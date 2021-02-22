<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Welcome extends Component
{
    public $title =" Livewire Demo";

    public function changeTitle()
    {
        $this->title = "New LiveWire Demo";
    }

    public function render()
    {
        return view('livewire.welcome');
    }
}
