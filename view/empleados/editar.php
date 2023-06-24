<div class="card">
    <div class="card-header">
        Crear Registro
    </div>
    <div class="card-body">

    <form action="" method="post" enctype="multipart/form-data">

    <div class="mb-3">
      <label for="" class="form-label">ID:</label>
      <input readonly type="text"
        class="form-control" value="<?php echo $empleado->id; ?>" name="id" id="id" aria-describedby="helpId" placeholder="ID registro">
      
    </div>

     <div class="mb-3">
       <label for="nombre" class="form-label">Nombre:</label>
       <input type="text"
         class="form-control" value="<?php echo $empleado->nombre; ?>" name="nombre" id="" aria-describedby="helpId" placeholder="Nombre">
       
     </div>

     <div class="mb-3">
       <label for="documento" class="form-label">Nº Documento</label>
       <input type="number"
         class="form-control" value="<?php echo $empleado->documento; ?>" name="documento" id="documento" aria-describedby="helpId" placeholder="Nº Documento">
       
     </div>

     <div class="mb-3">
       <label for="foto" class="form-label">Foto</label>
       <input type="file" class="form-control"  name="foto" id="" placeholder="">
       
     </div>

     <div class="mb-3">
       <label for="actividad" class="form-label">Actividad:</label>
       <input type="text"
         class="form-control" value="<?php echo $empleado->actividad; ?>" name="actividad" id="" aria-describedby="helpId" placeholder="Actividad">
       
     </div>


     <input name="" id="" class="btn btn-success" type="submit" value="ACTUALIZAR">

     <a href="?controlador=empleados&accion=inicio" class="btn btn-primary">CANCELAR</a>







    </form>
       
    </div>
   
</div>