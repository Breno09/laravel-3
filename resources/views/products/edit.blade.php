<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produto</title>
</head>
<body>
    <h1>Editar Produto</h1>
    <form action="/products/update{{ $product->id }}"
     method="post">
    @csrf
    <input name="name" value="{{ $product->name}}">
    <input name="description" value="{{ $product->description }}">
    <input type="number" name="price" value="{{ $product->price }}">
    <button type="submit">Enviar</button>
</form>
<a href="/products/delete/{{ $product->id }}">
Deleta
</a>
</body>
</html>