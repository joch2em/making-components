<form class=" m-10 " wire:submit.prevent="saveContact">
    <div x-data="{isValid:{{ $isFormValid }}}" class="pt-6 pl-12 pr-12 pb-12 border-solid border-2 rounded-lg shadow-lg border-gray-100 flex justify-items-center flex-col justify-around space-y-8" style="">
        {{ $title }}
        <div>
            {{ $name }}
        </div>
        <div>
            {{ $email }}
        </div>
        <div>
            {{ $description }}
        </div>
        {{ $submit }}
    </div>
</form>