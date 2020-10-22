<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>
    <form method="post">
        <input type="email" name="email" id="email" placeholder="your email" value="<?= set_value('email') ?>">
        <!-- MESSAGE IF ERROR -->
        <span><?= form_error('email') ?></span> 

        <input type="password" name="password" id="password" placeholder="your password">
        <!-- MESSAGE IF ERROR -->
        <span><?= form_error('password') ?></span> 

        <button type="submit">Login</button>
    </form>
</body>
</html>