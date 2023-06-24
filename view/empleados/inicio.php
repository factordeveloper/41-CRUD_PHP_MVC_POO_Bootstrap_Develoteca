<div class="card">
    <div class="card-header">
    <a name="" id="" class="btn btn-success" href="?controlador=empleados&accion=crear" role="button">Generar Registro</a>
    </div>
    <div class="card-body">

    <table class="table table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Nº Documento</th>
            <th>Fecha</th>
            <th>Hora</th>
            <th>Actividad</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>

    <?php

    foreach ($empleados as $empleado){ ?>


        <tr>
            <td><?php echo $empleado->id;?></td>
            <td><?php echo $empleado->nombre;?></td>
            <td><?php echo $empleado->documento;?></td>
            <td><?php echo $empleado->fecha;?></td>
            <td><?php echo $empleado->hora;?></td>
            <td><?php echo $empleado->actividad;?></td>
            <td><div class="btn-group" role="group" aria-label="">
                <a href="?controlador=empleados&accion=editar&id=<?php echo $empleado->id;?>" class="btn btn-info">Editar</a>
                <a href="?controlador=empleados&accion=borrar&id=<?php echo $empleado->id;?>"  class="btn btn-danger">Borrar</a>
                
            </div>
            
            
        </td>
                    
        </tr>
        
        <?php } ?>


    </tbody>
</table>
        
    </div>
    
    
</div>






