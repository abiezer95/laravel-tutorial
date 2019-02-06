@extends('layout') <!--le digo el archivo donde llamare la seccion-->

@section('content') 
<!-- especifico el nombre de la seccion -->

	<h1><?= e($a) ?></h1> 
	<!-- se puede usar esas llaves php para imprimir texto sin echo -->
   {{-- para usar blade de forma dinamica en php se usa con los @ --}}
   {{-- directivas de blade: @empty @unless @if etc --}}
   
    <h2>Nueva lista</h2>
    <ul>
    @unless(empty($lista))
        @foreach($lista as $value)
            <li>{{ $value }}</li>
        @endforeach
    </ul>
    @else
        <p>No hay una lista</p>
    @endif
@endsection

@section('content2') 

    @parent {{--con esto se añade el contenido arriba del que estaba--}}
    <hr>

    {{-- otra directiva interesante--}}
    {{-- en este caso no necesitamos un if para comprobar si esta vacio --}}
    @forelse($lista as $value)
        <li>{{ $value }}</li>
    @empty 
        <p>No hay una lista</p>
    @endforelse


    <hr>
    {{-- si la url contiene ?empty --}}
    @if(request()->has('empty'))
        <p>esta vacio</p>
    @endif

@endsection