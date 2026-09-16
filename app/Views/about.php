<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POS System | About</title>

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

        <h1>About</h1>
        <p class="subtitle">Learn more about the application.</p>

        <div class="card">
            <h2>Point-of-Sale System</h2>

            <br>

            <p>
                This is a basic Point-of-Sale system built using
                CodeIgniter 4. It demonstrates routing, controllers,
                views, and static PHP arrays using the MVC architecture.
            </p>
        </div>

    </div>

</body>
</html>