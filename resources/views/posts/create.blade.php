<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulário</title>

    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
</head>
<body>

<div class="container my-5">
    <form action="{{route('posts.store')}}" method="post" autocomplete="off">

        @csrf

        <div class="form-group">
            <label for="title">Título:</label>
            <input type="text" class="form-control" id="title" name="title">
        </div>

        <div class="form-group">
            <label for="subtitle">Subtítulo:</label>
            <input type="text" class="form-control" id="subtitle" name="subtitle">
        </div>

        <div class="form-group">
            <label for="description">Descrição:</label>
            <input type="text" class="form-control" id="description" name="description">
        </div>

        <button class="btn btn-primary mt-3">Enviar!</button>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>
</html>
