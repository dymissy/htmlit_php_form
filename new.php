<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">

    <title>Add a new user</title>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-sm">
          <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
              <div class="navbar-nav">
                <a class="nav-item nav-link active" href="new.php">New user</a>
                <a class="nav-item nav-link" href="index.php">Search user</a>
              </div>
            </div>
          </nav>

          <h1>Add a new user</h1>
          <form action="save_user.php" method="post">
            <?php if ($error): ?>
              <div class="alert alert-danger" role="alert"><?php echo $error ?></div>
            <?php endif ?>

            <div class="form-group">
              <label for="exampleInputEmail1">Email address</label>
              <input type="email" name="email" class="form-control" placeholder="Enter email">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">First Name</label>
              <input type="text" name="firstName" class="form-control" placeholder="Enter first name">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Last Name</label>
              <input type="text" name="lastName" class="form-control" placeholder="Enter last name">
            </div>
            <button type="submit" name="search" class="btn btn-primary">Add new user</button>
          </form>
        </div>
      </div>
    </div>
  </body>
</html>
