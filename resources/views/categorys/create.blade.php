<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    <h1>Cadastrar Categoria</h1>
    <form action="{{route('categorys.store')}}" method="post">
        @csrf
        <label for="name">Nome:</label>
        <input type="text" name="name" >
        <input type="submit" value="Criar">

    </form>
</body>
</html>