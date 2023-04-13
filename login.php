<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Page</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css">
</head>
<body>
  <div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="card">
          <div class="card-header">
            <h3 class="text-center">Login</h3>
          </div>
          <div class="card-body">
            <form action="login-logic.php" method="post">
              <?php if(isset($_GET['error'])) {?>
                <div class="alert alert-danger">
                  <b>Oops </b><?= $_GET['error'] ?>
                </div>
              <?php } ?>

              <div class="form-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" class="form-control">
              </div>
              <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" class="form-control">
              </div>
              <div class="form-group float-right mt-3">
                <button type="submit" class="btn btn-dark btn-block">Login</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Bootstrap JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/js/bootstrap.min.js"></script>
</body>
</html>
