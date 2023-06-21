<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>@yield('title')</title>
</head>
<body>
    <header class="header">
        <a href="/" class="brand"><h2>Grocery Shop</h2></a>

        <div class="icons">
            <a @yield('admin') href="/admin" title="Admin"><i class="fas fa-cog"></i></a>
        </div>
    </header>
    @yield('content')
    <footer class="py-4 text-light" style="background-color: #222;">
        <div class="container text-center"><h4>Everything is in Here</h4>
        </div>
    </footer>

    <script src="js/script.js"></script>
</body>
</html>
