 <style>
.card-title {
  font-size: 1.3rem;
  font-weight: bold;
}

.card-text {
  font-size: 1.1rem;
}

.card-img-top {
  height: 250px;
  object-fit: cover;
}
  
.acerca-de {
  margin-top: 3rem;
  padding: 2rem;
  background-color: #f9f9f9;
  border-radius: 1rem;
}

.btn-primary {
	padding: 1rem 3rem;
	background-color: var(--primary-color);
	color: #fff;
	text-transform: uppercase;
	font-size: 1.4rem;
	border-radius: 2rem;
	margin: 3rem 0 5rem;
	display: inline-block;
	cursor: pointer;
}

.btn-primary:hover {
	background-color: var(--dark-color);
}

 </style>
 
 
 
 
 <div class="container-fluid mt-4">
  <div class="row">
    <!-- Sidebar -->
    <aside class="col-md-3 mb-4">
      <div class="list-group">
        <a href="#" class="list-group-item list-group-item-action active">Todas las categorías</a>
        <a href="#list-item-herramientas" class="list-group-item list-group-item-action">Herramientas</a>
        <a href="#list-item-motosierras" class="list-group-item list-group-item-action">Motosierras</a>
        <a href="#list-item-agricolas" class="list-group-item list-group-item-action">Agrícolas</a>
        <a href="#list-item-accesorios" class="list-group-item list-group-item-action">Accesorios</a>
      </div>
    </aside>

    <!-- Catálogo de productos -->
    <section class="col-md-9">
      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-4">
        
        <!-- Card de producto -->
        <div class="col">
          <div class="card h-100">
            <img src="media/cosechadora_ferg.jfif" class="card-img-top" alt="Cosechadora Fergusson">
            <div class="card-body">
              <h5 class="card-title">Cosechadora Fergusson</h5>
              <p class="card-text">$250.000.000</p>
              <a href="#" class="btn btn-primary">Comprar</a>
            </div>
          </div>
        </div>

        <!-- Otro producto -->
        <div class="col">
          <div class="card h-100">
            <img src="media/maquina_agricola_2.jfif" class="card-img-top" alt="Maquinaria agrícola John Deere">
            <div class="card-body">
              <h5 class="card-title">Maquinaria agrícola John Deere</h5>
              <p class="card-text">$350.000.000</p>
              <a href="#" class="btn btn-primary">Comprar</a>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card h-100">
            <img src="media/cosechadora_nh.jfif" class="card-img-top" alt="Cosechadora New Holland">
            <div class="card-body">
              <h5 id="list-item-agricola" class="card-title">Cosechadora New Holland</h5>
              <p class="card-text">$250.000.000</p>
              <a href="#" class="btn btn-primary">Comprar</a>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card h-100">
            <img src="media/stihl_motosierra.jpg" class="card-img-top" alt="Motosierra Stihl">
            <div class="card-body">
              <h5 id="list-item-motosierras" class="card-title">Motosierra Stihl</h5>
              <p class="card-text">$250.000</p>
              <a href="#" class="btn btn-primary">Comprar</a>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card h-100">
            <img src="media/motosierra_husq.jfif" class="card-img-top" alt="Motosierra Husqvana">
            <div class="card-body">
              <h5 id="list-item-motosierra" class="card-title">Motosierra Husqvana</h5>
              <p class="card-text">$250.000</p>
              <a href="#" class="btn btn-primary">Comprar</a>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card h-100">
            <img src="media/motosierra_aosh.jfif" class="card-img-top" alt="Motosierra Aosh">
            <div class="card-body">
              <h5 id="list-item-motosierra" class="card-title">Motosierra Aosh</h5>
              <p class="card-text">$250.000</p>
              <a href="#" class="btn btn-primary">Comprar</a>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card h-100">
            <img src="media/stihl_motosierra.jpg" class="card-img-top" alt="Motosierra Stihl">
            <div class="card-body">
              <h5 id="list-item-agricolas" class="card-title">Motosierra Stihl</h5>
              <p class="card-text">$250.000</p>
              <a href="#" class="btn btn-primary">Comprar</a>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card h-100">
            <img src="media/stihl_motosierra.jpg" class="card-img-top" alt="Motosierra Stihl">
            <div class="card-body">
              <h5 id="list-item-agricolas" class="card-title">Motosierra Stihl</h5>
              <p class="card-text">$250.000</p>
              <a href="#" class="btn btn-primary">Comprar</a>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card h-100">
            <img src="media/taladro.png" class="card-img-top" alt="Taladro">
            <div class="card-body">
              <h5 id="list-item-accesorios" class="card-title">Taladro</h5>
              <p class="card-text">$100.000</p>
              <a href="#" class="btn btn-primary">Comprar</a>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card h-100">
            <img src="media/stihl_motosierra.jpg" class="card-img-top" alt="Motosierra Stihl">
            <div class="card-body">
              <h5 id="list-item-accesorios" class="card-title">Motosierra Stihl</h5>
              <p class="card-text">$250.000</p>
              <a href="#" class="btn btn-primary">Comprar</a>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card h-100">
            <img src="media/stihl_motosierra.jpg" class="card-img-top" alt="Motosierra Stihl">
            <div class="card-body">
              <h5 id="list-item-accesorios" class="card-title">Motosierra Stihl</h5>
              <p class="card-text">$250.000</p>
              <a href="#" class="btn btn-primary">Comprar</a>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card h-100">
            <img src="media/stihl_motosierra.jpg" class="card-img-top" alt="Motosierra Stihl">
            <div class="card-body">
              <h5 id="list-item-accesorios" class="card-title">Motosierra Stihl</h5>
              <p class="card-text">$250.000</p>
              <a href="#" class="btn btn-primary">Comprar</a>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card h-100">
            <img src="media/stihl_motosierra.jpg" class="card-img-top" alt="Motosierra Stihl">
            <div class="card-body">
              <h5 class="card-title">Motosierra Stihl</h5>
              <p class="card-text">$250.000</p>
              <a href="#" class="btn btn-primary">Comprar</a>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card h-100">
            <img src="media/stihl_motosierra.jpg" class="card-img-top" alt="Motosierra Stihl">
            <div class="card-body">
              <h5 class="card-title">Motosierra Stihl</h5>
              <p class="card-text">$250.000</p>
              <a href="#" class="btn btn-primary">Comprar</a>
            </div>
          </div>
        </div>

        <!-- Agregá más productos como desees -->

      </div>
    </section>
  </div>
</div>