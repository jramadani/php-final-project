<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Caeliste Designs</title>
  <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
  <link rel = "stylesheet" type="text/css" href="stylesheet.css">
  <script src="script.js" type="text/javascript"></script>

<!--BOOTSTRAP LINKS BELOW-->

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

<!--RESPONSIVE META TAG-->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!--GOOGLE FONTS-->

  <link href="https://fonts.googleapis.com/css?family=Petit+Formal+Script|PT+Sans|Philosopher" rel="stylesheet">

</head>
<body>
  <div class="container"><div class="text-center"><img class="portIcon" src="portfolio-icon.png" alt="Caeliste Designs"></div></div>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <img src="left-curl.png" width="50px">
    <button style="margin:auto;"class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
<img src="right-curl.png" class="right-curlMobile" width="50px">
 
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.html">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact.html">Contact</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Other Projects
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="art.html">Art</a>
            <a class="dropdown-item" href="music.html">Music</a>
          </div>
        </li>
      </ul>
    </div>

  <img src="right-curl.png" class="right-curlDesktop" width="50px">
    </nav>

   <!-- END OF HEADER  -->
   

<!--CONTENT BEGINS HERE!!!!-->

<br>
  <div class="container">
    <div class="row justify-align-center">
      <div class="col-4">
      <div class="text-center">
       <img class="branches" style="width:64%;" src="branch-left.png"></div>
     </div>
    <div class="col-12 col-md-4">
    <p class="text-center"><h1>Please fix the following errors:</h1>
<ul>
    <?php 
        foreach($errors as $value) {
            echo '<li>';
            echo $value;
            echo '</li>';
        }
      ?>
    </ul>
    <p>&nbsp;</p></p> 
</div>
<div class="col-4">
<div class="text-center">
  <img class="branches" style="width:64%;" src="branch-right.png"></div></div>
  </div>
  </div>





<br><br>
  <footer>
<div style="background-color:#0384BD; color:#E5EDF8; height:75px;">
  <br>
  <p style="text-align:center;">&copy; 2018, All rights reserved.</p>

</div>
  </footer>
</body>
</html>