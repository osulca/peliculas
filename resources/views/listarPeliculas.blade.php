<table border="1">
    <tr>
        <th>Titulo</th>
        <th>Genero</th>
        <th>Año</th>
        <th>Descripción</th>
        <th>Poster</th>
    </tr>
    @foreach ($peliculas as $pelicula) 
    <tr>
        <td>{{$pelicula["titulo"]}}</td>
        <td>{{$pelicula["genero"]}}genero</td>
        <td>{{$pelicula["año"]}}</td>
        <td>{{$pelicula["descripcion"]}}Descripción</th>
        <td>{{$pelicula["poster"]}}Poster</td>
        <td><a href="/peliculas/ver/{{$pelicula["id"]}}">Ver más</a></td>
    </tr>
    @endforeach
</table>