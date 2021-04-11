@extends('layouts.app')

@section('content')
    <div class="row" style="margin-top:5px;text-align:center !important">
        <div class="card">
            <div class="card-body">
                <h1 class="card-title">{{ $company['title'] }}</h1>
                <p class="card-text">Telefone : {{ $company['telephone'] }}</p>
                <p class="card-text">Endereço : {{ $company['address'] }}</p>
                <p class="card-text">CEP : {{ $company['postalcode'] }}</p>
                <p class="card-text">Cidade : {{ $company['city'] }}</p>
                <p class="card-text">Estado : {{ $company['country'] }}</p>
                <p class="card-text">Descrição : {{ $company['descript'] }}</p>
                @if ($company['companies'])
                    <h3>Categorias</h3>
                    @foreach ($company['companies'] as $cat)
                        <p class="card-text">{{$cat['category']}}</p>
                    @endforeach
                @endif
            </div>
        </div>
    </div>
@endsection