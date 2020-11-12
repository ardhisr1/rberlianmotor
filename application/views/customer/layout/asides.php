
		<!-- NAVIGATION -->
		<nav id="navigation">
			<!-- container -->
			<div class="container">
				<!-- responsive-nav -->
				<div id="responsive-nav">
					<!-- NAV -->
					<ul class="main-nav nav navbar-nav">
						<li ><a href="<?= base_url() ?>">Home</a></li>
						<li><a href="<?= base_url() ?>kategori">Kategori</a></li>
						<li><a href="<?= base_url() ?>merk">Merek</a></li>
						<li><a href="<?= base_url() ?>tipe-kendaraan">Tipe Kendaraan</a></li>
						<li class="active"><a href="<?= base_url() ?>jual-beli-sparepart-motor/jual-harga-distributor">Suku-Cadang</a></li>
					</ul>
					<!-- /NAV -->
				</div>
				<!-- /responsive-nav -->
			</div>
			<!-- /container -->
		</nav>
		<!-- /NAVIGATION -->

<!-- BREADCRUMB -->
		<div id="breadcrumb" class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-12">
					<h3 class="breadcrumb-header">Daftar Suku Cadang</h3>
						<ul class="breadcrumb-tree">
							<li><a href="<?= base_url() ?>">Home</a></li>
							<li><a href="#">Suku Cadang</a></li>
						</ul>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /BREADCRUMB -->

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<!-- ASIDE -->
					<div id="aside" class="col-md-3">
						<!-- aside Widget -->
						<div class="aside">
							<h3 class="aside-title">Kategori</h3>
							<div class="checkbox-filter">
								<?php foreach ($categories as $category) : ?>
								<div class="input-checkbox">
									<input type="checkbox" id="category-1">
									<label for="category-1">
										<span></span>
										<?= $category['category'] ?>
										<small>(120)</small>
									</label>
								</div>
								<?php endforeach; ?>
							</div>
						</div>
						<!-- /aside Widget -->

						<!-- aside Widget -->
						<div class="aside">
							<h3 class="aside-title">Merek</h3>
							<div class="checkbox-filter">
							<?php foreach ($merks as $merk) : ?>
								<div class="input-checkbox">
									<input type="checkbox" id="brand-1">
									<label for="brand-1">
										<span></span>
										<?= $merk['merk'] ?>
										<small>(578)</small>
									</label>
								</div>
							<?php endforeach; ?>
							</div>
						</div>
						<!-- /aside Widget -->

						<!-- aside Widget 
						<div class="aside">
							<h3 class="aside-title">Rekomendasi</h3>
							<div class="product-widget">
								<div class="product-img">
									<img src="<?= base_url(); ?>assets/electro/img/product01.png" alt="">
								</div>
								<div class="product-body">
									<p class="product-category">Category</p>
									<h3 class="product-name"><a href="#">product name goes here</a></h3>
									<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
								</div>
							</div>

							<div class="product-widget">
								<div class="product-img">
									<img src="<?= base_url(); ?>assets/electro/img/product02.png" alt="">
								</div>
								<div class="product-body">
									<p class="product-category">Category</p>
									<h3 class="product-name"><a href="#">product name goes here</a></h3>
									<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
								</div>
							</div>

							<div class="product-widget">
								<div class="product-img">
									<img src="<?= base_url(); ?>assets/electro/img/product03.png" alt="">
								</div>
								<div class="product-body">
									<p class="product-category">Category</p>
									<h3 class="product-name"><a href="#">product name goes here</a></h3>
									<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
								</div>
							</div>
						</div>
						 /aside Widget -->
					</div>
                    <!-- /ASIDE -->
                    