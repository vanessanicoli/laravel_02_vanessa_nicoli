<x-layoutBase>

    <x-slot name="h1">
            <h1 class="text-center display-1">Il nostro Team</h1>
    </x-slot>

    <x-slot name="foreach">
        @foreach ($teamMembers as $teamMember)
            <div class="col-12 col-md-4 d-flex justify-content-around align-items-center mt-3 mt-md-0">
                <div class="card" style="width: 18rem;">
                    <img src="{{ $teamMember['propic'] }}" class="card-img-top img-fluid" alt="Immagine profilo del membro del team">
                    <div class="card-body">
                        <h5 class="card-title text-center fw-bolder fs-3">{{ $teamMember['username'] }}</h5>
                        <p class="card-text text-center fw-bold fs-5 m-0">{{ $teamMember['tag'] }}</p>
                        <p class="card-text text-center">{{ $teamMember['subtag'] }}</p>
                        <a href="{{ route('teamDetails', ['id'=>$teamMember['id']]) }}" class="btn btn-custom">Vedi di più</a>
                    </div>
                </div>            
            </div>
        @endforeach
    </x-slot>   

</x-layoutBase>