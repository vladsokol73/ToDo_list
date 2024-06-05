<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="/css/home.css">
    <link rel="stylesheet" href="/css/header.css">
    <title>ToDo_list</title>
</head>

</html>

@include("inc.header")
@section("content")
    <body>
    <section class="home">
        <div class="home-detail">
            <h3>ToDo_list</h3>
            <h3>Тестовое задание</h3>
            <p>Здравствуйте!</p>
        </div>
    </section>
    </body>
@endsection

@yield("content")
