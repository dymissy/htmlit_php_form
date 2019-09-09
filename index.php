<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">

    <title>Search for a user</title>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-sm">
          <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
              <div class="navbar-nav">
                <a class="nav-item nav-link" href="new.php">New user</a>
                <a class="nav-item nav-link active" href="index.php">Search user</a>
              </div>
            </div>
          </nav>

          <h1>Search for a user</h1>
          <form action="search_result.php">
            <div class="form-group">
              <label for="exampleInputEmail1">Email address</label>
              <input type="email" name="email" class="form-control" placeholder="Enter email">
              <small class="form-text text-muted">Search a user by email address</small>
            </div>
            <button type="submit" class="btn btn-primary">Search</button>
          </form>
        </div>
      </div>
    </div>
  </body>
</html>
