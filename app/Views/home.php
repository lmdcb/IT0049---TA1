<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POS System | Home</title>

    <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
</head>
<body>

    <nav>
        <div class="brand">POS System</div>

        <a href="<?= base_url('/') ?>">Home</a>
        <a href="<?= base_url('about') ?>">About</a>
        <a href="<?= base_url('customers') ?>">Customer Accounts</a>
        <a href="<?= base_url('users') ?>">User Accounts</a>
    </nav>

    <div class="container">

        <div class="card welcome">
            <h1>Point-of-Sale System</h1>

            <p>
                Welcome to our basic Point-of-Sale system.
                Use the navigation above to view customer and user accounts.
            </p>
        </div>

    </div>

</body>
</html>