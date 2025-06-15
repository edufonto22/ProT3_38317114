<!-- Agregá esto en tu <head> o en un archivo CSS -->
<style>
    .registro-container {
        font-size: 1.2rem; /* fuente más grande */
    }

    .form-label {
        font-weight: 600;
        font-size: 1.1rem;
    }

    .form-control {
        font-size: 1.1rem;
        padding: 0.75rem;
    }

    .btn {
        font-size: 1.1rem;
        padding: 0.5rem 1.2rem;
        margin-top: 10px;
    }

    h4 {
        font-size: 1.6rem;
        text-align: center;
        margin-bottom: 20px;
    }

    .card {
        padding: 20px;
        box-shadow: 0 2px 10px rgba(0,0,0,0.1);
    }

    .alert {
        font-size: 0.95rem;
    }
</style>

<!-- Tu formulario con mejoras -->
<div class="container mt-0 mb-0 registro-container">
    <div class="row d-flex justify-content-center">
        <div class="card col-lg-4 col-md-6">
            <h4>Registrarse</h4>

            <?php $validation = \Config\Services::validation(); ?>
            <form method="post" action="<?= base_url('/enviar-form') ?>">
                <?= csrf_field(); ?>

                <?php if(!empty(session()->getFlashdata('fail'))): ?>
                    <div class="alert alert-danger"><?= session()->getFlashdata('fail'); ?></div>
                <?php endif ?>

                <div class="card-body">
                    <div class="mb-3">
                        <label class="form-label">Nombre</label>
                        <input name="nombre" type="text" class="form-control" placeholder="Nombre">
                        <?php if($validation->getError('nombre')): ?>
                            <div class="alert alert-danger mt-2"><?= $validation->getError('nombre'); ?></div>
                        <?php endif ?>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Apellido</label>
                        <input name="apellido" type="text" class="form-control" placeholder="Apellido">
                        <?php if($validation->getError('apellido')): ?>
                            <div class="alert alert-danger mt-2"><?= $validation->getError('apellido'); ?></div>
                        <?php endif ?>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input name="email" type="text" class="form-control" placeholder="correo@algo.com">
                        <?php if($validation->getError('email')): ?>
                            <div class="alert alert-danger mt-2"><?= $validation->getError('email'); ?></div>
                        <?php endif ?>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Usuario</label>
                        <input name="usuario" type="text" class="form-control" placeholder="Usuario">
                        <?php if($validation->getError('usuario')): ?>
                            <div class="alert alert-danger mt-2"><?= $validation->getError('usuario'); ?></div>
                        <?php endif ?>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Contraseña</label>
                        <input name="contraseña" type="password" class="form-control" placeholder="Contraseña">
                        <?php if($validation->getError('contraseña')): ?>
                            <div class="alert alert-danger mt-2"><?= $validation->getError('contraseña'); ?></div>
                        <?php endif ?>
                    </div>

                    <div class="d-flex justify-content-between">
                        <input type="submit" value="Guardar" class="btn btn-success">
                        <input type="reset" value="Cancelar" class="btn btn-danger">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
