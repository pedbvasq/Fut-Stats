@include('partials.adminNavbar')
<form action="{{route('league')}}" method="post">
@csrf
  <label for="id">ID de Liga:</label>
  <input type="number" id="idleague" name="idleague">
  
  <label for="name">Nombre de Liga:</label>
  <input type="text" id="leaguename" name="leaguename">
  
  <label for="budget">Presupuesto (USD):</label>
  <input type="text" id="budget" name="budget">
  
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