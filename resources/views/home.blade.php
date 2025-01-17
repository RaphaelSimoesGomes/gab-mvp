@extends('layout.app')

@section('title', 'Home')
@section('content')
    <div class="container mt-5" x-data="{ selected: [], showAlert: false }">
        <h1 class="text-center mb-4">Selecione as Perguntas</h1>

        <!-- Alerta de sucesso -->
        <div x-show="showAlert" class="alert alert-success" x-cloak>
            Seleção salva com sucesso!
        </div>

        <form method="POST" action="{{ route('home') }}">
            @csrf

            <table class="table">
                <tbody>
                    <tr class="row">
                        @foreach ($questions as $question)
                            <td class="col-4">
                                <button
                                    type="button"
                                    class="box p-2 border rounded bg-light w-100 h-100 btn"
                                    :class="selected.includes({{ $question['id'] }}) ? 'selected border-success' : ''"
                                    @click="selected.includes({{ $question['id'] }}) 
                                        ? selected = selected.filter(id => id !== {{ $question['id'] }}) 
                                        : selected.push({{ $question['id'] }})"
                                >
                                    <h3>{{ $question['title'] }}</h3>
                                    <p>{{ $question['description'] }}</p>
                                </button>
                            </td>
                        @endforeach
                    </tr>
                </tbody>
            </table>

            <input type="hidden" name="selected" :value="JSON.stringify(selected)">

            <div class="text-center mt-4">
                <button type="button" class="btn btn-primary"
                    @click="
                        showAlert = true;
                        setTimeout(() => {
                            window.location.href = '{{ route('login') }}';
                        }, 800);
                    "
                >
                    Salvar Seleção
                </button>
            </div>
        </form>
    </div>
@endsection
