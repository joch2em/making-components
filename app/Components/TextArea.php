<?php
namespace App\Components;

use Illuminate\Contracts\Support\Htmlable;
use Illuminate\Contracts\View\View;

class TextArea implements Htmlable{


    protected string $label;
    protected string $columns;
    protected string $rows;


    public function __construct(
        public string $name
    ){}


    public static function make(string $name): self{
        return new self($name);
    }

    public function getLabel(): string{
        return $this->label ?? str($this->name)
        ->title();
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
        return view('components.text-area', $this->extractPublicMethods());
    }

    public function label(string $label): self{
        $this->label = $label;

        return $this;
    }

    public function getName(): string{
        return $this->name;
    }

    public function columns(int $columns): self{
        $this->columns = $columns;

        return $this;
    }

    public function getColumns(): int{
        return $this->columns ?? 30;
    }

    public function rows(int $rows): self{
        $this->rows = $rows;

        return $this;
    }

    public function getRows(): int{
        return $this->rows ?? 10;
    }

    public function toHtml(): string{
        return $this->render()->render();
    }
}
