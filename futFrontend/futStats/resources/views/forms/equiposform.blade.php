@include('partials.adminNavbar')
<form action="{{route('teams')}}" method="post">
@csrf
  <label for="id">ID de Equipo:</label>
  <input type="number" id="idteams" name="idteams">
  
  <label for="name">Nombre del Equipo:</label>
  <input type="text" id="nameteam" name="nameteam">
  
  <label for="budget">Presupuesto (USD):</label>
  <input type="text" id="budget" name="budget">
  
  <label for="id">Abreviatura:</label>
  <input type="text" id="ab" name="ab">

  <label for="id">ID de Liga:</label>
  <input type="number" id="idleague" name="idleague">

  <label for="id">Puntos:</label>
  <input type="number" id="points" name="points">

  <label for="id">Titulos:</label>
  <input type="number" id="titles" name="titles">

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