<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POS System | User Accounts</title>

    <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
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
				<h1>User Accounts</h1>
				<p class="subtitle">View system user account information.</p>
			</div>

			<a href="/users/new" class="btn-primary">
				+ New User
			</a>
		</div>

        <div class="card">

            <table>
                <thead>
                    <tr>
						<th>Avatar</th>
						<th>Username</th>
						<th>Full Name</th>
						<th>Created At</th>
						<th>Action</th>
                    </tr>
                </thead>

                <tbody>

                    <?php foreach ($users as $user): ?>

                        <tr>
							<td>
								<?php if (! empty($user['avatar'])): ?>

									<img
										src="/uploads/avatars/<?= esc($user['avatar']) ?>"
										alt="Avatar"
										class="table-avatar"
									>

								<?php else: ?>

									<div class="table-avatar-placeholder">
										—
									</div>

								<?php endif; ?>
							</td>

							<td><?= esc($user['username']) ?></td>

							<td><?= esc($user['full_name']) ?></td>

							<td><?= esc($user['created_at']) ?></td>

							<td>
								<a
									href="/users/edit/<?= $user['id'] ?>"
									class="btn-edit"
								>
									Edit
								</a>
							</td>

                        </tr>

                    <?php endforeach; ?>

                </tbody>
            </table>

        </div>

    </div>

</body>
</html>