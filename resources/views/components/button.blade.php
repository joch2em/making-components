<div class="flex justify-center" >
    <button x-show="! isValid"
    name="{{ $getName() }}"
    wire::model.live="{{ $getName() }}"
    type="submit"
    class="bg-blue-500 text-white font-bold py-2 px-4 rounded opacity-50 cursor-not-allowed">
        {{ $getName() }}
    </button>

    <button x-show="isValid"
    name="{{ $getName() }}"
    wire::model.live="{{ $getName() }}"
    type="submit"
    class="bg-blue-500 text-white font-bold py-2 px-4 rounded">
        {{ $getName() }}
    </button>
</div>

