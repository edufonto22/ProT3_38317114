<div class="container mt-5 mb-5 d-flex justify-content-center">
  <div class="card shadow-lg" style="width: 450px; background-color: #f0f4f8; border-radius: 1rem;">
    <div class="card-header text-center bg-primary text-white" style="border-top-left-radius: 1rem; border-top-right-radius: 1rem;">
      <h2 style="font-size: 1.8rem;">Iniciar Sesión</h2>
    </div>

    <!-- Mensaje de Error -->
    <?php if(session()->getFlashdata('msg')): ?>
      <div class="alert alert-warning m-3">
        <?= session()->getFlashdata('msg') ?>
      </div>
    <?php endif; ?>

    <!-- Formulario -->
    <form method="post" action="<?= base_url('/enviarlogin') ?>">
      <div class="card-body">
        <div class="mb-3">
          <label for="correo" class="form-label fw-bold">Correo</label>
          <input name="correo" type="email" class="form-control form-control-lg" placeholder="ejemplo@correo.com" required>
        </div>

        <div class="mb-3">
          <label for="contraseña" class="form-label fw-bold">Contraseña</label>
          <input name="contraseña" type="password" class="form-control form-control-lg" placeholder="••••••••" required>
        </div>

        <div class="d-grid gap-2">
          <input type="submit" value="Ingresar" class="btn btn-success btn-lg">
          <a href="<?= base_url('login'); ?>" class="btn btn-outline-danger btn-lg">Cancelar</a>
        </div>

        <div class="mt-3 text-center">
          <span class="text-muted">¿Aún no se registró? 
            <a href="<?= base_url('/registro'); ?>" class="text-primary fw-bold">Registrarse aquí</a>
          </span>
        </div>
      </div>
    </form>
  </div>
</div>
