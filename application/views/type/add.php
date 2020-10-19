<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Type</title>
</head>
<body>
    <h1>add Type</h1>
    <form action="<?= base_url() ?>Type/Add" method="post">
        <input type="text" name="type" placeholder="type" required>
        <button type="submit">Add</button>
    </form>
</body>
</html>