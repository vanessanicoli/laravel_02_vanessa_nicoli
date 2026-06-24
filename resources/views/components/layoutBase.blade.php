<x-layout>

    <header class="row flex-column justify-content-center align-items-center py-5">
        <div class="col-12">
            {{ $h1 }}
        </div>
    </header>

    <div class="row justify-content-center align-items-center">  
        {{ $foreach }}
    </div>    

</x-layout>