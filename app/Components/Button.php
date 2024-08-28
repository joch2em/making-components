<?php
namespace App\Components;

use Illuminate\Contracts\Support\Htmlable;
use Illuminate\Contracts\View\View;
use Livewire\Component;
use PHPUnit\Event\Code\Test;
use App\Livewire\TestForm;
use Illuminate\Support\Str;

class Button implements Htmlable
{
    protected Component $livewire;

    public function __construct(
        public string $name
    ){}

    public static function make(string $name): self{
        return new self($name);
    }

    public function getName(): string{
        return $this->name;
    }

    public function extractPublicMethods(): array{
        $reflection = new \ReflectionClass($this);

        $methods = [];

        foreach($reflection->getMethods(\ReflectionMethod::IS_PUBLIC) as $method){
            $methods[$method->getName()] = \Closure::fromCallable([$this, $method->getName()]);
        }

        return $methods;
    }

    public function evaluate($value)
    {
        if ($value instanceof \Closure) {
            return $value();
        }

        return $value;
    }

    public function render(): View{
        return view('components.button', $this->extractPublicMethods());
    }

    public function toHtml(): string{
        return $this->render()->render();
    }
}