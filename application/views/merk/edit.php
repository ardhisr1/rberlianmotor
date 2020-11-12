<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Edit Merek</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?= base_url() ?>admin-dashboard">Home</a></li>
            <li class="breadcrumb-item"><a href="<?= base_url() ?>list-merk">Manajemen Merek</a></li>
            <li class="breadcrumb-item active">Edit Merek</li>
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
              <h3 class="card-title">Nama Merek</h3>
            </div>
            <!-- /.card-header -->

              <!-- form start -->
            <form role="form" action="<?= base_url('edited-merk/'. $merk['merk_id']) ?>" method="post" enctype="multipart/form-data">
              <div class="card-body">

                <!-- Merk -->
                <div class="form-group">
                  <label for="Merk">Nama Merek</label>
                    <input type="text" class="form-control" name="merk" placeholder="Nama Merek" value="<?= $merk['merk'] ?>" >
                    <span><?= form_error('merk') ?></span>
                </div>

              </div>
              <!-- /.card-body -->

              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Edit Merk</button>
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






    <form action="<?= base_url('Merk/Edit/'. $merk['merk_id']) ?>" method="post">
        <input type="text" name="merk" placeholder="merk" value="<?= $merk['merk'] ?>">
        <button type="submit">Edit</button>
    </form>
