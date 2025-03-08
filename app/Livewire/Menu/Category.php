<?php

namespace App\Livewire\Menu;


use Livewire\Component;
use Illuminate\Support\Facades\Log; // ✅ Import Log
use App\Models\Category as Cate;


class Category extends Component
{
    public $categories = []; // ✅ Initialize as an empty array

    public function mount()
    {
        $this->categories = Cate::all(); // ✅ Fetch categories from the database
        Log::info('Categories fetched:', ['categories' => $this->categories]);

    }

    public function render()
    {
        return view('livewire.menu.category', [
            'categories' => $this->categories, // ✅ Pass categories to the view
        ]);
    }
}