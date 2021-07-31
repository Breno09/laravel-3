<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>
    <form action="/login" method="post">
        @csrf
        <input type="email" name="email" placeholder="E-mail">
        <br>
        <br>
        <input type="password" name="password" placeholder="Senha">
        <button type="submit">Enviar</button>
    </form>
    <a href="/signup">Registre-se</a>
</body>
</html>