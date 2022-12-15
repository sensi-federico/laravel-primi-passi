<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>

    <header id="site_header">
        <nav class="nav justify-content-center">
            <a class="nav-link" href="{{route('home')}}">Home</a>
            <a class="nav-link" href="{{route('about')}}">About</a>
            <a class="nav-link" href="{{route('skills')}}">Skills</a>
        </nav>
    </header>
    <!-- /#site_header -->
    <main id="site_main">
        <div class="center-in-page d-flex flex-column align-items-center justify-content-center vh-100">
            <h1 class="text-center">{{$title}}</h1>
            <h3 class="text-center">{{$text}}</h3>
        </div>
    </main>
    <!-- /#site_main -->
    <footer id="site_footer"></footer>
    <!-- /#site_footer -->

</body>

</html>