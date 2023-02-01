@include('partials.adminNavbar')
<form action="{{route('players')}}" method="post">
@csrf
  <label for="id">ID de Jugador:</label>
  <input type="number" id="idplayers" name="idplayers">
  
  <label for="name">Nombre:</label>
  <input type="text" id="firts_name" name="firts_name">
  
  <label for="budget">Apellido:</label>
  <input type="text" id="last_name" name="last_name">
  
  <label for="id">Posición:</label>
  <input type="text" id="position" name="position">

  <label for="id">Salario:</label>
  <input type="number" id="salary" name="salary">

  <label for="id">Goles:</label>
  <input type="number" id="goals" name="goals">

  <label for="id">Asistencias:</label>
  <input type="number" id="assists" name="assists">

  
  <label for="id">Partidos:</label>
  <input type="number" id="matches" name="matches">

  
  <label for="id">Fecha de nacimiento:</label>
  <input type="text" id="date_birth" name="date_birth">
  
  <label for="id">ID Team :</label>
  <input type="number" id="idteam" name="idteam">

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