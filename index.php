<?php include './inc/header.php' ?>

<div class="container">
  <div class="row">
    <div class="col-2"></div>
    <div class="col-8">
      <h4 class="text-uppercase text-center">Agrega una nueva persona</h4>

      <form action="./bd/insertar.php" method="post">
        <div class="form-group">
          <label for="">Apellido Paterno</label>
          <input type="text" name="ap_paterno" id="" class="form-control" placeholder="" aria-describedby="helpId">
          <label for="">Apellido Materno</label>
          <input type="text" name="ap_materno" id="" class="form-control" placeholder="" aria-describedby="helpId">
          <label for="">Nombre</label>
          <input type="text" name="nombre" id="" class="form-control" placeholder="" aria-describedby="helpId">
          <button class="btn btn-success mt-3">Agregar</button>
        </div>
      </form>
    </div>
    <div class="col-2"></div>
  </div>

  <hr>

  <div class="row">
    <div class="col-1"></div>
    <div class="col-10">
      <table class="table" id="tablaCrud">
        <thead>
          <tr class="text-center">
            <th>ID</th>
            <th>Apellido Paterno</th>
            <th>Apellido Materno</th>
            <th>Nombre</th>
            <th>Actualizar</th>
            <th>Eliminar</th>
          </tr>
        </thead>
        <tbody>
          <?php
          while ($stmt->fetch()) :
            echo $id_persona
          ?>
            <tr class="text-center">
              <td> <?php echo $id_persona ?> </td>
              <td> <?php echo $ap_paterno ?> </td>
              <td> <?php echo $ap_materno ?> </td>
              <td> <?php echo $nombre ?> </td>
              <td>
                <!-- Button trigger modal -->
                <a class="btn btn-warning" data-toggle="modal" href="inc/modal.php?id_persona=<?php echo $id_persona ?>" data-target="#modelId">
                  Actualizar
                </a>
                
                <?php
                  require 'inc/modal.php'
                ?>
                
                
                <script>
                  $('#exampleModal').on('show.bs.modal', event => {
                    var button = $(event.relatedTarget);
                    var modal = $(this);
                    // Use above variables to manipulate the DOM
                    
                  });
                </script>
              </td>
              <td>
                <form action="./bd/eliminar.php" method="post">
                  <input type="text" name="id_persona" value="<?php echo $id_persona; ?>" hidden>
                  <button class="btn btn-danger">Eliminar</button>
                </form>
              </td>
            </tr>
          <?php
          endwhile;
          ?>
        </tbody>
      </table>
    </div>
    <div class="col-1"></div>
  </div>
</div>

<?php include './inc/footer.php' ?>