<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>POS System | Edit Customer</title>

    <link rel="stylesheet" href="/css/style.css">
</head>

<body>

    
	<nav>
		<div class="brand">POS System</div>

		<a href="/">Home</a>
		<a href="/about">About</a>
		<a href="/customers">Customer Accounts</a>
		<a href="/users">User Accounts</a>

		<form action="/logout" method="post" class="logout-form">
			<?= csrf_field() ?>

			<button type="submit" class="logout-btn">
				Logout
			</button>
		</form>
	</nav>


    <div class="container">

        <div class="page-header">
            <div>
                <h1>Edit Customer</h1>
                <p class="subtitle">Update customer account information.</p>
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

            <form action="/customers/update/<?= $customer['id'] ?>" method="post">

                <?= csrf_field() ?>

                <div class="form-group">
                    <label for="full_name">Full Name</label>

                    <input
                        type="text"
                        id="full_name"
                        name="full_name"
                        value="<?= old('full_name', $customer['full_name']) ?>"
                        placeholder="Enter full name"
                    >
                </div>

                <div class="form-group">
                    <label for="email">Email Address</label>

                    <input
                        type="text"
                        id="email"
                        name="email"
                        value="<?= old('email', $customer['email']) ?>"
                        placeholder="Enter email address"
                    >
                </div>

                <div class="form-group">
                    <label for="phone">Phone Number</label>

                    <input
                        type="text"
                        id="phone"
                        name="phone"
                        value="<?= old('phone', $customer['phone']) ?>"
                        placeholder="Enter phone number"
                    >
                </div>

                <div class="form-actions">

                    <a href="/customers" class="btn-secondary">
                        Cancel
                    </a>

                    <button type="submit" class="btn-primary">
                        Save Changes
                    </button>

                </div>

            </form>

        </div>

    </div>

</body>
</html>