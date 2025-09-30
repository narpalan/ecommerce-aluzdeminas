<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'A Luz de Minas - Velas e Luminárias')</title>
    <meta name="description" content="@yield('description', 'Velas artesanais e luminárias exclusivas. Encontre produtos únicos para iluminar seu espaço com estilo e qualidade. Crie um ambiente acolhedor e aconchegante com nossas velas artesanais.')">
    <!-- CSS do Vite -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    @include('partials.navbar')
    <main>
        @yield('content')
    </main>

    <div id="app"></div>
</body>
</html>