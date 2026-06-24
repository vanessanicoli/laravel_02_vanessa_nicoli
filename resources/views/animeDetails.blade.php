<x-layoutDetails>

    <x-slot name="title">
        <h2 class="text-center display-5">{{ $anime['name'] }}</h2>
    </x-slot>

    <x-slot name="img">
        <img src="{{ $anime['pic'] }}" class="img-fluid" alt="Poster dell'anime">
    </x-slot>

    <x-slot name="details">
        <h4 class="text-center display-5">{{ $anime['name'] }}</h4>
        <p class="p-custom">{{ $anime['year'] }}</p>
        <p class="p-custom text-center">{{ $anime['genre'] }}</p>
        <p class="p-description">{{ $anime['description'] }}</p>
    </x-slot>

</x-layoutDetails>
