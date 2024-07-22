<script type="text/javascript">
  
          function valores(){
            document.getElementById("catinfantiles").style.opacity = "0";
            document.getElementById("catveterano").style.opacity = "0";
            let categoria = document.getElementById("categoria").value;
            if(categoria === "Infantiles"){
              document.getElementById("catinfantiles").style.opacity = "1";
            }
            if(categoria === "Veterano"){
              document.getElementById("catveterano").style.opacity = "1";
            } 
          }
        </script>
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
        <input type="text" class="form-control" id="nombrejugador" name="nombre" value="<?= old('nombre') ?>">
      </div>
      <div class="col-md-4">
        <label for="apellidojugador" class="form-label">Apellido</label>
        <input type="text" class="form-control" id="apellidojugador" name="apellido" value="<?= old('apellido') ?>">
      </div>
      <div class="col-md-4">
        <label for="dnijugador" class="form-label">DNI</label>
        <input type="number" class="form-control" id="dnijugador" name="dni" value="<?= old('dni') ?>">
      </div>
      <div class="col-md-4">
        <label for="fnacjugador" class="form-label">Fecha de nacimiento</label>
        <input type="date" class="form-control" id="fnacjugador" name="fnacjugador" value="<?= old('fnacjugador') ?>" >
      </div>
      <script> 
        const fnacjugador = document.getElementById("fnacjugador");
        const edad = document.getElementById("edad");

        const calcularEdad = (fechaNacimiento) => {
            const fechaActual = new Date();
            const anoActual = parseInt(fechaActual.getFullYear());
            const mesActual = parseInt(fechaActual.getMonth()) + 1;
            const diaActual = parseInt(fechaActual.getDate());

            const anoNacimiento = parseInt(String(fechaNacimiento).substring(0, 4));
            const mesNacimiento = parseInt(String(fechaNacimiento).substring(5, 7));
            const diaNacimiento = parseInt(String(fechaNacimiento).substring(8, 10));

            let edad = anoActual - anoNacimiento;
            if (mesActual < mesNacimiento) {
                edad--;
            } else if (mesActual === mesNacimiento) {
                if (diaActual < diaNacimiento) {
                    edad--;
                }
            }
            return edad;
        };
      
        window.addEventListener('load', function () {
          fnacjugador.addEventListener('change', function () {
              if (this.value) {
                  const edad = calcularEdad(this.value);
                  // edad.innerText = `La edad es: ${calcularEdad(this.value)} años`;
                  
                  /// mayores a 30
                  if(edad > 30){
                    document.getElementById("categoria").value = "Veterano";
                    document.getElementById("catveterano").style.opacity = "1";
                    document.getElementById("catinfantiles").style.opacity = "0";
                    document.getElementById("enfermedad").setAttribute("required","true");
                    document.getElementById("enfermedad").removeAttribute("readonly");
                    // document.getElementById("nombretutor").required = false;
                    document.getElementById("nombretutor").removeAttribute("required");
                    document.getElementById("nombretutor").setAttribute("readonly","true");
                    document.getElementById("dnitutor").required = false;
                    document.getElementById("dnitutor").setAttribute("readonly","true");
                    document.getElementById("nombretutor").value = "";
                    document.getElementById("dnitutor").value = "";
                    
                  }

                  // 19 a 30
                  if(edad >= 19 && edad <= 30){
                    document.getElementById("categoria").value  = "Mayores";
                    document.getElementById("catinfantiles").style.opacity = "0";
                    document.getElementById("catveterano").style.opacity = "0";
                    document.getElementById("nombretutor").required = false;
                    document.getElementById("nombretutor").setAttribute("readonly","true");
                    document.getElementById("dnitutor").required = false;
                    document.getElementById("dnitutor").setAttribute("readonly","true");
                    document.getElementById("enfermedad").required = false;
                    document.getElementById("enfermedad").setAttribute("readonly","true");
                    document.getElementById("nombretutor").value = "";
                    document.getElementById("dnitutor").value = "";
                    document.getElementById("enfermedad").value = "";
                  }

                  /// 13 a 18
                  if(edad >= 13 && edad <= 18){
                    document.getElementById("categoria").value  = "Juveniles";
                    document.getElementById("catinfantiles").style.opacity = "0";
                    document.getElementById("catveterano").style.opacity = "0";
                    document.getElementById("nombretutor").required = false;
                    document.getElementById("nombretutor").setAttribute("readonly","true");
                    document.getElementById("dnitutor").required = false;
                    document.getElementById("dnitutor").setAttribute("readonly","true");
                    document.getElementById("enfermedad").required = false;
                    document.getElementById("enfermedad").setAttribute("readonly","true");
                    document.getElementById("nombretutor").value = "";
                    document.getElementById("dnitutor").value = "";
                    document.getElementById("enfermedad").value = "";
                  }

                  // menor a 12 
                  if(edad <= 12){
                    if(edad <  6){
                      alert("La edad minima es de 6 anos");
                      document.getElementById("categoria").value  = "";
                      document.getElementById("catinfantiles").style.opacity = "0";
                      document.getElementById("catveterano").style.opacity = "0";
                      document.getElementById("nombretutor").required = false;
                      document.getElementById("nombretutor").removeAttribute("readonly");
                      document.getElementById("dnitutor").required = false;
                      document.getElementById("dnitutor").removeAttribute("readonly");
                      document.getElementById("enfermedad").required = false;
                      document.getElementById("enfermedad").setAttribute("readonly","true");
                    }
                    else{
                      document.getElementById("categoria").value  = "Infantiles";
                      document.getElementById("catinfantiles").style.opacity = "1";
                      document.getElementById("catveterano").style.opacity = "0";
                      document.getElementById("nombretutor").setAttribute("required","true");
                      document.getElementById("nombretutor").removeAttribute("readonly");
                      document.getElementById("dnitutor").setAttribute("required","true");
                      document.getElementById("dnitutor").removeAttribute("readonly");
                      document.getElementById("enfermedad").required = false;
                      document.getElementById("enfermedad").setAttribute("readonly","true");
                      document.getElementById("enfermedad").value = "";
                    }
                    
                  }
              }
          });
        });
        
        
      </script>
      <div class="col-md-4">
        <label for="categoria" class="form-label">Categoría</label>
        <select id="categoria" class="form-select" name="categoria"  onmousedown="return false;" value="<?= set_value('categoria') ?>">
          <option selected value="Juveniles">Juveniles</option>
          <option value="Infantiles">Infantiles</option>
          <option value="Mayores">Mayores</option>
          <option value="Veterano">Veterano</option>
          <option value=""></option>
        </select>
      </div>
      <div class="col-md-4">
        <label for="direccion" class="form-label">Dirección</label>
        <input type="text" class="form-control" id="direccion" name="direccion" value="<?= old('direccion') ?>">
      </div>
      <div class="col-md-4">
        <label for="telefono" class="form-label">Teléfono</label>
        <input type="number" class="form-control" id="telefono" name="telefono" value="<?= old('telefono') ?>">
      </div>
      <div class= "col-4" id="catinfantiles">
                <label for="nombretutor" class="form-label">Nombre del tutor</label>
                <input type="text" class="form-control" id="nombretutor" name="nombretutor" value="<?= old('nombretutor') ?>">
                <label for="dnitutor" class="form-label">DNI del tutor</label>
                <input type="number" class="form-control" id="dnitutor" name="dnitutor" value="<?= old('dnitutor') ?>">
                
      </div>
      <div class= "col-4" id="catveterano">
                <label for="enfermedad" class="form-label">Especifique si posee alguna enfermedad coronaria</label>
                <input type="text" class="form-control" id="enfermedad" name="enfermedad" value="<?= old('enfermedad') ?>">
      </div>
      <script type="text/javascript">
        
        if(document.getElementById("fnacjugador").value != ""){
          let categoriaAux = document.getElementById("fnacjugador").value;
          const edad = calcularEdad(categoriaAux);
                  
            /// mayores a 30
            if(edad > 30){
              document.getElementById("categoria").value = "Veterano";
              document.getElementById("catveterano").style.opacity = "1";
              document.getElementById("catinfantiles").style.opacity = "0";
              document.getElementById("enfermedad").setAttribute("required","true");
              document.getElementById("enfermedad").removeAttribute("readonly");
              document.getElementById("nombretutor").required = false;
              document.getElementById("nombretutor").setAttribute("readonly","true");
              document.getElementById("dnitutor").required = false;
              document.getElementById("dnitutor").setAttribute("readonly","true");
              document.getElementById("nombretutor").value = "";
              document.getElementById("dnitutor").value = "";
              
            }

            // 19 a 30
            if(edad >= 19 && edad <= 30){
              document.getElementById("categoria").value  = "Mayores";
              document.getElementById("catinfantiles").style.opacity = "0";
              document.getElementById("catveterano").style.opacity = "0";
              document.getElementById("nombretutor").required = false;
              document.getElementById("nombretutor").setAttribute("readonly","true");
              document.getElementById("dnitutor").required = false;
              document.getElementById("dnitutor").setAttribute("readonly","true");
              document.getElementById("enfermedad").required = false;
              document.getElementById("enfermedad").setAttribute("readonly","true");
              document.getElementById("nombretutor").value = "";
              document.getElementById("dnitutor").value = "";
              document.getElementById("enfermedad").value = "";
            
            }

            /// 13 a 18
            if(edad >= 13 && edad <= 18){
              document.getElementById("categoria").value  = "Juveniles";
              document.getElementById("catinfantiles").style.opacity = "0";
              document.getElementById("catveterano").style.opacity = "0";
              document.getElementById("nombretutor").required = false;
              document.getElementById("nombretutor").setAttribute("readonly","true");
              document.getElementById("dnitutor").required = false;
              document.getElementById("dnitutor").setAttribute("readonly","true");
              document.getElementById("enfermedad").required = false;
              document.getElementById("enfermedad").setAttribute("readonly","true");
              document.getElementById("nombretutor").value = "";
              document.getElementById("dnitutor").value = "";
              document.getElementById("enfermedad").value = "";
              
            }

            // menor a 12 
            if(edad <= 12){
              if(edad <  6){
                alert("La edad minima es de 6 anos");
                document.getElementById("categoria").value  = "";
                document.getElementById("catinfantiles").style.opacity = "0";
                document.getElementById("catveterano").style.opacity = "0";
                document.getElementById("nombretutor").required = false;
                document.getElementById("nombretutor").removeAttribute("readonly");
                document.getElementById("dnitutor").required = false;
                document.getElementById("dnitutor").removeAttribute("readonly");
                document.getElementById("enfermedad").required = false;
                document.getElementById("enfermedad").setAttribute("readonly","true");
                
              }
              else{
                document.getElementById("categoria").value  = "Infantiles";
                document.getElementById("catinfantiles").style.opacity = "1";
                document.getElementById("catveterano").style.opacity = "0";
                document.getElementById("nombretutor").setAttribute("required","true");
                document.getElementById("nombretutor").removeAttribute("readonly");
                document.getElementById("dnitutor").setAttribute("required","true");
                document.getElementById("dnitutor").removeAttribute("readonly");
                document.getElementById("enfermedad").required = false;
                document.getElementById("enfermedad").setAttribute("readonly","true");
                document.getElementById("enfermedad").value = "";
                
              }
              
            }
        }else{
          document.getElementById("catinfantiles").style.opacity = "0";
          document.getElementById("catveterano").style.opacity = "0";
        }
      </script>
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
