<hj class="footer"style="background:rgb(31, 31, 31);">
    <div class="container" style="background:rgb(31, 31, 31);padding:30px;">
        <div class="row">
            <div class="col-md-6 col-lg-3">
                <div class="widget clearfix">
                    <div class="widget-title">
                        <img src="images/logos/logo-2.png" alt="" />
                    </div>
                    <p> Integer rutrum ligula eu dignissim laoreet. Pellentesque venenatis nibh sed tellus faucibus bibendum. Sed fermentum est vitae rhoncus molestie. Cum sociis natoque penatibus et magnis dis montes.</p>
                </div><!-- end clearfix -->
            </div><!-- end col -->

    <div class="col-md-6 col-lg-3">
                <div class="widget clearfix">
                    <div class="widget-title">
                        <h3>Liens Utiles</h3>
                    </div>

                    <ul class="footer-links hov">
                      <li><a href="index.php" <?php if((isset($_GET[$cdepage]) AND ($_GET[$cdepage]=='home')) OR (!isset($_GET[$cdepage])) )echo "class='active'"; ?>>Accueil</a></li>
                      <li><a href="index.php?<?php echo $cdepage;?>=evenements" <?php if(isset($_GET[$cdepage]) AND ($_GET[$cdepage]=='evenements') ) echo "class='active'"; ?>>Evenements</a></li>
                      <li><a href="index.php?<?php echo $cdepage;?>=ministeres" <?php if(isset($_GET[$cdepage]) AND ($_GET[$cdepage]=='ministeres') ) echo "class='active'"; ?>>Ministères</a></li>
                      <li><a href="index.php?<?php echo $cdepage;?>=find_eglise" <?php if(isset($_GET[$cdepage]) AND ($_GET[$cdepage]=='find_eglise') ) echo "class='active'"; ?>>Trouvez une église</a></li>
                      <li><a href="index.php?<?php echo $cdepage;?>=presentation" <?php if(isset($_GET[$cdepage]) AND ($_GET[$cdepage]=='presentation') ) echo "class='active'"; ?>>A propos</a></li>
                      <li><a href="index.php?<?php echo $cdepage;?>=contact" <?php if(isset($_GET[$cdepage]) AND ($_GET[$cdepage]=='contact') ) echo "class='active'"; ?>>Contact</a></li>
                    </ul><!-- end links -->
                </div><!-- end clearfix -->
            </div><!-- end col -->
    <div class="col-md-6 col-lg-3">
      <div class="widget footer-contact clearfix">
        <div class="widget-title">
          <h3>Contact </h3>
        </div>

        <ul>
          <li>Adresse: 43 Rue Tchibondo Nkouikou, Pointe Noire</li>
          <li>Télephone: <a href="#"> +242 05 563 93 49  </a></li>
          <li>Email: <a href="#">infos-eacmc-congo@gmail.com </a></li>
        </ul>
        <ul class="social-list">
          <li><a href="https://www.facebook.com/" class="facebook"><i class="fa fa-facebook"></i></a></li>
        </ul>

      </div>
    </div>
    <div class="col-md-6 col-lg-3">
      <div class="widget footer-contact clearfix">
        <div class="widget-title">
          <h3>Heures de bureau </h3>
        </div>

        <ul>
          <li>9 h 00 - 16 h 30</li>
          <li>Lundi au vendredi</li>
        </ul>
      </div>
    </div>



        </div><!-- end row -->
    </div><!-- end container -->
</footker><!-- end footer -->

<div class="copyrights">
    <div class="container">
        <div class="footer-distributed">
            <div class="footer-left">
                <p class="footer-company-name">All Rights Reserved. &copy; 2020 <a href="#">ime-genius</a></p>
            </div>


        </div>
    </div><!-- end container -->
</div><!-- end copyrights -->
