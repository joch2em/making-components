<div class="flex justify-center" >
    <button
    name="{{ $getName() }}"
    wire::model.live="{{ $getName() }}"
    type="submit"
    class="bg-blue-500 text-white font-bold py-2 px-4 rounded">
        {{ $getName() }}
    </button>
</div>

