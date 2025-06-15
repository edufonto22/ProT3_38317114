<style>

.menu {
	display: flex; /* comportamiento normal */
	gap: 2rem;
}

@media (max-width: 768px) {
	.menu {
		display: none;
		flex-direction: column;
		background-color: #018eb1;
		position: absolute;
		top: 6rem;
		left: 0;
		width: 100%;
		padding: 2rem;
		z-index: 100;
	}

	.menu.active {
		display: flex;
	}
}


</style>


			<div class="container-navbar">
				<nav class="navbar navbar-expand-lg container">
					<i class="fa-solid fa-bars"></i>
					<ul class="menu">
						<li><a href="principal">Inicio</a></li>
						<li><a href="quienes_somos">Quienes Somos</a></li>
            <li><a href="acerca_de">Acerca De</a></li>
            <li class="nav-item"><a class="nav-link" href="registro">Registro</a></li>
            <li class="nav-item"><a class="nav-link" href="login">Login</a></li>
            <li><a href="producto">Productos</a></li>
			<li><a href="blog">Blog</a></li>
					</ul>

					<form class="search-form">
						<input type="search" placeholder="Buscar..." />
						<button class="btn-search">
							<i class="fa-solid fa-magnifying-glass"></i>
						</button>
					</form>
				</nav>
			</div>

<script>
	document.addEventListener('DOMContentLoaded', function () {
		const menu = document.querySelector('.menu');
		const toggle = document.querySelector('.fa-bars');

		toggle.addEventListener('click', function () {
			menu.classList.toggle('active');
		});
	});
</script>


<!--
//Barra de Navegación
<nav class="navbar navbar-expand-lg bg-body-green">
  <div class="container-fluid">
    <div class="navbar-header">
       <a class="navbar-brand me-auto barra" href="<?php echo base_url('principal')?>">
         //logo/marca de la empresa// 
       
         <img src="<?php echo base_url('assets/')?>" alt="marca" width="75" height="30" class="img-fluid">
    
        </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation" ari-controls="navbarTogglerDemo03" aria-expande="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="#"></a>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="quienes_somos">Quienes Somos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="acerca_de">Acerca De</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="registro">Registro</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="login">Login</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
  </div>
</nav>
-->