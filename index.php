<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Masuk Ke Aplikasi Rental</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/signin.css" rel="stylesheet">
  </head>

  <body class="text-center">
    <form class="form-signin" action="prologin.php" method="post">
      <img class="mb-4" src="img/vw.png" alt="" width="128" height="128">
      <h1 class="h3 mb-3 font-weight-normal">Masuk Ke Aplikasi</h1>
      <label for="inputEmail" class="sr-only">Username</label>
      <input type="text" name="username" class="form-control" placeholder="Email address" required autofocus>
      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" name="password" class="form-control" placeholder="Password" required>
      <label for="select" class="sr-only">Level</label>
      <select name="level" class="form-control" required>
		<option value="">Pilih Level</option>
		<option value="1">Administrator</option>
		<option value="2">Operator</option>
		<option value="3">Pemilik</option>
	  </select>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Masuk Gan</button>
      <p class="mt-5 mb-3 text-muted">&copy; 2017-2018</p>
    </form>
  </body>
</html>
