<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POS System | Customer Accounts</title>

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
				<h1>Customer Accounts</h1>
				<p class="subtitle">View and manage customer information.</p>
			</div>

			<a href="/customers/new" class="btn-primary">
				+ New Customer
			</a>
		</div>

        <div class="card">

            <table>
                <thead>
                    <tr>
						<th>Full Name</th>
						<th>Email</th>
						<th>Phone</th>
						<th>Action</th>
                    </tr>
                </thead>

                <tbody>

                    <?php foreach ($customers as $customer): ?>

                        <tr>
							<td><?= esc($customer['full_name']) ?></td>
							<td><?= esc($customer['email']) ?></td>
							<td><?= esc($customer['phone']) ?></td>

							<td>
								<a
									href="/customers/edit/<?= $customer['id'] ?>"
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