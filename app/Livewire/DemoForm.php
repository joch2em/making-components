<?php

namespace App\Livewire;

use DanHarrin\FilamentToolkit\Forms\Components\ColorPicker;
use DanHarrin\FilamentToolkit\Forms\Components\Section;
use Filament\Forms;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Form;
use Livewire\Component;
use Illuminate\Contracts\View\View;


class DemoForm extends Component implements HasForms
{
    use InteractsWithForms;

    public ?array $data =[];

    public function mount(){
        $this->form->fill();
    }

    public function form(Form $form): Form{
        return $form
            ->schema([]);
    }

    public function render()
    {
        return view('livewire.demo-form');
    }
}
