<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Yanone+Kaffeesatz' rel='stylesheet' type='text/css'>
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
</style>

</head>
<body>


  <div data-role="panel" id="myPanelDefault"> 
    <ul style="font-family: 'Oswald', sans-serif;color: #6699FF;font-size: 30px;text-shadow: none;list-style-type: none;">
      <li><a href="home5.php" data-ajax="false" style="text-decoration:none">Home</a></li>
            <li><a href="file:///C:/Users/neha/Desktop/hack4good/mobile/weekly.html" data-ajax="false" style="text-decoration:none">Weekly</a></li>
            <li><a href="mini.html" data-ajax="false" style="text-decoration:none">Mini</a></li>
            <li><a href="leader.php" data-ajax="false" style="text-decoration:none">Leaderboard</a></li>
            <li><a href="past.html" data-ajax="false" style="text-decoration:none">Past</a></li>
            <li><a href="profile.php" data-ajax="false" style="text-decoration:none">Profile</a></li>
            <li><a href="help.html" data-ajax="false" style="text-decoration:none">Help</a></li>
    </ul>
  </div> 


  

  <div data-role="header" id="secong">
    <a href="#myPanelDefault" ><p style="font-family: 'Oswald', sans-serif;color: #6699FF;font-size: 15px;">Menu</p></a><h2 style="font-family: 'Yanone Kaffeesatz', sans-serif;color: #0033CC;font-size: 30px;text-shadow: none;"> H.O.P.E </h2>
  </div>
<?php
session_start();

function GET_BEST($def_Loc,$def_Time,$def_Day)
{
//echo $def_Loc;
//echo $def_Time;
//echo $def_Day;

$c=mysql_connect("localhost","hack","qwe123") or die("Unable");
mysql_select_db("CLIMAX",$c);
$Fid=1;
$max=0;

$count=0;
while($count<8)
{
//echo 'in';
$count++;
$locp=mysql_query( "select Name,ID,".$def_Loc.",".$def_Time.",".$def_Day." from DAILY where id=".$count);
//$locp=mysql_query( "select Name,ID,Weekend,".$def_Loc.",".$def_Time." from DAILY where id=".$count);
//echo $locp;
while($row = mysql_fetch_assoc($locp))
{
//echo 'here';

/*echo '<br>';
  echo $row['Name'];
echo '<br>';
  echo $row[$def_Loc];
echo '<br>';
echo $row[$def_Time];
echo '<br>';
echo $row[$def_Day];
//echo $row['Weekend'];
echo '<br>';*/
$location=$row[$def_Loc];
$time=$row[$def_Time];
$day=$row[$def_Day];
$total=$location*1.5+$time+$day;
echo '<br>';

//echo "sum is".$total;
if($total>$max)
{
$Fid=$row['ID'];
$max=$total;
}


//echo 'in';

}
//$Id++;
}
echo '<br>';

//echo 'FID is'.$Fid;
return $Fid;
}
//$def_Loc='RL2';
//$def_Time='RT2';//
//$def_Day='RD2';


$def_Loc=$_POST['loc'];
$def_Time=$_POST['time'];
$def_Day=$_POST['day'];
echo ' You are here : '.$def_Loc;
echo ' at '.$def_Time;
echo ' on a '.$def_Day;

$Ans=GET_BEST($def_Loc,$def_Time,$def_Day);

//mysql_close();
//echo 'Result is'.$Ans;
$res=mysql_query( "select Name,Description from DAILY where id=".$Ans);
while($fin = mysql_fetch_assoc($res))
{
 $Fin_Name=$fin['Name'];
$Fin_Desc=$fin['Description'];
//echo $locp;
//echo $count;
}

?>

  <div data-role="main" class="ui-content">
    <p style="font-family: 'Oswald', sans-serif;color: #6699FF;font-size: 35px;color: #0033CC;">Your new challenge is</p>

    <p style="font-family: 'Oswald', sans-serif;font-size:30px;color: #6699FF;">
<?php
echo $Fin_Name;
?>
</p>
<p>
<?php
echo $Fin_Desc;
?></p>
   <br>
<center>
<form action="">
  <input type="file" name="pic" accept="image/*" align="centre">
  </form>
</center>
<a href="#"><img src="facebook-share-button.png" width="100" height="35" class="thumbnail img-responsive" style="margin-left: auto;
  margin-right: auto;" ></a>
<br><br>
  </div>
<p style="font-size:10px;" align="center">&copy H.O.P.E</p>
</body>
</html>