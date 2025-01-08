<div class="max-w-lg">
    <button type="button" wire:click="toggle">{{ $getLabel() }}</button>
    <ul wire:show='{{ $isOpen() }}'>
        @foreach ($getOptions() as $option)
            <li>{{ $option }}</li>
        @endforeach
    </ul>
</div>