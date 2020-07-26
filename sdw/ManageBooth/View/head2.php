<meta charset="utf-8">
<meta name = "format-detection" content = "telephone=no" />
<link rel="icon" href="images/favicon.ico">
<link rel="shortcut icon" href="images/favicon.ico" />
<link rel="stylesheet" href="css/camera.css">
<link rel="stylesheet" href="css/owl.carousel.css">
<link rel="stylesheet" href="css/stuck.css">
<link rel="stylesheet" href="css/style.css">
<script src="js/jquery.js"></script>
<script src="js/jquery-migrate-1.1.1.js"></script>
<script src="js/script.js"></script> 
<script src="js/superfish.js"></script>
<script src="js/jquery.equalheights.js"></script>
<script src="js/jquery.mobilemenu.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/tmStickUp.js"></script>
<script src="js/jquery.ui.totop.js"></script>
<script src="js/owl.carousel.js"></script>

<script src="js/camera.js"></script>
<!--[if (gt IE 9)|!(IE)]><!-->
<script src="js/jquery.mobile.customized.min.js"></script>
<!--<![endif]-->
<script>
 $(document).ready(function(){
  jQuery('#camera_wrap').camera({
      loader: false,
      pagination: false ,
      minHeight: '400',
      thumbnails: false,
      height: '30.05208333333333%',
      caption: true,
      navigation: true,
      fx: 'mosaic'
    });
  /* carousel */
     $("#owl").owlCarousel({
          items : 1, //10 items above 1000px browser width
          itemsDesktop : [995,1], //5 items between 1000px and 901px
          itemsDesktopSmall : [767, 1], // betweem 900px and 601px
          itemsTablet: [700, 1], //2 items between 600 and 0
          itemsMobile : [479, 1], // itemsMobile disabled - inherit from itemsTablet option
          navigation : true,
          pagination :  false

      });

  $().UItoTop({ easingType: 'easeOutQuart' });
  $('#stuck_container').tmStickUp({});
  }); 
</script>