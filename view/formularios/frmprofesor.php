<?php include "../main/mainheadadmin.php" ?>
<div class="row">
  <div class="col-12">
    <h1>Registro de Profesor</h1>
    <div id="mensaje-exito" style="display: none; color: green;"></div>
    <form id="frmprof" method="POST">
      <input type="hidden" name="op" value="guardaryeditar">
      <input type="hidden" name="prof_id" value="<?php echo isset($_GET['id']) ? $_GET['id'] : ''; ?>">

      <div class="form-group">
        <label for="prof_nom">Nombre</label>
        <input name="prof_nom" required type="text" id="prof_nom" class="form-control" placeholder="Nombre" value="<?php echo isset($_GET['nombre']) ? $_GET['nombre'] : ''; ?>">
      </div>
      
      <div class="form-group">
        <label for="prof_ape">Apellido</label>
        <input name="prof_ape" required type="text" id="prof_ape" class="form-control" placeholder="Apellido" value="<?php echo isset($_GET['apellido']) ? $_GET['apellido'] : ''; ?>">
      </div>
      <div class="form-group">
        <label for="prof_sue">Sueldo</label>
        <input name="prof_sue" required type="text" id="prof_sue" class="form-control" placeholder="0000000.00" value="<?php echo isset($_GET['sueldo']) ? $_GET['sueldo'] : ''; ?>">
      </div>
      <div class="form-group">
        <button class="btn btn-success" type="submit">Guardar</button>
        <button class="btn btn-danger" type="submit" onclick="regresar()">Regresar</button>
      </div>
    </form>
  </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="frmprofesor.js"></script>

