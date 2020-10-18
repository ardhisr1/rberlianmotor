<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit merk</title>
</head>
<body>
    <h1>Edit merk</h1>
    <form action="<?= base_url('Merk/Edit/'. $merk['merk_id']) ?>" method="post">
        <input type="text" name="merk" placeholder="merk" value="<?= $merk['merk'] ?>">
        <button type="submit">Edit</button>
    </form>
</body>
</html>