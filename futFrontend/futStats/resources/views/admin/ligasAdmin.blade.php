@include('partials.adminNavbar')

<div id= "button">
    <a href ="/ligaForm"> 
        <img src="{{ asset('/assets/images/plus.png') }}" class="img-fluid" width="50"> 
    </a>
<div>


<table class="table table-striped table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nombre</th>
      <th scope="col">Presupuesto</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($data as $liga)
      <tr>
        <td> {{$liga['idleague']}}</td>
        <td> {{$liga['leaguename']}}</td>
        <td> {{$liga['budget']}}</td>
        <td> 
            <a href="{{route('league.view',$liga['idleague'])}}"> 
                <img src="{{ asset('/assets/images/edit.jpg') }}" class="img-fluid" width="50"> 
            </a>

            <a href="{{route('league.delete',$liga['idleague'])}}"> 
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