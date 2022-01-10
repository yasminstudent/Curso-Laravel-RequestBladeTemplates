
<h2>Formulário GET</h2>

@component('components.alert')
    @slot('color')
        red
    @endslot
    @slot('type')
        error
    @endslot
    testando componente
@endcomponent

<form method="GET">
    <label>Nome</label><br>
    <input type="text" name="name"><br><br>

    <label>Idade</label><br>
    <input type="number" name="age"><br><br>

    <input type="submit" name="submit" value="enviar">
</form>
