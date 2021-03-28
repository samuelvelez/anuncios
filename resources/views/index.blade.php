<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
           
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h1>Categorias</h1>

                </div>
                
                <div class="row" style="margin-bottom:10%">
                @foreach($data['categorias'] as $categoria)        
                    <div class="col-6">
                        <div class="card" style="width: 90%;margin-left:5%;margin-top:5%">
                            <div class="card-body">
                                <h5 class="card-title">{{ $categoria->nombre }}</h5> 
                                @foreach($data['subcategorias'] as $subcategoria)   
                                    @if($subcategoria->categoriaId == $categoria->idcategorias)
                                    <a href="/clasificado/{{$categoria->idcategorias}}" class="card-link">{{ $subcategoria->nombre}}</a>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    </div>   
                    @endforeach
                </div>
               
            </div>
        </div>
    </div>
    
</x-app-layout>
