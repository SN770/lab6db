<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="container mt-4">
		<h1>Login</h1>
		<form action="add.php" method="post">
			Login: <input type="text" class="form-control" name="login" id="login" placeholder="Enter Login" required><br>
			Password: <input type="password" class="form-control" name="pass" id="pass" placeholder="Enter Password" required><br>
            Name: <input type="name" class="form-control" name="name" id="name" placeholder="Enter Name" required><br>
            Age: <input type="number" min = "0" class="form-control" name="age" id="age" placeholder="How old are you?" required><br>
			<button class="btn btn-success" type="submit">Register</button>
		</form>
	</div>

</body>
</html>