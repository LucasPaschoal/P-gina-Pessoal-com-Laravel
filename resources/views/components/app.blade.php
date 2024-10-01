<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="{{ url('/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ url('/css/style.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Minha Página Pessoal</title>
</head>
<body>
    <x-navbar />

    <div class="content" style="background: linear-gradient(to right, #4a90e2, #9013fe);background-color: rgba(255, 255, 255, 0.8); padding: 50px 0;"> 
        @yield('content')
    </div>
    
    <script src="{{ url('/js/bootstrap.min.js') }}"></script>

    <x-footer />
</body>
</html>