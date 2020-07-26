<!DOCTYPE html>
<html lang="en">
<head>
<title>Request Equipment</title>
<?php include("head.php"); ?>
<meta name = "format-detection" content = "telephone=no" />
<li meta charset="utf-8">
nk rel="icon" href="images/favicon.ico">
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
  <!-- <div class="container">
    <div class="row">
      <div class="grid_12">
        <div class="socials">
          <a href="#" class="fa fa-twitter"></a>
          <a href="#" class="fa fa-facebook"></a>
          <a href="#" class="fa fa-google-plus"></a>
          <a href="#" class="fa fa-pinterest"></a>
        </div> -->
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
             <li><a href="index.html">Home</a></li>
             <li><a href="index-1.html">Projects</a></li>
             <li class="current"><a href="equipment.html">Equipment</a></li>
             <li><a href="index-3.html">Blog</a></li>
             <li><a href="index-4.html">Contacts</a></li>
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
            <a href="requestequipmentform.php" class="active">Request Equipment Form</a><br>
            <a href="equipmentchecklist.php">Equipement Check List</a><br>
            <a href="equipmentapproval.php" >Equipement Approval</a><br>
            <a href="equipmentreport.php">Report</a>
            </div>


          </nav>
      
          <div class="clear"></div>
      </div> 
  </div> 
<body>
  <div class="wrapper">
    <div class="content">
      <form action="requestequipmentcontroller.php" method="POST" class="container" style="border-style: outset;">
          <fieldset class="container">
            <legend><h2>Request Equipment Form</h2></legend>
          
          <div class="container" style="width: 95%">
            <h5>Welcome to ICE-Cinno Management System!</h5>
            <h5>To request equipment for your booth, please fill in the request form below:</h5>
              <form>
                GroupName:<br>
                <input type="text" name="GroupName">
                <br>
                <!-- Participant ID:<br>
                <input type="text" name="ParticipantID">
                <br> -->
                Email:<br>
                <input type="text" name="Email">            
                <br>
                Phone No:<br>
                <input type="text" name="HpNo">             
                <br>
                Equipment Type:<br>
                <input type="radio" name="EquipmentType" value="001 Table"> 001 Table<br>
                <input type="radio" name="EquipmentType" value="002 Chair"> 002 Chair<br>
                <input type="radio" name="EquipmentType" value="003 Display Board"> 003 Display Board<br>
               
                <br>
                Quantity:<br>
                <input type="radio" name="Quantity" value="1"> 1<br>
                <input type="radio" name="Quantity" value="2"> 2<br>
                <input type="radio" name="Quantity" value="3"> 3<br>
                <input type="radio" name="Quantity" value="4"> 4<br>
                <input type="radio" name="Quantity" value="5"> 5<br>
                <input type="radio" name="Quantity" value="6"> 6<br>
                Date To Use:<br>
                <input type="date" name="DateToUse">
                <br><br><br>

                <input type="button" class="btn btn-danger" name="Cancel" value="Cancel" onclick="location.href='equipment.php'">
                <input type="submit" class="btn btn-success" name="submit" value="submit">
              </form>
            <br>
        </form>

    </div>

  </div>
</body>
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
    </div>
  </div>  
</footer>
</body>
</html>


