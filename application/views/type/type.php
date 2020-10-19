<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List type</title>
</head>

<body>
    <h1>List type</h1>
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
</body>

</html>