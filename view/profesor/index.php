<?php
    include_once "../main/mainheadadmin.php";
?>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="profesor.js"></script>

<div class="row">
    <div class="col-12">
        <h1>Listado de Profesores</h1>
        <a href="../formularios/frmprofesor.php" class="btn btn-info my-2">Nuevo Profesor</a>
    </div>
    <div class="col-12 table-responsive">
        <table id="tabla-profesores" class="table table-bordered">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Sueldo</th>
                    <th>Materias</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>
</div>
