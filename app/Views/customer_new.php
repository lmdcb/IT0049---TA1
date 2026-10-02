<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>POS System | New Customer</title>

    <link rel="stylesheet" href="/css/style.css">
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

        <div class="page-header">
            <div>
                <h1>New Customer</h1>
                <p class="subtitle">Add a new customer account.</p>
            </div>
        </div>

        <div class="form-card">

            <?php $errors = session()->getFlashdata('errors'); ?>

            <?php if ($errors): ?>
                <div class="error-box">
                    <?php foreach ($errors as $error): ?>
                        <p><?= esc($error) ?></p>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>

            <form action="/customers/create" method="post">

                <?= csrf_field() ?>

                <div class="form-group">
                    <label for="full_name">Full Name</label>

                    <input
                        type="text"
                        id="full_name"
                        name="full_name"
                        value="<?= old('full_name') ?>"
                        placeholder="Enter full name"
                    >
                </div>

                <div class="form-group">
                    <label for="email">Email Address</label>

                    <input
                        type="text"
                        id="email"
                        name="email"
                        value="<?= old('email') ?>"
                        placeholder="Enter email address"
                    >
                </div>

                <div class="form-group">
                    <label for="phone">Phone Number</label>

                    <input
                        type="text"
                        id="phone"
                        name="phone"
                        value="<?= old('phone') ?>"
                        placeholder="Enter phone number"
                    >
                </div>

                <div class="form-actions">
                    <a href="/customers" class="btn-secondary">
                        Cancel
                    </a>

                    <button type="submit" class="btn-primary">
                        Add Customer
                    </button>
                </div>

            </form>

        </div>

    </div>

</body>
</html>