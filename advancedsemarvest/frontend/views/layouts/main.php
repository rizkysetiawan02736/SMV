<?php

/** @var \yii\web\View $this */
/** @var string $content */

use common\widgets\Alert;
use frontend\assets\AppAsset;
use yii\bootstrap5\Breadcrumbs;
use yii\bootstrap5\Html;
use yii\bootstrap5\Nav;
use yii\bootstrap5\NavBar;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?php echo Yii::$app->language?>">
    <head>
        <meta charset="<?php echo Yii::$app->charset?>" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title><?php echo Yii::$app->name?></title>
        
        <?php echo $this->head()?>
    </head>
    <body>
    <?php echo $this->beginBody()?>
       
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
            <div class="container-fluid">

            <li><a class="navbar-brand" href="<?php echo \yii\helpers\Url::base('');   ?>"><img src="<?php echo \yii\helpers\Url::to(['/images/semarvest.png']) ?>" style="display:inline; vertical-align: top; height:32px;" /></a></li> 
            <div class=" navbar-nav me-auto mb-2 mb-lg-0 collapse navbar-collapse justify-content-end" id="navbarNav">
            <li class="nav-item" style="display:inline; vertical-align: top;"><a class="nav-link fw-medium" href="<?php echo \yii\helpers\Url::base(['']) ?>">Home</a></li>       
            <li class="nav-item" style="display:inline; vertical-align: top;"><a class="nav-link fw-medium" href="<?php echo \yii\helpers\Url::to(['/site/signup']) ?>">Pendaftaran</a></li>
            <li class="nav-item" style="display:inline; vertical-align: top;"><a class="nav-link fw-medium" href="<?php echo \yii\helpers\Url::to(['/site/about']) ?>">Peluang Investasi</a></li>
            </div>
            <li> <a class="btn btn-sv" href="<?php echo \yii\helpers\Url::to(['/site/login'])?>">Login</a></li>
            
            </div>
        </nav>

<div class="container" style="margin-top:120px;">        
<?php echo $content ?>
</div>

        <!-- Footer-->
        <footer class="footer-sv">
          <!-- <hr class="text-300 mb-0" /> -->
          
            <!-- <div class="float-left"> <a class="text-decoration-none" href="#"><img class="d-inline-block align-top img-fluid" src="assets/img/gallery/E-MANKU.png" alt="" width="75" /></a></div> -->
            <div class="float-right">
              <p class="fs--1 my-2 text-center text-md-end">&copy; Pemerintah Kota Semarang 2024&nbsp;
              </p>
            </div>
          
          </footer>

    <?php echo $this->endBody() ?>    
    </body>
</html>

<?php $this->endPage();
