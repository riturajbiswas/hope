<!DOCTYPE html>
<html>
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

  <div data-role="main" class="ui-content">
<div class="table-responsive"> 
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Rank</th>
                    <th>First Name</th>
                    <th>No. of challenges completed</th>
                    <th>No. of weekly challenges completed</th>
                    <th>Points</th>
                </tr>
            </thead>
            <tbody>

<?php
$i=1;
$conn = mysql_connect('localhost','hack','qwe123');
if(! $conn )
{
  die('Could not connect: ' . mysql_error());
}

mysql_select_db('CLIMAX');
$sql="SELECT * FROM LEADER_BOARD  ORDER BY Points DESC";
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not get data: ' . mysql_error());
}
while($row = mysql_fetch_array($retval, MYSQL_NUM))
{
    echo '<tr><td>'.$i.'</td><td>'.$row[1].' </td> <td> '.$row[2].' </td> <td> '.$row[3].' </td> <td> '.$row[4].' </td></tr>';
         
         $i++;
}
echo "Fetched data successfully\n";
mysql_close($conn);
?>


  </div>
</tbody>
        </table>
    </div>
</div>


<p style="font-size:10px;" align="center">&copy H.O.P.E</p>
</head>
</html>

</body>
</html>