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
    @if($posts)
        @foreach($posts as $post)
            <section class="articles_list">
                <article class="mb-5">
                    <h1>Título: {{$post->title}}</h1>
                    <h2>Subtítulo: {{$post->subtitle}}</h2>
                    <p>Descrição: {{$post->description}}</p>
                    <small>Criado em: {{ date('d/m/Y H:i', strtotime($post->created_at))}} - Editado em: {{ date('d/m/Y H:i', strtotime($post->updated_at))}}</small>
                </article>
                <hr>
            </section>
        @endforeach
    @else
        <p>Sem registro Cadastrados!</p>
    @endif

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>
</html>
