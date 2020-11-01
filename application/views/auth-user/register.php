

		<!-- BREADCRUMB -->
		<div id="breadcrumb" class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<h3 class="breadcrumb-header">Daftar</h3>
						<ul class="breadcrumb-tree">
							<li><a href="<?= base_url() ?>">Home</a></li>
							<li class="active">Daftar</li>
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
					<div class="col-md-7">
						<!-- Login -->
						<div class="billing-details">
							<div class="section-title">
								<h3 class="title">Daftar Akun</h3>
                            </div>
                            <form method="post">
                            <div class="form-group">
                                <input class="input" type="text" name="name" id="name" placeholder="Masukan Nama Kamu" value="<?= set_value('name') ?>">
                                 <!-- MESSAGE IF ERROR -->
                                <span><?= form_error('name') ?></span> 
							</div>
							<div class="form-group">
                                <input class="input" type="email" name="email" placeholder="Masukan Email Aktiv" id="email" value="<?= set_value('email') ?>">
                                <!-- MESSAGE IF ERROR -->
                                <span><?= form_error('email') ?></span> 
							</div>
							<div class="form-group">
                                <input class="input" type="password" name="password" id="password" placeholder="Masukan Password Kamu">
                                <!-- MESSAGE IF ERROR -->
                                <span><?= form_error('password') ?></span> 
                            </div>
							<div class="input-checkbox">
							<input type="checkbox" id="terms">
							<label for="terms">
								<span></span>
								Saya telah membaca dan menerima <a href="#">Syarat & Ketentuan</a>
							</label>
						</div><br>
                        <button type="submit" class="primary-btn order-submit">Daftar Sekarang</button>
                        </form>
                        </div>
						<!-- /Login -->
					</div>		
				</div>
			</div>
		</div>
