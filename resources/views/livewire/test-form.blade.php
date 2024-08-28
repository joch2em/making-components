<form class=" m-10 " wire:submit.prevent="saveContact">
    <div class="pt-6 pl-12 pr-12 pb-12 border-solid border-2 rounded-lg shadow-lg border-gray-100 flex justify-items-center flex-col justify-around space-y-8">
        {{ $title }}
        <div>
            {{ $name }}
        </div>
        <div>
            {{ $Email }}
        </div>
        <div>
            {{ $multipleChoice }}
        </div>
        <div>
            {{ $description }}
        </div>
        {{ $submit }}
    </div>
</form>