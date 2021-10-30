<?php include("db.php") ?>


<?php include("includes/header.php") ?>
    <div class = "container p-4">
      
        <div class = "row"> 

            <div class ="col-md-4">
                <div class = "card card-body">

                <form action= "create.php " method = "POST">
                   <div class="form-group">
                       <h7>ID Instructor</h7> 
                       <br>
                       <input type = "text" name ="id" class = "form-control"
                       placeholder = "ID Instructor" autofocus>
                   </div> 
                   
                   <div class="form-group">
                       <br>
                        <h7>Nombre Instructor</h7> 
                       <br>
                       <input type = "text" name ="nombre" class = "form-control"
                       placeholder = "Nombre Instructor" autofocus>
                   </div>

                   <div class="form-group">
                         <br>
                        <h7>Apellido Instructor</h7> 
                       <br>
                       <input type = "text" name ="apellido" class = "form-control"
                       placeholder = "Apellido Instructor" autofocus>
                   </div>
                   <div class="form-group">
                         <br>
                        <h7>Telefono Instructor</h7> 
                       <br>
                       <input type = "text" name ="telefono" class = "form-control"
                       placeholder = "Telefono Instructor " autofocus>
                   </div>

                   <div class="form-group">
                        <br>
                        <h7>Correo Instructor</h7> 
                       <br>
                       <input type = "text" name ="correo" class = "form-control"
                       placeholder = "Correo Instructor" autofocus>
                   </div>
                    <br>
                   <input type = "submit" class = "btn btn-success btn-block" name = "guardar" value = "guardar">
                </form>

                </div>
            </div>        
        </div>
    

    </div>

<?php include("includes/footer.php") ?>
  

