<?php include("db.php") ?>


<?php include("includes/header.php") ?>
    <div class = "container p-4">
      
        <div class = "row"> 

            <div class ="col-md-4">
                <div class = "card card-body">

                <form action= "create.php " method = "POST">
                   <div class="form-group">
                       <h7>ID Paciente</h7> 
                       <br>
                       <input type = "text" name ="id" class = "form-control"
                       placeholder = "ID Paciente" autofocus>
                   </div> 
                   
                   <div class="form-group">
                       <br>
                        <h7>Nombre Paciente</h7> 
                       <br>
                       <input type = "text" name ="nombre" class = "form-control"
                       placeholder = "Nombre paciente" autofocus>
                   </div>

                   <div class="form-group">
                         <br>
                        <h7>Apellido Paciente</h7> 
                       <br>
                       <input type = "text" name ="apellido" class = "form-control"
                       placeholder = "Apellido Paciente" autofocus>
                   </div>
                   <div class="form-group">
                         <br>
                        <h7>Fecha de ingreso del Paciente</h7> 
                       <br>
                       <input type = "text" name ="fecha_in" class = "form-control"
                       placeholder = "Fecha de Ingreso " autofocus>
                   </div>

                   <div class="form-group">
                        <br>
                        <h7>Tutor Asignado</h7> 
                       <br>
                       <input type = "text" name ="idtu" class = "form-control"
                       placeholder = "ID del Tutor" autofocus>
                   </div>
                   <div class="form-group">
                        <br>
                        <h7>instructor Asignado</h7> 
                       <br>
                       <input type = "text" name ="iden" class = "form-control"
                       placeholder = "ID del Istructor" autofocus>
                   </div>
                    <br>
                   <input type = "submit" class = "btn btn-success btn-block" name = "guardar" value = "guardar">
                    <br>

                  
                </form>

                </div>
            </div>        
        </div>
    

    </div>

<?php include("includes/footer.php") ?>
  

