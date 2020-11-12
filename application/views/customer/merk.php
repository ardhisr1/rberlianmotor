
		<!-- NAVIGATION -->
		<nav id="navigation">
			<!-- container -->
			<div class="container">
				<!-- responsive-nav -->
				<div id="responsive-nav">
					<!-- NAV -->
					<ul class="main-nav nav navbar-nav">
						<li ><a href="<?= base_url() ?>">Home</a></li>
						<li ><a href="<?= base_url() ?>kategori">Kategori</a></li>
						<li class="active"><a href="<?= base_url() ?>merk">Merek</a></li>
						<li><a href="<?= base_url() ?>tipe-kendaraan">Tipe Kendaraan</a></li>
						<li><a href="<?= base_url() ?>jual-beli-sparepart-motor/jual-harga-distributor">Suku-Cadang</a></li>
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
						<h3 class="breadcrumb-header">Daftar Merek</h3>
						<ul class="breadcrumb-tree">
							<li><a href="<?= base_url() ?>">Home</a></li>
							<li class="active">Daftar Merek</li>
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
					<div class="list-group">
					<?php foreach ($merks as $merk) : ?>
						<a href="<?= base_url('jual-beli-sparepart-motor/'. $merk['merk']) ?>" class="list-group-item list-group-item-action"><?= $merk['merk'] ?></a>
					<?php endforeach; ?>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

		
