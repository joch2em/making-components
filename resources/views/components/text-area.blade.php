{{-- <div>
    <label for="">
        <span>
            {{ $getLabel() }}
        </span>
        <textarea wire:model.live="{{ $getName() }}" cols="{{ $getColumns() }}" rows="{{ $getRows() }}" class="text-3xl font-bold underline"></textarea>

        

    </label>
</div> --}}
<div class="flex flex-col">
    <textarea
      id="{{ $getLabel() }}"
      class="p-2 w-full rounded-lg border-gray-200 align-top shadow-sm sm:text-sm"
      placeholder="{{ $getLabel() }}"

      wire:model.live="{{ $getName() }}" cols="{{ $getColumns() }}" rows="{{ $getRows() }}"
    ></textarea>
    @error('beschrijving') <div class="error font-bold text-xs text-red-600 italic">{{ $message }}</div> @enderror
</div>

  