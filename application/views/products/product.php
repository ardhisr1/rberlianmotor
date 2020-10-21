<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Product</title>
</head>

<body>
    <h1>List Product</h1>
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
</body>

</html>