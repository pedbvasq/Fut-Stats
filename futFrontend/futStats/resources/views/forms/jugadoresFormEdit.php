@include('partials.adminNavbar')
<form action="{{route('teams.update')}}" method="post">
@csrf
<label for="id">ID de Jugador:</label>
  <input type="number" id="idplayers" name="idplayers" value="{{$player['idteams']}}">
  
  <label for="name">Nombre:</label>
  <input type="text" id="firts_name" name="firts_name"  value="{{$player['firts_name']}}">
  
  <label for="budget">Apellido:</label>
  <input type="text" id="last_name" name="last_name"  value="{{$player['last_name']}}">
  
  <label for="id">Posición:</label>
  <input type="text" id="position" name="position" value="{{$player['position']}}">

  <label for="id">Salario:</label>
  <input type="number" id="salary" name="salary" value="{{$player['salary']}}">

  <label for="id">Goles:</label>
  <input type="number" id="goals" name="goals" value="{{$player['goals']}}">

  <label for="id">Asistencias:</label>
  <input type="number" id="assists" name="assists" value="{{$player['assists']}}">

  <label for="id">Partidos:</label>
  <input type="number" id="matches" name="matches" value="{{$player['matches']}}">
  
  <label for="id">Fecha de nacimiento:</label>
  <input type="number" id="date_birth" name="date_birth" value="{{$player['date_birth']}}">
  
  <label for="id">ID Team :</label>
  <input type="number" id="idteam" name="idteam" value="{{$player['idteam']}}">

  <input type="submit" value="Submit">

</form>

<style>
  form {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    height: 100vh;
  }
  label {
    display: block;
    margin-bottom: 10px;
    color: white;
  }
  input[type="text"] {
    padding: 5px;
    font-size: 14px;
    width: ;
    margin-bottom: 20px;
  }
  input[type="submit"] {
    padding: 10px 20px;
    background-color: darkred;
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    margin-top: 20px;
  }
</style>