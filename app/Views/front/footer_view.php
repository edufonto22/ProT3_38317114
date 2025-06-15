<style>

  @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');

:root {
	--primary-color: #018eb1;
	--background-color:rgb(198, 174, 236);
	--dark-color: #151515;
}
  
        
/* ********************************** */
/*               FOOTER               */
/* ********************************** */
footer{
    background-color: var(--background-color);
}


.container-footer {
	display: flex;
	flex-direction: column;
	gap: 4rem;
	padding: 3rem;
}

.menu-footer {
	display: grid;
	grid-template-columns: repeat(3, 1fr) 30rem;
	gap: 3rem;
	justify-items: center;
}

.title-footer {
	font-weight: 600;
	font-size: 1.6rem;
	text-transform: uppercase;
}

.content p {
	font-size: 1.4rem;
	color: #fff;
	font-weight: 300;
}

.content input {
	outline: none;
	background: none;
	border: none;
	border-bottom: 2px solid #d2b495;
	cursor: pointer;
	padding: 0.5rem 0 1.2rem;
	color: var(--dark-color);
	display: block;
	margin-bottom: 3rem;
	margin-top: 2rem;
	width: 100%;
	font-family: inherit;
}

.content input::-webkit-input-placeholder {
	color: #eee;
}

.content button {
	border: none;
	background-color: #000;
	color: #fff;
	text-transform: uppercase;
	padding: 1rem 3rem;
	border-radius: 2rem;
	font-size: 1.4rem;
	font-family: inherit;
	cursor: pointer;
	font-weight: 600;
}

.content button:hover {
	background-color: var(--background-color);
	color: var(--primary-color);
}

.copyright {
	display: flex;
	justify-content: space-between;
	padding-top: 2rem;

	border-top: 1px solid #d2b495;
}

.copyright p {
	font-weight: 400;
	font-size: 1.6rem;
}


/* ********************************** */
/*       MEDIA QUERIES -- 768px       */
/* ********************************** */
@media (max-width: 768px) {
	html {
		font-size: 55%;
	}

	.hero {
		padding: 2rem;
	}

	.customer-support {
		display: none;
	}

	.content-shopping-cart {
		display: none;
	}

	.navbar {
		padding: 1rem 2rem;
	}

	.navbar .fa-bars {
		display: block;
		color: #fff;
		font-size: 3rem;
	}

	.menu {
		display: none;
	}

	.content-banner {
		max-width: 50rem;
		margin: 0 auto;
		padding: 25rem 0;
	}

	.container-features {
		grid-template-columns: repeat(2, 1fr);
		padding: 3rem 2rem;
	}

	.card-feature {
		padding: 2rem;
	}

	.heading-1 {
		font-size: 2.4rem;
	}

	.card-category {
		height: 12rem;
	}

	.card-category p {
		font-size: 2rem;
		text-align: center;
		line-height: 1;
	}

	.card-category span {
		font-size: 1.4rem;
	}

	.container-options {
		align-items: center;
	}

	.container-options span {
		text-align: center;
		padding: 1rem 2rem;
	}

	.container-products {
		grid-template-columns: repeat(auto-fit, minmax(28rem, 1fr));
	}

	.gallery {
		grid-template-rows: repeat(2, 15rem);
	}

	.container-blogs {
		overflow: hidden;
		grid-template-columns: 1fr 1fr;

		height: 52rem;
	}

	.menu-footer {
		grid-template-columns: repeat(2, 1fr);
	}

	.copyright {
		flex-direction: column;
		justify-content: center;
		align-items: center;
		gap: 1.5rem;
	}
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


        <footer>

                <div class="container container-footer">
					    <div class="contact-info">

				<div class="copyright">
					<p>
						Wewar Company &copy; 2025
					</p>
                </div>
				</div>
			</div>
              <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
		</footer>
</html>

<!--
<footer>
     <div class="footer-content">
        <div class="social-icon">
            <a href="#" class="social-icon"><img src="" alt=""></a>
            <a href="#" class="social-icon"><img src="" alt=""></a>
            <a href="#" class="social-icon"><img src="" alt=""></a>
        
        </div>
        <p>Derechos de autor 2025 | Empresa</p>
     </div>   

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>

</footer>
</html>
-->