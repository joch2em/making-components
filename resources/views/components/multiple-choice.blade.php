{{-- <div class="flex justify-content-center">
    <select 
    class="rounded-lg border-solid border-2 border-gray-100 shadow-sm sm:text-sm p-2 max-w-lg min-w-40 flex items-center"
    name="{{ $getName() }}" 
    id="{{ $getName() }}" 
    wire:model.live='{{ $getName() }}'>
        <option value="0" hidden selected>Select an option</option>
        @foreach ($getOptions() as $option)
            <option label="{{ $option }}" value="{{ strtolower(str_replace(' ','_',$option)); }}"></option>
        @endforeach
    </select>
</div>
@error($getName()) <div class="error font-bold text-xs text-red-600 italic">{{ $message }}</div> @enderror --}}



<div class="max-w-lg">
    <button type="button" wire:click='toggle()'>{{ $getLabel() }}</button>
    <ul wire:show='{{ $isOpen() }}'>
        @foreach ($getOptions() as $option)
            <li>{{ $option }}</li>
        @endforeach
    </ul>
</div>