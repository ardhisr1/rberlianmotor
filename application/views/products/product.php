<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Manajemen Produk</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?= base_url() ?>admin-dashboard">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Manajemen Produk</a></li>
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
              <h4 class="card-title">Daftar Barang</h4>
            <div class="card-tools">
              <button type="button" class="btn btn-outline-primary"><a href="<?= base_url();?>add-product">Tambah Produk</a></button>
            </div>
          </div>
          <!-- /.card-header -->

          <!-- Data Table -->
          <div class="card-body"> 
            <div> 
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>Product</th>
                    <th>Price</th>
                    <th>Category</th>
                    <th>Type</th>
                    <th>Merk</th>
                    <th>Desc</th>
                    <th>Pict</th>
                    <th>Stok</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                <?php foreach ($products as $product) : ?>
                  <tr>
                    <td><?= $product['name'] ?></td>
                    <td><?= number_format($product['price']) ?></td>
                    <td><?= $product['category'] ?></td>
                    <td><?= $product['type'] ?></td>
                    <td><?= $product['merk'] ?></td>
                    <td><?= $product['description'] ?></td>
                    <td>
                      <img src="<?= base_url('assets/product-image/') . $product['pict'] ?>" alt="<?= $product['name'] . '-image' ?>" style="width: 100px">
                    </td>
                    <td><?= $product['stok'] ?></td>
                    <td>

                    <a class="btn btn-app" href="<?= base_url('delete-product/'. $product['product_id']) ?>"><i class="fas fa-trash"></i>delete</a>
                    <a class="btn btn-app" href="<?= base_url('edit-product/'. $product['product_id']) ?>"> <i class="fas fa-edit"></i> edit</a>
                    </td>
                  </tr>
              <?php endforeach; ?>
              </tbody>
              <tfoot>
                <tr>
                  <th>Product</th>
                  <th>Price</th>
                  <th>Category</th>
                  <th>Type</th>
                  <th>Merk</th>
                  <th>Desc</th>
                  <th>Pict</th>
                  <th>Stok</th>
                  <th>Action</th>
                </tr>
              </tfoot>
            </table>
          </div> 
          <!-- /.Data Table -->
        </div>
        <!-- /.card -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </div>
  <!-- /.container-fluid -->
</section>
<!-- /.content -->
</div>
<!-- content wrapper -->

<!-- DataTables -->
<script src="<?= base_url() ?>/assets/admin/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url() ?>/assets/admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?= base_url() ?>/assets/admin/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?= base_url() ?>/assets/admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>

<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
