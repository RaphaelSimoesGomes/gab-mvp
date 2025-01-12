@extends('layout.pagelogin')

@section('title', 'Página de login')
@section('content')
<div class="container d-flex justify-content-center align-items-center mt-40">
    <form class="w-50">
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" placeholder="Insira seu email" @required(true) required>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Senha</label>
            <input type="password" class="form-control" id="password" placeholder="Insira sua senha" @required(true) required>
        </div>
        <button type="submit" class="btn btn-primary w-100">Entrar</button>
        <p class="w-100 mt-10">Caso não tenha uma conta</p>
        <a type="submit" class="btn btn-secondary w-100 mt-2" href="{{ route('register') }}">Registrar</a>
    </form>
</div>

@endsection 