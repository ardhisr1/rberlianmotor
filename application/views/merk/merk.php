<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Merk</title>
</head>

<body>
    <h1>List merek</h1>
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
</body>

</html>