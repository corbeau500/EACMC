<!DOCTYPE html>
<html lang="en">
<?php
  include('pages/stylemeta.php');
  include('pages/scripts.php');
?>
</head>
<body style="background:rgb(31, 31, 31);">

    <!-- LOADER -->
    <div id="preloader">
      <div class="loader">
			<div class="loader__bar"></div>
			<div class="loader__bar"></div>
			<div class="loader__bar"></div>
			<div class="loader__bar"></div>
			<div class="loader__bar"></div>
			<div class="loader__ball"></div>
		</div>
    </div><!-- end loader -->
    <!-- END LOADER -->
    <div class="top-bar">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-sm-6">
            <div class="right-top">
              <div class="social-box">
                <ul>
                  <li><a href="#"><i class="fa fa-facebook-square" aria-hidden="true"></i></a></li>
                  <li><a href="#"><i class="fa fa-twitter-square" aria-hidden="true"></i></a></li>
                <ul>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-sm-6">
            <div class="left-top">
              <div class="phone-box">
                <a href="tel:1234567890"><i class="fa fa-phone" aria-hidden="true"></i> +242 05 563 93 49</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php

  $cdepage=sha1('PageG');
  include('pages/header.php');


  if(isset($_GET[$cdepage]))
  {
    $pages=scandir('pages');
    $pge=$_GET[$cdepage];
    if(!empty($pge) && in_array($pge.".php", $pages))
    {

    }else{
      $pge='404';
    }
  }
  else
  $pge='home';

  include('pages/'.$pge.'.php');
  include('pages/footer.php');
?>

    <a href="#" id="scroll-to-top" class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>

</body>
</html>
