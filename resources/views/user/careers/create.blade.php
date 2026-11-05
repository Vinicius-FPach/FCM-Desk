<h1>Criar Carreira</h1>

<form action="{{ route('admin.career.store') }}" method="POST">
    @csrf

    <label for="name">Nome</label>
    <input type="text" name="name" id="name">

    <button type="submit">Salvar</button>