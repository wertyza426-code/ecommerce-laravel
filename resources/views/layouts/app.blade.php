<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Mi Ecommerce Laravel</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body class="font-sans antialiased bg-gray-100">

    <div class="min-h-screen">

        @include('layouts.navigation')

        <main class="p-6">

            @yield('content')

        </main>

    </div>

</body>

</html>
