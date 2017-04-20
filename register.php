<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">
    <link rel="shortcut icon" type="image/png" href="favicon.png" />

	<link rel="stylesheet" type="text/css" href="./css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="./css/animate.css" /><link rel='stylesheet' href='./css/font-awesome.min.css'/><link rel='stylesheet' href='./css/linecons.min.css'/>

	<script src="./js/jquery-2.1.0.js"></script>
	<script src="./js/bootstrap.js"></script>
	<script src="./js/blocs.js"></script>
	<script src="./js/jqBootstrapValidation.js"></script>
	<script src="./js/formHandler.js"></script>
    <title>حَرفٍي | التسجيل</title>
<style media="screen">
  @import url(http://fonts.googleapis.com/earlyaccess/droidarabickufi.css);


.arabic{
   direction:rtl; font-family: 'Droid Arabic Kufi', serif;}

</style>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>




</head>
<body>
<!-- Main container -->
<form class="" action="test.php" method="post">


<div class="page-container">
<!-- bloc-0 --><div class="bloc bgc-dark-jungle-green d-bloc" id="bloc-0">
	<div class="container bloc-sm">
		<nav class="navbar row">
			<div class="navbar-header">
				<a class="navbar-brand website-logo" href="index.php"><img src="img/hammer_icon-01.png" alt="logo" width="45" /></a>
				<button id="nav-toggle" type="button" class="ui-navbar-toggle navbar-toggle" data-toggle="collapse" data-target=".navbar-1">
					<span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
				</button>
			</div>
			<div class="collapse navbar-collapse navbar-1">
				<ul class="site-navigation nav navbar-nav arabic arabic-font list-unstyled">
					<li>
						<a href="index.php" class="ltc-white">الرئيسيه</a>
					</li>
				</ul>
			</div>
		</nav>
	</div>
</div><!-- bloc-0 END --><!-- bloc-3 --><div class="bloc bgc-white l-bloc" id="bloc-3">
	<div class="container bloc-lg">
		<div class="row">
			<div class="col-sm-12">

					<form class="arabic" id="form_1168">

<?php
require  'webComponents.php';




$co = new com();
$co->getTextbox ("الأسم","input_first_name","input_first_name");
$co->getTextbox ("اللقب","input_last_name","input_last_name");
 ?>

</form>




     <div class="container arabic">
     <table>
     <tbody><tr>


<td>

    <?php

$co->getDropDown_year();

     ?>

</td>

     <td>
      <?php
$co ->getDropDown_DayMonth();

       ?>
     </td>
     </tr>
</tbody></table></div>

<div class="arabic">
  <?php
   $co ->getDropDown("المحافظه","cities","id,city_ar_name","onchange='onChange()'");
  ?>
</div>
<div id='mainselection' class='arabic' >
<div id="areaDDL" class="arabic">
</div>
</div>
<div class="arabic">

<script type="text/javascript">
function onChange() {


  var cityID=   document.getElementById("city_ddl").value;

    $.ajax({
        url:"generatedDDL.php",
        type: "POST",
                data: {cityID:cityID},
        success: function(Response){

          if($("#area_ddl").length ==1)
          {
            $("#areaDiv").remove();
           $('#areaDDL').append(Response);
          }
          else {
           $('#areaDDL').append(Response);
          }


}
});
};

</script>



  </div>
<?php $co->getDropDown_gender() ?>
</div>





    <div class="form-group arabic">
      <?php

    $co->getTextbox ("البريد الاليكتروني","input_email_addr","input_email_addr");

       ?>
  </div>

      <div class="form-group arabic">
        <?php

      $co->getTextbox ("كلمة المرور","input_password","input_password");

         ?>


				</div>
			</div>
			<div class="row voffset-md">
					<div class="col-sm-12">
						<div class="text-center">
							<button name ="mail" class="btn   btn-rd arabic bloc-button btn-deep-carrot-orange btn-lg" type="submit">
								تًسجيل
							</button>
						</div>
					</div>
				</div>
		</div>
	</div>

</div><!-- bloc-3 END --></form><!-- ScrollToTop Button --><a class="bloc-button btn btn-d scrollToTop" onclick="scrollToTarget('1')"><span class="fa fa-chevron-up"></span></a><!-- ScrollToTop Button END--><!-- Footer - bloc-5 --><div id="bloc-5" class="bloc social-bar jello-hvr bgc-dark-jungle-green d-bloc">
	<div class="container bloc-md">
		<div class="row">
			<div class="col-xs-12 col-md-8 col-md-offset-2">
				<form id="form_2168" novalidate>
					<h2 class="mg-md arabic tc-white text-center">
						أزاي توصلنا؟
					</h2>
				</form>
				<div class="col-sm-3 text-center">
					<a class="social-lg" href="index.php"><span class="fa fa-twitter icon-white icon-lg"></span></a>
				</div>
				<div class="col-sm-3 text-center">
					<a class="social-lg" href="index.php"><span class="fa fa-facebook icon-white icon-lg"></span></a>
				</div>
				<div class="col-sm-3 text-center">
					<a class="social-lg" href="index.php"><span class="fa fa-instagram icon-white icon-lg"></span></a>
				</div>
				<div class="col-sm-3 text-center">
					<a class="social-lg" href="index.php"><span class="fa fa-whatsapp icon-white icon-lg"></span></a>
				</div>
			</div>
		</div>
	</div>
</div><!-- Footer - bloc-5 END -->
</div>
<!-- Main container END -->


</body>

<!-- Google Analytics -->

<!-- Google Analytics END -->

</html>
