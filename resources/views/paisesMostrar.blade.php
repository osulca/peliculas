<table>
<tr>
    <td>
        Nombre: {{$datos[0]["name"]["official"]}}<br>
        Moneda: 
        @foreach ($datos[0]["currencies"] as $currencie)
                {{$currencie["name"]}}
        @endforeach<br>
        Capital: {{$datos[0]["capital"][0]}}  <br>
        Fronteras: 
        <ol>
        @foreach ($datos[0]["borders"] as $border)
                <li>{{$border}}</li>
        @endforeach 
        </ol>
        <a href="https://www.google.com/maps/place/
        {{$datos[0]["capitalInfo"]["latlng"][0]}},
        {{$datos[0]["capitalInfo"]["latlng"][1]}}">Ver Ubicacion</a>
    </td>
    <td>
        <img width="100px" src="{{$datos[0]["flags"]["svg"]}}"/>
    <td>
    <td>
        <img width="100px" src="{{$datos[0]["coatOfArms"]["svg"]}}"/>
    <td>
<tr>
</table>