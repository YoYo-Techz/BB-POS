<?php
namespace App\Livewire;

use App\Models\FMenu;
use Illuminate\Database\Eloquent\Builder;
use PowerComponents\LivewirePowerGrid\Button;
use PowerComponents\LivewirePowerGrid\Column;
use PowerComponents\LivewirePowerGrid\Footer;
use PowerComponents\LivewirePowerGrid\Header;
use PowerComponents\LivewirePowerGrid\PowerGrid;
use PowerComponents\LivewirePowerGrid\PowerGridComponent;
use PowerComponents\LivewirePowerGrid\PowerGridFields;
use PowerComponents\LivewirePowerGrid\Traits\WithExport;
use Illuminate\Support\Carbon;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Number;
use Livewire\Attributes\On;
use PowerComponents\LivewirePowerGrid\Facades\Filter;
use PowerComponents\LivewirePowerGrid\Facades\Rule;

final class FMenuTable extends PowerGridComponent
{
    use WithExport;

    public function setUp(): array
    {
        // $this->showCheckBox();

        return [
            // Exportable::make('export')
            //     ->striped()
            //     ->type(Exportable::TYPE_XLS, Exportable::TYPE_CSV),
            // Responsive::make(),

            Header::make()->showSearchInput(),

            Footer::make()
                ->showPerPage()
                ->showRecordCount(),

        ];
    }

    public function datasource(): Builder
    {
        return FMenu::query()
            ->join('categories as newCategories', 'f_menus.category_id', '=', 'newCategories.id')
            ->select('f_menus.*', 'newCategories.name_en as category_name');
    }

    public function relationSearch(): array
    {
        return [];
    }

    public function fields(): PowerGridFields
    {
        return PowerGrid::fields()
            ->add('id')
            ->add('name')
            ->add('img', fn($item) => '<img class="w-8 h-8 shrink-0 grow-0 rounded-full" src="' . $item->img . '">')
            ->add('description')
            ->add('price')
            ->add('is_special')
            ->add('created_at');
    }

    public function columns(): array
    {
        return [

            Column::make('ID', 'id'),
            Column::make('Image', 'img'),
            Column::make('Name', 'name')->sortable()
                ->searchable(),
            Column::make('Category', 'category_name')
                ->sortable(),
            Column::add()
                ->title('Price')
                ->field('price')
                ->sortable(),
            Column::add()
                ->title('Is Special')
                ->field('is_special')
                ->toggleable($hasPermission = false)
                ->sortable(),
            Column::make('Created at', 'created_at')
                ->sortable()
                ->searchable(),
            Column::action('Action'),
        ];
    }

    public function filters(): array
    {
        return [
        ];
    }

    #[\Livewire\Attributes\On('edit')]
    public function edit($rowId): void
    {
        $this->js('alert(' . $rowId . ')');
    }

    public function actions(FMenu $row): array
    {
        return [
            Button::add('edit')
                ->slot('Edit: ' . $row->id)
                ->id()
                ->class('pg-btn-white dark:ring-pg-primary-600 dark:border-pg-primary-600 dark:hover:bg-pg-primary-700 dark:ring-offset-pg-primary-800 dark:text-pg-primary-300 dark:bg-pg-primary-700')
                ->dispatch('edit', ['rowId' => $row->id]),
        ];
    }

    public function onUpdatedToggleable($id, $field, $value): void
    {
        FMenu::query()->where('id', $id)->update([
            $field => $value,
        ]);
    }

    public function actionRules($row): array
    {
       return [
            // Hide button edit for ID 1
           Rule::rows()
                ->when(fn ($fmenu) => $fmenu->is_special == false)
                ->setAttribute('class', 'bg-red-50 hover:bg-red-100'),
        ];
    }

}