<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit type</title>
</head>
<body>
    <h1>Edit type</h1>
    <form action="<?= base_url('Type/Edit/'. $type['type_id']) ?>" method="post">
        <input type="text" name="type" placeholder="type" value="<?= $type['type'] ?>">
        <button type="submit">Edit</button>
    </form>
</body>
</html>