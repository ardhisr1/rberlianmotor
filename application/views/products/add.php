<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product</title>
</head>

<body>
    <h1>Add product</h1>
    <form action="<?= base_url('add-product') ?>" method="post" enctype="multipart/form-data">
        <input type="text" name="product" placeholder="product name">
        <span><?= form_error('product') ?></span>
        <input type="number" name="price" placeholder="product price" min="100">
        <span><?= form_error('price') ?></span>


        <!-- CATEGORY SECTION -->
        <select name="category" id="category">
            <option value="Choose category" selected disabled>Choose category</option>
            <?php foreach ($category as $cat) : ?>
                <option value="<?= $cat['kategory_id'] ?>"><?= $cat['category'] ?></option>
            <?php endforeach; ?>
        </select>
        <span><?= form_error('category') ?></span>

        <!-- TYPE SECTION -->
        <select name="type" id="type">
            <option value="Choose type" selected disabled>Choose type</option>
            <?php foreach ($type as $type) : ?>
                <option value="<?= $type['type_id'] ?>"><?= $type['type'] ?></option>
            <?php endforeach; ?>
        </select>
        <span><?= form_error('type') ?></span>


        <!-- MERK SECTION -->
        <select name="merk" id="merk">
            <option value="Choose merk" selected disabled>Choose merk</option>
            <?php foreach ($merk as $merk) : ?>
                <option value="<?= $merk['merk_id'] ?>"><?= $merk['merk'] ?></option>
            <?php endforeach; ?>
        </select>
        <span><?= form_error('merk') ?></span>


        <!-- DESCRIPTION -->
        <textarea name="desc" id="desc" cols="30" rows="10" placeholder="desc"></textarea>
        <span><?= form_error('desc') ?></span>

        <!-- IMAGE -->
        <input type="file" name="pict" id="pict">

        <button type="submit">Add</button>
    </form>
</body>

</html>