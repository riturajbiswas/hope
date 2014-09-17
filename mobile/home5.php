<?php
session_start(); 
?>
<!DOCTYPE html>
<html xmlns:fb="http://www.facebook.com/2008/fbml">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.2/jquery.mobile-1.4.2.min.css">
<script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="http://code.jquery.com/mobile/1.4.2/jquery.mobile-1.4.2.min.js"></script>
<style>
#secong
{

  background : #00CC99;
}

#myPanelDefault
{
  background : #00CC99;
  
}
.img-center {
    margin: 0 auto;
}
</style>
</head>
<body>


  <div data-role="panel" id="myPanelDefault"> 
    <ul style="font-family: 'Oswald', sans-serif;color: #6699FF;font-size: 30px;text-shadow: none;list-style-type: none;">
      <li><a href="home5.php" data-ajax="false" style="text-decoration:none">Home</a></li>
            <li><a href="weekly.html" data-ajax="false" style="text-decoration:none">Weekly</a></li>
            <li><a href="mini.html" data-ajax="false" style="text-decoration:none">Mini</a></li>
            <li><a href="leader.php" data-ajax="false" style="text-decoration:none">Leaderboard</a></li>
            <li><a href="past.html" data-ajax="false" style="text-decoration:none">Past</a></li>
            <li><a href="profile.php" data-ajax="false" style="text-decoration:none">Profile</a></li>
            <li><a href="help.html" data-ajax="false" style="text-decoration:none">Help</a></li>
    </ul>
  </div> 


  

  <div data-role="header" id="secong">
    <a href="#myPanelDefault" class="ui-btn ui-btn-inline ui-corner-all ui-shadow"><h1 style="font-family: 'Oswald', sans-serif;color: #6699FF;font-size: 15px;">Menu</h1></a><h1 style="font-family: 'Oswald', sans-serif;color: #0033CC;font-size: 30px;text-shadow: none"> H.O.P.E </h1>
  </div>
<?php if ($_SESSION['FBID']): ?>      <!--  After user login  -->
  <div data-role="main" class="ui-content">
    <h1 align="center" style="font-family: 'Oswald', sans-serif;">Welcome, <?php echo $_SESSION['FULLNAME']; ?></h1>
    
      
  <a href="weekly.html" data-ajax="false"><h1 align="center" style="font-family: 'Oswald', sans-serif;">Challenge of the day</h1></a>
    <p align="center" style="font-family: 'Oswald', sans-serif;color: #009900;font-size:20px">Today's challenge is to save atleast 2 litres of water.You can do it anyway you want, and upload a selfie on climapp. </p>
    <div>
<img class="img-responsive img-center" src="save-water-money.jpg" img style="border:9px solid pink;align:center;" >
<br>

</div>
<a href="mini.html" data-ajax="false"><h1 align="center" style="font-family: 'Oswald', sans-serif;">Mini Challenges</h1></a>
    <p align="center" style="font-family: 'Oswald', sans-serif;font-size:15px">1.Collect the water you see while rinsing fruits and vegetables.Use it to water plants</p>
    <p align="center" style="font-family: 'Oswald', sans-serif;font-size:15px">2.When doing laundry match the size of the water to the size of the load</p>
    <p align="center" style="font-family: 'Oswald', sans-serif;font-size:15px">3.Turn off the tap while brushing</p>

     <br>

    <h1 align="center" style="font-family: 'Oswald', sans-serif;">Lets get started !!! </h1>
    <br>
    <br>
    
  </div>
<div ><a href="logout.php"><img src="fblogout.jpg" class="img-responsive img-center"></a></div>
    <?php endif ?>
<p style="font-size:10px;" align="center">&copy H.O.P.E</p>
  
 

</body>
</html>