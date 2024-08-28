<?php
namespace App\Components;

use Livewire\Component;
use Illuminate\Contracts\Support\Htmlable;
use Illuminate\Contracts\View\View;

class MultipleChoice extends component implements Htmlable{

    protected Component $livewire;

    protected string $label;

    public bool $open = false;

    public array $options = [];

    public function __construct(
        public string $name
    ){}

    public static function make(string $name): self{
        return new self($name);
    }

    public function toggle(){
        $this->open = !$this->open;
    }

    public function getName(): string{
        return $this->name;
    }

    public function isOpen(): bool{
        return $this->open;
    }

    public function label(string $label): self{
        $this->label = $label;

        return $this;
    }

    public function getLabel(): string{
        return $this->label ?? str($this->name)
        ->title();
    }

    public function options(array $options): self{
        $this->options = $options;

        return $this;
    }

    public function getOptions(): array{
        return $this->options;
    }

    public function extractPublicMethods(): array{
        $reflection = new \ReflectionClass($this);

        $methods = [];

        foreach($reflection->getMethods(\ReflectionMethod::IS_PUBLIC) as $method){
            $methods[$method->getName()] = \Closure::fromCallable([$this, $method->getName()]);
        }

        return $methods;
    }

    public function render(): View{
        return view('components.multiple-choice', $this->extractPublicMethods());
    }

    public function toHtml(): string{
        return $this->render()->render();
    }

}