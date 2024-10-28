<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <tallstackui:script /> 
        @livewireStyles
        <!-- Styles -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="antialiased font-sans">

        <h3>
            ['id' => 1, 'name' => 'Joao', 'emp_number' => 511],<br>
            ['id' => 2, 'name' => 'Maria', 'emp_number' => 512], <br>
            ['id' => 3, 'name' => 'Pedro', 'emp_number' => 523],<br>
            ['id' => 4, 'name' => 'Ana', 'emp_number' => 524],<br>

        </h3>
<br><br><br> Pesquise por algum desses nomes ou emp_number.<br><br><br>

        <x-select.styled label="Pesquisar colaborador *" :request="[
        'url' => route('test'),
        'method' => 'post',
        ]" select="label:name|value:id" required />

<br><br>
No geral eu gostaria que quando eu digitar por exemplo '523' na busca liste 'Pedro'
    </body>
    @livewireScripts
</html>
