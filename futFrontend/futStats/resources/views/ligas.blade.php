@include('partials.navbar')
<table class="table table-striped table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nombre</th>
      <th scope="col">Presupuesto</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($data as $liga)
      <tr>
        <td> {{$liga['idleague']}}</td>
        <td> {{$liga['leaguename']}}</td>
        <td> {{$liga['budget']}}</td>
      </tr>
      @endforeach
  </tbody>
</table>