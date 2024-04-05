<!DOCTYPE html>
<html>
<head>
	<title>College Event Tracking</title>
	<style>
		body {
			background-color: #f2f2f2;
			font-family: Arial, sans-serif;
			margin: 0;
			padding: 0;
		}

		header {
			background-color: #333;
			color: #fff;
			padding: 20px;
			text-align: center;
		}

		h1 {
			margin-top: 0;
		}

		main {
			display: flex;
			flex-wrap: wrap;
			justify-content: space-between;
			padding: 20px;
		}

		.message {
			background-color: #fff;
			border: 1px solid #ccc;
			border-radius: 5px;
			box-shadow: 2px 2px 5px #ccc;
			flex-basis: 48%;
			margin-bottom: 20px;
			padding: 20px;
			cursor: pointer;
			transition: background-color 0.2s ease-in-out;
		}

		.reminder {
			background-color: #f9f9f9;
			border-color: #aaa;
			color: #555;
		}

		.certificate {
			background-color: #e6ffe6;
			border-color: #66cc66;
			color: #006600;
		}

		.message:hover {
			background-color: #f2f2f2;
		}
	</style>
</head>
<body>
	<header>
		<h1>College Event Tracking</h1>
	</header>
	<main>
		<div class="message reminder" onclick="location.href='email.php';">
			<h2>Reminder</h2>
			<p>Click here to send a reminder to all participants.</p>
		</div>
		<div class="message certificate" onclick="location.href='certificate.php';">
			<h2>Certificates</h2>
			<p>Certificates sent to all participants.</p>
		</div>
	</main>
</body>
</html>
