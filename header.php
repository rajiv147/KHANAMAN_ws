
<!DOCTYPE html>
<html>
<head>
<link href="ddmenu/ddmenu.css" rel="stylesheet" type="text/css"/>
<script src="ddmenu/ddmenu.js" type="text/javascript"></script>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>khanaman</title>
<link rel="stylesheet" href="assets/demo.css">
<link rel="stylesheet" href="assets/header-login-signup.css">
<link href='http://fonts.googleapis.com/css?family=Cookie' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Bree+Serif' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Philosopher' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="css/bootstrap.min.css"/>
<link rel="stylesheet" href="css/font-awesome.min.css"/>
<link rel="stylesheet" href="css/style.css" />
<script src="js/vendor/modernizr-2.6.2.min.js"></script>
<script src="js/vendor/jquery-1.10.2.min.js"></script>
<script src="js/vendor/bootstrap.min.js"></script>
<script type="text/javascript">
   <!--
      function validateEmail()
      {
         var emailID = document.myForm.EMail.value;
         atpos = emailID.indexOf("@");
         dotpos = emailID.lastIndexOf(".");
         
         if (atpos < 1 || ( dotpos - atpos < 2 )) 
         {
            alert("Please enter correct email ID")
            document.myForm.EMail.focus() ;
            return false;
         }
         return( true );
      }
   //-->
</script>
<script type="text/javascript">
   <!--
      // Form validation code will come here.
	  
      function validate()
      {
		  //var pass1 = document.getElementById("pass1").value;
         // var pass2 = document.getElementById("pass2").value;
      
         if( document.myForm.f_name.value == "" )
         {
            alert( "Please provide your First name!" );
            document.myForm.f_name.focus() ;
            return false;
         }
		 
		 if( document.myForm.l_name.value == "" )
         {
            alert( "Please provide your First name!" );
            document.myForm.l_name.focus() ;
            return false;
         }
		 
		  if( document.myForm.mobile.value == "" ||
         isNaN( document.myForm.mobile.value ) ||
         document.myForm.mobile.value.length != 10 )
         {
            alert( "Please provide 10 digits mobile! like 122636." );
            document.myForm.mobile.focus() ;
            return false;
         }
         
         if( document.myForm.EMail.value == "" )
         {
            alert( "Please provide your valid Email!" );
            document.myForm.EMail.focus() ;
            return false;
         }
		
		 if( document.myForm.pass.value == "" )
         {
            alert( "Please provide your pass!" );
            document.myForm.pass.focus() ;
            return false;
         }
		
		 if( document.myForm.cpass.value == "" )
         {
            alert( "Please provide your cpass!" );
            document.myForm.cpass.focus() ;
            return false;
         }
        
				
		
		//var pass1 = document.getElementById("pass1").value;
       // var pass2 = document.getElementById("pass2").value;
        if (pass1 != pass2) {
           alert("Passwords Do not match");
		   return false;
         
        }
        
    
     return( true );
      }
   //-->
</script>
<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">-->

<script type="text/javascript">
$('.searchButton').on('click',function(){
  alert('You clicked search button');
});
 </script>
<style>

</style>


<header class="header-login-signup">
<div class="header-limiter">
<div class="col-sm-8">
<a href="index.php">
<img src="images/logo.png" class="responsive-image"></a>
</div>

<!--<nav>
			<!--<a href="#">Home</a>
			<a href="#" class="selected">Blog</a>
			<a href="#">Pricing</a>
		</nav>-->

<!--<ul>
			<li><a href="#">Login</a></li>
			<li><a href="register-page.php">Sign up</a></li>
		</ul>-->

<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->

<!--<![endif]-->

<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->



<!--loging script-->

<!--remember me code---------------------------------------------------------------------------------------->
<!--<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
        <script>
            $(function() {

                if (localStorage.chkbx && localStorage.chkbx != '') {
                    $('#remember_me').attr('checked', 'checked');
                    $('#username').val(localStorage.usrname);
                    $('#pass').val(localStorage.pass);
                } else {
                    $('#remember_me').removeAttr('checked');
                    $('#username').val('');
                    $('#pass').val('');
                }

                $('#remember_me').click(function() {

                    if ($('#remember_me').is(':checked')) {
                        // save username and password
                        localStorage.usrname = $('#username').val();
                        localStorage.pass = $('#pass').val();
                        localStorage.chkbx = $('#remember_me').val();
                    } else {
                        localStorage.usrname = '';
                        localStorage.pass = '';
                        localStorage.chkbx = '';
                    }
                });
            });

        </script>
-->

<!--<style>
	.row
	{
		margin-top:-10px;
		margin-left:1000px;;
	}
	</style>-->

<!--[if lt IE 7]>
		<p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
		<![endif]-->

<!-- Add your site or application content here -->
<!--<div class="col-md-offset-4 col-lg-offset-4 col-md-4 col-lg-4">-->

<div class="col-sm-">
<div class="container-fluid">
<div class="row">


<nav id="ddmenu">
      <div class="menu-icon"></div>
      <ul>
        <!--<li class="no-sub"><a class="top-heading" href="">-->
     
  <button id='modal-launcher' class="btn btn-primary" data-toggle="modal" data-target="#login-modal"style="float: left;"> Sign In </button>
  </a>
  
  <button id='modal-launcher' class="btn btn-primary" data-toggle="modal" data-target="#singup-modal"> Register </button>
        
  
        
        </a> your city
      <!--<button id='modal-launcher' class="btn btn-primary" data-toggle="modal" data-target="#login-modal"> Sign In </button>-->
      <!--<button id='modal-launcher' class="btn btn-primary" data-toggle="modal" data-target="#singup-modal"> Register </button>-->
    </div>
   <!-- <div class="col-sm-2">fsdfsd
    </div>-->
  </div>
</div>

 </div>
      </ul>
      
    </nav>
    
    
<div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">

    <div class="modal-content">

      <div class="modal-header login_modal_header">
        
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h2 class="modal-title" id="myModalLabel">Login to Your Account</h2>
      </div>
      <div class="modal-body singup-modal"><br/>
        <div class="clearfix"></div>
        <div id='social-icons-conatainer'>
          <div class='modal-body-left'>
            <?php
/*if(isset($_REQUEST['msg'])){
	$show=$_REQUEST['msg'];
	//print"<p style='color:#f00'><script>alert("'.$error.'");
	echo '<script type="text/javascript">alert("'.$show.'");</script>';
}
*/?>
            <div class="form-group">
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" name="formlogin" method="post" onSubmit="return login();">
              <input type="text" id="username" name="Email" id="txtEmail" placeholder="Enter your Email" value="" class="form-control login-field">
              <i class="fa fa-user login-field-icon"></i>
              </div>
              <div class="form-group">
                <input type="password" id="pass" name="passl" placeholder="Password" value="" class="form-control login-field">
                <i class="fa fa-lock login-field-icon"></i></div>
              <div class="form-group">
                <!--<input type="checkbox" id="checkbox" name="remember" id="remember" name="">-->
                &nbsp; Remember me</div>
              <button type="submit" name="login-page" class="btn btn-success modal-login-btn">Login</button>
            </form>
          </div>
          
          <div class='modal-body-right'> 
          <div class="modal-social-icons"> 
          <a href='#' class="btn btn-default facebook"> <i class="fa fa-facebook modal-icons"></i> Sign In with Facebook </a>
	        				<!-- <a href='#' class="btn btn-default twitter"> <i class="fa fa-twitter modal-icons"></i> Sign In with Twitter </a> -->
	        				<a href='#' class="btn btn-default google"> <i class="fa fa-google-plus modal-icons"></i> Sign In with Google </a>
	        				<!-- <a href='#' class="btn btn-default linkedin"> <i class="fa fa-linkedin modal-icons"></i> Sign In with Linkedin </a>  -->
          <!--</div> 
	        		</div>	--> 
          <!--<div id='center-line'> OR </div>--> 
        </div>
        <div class="clearfix"></div>
        <!-- <div class="form-group modal-register-btn"><a href='#' class="btn btn-default facebook"><i class="fa fa-facebook modal-icons"></i>Sign In with Facebook</a></div> -->
      </div>
      <div class="clearfix"></div>
      <div class="modal-footer login_modal_footer"></div>
    </div>
  </div>
</div>

<!--sing up------------------------------------------------------------------------------------------------------------->

<div class="modal fade" id="singup-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header login_modal_header">
  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
  <h2 class="modal-title" id="myModalLabel">register</h2>
</div>
<div class="modal-body login-modal">
<br/>
<div class="clearfix"></div>

<!--<div class='modal-body-left'>-->
<form action="<?php echo $_SERVER['PHP_SELF'];?>" name="myForm" method="post" onSubmit="">
<!--<form action="<?php // echo $_SERVER['PHP_SELF'];?>" name="myForm" method="post" onSubmit="validate();">-->
<div class="form-group">
  <input type="text" id="username" placeholder="First Name" name="f_name" value="" class="form-control login-field">
  <i class="fa fa-user login-field-icon"></i></div>
<div class="form-group">
  <input type="text" id="" placeholder="Last Name" value="" name="l_name" class="form-control login-field">
  <i class="fa fa-lock login-field-icon"></i></div>
<!--<a href="#" class="btn btn-success modal-login-btn">Login</a><a href="#" class="login-link text-center">Lost your password?</a></div>--> 
<!--<div class='modal-body-right'>
          <div class="modal-social-icons">-->
<div class="form-group">
  <input type="text" id="username" placeholder="Mobile" name="mobile" value="" class="form-control login-field">
  <i class="fa fa-user login-field-icon"></i></div>
<!--<a href='#' class="btn btn-default facebook">
            <i class="fa fa-facebook modal-icons"></i>Sign In with Facebook</a>-->

<div class="form-group">
  <input type="text" id="username" placeholder="Email" value="" name="EMail" class="form-control login-field">
  <i class="fa fa-user login-field-icon"></i></div>
<div class="form-group">
  <input type="Password" id="login-pass" placeholder="Password" value="" name="pass" class="form-control login-field">
  <i class="fa fa-user login-field-icon"></i></div>

<!--<div class="form-group">
     <input type="Password" id="login-pass" placeholder="Confirm Password" name="cpass" value="" class="form-control login-field">
              <i class="fa fa-user login-field-icon"></i></div>-->
<button type="submit" name="register" class="btn btn-success modal-login-btn" onClick="return validate();">Register</button>

<!--</div>
          </div>-->
<div id='center-line'></div>
</div>
<div class="clearfix"></div>
<!--<div class="form-group modal-register-btn">
         <a href='#' class="btn btn-default facebook">
            <i class="fa fa-facebook modal-icons"></i>Sign In with Facebook</a>
        </div>-->
</div>
<!--<div class="clearfix"></div>
      <div class="modal-footer login_modal_footer"></div>
    </div>
  </div>-->
</div>

<!--sing up validation-->

</div>
</header>

<!-- The content of your page would go here. --> 

<!--<div class="menu">

	
	<h1></h1>
	<h2><a href="">sdfsdfsdf</a></h2>

	

</div>
-->
</head>