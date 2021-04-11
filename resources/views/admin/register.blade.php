@extends('layouts.app')

@section('content')
    <h1>Registrar</h1>

    @if ($errors->any())
    <div class="row text-center">
        <div class="col-md-4"></div>
        <div class="alert alert-danger col-md-4" role="alert">
            <ul>
                @foreach ($errors->all() as $error)
                    <li> {{ $error  }} </li>
                @endforeach
            </ul>
        </div>
    </div>
    @endif

    <form action="{{route('empresas.save')}}" method="post">
        @csrf
            <div class="row g-3">
                <div class="col-12">
                    <label for="login" class="form-label">Login</label>
                    <input type="text" class="form-control" id="login" placeholder="Login" value="{{old('login')}}" name="login">
                </div>

                <div class="col-12">
                    <label for="password" class="form-label">Senha</label>
                    <input type="password" class="form-control" id="password" placeholder="password" value="{{old('password')}}" name="password">
                </div>
        <button type="submit" class="btn btn-success" style="margin-top:5px !important; width:100px;margin:auto">Registrar</button>
    </form>
@endsection