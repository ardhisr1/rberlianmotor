<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Category</title>
</head>
<body>
    <h1>Edit Category</h1>
    <form action="<?= base_url('Category/Edit/'. $category['kategory_id']) ?>" method="post">
        <input type="text" name="category" placeholder="category" value="<?= $category['category'] ?>">
        <button type="submit">Edit</button>
    </form>
</body>
</html>