@extends('adminlte::page')

@section('title', 'Horarios Maquinas')

@section('content_header')
   Orden de trabajo xxxx
@stop

@section('content')
<div class="card card-secondary">

    <div class="card-header">
    <h3 class="card-title">Paso x</h3>
    </div>

    <div class="card-body">
    
        <div class="row mb-2"> 
            <h2 id="screen" class="col mr-2">00:00:00</h2>
            <button onclick="start()" class=" btn btn-primary  col mr-2">Comenzar</button>
            <button onclick="stop()" class=" btn btn-primary  col mr-2">Terminar</button>
        </div>
   
    </div>
</div>

<script src="{{ asset('js/cronometro.js') }}"></script>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    
@stop

