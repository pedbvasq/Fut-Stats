@include('partials.adminNavbar')

<div id= "button">
    <a href ="/jugadoresform"> 
        <img src="{{ asset('/assets/images/plus.png') }}" class="img-fluid" width="50"> 
    </a>
<div>


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
      <th scope="col">Acciones</th>
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
        <td> 
            <a href="{{route('players.view',$jugadores['idplayers'])}}"> 
                    <img src="{{ asset('/assets/images/edit.jpg') }}" class="img-fluid" width="50"> 
                </a>

                <a  href="{{route('players.delete',$jugadores['idplayers'])}}"> 
                    <img src="{{ asset('/assets/images/delete.png') }}" class="img-fluid" width="70"> 
            </a>
        </td>
      </tr>
      @endforeach
  </tbody>
</table>

<style>
    #button{
        padding-top: 25px;
        text-align: center;
        padding-bottom: 25px;
    }

</style>