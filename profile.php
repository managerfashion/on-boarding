<?php
  $include_css = $include_js = $content = '';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Development</title>
    <meta name="robots" content="noarchive">
    <link rel="shortcut icon" href="favicon.ico?v=213">

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <?php echo $include_css; ?>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <?php echo $content; ?>
    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Tests</a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li><a href="index.php"> <i class="fa fa-code"></i> &nbsp; Development</a></li>
            <li class="active"><a href="profile.php"><i class="fa fa-paint-brush"></i> &nbsp; Web Design</a></li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="container">
      <div class="row">
        <div class="col-xs-2"></div>
        <div class="col-xs-8">

            <fieldset>
              <legend>Instructions</legend>
              <ol>
                <li>
                  <b>Reproduce Layout</b>: Try to reproduce as more as you can the image below using CSS.
                  <br>
                  <u>NOTES:</u>
                  <ul>
                    <li>Model image is <a href="images/model.jpg" target="_blank">here</a></li>
                    <li>Design must be done in the div with <b>.canvas</b> classe.</li>
                    <li>Frameworks and other ressources use (as Bootstrap or FontAwesome) is allowed.</li>
                  </ul>
                  <br>
                  <img src="images/profile.jpg">
                </li>
              </ol>
            </fieldset>

            <br>
            <br>
        </div>
      </div>

    </div>


    <div class="panel panel-default">
      <div class="panel-heading">Your layout must be placed below:</div>
      <div class="panel-body">
          <div class="canvas"></div>
      </div>
    </div>

    <br>
    <br>
    <br>
    <br>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <?php echo $include_js; ?>
  </body>
</html>