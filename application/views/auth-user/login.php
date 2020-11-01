
		<!-- BREADCRUMB -->
		<div id="breadcrumb" class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<h3 class="breadcrumb-header">Login</h3>
						<ul class="breadcrumb-tree">
							<li><a href="<?= base_url() ?>">Home</a></li>
							<li class="active">Login</li>
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
								<h3 class="title">Login</h3>
							</div>
							<form method="post">
							<div class="form-group">
								<input class="input" type="email" name="email" placeholder="Masukan Email Kamu" value="<?= set_value('email') ?>" >
								<!-- MESSAGE IF ERROR -->
								<span><?= form_error('email') ?></span> 	
							</div>
							<div class="form-group">
								<input class="input" type="password" name="password" placeholder="Masukan Password Kamu">
								<!-- MESSAGE IF ERROR -->
								<span><?= form_error('password') ?></span>
							</div>
							<label for="create-account">
								Belum Punya Akun?
								<a href="<?= base_url() ?>auth/register" > Daftar disini</a>
							</label>
						</div>
						<button type="submit" class="primary-btn order-submit">Login</button>
						</form>
						</div>
						<!-- /Login -->
					</div>		
				</div>
			</div>
		</div>
