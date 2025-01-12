@extends('layout.pagelogin')

@section('title','Página de registro')
@section('content')
<div class="container d-flex justify-content-center align-items-center mt-40">
    <form class="w-50">
        <div class="mb-3">
            <label for="nameUser" class="form-label w-30">Nome</label>
            <input type="text" class="form-control" id="nameUser" placeholder="Insira seu nome" @required(true) required>
        </div>
        <div class="mb-3">
            <label for="niverDate" class="form-label w-30">Data de nascimento</label>
            <input type="date" class="form-control" id="niverDate" placeholder="Insira sua data de nascimento">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label" >Email</label>
            <input type="email" class="form-control" id="email" placeholder="Insira seu email"  pattern=".*@.*" @required(true) required>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label" >Senha</label>
            <input type="password" class="form-control" id="password" placeholder="Insira sua senha" @required(true) required>
        </div>
        <button type="submit" class="btn btn-primary w-100">Registrar</button>
        <p class="w-100 mt-10">Caso já tenha uma conta registrada</p>
        <a type="submit" class="btn btn-outline-primary w-100 mt-2" href="{{ route('login') }}">Voltar</a>
    </form>
</div>

@endsection