<?php
namespace App\Components;

use Illuminate\Contracts\Support\Htmlable;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class FormTitle implements Htmlable
{
    protected string $position;

    protected string | null $subtitle;

    protected static array $configurations = [];

    protected Component $livewire;

    public function __construct(
        public string $title
    ){}

    public static function make(string $title): self{
        return new self($title);
    }

    public function getTitle(): string{
        return $this->title;
    }

    public function subTitle(string | null $subtitle): self{
        $this->subtitle = $subtitle;

        return $this;
    }

    public function getSubTitle(): string | null{
        return $this->subtitle ?? null;
    }

    public function position(string $pos): self{

        $this->position = $pos;

        return $this;
    }

    public function getPosition(): string{
        return $this->position ?? 'L';
    }

    public function livewire(Component $livewire): self
    {
        $this->livewire = $livewire;

        return $this;
    }

    public function extractPublicMethods(): array{
        $reflection = new \ReflectionClass($this);

        $methods = [];

        foreach($reflection->getMethods(\ReflectionMethod::IS_PUBLIC) as $method){
            $methods[$method->getName()] = \Closure::fromCallable([$this, $method->getName()]);
        }

        return $methods;
    }

    public static function configureUsing(\Closure $configure): void
    {
        self::$configurations[] = $configure;
    }

    public function render(): View{
        return view('components.form-title', $this->extractPublicMethods());
    }

    public function toHtml(): string{
        return $this->render()->render();
    }
}