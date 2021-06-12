<!DOCTYPE html>
<html>
<head>

	<title>Task-3 : php form.</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<style type="text/css">
		body{
			 background-image: linear-gradient(HotPink, cyan);
		}
	</style>
</head>
<body>
	<h1 align="center">Task-3 : Method using Post Form.</h1>
	<h1 align="center">Registration Form</h1>
	<form action="task3.php"  method="POST"  class="formgroup">
	<div class="container">
	<div>
		<label for="uname"><b> Name : </b></label> 
		<input class="form-control" type="text" name="uname" required>
	</div><br>
	<div>
		<label for="email"><b>EMail : </b></label> 
		<input class="form-control"  type="email" name="email" required>
	</div><br>
	<div>
		<label for="phone"><b>Phone : </b></label>
		<input class="form-control" type="text" name="phone" required>
	</div><br>
	<div>
		<label for="pwd"><b>Password :</b> </label>
		<input class="form-control" type="password" name="pwd" required>
	</div><br>
			<button type="submit" class="btn btn-primary" name="submit">Submit</button>
			<button type="reset" class="btn btn-primary" name="submit">Reset</button>
			</div><br>
</form>
</body>
</html>