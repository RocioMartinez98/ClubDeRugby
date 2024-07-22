<main>
        <div class = "container">
        <h3 class=" text-center">Listado de socios</h3>
		<hr />
        <form class="row g-3" method="post" action="<?php echo base_url().'/ClubDeRugby/mostrarDatoSeleccionado' ?>">
          <div class="container row g-3 text-center">
            <div class="col-md-3 text-center">
                <label for="torneo" class="form-label">Seleccionar categoría</label>
                <select id="torneo" name="torneo" class="form-select" name="miTorneo" >
                  <!-- <option value="">Seleccionar</option> -->
                  <option value="Todos">Todos</option>
                  <option value="Infantiles">Infantiles</option>
                  <option value="Juveniles">Juveniles</option>
                  <option value="Mayores">Mayores</option>
                  <option value="Veterano">Veteranos</option>
                </select>

                <script> 
                  var cuenta = <?php echo json_encode($seleccionar); ?>;
                  document.getElementById("torneo").value  = cuenta;
                </script>
            </div>
            <div class="col-sm-1 text-center">
					    <button type="submit" id= "filtrarPorTipoCuenta" class="btn btn-primary py-3" onclick="buscar();">Buscar</button>
				    </div>  
          </div>
        </form>
          <div class="container">
			      <div class = "table-responsive">
            <table class="table">
                <!-- <thead>
                  <tr>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellido</th>
                    <th scope="col">DNI</th>
                    <th scope="col">Fecha de nacimiento</th>
                    <th scope="col">Edad</th>
                    <th scope="col">Categoria</th>
                    <th scope="col">Direccion</th>
                    <th scope="col">Telefono</th>
                    <th scope="col">Nombre del tutor</th>
                    <th scope="col">DNI del tutor</th>
                    <th scope="col">Enfermedad</th>
                  </tr>
                </thead>
                <tbody> -->
                  <!-- <tr>
                    <td>Ana</td>
                    <td>Rio</td>
                    <td>88546521</td>
                    <td>26-02-2007</td>
					          <td>13</td>
                  </tr>
                  <tr>
                    <td>Raul</td>
                    <td>Villegas</td>
                    <td>5846552</td>
                    <td>06-09-1983</td>
					          <td>25</td>
                  </tr> -->
                  
                  
                  <?php
                    
                    
                  
                    function get( string $string ) {
                      return ( isset($_GET[(string) $string]) )
                          ? $_GET[(string) $string] : "";
                    }
                  
                    // $variablePHP = get("miTorneo");
                    // // echo $variablePHP;
                    // if($variablePHP === "Todos"){
                    if($seleccionar == "Infantiles"){
                      echo '<thead>';
                      echo '<tr>';
                        echo '<th scope="col">Nombre</th>';
                        echo '<th scope="col">Apellido</th>';
                        echo '<th scope="col">DNI</th>';
                        echo '<th scope="col">Fecha de nacimiento</th>';
                        echo '<th scope="col">Edad</th>';
                        echo '<th scope="col">Categoria</th>';
                        echo '<th scope="col">Direccion</th>';
                        echo '<th scope="col">Telefono</th>';
                        echo '<th scope="col">Nombre del tutor</th>';
                        echo '<th scope="col">DNI del tutor</th>';
                        echo '</tr>';
                      echo '</thead>';
                      echo '<tbody>';
                      foreach ($users as $user) {
                        echo '<tr>';
                        echo '<td>'.$user['nombre'].'</td>';
                        echo '<td>'.$user['apellido'].'</td>';
                        echo '<td>'.$user['dni'].'</td>';
                        echo '<td>'.$user['fecha'].'</td>';
                        $cumpleanos = new DateTime($user['fecha']);
                        $hoy = new DateTime();
                        $annos = $hoy->diff($cumpleanos);
                        echo '<td>'.$annos->y.'</td>';
                        echo '<td>'.$user['categoria'].'</td>';
                        echo '<td>'.$user['direccion'].'</td>';
                        echo '<td>'.$user['telefono'].'</td>';
                        echo '<td>'.$user['nombretutor'].'</td>';
                        echo '<td>'.$user['dnitutor'].'</td>';
                        echo '</tr>';
                        
                      }
                      echo '<tbody>';
                    }
                    else{
                      if($seleccionar == "Veterano"){
                        echo '<thead>';
                        echo '<tr>';
                          echo '<th scope="col">Nombre</th>';
                          echo '<th scope="col">Apellido</th>';
                          echo '<th scope="col">DNI</th>';
                          echo '<th scope="col">Fecha de nacimiento</th>';
                          echo '<th scope="col">Edad</th>';
                          echo '<th scope="col">Categoria</th>';
                          echo '<th scope="col">Direccion</th>';
                          echo '<th scope="col">Telefono</th>';
                          echo '<th scope="col">Enfermedad</th>';
                          echo '</tr>';
                        echo '</thead>';
                        echo '<tbody>';
                        foreach ($users as $user) {
                          echo '<tr>';
                          echo '<td>'.$user['nombre'].'</td>';
                          echo '<td>'.$user['apellido'].'</td>';
                          echo '<td>'.$user['dni'].'</td>';
                          echo '<td>'.$user['fecha'].'</td>';
                          $cumpleanos = new DateTime($user['fecha']);
                          $hoy = new DateTime();
                          $annos = $hoy->diff($cumpleanos);
                          echo '<td>'.$annos->y.'</td>';
                          echo '<td>'.$user['categoria'].'</td>';
                          echo '<td>'.$user['direccion'].'</td>';
                          echo '<td>'.$user['telefono'].'</td>';
                          echo '<td>'.$user['enfermedad'].'</td>';
                          echo '</tr>';
                          
                        }
                        echo '<tbody>';
                      }
                      else{
                        echo '<thead>';
                        echo '<tr>';
                          echo '<th scope="col">Nombre</th>';
                          echo '<th scope="col">Apellido</th>';
                          echo '<th scope="col">DNI</th>';
                          echo '<th scope="col">Fecha de nacimiento</th>';
                          echo '<th scope="col">Edad</th>';
                          echo '<th scope="col">Categoria</th>';
                          echo '<th scope="col">Direccion</th>';
                          echo '<th scope="col">Telefono</th>';
                          echo '</tr>';
                        echo '</thead>';
                        echo '<tbody>';
                        foreach ($users as $user) {
                          echo '<tr>';
                          echo '<td>'.$user['nombre'].'</td>';
                          echo '<td>'.$user['apellido'].'</td>';
                          echo '<td>'.$user['dni'].'</td>';
                          echo '<td>'.$user['fecha'].'</td>';
                          $cumpleanos = new DateTime($user['fecha']);
                          $hoy = new DateTime();
                          $annos = $hoy->diff($cumpleanos);
                          echo '<td>'.$annos->y.'</td>';
                          echo '<td>'.$user['categoria'].'</td>';
                          echo '<td>'.$user['direccion'].'</td>';
                          echo '<td>'.$user['telefono'].'</td>';
                          echo '</tr>';
                        }
                        echo '<tbody>';
                      }
                    }
                      
                    
                  ?>
                <!-- </tbody> -->
              </table>
			      </div>
          </div>
        </form>
        </div>
      </main>