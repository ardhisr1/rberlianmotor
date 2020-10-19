<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Category</title>
</head>
<body>
    <h1>add Category</h1>
    <form action="<?= base_url() ?>Category/Add" method="post">
        <input type="text" name="category" placeholder="category" required>
        <button type="submit">Add</button>
    </form>
</body>
</html>