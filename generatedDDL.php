<?php

$cityID = $_POST['cityID'];

include ('dbconfig.php');

echo "<div id='areaDiv'>";
       echo "<span>المنطقه</span>";

       $sqlCommand="select id,arabic_zone from `7erafy`.`zones` where city_id ='$cityID' order by 2 asc ";
        mysqli_query($conn, "SET NAMES 'utf8'") or die(mysql_error());
        mysqli_query($conn, "SET NAMES 'utf8'") or die(mysql_error());


      mysqli_query($conn, 'SET CHARACTER SET utf8') or die(mysql_error());
      $query=mysqli_query($conn, $sqlCommand) or die(mysql_error()) ;
  echo "<select id='area_ddl' class='arabic'>";
  echo "<option >اختر</option>";
      	while ($result=mysqli_fetch_array($query))

      		{
       //echo '<meta http-equiv="Content-type" content="text/html; charset=UTF-8" />';
      			echo ("<option  value='".$result[0]."'>".$result[1]."</option>");

      		}

      echo "</select>";
echo "</div>";

 ?>
