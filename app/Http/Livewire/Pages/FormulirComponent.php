<?php

namespace App\Http\Livewire;

use Livewire\Component;

class FormulirComponent extends Component
{
    public function render()
    {
        return view('livewire.pages.formulir')->layout("template.app");;
    }
}
