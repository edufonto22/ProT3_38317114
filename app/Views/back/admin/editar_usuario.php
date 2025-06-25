<div class="container mt-4">
    <h2>Editar Usuario</h2>
    
    <form action="<?= base_url('admin/actualizar/'.$usuario['id_usuario']) ?>" method="post">
        <?= csrf_field() ?>
        
        <div class="mb-3">
            <label class="form-label">Nombre</label>
            <input type="text" name="nombre" class="form-control" value="<?= $usuario['nombre'] ?>" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Apellido</label>
            <input type="text" name="apellido" class="form-control" value="<?= $usuario['apellido'] ?>" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="email" name="email" class="form-control" value="<?= $usuario['email'] ?>" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Usuario</label>
            <input type="text" name="usuario" class="form-control" value="<?= $usuario['usuario'] ?>" required>
        </div>

        <button type="submit" class="btn btn-success">Actualizar</button>
        <a href="<?= base_url('admin') ?>" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
