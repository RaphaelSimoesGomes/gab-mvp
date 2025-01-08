<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Home</title>
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.10.2/dist/cdn.min.js" defer></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
<!-- Ele permite que o elemento saiba e lembre de informações (como números ou seleções) e responda automaticamente às suas ações, sem precisar recarregar a página.  -->
    <div class="container mt-5" x-data="{ selected: [] }">
        <h1 class="text-center mb-4">Selecione as Perguntas</h1>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

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

            <!-- Input oculto para enviar os valores selecionados -->
            <input type="hidden" name="selected" :value="JSON.stringify(selected)">

            <div class="text-center mt-4">
                <button type="submit" class="btn btn-primary" action="{{ route('home') }}">Salvar Seleção</button>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
