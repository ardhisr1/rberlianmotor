<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Edit Produk</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?= base_url() ?>admin-dashboard">Home</a></li>
            <li class="breadcrumb-item"><a href="<?= base_url() ?>list-product">Manajemen Produk</a></li>
            <li class="breadcrumb-item active">Edit Produk</li>
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
              <h3 class="card-title">Edit Data Produk</h3>
            </div>
            <!-- /.card-header -->

              <!-- form start -->
            <form role="form" action="<?= base_url('add-product') ?>" method="post" enctype="multipart/form-data">
              <div class="card-body">

                <!-- Name -->
                <div class="form-group">
                  <label for="Product">Nama</label>
                    <input type="text" class="form-control" name="product" placeholder="Nama Produk" value="<?= $product['name']?>">
                    <span><?= form_error('product') ?></span>
                </div>

                <!-- Price -->
                <div class="form-group">
                  <label for="exampleInputEmail1">Harga</label>
                    <input type="number" class="form-control" name="price" placeholder="Harga Produk" min="100" value="<?= $product['price'] ?>" >
                    <span><?= form_error('price') ?></span>
                  </div>

                <!-- Category -->
                <div class="form-group">
                  <label>Katagori</label>
                    <select class="form-control" name="category" id="category">
                      <option value="Choose category" selected disabled>Pilih Katagori</option>
                      <?php foreach ($category as $cat) : ?>
                         <?php if ($cat['kategory_id'] === $product['kategori_id']) : ?>
                            <option value="<?= $cat['kategory_id'] ?>" selected><?= $cat['category'] ?></option>
                        <?php else : ?>
                            <option value="<?= $cat['kategory_id'] ?>"><?= $cat['category'] ?></option>
                        <?php endif; ?>
                      <?php endforeach; ?>
                    </select>
                    <span><?= form_error('category') ?></span>
                  </div>

                <!--Type-->
                <div class="form-group">
                  <label>Tipe Kendaraan</label>
                    <select class="form-control"  name="type" id="type" >
                      <option value="Choose type" selected disabled>Plih Tipe Kendaraan</option>
                      <?php foreach ($type as $type) : ?>
                        <?php if ($type['type_id'] === $product['type_id']) : ?>
                          <option value="<?= $type['type_id'] ?>" selected><?= $type['type'] ?></option>
                        <?php else : ?>
                          <option value="<?= $type['type_id'] ?>"><?= $type['type'] ?></option>
                        <?php endif; ?>
                      <?php endforeach; ?>
                    </select>
                    <span><?= form_error('type') ?></span>
                </div>

                <!--Merk-->
                <div class="form-group">
                  <label>Merk</label>
                    <select class="form-control"name="merk" id="merk">
                      <option value="Choose merk" selected disabled>Pilih Merk</option>
                      <?php foreach ($merk as $merk) : ?>
                        <?php if ($merk['merk_id'] === $product['merk_id']) : ?>
                          <option value="<?= $merk['merk_id'] ?>" selected><?= $merk['merk'] ?></option>
                        <?php else : ?>
                          <option value="<?= $merk['merk_id'] ?>"><?= $merk['merk'] ?></option>
                        <?php endif; ?>
                      <?php endforeach; ?>
                    </select>
                    <span><?= form_error('merk') ?></span>
                </div>

                <!-- textarea -->
                <div class="form-group">
                  <label>Deskripsi Produk</label>
                    <textarea class="form-control" name="desc" id="desc" cols="30" rows="10" placeholder="Deskripsikan Produk"><?= $product['description'] ?></textarea>
                    <span><?= form_error('desc') ?></span>
                </div>

                <!-- Picture -->
                <div class="form-group">
                  <label>Edit Gambar Produk</label><br>
                  <img src="<?= base_url('assets/product-image/') . $product['pict'] ?>" alt="<?= $product['name'] . '-image' ?>" style="width: 100px">
                  <div class="input-group">
                    <div class="custom-file">
                      <input type="file" class="custom-file-input" name="pict" id=pict>
                      <label class="custom-file-label" for="InputFile"><?= $product['pict'] ?></label>
                    </div>
                    <div class="input-group-append">
                      <span class="input-group-text" id="">Upload</span>
                    </div>
                  </div>
                </div>

                </div>
                <!-- /.card-body -->

              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Tambah Produk</button>
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
    
