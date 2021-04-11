@extends('layouts.app')

@section('content')
<div class="row">
    <h1>Empresas</h1>
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <form action="{{route('empresas.search')}}" method="GET">
                @csrf
                <input type="text" name="filter" class="form-control" placeholder="Pesquisar">
                <button type="submit" class="btn btn-info" style="margin-top:5px;">Procurar </button>
            </form>
        </div>
</div>
@endsection