<?php  
require('../include/config.php');
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>IN ADMIN PANEL | Powered by INDEZINER</title>
<link rel="stylesheet" type="text/css" href="style.css" />
<script type="text/javascript" src="jquery.min.js"></script>
<script type="text/javascript" src="ddaccordion.js"></script>
<script type="text/javascript">
ddaccordion.init({
	headerclass: "submenuheader", //Shared CSS class name of headers group
	contentclass: "submenu", //Shared CSS class name of contents group
	revealtype: "click", //Reveal content when user clicks or onmouseover the header? Valid value: "click", "clickgo", or "mouseover"
	mouseoverdelay: 200, //if revealtype="mouseover", set delay in milliseconds before header expands onMouseover
	collapseprev: true, //Collapse previous content (so only one open at any time)? true/false 
	defaultexpanded: [], //index of content(s) open by default [index1, index2, etc] [] denotes no content
	onemustopen: false, //Specify whether at least one header should be open always (so never all headers closed)
	animatedefault: false, //Should contents open by default be animated into view?
	persiststate: true, //persist state of opened contents within browser session?
	toggleclass: ["", ""], //Two CSS classes to be applied to the header when it's collapsed and expanded, respectively ["class1", "class2"]
	togglehtml: ["suffix", "<img src='images/plus.gif' class='statusicon' />", "<img src='images/minus.gif' class='statusicon' />"], //Additional HTML added to the header when it's collapsed and expanded, respectively  ["position", "html1", "html2"] (see docs)
	animatespeed: "fast", //speed of animation: integer in milliseconds (ie: 200), or keywords "fast", "normal", or "slow"
	oninit:function(headers, expandedindices){ //custom code to run when headers have initalized
		//do nothing
	},
	onopenclose:function(header, index, state, isuseractivated){ //custom code to run whenever a header is opened or closed
		//do nothing
	}
})
</script>
<script src="jquery.jclock-1.2.0.js.txt" type="text/javascript"></script>
<script type="text/javascript" src="jconfirmaction.jquery.js"></script>
<script type="text/javascript">
	
	$(document).ready(function() {
		$('.ask').jConfirmAction();
	});
	
</script>
<script type="text/javascript">
$(function($) {
    $('.jclock').jclock();
});
</script>
<script language="javascript" type="text/javascript" src="niceforms.js"></script>
<link rel="stylesheet" type="text/css" media="all" href="niceforms-default.css" />
</head>
<body>
<div id="main_container">
<?php
	
	 require('lib/header.php'); ?>
<div class="main_content">
<div class="center_content">
<br />
<?php
	require('lib/left-content.php');
	?>
<br />
<br />
<div class="right_content">
  <?php 
		
echo  $description = ( isset($_REQUEST['description']) ) ?  $_REQUEST['description']:'';
echo $id = ( isset($_REQUEST['editid']) ) ? $_REQUEST['editid'] : "";
 //$select_image = ( isset($_REQUEST['select_image']) ) ? trim($_REQUEST['select_image']) : "";
 
 $im=$_FILES['image'];
 $rnd = rand(1,1000);
 $path = "../galleary/";
 $im_name = $rnd."_".$im['name'];
 $fullpath =$path. $im_name;

if($im['error']==0)
{
  if($im['type'] == "image/jpeg" or $im['type'] == "image/gif" or $im['type'] == "image/png")
	{
  copy($im['tmp_name'],$fullpath);
 
	}
	}

if(isset($_REQUEST['submit']))
           {
echo   $sql="UPDATE `galleary` SET
            `image`='$fullpath',
            `details`='$description'
             WHERE `id`='$id'";
$query=mysqli_query($conDB,$sql) or die (mysqli_error()); 
echo "<script> alert('form is updeted')</script>";
}	  
//header('location:gallery-show.php');


?>


         <?php 
         $id=$_REQUEST['edit'];
  
          $query="select * from `galleary` WHERE `id`='$id';";
          $res=mysql_query($query) or die (mysql_error());
          $row=mysql_fetch_array($res);
             $id=$row['id'];    
	    	$detial=$row['details'];
	        $gallery_value=$row['gallery_value'];
	        $image=$row['image'];
			
			
  
  
    ?>
  <table width="687" id="rounded-corner" summary="2007 Major IT Companies' Profit">
  
   
      <form action="<?php echo $_SERVER['PHP_SELF']; ?>" name="myForm" method="post" enctype="multipart/form-data">
              <input type="hidden" name="editid" value="<?php echo $id; ?>" />
              <input type="hidden" name="select" value="<?php  ?>" />
    <tr>
      <td align="center"> UPDATE CONTENT </td>
      <td></td>
    </tr>
    <!--<tr>
      <td>All images insert  :</td>
      <td><input type="radio" name="select_image" id="select" value="all" /></td>
    </tr>
    <tr>
      <td>Web desing images insert  :</td>
      <td><input type="radio" name="select_image" id="select" value="web" /></td>
    </tr>
    <tr>
      <td>Photogrphy image insert  :</td>
      <td><input type="radio" name="select_image" id="select" value="photogrphy" /></td>
    </tr>
    <tr>
      <td>print image insert  :</td>
      <td><input type="radio" name="select_image" id="select" value="print" /></td>
    </tr>
      </tr>-->
    
    <td><textarea cols="60" rows="6" name="description" /><?php echo  $gallery_value; ?>
      </textarea></td>
      </td>
    <td></td>
      </tr>
    
    <tr>
    <tr>
      <td><input type="file" name="image" value="submit" /></td>
      <td></td>
      </tr>
    <td><input type="submit" name="submit" value="submit"/></td>
    <td></td>
      </tr>
    
  </table>
  
  
  <?php 
   //}
  ?>
  
  
  <div class=""> <span class="disabled"> </span> </div>
</div>
<!-- end of right content-->
</div>
<!--end of center content -->

<div class="clear"></div>
</div>
<!--end of main content-->
<?php
	require('lib/footer.php');
	?>
</div>
</body>
</html>