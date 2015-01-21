<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Nombre</title>
<link rel="shortcut icon" href="favicon.ico" />
<link href="css/normalize.css" rel="stylesheet" type="text/css" />
<link href="css/estilos.css" rel="stylesheet" type="text/css" />
<link href="css/rslide.css" rel="stylesheet" type="text/css" />
<link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
<link href='http://fonts.googleapis.com/css?family=Raleway:400,500,600,700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
<meta name = "viewport" content = "width = device-width; initial-scale = 1.0; user-scalable = no; maximum-scale=1.0" >
<script src="js/modernizr.js"></script>
<script src="js/picturefill.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script src="js/responsiveslides.min.js"></script>
<script type="text/javascript" src="js/html5lightbox.js"></script>
<script type="text/javascript" charset="utf-8">
		window.onload = function() {
		  setTimeout(function(){window.scrollTo(0, 1);}, 100);
		}
</script>

<script>
    // You can also use "$(window).load(function() {"
    $(function () {

      // Slideshow 4
      $("#slider4").responsiveSlides({
        auto: true,
        pager: false,
        manualControls: '#controles',
        nav: true,
        speed: 500,
        namespace: "callbacks",
        before: function () {
          $('.events').append("<li>before event fired.</li>");
        },
        after: function () {
          $('.events').append("<li>after event fired.</li>");
        }
      });

    });
  </script>

</head>
<body>
<!--<input type="checkbox" id="main-check">
<label class="menu_m" for="main-check"><i class="fa fa-bars fa-lg"></i></label>-->

<div id="wrapper">
<div id="logo"><a href="index.php"><img class="logo1" src="images/logo.png"></a></div>
<div id="btn_m" class="btn_m"><i class="fa fa-bars"></i></div>

<nav>
  <menu>
  	<div class="telefono"><div class="grande">01 800 RANMAN1 <span>(726 62 61)</span></div>

  		<a href="#"><span class="fa-stack fa-lg">
		  <i class="fa fa-circle fa-stack-2x color1"></i>
		  <i class="fa fa-facebook fa-stack-1x color2"></i>
		</span></a>

		<a href="#"><span class="fa-stack fa-lg">
		  <i class="fa fa-circle fa-stack-2x color1"></i>
		  <i class="fa fa-twitter fa-stack-1x color2"></i>
		</span></a>
  	</div>
    <ul id="menu">
        <li id="home"><a href="#">QUIENES SOMOS</a></li><!--
        --><li id="acerca"><a href="pp_slp.php">DESARROLLOS</a></li><!--
        --><li id="servicios"><a href="#">COMO COMPRAR</a></li><!--
        --><li id="CHAT"><a href="javascript:$zopim.livechat.window.show()">CHAT ONLINE <i class="fa fa-weixin"></i></a></li><!--
        --><li id="contacto"><a href="#">CONTACTO</a></li>
    </ul>
  </menu>
</nav>

<script>
$(document).ready(function(){ 
   $('#btn_m').on('click',function(){
      $('#menu').slideToggle('fast');
   });
});
</script>