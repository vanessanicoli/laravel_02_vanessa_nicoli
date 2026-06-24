<x-layoutDetails>

    <x-slot name="title">
        <h2 class="text-center display-5">{{ $teamMember['tag'] }}</h2>
        <h4 class="text-center display-6">{{ $teamMember['subtag'] }}</h4>
    </x-slot>

    <x-slot name="img">
        <img src="{{ $teamMember['propic'] }}" class="img-fluid propic" alt="Immagine profilo del membro del team">
    </x-slot>

    <x-slot name="details">
        <h4 class="text-center display-5">{{ $teamMember['username'] }}</h4>
        <p class="display-6">{{ $teamMember['name'] }} {{ $teamMember['surname'] }}</p>
        <p class="p-custom text-center">{{ $teamMember['role'] }}</p>
    </x-slot>


</x-layoutDetails>