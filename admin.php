<?php

require 'db.php';



require 'header.php' ?>


<div class="container-fluid">
  <div class="card mt-4">
    <div class="card-header">
      <h2>Empresas Inscritas</h2>
    </div>
    <div class="card-body">
      <table class="table table-striped table-dark">
        <tr>
          <th>ID</th>
          <th>Nombre</th>
          <th>Comuna</th>
          <th>Direccion</th>
          <th>Tipo Producto</th>
          <th>Accion</th>
        </tr>
        <?php foreach($base_de_empresas as $empresa): ?>
        <tr>
          <td><?= $empresa->super_id ?></td>
          <td><?= $empresa->super_nombre ?></td>
          <td><?= $empresa->super_comuna ?></td>
          <td><?= $empresa->super_direccion ?></td>
          <td><?= $empresa->super_tipoprod ?></td>
          <td>
            <a class="btn btn-danger"  role="button" onclick="return confirm('Borrar a esta empresa?')" href="/crud/delete.php?id=<?= $empresa->super_id ?>">Borrar</a>
            <a class="btn btn-info" href='/crud/update.php?id=<?= $empresa->super_id ?>' role="button" onclick="return confirm('Editar a esta empresa?')">Editar</a>
           </td>
        </tr>
        <?php endforeach ?>

     
      </table>
    </div>

  </div>
</div>




<div class="container-fluid">
  <div class="card mt-4">
    <div class="card-header">
      <h2>ONG Inscritas</h2>
    </div>
    <div class="card-body">
      <table class="table table-striped table-dark">
        <tr>
          <th>ID</th>
          <th>Nombre</th>
          <th>Comuna</th>
          <th>Direccion</th>
          <th>Necesidad</th>
          <th>Acción</th>
        </tr>

        <?php foreach($base_de_ong as $ong): ?>
        <tr>
          <th><?= $ong->ong_id ?></th>
          <th><?=$ong->ong_nombre?></th>
          <th><?=$ong->ong_comuna?></th>
          <th><?=$ong->ong_direcc?></th>
          <th><?=$ong->ong_necesidad?></th>
          <th>
          <a class="btn btn-danger" href='/crud/delete.php' role="button" onclick="return confirm('Borrar a esta empresa?')">Borrar</a>
          <a class="btn btn-info" href='/crud/update.php' role="button" onclick="return confirm('Editar a esta empresa?')">Editar</a>
          </th>
        </tr>
        <?php endforeach ?>
      </table>
    </div>

  </div>
</div>


<?php require'footer.php' ?>

