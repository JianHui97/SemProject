<!DOCTYPE html>
<html lang="en">
<head>
<title>Equipment Check List</title>
<?php include("head.php"); ?>
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

<style>
  
  .a{ 

  font-style: normal;
  font-size: 28px;
  text-align:left;
  width:150px;
  height:50px;
  }
  
  .b{ 

  font-style: normal;
  font-size: 28px;
  font-weight:bold;
  text-align:left;
  width:150px;
  height:50px;
  }
  
  .c{
  font-style: normal;
  font-size: 20px;
  text-align:left;
  width: 150px;
  height: 30px;
  }

  .d{
  padding: 10px 18px;
  text-align: center;  
  font-size: 15px;
  cursor: pointer;
  }

  .e{ 
  padding: 10px 38px;
  text-align: center;  
  font-size: 15px;
  cursor: pointer;
  } 
  
</style>

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
<!--[if lt IE 9]>
 <div style=' clear: both; text-align:center; position: relative;'>
   <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
     <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
   </a>
</div>
<script src="js/html5shiv.js"></script>
<link rel="stylesheet" media="screen" href="css/ie.css">


<![endif]-->
</head>

<body class="page1" id="top">
  <div class="main">
<!--==============================
              header
=================================-->
<header>
<!--==============================
            Stuck menu
=================================-->
  <div class="container">
    <div class="row">
      <div class="grid_12">
        <div class="socials">
          <a href="#" class="fa fa-twitter"></a>
          <a href="#" class="fa fa-facebook"></a>
          <a href="#" class="fa fa-google-plus"></a>
          <a href="#" class="fa fa-pinterest"></a>
        </div>
        <div class="clear"></div>
        <h1>
          <a href="index.html">
            <img src="images1/logo.png" alt="Logo alt">
          </a>
        </h1>      
      <div class="clear"></div>  
    </div>
   </div> 
  </div>
  <div id="stuck_container">
    <div class="container">
      <div class="row">
        <div class="grid_12">
        <div class="navigation ">
          <nav>
            <ul class="sf-menu">
             <li><a href="equipment.php">Home</a></li>
             <li><a href="index-1.html">Evaluation</a></li>
             <li class="current"><a href="equipment.php">Equipment</a></li>
             <li><a href="index-3.html">Booth</a></li>
             <li><a href="index-4.html">Payment</a></li>
           </ul>
          </nav>
      
          <div class="clear"></div>
      </div> </div>
      </div>
    </div>
  </div> 
</header>
<!--=====================
          Content
======================-->
      <div class="row">
        <div class="navigation ">
          <nav>
            <style>
            .vertical-menu {
              width: 200px;
            }

            .vertical-menu a {
              background-color: #eee;
              color: black;
              display: block;
              padding: 50px;
              text-decoration: none;
            }

            .vertical-menu a:hover {
              background-color: #ccc;
            }

            .vertical-menu a.active {
              background-color: black;
              color: white;
            }
            </style>

            <div class="vertical-menu">
            <a href="requestequipmentform.php" >Request Equipment Form</a><br>
            <a href="equipmentchecklist.php" class="active">Equipement Check List</a><br>
            <a href="equipmentapproval.php">Equipement Approval</a><br>
            <a href="equipmentreport.php">Report</a>
            </div>


          </nav>
      
          <div class="clear"></div>
      </div> 
  </div> 
<body>
  <div class="wrapper">
    <div class="content">
      <form action="requestequipmentform.php" method="POST" class="container" style="border-style: outset;">
          <fieldset class="container">
            <legend><h2>Equipment Check List</h2></legend>
          
              <div class="container" style="width: 1000px;">
                <div><br>
                  <table class="table table-hover">
                    <tr class="table-active">
                     <!-- //<th>Participant ID</th>// -->
                      <th>Group Name</th>
                      <th>Email</th>
                      <th>Phone Number</th>
                      <th>Equipment ID</th>
                      <th>Equipment Type</th>
                      <th>Quantity</th>
                      <th>Date to Use</th>
                    </tr>
                    <tr>
                    <?php 
                    include("equipmentlistcontroller.php"); 
                    ?>
                    </tr>
                    <tr> 
                          <td>
                          <br><input type="button"  name="Cancel" value="Cancel" onclick="location.href='equipment.php'">
                          <br><td><br>
                          <input type="button"  name="Add" value="Add" onclick="location.href='requestequipmentform.php'">
                          <br><td><br>
                          <input type="button"  name="Confirm" value="Confirm" onclick="location.href='equipmentreport.php'">
                          </td>
                  </table>


<!--==============================
              footer
=================================-->
</div>
<footer id="footer">
  <div class="container">
    <div class="row">
      <div class="grid_12">  
         <div class="socials">
          <a href="#" class="fa fa-twitter"></a>
          <a href="#" class="fa fa-facebook"></a>
          <a href="#" class="fa fa-google-plus"></a>
          <a href="#" class="fa fa-pinterest"></a>
          </div>
         <div class="copyright"><div class="color2"><strong>Arch</strong> &copy; <span id="copyright-year"></span> | <a href="#">Privacy Policy</a></div>
          Website designed by <a href="http://www.templatemonster.com/" rel="nofollow">TemplateMonster.com</a>
          </div>
      </div>
    </div></footer>
</body>
</html>


