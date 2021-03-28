<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
           
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h1>Categoria - {{$data['categoria']->nombre}}</h1>

                </div>
                
                <div class="row" style="margin-bottom:10%">
                @foreach($data['clasificados'] as $clasificado)        
                    <div class="col-12">
                        <div class="card" style="margin:10px">
                            <div class="card-body" style="width: 90%;margin-left:5%;margin-top:10px">
                            <div class="row">
                            <div class="col-3">
    <img src="{{$clasificado->imagen}}" />
                            </div>
                            <div class="col-9">
                                <h5 class="card-title">{{ $clasificado->titulo }}</h5> 
                                <p class="card-text">{{ $clasificado->descripcion }}</p>
                            </div>
                            </div>
                            </div>
                        </div>
                    </div>   
                    @endforeach
                </div>
               
            </div>
        </div>
    </div>
    <div class="container">
    <div class="col-12 pb-5">
    <span class="table-total-row-counter">{{ $data['clasificados']->total()." elemento(s)" }}</span>
    {{ $data['clasificados']->setPath('')->appends(Request::except('page'))->links() }}
    </div>
    </div>
    
</x-app-layout>
