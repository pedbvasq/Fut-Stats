@include('partials.adminNavbar')
@include('partials.button')
<table class="table table-striped table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nombre</th>
      <th scope="col">Presupuesto</th>
      <th scope="col">Puntos</th>
      <th scope="col">Titulos</th>
      <th scope="col">Acciones</th>
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
        <td> 
            <a> 
                    <img src="{{ asset('/assets/images/edit.jpg') }}" class="img-fluid" width="50"> 
                </a>

                <a> 
                    <img src="{{ asset('/assets/images/delete.png') }}" class="img-fluid" width="70"> 
            </a>
        </td>
      </tr>
      @endforeach
  </tbody>
</table>