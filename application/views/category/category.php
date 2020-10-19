<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List category</title>
</head>

<body>
    <h1>List category</h1>
    <a href="<?= base_url('add-category') ?>">Add category</a>
    <ul>
        <?php foreach ($categories as $category) : ?>
            <li>
                <?= $category['category'] ?>
                <a href="<?= base_url('edit-category/'. $category['kategory_id']) ?>">edit</a> |
                <a href="<?= base_url('delete-category/'. $category['kategory_id']) ?>">delete</a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>

</html>