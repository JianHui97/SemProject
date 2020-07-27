<!DOCTYPE html>
<html lang="en">
<head>
<title>Payment</title>
<meta charset="utf-8">
<meta name = "format-detection" content = "telephone=no" />
<link rel="icon" href="images/favicon.ico">
<link rel="shortcut icon" href="images/favicon.ico" />
<link rel="stylesheet" href="css/touchTouch.css">
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
<script src="js/touchTouch.jquery.js"></script>
<script>
 $(document).ready(function(){
   $().UItoTop({ easingType: 'easeOutQuart' });
   $('#stuck_container').tmStickUp({});
   $('.gallery .gal').touchTouch();
 }); 
</script>

<style>
  
  .a{ 

  font-style: normal;
  font-size: 28px;
  text-align:left;
  width:170px;
  height:100px;
  }
  
  .b{ 

  font-style: normal;
  font-size: 28px;
  width: 120%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
  }
  
  .c{
  font-style: normal;
  font-size: 28px;
  text-align:left;
  width:700px;
  height:100px;
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

<body class="" id="top">
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
        <div class="clear"></div>
        <h1>
          <a href="index.php">
            <img src="images/Ice-cinno_logo.png" width="400" height="200" alt="Logo alt">
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
             <li><a href="index.php">Home</a></li>
             <li class="current"><a href="Payment_Detail.php">Payment</a></li>
             <li><a href="Payment_Form.php">Form</a></li>
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
<section class="content gallery"><div class="ic">More Website Templates @ TemplateMonster.com - June 02, 2014!</div>
  <div class="container">
    <div class="row">
      <div class="grid_12">
        <h3>Payment Form</h3>
      </div>

 <form action="http://localhost/SDWProject2019(ICE-CINNO)/Model/Payment_Form_Model.php" method="post"> 


      <table align="center" width="800px">

      <tr>
      <td class="a">Name</td>
      <td class="a"> : </td>
      <td class="a"><input name="Name" type="text" class="b" maxlength="30" required ></input></td>
      </tr>

      <tr>
      <td class="c">Credit Card Number</td>
      <td class="a"> : </td>
      <td class="a"><input name="CCNumber" type="text" class="b" maxlength="20" required></input></td>
      </tr>

      <tr>
      <td class="c">CVV</td>
      <td class="a"> : </td>
      <td class="a"><input name="CVV" type="text" class="b" maxlength="3" required></input></td>
      </tr>

      <tr>
      <td class="a">Expiry Date</td>
      <td class="a"> : </td>
      <td class="a"><input name="ExpiryDate" type="month" class="b" required></input></td>
      </tr>

      <tr> 
      <td><br><button type="Reset" value="reset" class="e">Reset</button></td>
      <td><br><button type="submit" name="submit" value="submit" class="e">Confirm</button></td>

      </tr>
      </table>
      </form>
  
    </div>
  </div>
</section>
<!--==============================
              footer
=================================-->
</div>
<footer id="footer">
  <div class="container">
    <div class="row">
      <div class="grid_12">  
         <div class="socials">
          
          </div>
         <div class="copyright"><div class="color2"><strong>ICE-Cinno</strong> &copy; <span id="copyright-year"></span> | <a href="#">Privacy Policy</a></div>
     
          </div>
      </div>
    </div>
  </div>  
</footer>

<script>
function myFunction() 
{
  window.print();
}
</script>

</body>
</html>