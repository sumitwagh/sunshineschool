<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
</head>
<body>
    <div class="container py-4">

        <div class="d-flex justify-content-center pb-2">
            <a href="/"><img src="{{ asset('assets/img/sunshine.jpg') }}" class="" alt="Image" height="100" width="100"></a>
        </div>
        <h2 class="text-center pb-4 mb-2 border-bottom"><a href="/">Sunshine English School, Sillod</a></h2>
        
        @include('flash::message')

        @yield('content')
        
    </div>
</body>
</html>