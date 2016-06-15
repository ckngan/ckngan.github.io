<?php include "form.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <meta name="keywords" content="new grad, new graduate, portfolio, computer science, web design, user experience, user interface, wordpress, victoria, vancouver" />
  <meta name="description" content="The website and portfolio of Cindy Ngan, Computer Science graduate." />

  <title>Cindy Ngan</title>

  <!-- CSS / Bootstrap / Fonts -->
  <link rel="stylesheet" type="text/css" href="css/styles.css" />
  <link rel="stylesheet" type="text/css" href="css/bootstrap_me.css" />
  <!-- <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans" /> -->

  <link rel="shortcut icon" href=".ico">

  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>

<body>
  <header class="container">
    <!-- insert logo/branding and photo here -->
    <nav class="navbar navbar-fixed-top text-uppercase text-right offset-right">
      <a href="helloworld.php">home</a>
      <a href="#">portfolio</a>
      <a href="#">skills</a>
      <a href="#">experience</a>
      <a href="contact.php" class="active">contact</a>
    </nav>
  </header>

  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script type="application/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script type="application/javascript" src="js/bootstrap.min.js"></script>

  <div class="container">
    <h1 class="text-center">CONTACT ME</h1>
    <hr />
    <p class="text-center">Please note: this form currently does not work.</p>
    <br />
    <form class="form-horizontal" role="form" method="post" action="contact.php">
      <div class="form-group">
        <label for="name" class="control-label" tabindex="-1">Name</label>
        <div>
          <input type="text" class="form-control" id="name" name="name" placeholder="First &amp; Last Name" value="<?php if (isset($_POST["submit"])) { echo htmlspecialchars($name); } ?>" />
          <?php echo "<p class='text-danger'>$errName</p>"; ?>
        </div>
      </div>

      <div class="form-group">
        <label for="email" class="control-label" tabindex="-1">Email</label>
        <div>
          <input type="email" class="form-control" id="email" name="email" placeholder="example@domain.com" value="<?php if (isset($_POST["submit"])) { echo htmlspecialchars($email); } ?>" />
          <?php echo "<p class='text-danger'>$errEmail</p>"; ?>
        </div>
      </div>

      <div class="form-group">
        <label for="message" class="control-label" tabindex="-1">Message</label>
        <div>
          <textarea class="form-control" rows="4" id="message" name="message"><?php if (isset($_POST["submit"])) { echo $message; } ?></textarea>
          <?php echo "<p class='text-danger'>$errMessage</p>"; ?>
        </div>
      </div>

      <div class="form-group">
        <label for="human" class="control-label" tabindex="-1">2 + 3 = ?</label>
        <div>
          <input type="number" class="form-control" id="human" name="human" placeholder="Your Answer" />
          <?php echo "<p class='text-danger'>$errHuman</p>"; ?>
        </div>
      </div>

      <div class="form-group">
        <div>
          <input type="submit" class="btn btn-primary" id="submit" name="submit" value="Send">
        </div>
      </div>

      <div class="form-group">
        <div class="col-xs-offset-4 col-xs-4 text-center">
          <?php echo $result; ?>
        </div>
      </div>
    </form>
  </div>

  <?php include "footer.php"; ?>
</body>
</html>
