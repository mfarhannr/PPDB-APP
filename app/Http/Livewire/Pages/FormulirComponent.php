<?php

namespace App\Http\Livewire\Pages;

use GuzzleHttp\Psr7\Request;
use Livewire\Component;

class FormulirComponent extends Component
{
    public function render()
    {
        return view('livewire.content.formulir')->layout("template.app");
    }
    public function store(Request $request)
    {
        
    }
}
