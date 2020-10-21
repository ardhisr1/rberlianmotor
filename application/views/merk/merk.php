  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Manajemen Merek</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Manajemen Merek</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->


<!-- Main content -->
<section class="content">
    <a href="<?= base_url('add-merk') ?>">Add merk</a>
    <ul>
        <?php foreach ($merks as $merk) : ?>
            <li>
                <?= $merk['merk'] ?>
                <a href="<?= base_url('edit-merk/'. $merk['merk_id']) ?>">edit</a> |
                <a href="<?= base_url('delete-merk/'. $merk['merk_id']) ?>">delete</a>
            </li>
        <?php endforeach; ?>
    </ul>
</section>