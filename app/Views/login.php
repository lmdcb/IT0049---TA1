
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>POS System | Login</title>

    <link rel="stylesheet" href="/css/style.css">
</head>

<body>

    <nav>
        <div class="brand">POS System</div>

        <a href="/">Home</a>
        <a href="/about">About</a>
        <a href="/login">Login</a>
    </nav>

    <div class="container">

        <div class="login-wrapper">

            <div class="form-card login-card">

                <div class="login-heading">
                    <h1>Welcome Back</h1>
                    <p class="subtitle">
                        Sign in to access your POS System account.
                    </p>
                </div>

                <?php $errors = session()->getFlashdata('errors'); ?>
                <?php $error = session()->getFlashdata('error'); ?>

                <?php if ($errors || $error): ?>
                    <div class="error-box">

                        <?php if ($error): ?>
                            <p><?= esc($error) ?></p>
                        <?php endif; ?>

                        <?php if ($errors): ?>
                            <?php foreach ($errors as $message): ?>
                                <p><?= esc($message) ?></p>
                            <?php endforeach; ?>
                        <?php endif; ?>

                    </div>
                <?php endif; ?>

                <form action="/login" method="post">

                    <?= csrf_field() ?>

                    <div class="form-group">
                        <label for="username">Username</label>

                        <input
                            type="text"
                            id="username"
                            name="username"
                            value="<?= esc(old('username')) ?>"
                            placeholder="Enter your username"
                            autocomplete="username"
                            required
                        >
                    </div>

                    <div class="form-group">
                        <label for="password">Password</label>

                        <input
                            type="password"
                            id="password"
                            name="password"
                            placeholder="Enter your password"
                            autocomplete="current-password"
                            required
                        >
                    </div>

                    <div class="login-actions">
                        <button type="submit" class="btn-primary">
                            Sign In
                        </button>
                    </div>

                </form>

                <p class="login-footer">
                    Authorized POS System users only.
                </p>

            </div>

        </div>

    </div>

</body>
</html>
