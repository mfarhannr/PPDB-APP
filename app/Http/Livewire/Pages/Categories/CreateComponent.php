<?php

namespace App\Http\Livewire\Pages\Categories;

use Livewire\Component;
use App\Models\Categories;

class CreateComponent extends Component
{
    public $name;
    protected $rules = [
        'name' => 'required|min:1',
    ];
    public function create()
    {
        $this->validate();
        Categories::create([
            'name' => $this->name
        ]);
        session()->flash('message', 'Category successfully created.');
        return redirect(back());
    }
    public function render()
    {
        return view('livewire.pages.categories.create-component')->layout("template.app");
    }
}
