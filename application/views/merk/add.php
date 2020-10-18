<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add merk</title>
</head>
<body>
    <h1>add merk</h1>
    <form action="<?= base_url() ?>Merk/Add" method="post">
        <input type="text" name="merk" placeholder="merk" required>
        <button type="submit">Add</button>
    </form>
</body>
</html>