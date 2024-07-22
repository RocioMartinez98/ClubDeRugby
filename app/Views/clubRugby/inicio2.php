<div class="container">
    <?php
    echo form_open('clubderugby/guarda');
    ?>

    <div class="form-group row g-3">
    <div class="col-md-4">
        <?php
            echo form_label('Nombre','nombrejugador', array('class'=> 'form-label'));
            echo form_input(array('name'=>'nombrejugador','class'=> 'form-control', 'type' =>'text'));
        ?>
    </div>
    <div class="col-md-4">
        <?php
            echo form_label('Apellido','apellidoJugador', array('class'=> 'form-label'));
            echo form_input(array('name'=>'apellidoJugador','class'=> 'form-control', 'type' =>'text'));
        ?>
    </div>
    
    <div class="col-md-4">
        <?php
            echo form_label('Fecha de nacimiento','fnacjugador', array('class'=> 'form-label'));
            echo form_input(array('name'=>'fnacjugador','class'=> 'form-control', 'type' => 'date'));
        ?>
    </div>

    <div class="col-md-4">
        <?php
            $favourite_options = array('0' => 'Infantiles', '1' => 'Juveniles', '2' => 'Mayores','3' => 'Veterano'); 
            echo form_label('Categoría','categoria', array('class'=> 'form-label'));
            echo form_dropdown(array('name'=>'categoria','class'=> 'form-select'),$favourite_options);
        ?>
    </div>

    <div class="col-12 text-center">
        <?php
            echo form_submit('guarda','Confirmar',array('class' => 'btn btn-primary' , 'type' => 'submit'));
            echo form_submit('cancelar','Cancelar',array('class' => 'btn btn-primary' , 'type' => 'submit'));
        ?>
    </div>
    <?php
        echo form_close();
    ?>
</div>