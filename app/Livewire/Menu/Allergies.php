<?php

namespace App\Livewire\Menu;


use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Log;
use App\Models\Allergy;

class Allergies extends Component
{
    use WithPagination;


     public $allergies = []; // ✅ Initialize as an empty array

    public function mount()
    {
        $this->allergies = Allergy::all(); // ✅ Fetch categories from the database
        Log::info('allergies fetched:', ['allergies' => $this->allergies]);

    }

    public function render()
    {
        return view('livewire.menu.allergies', [
            'allergies' => $this->allergies, // ✅ Pass categories to the view
        ]);
    }
}