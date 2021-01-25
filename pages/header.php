<header class="header header_style_01">
    <nav class="megamenu navbar navbar-expand-lg navbar-light" style="background:#ffff">
        <div class="container">
            <div class="navbar-header">
              <a class="navbar-brand" href="index.php"><img src="images/logo-ConvertImage.png" alt="image"></a>
                <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse" id="navbar">
                <ul class="navbar-nav ml-auto">
                    <li><a href="index.php" <?php if((isset($_GET[$cdepage]) AND ($_GET[$cdepage]=='home')) OR (!isset($_GET[$cdepage])) )echo "class='active'"; ?>>Accueil</a></li>
                    <li><a href="index.php?<?php echo $cdepage;?>=evenements" <?php if(isset($_GET[$cdepage]) AND ($_GET[$cdepage]=='evenements') ) echo "class='active'"; ?>>Evenements</a></li>
                    <li><a href="index.php?<?php echo $cdepage;?>=ministeres" <?php if(isset($_GET[$cdepage]) AND ($_GET[$cdepage]=='ministeres') ) echo "class='active'"; ?>>Ministères</a></li>
                    <li><a href="index.php?<?php echo $cdepage;?>=find_eglise" <?php if(isset($_GET[$cdepage]) AND ($_GET[$cdepage]=='find_eglise') ) echo "class='active'"; ?>>Trouvez une église</a></li>
                    <li><a href="index.php?<?php echo $cdepage;?>=presentation" <?php if(isset($_GET[$cdepage]) AND ($_GET[$cdepage]=='presentation') ) echo "class='active'"; ?>>A propos</a></li>
                    <li><a href="index.php?<?php echo $cdepage;?>=contact" <?php if(isset($_GET[$cdepage]) AND ($_GET[$cdepage]=='contact') ) echo "class='active'"; ?>>Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>
</header>
