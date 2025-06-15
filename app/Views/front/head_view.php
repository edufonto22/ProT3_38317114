<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
      
	<title><php echo($titulo);?></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
      <link rel="stylesheet" href="https://fonts.google.com/specimen/Poppins?query=Poppins">
      
  </head>
  

<body>
  <header>

  <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');

:root {
	--primary-color: #018eb1;
	--background-color: #d8ccec;
	--dark-color: #151515;
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
/*               HEADER               */
/* ********************************** */
.container-hero {
	background-color: var(--background-color);
}

.hero {
	display: flex;
	justify-content: space-between;
	align-items: center;
	padding: 2rem 0;
}

.customer-support {
	display: flex;
	align-items: center;
	gap: 2rem;
}

.customer-support i {
	font-size: 3.3rem;
}

.content-customer-support {
	display: flex;
	flex-direction: column;
}

.container-logo {
	display: flex;
	align-items: center;
	gap: 0.5rem;
}

.container-logo img {
  height: 40px; /* Ajustá el tamaño según lo necesites */
  width: auto;
  object-fit: contain;
}

.container-logo i {
	font-size: 3rem;
}

.container-logo h1 a {
	text-decoration: none;
	color: #000;
	font-size: 3rem;
	text-transform: uppercase;
	letter-spacing: -1px;
}

.container-user {
	display: flex;
	gap: 1rem;
	cursor: pointer;
}

.container-user .fa-user {
	font-size: 3rem;
	color: var(--primary-color);
	padding-right: 2.5rem;
	border-right: 1px solid #e2e2e2;
}

.container-user .fa-basket-shopping {
	font-size: 3rem;
	color: var(--primary-color);
	padding-left: 1rem;
}

.content-shopping-cart {
	display: flex;
	flex-direction: column;
}

/* ************* NAVBAR ************* */
.container-navbar {
	background-color: var(--primary-color);
}

.navbar {
	display: flex;
	justify-content: space-between;
	align-items: center;
	padding: 1rem 0;
}

.navbar .fa-bars {
	display: none;
}

.menu {
	display: flex;
	gap: 2rem;
}

.menu li {
	list-style: none;
}

.menu a {
	text-decoration: none;
	font-size: 1.3rem;
	color: var(--dark-color);
	font-weight: 600;
	text-transform: uppercase;
	position: relative;
}

.menu a::after {
	content: '';
	width: 1.5rem;
	height: 1px;
	background-color: #fff;
	position: absolute;
	bottom: -3px;
	left: 50%;
	transform: translate(-50%, 50%);
	opacity: 0;
	transition: all 0.3s ease;
}

.menu a:hover::after {
	opacity: 1;
}

.menu a:hover {
	color: #fff;
}

.search-form {
	position: relative;
	display: flex;
	align-items: center;
	border: 2px solid #fff;
	border-radius: 2rem;
	background-color: #fff;
	height: 4.4rem;
	overflow: hidden;
}

.search-form input {
	outline: none;
	font-family: inherit;
	border: none;
	width: 25rem;
	font-size: 1.4rem;
	padding: 0 2rem;
	color: #777;
	cursor: pointer;
}

.search-form input::-webkit-search-cancel-button {
	appearance: none;
}

.search-form .btn-search {
	border: none;
	background-color: var(--primary-color);
	display: flex;
	align-items: center;
	justify-content: center;
	height: 100%;
	padding: 1rem;
}

.btn-search i {
	font-size: 2rem;
	color: #fff;
}

  </style>
			<div class="container-hero">
				<div class="container hero">
					<div class="customer-support">
						<i class="fa-solid fa-headset"></i>
						<div class="content-customer-support">
							<span class="text">Soporte al cliente</span>
							<span class="number">123-456-7890</span>
						</div>
					</div>

					<div class="container-logo">
            <a href="principal"></a>
						<img src="media/logo_wewar.png" alt="Logo Wewar">
						<h1 class="logo">Wewar Company</h1>
					</div>

					<div class="container-user">
            <a href="login"><i class="fa-solid fa-user"></i></a>
	
            
						<i class="fa-solid fa-basket-shopping"></i>
						<div class="content-shopping-cart">
							<span class="text">Carrito</span>
							<span class="number">(0)</span>
						</div>
					</div>
				</div>
			</div>

		</header>