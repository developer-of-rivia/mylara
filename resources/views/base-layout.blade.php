<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <title>
        @yield('page_title')
    </title>
    <style>
        .bad-message{
            display: none;
        }
        .form_bad .bad-message{
            display: block;
            margin-top: 8px;
            margin-bottom: 8px;
            color: tomato;
        }
    </style>
</head>
<body>


    <nav class="navbar bg-light">
        <div class="container">
            <a class="navbar-brand">Navbar</a>
            
            @include('header-status')

        </div>
    </nav>


    @yield('specific_content')
</body>
</html>