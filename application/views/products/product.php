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
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Manajemen Produk</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->


<!-- Main content -->
<section class="content">
    <a href="<?= base_url('add-product') ?>">Add product</a>
    <table border="1">
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
                    <a href="<?= base_url('delete-product/'. $product['product_id']) ?>">delete</a> |
                    <a href="<?= base_url('edit-product/'. $product['product_id']) ?>">edit</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</section>
