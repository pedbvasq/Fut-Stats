@include('partials.navbar')


<table class="table table-striped table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nombre</th>
      <th scope="col">Apellido</th>
      <th scope="col">Posición</th>
      <th scope="col">Salario</th>
      <th scope="col">Goles</th>
      <th scope="col">Asistencias</th>
      <th scope="col">Partidos</th>
      <th scope="col">Fecha de Naciemiento</th>
      <th scope="col">Id Team</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($data as $jugadores)
      <tr>
        <td> {{$jugadores['idplayers']}}</td>
        <td> {{$jugadores['firts_name']}}</td>
        <td> {{$jugadores['last_name']}}</td>
        <td> {{$jugadores['position']}}</td>
        <td> {{$jugadores['salary']}}</td>
        <td> {{$jugadores['goals']}}</td>
        <td> {{$jugadores['assists']}}</td>
        <td> {{$jugadores['matches']}}</td>
        <td> {{$jugadores['date_birth']}}</td>
        <td> {{$jugadores['idteam']}}</td>
      </tr>
      @endforeach
  </tbody>
</table>