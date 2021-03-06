<?php
if($_SERVER["HTTP_X_FORWARDED_PORT"] == "80"){
    $redirect = 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    header('HTTP/1.1 301 Moved Permanently');
    header('Location: ' . $redirect);
    exit();
}
?><!DOCTYPE html>
<html lang="en-us" class="no-js">

	<head>
		<meta charset="utf-8">
        <title>ACMN GmbH</title>
        <meta name="description" content="Wir bieten Ihnen einen Rundum-Service für die Automatisierung Ihrer Wohn- oder Geschäftsimmobilie, egal ob Neubau oder Modernisierung.">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
        <meta name="author" content="ACMN GmbH">
        <meta name="format-detection" content="telephone=no">

        <!-- ================= Favicon ================== -->
        <!-- Standard -->
        <link rel="shortcut icon" href="img/favicon.png">
        <!-- Retina iPad Touch Icon-->
        <link rel="apple-touch-icon" sizes="144x144" href="img/favicon-retina-ipad.png">
        <!-- Retina iPhone Touch Icon-->
        <link rel="apple-touch-icon" sizes="114x114" href="img/favicon-retina-iphone.png">
        <!-- Standard iPad Touch Icon--> 
        <link rel="apple-touch-icon" sizes="72x72" href="img/favicon-standard-ipad.png">
        <!-- Standard iPhone Touch Icon--> 
        <link rel="apple-touch-icon" sizes="57x57" href="img/favicon-standard-iphone.png">

        <!-- ============== Resources style ============== -->
        <link rel="stylesheet" href="css/style-agency.css" />
        
        <link href="https://fonts.googleapis.com/css?family=Lobster|Pacifico" rel="stylesheet">

		<!-- Modernizr runs quickly on page load to detect features -->
		<script src="js/modernizr.custom.js"></script>
		
	</head>
	
	<body>
	

		<!-- Overlay and Star effect -->
		<div class="global-overlay">
			<div class="overlay skew-part">

				<div id='stars'></div>
				<div id='stars2'></div>
				<div id='stars3'></div>

			</div>
		</div>

		<!-- START - Home/Left Part -->
		<section id="left-side">

			<!-- Your logo -->
			<!-- <img src="img/logo.png" alt="" class="brand-logo" /> -->

			<div class="content">

				<img src="img/acmn_logo@2x.png" width="125px" /> <br /><br />
					
				<h1 style="font-weight: 300;" class="">Smart Automation for Life.</h1>		

				<h2 class="">Wir bieten Ihnen einen Rundum-Service für die Automatisierung Ihrer Wohn- oder Geschäftsimmobilie, egal ob Neubau oder Modernisierung.</h2>

				<nav>
					<ul>
						<!--<li>
							<a href="#" id="open-more-info" data-target="right-side" class="light-btn ">MEHR ERFAHREN</a>
						</li>-->
						<li>
							<a href="tel:+498001003000" class="light-btn " xclass="action-btn trigger  "><i class="fa fa-phone">&nbsp;&nbsp;</i>07181 492 107 0</a>
						</li>
					</ul>
				</nav>

			</div>

			<!-- Social icons -->
			<div class="useful-links">

				<a href="#" class="info-link">&copy 2017 ACMN GmbH</a> <span class="separator-link"></span>
				<a  data-dialog="somedialog" class="info-link">Impressum</a> <span class="separator-link"></span>

				<a href="https://www.facebook.com/ACMNGmbH/" target="_blank"><i class="fa fa-facebook"></i></a>

			</div>

		</section>
		<!-- END - Home/Left Part -->
	

		<!-- Button Cross to close the More Informations/Right Part -->
		<button id="close-more-info" class="hide-close"><i class="icon ion-ios-close-outline"></i></button>

		<!-- START - Newsletter Popup -->
		<div id="somedialog" class="dialog">

			<div class="dialog__overlay"></div>
					
			<div class="dialog__content">
						
				<div class="dialog-inner">
							
					<h4>Impressum</h4>
							
        <p><b>ACMN GmbH</b><br>Schillerstraße 29/1, 71404 Korb</p><br>
        <p>Telefon: 07181 / 492 107 0<br>Telefax: 07181 / 492 107 9</p><br>
        <p>Vertreten durch den Geschäftsführer:<br> Jörg Ackermann </p><br>
        <p>Eingetragen im Handelsregister beim Amtsgericht Stuttgart, HRB 760611. Sitz der Gesellschaft: Stuttgart</p> <br>
        <p>Umsatzsteuer-Identifikationsnummer gemäß §27a Umsatzsteuergesetz: DE311489574</p> 

				</div>
				<!-- /. dialog-inner -->

				<!-- Button Cross to close the Newsletter Popup -->
				<button class="close-newsletter" data-dialog-close><i class="icon ion-close-round"></i></button>

			</div>
			<!-- /. dialog__content -->
						
		</div>
		<!-- END - Newsletter Popup -->

		<!-- Root element of PhotoSwipe, the gallery. Must have class pswp. -->
		<div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">

		    <!-- Background of PhotoSwipe. 
	        	It's a separate element as animating opacity is faster than rgba(). -->
		    <div class="pswp__bg"></div>

		    <!-- Slides wrapper with overflow:hidden. -->
		    <div class="pswp__scroll-wrap">

		        <!-- Container that holds slides. 
		            PhotoSwipe keeps only 3 of them in the DOM to save memory.
		            Don't modify these 3 pswp__item elements, data is added later on. -->
		        <div class="pswp__container">
		            <div class="pswp__item"></div>
		            <div class="pswp__item"></div>
		            <div class="pswp__item"></div>
		        </div>

		        <!-- Default (PhotoSwipeUI_Default) interface on top of sliding area. Can be changed. -->
		        <div class="pswp__ui pswp__ui--hidden">

		            <div class="pswp__top-bar">

		                <!--  Controls are self-explanatory. Order can be changed. -->

		                <div class="pswp__counter"></div>

		                <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>

		                <button class="pswp__button pswp__button--share" title="Share"></button>

		                <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>

		                <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>

		                <!-- Preloader demo http://codepen.io/dimsemenov/pen/yyBWoR -->
		                <!-- element will get class pswp__preloader--active when preloader is running -->
		                <div class="pswp__preloader">
		                    <div class="pswp__preloader__icn">
		                      <div class="pswp__preloader__cut">
		                        <div class="pswp__preloader__donut"></div>
		                      </div>
		                    </div>
		                </div>

		            </div>

		            <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
		                <div class="pswp__share-tooltip"></div> 
		            </div>

		            <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)">
		            </button>

		            <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)">
		            </button>

		            <div class="pswp__caption">
		                <div class="pswp__caption__center"></div>
		            </div>

		        </div>

		    </div>

		</div>
		<!-- /. Root element of PhotoSwipe. Must have class pswp. -->

	<!-- ///////////////////\\\\\\\\\\\\\\\\\\\ -->
    <!-- ********** Resources jQuery ********** -->
    <!-- \\\\\\\\\\\\\\\\\\\/////////////////// -->
	
	<!-- * Libraries jQuery, Easing and Bootstrap - Be careful to not remove them * -->
	<script src="js/jquery.min.js"></script>
	<script src="js/jquery.easings.min.js"></script>
	<script src="js/bootstrap.min.js"></script>

	<!-- Accelerated JavaScript animation JS file -->
	<script src="js/velocity.min.js"></script> 

	<!-- Accelerated JavaScript animation UI JS file -->
	<script src="js/velocity.ui.min.js"></script> 

	<!-- Newsletter plugin -->
	<script src="js/notifyMe.js"></script>

	<!-- Contact form plugin -->
	<script src="js/contact-me.js"></script>

	<!-- Slideshow/Image plugin -->
	<script src="js/vegas.js"></script>

	<!-- Scroll plugin -->
	<script src="js/jquery.mousewheel.js"></script>

	<!-- Custom Scrollbar plugin -->
	<script src="js/jquery.mCustomScrollbar.js"></script>

	<!-- Popup Newsletter Form -->
	<script src="js/classie.js"></script>
	<script src="js/dialogFx.js"></script>

	<!-- PhotoSwipe Core JS file -->
	<script src="js/photoswipe.js"></script> 

	<!-- PhotoSwipe UI JS file -->
	<script src="js/photoswipe-ui-default.js"></script>
	


	<!-- Main JS File -->
	<script src="js/main.js"></script>
	

	
	<!--[if lt IE 10]><script type="text/javascript" src="js/placeholder.js"></script><![endif]-->

	</body>

</html>