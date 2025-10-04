<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categorys</title>
</head>
<body>
    <h1>Categorias</h1>
    <ul>
        @foreach($categorys as $category)
        <li> {{$category->name}} <a href="{{ route('categorys.edit', $category->id) }}">
        <button>Editar Categoria</button>
    </a></li>
        @endforeach
    </ul>
    <a href="{{ route('categorys.create') }}">
        <button>Cadastrar Nova Categoria</button>
    </a>
</body>
</html>