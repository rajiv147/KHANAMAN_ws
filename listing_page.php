
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
<link rel="stylesheet" type="text/css" href="listing_page.css">
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
<img src="images/logo.png" class="responsive-image" ></a>
</div>




<div class="col-sm-">
<div class="container-fluid">
<div class="row">

<!-- style css taken from listing_page.css -->

  <button class="logout_btn"> Logout </button>






<link rel="stylesheet" href="//d305u1xvzud3tg.cloudfront.net/assets/css/website/stoker/app.build/0-1-24/app.libstyle.css">
          <link rel="stylesheet" href="//d305u1xvzud3tg.cloudfront.net/assets/css/website/stoker/app.build/0-1-24/app.style.css">
              <!--[if lt IE 9]>
            <script src="http://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7/html5shiv-printshiv.js"></script>
        <![endif]-->
        <!--REQUIRE JS ADDED -->
      <script type="text/javascript" src="//d305u1xvzud3tg.cloudfront.net/assets/js/website/stoker/app.build/0-1-25/lib/es5-shim.min.js"></script>
    <script type="text/javascript" src="//d305u1xvzud3tg.cloudfront.net/assets/js/website/stoker/app.build/0-1-25/main.js"></script>



</head>




<body>
<div class="clear"></div>


  <div class="col-xs-12 no-padding-xs" style="margin-top: 13px;">
          <div class="col-xs-12 no-padding-xs">
              <div class="lgscreen">
                <div class="col-xs-12" id="no_result_alert" style="display:none">
                  <p class="col-xs-12 alert alert-danger" role="alert">There are <b>no restaurants</b> matching your criteria. Please try <a href="#">different criteria</a> .</p>
                </div>
                <div class="MainData">
                                      <div class="col-xs-12 padding-bottom-15-px padding-top-15-px restaurant-search-container padding-left-0-px-xs"   data-delivery="delivery"  data-payment="online-payment"  data-foodtype="nonveg" data-rating="2.3" data-minamnt="300" style="border-top:1px solid #E9E9E9;">
                                              <div class="sponsored sponsored-position position-relative position-absolute-xs font-size-1-2-rem padding-right-2-percent-xs gray-shade-color-sponsored-text width-85-percent width-100-percent show-element margin-bottom-minus-8px margin-bottom-0-px">Sponsored</div>
                                            <div class="col-sm-2 col-md-2 col-xs-4 search-img max-width-110-px-xs">

                        <img class="lazy" data-src="//d305u1xvzud3tg.cloudfront.net/images/rest/thumbs/aroma%20restaurant.jpg" src="//d305u1xvzud3tg.cloudfront.net/images/rest/thumbs/je-restaurant-logo.jpg"  alt="Lazy Image" />
                        <!--                            <div class="badge">PRE ORDER</div>
                         -->
                      </div>
                      <div class="col-sm-3 col-md-4 col-xs-8 search-description ">

                        <div class="col-sm-12 col-xs-12 search-header width-100-percent no-padding-xs">
                          <!--  -->
                        <div class="heading_area">Aroma Restaurant</div>
                        <span class='restName-normal font-size-1-3-rem ellipse-text hidden-xs'>, Karkarduma</span>
                     
                        </div>
                        <div class="col-sm-12 hidden-xs search-address ellipse-text search-common-font font-size-1-3-rem" title="# 18, Ashish Corporate Tower, Karkarduma Community Centre, Delhi"># 18, Ashish Corporate Tower, Karkarduma Community Centre, Delhi</div>
                        <div class="col-sm-12 col-xs-12 cuisineInfo visible-xs no-padding-xs margin-left-1-percent-xs padding-top-2-percent-xs" >

                          Multicuisine                        </div>
                        <div class="col-sm-12 col-xs-12 menu-rating no-padding-xs">
                          <span class="review-holder" style="position:absolute; ">
                            <span class='starrating on'></span><span class='starrating on'></span><span class='starrating five'></span><span class='starrating off'></span><span class='starrating off'></span>                           (<span class="menu-reviws-value">8</span>)&nbsp&nbsp<span class="restName-normal font-size-1-3-rem position-absolute ellipse-text visible-xs">Karkarduma</span>
                          </span>
                        </div>
                      </div>
                      <div class="col-sm-2 col-md-2 col-xs-12 menu-data hidden-xs" style="padding:0 0px;">
                        <div class="col-sm-12 col-xs-12 cuisineInfo margin-left-1-percent-xs padding-top-2-percent-xs no-padding font-size-1-3-rem">
                          <span class="glyphicon glyphicon-cutlery font-size-1-5-rem"> </span>
                          Multicuisine                        </div>
                        <div class="col-sm-12 hidden-xs font-size-1-3-rem" style="padding: 0px;">
                          <span class="icon icon-delivery" style="font-size:17px;"></span>&nbsp;
                          FREE Delivery
                        </div>
                        <div class="col-sm-12 hidden-xs font-size-1-3-rem" style="padding: 0px;">
                                                      <span class="glyphicon font-size-1-5-rem">₹</span>&nbsp;
                            <span class="min-order-header">Min. order ₹ 300</span>
                                                  </div>
                      </div>
                      <div class="col-sm-2 hidden-sm menu-new-offer-pre font-size-1-3-rem no-padding">
                                                <div class="col-sm-12 newInfo hidden-xs no-padding">
                                                  </div>
                        <div class="col-sm-12 preorderInfo hidden-xs no-padding">
                                                      <span class="glyphicon glyphicon-share-alt font-size-1-5-rem padding-right-9-px"></span>Pre Order
                                                  </div>
                      </div>
                      <!--  -->

                                        <a class="btn_menu" href="/delhi/aroma-restaurant-karkarduma-10330/menu">
                      View Menu                   </a>
                    <!-- <a class="col-xs-12 visible-xs mobile view-menu" href="/delhi/aroma-restaurant-karkarduma-10330/menu">
                      <span class="glyphicon glyphicon-chevron-right"></span>
                    </a> -->
                  </div>

                                      <div class="col-xs-12 padding-bottom-15-px padding-top-15-px restaurant-search-container padding-left-0-px-xs"   data-delivery="delivery"  data-payment="online-payment"  data-foodtype="nonveg" data-rating="3.8" data-minamnt="250" style="border-top:1px solid #E9E9E9;">
                                              <div class="sponsored sponsored-position position-relative position-absolute-xs font-size-1-2-rem padding-right-2-percent-xs gray-shade-color-sponsored-text width-85-percent width-100-percent show-element margin-bottom-minus-8px margin-bottom-0-px">Sponsored</div>
                                            <div class="col-sm-2 col-md-2 col-xs-4 search-img max-width-110-px-xs">

                        <img class="lazy" data-src="//d305u1xvzud3tg.cloudfront.net/images/rest/thumbs/kabab-hut-logo-new.jpg" src="//d305u1xvzud3tg.cloudfront.net/images/rest/thumbs/je-restaurant-logo.jpg"  alt="Lazy Image" />
                        <!--  -->
                      </div>
                      <div class="col-sm-3 col-md-4 col-xs-8 search-description ">

                        <div class="col-sm-12 col-xs-12 search-header width-100-percent no-padding-xs">
                          <h1 class="ellipse-text no-padding margin-top-5-px no-margin font-size-1-7-rem"><!--  -->
                        <span>Kabab Hut</span><span class='restName-normal font-size-1-3-rem ellipse-text hidden-xs'>, Karkarduma</span></h1>
                        </div>
                        <div class="col-sm-12 hidden-xs search-address ellipse-text search-common-font font-size-1-3-rem" title="G6 & 10, Plot No- 18, Ashish Corporate Tower, Community Center, Karkardooma, Delhi">G6 & 10, Plot No- 18, Ashish Corporate Tower, Community Center, Karkardooma, Delhi</div>
                        <div class="col-sm-12 col-xs-12 cuisineInfo visible-xs no-padding-xs margin-left-1-percent-xs padding-top-2-percent-xs" >

                          North Indian                        </div>
                        <div class="col-sm-12 col-xs-12 menu-rating no-padding-xs">
                          <span class="review-holder" style="position:absolute; ">
                            <span class='starrating on'></span><span class='starrating on'></span><span class='starrating on'></span><span class='starrating on'></span><span class='starrating off'></span>                            (<span class="menu-reviws-value">23</span>)&nbsp&nbsp<span class="restName-normal font-size-1-3-rem position-absolute ellipse-text visible-xs">Karkarduma</span>
                          </span>
                        </div>
                      </div>
                      <div class="col-sm-2 col-md-2 col-xs-12 menu-data hidden-xs" style="padding:0 0px;">
                        <div class="col-sm-12 col-xs-12 cuisineInfo margin-left-1-percent-xs padding-top-2-percent-xs no-padding font-size-1-3-rem">
                          <span class="glyphicon glyphicon-cutlery font-size-1-5-rem"> </span>
                          North Indian                        </div>
                        <div class="col-sm-12 hidden-xs font-size-1-3-rem" style="padding: 0px;">
                          <span class="icon icon-delivery" style="font-size:17px;"></span>&nbsp;
                          FREE Delivery
                        </div>
                        <div class="col-sm-12 hidden-xs font-size-1-3-rem" style="padding: 0px;">
                                                      <span class="glyphicon font-size-1-5-rem">₹</span>&nbsp;
                            <span class="min-order-header">Min. order ₹ 250</span>
                                                  </div>
                      </div>
                      <div class="col-sm-2 hidden-sm menu-new-offer-pre font-size-1-3-rem no-padding">
                                                <div class="col-sm-12 newInfo hidden-xs no-padding">
                                                  </div>
                        <div class="col-sm-12 preorderInfo hidden-xs no-padding">
                                                  </div>
                      </div>
                      <!--  -->

                                        <a class="btn_menu" href="/delhi/kabab-hut-karkarduma-6038/menu">
                      View Menu                   </a>
                    <!-- <a class="col-xs-12 visible-xs mobile view-menu" href="/delhi/kabab-hut-karkarduma-6038/menu">
                      <span class="glyphicon glyphicon-chevron-right"></span>
                    </a> -->
                  </div>

                                      <div class="col-xs-12 padding-bottom-15-px padding-top-15-px restaurant-search-container padding-left-0-px-xs"   data-delivery="delivery"  data-payment="online-payment"  data-foodtype="veg" data-rating="3.0" data-minamnt="200" style="border-top:1px solid #E9E9E9;">
                                            <div class="col-sm-2 col-md-2 col-xs-4 search-img max-width-110-px-xs">

                        <img class="lazy" data-src="//d305u1xvzud3tg.cloudfront.net/images/rest/thumbs/meet-you-there-12092-web-1.jpeg" src="//d305u1xvzud3tg.cloudfront.net/images/rest/thumbs/je-restaurant-logo.jpg"  alt="Lazy Image" />
                        <!--  -->
                      </div>
                      <div class="col-sm-3 col-md-4 col-xs-8 search-description ">

                        <div class="col-sm-12 col-xs-12 search-header width-100-percent no-padding-xs">
                          <h1 class="ellipse-text no-padding margin-top-5-px no-margin font-size-1-7-rem"><!--  -->
                        <span>Meet You There</span><span class='restName-normal font-size-1-3-rem ellipse-text hidden-xs'>, Shakarpur</span></h1>
                        </div>
                        <div class="col-sm-12 hidden-xs search-address ellipse-text search-common-font font-size-1-3-rem" title="No: H, 56A, Main Market, Near Lakshmi Nagar Metro Station, Shakarpur, Delhi">No: H, 56A, Main Market, Near Lakshmi Nagar Metro Station, Shakarpur, Delhi</div>
                        <div class="col-sm-12 col-xs-12 cuisineInfo visible-xs no-padding-xs margin-left-1-percent-xs padding-top-2-percent-xs" >

                          North Indian                        </div>
                        <div class="col-sm-12 col-xs-12 menu-rating no-padding-xs">
                          <span class="review-holder" style="position:absolute; ">
                            <span class='starrating on'></span><span class='starrating on'></span><span class='starrating on'></span><span class='starrating off'></span><span class='starrating off'></span>                           (<span class="menu-reviws-value">29</span>)&nbsp&nbsp<span class="restName-normal font-size-1-3-rem position-absolute ellipse-text visible-xs">Shakarpur</span>
                          </span>
                        </div>
                      </div>
                      <div class="col-sm-2 col-md-2 col-xs-12 menu-data hidden-xs" style="padding:0 0px;">
                        <div class="col-sm-12 col-xs-12 cuisineInfo margin-left-1-percent-xs padding-top-2-percent-xs no-padding font-size-1-3-rem">
                          <span class="glyphicon glyphicon-cutlery font-size-1-5-rem"> </span>
                          North Indian                        </div>
                        <div class="col-sm-12 hidden-xs font-size-1-3-rem" style="padding: 0px;">
                          <span class="icon icon-delivery" style="font-size:17px;"></span>&nbsp;
                          FREE Delivery
                        </div>
                        <div class="col-sm-12 hidden-xs font-size-1-3-rem" style="padding: 0px;">
                                                      <span class="glyphicon font-size-1-5-rem">₹</span>&nbsp;
                            <span class="min-order-header">Min. order ₹ 200</span>
                                                  </div>
                      </div>
                      <div class="col-sm-2 hidden-sm menu-new-offer-pre font-size-1-3-rem no-padding">
                                                <div class="col-sm-12 newInfo hidden-xs no-padding">
                                                  </div>
                        <div class="col-sm-12 preorderInfo hidden-xs no-padding">
                                                  </div>
                      </div>
                      <!--  -->

                                        <a class="btn_menu" href="/delhi/meet-you-there-shakarpur-12092/menu">
                      View Menu                   </a>
                    <!-- <a class="col-xs-12 visible-xs mobile view-menu" href="/delhi/meet-you-there-shakarpur-12092/menu">
                      <span class="glyphicon glyphicon-chevron-right"></span>
                    </a> -->
                  </div>

                                      <div class="col-xs-12 padding-bottom-15-px padding-top-15-px restaurant-search-container padding-left-0-px-xs"   data-delivery="delivery"  data-payment="online-payment"  data-foodtype="nonveg" data-rating="2.9" data-minamnt="200" style="border-top:1px solid #E9E9E9;">
                                            <div class="col-sm-2 col-md-2 col-xs-4 search-img max-width-110-px-xs">

                        <img class="lazy" data-src="//d305u1xvzud3tg.cloudfront.net/images/rest/thumbs/just-eat.jpg" src="//d305u1xvzud3tg.cloudfront.net/images/rest/thumbs/je-restaurant-logo.jpg"  alt="Lazy Image" />
                        <!--  -->
                      </div>
                      <div class="col-sm-3 col-md-4 col-xs-8 search-description ">

                        <div class="col-sm-12 col-xs-12 search-header width-100-percent no-padding-xs">
                          <h1 class="ellipse-text no-padding margin-top-5-px no-margin font-size-1-7-rem"><!--  -->
                        <span>Dial A Cake</span><span class='restName-normal font-size-1-3-rem ellipse-text hidden-xs'>, Pandav Nagar</span></h1>
                        </div>
                        <div class="col-sm-12 hidden-xs search-address ellipse-text search-common-font font-size-1-3-rem" title="54, LFG Pandav Nagar, Opp Mother Dairy, New Delhi">54, LFG Pandav Nagar, Opp Mother Dairy, New Delhi</div>
                        <div class="col-sm-12 col-xs-12 cuisineInfo visible-xs no-padding-xs margin-left-1-percent-xs padding-top-2-percent-xs" >

                          Sweets/Cakes                        </div>
                        <div class="col-sm-12 col-xs-12 menu-rating no-padding-xs">
                          <span class="review-holder" style="position:absolute; ">
                            <span class='starrating on'></span><span class='starrating on'></span><span class='starrating on'></span><span class='starrating off'></span><span class='starrating off'></span>                           (<span class="menu-reviws-value">12</span>)&nbsp&nbsp<span class="restName-normal font-size-1-3-rem position-absolute ellipse-text visible-xs">Pandav Nagar</span>
                          </span>
                        </div>
                      </div>
                      <div class="col-sm-2 col-md-2 col-xs-12 menu-data hidden-xs" style="padding:0 0px;">
                        <div class="col-sm-12 col-xs-12 cuisineInfo margin-left-1-percent-xs padding-top-2-percent-xs no-padding font-size-1-3-rem">
                          <span class="glyphicon glyphicon-cutlery font-size-1-5-rem"> </span>
                          Sweets/Cakes                        </div>
                        <div class="col-sm-12 hidden-xs font-size-1-3-rem" style="padding: 0px;">
                          <span class="icon icon-delivery" style="font-size:17px;"></span>&nbsp;
                          FREE Delivery
                        </div>
                        <div class="col-sm-12 hidden-xs font-size-1-3-rem" style="padding: 0px;">
                                                      <span class="glyphicon font-size-1-5-rem">₹</span>&nbsp;
                            <span class="min-order-header">Min. order ₹ 200</span>
                                                  </div>
                      </div>
                      <div class="col-sm-2 hidden-sm menu-new-offer-pre font-size-1-3-rem no-padding">
                                                <div class="col-sm-12 newInfo hidden-xs no-padding">
                                                  </div>
                        <div class="col-sm-12 preorderInfo hidden-xs no-padding">
                                                  </div>
                      </div>
                      <!--  -->

                                        <a class="btn_menu" href="/delhi/dial-a-cake-pandav-nagar-9986/menu">
                      View Menu                   </a>
                    <!-- <a class="col-xs-12 visible-xs mobile view-menu" href="/delhi/dial-a-cake-pandav-nagar-9986/menu">
                      <span class="glyphicon glyphicon-chevron-right"></span>
                    </a> -->
                  </div>

                                      <div class="col-xs-12 padding-bottom-15-px padding-top-15-px restaurant-search-container padding-left-0-px-xs"   data-delivery="delivery"  data-payment="online-payment"  data-foodtype="nonveg" data-rating="2.5" data-minamnt="200" style="border-top:1px solid #E9E9E9;">
                                            <div class="col-sm-2 col-md-2 col-xs-4 search-img max-width-110-px-xs">

                        <img class="lazy" data-src="//d305u1xvzud3tg.cloudfront.net/images/rest/thumbs/dhaba-myt-12399-web-2.jpeg" src="//d305u1xvzud3tg.cloudfront.net/images/rest/thumbs/je-restaurant-logo.jpg"  alt="Lazy Image" />
                        <!--                            <div class="badge">PRE ORDER</div>
                         -->
                      </div>
                      <div class="col-sm-3 col-md-4 col-xs-8 search-description ">

                        <div class="col-sm-12 col-xs-12 search-header width-100-percent no-padding-xs">
                          <h1 class="ellipse-text no-padding margin-top-5-px no-margin font-size-1-7-rem"><!--  -->
                        <span>Fatbelly</span><span class='restName-normal font-size-1-3-rem ellipse-text hidden-xs'>, Shakarpur</span></h1>
                        </div>
                        <div class="col-sm-12 hidden-xs search-address ellipse-text search-common-font font-size-1-3-rem" title="No:U-26, Shakarpur, New Delhi">No:U-26, Shakarpur, New Delhi</div>
                        <div class="col-sm-12 col-xs-12 cuisineInfo visible-xs no-padding-xs margin-left-1-percent-xs padding-top-2-percent-xs" >

                          North Indian                        </div>
                        <div class="col-sm-12 col-xs-12 menu-rating no-padding-xs">
                          <span class="review-holder" style="position:absolute; ">
                            <span class='starrating on'></span><span class='starrating on'></span><span class='starrating five'></span><span class='starrating off'></span><span class='starrating off'></span>                           (<span class="menu-reviws-value">6</span>)&nbsp&nbsp<span class="restName-normal font-size-1-3-rem position-absolute ellipse-text visible-xs">Shakarpur</span>
                          </span>
                        </div>
                      </div>
                      <div class="col-sm-2 col-md-2 col-xs-12 menu-data hidden-xs" style="padding:0 0px;">
                        <div class="col-sm-12 col-xs-12 cuisineInfo margin-left-1-percent-xs padding-top-2-percent-xs no-padding font-size-1-3-rem">
                          <span class="glyphicon glyphicon-cutlery font-size-1-5-rem"> </span>
                          North Indian                        </div>
                        <div class="col-sm-12 hidden-xs font-size-1-3-rem" style="padding: 0px;">
                          <span class="icon icon-delivery" style="font-size:17px;"></span>&nbsp;
                          FREE Delivery
                        </div>
                        <div class="col-sm-12 hidden-xs font-size-1-3-rem" style="padding: 0px;">
                                                      <span class="glyphicon font-size-1-5-rem">₹</span>&nbsp;
                            <span class="min-order-header">Min. order ₹ 200</span>
                                                  </div>
                      </div>
                      <div class="col-sm-2 hidden-sm menu-new-offer-pre font-size-1-3-rem no-padding">
                                                <div class="col-sm-12 newInfo hidden-xs no-padding">
                                                  </div>
                        <div class="col-sm-12 preorderInfo hidden-xs no-padding">
                                                      <span class="glyphicon glyphicon-share-alt font-size-1-5-rem padding-right-9-px"></span>Pre Order
                                                  </div>
                      </div>
                      <!--  -->

                                        <a class="btn_menu" href="/delhi/fatbelly-shakarpur-12399/menu">
                      View Menu                   </a>
                    <!-- <a class="col-xs-12 visible-xs mobile view-menu" href="/delhi/fatbelly-shakarpur-12399/menu">
                      <span class="glyphicon glyphicon-chevron-right"></span>
                    </a> -->
                  </div>

                                      <div class="col-xs-12 padding-bottom-15-px padding-top-15-px restaurant-search-container padding-left-0-px-xs"  data-dining="dine-in" data-delivery="delivery"  data-payment="online-payment"  data-foodtype="nonveg" data-rating="1.9" data-minamnt="300" style="border-top:1px solid #E9E9E9;">
                                            <div class="col-sm-2 col-md-2 col-xs-4 search-img max-width-110-px-xs">

                        <img class="lazy" data-src="//d305u1xvzud3tg.cloudfront.net/images/rest/thumbs/handas-restaurant.jpg" src="//d305u1xvzud3tg.cloudfront.net/images/rest/thumbs/je-restaurant-logo.jpg"  alt="Lazy Image" />
                        <!--                            <div class="badge">PRE ORDER</div>
                         -->
                      </div>
                      <div class="col-sm-3 col-md-4 col-xs-8 search-description ">

                        <div class="col-sm-12 col-xs-12 search-header width-100-percent no-padding-xs">
                          <h1 class="ellipse-text no-padding margin-top-5-px no-margin font-size-1-7-rem"><!--  -->
                        <span>Handa's Restaurant</span><span class='restName-normal font-size-1-3-rem ellipse-text hidden-xs'>, Lakshmi Nagar</span></h1>
                        </div>
                        <div class="col-sm-12 hidden-xs search-address ellipse-text search-common-font font-size-1-3-rem" title="# 292, West Guru Angad Nagar, Lakshmi Nagar, Delhi - 92"># 292, West Guru Angad Nagar, Lakshmi Nagar, Delhi - 92</div>
                        <div class="col-sm-12 col-xs-12 cuisineInfo visible-xs no-padding-xs margin-left-1-percent-xs padding-top-2-percent-xs" >

                          North Indian                        </div>
                        <div class="col-sm-12 col-xs-12 menu-rating no-padding-xs">
                          <span class="review-holder" style="position:absolute; ">
                            <span class='starrating on'></span><span class='starrating on'></span><span class='starrating off'></span><span class='starrating off'></span><span class='starrating off'></span>                            (<span class="menu-reviws-value">7</span>)&nbsp&nbsp<span class="restName-normal font-size-1-3-rem position-absolute ellipse-text visible-xs">Lakshmi Nagar</span>
                          </span>
                        </div>
                      </div>
                      <div class="col-sm-2 col-md-2 col-xs-12 menu-data hidden-xs" style="padding:0 0px;">
                        <div class="col-sm-12 col-xs-12 cuisineInfo margin-left-1-percent-xs padding-top-2-percent-xs no-padding font-size-1-3-rem">
                          <span class="glyphicon glyphicon-cutlery font-size-1-5-rem"> </span>
                          North Indian                        </div>
                        <div class="col-sm-12 hidden-xs font-size-1-3-rem" style="padding: 0px;">
                          <span class="icon icon-delivery" style="font-size:17px;"></span>&nbsp;
                          FREE Delivery
                        </div>
                        <div class="col-sm-12 hidden-xs font-size-1-3-rem" style="padding: 0px;">
                                                      <span class="glyphicon font-size-1-5-rem">₹</span>&nbsp;
                            <span class="min-order-header">Min. order ₹ 300</span>
                                                  </div>
                      </div>
                      <div class="col-sm-2 hidden-sm menu-new-offer-pre font-size-1-3-rem no-padding">
                                                <div class="col-sm-12 newInfo hidden-xs no-padding">
                                                  </div>
                        <div class="col-sm-12 preorderInfo hidden-xs no-padding">
                                                      <span class="glyphicon glyphicon-share-alt font-size-1-5-rem padding-right-9-px"></span>Pre Order
                                                  </div>
                      </div>
                      <!--  -->

                                        <a class="btn_menu" href="/delhi/handas-restaurant-lakshmi-nagar-8552/menu">
                      View Menu                   </a>
                    <!-- <a class="col-xs-12 visible-xs mobile view-menu" href="/delhi/handas-restaurant-lakshmi-nagar-8552/menu">
                      <span class="glyphicon glyphicon-chevron-right"></span>
                    </a> -->
                  </div>

                                      <div class="col-xs-12 padding-bottom-15-px padding-top-15-px restaurant-search-container padding-left-0-px-xs"   data-delivery="delivery"    data-foodtype="nonveg" data-rating="2.5" data-minamnt="150" style="border-top:1px solid #E9E9E9;">
                                            <div class="col-sm-2 col-md-2 col-xs-4 search-img max-width-110-px-xs">

                        <img class="lazy" data-src="//d305u1xvzud3tg.cloudfront.net/images/rest/thumbs/phd-logo-new.jpg" src="//d305u1xvzud3tg.cloudfront.net/images/rest/thumbs/je-restaurant-logo.jpg"  alt="Lazy Image" />
                        <!--  -->
                      </div>
                      <div class="col-sm-3 col-md-4 col-xs-8 search-description ">

                        <div class="col-sm-12 col-xs-12 search-header width-100-percent no-padding-xs">
                          <h1 class="ellipse-text no-padding margin-top-5-px no-margin font-size-1-7-rem"><!--  -->
                        <span>Pizza Hut Delivery</span><span class='restName-normal font-size-1-3-rem ellipse-text hidden-xs'>, Lakshmi Nagar</span></h1>
                        </div>
                        <div class="col-sm-12 hidden-xs search-address ellipse-text search-common-font font-size-1-3-rem" title="Ground Floor, V3S Mall, Lakshmi Nagar District Centre,
New Delhi">Ground Floor, V3S Mall, Lakshmi Nagar District Centre,
New Delhi</div>
                        <div class="col-sm-12 col-xs-12 cuisineInfo visible-xs no-padding-xs margin-left-1-percent-xs padding-top-2-percent-xs" >

                          Pizza                       </div>
                        <div class="col-sm-12 col-xs-12 menu-rating no-padding-xs">
                          <span class="review-holder" style="position:absolute; ">
                            <span class='starrating on'></span><span class='starrating on'></span><span class='starrating five'></span><span class='starrating off'></span><span class='starrating off'></span>                           (<span class="menu-reviws-value">2</span>)&nbsp&nbsp<span class="restName-normal font-size-1-3-rem position-absolute ellipse-text visible-xs">Lakshmi Nagar</span>
                          </span>
                        </div>
                      </div>
                      <div class="col-sm-2 col-md-2 col-xs-12 menu-data hidden-xs" style="padding:0 0px;">
                        <div class="col-sm-12 col-xs-12 cuisineInfo margin-left-1-percent-xs padding-top-2-percent-xs no-padding font-size-1-3-rem">
                          <span class="glyphicon glyphicon-cutlery font-size-1-5-rem"> </span>
                          Pizza                       </div>
                        <div class="col-sm-12 hidden-xs font-size-1-3-rem" style="padding: 0px;">
                          <span class="icon icon-delivery" style="font-size:17px;"></span>&nbsp;
                          FREE Delivery
                        </div>
                        <div class="col-sm-12 hidden-xs font-size-1-3-rem" style="padding: 0px;">
                                                      <span class="glyphicon font-size-1-5-rem">₹</span>&nbsp;
                            <span class="min-order-header">Min. order ₹ 150</span>
                                                  </div>
                      </div>
                      <div class="col-sm-2 hidden-sm menu-new-offer-pre font-size-1-3-rem no-padding">
                                                <div class="col-sm-12 newInfo hidden-xs no-padding">
                                                  </div>
                        <div class="col-sm-12 preorderInfo hidden-xs no-padding">
                                                  </div>
                      </div>
                      <!--  -->

                                        <a class="btn_menu" href="/delhi/pizza-hut-delivery-lakshmi-nagar-9275/menu">
                      View Menu                   </a>
                    <!-- <a class="col-xs-12 visible-xs mobile view-menu" href="/delhi/pizza-hut-delivery-lakshmi-nagar-9275/menu">
                      <span class="glyphicon glyphicon-chevron-right"></span>
                    </a> -->
                  </div>

                                      <div class="col-xs-12 padding-bottom-15-px padding-top-15-px restaurant-search-container padding-left-0-px-xs"   data-delivery="delivery"  data-payment="online-payment"  data-foodtype="nonveg" data-rating="0.0" data-minamnt="500" style="border-top:1px solid #E9E9E9;">
                                            <div class="col-sm-2 col-md-2 col-xs-4 search-img max-width-110-px-xs">

                        <img class="lazy" data-src="//d305u1xvzud3tg.cloudfront.net/images/rest/thumbs/berco-s-12685-web-1.jpeg" src="//d305u1xvzud3tg.cloudfront.net/images/rest/thumbs/je-restaurant-logo.jpg"  alt="Lazy Image" />
                        <!--  -->
                      </div>
                      <div class="col-sm-3 col-md-4 col-xs-8 search-description ">

                        <div class="col-sm-12 col-xs-12 search-header width-100-percent no-padding-xs">
                          <h1 class="ellipse-text no-padding margin-top-5-px no-margin font-size-1-7-rem"><!--  -->
                        <span>Berco's</span><span class='restName-normal font-size-1-3-rem ellipse-text hidden-xs'>, Preet Vihar</span></h1>
                        </div>
                        <div class="col-sm-12 hidden-xs search-address ellipse-text search-common-font font-size-1-3-rem" title="No.A6, LSE, Preet Vihar Market, Near Narula, Preet Vihar, Delhi">No.A6, LSE, Preet Vihar Market, Near Narula, Preet Vihar, Delhi</div>
                        <div class="col-sm-12 col-xs-12 cuisineInfo visible-xs no-padding-xs margin-left-1-percent-xs padding-top-2-percent-xs" >

                          Chinese                       </div>
                        <div class="col-sm-12 col-xs-12 menu-rating no-padding-xs">
                          <span class="review-holder" style="position:absolute; ">
                            <span class='starrating off'></span><span class='starrating off'></span><span class='starrating off'></span><span class='starrating off'></span><span class='starrating off'></span>                            (<span class="menu-reviws-value">0</span>)&nbsp&nbsp<span class="restName-normal font-size-1-3-rem position-absolute ellipse-text visible-xs">Preet Vihar</span>
                          </span>
                        </div>
                      </div>
                      <div class="col-sm-2 col-md-2 col-xs-12 menu-data hidden-xs" style="padding:0 0px;">
                        <div class="col-sm-12 col-xs-12 cuisineInfo margin-left-1-percent-xs padding-top-2-percent-xs no-padding font-size-1-3-rem">
                          <span class="glyphicon glyphicon-cutlery font-size-1-5-rem"> </span>
                          Chinese                       </div>
                        <div class="col-sm-12 hidden-xs font-size-1-3-rem" style="padding: 0px;">
                          <span class="icon icon-delivery" style="font-size:17px;"></span>&nbsp;
                          FREE Delivery
                        </div>
                        <div class="col-sm-12 hidden-xs font-size-1-3-rem" style="padding: 0px;">
                                                      <span class="glyphicon font-size-1-5-rem">₹</span>&nbsp;
                            <span class="min-order-header">Min. order ₹ 500</span>
                                                  </div>
                      </div>
                      <div class="col-sm-2 hidden-sm menu-new-offer-pre font-size-1-3-rem no-padding">
                                                <div class="col-sm-12 newInfo hidden-xs no-padding">
                                                  </div>
                        <div class="col-sm-12 preorderInfo hidden-xs no-padding">
                                                  </div>
                      </div>
                      <!--  -->

                                        <a class="btn_menu" href="/delhi/bercos-preet-vihar-12685/menu">
                      View Menu                   </a>
                    <!-- <a class="col-xs-12 visible-xs mobile view-menu" href="/delhi/bercos-preet-vihar-12685/menu">
                      <span class="glyphicon glyphicon-chevron-right"></span>
                    </a> -->
                  </div>

                                      <div class="col-xs-12 padding-bottom-15-px padding-top-15-px restaurant-search-container padding-left-0-px-xs"   data-delivery="delivery"  data-payment="online-payment"  data-foodtype="nonveg" data-rating="0.0" data-minamnt="300" style="border-top:1px solid #E9E9E9;">
                                            <div class="col-sm-2 col-md-2 col-xs-4 search-img max-width-110-px-xs">

                        <img class="lazy" data-src="//d305u1xvzud3tg.cloudfront.net/images/rest/thumbs/play-pizza-12772-web-2.jpeg" src="//d305u1xvzud3tg.cloudfront.net/images/rest/thumbs/je-restaurant-logo.jpg"  alt="Lazy Image" />
                        <!--  -->
                      </div>
                      <div class="col-sm-3 col-md-4 col-xs-8 search-description ">

                        <div class="col-sm-12 col-xs-12 search-header width-100-percent no-padding-xs">
                          <h1 class="ellipse-text no-padding margin-top-5-px no-margin font-size-1-7-rem"><!--  -->
                        <span>Play Pizza</span><span class='restName-normal font-size-1-3-rem ellipse-text hidden-xs'>, Nirman Vihar</span></h1>
                        </div>
                        <div class="col-sm-12 hidden-xs search-address ellipse-text search-common-font font-size-1-3-rem" title="Shop No. 2, DDA Market, Nirman Vihar, New Delhi">Shop No. 2, DDA Market, Nirman Vihar, New Delhi</div>
                        <div class="col-sm-12 col-xs-12 cuisineInfo visible-xs no-padding-xs margin-left-1-percent-xs padding-top-2-percent-xs" >

                          Pizza                       </div>
                        <div class="col-sm-12 col-xs-12 menu-rating no-padding-xs">
                          <span class="review-holder" style="position:absolute; ">
                            <span class='starrating off'></span><span class='starrating off'></span><span class='starrating off'></span><span class='starrating off'></span><span class='starrating off'></span>                            (<span class="menu-reviws-value">0</span>)&nbsp&nbsp<span class="restName-normal font-size-1-3-rem position-absolute ellipse-text visible-xs">Nirman Vihar</span>
                          </span>
                        </div>
                      </div>
                      <div class="col-sm-2 col-md-2 col-xs-12 menu-data hidden-xs" style="padding:0 0px;">
                        <div class="col-sm-12 col-xs-12 cuisineInfo margin-left-1-percent-xs padding-top-2-percent-xs no-padding font-size-1-3-rem">
                          <span class="glyphicon glyphicon-cutlery font-size-1-5-rem"> </span>
                          Pizza                       </div>
                        <div class="col-sm-12 hidden-xs font-size-1-3-rem" style="padding: 0px;">
                          <span class="icon icon-delivery" style="font-size:17px;"></span>&nbsp;
                          FREE Delivery
                        </div>
                        <div class="col-sm-12 hidden-xs font-size-1-3-rem" style="padding: 0px;">
                                                      <span class="glyphicon font-size-1-5-rem">₹</span>&nbsp;
                            <span class="min-order-header">Min. order ₹ 300</span>
                                                  </div>
                      </div>
                      <div class="col-sm-2 hidden-sm menu-new-offer-pre font-size-1-3-rem no-padding">
                                                <div class="col-sm-12 newInfo hidden-xs no-padding">
                                                  </div>
                        <div class="col-sm-12 preorderInfo hidden-xs no-padding">
                                                  </div>
                      </div>
                      <!--  -->

                                        <a class="btn_menu" href="/delhi/play-pizza-nirman-vihar-12772/menu">
                      View Menu                   </a>
                    <!-- <a class="col-xs-12 visible-xs mobile view-menu" href="/delhi/play-pizza-nirman-vihar-12772/menu">
                      <span class="glyphicon glyphicon-chevron-right"></span>
                    </a> -->
                  </div>

                                      <div class="col-xs-12 padding-bottom-15-px padding-top-15-px restaurant-search-container padding-left-0-px-xs"   data-delivery="delivery"  data-payment="online-payment"  data-foodtype="nonveg" data-rating="0.0" data-minamnt="300" style="border-top:1px solid #E9E9E9;">
                                            <div class="col-sm-2 col-md-2 col-xs-4 search-img max-width-110-px-xs">

                        <img class="lazy" data-src="//d305u1xvzud3tg.cloudfront.net/images/rest/thumbs/smoky-chettinad-11951-web-1.jpeg" src="//d305u1xvzud3tg.cloudfront.net/images/rest/thumbs/je-restaurant-logo.jpg"  alt="Lazy Image" />
                        <!--                            <div class="badge">PRE ORDER</div>
                         -->
                      </div>
                      <div class="col-sm-3 col-md-4 col-xs-8 search-description ">

                        <div class="col-sm-12 col-xs-12 search-header width-100-percent no-padding-xs">
                          <h1 class="ellipse-text no-padding margin-top-5-px no-margin font-size-1-7-rem"><!--  -->
                        <span>Smoky Chettinad</span><span class='restName-normal font-size-1-3-rem ellipse-text hidden-xs'>, Mayur Vihar Phase 1</span></h1>
                        </div>
                        <div class="col-sm-12 hidden-xs search-address ellipse-text search-common-font font-size-1-3-rem" title="Shop No 2, DDA Local Shopping Complex, Opp HDFC Bank ATM, Acharya Niketan, Mayur Vihar, Phase 1, Delhi">Shop No 2, DDA Local Shopping Complex, Opp HDFC Bank ATM, Acharya Niketan, Mayur Vihar, Phase 1, Delhi</div>
                        <div class="col-sm-12 col-xs-12 cuisineInfo visible-xs no-padding-xs margin-left-1-percent-xs padding-top-2-percent-xs" >

                          Chettinad                       </div>
                        <div class="col-sm-12 col-xs-12 menu-rating no-padding-xs">
                          <span class="review-holder" style="position:absolute; ">
                            <span class='starrating off'></span><span class='starrating off'></span><span class='starrating off'></span><span class='starrating off'></span><span class='starrating off'></span>                            (<span class="menu-reviws-value">0</span>)&nbsp&nbsp<span class="restName-normal font-size-1-3-rem position-absolute ellipse-text visible-xs">Mayur Vihar Phase 1</span>
                          </span>
                        </div>
                      </div>
                      <div class="col-sm-2 col-md-2 col-xs-12 menu-data hidden-xs" style="padding:0 0px;">
                        <div class="col-sm-12 col-xs-12 cuisineInfo margin-left-1-percent-xs padding-top-2-percent-xs no-padding font-size-1-3-rem">
                          <span class="glyphicon glyphicon-cutlery font-size-1-5-rem"> </span>
                          Chettinad                       </div>
                        <div class="col-sm-12 hidden-xs font-size-1-3-rem" style="padding: 0px;">
                          <span class="icon icon-delivery" style="font-size:17px;"></span>&nbsp;
                          FREE Delivery
                        </div>
                        <div class="col-sm-12 hidden-xs font-size-1-3-rem" style="padding: 0px;">
                                                      <span class="glyphicon font-size-1-5-rem">₹</span>&nbsp;
                            <span class="min-order-header">Min. order ₹ 300</span>
                                                  </div>
                      </div>
                      <div class="col-sm-2 hidden-sm menu-new-offer-pre font-size-1-3-rem no-padding">
                                                <div class="col-sm-12 newInfo hidden-xs no-padding">
                                                  </div>
                        <div class="col-sm-12 preorderInfo hidden-xs no-padding">
                                                      <span class="glyphicon glyphicon-share-alt font-size-1-5-rem padding-right-9-px"></span>Pre Order
                                                  </div>
                      </div>
                      <!--  -->

                                        <a class="btn_menu" href="/delhi/smoky-chettinad-mayur-vihar-phase-1-11951/menu">
                      View Menu                   </a>
                    <!-- <a class="col-xs-12 visible-xs mobile view-menu" href="/delhi/smoky-chettinad-mayur-vihar-phase-1-11951/menu">
                      <span class="glyphicon glyphicon-chevron-right"></span>
                    </a> -->
                  </div>

                                      <div class="col-xs-12 padding-bottom-15-px padding-top-15-px restaurant-search-container padding-left-0-px-xs"   data-delivery="delivery"    data-foodtype="nonveg" data-rating="2.6" data-minamnt="150" style="border-top:1px solid #E9E9E9;">
                                            <div class="col-sm-2 col-md-2 col-xs-4 search-img max-width-110-px-xs">

                        <img class="lazy" data-src="//d305u1xvzud3tg.cloudfront.net/images/rest/thumbs/phd-logo-new.jpg" src="//d305u1xvzud3tg.cloudfront.net/images/rest/thumbs/je-restaurant-logo.jpg"  alt="Lazy Image" />
                        <!--  -->
                      </div>
                      <div class="col-sm-3 col-md-4 col-xs-8 search-description ">

                        <div class="col-sm-12 col-xs-12 search-header width-100-percent no-padding-xs">
                          <h1 class="ellipse-text no-padding margin-top-5-px no-margin font-size-1-7-rem"><!--  -->
                        <span>Pizza Hut Delivery</span><span class='restName-normal font-size-1-3-rem ellipse-text hidden-xs'>, Krishna Nagar</span></h1>
                        </div>
                        <div class="col-sm-12 hidden-xs search-address ellipse-text search-common-font font-size-1-3-rem" title="Shop No. D1, Achachi Building, Lal Quarter, Krishna Nagar, New Delhi">Shop No. D1, Achachi Building, Lal Quarter, Krishna Nagar, New Delhi</div>
                        <div class="col-sm-12 col-xs-12 cuisineInfo visible-xs no-padding-xs margin-left-1-percent-xs padding-top-2-percent-xs" >

                          Pizza                       </div>
                        <div class="col-sm-12 col-xs-12 menu-rating no-padding-xs">
                          <span class="review-holder" style="position:absolute; ">
                            <span class='starrating on'></span><span class='starrating on'></span><span class='starrating on'></span><span class='starrating off'></span><span class='starrating off'></span>                           (<span class="menu-reviws-value">4</span>)&nbsp&nbsp<span class="restName-normal font-size-1-3-rem position-absolute ellipse-text visible-xs">Krishna Nagar</span>
                          </span>
                        </div>
                      </div>
                      <div class="col-sm-2 col-md-2 col-xs-12 menu-data hidden-xs" style="padding:0 0px;">
                        <div class="col-sm-12 col-xs-12 cuisineInfo margin-left-1-percent-xs padding-top-2-percent-xs no-padding font-size-1-3-rem">
                          <span class="glyphicon glyphicon-cutlery font-size-1-5-rem"> </span>
                          Pizza                       </div>
                        <div class="col-sm-12 hidden-xs font-size-1-3-rem" style="padding: 0px;">
                          <span class="icon icon-delivery" style="font-size:17px;"></span>&nbsp;
                          FREE Delivery
                        </div>
                        <div class="col-sm-12 hidden-xs font-size-1-3-rem" style="padding: 0px;">
                                                      <span class="glyphicon font-size-1-5-rem">₹</span>&nbsp;
                            <span class="min-order-header">Min. order ₹ 150</span>
                                                  </div>
                      </div>
                      <div class="col-sm-2 hidden-sm menu-new-offer-pre font-size-1-3-rem no-padding">
                                                <div class="col-sm-12 newInfo hidden-xs no-padding">
                                                  </div>
                        <div class="col-sm-12 preorderInfo hidden-xs no-padding">
                                                  </div>
                      </div>
                      <!--  -->

                                        <a class="btn_menu" href="/delhi/pizza-hut-delivery-krishna-nagar-9287/menu">
                      View Menu                   </a>
                    <!-- <a class="col-xs-12 visible-xs mobile view-menu" href="/delhi/pizza-hut-delivery-krishna-nagar-9287/menu">
                      <span class="glyphicon glyphicon-chevron-right"></span>
                    </a> -->
                  </div>

                                  </div>
                                    <!-- opening later -->
                  <div class="MainClosed col-sm-12">
                    <div class="closedtoggle border-radius-4 font-size-1-4-rem width-100-percent padding-right-18-px padding-left-18-px padding-top-15-px padding-top-10-px padding-bottom-10-px margin-right-left-0-px margin-top-10-px margin-bottom-7-px" ><span style="float:left;">5 opening later</span> <span class="showhidetoggle" style="float:right">Hide closed restaurants</span></div>
                    <div class="MainClosedData">
                                            <div class="col-sm-12 restaurant-search-container padding-left-0-px-xs hidden-xs padding-bottom-15-px padding-top-15-px" data-url="delhi/aslii-zaika-nirman-vihar-11197/menu" style="border-top:1px solid #E9E9E9;">
                        <div class="col-sm-3 col-md-2 search-img">
                          <img class="lazy" data-src="//d305u1xvzud3tg.cloudfront.net/images/rest/thumbs/back-soon-thumbs.png" src="//d305u1xvzud3tg.cloudfront.net/images/rest/thumbs/je-restaurant-logo.jpg"  alt="Lazy Image" />
                        </div>

                        <div class="col-sm-3 col-md-4 search-description">
                          <div class="col-sm-12 search-header width-100-percent"><h1 class="ellipse-text no-padding font-size-1-7-rem no-margin">Aslii Zaika, Nirman Vihar</h1></div>
                          <div class="col-sm-12 search-address ellipse-text search-common-font font-size-1-3-rem">G-4, V3S Mall, Near Nirman Vihar Metro Station, Laxmi Nagar, New Delhi</div>
                        </div>
                      </div>
                                            <div class="col-sm-12 restaurant-search-container padding-left-0-px-xs hidden-xs padding-bottom-15-px padding-top-15-px" data-url="delhi/dana-chogas-kitchen-preet-vihar-12614/menu" style="border-top:1px solid #E9E9E9;">
                        <div class="col-sm-3 col-md-2 search-img">
                          <img class="lazy" data-src="//d305u1xvzud3tg.cloudfront.net/images/rest/thumbs/back-soon-thumbs.png" src="//d305u1xvzud3tg.cloudfront.net/images/rest/thumbs/je-restaurant-logo.jpg"  alt="Lazy Image" />
                        </div>

                        <div class="col-sm-3 col-md-4 search-description">
                          <div class="col-sm-12 search-header width-100-percent"><h1 class="ellipse-text no-padding font-size-1-7-rem no-margin">Dana Choga's Kitchen, Preet Vihar</h1></div>
                          <div class="col-sm-12 search-address ellipse-text search-common-font font-size-1-3-rem">Plot No 29, Ground Floor, Community Center, Preet Vihar, New Delhi</div>
                        </div>
                      </div>
                                            <div class="col-sm-12 restaurant-search-container padding-left-0-px-xs hidden-xs padding-bottom-15-px padding-top-15-px" data-url="delhi/khana-badosh-lakshmi-nagar-7387/menu" style="border-top:1px solid #E9E9E9;">
                        <div class="col-sm-3 col-md-2 search-img">
                          <img class="lazy" data-src="//d305u1xvzud3tg.cloudfront.net/images/rest/thumbs/back-soon-thumbs.png" src="//d305u1xvzud3tg.cloudfront.net/images/rest/thumbs/je-restaurant-logo.jpg"  alt="Lazy Image" />
                        </div>

                        <div class="col-sm-3 col-md-4 search-description">
                          <div class="col-sm-12 search-header width-100-percent"><h1 class="ellipse-text no-padding font-size-1-7-rem no-margin">Khana Badosh, Lakshmi Nagar</h1></div>
                          <div class="col-sm-12 search-address ellipse-text search-common-font font-size-1-3-rem">R-21, Shakarpur Main Market, Vikash Marg, Near Metro Pillar-49, Delhi</div>
                        </div>
                      </div>
                                            <div class="col-sm-12 restaurant-search-container padding-left-0-px-xs hidden-xs padding-bottom-15-px padding-top-15-px" data-url="delhi/august-spice-krishna-nagar-10526/menu" style="border-top:1px solid #E9E9E9;">
                        <div class="col-sm-3 col-md-2 search-img">
                          <img class="lazy" data-src="//d305u1xvzud3tg.cloudfront.net/images/rest/thumbs/back-soon-thumbs.png" src="//d305u1xvzud3tg.cloudfront.net/images/rest/thumbs/je-restaurant-logo.jpg"  alt="Lazy Image" />
                        </div>

                        <div class="col-sm-3 col-md-4 search-description">
                          <div class="col-sm-12 search-header width-100-percent"><h1 class="ellipse-text no-padding font-size-1-7-rem no-margin">August Spice, Krishna Nagar</h1></div>
                          <div class="col-sm-12 search-address ellipse-text search-common-font font-size-1-3-rem">A 4/17, Krishna Nagar Main Market, Near Lal Quarters Marekt, Shahadara, New Delhi</div>
                        </div>
                      </div>
                                            <div class="col-sm-12 restaurant-search-container padding-left-0-px-xs hidden-xs padding-bottom-15-px padding-top-15-px" data-url="delhi/box-my-cake-karkarduma-12099/menu" style="border-top:1px solid #E9E9E9;">
                        <div class="col-sm-3 col-md-2 search-img">
                          <img class="lazy" data-src="//d305u1xvzud3tg.cloudfront.net/images/rest/thumbs/back-soon-thumbs.png" src="//d305u1xvzud3tg.cloudfront.net/images/rest/thumbs/je-restaurant-logo.jpg"  alt="Lazy Image" />
                        </div>

                        <div class="col-sm-3 col-md-4 search-description">
                          <div class="col-sm-12 search-header width-100-percent"><h1 class="ellipse-text no-padding font-size-1-7-rem no-margin">The Cake Masters, Karkarduma</h1></div>
                          <div class="col-sm-12 search-address ellipse-text search-common-font font-size-1-3-rem">No.10, Community Center, Opp Karkardooma Metro Staion, New Delhi</div>
                        </div>
                      </div>
                                          </div>
                  </div>
                  <!-- opening later closed -->
                                </div>

          </div>
        </div>
      </div>

      
    </div>
</div>



</div>

</body>
</html>