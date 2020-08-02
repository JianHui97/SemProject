1<?php
require_once '../Controller/Payment_Controller.php'; 

$p = new paymentdetail();
$resultset = $p -> viewdetail();
 
 $ParticipantID = array();
 $ParticipantName = array();
 $GroupName = array();
 $Email = array();
 $Payment = array();

 foreach ($resultset as $row)
 {
  $ParticipantID[] = $row['ParticipantID'];
  $ParticipantName[] = $row['ParticipantName'];
  $GroupName[] = $row['EquipmentType'];
  $Email[] = $row['Email'];
  $Payment[] = $row['Payment'];

}
  $length = count($ParticipantID);

?>

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

<?php
            for($i = 0; $i < $length; $i++)
            {
              ?> 
              <br>

<!--=====================
          Content
======================-->
<section class="content gallery"><div class="ic">More Website Templates @ TemplateMonster.com - June 02, 2014!</div>
  <div class="container">
    <div class="row">
      <div class="grid_12">
        <h3>Payment</h3>
      </div>
      
<table border="1" align="center" width="900px">

<tr>
<td class="a">Participant ID </td>
<td class="a"> : </td>
<td class="a"><?php echo ($ParticipantID[$i]); ?></td>
</tr> 

<tr>

<td class="a"> : </td>
<td class="a"><?php echo ($ParticipantName[$i]); ?></td>
</tr> 

<tr>
<td class="a">Group Name </td>
<td class="a"> : </td>
<td class="a"><?php echo ($GroupName[$i]); ?></td>
</tr>
 
<tr>
<td class="a">Order Date </td>
<td class="a"> : </td>
<td class="a"><?php echo date("d M Y");?></td>
</tr> 

<tr>
<td class="a">Email </td>
<td class="a"> : </td>
<td class="a"><?php echo ($Email[$i]); ?></td>
</tr>

<tr>
<td class='a'></td>
</tr>

<tr>
<td class="b">Total Payment </td>
<td class="b"> : </td>
<td class="b"><b>RM <?php echo ($Payment[$i]); ?></b></td>
<tr>

<tr>
<td class="b"></td>
</tr>
</table>


<table border="0" align="center" width="900px">

<tr>
<td class="c">Terms and conditions :</td>
</tr> 
                
<tr>
<td class="c">Please pay invoice by <?php
 
 
$todayDate = date("Y-m-d");// current date
$dateOneMonthAdded = strtotime(date("Y-m-d", strtotime($todayDate)) . "+1 month");
echo date('l dS \o\f F Y', $dateOneMonthAdded);
 
?>
</td>
</tr>    

</table>             

<table border="0" align="center" width="900px">

<tr>
  <td class="d"></td>
</tr>

<form action="http://localhost/SDWProject2019(ICE-CINNO)/View/Payment_Form.php" method="post">
      
      <tr>
        <td><a href="index.php"><input type="button" class="e" name="cancel" value="Cancel"></a></td>
        <td><input type="submit" class="e" name="submit" value="Confirm"></td>
      </tr>

</form>      

      <tr>
<td class="b"></td>
<td class="b"></td>
<td class="b"></td>
</tr>


</table>
<?php
          }
          ?>
        


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


</body>
</html>