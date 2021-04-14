<?php
  $id_persona = $_GET['id_persona'];
  echo $id_persona;
?>

<!-- Modal -->
<div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="container-fluid">
          <div class="row">
            <div class="col">
              <form action="bd/actualizar.php" method="post">
                <div class="form-group">
                  <label for="">Apellido Paterno</label>
                  <input type="text" class="form-control" name="ap_paterno" id="" aria-describedby="helpId" placeholder="">
                  <label for="">Apellido Materno</label>
                  <input type="text" class="form-control" name="ap_materno" id="" aria-describedby="helpId" placeholder="">
                  <label for="">Nombre</label>
                  <input type="text" class="form-control" name="nombre" id="" aria-describedby="helpId" placeholder="">
                  <button class="btn btn-success mt-4">Actualizar</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>