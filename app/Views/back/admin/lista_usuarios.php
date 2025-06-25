<div class="container mt-4">
    <h2>Lista de Usuarios</h2>

    <?php if (session()->getFlashdata('success')): ?>
        <div class="alert alert-success">
            <?= session()->getFlashdata('success') ?>
        </div>
    <?php endif; ?>

    <table class="table table-bordered table-hover mt-3">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Email</th>
                <th>Usuario</th>
                <th>Perfil</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($usuarios as $usuario): ?>
                <tr>
                    <td><?= $usuario['id_usuario'] ?></td>
                    <td><?= $usuario['nombre'] ?></td>
                    <td><?= $usuario['apellido'] ?></td>
                    <td><?= $usuario['email'] ?></td>
                    <td><?= $usuario['usuario'] ?></td>
                    <td><?= $usuario['perfil_id'] == 1 ? 'Administrador' : 'Cliente' ?></td>
                    <td>
                        <a href="<?= base_url('admin/editar/'.$usuario['id_usuario']) ?>" class="btn btn-warning btn-sm">Editar</a>
                        <a href="<?= base_url('admin/eliminar/'.$usuario['id_usuario']) ?>" class="btn btn-danger btn-sm" onclick="return confirm('¿Seguro que desea eliminar este usuario?')">Eliminar</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
