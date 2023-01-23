@include('partials.navbar')
<table class="table table-striped table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nombre</th>
      <th scope="col">Presupuesto</th>
      <th scope="col">Puntos</th>
      <th scope="col">Titulos</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($data as $equipo)
      <tr>
        <td> {{$equipo['idteams']}}</td>
        <td> {{$equipo['nameteam']}}</td>
        <td> {{$equipo['budget']}}</td>
        <td> {{$equipo['points']}}</td>
        <td> {{$equipo['titles']}}</td>
      </tr>
      @endforeach
  </tbody>
</table>