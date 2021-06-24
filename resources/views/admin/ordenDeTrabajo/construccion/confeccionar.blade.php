@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
   
@stop

@section('content')
<div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">Confección de Orden de Construcción</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->

{{--     <div class="row">
      <div class="col-md-6">.col-md-6</div>
      <div class="col-md-6">.col-md-6</div>
    </div> --}}

    <form>
      <div class="card-body">
        
        <div class="container">

          <div class="row mb-2"> 
            <label class=" col mr-2">Pieza</label>
            <select class=" col mr-2" name="" id="">
              <option value="">----------</option>
            </select>
            <button type="button" class="btn btn-secondary col ">Crokis</button>
          </div>
        
        
          <div class="row mb-2">    
            <label class=" col mr-2">Cantidad a Realizar</label>
            <input type="numbers" class="form-control col mr-2" id="" >
            <button type="button" class="btn btn-secondary col ">Procedimiento</button> 
          </div>
        </div>
        
      </div>
      <!-- /.card-body -->

      <div class="card-footer">
        {{-- <button type="submit" class="btn btn-primary">Submit</button> --}}
      </div>
    </form>
  </div>


    
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    
@stop
