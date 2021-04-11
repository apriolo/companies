@extends('layouts.app')

@section('content')
    <h1>Cadastro de empresas</h1>

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

    <form action="/empresas/store" method="post">
        @csrf
            <div class="row g-3">
                <div class="col-12">
                    <label for="firstName" class="form-label">Titulo</label>
                    <input type="text" class="form-control" id="title" placeholder="Titulo" value="{{old('title')}}" name="title">
                </div>

                <div class="col-12">
                    <label for="address" class="form-label">Endereço</label>
                    <input type="text" class="form-control" id="address" placeholder="Endereço" value="{{old('address')}}" name="address">
                </div>

                <div class="col-sm-6">
                    <label for="telephone" class="form-label">Telefone</label>
                    <input type="text" class="form-control" id="telephone" placeholder="Telefone" value="{{old('telephone')}}" name="telephone">
                </div>

                <div class="col-sm-6">
                    <label for="postalcode" class="form-label">CEP</label>
                    <input type="text" class="form-control" id="postalcode" placeholder="CEP" value="{{old('postalcode')}}" name="postalcode">
                </div>

                <div class="col-sm-6">
                    <label for="city" class="form-label">Cidade</label>
                    <input type="text" class="form-control" id="city" placeholder="Cidade" value="{{old('city')}}" name="city">
                </div>

                <div class="col-sm-6">
                    <label for="country" class="form-label">Estado</label>
                    <input type="text" class="form-control" id="country" placeholder="Estado" value="{{old('country')}}" name="country">
                </div>

                <div class="col-12">
                    <label for="firstName" class="form-label">Descrição</label>
                    <textarea name="descript" id="descript" cols="30" rows="2" placeholder="Descrição" class="form-control">{{old('title')}}</textarea>
                </div>
                <h5>Categorias</h5>
                <div class="" style="height:100px;overflow:scroll;overflow-x: hidden;border:1px solid grey;">
                    @if ($categories)
                        @foreach ($categories as $category)
                            <div class="custom-control custom-checkbox" style="text-align:left !important">
                                <input type="checkbox" name="categoriesForm[]" value="{{$category['id']}}" class="custom-control-input" id="categoriesForm[]">
                                <label class="custom-control-label" for="categoriesForm">{{ $category['category'] }}</label>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        <button type="submit" class="btn btn-success" style="margin-top:5px;">Cadastrar</button>
    </form>
@endsection