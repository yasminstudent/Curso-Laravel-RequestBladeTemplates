@extends('layouts.admin')

@section('title', 'POST')

@section('content')
    <h2>Formulário POST</h2>

    (atalho criado em app\Providers\AppServiceProvider.php)

    <x-alert>
        @slot('color')
            #FFBF00
        @endslot
        @slot('type')
            aviso
        @endslot
        testando componente
    </x-alert>

    <form method="POST">
        @csrf

        <label>Nome</label><br>
        <input type="text" name="name"><br><br>

        <label>Idade</label><br>
        <input type="number" name="age"><br><br>

        <input type="submit" name="submit" value="enviar">
    </form>
@endsection
