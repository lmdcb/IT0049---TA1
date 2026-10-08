<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>POS System | Edit User</title>

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
                <h1>Edit User</h1>
                <p class="subtitle">
                    Update user information and profile picture.
                </p>
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

            <form
                action="/users/update/<?= $user['id'] ?>"
                method="post"
                enctype="multipart/form-data"
            >

                <?= csrf_field() ?>

                <div class="form-group">
                    <label for="username">Username</label>

                    <input
                        type="text"
                        id="username"
                        name="username"
                        value="<?= old('username', $user['username']) ?>"
                        placeholder="Enter username"
                    >
                </div>

                <div class="form-group">
                    <label for="full_name">Full Name</label>

                    <input
                        type="text"
                        id="full_name"
                        name="full_name"
                        value="<?= old('full_name', $user['full_name']) ?>"
                        placeholder="Enter full name"
                    >
                </div>

                <div class="form-group">
                    <label>Current Profile Picture</label>

                    <div class="avatar-preview">

                        <?php if (! empty($user['avatar'])): ?>

                            <img
                                src="/uploads/avatars/<?= esc($user['avatar']) ?>"
                                alt="User Avatar"
                            >

                        <?php else: ?>

                            <div class="avatar-placeholder">
                                No Image
                            </div>

                        <?php endif; ?>

                    </div>
                </div>

                <div class="form-group">
                    <label for="avatar">Profile Picture</label>

                    <input
                        type="file"
                        id="avatar"
                        name="avatar"
                        accept=".jpg,.jpeg,.png,image/jpeg,image/png"
                    >

                    <small class="form-help">
                        JPG or PNG only. Maximum file size: 2 MB.
                    </small>
                </div>

                <div class="form-actions">

                    <a href="/users" class="btn-secondary">
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