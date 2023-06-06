<?php

namespace App\Http\Livewire\Pages;

use Livewire\Component;

class ValueComponent extends Component
{
    public function render()
    {
        return view('livewire.pages.value-component')->layout("template.app");
    }
}
