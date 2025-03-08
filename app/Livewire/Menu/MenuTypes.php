<?php
namespace App\Livewire\Menu;

use App\Models\MenuTypes as ModelsMenuTypes;
use Illuminate\Support\Facades\Log;
use Livewire\Component;

class MenuTypes extends Component
{

    public $menutypes = [];
    public function mount()
    {
        $this->menutypes = ModelsMenuTypes::all(); 
        Log::info('Menu Type fetched:', ['menutypes' => $this->menutypes]);

    }

    public function render()
    {
        return view('livewire.menu.menu-types', [
            'menutypes' => $this->menutypes, 
        ]);
    }
}