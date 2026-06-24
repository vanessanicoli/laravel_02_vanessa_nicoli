<x-layoutBase>

    <x-slot name="h1">
        <h1 class="text-center display-1">Anime più visti al momento</h1>
    </x-slot>

    <x-slot name="foreach">
        @foreach ($animes as $anime)
            <div class="col-12 col-md-4 d-flex justify-content-around align-items-center mt-3">
                <div class="card" style="width: 18rem;">
                    <div class="ratio ratio-1x1">
                        <img src="{{ $anime['pic'] }}" class="card-img-top object-fit-cover img-fluid" alt="Poster dell'anime">  
                    </div>            
                    <div class="card-body">
                        <h5 class="card-title text-center fw-bolder fs-5">{{ $anime['name'] }}</h5>
                        <p class="card-text text-center fw-bold fs-5 m-0">{{ $anime['year'] }}</p>
                        <p class="card-text text-center">{{ $anime['genre'] }}</p>
                        <a href="{{ route('animeDetails', ['id'=>$anime['id']]) }}" class="btn btn-custom">Vedi di più</a>
                    </div>
                </div>            
            </div>
        @endforeach
    </x-slot>   

</x-layoutBase>