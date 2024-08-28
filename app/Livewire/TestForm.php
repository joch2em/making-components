<?php

namespace App\Livewire;

use App\Components\Button;
use App\Components\FormTitle;
use App\Components\TextArea;
use App\Components\TextInput;
use Livewire\Component;

class TestForm extends Component
{
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
            'email' => 'required|',
            'naam' => 'required|min:3',
        ];
    }

    public function render()
    {
        $title = FormTitle::make('Dit is de titel van het formulier')   
            ->position('M')
            ->subTitle('Dit is de subtitel van het formulier');

        $name = TextInput::make('naam')
            ->label('Naam:');

        $email = TextInput::make('email')
            ->label('Email:');

        $description = TextArea::make('beschrijving')
            ->label('Beschrijving:')
            ->columns(30)
            ->rows(5);

        $submit = Button::make('submit');

        return view('livewire.test-form', [
            'email' => $email,
            'name' => $name,
            'description' => $description,
            'title' => $title,
            'submit' => $submit,
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