<x-layout title="Novo lutador">
    <form action="/lutadores/salvar" method="post">
        @csrf
        <div class="mb-3">
            <label for="nome" class="form-label">Nome:</label>
            <input type="text" id="nome" name="nome" class="form-control">
        </div>

        <button class="btn btn-primary">Adicionar</button>
    </form>
</x-layout>