<?php
 session_start();
?>
            
            
            <?php
			
			if (isset($_SESSION['emsil'])) 
      echo   $loggenOnUser = $_SESSION['email'];
        // echo //"Found User: ", $loggenOnUser, "<br />"
     
			?>
			
            
            
            <?php include('header.php'); ?>

<section id="home">
    		<div class="container">
    			<div class="row">
    				<div class="col-md-offset-2 col-md-8" align="center">
                    
<style>
body {
    background: url(images/home-bg.jpg) no-repeat center center fixed; 
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
}
</style>
    				   <div class="element" align="center" style="color:red;">                          
                        </div>
<div align="center">
    <meta name="description" content="">
<br>

    <meta name="author" content="">


    
   <div id="search">
       <br>
<br>
<br>
<br>
<br>


<br>
<br>

<br>
<br>
<br>
   <form action="search_reuselt.php" method="post">
   
  <!-- <form action="<?php //$_SERVER['PHP_SELEF']; ?>" method="post">-->
<input type="search" autocomplete="search" name="search">
    <select id="select1">
        <option value="1">test1</option>
        <option value="2" selected="selected">test2</option>
        <option value="3">test3</option>
    </select>
  <input type="submit" name="submit" value="search"> 
 
   <!-- <input type="submit" name="submit" onClick="GetSelectedItem('select1');">search -->
    
    </form>
    </div>
    </div></div></div></div>
    

    <link rel="stylesheet" href="jquery-typeahead-2.0.0/src/jquery.typeahead.css"> 

 <script src="http://code.jquery.com/jquery-2.1.0.min.js"></script>
    <!--script src="../dist/jquery.typeahead.min.js"></script-->
 <script src="jquery-typeahead-2.0.0/src/jquery.typeahead.js"></script>
 <script>
	
	
function GetSelectedItem(el)
{
   /* var e = document.getElementById(el);
    var strSel = "The Value is: " + e.options[e.selectedIndex].value + " and text is: " + e.options[e.selectedIndex].text;
   // alert(strSel);*/
}
   </script>

<body>




<!--<a class="btn btn-default wow fadeInUp" data-wow-offset="50" data-wow-delay="0.6s">RANCHI</a>
<h1 style="color:#FFF;">restorent in ranchi area search</h1>

<a  class="btn btn-default wow fadeInUp" data-wow-offset="50" data-wow-delay="0.6s">HOME</a>
<a class="btn btn-default wow fadeInUp" data-wow-offset="50" data-wow-delay="0.6s">SEARCH</a>-->
</div>
    				</div>
    			</div>
    		</div>
            
            </body>
    	</section>

<body>
</body>
</html>