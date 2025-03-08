<?php

namespace App\Livewire\Menu;


use App\Models\Allergy; // Import the FMenu model
use Livewire\Component;
use App\Models\Category;
use App\Models\FMenu as ModelsFMenu;

class FMenu extends Component
{
    public $menus;

    public function mount()
    {
        // Fetch all menus with category and allergy relations
        $this->menus = ModelsFMenu::all();
    }

    public function render()
    {
        return view('livewire.menu.f-menu', [
            'menus' => $this->menus
        ]);
    }
}