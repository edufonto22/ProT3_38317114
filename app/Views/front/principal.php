<style>

@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');

:root {
	--primary-color: #018eb1;
	--background-color: #d8ccec;
	--dark-color: #151515;
}

.carousel-item {
  position: relative;
  height: 500px; /* o el alto que prefieras */
  overflow: hidden;
}

.carousel-item img {
  object-fit: cover;
  height: 100%;
  width: 100%;
}

.carousel-full-overlay {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0, 0, 0, 0.4); /* fondo semitransparente */
  color: white;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  text-align: center;
  padding: 20px;
  z-index: 2;
   pointer-events: none; /* <- Esto permite que los eventos pasen al carrusel */
}


.carousel-full-overlay * {
  pointer-events: auto; /* <- Esto habilita clics en el contenido (botones, links, etc) */
}

.carousel-full-overlay h1 {
  font-size: 2.5rem;
  font-weight: bold;
}

.carousel-full-overlay .btn {
  font-size: 1.2rem;
  padding: 10px 20px;
}


@media (max-width: 768px) {
  .carousel-caption-custom {
    bottom: 10%;
    left: 5%;
    max-width: 90%;
    font-size: 14px;
    padding: 10px;
  }

  .carousel-caption-custom h2 {
    font-size: 1.2rem;
  }
}


html {
	font-size: 62.5%;
	font-family: 'Poppins', sans-serif;
}

* {
	margin: 0;
	padding: 0;
	box-sizing: border-box;
}

/* ********************************** */
/*             UTILIDADES             */
/* ********************************** */
.container {
	max-width: 120rem;
	margin: 0 auto;
}

.heading-1 {
	text-align: center;
	font-weight: 500;
	font-size: 3rem;
}

/* ********************************** */
/*            MAIN CONTENT            */
/* ********************************** */
.main-content {
	background-color: var(--background-color);
}

/* ********************************** */
/*              FEATURES              */
/* ********************************** */
.container-features {
	display: grid;
	grid-template-columns: repeat(4, 1fr);
	gap: 3rem;
	padding: 3rem 0;
}

.card-feature {
	display: flex;
	align-items: center;
	justify-content: center;
	gap: 1.5rem;

	background-color: #fff;
	border-radius: 1rem;
	padding: 1.5rem 0;
}

.card-feature i {
	font-size: 2.7rem;
	color: var(--primary-color);
}

.feature-content {
	display: flex;
	flex-direction: column;
	gap: 0.5rem;
}

.feature-content span {
	font-weight: 700;
	font-size: 1.2rem;
	color: var(--dark-color);
}

.feature-content p {
	color: #777;
	font-weight: 500;
}

/* ********************************** */
/*             CATEGORIES             */
/* ********************************** */

.top-categories {
	display: flex;
	flex-direction: column;
	gap: 2rem;
	margin-bottom: 3rem;
}

.container-categories {
	display: grid;
	grid-template-columns: repeat(3, 1fr);
	gap: 3rem;
}

.card-category {
	height: 20rem;
	display: flex;
	flex-direction: column;
	align-items: center;
	justify-content: center;
	border-radius: 2rem;
	gap: 2rem;
}

.category-maq-agricola {
	background-image: linear-gradient(#00000080, #00000080),
		url('media/maquina_agricola.jfif');
	background-size: cover;
	background-position: bottom;
	background-repeat: no-repeat;
}

.category-maq-pesadas {
	background-image: linear-gradient(#00000080, #00000080),
		url('media/retroexcavadora.jfif');
	background-size: cover;
	background-position: center;
	background-repeat: no-repeat;
}

.category-maq-industriales {
	background-image: linear-gradient(#00000080, #00000080),
		url('media/robotica_industrial.jpg');
	background-size: cover;
	background-position: center;
	background-repeat: no-repeat;
}

.card-category p {
	font-size: 2.5rem;
	color: #fff;
	text-transform: capitalize;
	position: relative;
}

.card-category p::after {
	content: '';
	width: 2.5rem;
	height: 2px;
	background-color: #fff;
	position: absolute;
	bottom: -1rem;
	left: 50%;
	transform: translate(-50%, 50%);
}

.card-category span {
	font-size: 1.6rem;
	color: #fff;
	cursor: pointer;
}

.card-category span:hover {
	color: var(--primary-color);
}

/* ********************************** */
/*            TOP PRODUCTS            */
/* ********************************** */
.top-products {
	display: flex;
	flex-direction: column;
	gap: 2rem;
	margin-bottom: 3rem;
}

.container-options {
	display: flex;
	justify-content: center;
	gap: 2rem;
	margin-bottom: 1rem;
}

.container-options span {
	color: #777;
	background-color: #fff;
	padding: 0.7rem 3rem;
	font-size: 1.4rem;
	text-transform: capitalize;
	border-radius: 2rem;
	cursor: pointer;
}

.container-options span:hover {
	background-color: var(--primary-color);
	color: #fff;
}

.container-options span.active {
	background-color: var(--primary-color);
	color: #fff;
}

/* Products */
.container-products {
	display: grid;
	grid-template-columns: repeat(auto-fit, minmax(20rem, 1fr));
	gap: 3rem;
}

.card-product {
	background-color: #fff;
	padding: 2rem 3rem;
	border-radius: 0.5rem;
	cursor: pointer;
	box-shadow: 0 0 2px rgba(0, 0, 0, 0.1);
}

.container-img {
	position: relative;
}

.container-img img {
	width: 100%;
}

.container-img .discount {
	position: absolute;
	left: 0;
	background-color: var(--primary-color);
	color: #fff;
	padding: 2px 1.2rem;
	border-radius: 1rem;
	font-size: 1.2rem;
}

.card-product:hover .discount {
	background-color: #000;
}

.button-group {
	display: flex;
	flex-direction: column;
	gap: 1rem;

	position: absolute;
	top: 0;
	right: -3rem;
	z-index: -1;
	transition: all 0.4s ease;
}

.button-group span {
	border: 1px solid var(--primary-color);
	padding: 0.8rem;

	display: flex;
	align-items: center;
	justify-content: center;
	border-radius: 50%;
	cursor: pointer;
	transition: all 0.4s ease;
}

.button-group span:hover {
	background-color: var(--primary-color);
}

.button-group span i {
	font-size: 1.5rem;
	color: var(--primary-color);
}

.button-group span:hover i {
	color: #fff;
}

.card-product:hover .button-group {
	z-index: 0;
	right: -1rem;
}

.content-card-product {
	display: grid;
	justify-items: center;
	grid-template-columns: 1fr 1fr;
	grid-template-rows: repeat(4, min-content);
	row-gap: 1rem;
}

.stars {
	grid-row: 1/2;
	grid-column: 1/-1;
}

.stars i {
	font-size: 1.3rem;
	color: var(--primary-color);
}

.content-card-product h3 {
	grid-row: 2/3;
	grid-column: 1/-1;

	font-weight: 400;
	font-size: 1.6rem;
	margin-bottom: 1rem;
	cursor: pointer;
}

.content-card-product h3:hover {
	color: var(--primary-color);
}

.add-cart {
	justify-self: start;
	border: 2px solid var(--primary-color);
	padding: 1rem;
	border-radius: 50%;
	cursor: pointer;
	transition: all 0.4s ease;

	display: flex;
	align-items: center;
	justify-content: center;
}

.add-cart:hover {
	background-color: var(--primary-color);
}

.add-cart i {
	font-size: 1.5rem;
	color: var(--primary-color);
}

.add-cart:hover i {
	color: #fff;
}

.content-card-product .price {
	justify-self: end;
	align-self: center;

	font-size: 1.7rem;
	font-weight: 600;
}

.content-card-product .price span {
	font-size: 1.5rem;
	font-weight: 400;
	text-decoration: line-through;
	color: #777;
	margin-left: 0.5rem;
}

/* ********************************** */
/*               GALLERY              */
/* ********************************** */
.gallery {
	display: grid;
	grid-template-columns: repeat(4, 1fr);
	grid-template-rows: repeat(2, 30rem);
	gap: 1.5rem;
	margin-bottom: 3rem;
}

.gallery img {
	width: 100%;
	height: 100%;
	object-fit: cover;
}

.gallery-img-3 {
	grid-column: 2/4;
	grid-row: 1/3;
}

/* ********************************** */
/*              SPECIALS              */
/* ********************************** */
.specials {
	display: flex;
	flex-direction: column;
	gap: 2rem;
	margin-bottom: 3rem;
}

/* ********************************** */
/*                BLOGS               */
/* ********************************** */
.blogs {
	display: flex;
	flex-direction: column;
	gap: 2rem;
}

.container-blogs {
	display: grid;
	grid-template-columns: repeat(3, 1fr);
	gap: 3rem;
}

.card-blog {
	display: flex;
	flex-direction: column;
	gap: 2rem;
}

.card-blog .container-img {
	border-radius: 2rem;
	cursor: pointer;
	position: relative;
	overflow: hidden;
}

.button-group-blog {
	position: absolute;
	bottom: 1.5rem;
	right: -2.5rem;

	display: flex;
	gap: 0.7rem;
	z-index: -1;
	transition: all 0.3s ease;
}

.card-blog:hover .button-group-blog {
	z-index: 0;
	right: 1.5rem;
}

.button-group-blog span {
	background-color: #fff;
	padding: 1rem;
	border-radius: 50%;
	transition: all 0.4s ease;

	display: flex;
	align-items: center;
	justify-content: center;
}

.button-group-blog span i {
	font-size: 1.3rem;
}

.button-group-blog span:hover {
	background-color: var(--primary-color);
}

.button-group-blog span:hover i {
	color: #fff;
}

.content-blog h3 {
	font-size: 1.8rem;
	margin-bottom: 1.7rem;
	color: var(--dark-color);
	font-weight: 500;
}

.content-blog h3:hover {
	color: var(--primary-color);
	cursor: pointer;
}

.content-blog p {
	margin-top: 1rem;
	font-size: 1.4rem;
	color: #777;
}

.content-blog span {
	color: var(--primary-color);
	font-size: 1.3rem;
}

.btn-read-more {
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

.btn-read-more:hover {
	background-color: var(--dark-color);
}


/* ********************************** */
/*       MEDIA QUERIES -- 468px       */
/* ********************************** */
@media (max-width: 468px) {
	html {
		font-size: 42.5%;
	}

	.content-banner {
		max-width: 50rem;
		padding: 22rem 0;
	}

	.heading-1 {
		font-size: 2.8rem;
	}

	.card-feature {
		flex-direction: column;
		border-radius: 2rem;
	}

	.feature-content {
		align-items: center;
	}

	.feature-content p {
		font-size: 1.4rem;
		text-align: center;
	}

	.feature-content span {
		font-size: 1.6rem;
		text-align: center;
	}

	.container-options span {
		font-size: 1.8rem;
		padding: 1rem 1.5rem;
		font-weight: 500;
	}

	.container-products {
		grid-template-columns: repeat(auto-fit, minmax(25rem, 1fr));
		gap: 1rem;
	}

	.container-img .discount {
		font-size: 2rem;
	}

	.content-card-product h3 {
		font-size: 2.2rem;
	}

	.gallery {
		grid-template-rows: repeat(2, 20rem);
	}

	.blogs {
		padding: 2rem;
	}

	.container-blogs {
		grid-template-columns: 1fr;
		height: 75rem;
	}

	.content-blog h3 {
		font-size: 2.4rem;
	}

	.content-blog span {
		font-size: 1.8rem;
	}

	.content-blog p {
		font-size: 2.2rem;
	}

	.btn-read-more{
		font-size: 1.8rem;
	}

	.contact-info ul,
	.information ul,
	.my-account ul{
		display: none;
	}

	.contact-info {
		align-items: center;
	}

	.menu-footer{
		grid-template-columns: 1fr;
	}

	.content p{
		font-size: 1.6rem;
	}
}



</style>


<!--Inicio de Carrusel-->

<div id="carouselExampleIndicators" class="carousel slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="media/maquina_agricola_2.jfif" class="d-block w-100" alt="...">
     <div class="carousel-full-overlay">
    <h1>Potencia para el campo</h1> 
    <br>
    <br>
    <br>
    <a href="#" class="btn-link">Más Info</a>
  </div>
      <a href="#" class="btn btn-primary">Obtener más info</a>
         
    </div>
    <div class="carousel-item">
      <img src="media/stihl_motosierra.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="media/dumper_cat.jfif" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
		

            <main class="main-content">
			<section class="container container-features">
				<div class="card-feature">
					<i class="fa-solid fa-plane-up"></i>
					<div class="feature-content">
						<span>Envío gratuito a nivel mundial</span>
						<p>En pedido superior a $200.000</p>
					</div>
				</div>
				<div class="card-feature">
					<i class="fa-solid fa-wallet"></i>
					<div class="feature-content">
						<span>Contrareembolso</span>
						<p>100% garantía de devolución de dinero</p>
					</div>
				</div>
				<div class="card-feature">
					<i class="fa-solid fa-gift"></i>
					<div class="feature-content">
						<span>Tarjeta regalo especial</span>
						<p>Ofrece bonos especiales con regalo</p>
					</div>
				</div>
				<div class="card-feature">
					<i class="fa-solid fa-headset"></i>
					<div class="feature-content">
						<span>Servicio al cliente 24/7</span>
						<p>LLámenos 24/7 al 123-456-7890</p>
					</div>
				</div>
			</section>

			<section class="container top-categories">
				<h1 class="heading-1">Mejores Categorías</h1>
				<div class="container-categories">
					<div class="card-category category-maq-agricola">
						<p>Máquinas Agrícolas</p>
						<span><a href="producto">Ver más</a></span>
					</div>
					<div class="card-category category-maq-pesadas">
						<p>Máquinarias pesadas</p>
						<span><a href="producto">Ver más</a></span>
					</div>
					<div class="card-category category-maq-industriales">
						<p>Máquinas Industriales</p>
						<span><a href="producto">Ver más</a></span>
					</div>
				</div>
			</section>

			<section class="container top-products">
				<h1 class="heading-1">Mejores Productos</h1>

<!--<div class="container-options">
					<span class="active">Destacados</span>-->
					<!--<span><a href="#"></a>Más recientes</span>
					<span><a href="#"></a>Mejores Vendidos</span>
				</div>-->

				<div class="container-products">
					<!-- Producto 1 -->
					<div class="card-product">
						<div class="container-img">
							<img src="media/llaves_allen.jfif" alt="Llaves Allen" />
							<span class="discount">-13%</span>
							<div class="button-group">
								<span>
									<i class="fa-regular fa-eye"></i>
								</span>
								<span>
									<i class="fa-regular fa-heart"></i>
								</span>
								<span>
									<i class="fa-solid fa-code-compare"></i>
								</span>
							</div>
						</div>
						<div class="content-card-product">
							<div class="stars">
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
								<i class="fa-regular fa-star"></i>
							</div>
							<h3>Llaves Allen</h3>
							<span class="add-cart">
								<i class="fa-solid fa-basket-shopping"></i>
							</span>
							<p class="price">$4.60 <span>$5.30</span></p>
						</div>
					</div>
					<!-- Producto 2 -->
					<div class="card-product">
						<div class="container-img">
							<img
								src="media/electro_valvula.jfif"
								alt="electrovalvula.jpg"
							/>
							<span class="discount">-22%</span>
							<div class="button-group">
								<span>
									<i class="fa-regular fa-eye"></i>
								</span>
								<span>
									<i class="fa-regular fa-heart"></i>
								</span>
								<span>
									<i class="fa-solid fa-code-compare"></i>
								</span>
							</div>
						</div>
						<div class="content-card-product">
							<div class="stars">
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
								<i class="fa-regular fa-star"></i>
								<i class="fa-regular fa-star"></i>
							</div>
							<h3>Electroválvula</h3>
							<span class="add-cart">
								<i class="fa-solid fa-basket-shopping"></i>
							</span>
							<p class="price"><span>$50.0000</span>$30.000 </p>
						</div>
					</div>
					<!--  -->
					<div class="card-product">
						<div class="container-img">
							<img
								src="media/compresor.jpg"
								alt="Compresor"
							/>
							<div class="button-group">
								<span>
									<i class="fa-regular fa-eye"></i>
								</span>
								<span>
									<i class="fa-regular fa-heart"></i>
								</span>
								<span>
									<i class="fa-solid fa-code-compare"></i>
								</span>
							</div>
						</div>
						<div class="content-card-product">
							<div class="stars">
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
							</div>
							<h3>Compresor</h3>
							<span class="add-cart">
								<i class="fa-solid fa-basket-shopping"></i>
							</span>
							<p class="price">$370.000</p>
						</div>
					</div>
					<!--Producto 4 -->
					<div class="card-product">
						<div class="container-img">
							<img src="media/kit_herramientas.jfif" alt="Kit Herramientas" />
							<div class="button-group">
								<span>
									<i class="fa-regular fa-eye"></i>
								</span>
								<span>
									<i class="fa-regular fa-heart"></i>
								</span>
								<span>
									<i class="fa-solid fa-code-compare"></i>
								</span>
							</div>
						</div>
						<div class="content-card-product">
							<div class="stars">
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
								<i class="fa-regular fa-star"></i>
							</div>
							<h3>Kit Herramientas</h3>
							<span class="add-cart">
								<i class="fa-solid fa-basket-shopping"></i>
							</span>
							<p class="price">$5.60</p>
						</div>
					</div>
				</div>
			</section>

		
			<section class="container specials">
				<h1 class="heading-1">Especiales</h1>

				<div class="container-products">
					<!-- Producto 1 -->
					<div class="card-product">
						<div class="container-img">
							<img src="media/escalera.jpg" alt="Escalera Dieléctrica" />
							<span class="discount">-13%</span>
							<div class="button-group">
								<span>
									<i class="fa-regular fa-eye"></i>
								</span>
								<span>
									<i class="fa-regular fa-heart"></i>
								</span>
								<span>
									<i class="fa-solid fa-code-compare"></i>
								</span>
							</div>
						</div>
						<div class="content-card-product">
							<div class="stars">
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
								<i class="fa-regular fa-star"></i>
							</div>
							<h3>Escalera Dieléctrica</h3>
							<span class="add-cart">
								<i class="fa-solid fa-basket-shopping"></i>
							</span>
							<p class="price">$350.000 <span>$380.000</span></p>
						</div>
					</div>
					<!-- Producto 2 -->
					<div class="card-product">
						<div class="container-img">
							<img
								src="media/amoladora_banco.jfif"
								alt="Amoladora de banco.jpg"
							/>
							<span class="discount">-22%</span>
							<div class="button-group">
								<span>
									<i class="fa-regular fa-eye"></i>
								</span>
								<span>
									<i class="fa-regular fa-heart"></i>
								</span>
								<span>
									<i class="fa-solid fa-code-compare"></i>
								</span>
							</div>
						</div>
						<div class="content-card-product">
							<div class="stars">
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
								<i class="fa-regular fa-star"></i>
								<i class="fa-regular fa-star"></i>
							</div>
							<h3>Amoladora de Banco</h3>
							<span class="add-cart">
								<i class="fa-solid fa-basket-shopping"></i>
							</span>
							<p class="price">$5.70 <span>$7.30</span></p>
						</div>
					</div>
					<!--  -->
					<div class="card-product">
						<div class="container-img">
							<img src="media/motosierra.jfif" alt="motosierra" />
							<span class="discount">-30%</span>
							<div class="button-group">
								<span>
									<i class="fa-regular fa-eye"></i>
								</span>
								<span>
									<i class="fa-regular fa-heart"></i>
								</span>
								<span>
									<i class="fa-solid fa-code-compare"></i>
								</span>
							</div>
						</div>
						<div class="content-card-product">
							<div class="stars">
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
							</div>
							<h3>Motosierra 1/2 hp Stihl</h3>
							<span class="add-cart">
								<i class="fa-solid fa-basket-shopping"></i>
							</span>
							<p class="price">$3.85 <span>$5.50</span></p>
						</div>
					</div>
					<!--  -->
					<div class="card-product">
						<div class="container-img">
							<img src="media/motorreductor.webp" alt="motorreductor" />
							<div class="button-group">
								<span>
									<i class="fa-regular fa-eye"></i>
								</span>
								<span>
									<i class="fa-regular fa-heart"></i>
								</span>
								<span>
									<i class="fa-solid fa-code-compare"></i>
								</span>
							</div>
						</div>
						<div class="content-card-product">
							<div class="stars">
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
								<i class="fa-regular fa-star"></i>
							</div>
							<h3>Motorreductor</h3>
							<span class="add-cart">
								<i class="fa-solid fa-basket-shopping"></i>
							</span>
							<p class="price">$5.60</p>
						</div>
					</div>
				</div>
			</section>

			<section class="container blogs">
				<h1 class="heading-1">Últimos Blogs</h1>

				<div class="container-blogs">
					<div class="card-blog">
						<div class="container-img">
							<img src="media/dumper_truck_hibrido.jfif" alt="Imagen Blog 1" />
							<div class="button-group-blog">
								<span>
									<i class="fa-solid fa-magnifying-glass"></i>
								</span>
								<span>
									<i class="fa-solid fa-link"></i>
								</span>
							</div>
						</div>
						<div class="content-blog">
							<h3>El híbrido más grande del mundo</h3>
							<span>29 Marzo 2015</span>
							<p>
								GE es una empresa que esta trabajando en la creación de muchos coches híbridos, en donde nos presenta ahora el más grande de todos ellos. Esta bestia que es utilizada para las minas, la construcción y las canteras. Estos camiones son muy similares a los de Caterpillar, en donde pueden además cargar hasta 45 toneladas métricas. Ahora tienen la posibilidad de consumir menos combustible, ya que GE ha creado un motor hibrido para este tipo de coches de construcción.
							</p>
							<div class="btn-read-more">Leer más</div>
						</div>
					</div>
					<div class="card-blog">
						<div class="container-img">
							<img src="media/calendario_cosecha.jpg" alt="Imagen Blog 2" />
							<div class="button-group-blog">
								<span>
									<i class="fa-solid fa-magnifying-glass"></i>
								</span>
								<span>
									<i class="fa-solid fa-link"></i>
								</span>
							</div>
						</div>
						<div class="content-blog">
							<h3>¿Cúando son las mejores épocas de siembras y cosechas en Argentina?</h3>
							<span>29 Noviembre 2022</span>
							<p>
								Las mejores épocas de siembra y cosecha en Argentina deben representar una referencia importante para planificar la campaña. Para lograr buenos rendimientos resulta necesario conocer el calendario para las labores agrícolas.
Las variaciones de luz y temperatura a lo largo de las épocas del año determinan la pertinencia de los cultivos. Por otra parte, saber sincronizar los trabajos de agricultura con los ciclos naturales se traduce en una mayor rentabilidad del cultivo.
A continuación, podés actualizarte acerca de las épocas de siembra y cosecha en Argentina.
							</p>
							<div class="btn-read-more">Leer más</div>
						</div>
					</div>
					<div class="card-blog">
						<div class="container-img">
							<img src="media/calendario_cosecha.jpg" alt="Imagen Blog 3" />
							<div class="button-group-blog">
								<span>
									<i class="fa-solid fa-magnifying-glass"></i>
								</span>
								<span>
									<i class="fa-solid fa-link"></i>
								</span>
							</div>
						</div>
						<div class="content-blog">
							<h3>Lorem, ipsum dolor sit</h3>
							<span>29 Noviembre 2022</span>
							<p>
								Lorem ipsum dolor sit amet consectetur adipisicing
								elit. Iste, molestiae! Ratione et, dolore ipsum
								quaerat iure illum reprehenderit non maxime amet dolor
								voluptas facilis corporis, consequatur eius est sunt
								suscipit?
							</p>
							<div class="btn-read-more">Leer más <a href="https://cocheseco.com/el-hibrido-mas-grande-del-mundo/" target="_blank"></a></div>
						</div>
					</div>
				</div>
			</section>
		</main>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>
  

</body>
