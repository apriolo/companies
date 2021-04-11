@extends('layouts.app')

@section('content')
<div class="row">
    <h1>Empresas</h1>
    @if ($empresas)
        @foreach ($empresas as $emp)
            <div class="row" style="margin-top:5px;text-align:left !important">
                <div class="card">
                    <div class="card-body">
                        <a href="{{ route('empresas.show',['id' => $emp->id ]) }}"> <h5 class="card-title">{{ $emp->title }}</h5></a>
                        <p class="card-text">{{ $emp->address }}, {{ $emp->city }}</p>
                        <!-- <a href="#" class="btn btn-primary">Visitar</a> -->
                        <a href="{{ route('empresas.show',['id' => $emp->id ]) }}"> <p class="card-text">ver mais...</p> </a>
                    </div>
                </div>
            </div>
        @endforeach
    @else
        Nenhum registro encontrado <a href="{{route('empresas.home')}}">Voltar</a>
    @endif
    <div class="d-flex justify-content-center">
        @if (isset($filters))
            {{ $empresas->appends($filters)->links('layouts.pagination') }}
        @else
            {{$empresas->links('layouts.pagination')}}
        @endif
    </div>
</div>
@endsection