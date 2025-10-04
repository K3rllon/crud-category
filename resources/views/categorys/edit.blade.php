<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    <h1>Editar Categoria</h1>
    <form action="{{route('categorys.update', $category->id)}}" method="post">
        @method("put")
        @csrf
        <label for="name">Nome:</label>
        <input type="text" name="name" value="{{ $category->name}}">
        <input type="submit" value="Editar">

    </form>
</body>
</html>