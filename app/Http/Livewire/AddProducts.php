<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Category;

class AddProducts extends Component
{
    public function render()
    {
        $categories = Category::all();
        return view('livewire.add-products', compact('categories'));
    }
}
