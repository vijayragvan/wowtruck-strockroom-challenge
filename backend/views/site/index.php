<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<style>
.enjoy-css1 {
  -webkit-box-sizing: content-box;
  -moz-box-sizing: content-box;
  box-sizing: content-box;
  cursor: pointer;
  border: none;
  font: normal 72px/normal "Passero One";
  color: rgba(255,255,255,1);
  text-align: center;
  -o-text-overflow: clip;
  text-overflow: clip;
  text-shadow: 0 1px 0 rgb(204,204,204) , 0 2px 0 rgb(201,201,201) , 0 3px 0 rgb(187,187,187) , 0 4px 0 rgb(185,185,185) , 0 5px 0 rgb(170,170,170) , 0 6px 1px rgba(0,0,0,0.0980392) , 0 0 5px rgba(0,0,0,0.0980392) , 0 1px 3px rgba(0,0,0,0.298039) , 0 3px 5px rgba(0,0,0,0.2) , 0 5px 10px rgba(0,0,0,0.247059) , 0 10px 10px rgba(0,0,0,0.2) , 0 20px 20px rgba(0,0,0,0.14902) ;
  -webkit-transition: all 300ms cubic-bezier(0.42, 0, 0.58, 1);
  -moz-transition: all 300ms cubic-bezier(0.42, 0, 0.58, 1);
  -o-transition: all 300ms cubic-bezier(0.42, 0, 0.58, 1);
  transition: all 300ms cubic-bezier(0.42, 0, 0.58, 1);
}

.enjoy-css1:hover {
  color: rgba(169,214,169,1);
  text-shadow: 0 1px 0 rgba(255,255,255,1) , 0 2px 0 rgba(255,255,255,1) , 0 3px 0 rgba(255,255,255,1) , 0 4px 0 rgba(255,255,255,1) , 0 5px 0 rgba(255,255,255,1) , 0 6px 1px rgba(0,0,0,0.0980392) , 0 0 5px rgba(0,0,0,0.0980392) , 0 1px 3px rgba(0,0,0,0.298039) , 0 3px 5px rgba(0,0,0,0.2) , 0 -5px 10px rgba(0,0,0,0.247059) , 0 -7px 10px rgba(0,0,0,0.2) , 0 -15px 20px rgba(0,0,0,0.14902) ;
  -webkit-transition: all 200ms cubic-bezier(0.42, 0, 0.58, 1) 10ms;
  -moz-transition: all 200ms cubic-bezier(0.42, 0, 0.58, 1) 10ms;
  -o-transition: all 200ms cubic-bezier(0.42, 0, 0.58, 1) 10ms;
  transition: all 200ms cubic-bezier(0.42, 0, 0.58, 1) 10ms;
}

.diffuse-light {
  -webkit-box-sizing: content-box;
  -moz-box-sizing: content-box;
  box-sizing: content-box;
  border: none;
  font: normal 75px/normal "Arizonia";
  color: black;
  text-align: center;
  -o-text-overflow: clip;
  text-overflow: clip;
  text-shadow: 0 15px 29px rgba(0,0,0,0.0980392) , 10px 20px 5px rgba(0,0,0,0.0470588) , -10px 20px 5px rgba(0,0,0,0.0470588) ;
  -webkit-transition: all 200ms cubic-bezier(0.42, 0, 0.58, 1) 10ms;
  -moz-transition: all 200ms cubic-bezier(0.42, 0, 0.58, 1) 10ms;
  -o-transition: all 200ms cubic-bezier(0.42, 0, 0.58, 1) 10ms;
  transition: all 200ms cubic-bezier(0.42, 0, 0.58, 1) 10ms;
}

.diffuse-light:hover {
  text-shadow: 0 -15px 29px rgba(0,0,0,0.0980392) , 10px -20px 5px rgba(0,0,0,0.0470588) , -10px -20px 5px rgba(0,0,0,0.0470588) ;
}

.enjoy-css {
  -webkit-box-sizing: content-box;
  -moz-box-sizing: content-box;
  box-sizing: content-box;
  width: 160px;
  cursor: pointer;
  padding: 9px 20px;
  overflow: hidden;
  border: 1px solid;
  font: normal 19px/1 "Acme";
  color: rgba(0,0,0,1);
  text-align: center;
  -o-text-overflow: ellipsis;
  text-overflow: ellipsis;
  background: #ffffff;
  -webkit-box-shadow: 3px 3px 0 0 rgba(0,0,0,0.8) ;
  box-shadow: 3px 3px 0 0 rgba(0,0,0,0.8) ;
  text-shadow: 1px 1px 1px rgba(0,0,0,0.2) ;
}

.enjoy-css:active {
  margin: 3px 0 0 3px;
  -webkit-box-shadow: 1px 1px 1px 0 rgba(0,0,0,0.8) ;
  box-shadow: 1px 1px 1px 0 rgba(0,0,0,0.8) ;
}
.inset-text-effect {
  display: inline-block;
  -webkit-box-sizing: content-box;
  -moz-box-sizing: content-box;
  box-sizing: content-box;
  border: none;
  font: normal 20px/1 "Aladin", Helvetica, sans-serif;
  color: rgba(48,48,48,1);
  text-transform: normal;
  -o-text-overflow: clip;
  text-overflow: clip;
  text-shadow: 1px 1px 0 rgba(140,140,140,0.6) , -1px -1px 1px rgba(0,0,0,0.67) ;
}

.btn1 {
  background: #abadab;
  background-image: -webkit-linear-gradient(top, #abadab, #363a3d);
  background-image: -moz-linear-gradient(top, #abadab, #363a3d);
  background-image: -ms-linear-gradient(top, #abadab, #363a3d);
  background-image: -o-linear-gradient(top, #abadab, #363a3d);
  background-image: linear-gradient(to bottom, #abadab, #363a3d);
  -webkit-border-radius: 28;
  -moz-border-radius: 28;
  border-radius: 28px;
  font-family: Arial;
  color: #ffffff;
  font-size: 20px;
  padding: 10px 20px 10px 20px;
  text-decoration: none;
}

.btn1:hover {
  background: #8a8a8a;
  background-image: -webkit-linear-gradient(top, #8a8a8a, #303233);
  background-image: -moz-linear-gradient(top, #8a8a8a, #303233);
  background-image: -ms-linear-gradient(top, #8a8a8a, #303233);
  background-image: -o-linear-gradient(top, #8a8a8a, #303233);
  background-image: linear-gradient(to bottom, #8a8a8a, #303233);
  text-decoration: none;
}
</style>
<div class="site-index">

    <div class="jumbotron">
	<div class="enjoy-css1">Wellcome!  <?php echo (Yii::$app->user->identity->username) ?></div>
<link async href="http://fonts.googleapis.com/css?family=Passero%20One" data-generated="http://enjoycss.com" rel="stylesheet" type="text/css"/>
<link async href="http://fonts.googleapis.com/css?family=Acme" data-generated="http://enjoycss.com" rel="stylesheet" type="text/css"/>
<link async href="http://fonts.googleapis.com/css?family=Aladin" data-generated="http://enjoycss.com" rel="stylesheet" type="text/css"/>
<link async href="http://fonts.googleapis.com/css?family=Passero%20One" data-generated="http://enjoycss.com" rel="stylesheet" type="text/css"/>
        <p class="inset-text-effect lead" >You have successfully created your Yii-powered application.</p>

        <p><a class="btn1 btn-lg btn-success" href="http://www.yiiframework.com">Get started with Yii</a></p>
    </div>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-4">
                <h2 class="diffuse-light">Heading</h2>

                <p class="inset-text-effect">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-default enjoy-css" href="http://www.yiiframework.com/doc/">Yii Documentation &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2 class="diffuse-light">Heading</h2>

                <p class="inset-text-effect">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-default enjoy-css" href="http://www.yiiframework.com/forum/">Yii Forum &raquo;</a></p>
            </div>
			<link async href="http://fonts.googleapis.com/css?family=Arizonia" data-generated="http://enjoycss.com" rel="stylesheet" type="text/css"/>
            <div class="col-lg-4">
                <h2 class="diffuse-light">Heading</h2>

                <p class="inset-text-effect">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-default enjoy-css" href="http://www.yiiframework.com/extensions/">Yii Extensions &raquo;</a></p>
            </div>
        </div>

    </div>
</div>
