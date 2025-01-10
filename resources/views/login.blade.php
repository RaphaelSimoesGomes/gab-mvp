@extends('layout.app')

@section('title', 'Login')
@section('content')
<div class="container d-flex justify-content-center align-items-center vh-100">
    <form class="w-50">
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" placeholder="Insira seu email">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Senha</label>
            <input type="password" class="form-control" id="password" placeholder="Insira sua senha">
        </div>
        <button type="submit" class="btn btn-primary w-100">Entrar</button>
    </form>
</div>

@endsection 