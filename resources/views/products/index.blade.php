<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos</title>
</head>
<body>
    <h1>Produtos</h1>
    <a href="/products/create">Criar</a>
    <hr>
    @foreach ($products as $item)
    <a href="/products/{{ $item->id }}">
        {{ $item->name }}
    </a><br>
    @endforeach
</body>
</html>