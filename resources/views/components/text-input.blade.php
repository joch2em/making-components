<div class="flex flex-col">
    <input placeholder="{{ $getLabel() }}" wire:model.live="{{ $getName() }}" class="shadow-sm sm:text-sm w-full rounded-sm border-gray-200 align-top h-6 pl-2 pr-2 pb-4 pt-4">
    @error($getName()) <div class="error font-bold text-xs text-red-600 italic">{{ $message }}</div> @enderror
</div>