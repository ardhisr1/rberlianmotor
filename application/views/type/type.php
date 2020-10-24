  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Manajemen Tipe Kendaraan</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= base_url() ?>admin-dashboard">Home</a></li>
              <li class="breadcrumb-item active">Manajemen Tipe Kendaraan</li>
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
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Daftar Tipe Kendaraan</h3>

                <div class="card-tools">
                <button type="button" class="btn btn-outline-primary"><a href="<?= base_url();?>add-type">Tambah Tipe Kendaraan</a></button><br>
            <!-- <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                    </div>
                  </div>
            -->
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>Id</th>
                      <th>Tipe Kendaraan</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php foreach ($types as $type) : ?>
                    <tr>
                      <td><?= $type['type_id']?></td>
                      <td><?= $type['type'] ?></td>
                      <td>
                        <a class="btn btn-app" href="<?= base_url('edit-type/'. $type['type_id']) ?>"><i class="fas fa-edit"></i>edit</a>
                        <a class="btn btn-app" href="<?= base_url('delete-type/'. $type['type_id']) ?>"><i class="fas fa-trash"></i>delete</a>
                      </td>
                    </tr>
                  <?php endforeach; ?>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>





    
<!-- Main content -->
<section class="content">
    <a href="<?= base_url('add-type') ?>">Add type</a>
    <ul>
        <?php foreach ($types as $type) : ?>
            <li>
                <?= $type['type'] ?>
                <a href="<?= base_url('edit-type/'. $type['type_id']) ?>">edit</a> |
                <a href="<?= base_url('delete-type/'. $type['type_id']) ?>">delete</a>
            </li>
        <?php endforeach; ?>
    </ul>
</section>
