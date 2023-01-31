
 <form action="{{route('teams')}}" method="post">
    @csrf
    <div class="form-row">
        {{-- id --}}
         <div class="col-md-4 mb-3">
                <label for="validationDefault01">Id</label>
                <input type="number" class="form-control" id="validationDefault01" placeholder="3" name="idteams" required>
         </div>
         {{-- nombre --}}
          <div class="col-md-4 mb-3">
            <label for="validationDefault01">Nombre</label>
            <input type="text" class="form-control" id="validationDefault01" placeholder="Pedro" name="nameteam" required>
          </div>
          {{-- ab --}}
          <div class="col-md-4 mb-3">
            <label for="validationDefaultUsername">Ab</label>
      
              <input type="text" class="form-control" id="validationDefaultUsername" name="ab"placeholder="MC" aria-describedby="inputGroupPrepend2" required>
         </div>
           {{-- Recaudacion --}}
         <div class="col-md-4 mb-3">
            <label for="validationDefaultUsername">Recaudacion</label>
            <input type="number" class="form-control" id="validationDefaultUsername" name="budget"placeholder="MC" aria-describedby="inputGroupPrepend2" required>
         </div>
                 {{-- Puntos --}}
        <div class="col-md-4 mb-3">
             <label for="validationDefaultUsername">Puntos</label>
             <input type="number" class="form-control" id="validationDefaultUsername" name="points"placeholder="MC" aria-describedby="inputGroupPrepend2" required>
         </div>

          {{-- liga --}}
         <div class="col-md-4 mb-3">
            <label for="validationDefaultUsername">Idliga</label>
            <input type="number" class="form-control" id="validationDefaultUsername" name="idleague" placeholder="MC" aria-describedby="inputGroupPrepend2" required>
         </div>
          {{-- titulos --}}
          <div class="col-md-4 mb-3">
            <label for="validationDefaultUsername">Titulos</label>
             <input type="number" class="form-control" id="validationDefaultUsername" name="titles"placeholder="MC" aria-describedby="inputGroupPrepend2" required>
         </div>
    </div>
   
    <button class="btn btn-primary" type="submit">Submit form</button>
</form>