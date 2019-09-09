<?php
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    die('You cannot access to the page');
}

$db = './users.json';
$errors = [];
$email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
$firstName = filter_var($_POST['firstName'], FILTER_SANITIZE_STRING);
$lastName = filter_var($_POST['lastName'], FILTER_SANITIZE_STRING);

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
   $errors[] = 'Email is not valid';
}

if (!$firstName) {
    $errors[] = 'First name is not valid';
}

if (!$lastName) {
    $errors[] = 'Last name is not valid';
}

if(empty($errors)) {
  $users = \json_decode(file_get_contents($db), true);
  $users[] = [
    'email' => $email,
    'firstName' => $firstName,
    'lastName' => $lastName
  ];

  file_put_contents($db, json_encode($users));
}

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">

    <title>Save User</title>
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

          <h1>Save user</h1>

          <?php if (!empty($errors)): ?>
            <div class="alert alert-danger" role="alert">
                There are some errors:

                <ul>
                    <?php foreach($errors as $error): ?>
                        <li><?php echo $error ?></li>
                    <?php endforeach ?>
                </ul>
            </div>
          <?php else: ?>
            <div class="alert alert-success" role="alert">User created</div>
          <?php endif ?>

          <a href="new.php" class="btn btn-secondary">Back</a>
        </div>
      </div>
    </div>
  </body>
</html>
