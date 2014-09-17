<?php
session_start(); 
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
 <link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
    <link href="http://fontawesome.io/assets/font-awesome/css/font-awesome.css" rel="stylesheet" media="screen">  
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
<link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.2/jquery.mobile-1.4.2.min.css">
<script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="http://code.jquery.com/mobile/1.4.2/jquery.mobile-1.4.2.min.js"></script>
<style> @import url(http://fonts.googleapis.com/css?family=Open+Sans:300);
@import url(http://weloveiconfonts.com/api/?family=entypo);

/* entypo */
[class*="entypo-"]:before {
  font-family: 'entypo', sans-serif;
}

body {
  height:100%;
 
  font-size: 1em;
  font-weight: 300;
  line-height: 1.5;
  letter-spacing: 0.05em;
  
  background-size: cover;

}

* {
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
}

.avatar {
  background-image: url("propic.jpg");
  background-size: cover;
  border-radius: 100%;
  margin: 4rem auto 2rem auto;
  width: 10rem;
  height: 10rem;
  box-shadow: 0 0 0 8px rgba(255,255,255,0.2);
  transition: all 0.5s ease-in-out;
}

.avatar:hover {
  box-shadow: 0 0 0 12px rgba(255,255,255,0.6);
}





.container {
  left: 50%;
  margin:6em 0 0 -108px;
  position: absolute;
}


@media only screen 
and (max-width : 320px) {

.container {
left: 50%;
margin: 5em 0 0 -64px;
position: absolute;
}



}


.codepen {
  background:rgba(255,255,255,0.1);
  left: 75%;
  bottom: 0;
}

.codepen:hover{
  background:#333333;
  box-shadow: 0 0 0 2px #333333;
}


.mail {
  background:rgba(255,255,255,0.1);
  left: 100%;
  top: 0;
}

.mail:hover{
  background:#1abc9c;
  box-shadow: 0 0 0 2px #1abc9c;
}


#secong
{

  background : #00CC99;
}

#myPanelDefault
{
  background : #00CC99;
  
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
    <a href="#myPanelDefault" class="ui-btn ui-btn-inline ui-corner-all ui-shadow"><h1 style="font-family: 'Oswald', sans-serif;color: #6699FF;font-size: 15px;">Menu</h1></a><h1 style="font-family: 'Oswald', sans-serif;color:#0033CC;font-size: 30px;text-shadow: none"> H.O.P.E </h1>
  </div>
  <?php if ($_SESSION['FBID']): ?>      <!--  After user login  -->

  <div data-role="main" class="ui-content">
    <div class="avatar"></div>
    <h1 style="font-family: 'Oswald', sans-serif;color: #6699FF;font-size: 30px;margin-left: auto;
  margin-right: auto;" align="center"><?php echo $_SESSION['FULLNAME']; ?></h1>
  <br>
  <p style="font-family: 'Oswald', sans-serif;font-size:20px"><span class="glyphicon glyphicon-home"></span> Home : Bangalore</p>
  <p style="font-family: 'Oswald', sans-serif;font-size:20px"><span class="glyphicon glyphicon-tower"></span> Challenges completed : 19</p>
  <p style="font-family: 'Oswald', sans-serif;font-size:20px"><span class="glyphicon glyphicon-star"></span> Points : 3456</p>
  <p style="font-family: 'Oswald', sans-serif;font-size:20px"><span class="glyphicon glyphicon-gift"></span> Birthday : 24/05</p>
  <p style="font-family: 'Oswald', sans-serif;font-size:20px"><span class="glyphicon glyphicon-user"></span> Profession : Student</p>
  <br>
 <p style="font-family: 'Oswald', sans-serif;font-size:20px;color: #6699FF;"><a href="update.html" data-ajax="false" ><span class="glyphicon glyphicon-pencil"></span> Update</a></p>
  <br>



<?php else: ?>     <!-- Before login --> 
<div class="container">
<h1>Login with Facebook</h1>
           Not Connected
<div>
      <a href="index.php">Login with Facebook</a></div>
      </div>
    <?php endif ?>
<p style="font-size:10px;" align="center">&copy H.O.P.E</p>



</div>
</body>
</html>