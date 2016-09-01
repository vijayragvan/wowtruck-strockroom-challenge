<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<style>
h1:hover {
  -webkit-box-sizing: content-box;
  -moz-box-sizing: content-box;
  box-sizing: content-box;
  width: 100%;
  padding: 20px;
  overflow: hidden;
  border: none;
  font: normal 20px "Times New Roman", Times, serif;
  font-size:50px;
  color: #333333;
  text-align: center;
  -o-text-overflow: ellipsis;
  text-overflow: ellipsis;
  background: -webkit-linear-gradient(0deg, rgba(255,255,255,1) 0, rgba(200,200,200,1) 100%), #0199d9;
  background: -moz-linear-gradient(90deg, rgba(255,255,255,1) 0, rgba(200,200,200,1) 100%), #0199d9;
  background: linear-gradient(90deg, rgba(255,255,255,1) 0, rgba(200,200,200,1) 100%), #0199d9;
  background-position: 50% 50%;
  -webkit-background-origin: padding-box;
  background-origin: padding-box;
  -webkit-background-clip: border-box;
  background-clip: border-box;
  -webkit-background-size: auto auto;
  background-size: auto auto;
  -webkit-box-shadow: 1px 1px 1px 0 rgba(0,0,0,0.3) ;
  box-shadow: 1px 1px 1px 0 rgba(0,0,0,0.3) ;
  text-shadow: 1px 1px 1px rgba(0,0,0,0.2) ;
  -webkit-transform: rotateX(-9.740282517223996deg) rotateY(-5.729577951308232deg) rotateZ(-1.1459155902616465deg)   ;
  transform: rotateX(-9.740282517223996deg) rotateY(-5.729577951308232deg) rotateZ(-1.1459155902616465deg)   ;
}
</style>
<div class="site-index">

    <div class="jumbotron">
        <h1>Wellcome! <?php echo (Yii::$app->user->identity->username) ?></h1>

        <p class="lead">You have successfully created your Yii-powered application.</p>

        <p><a class="btn btn-lg btn-success" href="http://www.yiiframework.com">Get started with Yii</a></p>
    </div>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-4">
                <h2>Heading</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/doc/">Yii Documentation &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Heading</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/forum/">Yii Forum &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Heading</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/extensions/">Yii Extensions &raquo;</a></p>
            </div>
        </div>

    </div>
</div>
