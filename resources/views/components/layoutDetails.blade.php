<x-layout>

    <header class="row flex-column justify-content-center align-items-center py-3">
        <div class="col-12 mt-5">

            {{ $title }}
            
        </div>
    </header>


    <div class="container d-flex justify-content-center align-items-center">
        <div class="row justify-content-center align-items-center row-custom">  
            <div class="col-12 col-md-5 d-flex justify-content-center align-items-center">

                {{ $img }}

            </div>
            <div class="col-12 col-md-6 d-flex flex-column justify-content-center align-items-center">

                {{ $details }}

            </div>
        </div>    
    </div>

</x-layout>