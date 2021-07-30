<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produto</title>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
            margin: 0;
            padding: 0;
        }
        body {
            display: flex;
            justify-content: center;
            flex-direction: column;
            align-items: center;
            background-image: url(https://images.unsplash.com/photo-1593708038354-2823ee708e3d?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=376&q=80);
        }
        form{
            height: 150px;
            padding: 20px;
            display: flex;
            flex-direction: column;
            justify-content: space-around;
            align-items: center;
            background-color: #bbb;
            border-radius: 18px;
        }
    </style>
</head>
<body>

    <h1>Produto</h1>
    <ul>
        <li>Nome: {{ $product->name }}</li>
        <li>Descrição: {{ $product->description }}</li>
        <li>Preço: R$ {{ $product->price }}</li>
    </ul>
    <a href="/products/edit/{{ $product->id }}">
    Editar
</a>
</body>
</html>