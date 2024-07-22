  <main>
    <div class="container">
    
    <h3 class=" text-center">Agregar nuevo socio</h3>
    <hr />
    <?= $validation->listErrors() ?>
   <?php
    echo form_open('clubderugby/guarda',array('class' => "form-group row g-3"));
    ?>
    <!-- <form class="row g-3" method="post" action="http://localhost/CI4/index.php/clubderugby/guarda" > -->
    <!-- <div class="form-group row g-3"> -->
      <div class="col-md-4">
        <label for="nombrejugador" class="form-label">Nombre</label>
        <input type="text" class="form-control" id="nombrejugador" name="nombre">
      </div>
      <div class="col-md-4">
        <label for="apellidojugador" class="form-label">Apellido</label>
        <input type="text" class="form-control" id="apellidojugador" name="apellido">
      </div>
      <div class="col-md-4">
        <label for="dnijugador" class="form-label">DNI</label>
        <input type="text" class="form-control" id="dnijugador" name="dni">
      </div>
      <div class="col-md-4">
        <label for="fnacjugador" class="form-label">Fecha de nacimiento</label>
        <input type="date" class="form-control" id="fnacjugador" name="fnacjugador">
      </div>
      <div class="col-md-4">
        <label for="categoria" class="form-label">Categoría</label>
        <select id="categoria" class="form-select" name="categoria" onchange="valores()">
          <option selected value="Infantiles">Infantiles</option>
          <option value="Juveniles">Juveniles</option>
          <option value="Mayores">Mayores</option>
          <option value="Veterano">Veterano</option>
        </select>
        <script>
          function valores(){
            let categoria = document.getElementById("categoria").value;

            if(categoria === "Infantiles"){

            }
          }
          
        </script>
      </div>
      
      <div class="col-md-4">
        <label for="direccion" class="form-label">Dirección</label>
        <input type="text" class="form-control" id="direccion" name="direccion">
      </div>
      <div class="col-md-4">
        <label for="telefono" class="form-label">Teléfono</label>
        <input type="text" class="form-control" id="telefono" name="telefono">
      </div>
      <div class="col-12 text-center">
        <button type="submit" class="btn btn-primary">Confirmar</button>
        <button type="submit" class="btn btn-primary">Cancelar</button>
      </div>
      
    <!-- </form> -->
    <!-- </div> -->
    <?php
        echo form_close();
      ?>
    </div>
  </main>
