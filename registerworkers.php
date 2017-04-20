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



<script>
/* Arabic Translation for jQuery UI date picker plugin. */
/* Used in most of Arab countries, primarily in Bahrain, */
/* Kuwait, Oman, Qatar, Saudi Arabia and the United Arab Emirates, Egypt, Sudan and Yemen. */
/* Written by Mohammed Alshehri -- m@dralshehri.com */

( function( factory ) {
	if ( typeof define === "function" && define.amd ) {

		// AMD. Register as an anonymous module.
		define( [ "../widgets/datepicker" ], factory );
	} else {

		// Browser globals
		factory( jQuery.datepicker );
	}
}( function( datepicker ) {

datepicker.regional.ar = {
	closeText: "إغلاق",
	prevText: "&#x3C;السابق",
	nextText: "التالي&#x3E;",
	currentText: "اليوم",
	monthNames: [ "يناير", "فبراير", "مارس", "أبريل", "مايو", "يونيو",
	"يوليو", "أغسطس", "سبتمبر", "أكتوبر", "نوفمبر", "ديسمبر" ],
	monthNamesShort: [ "1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "11", "12" ],
	dayNames: [ "الأحد", "الاثنين", "الثلاثاء", "الأربعاء", "الخميس", "الجمعة", "السبت" ],
	dayNamesShort: [ "أحد", "اثنين", "ثلاثاء", "أربعاء", "خميس", "جمعة", "سبت" ],
	dayNamesMin: [ "ح", "ن", "ث", "ر", "خ", "ج", "س" ],
	weekHeader: "أسبوع",
	dateFormat: "dd/mm/yy",
	firstDay: 0,
		isRTL: true,
	showMonthAfterYear: false,
	yearSuffix: "" };
datepicker.setDefaults( datepicker.regional.ar );

return datepicker.regional.ar;

} ) );

</script>

</head>
<body>
<!-- Main container -->
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
						<a href="index.html" class="ltc-white">الرئيسيه</a>
					</li>
				</ul>
			</div>
		</nav>
	</div>
</div><!-- bloc-0 END --><!-- bloc-4 --><div class="bloc register-bloc bgc-white l-bloc" id="bloc-4">
	<div class="container bloc-lg">
		<div class="row">
			<div class="col-sm-12">

					<form class="arabic" id="form_1168">
  <div class="form-group arabic">
    <label for="input_first_name" class="arabic">الأسم</label>
    <input type="text" class="form-control" id="input_first_name" placeholder="">
     </div></form>

       <div class="form-group arabic">
    <label for="input_family_name" class="arabic">اللقب</label>
    <input type="text" class="form-control" id="input_family_name" placeholder="">
     </div>

     <div class="container arabic">
     <table>
     <tbody><tr>
     <td>
          <div class="form-group arabic">
    <label for="input_birth_year" class="arabic">سنه الميلاد</label>
    <input type="text" class="form-control" id="input_birth_year" placeholder="">
     </div>
     </td>
     <td>
          <div class="form-group arabic">
    <label for="input_birth_year" class="arabic">الشهر</label>
    <input type="text" class="form-control" id="input_birth_year" placeholder="">
     </div>
     </td>
     <td>
          <div class="form-group arabic">
    <label for="input_birth_year" class="arabic">اليوم</label>
    <input type="text" class="form-control" id="input_birth_year" placeholder="">
     </div>
     </td>
     </tr>
</tbody></table></div>
<div class="arabic">
  <label class="mr-sm-2 arabic" for="input_area">المنطقه</label>
  <select class="custom-select mb-2 mr-sm-2 mb-sm-0 arabic" id="input_area">
    <option selected="">اختار</option>
    <option value="1">One</option>
    <option value="2">Two</option>
    <option value="3">Three</option>
  </select>
  </div>
  <div class="arabic" style="margin-top:2%;">
<div class="form-check form-check-inline">
  <label class="form-check-label arabic">
    <input class="form-check-input arabic" type="radio" name="radio_male" id="radio_male" value="male"> ذكر
  </label>
</div>
<div class="form-check form-check-inline arabic">
  <label class="form-check-label arabic">
    <input class="form-check-input arabic" type="radio" name="radio_female" id="radio_female" value="female"> انثي  </label>
</div>
</div>


<div class="form-group arabic">
    <label for="input_craft" class="arabic">المهنه</label>
    <div class="arabic dropdown">
  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    اختر المهنه
    <span class="caret"></span>
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
    <li class="arabic"><a href="#">مهنه١</a></li>
    <li class="arabic"><a href="#">مهنه٢</a></li>
    <li class="arabic"><a href="#">مهنه٣</a></li>
    <li role="separator" class="divider"></li>
    <li class="arabic"><a href="#">مساعده</a></li>
  </ul>
</div>
     </div>


    <div class="form-group arabic">
    <label for="input_email" class="arabic">البريد الاليكتروني</label>
    <input type="email" class="arabic form-control" id="input_email" aria-describedby="emailHelp" placeholder="Enter email@domain.com">

  </div>

      <div class="form-group arabic">
    <label for="input_password" class="arabic">كلمة المرور</label>
    <input type="password" class="form-control arabic" id="input_password" placeholder="Password">
  </div>

				</div>
			</div>
		</div>
	</div>

</div><!-- bloc-4 END --><!-- ScrollToTop Button --><a class="bloc-button btn btn-d scrollToTop" onclick="scrollToTarget('1')"><span class="fa fa-chevron-up"></span></a><!-- ScrollToTop Button END--><!-- Footer - bloc-5 --><div id="bloc-5" class="bloc social-bar jello-hvr bgc-dark-jungle-green d-bloc">
	<div class="container bloc-md">
		<div class="row">
			<div class="col-xs-12 col-md-8 col-md-offset-2">
				<form id="form_2168" novalidate>
					<h2 class="mg-md arabic tc-white text-center">
						أزاي توصلنا؟
					</h2>
				</form>
				<div class="col-sm-3 text-center">
					<a class="social-lg" href="index.html"><span class="fa fa-twitter icon-white icon-lg"></span></a>
				</div>
				<div class="col-sm-3 text-center">
					<a class="social-lg" href="index.html"><span class="fa fa-facebook icon-white icon-lg"></span></a>
				</div>
				<div class="col-sm-3 text-center">
					<a class="social-lg" href="index.html"><span class="fa fa-instagram icon-white icon-lg"></span></a>
				</div>
				<div class="col-sm-3 text-center">
					<a class="social-lg" href="index.html"><span class="fa fa-whatsapp icon-white icon-lg"></span></a>
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
