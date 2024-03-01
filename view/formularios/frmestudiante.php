<?php include "../main/mainheadadmin.php" ?>
<div class="row">
    <div class="col-12">
        <h1>Registro de Estudiante</h1>
        <div id="mensaje-exito" style="display: none; color: green;"></div>
        <form id="frmestu" method="POST">
        <input type="hidden" name="op" value="guardaryeditar">
        <input type="hidden" name="estu_id" value="<?php echo isset($_GET['id']) ? $_GET['id'] : ''; ?>">

       

            <div class="form-group">
                <label for="estu_nom">Nombre</label>
                <input name="estu_nom" required type="text" id="estu_nom" class="form-control" placeholder="Nombre" value="<?php echo isset($_GET['nombre']) ? $_GET['nombre'] : ''; ?>">
            </div>
            <div class="form-group">
                <label for="estu_ape">Apellido</label>
                <input name="estu_ape" required type="text" id="estu_ape" class="form-control" placeholder="Apellido" value="<?php echo isset($_GET['apellido']) ? $_GET['apellido'] : ''; ?>">
            </div>
            <div class="form-group">
                <label for="estu_grup">Grado</label>
                <input name="estu_grup" required type="text" id="estu_grup" class="form-control" placeholder="Grado" value="<?php echo isset($_GET['grupo']) ? $_GET['grupo'] : ''; ?>">
            </div>
            <div class="form-group">
                <button class="btn btn-success" type="submit">Guardar</button>
                <button class="btn btn-danger" type="submit" onclick="regresar()">Regresar</button>

            </div>
        </form>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="frmestudiante.js"></script>