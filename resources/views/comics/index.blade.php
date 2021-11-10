<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- Font Awesome  --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>DC Comics</title>
</head>
<body>
    @include('partials.header')
    <main>
        <div class="comics">
            @foreach ($comics as $comic)
            <div class="single-comic">
                <a href="{{route("comics.show", $comic["id"])}}">
                    <div class="image">
                        <img src="{{$comic["thumb"]}}" alt="">
                    </div>
                    <h4>{{strtoupper($comic["series"])}}</h4>
                </a>
            </div>
            @endforeach
        </div>
    </main> 
</body>
</html>