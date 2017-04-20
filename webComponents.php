<?php

 class com {


function getDropDown($label_name,$table_name,$columns,$custom)
{


include ('dbconfig.php');


      echo "<div id='mainselection' class='arabic' >";
       echo "<span>$label_name</span>";

       $sqlCommand="select $columns from `7erafy`.`$table_name` order by 2 asc ";
        mysqli_query($conn, "SET NAMES 'utf8'") or die(mysql_error());
        mysqli_query($conn, "SET NAMES 'utf8'") or die(mysql_error());


      mysqli_query($conn, 'SET CHARACTER SET utf8') or die(mysql_error());
      $query=mysqli_query($conn, $sqlCommand) or die(mysql_error()) ;
  echo "<select $custom id='city_ddl' class='arabic'>";
  echo "<option value= '0'>اختر</option>";
      	while ($result=mysqli_fetch_array($query))

      		{
       //echo '<meta http-equiv="Content-type" content="text/html; charset=UTF-8" />';
      			echo ("<option  value='".$result[0]."'>".$result[1]."</option>");

      		}

      echo "</select>";

}

function getTextbox ($labelName,$label_id,$textbox_id)
{
  echo "<div class='form-group arabic'>
    <label for='$label_id' class='arabic'>$labelName</label>
    <input type='text' class='form-control' id='$textbox_id' placeholder=''>
     </div>";
}

function getDropDown_year()
{
echo"  <div id='mainselection' class='arabic' >
 <span class='arabic'>السنه</span>
    <select class='arabic' name='tech_year' id='yearpicker1' required='required' style='width:65px;'>
    <option class='arabic' disabled selected value=''>اختر</option>

    </select>
    <script>
    for (i = new Date().getFullYear(); i > 1949; i--)
    {
        $('#yearpicker1').append($('<option />').val(i).html(i));
    }
    </script>
  </div>";
}

function  getDropDown_DayMonth()
{
  echo" <div id='mainselection' class='arabic' >
<span>الشهر</span>
<select class='arabic'>
<option disabled selected value=''>اختر</option>
<option value='01'>يناير</option>
<option value='02'>فبراير</option>
<option value='03'>مارس</option>
<option value='04'>ابريل</option>
<option value='05'>مايو</option>
<option value='06'>يونيه</option>
<option value='07'>يوليو</option>
<option value='08'>اغسطس</option>
<option value='09'>سبتمبر</option>
<option value='10'>اكتوبر</option>
<option value='11'>نوفمبر</option>
<option value='12'>ديسمبر</option>
   </div>
 <td>


   <div id='mainselection' class='arabic' >
<span>اليوم  </span>
<select name='tech_day' id='daypicker1' required='required' style='width:50px;'>
<option disabled selected value=''>يوم</option>
</select>
<script>
for (i =1; i < 32; i++)
{
$('#daypicker1').append($('<option />').val(i).html(i));
}
</script>
   </div>";



}



function getDropDown_gender()
{
echo"  <div class='row arabic'>

    <label for='year' class='arabic control-label input-group'>النوع</label>
    <div class='btn-group' data-toggle='buttons'>

        <label class='arabic btn btn-default'>
            <input type='radio' name='gender' value='male'>ذكر
        </label>
        <label class='arabic btn btn-default'>
            <input type='radio' name='gender' value='female' >أنثي
        </label>

  </div>";
}


}








 ?>
