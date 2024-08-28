<?php

namespace App\Livewire;

use App\Components\Button;
use App\Components\FormTitle;
use App\Components\MultipleChoice;
use App\Components\TextArea;
use App\Components\TextInput;
use Livewire\Component;

class TestForm extends Component
{
    public $email;
    public $multiple_choice;
    public $beschrijving;
    public $naam;

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    protected function rules()
    {
        return [
            'beschrijving' => 'required|min:6',
            'email' => 'required',
            'naam' => 'required|min:3',
            'multiple_choice' => 'required',
        ];
    }

    public function render()
    {
        $Title = FormTitle::make('Dit is de titel van het formulier')   
            ->position('M')
            ->subTitle('Dit is de subtitel van het formulier');

        $Name = TextInput::make('naam')
            ->label('Naam:');

        $Email = TextInput::make('email')
            ->label('Email:');

        $MultipleChoice = MultipleChoice::make('multiple_choice')
            ->label('Multiple Choice:')
            ->options([
                'Optie 1',
                'Optie 2',
                'Optie 3',
            ]);

        $Description = TextArea::make('beschrijving')
            ->label('Beschrijving:')
            ->columns(30)
            ->rows(5);

        $Submit = Button::make('submit');

        return view('livewire.test-form', [
            'multipleChoice' => $MultipleChoice,
            'Email' => $Email,
            'name' => $Name,
            'description' => $Description,
            'title' => $Title,
            'submit' => $Submit,
        ]);
    }

    public function isValid()
    {
        $this->validate();
        return true;
    }

    public function saveContact()
    {
        $validatedData = $this->validate();
        dd($validatedData);
    }
}