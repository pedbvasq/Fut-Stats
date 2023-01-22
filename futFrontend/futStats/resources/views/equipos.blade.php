@include('partials.navbar')
<div>
    <table  class="table">
        <thead>
            <tr>
                <th scope="col">nombre</th>
                <th scope="col">puntos</th>
                <th scope="col">titulos</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $equipo)
            <td> {{$equipo['nameteam']}}</td>
            <td> {{$equipo['points']}}</td>
            <td> {{$equipo['titles']}}</td>
            @endforeach
        </tbody>
    
    </table>
</div>
