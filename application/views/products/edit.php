<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>edit Product</title>
</head>

<body>
    <h1>edit product</h1>
    <form method="post" enctype="multipart/form-data">
        <input type="text" name="product" placeholder="product name" value="<?= $product['name'] ?>">
        <span><?= form_error('product') ?></span>
        <input type="number" name="price" placeholder="product price" min="100" value="<?= $product['price'] ?>">
        <span><?= form_error('price') ?></span>


        <!-- CATEGORY SECTION -->
        <select name="category" id="category">
            <option value="Choose category" disabled>Choose category</option>
            <?php foreach ($category as $cat) : ?>
                <?php if ($cat['kategory_id'] === $product['kategori_id']) : ?>
                    <option value="<?= $cat['kategory_id'] ?>" selected><?= $cat['category'] ?></option>
                <?php else : ?>
                    <option value="<?= $cat['kategory_id'] ?>"><?= $cat['category'] ?></option>
                <?php endif; ?>
            <?php endforeach; ?>
        </select>
        <span><?= form_error('category') ?></span>

        <!-- TYPE SECTION -->
        <select name="type" id="type">
            <option value="Choose type" selected disabled>Choose type</option>
            <?php foreach ($type as $type) : ?>
                <?php if ($type['type_id'] === $product['type_id']) : ?>
                    <option value="<?= $type['type_id'] ?>" selected><?= $type['type'] ?></option>
                <?php else : ?>
                    <option value="<?= $type['type_id'] ?>"><?= $type['type'] ?></option>
                <?php endif; ?>
            <?php endforeach; ?>
        </select>
        <span><?= form_error('type') ?></span>


        <!-- MERK SECTION -->
        <select name="merk" id="merk">
            <option value="Choose merk" disabled>Choose merk</option>
            <?php foreach ($merk as $merk) : ?>
                <?php if ($merk['merk_id'] === $product['merk_id']) : ?>
                    <option value="<?= $merk['merk_id'] ?>" selected><?= $merk['merk'] ?></option>
                <?php else : ?>
                    <option value="<?= $merk['merk_id'] ?>"><?= $merk['merk'] ?></option>
                <?php endif; ?>
            <?php endforeach; ?>
        </select>
        <span><?= form_error('merk') ?></span>


        <!-- DESCRIPTION -->
        <textarea name="desc" id="desc" cols="30" rows="10" placeholder="desc"><?= $product['description'] ?></textarea>
        <span><?= form_error('desc') ?></span>

        <!-- IMAGE -->
        <input type="file" name="pict" id="pict">
        
        <!-- OLD IMAGE -->
        <img src="<?= base_url('assets/product-image/') . $product['pict'] ?>" alt="<?= $product['name'] . '-image' ?>" style="width: 100px">

        <button type="submit">Add</button>
    </form>
</body>

</html>