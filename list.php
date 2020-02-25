<?php
  $include_css = $include_js = $content = $talentList = '';

  $con = new mysqli('localhost','root','root','agencydb');

  $query = "SELECT * FROM talent";
  $result = $con->query($query);
  while ($r = $result->fetch_assoc()) {
      $talentList .= '
        <tr>
          <td>'.$r['id'].'</td>
          <td>'.$r['name'].'</td>
          <td>'.$r['gender'].'</td>
          <td>'.$r['email'].'</td>
          <td>'.$r['address'].'</td>
          <td>'.$r['height'].'</td>
        </tr>';
  }
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
            <li class="active"><a href="index.php"> <i class="fa fa-code"></i> &nbsp; Development</a></li>
            <li><a href="profile.php"><i class="fa fa-paint-brush"></i> &nbsp; Web Design</a></li>
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
                  <b>Front-End</b>: Add missing fields to the form:
                  <ol>
                    <li>Gender (male/female)</li>
                    <li>Email</li>
                    <li>Address</li>
                    <li>Height, from 100cm to 200cm (Optional)</li>
                  </ol>
                  <u>NOTES:</u> Validation is not requiered
                </li>
                <li>
                  <b>Back-End</b>: Save info into the DB <u>agency</u>, within  <u>talent</u> table.
                  <br>
                  <u>NOTES:</u> Save 10 registers
                </li>
                <li>
                  <b>Front-End</b>: Show new fields in <a href="list.php">Talents List interface</a>. 
                  <br>
                  <u>NOTES:</u> Order rows by Talent Name
                </li>
              </ol>
            </fieldset>

            <br>
            <br>

            <div class="panel panel-default">
              <div class="panel-heading">
                  <h4>
                      Talents List
                      <a href="index.php" class="pull-right">Form</a> 
                  </h4>
              </div>
              <div class="panel-body">
                  <table class="table table-striped table-hover ">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>Name</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php 
                        echo $talentList;
                      ?>
                    </tbody>
                  </table>
              </div>
            </div>

        </div>
      </div>

    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <?php echo $include_js; ?>
  </body>
</html>