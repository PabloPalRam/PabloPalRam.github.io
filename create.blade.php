@extends('app.base')

@section('title','Argo create movie')

@section('content')

<!DOCTYPE html>
<html>
<head>
    <title>Formulario de Películas</title>
</head>
<body>
    <h1>Formulario de Películas</h1>

    <form action="procesar_formulario.php" method="post">
        <label for="title">Título:</label>
        <input type="text" id="title" name="title" maxlength="60" required>

        <br>

        <label for="director">Director:</label>
        <input type="text" id="director" name="director" maxlength="110" value=" ">

        <br>

        <label for="year">Año de estreno:</label>
        <input type="number" id="year" name="year" min="1900" max="2099" step="1" required>

        <br>

        <label for="genre">Género:</label>
        <input type="text" id="genre" name="genre" maxlength="50" required>

        <br>

        <input type="submit" value="Agregar Película">
    </form>
</body>
</html>


@endsection