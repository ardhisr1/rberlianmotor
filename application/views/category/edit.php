<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Edit kategori</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?= base_url() ?>admin-dashboard">Home</a></li>
            <li class="breadcrumb-item"><a href="<?= base_url() ?>list-category">Manajemen Katagori</a></li>
            <li class="breadcrumb-item active">Edit Katagori</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <!-- column -->
        <div class="col-md-12">

          <!-- general form elements -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Katagori</h3>
            </div>
            <!-- /.card-header -->

              <!-- form start -->
            <form role="form" action="<?= base_url('edited-category/'. $category['kategory_id']) ?>" method="post" enctype="multipart/form-data">
              <div class="card-body">

                <!-- Category -->
                <div class="form-group">
                  <label for="Category">Katagori</label>
                    <input type="text" class="form-control" name="category" placeholder="Katagori" value="<?= $category['category'] ?>" >
                    <span><?= form_error('category') ?></span>
                </div>

              </div>
              <!-- /.card-body -->

              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Edit Katagori</button>
              </div>
            </form>
          </div>
          <!-- /.card -->
        </div>
        <!-- /. col -->
      </div>
      <!-- /. row -->
    </div>
    <!-- /. container -->
  </section>
  <!-- Main Content -->
</div>
<!-- Content Wrapper -->


