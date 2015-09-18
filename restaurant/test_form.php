<?php  
// require('../include/config.php');
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

<!--hide show-->
<!--<script type="text/javascript">
    $(function () {
        $("#ddlPassport").change(function () {
            if ($(this).val() == "Y") {
                $("#dvPassport").show();
            } else {
                $("#dvPassport").hide();
            }
        });
    });
</script>-->
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
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
  if(isset($_REQUEST['submit']))
    {
  $name = ( isset($_REQUEST['name']) ) ?  $_REQUEST['name']:'';
  $locality = ( isset($_REQUEST['area']) ) ? trim($_REQUEST['area']) : "";
  $contact_1 = ( isset($_REQUEST['contact_1']) ) ? trim($_REQUEST['contact_1']) : "";
  $contact_2 = ( isset($_REQUEST['contact_2']) ) ? trim($_REQUEST['contact_2']) : "";
   $email = ( isset($_REQUEST['email']) ) ? trim($_REQUEST['email']) : "";
  $deliver = ( isset($_REQUEST['deliver']) ) ? trim($_REQUEST['deliver']) : "";
// echo  $min_order = ( isset($_REQUEST['min_order']) ) ? $_REQUEST['min_order'] : "";
   $min_order = $_REQUEST['minimum_order'];
   $delivery_radius = ( isset($_REQUEST['delivery_radius']) ) ? trim($_REQUEST['delivery_radius']) : "";
       
     if($name !== '' && $email !== NULL)
     {
     
  $query="INSERT INTO `restaurant`
              (`name`,`locality`,`contact_1`,`contact_2`,`email_id`,`deliver`,`min_order`,`delivery_radius`) 
    VALUES ('$name','$locality','$contact_1','$contact_2','$email','$deliver','$min_order','$delivery_radius')";
 
      $result=mysql_query($query) or die (mysql_error());
     }
 if($result)
 {
   echo "<script>alert('Form has been submited'); </script>";
 }
 
    }

?>
<table width="687" id="rounded-corner" summary="2015 KhanaMan">
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" name="myForm" method="post">
  
  <tr>
    <td align="center"><h2 span style="color:white;"> <u>Please Fill The Restaurant Details</u></h2></td>
    <td></td>
  </tr>
  <!--<tr>
      <td>All images insert  :</td>
      <td><input type="radio" name="select_image" id="select" value="all" /></td>
    </tr>-->
  <tr>
    <td>Restaurant Name
      <input type="text" name="name" required="required" id="select" value="" /></td>
    <td></td>
  </tr>

<td>Restaurant type   &nbsp;&nbsp;
    <select>
      <option value="0">Select Type</option>
      <option value="N">Fine- Dining</option>
      <option value="outlet">Food Outlet / Cafeteria</option>
      <option value="van">Food Van</option>
      <option value="B">Bakery</option>
    </select>
</td>
<td></td>

</tr>


<tr>

<td><p>Address</p>
    <textarea name="address"cols="30" rows="4"></textarea>
</td>
<td></td>






<!--<textarea name="address"cols="30" rows="4"></textarea>-->

</tr>


  <tr>
    <td>Locality  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <?php
$query = "SELECT `locality` from `local_area` ORDER BY `locality`";
$result = mysqli_query($conDB,$query);
echo "<select name='area'>";
echo "<option value='-1'>Select Area</option>";
while($row = mysqli_fetch_array($result)) {
    echo "<option value='".$row['locality']."'>".$row['locality']."</option>";
}
echo "</select>";
?>
      </p></td>
    <td></td>
  </tr>
  <tr>
    <td>Contact Details +91
      <input type="text" name="contact_1" required value="" /></td>
    <td></td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; +91
      <input type="text" name="contact_2"  value="" /></td>
    <td></td>
  </tr>
  <td>Email Id   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="email" value="" name="email" required name="EMail" /></td>
    </td>
  
  <td></td>
    </tr>
  
   <tr>
  <td>Delivery &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <select name="deliver" id="Deliver" onchange="Show()">
      <option value="0">Delivery Status</option>
      <option value="N">No</option>
      <option value="Y">Yes</option>
    </select>
    <br />
    <div id="dvPassport" style="display: none"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="text" id="txtPassportNumber" name="delivery_charges"   placeholder="Charges IN Rs" required pattern="/^[-]?[0-9]*(,?[0-9]+\.?)?[0-9]+$/"/>
      <input type="number" id="txtPassportNumber" name="delivery_order" min="1" max="100" placeholder="Order Per Day" style="
    min-width: 147px;">
      <input type="number" id="txtPassportNumber" name="minimum_order" placeholder="Minimum Order" style="
    margin-left: 96px;
    margin-top: 10px;">
      
      <input type="number" id="txtPassportNumber" name="delivery_radius"   placeholder="Delivery Radius" />KM
    </div>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
    </div>
  
  <td></td>
    </tr>
  
  <tr>
    <td>Average Order Amount
       <input type="radio" name="rs1" value="less_a" checked>Less Than Rs 200
       <input type="radio" name="rs1" value="less_b">Rs. 200 – 500
<input type="radio" name="rs1" value="less_c">Rs.  500 - 700
<input type="radio" name="rs1" value="less_d">More Than Rs700


                 </td>
    <td></td>
  </tr>












<tr>
    <td>Enter Your Website&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="url" name="website" required pattern="https?://.+">

                 </td>
    <td></td>
  </tr>





<!-- <tr>
    <td>Register on Just Dial &nbsp;&nbsp;&nbsp;&nbsp;
      <select name="deliver" id="Deliver" onchange="ShowHideDiv()">
      <option value="0">Select</option>
      <option value="N">No</option>
      <option value="Y">Yes</option>
    </select>



<br />
    <div id="dvPassport_second" style="display: none"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="text" id="txtPassportNumber" name="delivery_charges"   placeholder="Charges IN Rs" />
      <input type="number" id="txtPassportNumber" name="delivery_order" min="1" max="100" placeholder="Order Per Day" style="
    min-width: 147px;">
      <input type="text" id="txtPassportNumber" name="minimum_order" placeholder="Minimum Order" style="
    margin-left: 96px;
    margin-top: 10px;">
      
      <input type="text" id="txtPassportNumber" name="delivery_radius"   placeholder="Delivery Radius" />
    </div>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
    </div>
 </td> 
    <td></td>
  </tr>-->

<tr>
  <td>Register On JustDial &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <select name="deliver" id="Deliver_second" onchange="ShowHideDiv()">
      <option value="0"> Slelect</option>
      <option value="N">No</option>
      <option value="w">Yes</option>
    </select>
    <br />
    <div id="dvPassport_two" style="display: none"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="radio" id="txtPassportNumber_second" name="delivery_charges1"checked /> 0 to 10 
      <input type="radio" id="txtPassportNumber_second" name="delivery_charges2" /> 10 to 25 
      <input type="radio" id="txtPassportNumber_second" name="delivery_charges3" /> More Than 25 
      
    </div>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
    </div>
  
  <td></td>
    </tr>




<tr>
    <td> Date Of Survey ( YYYY-MM-DD ) &nbsp;&nbsp;&nbsp;&nbsp;

       <!-- <input type="text" name="date" required pattern="(?:19|20)[0-9]{2}-(?:(?:0[1-9]|1[0-2])-(?:0[1-9]|1[0-9]|2[0-9])|(?:(?!02)(?:0[1-9]|1[0-2])-(?:30))|(?:(?:0[13578]|1[02])-31))"> -->
      <input type="date" value="yyyy-mm-dd" class="input-medium search-query" onkeypress="return false">
                 </td>


<!-- <input id="startdate" name="startdate" min="2013-01-01" max="2050-01-01" type="date">
 -->


    <td></td>
  </tr>












  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      &nbsp;&nbsp;&nbsp;
      <input type="submit" name="submit" value="submit" onclick="return validate();"/></td>
    <td></td>
  </tr>
</table>
</td>
</td>
</form>
<script type="text/javascript">
        function Show() {
            var Deliver = document.getElementById("Deliver");
            var dvPassport = document.getElementById("dvPassport");
            dvPassport.style.display = Deliver.value == "Y" ? "block" : "none";
        }
    </script> 


<script type="text/javascript">
        function ShowHideDiv() {
            var Deliver = document.getElementById("Deliver_second");
            var dvPassport = document.getElementById("dvPassport_two");
            dvPassport_two.style.display = Deliver_second.value == "w" ? "block" : "none";
        }
    </script> 




<!--delever--> 
<script>
   /*function delever()
      {
      
         if( document.myForm.name.value == "" )
         {
            alert( "Please provide your name!" );
            document.myForm.name.focus() ;
            return false;
         }
    
     if( document.myForm.name.value == "" )
         {
            alert( "Please provide your name!" );
            document.myForm.name.focus() ;
            return false;
         }
        
         return( true );
      }*/
      </script> 
<script type="text/javascript">
  
   <!--
      // Form validation code will come here.
      function validate()
      {
      
         if( document.myForm.name.value == "" )
         {
            alert( "Please provide your name!" );
            document.myForm.name.focus() ;
            return false;
         }
     
     
      if( document.myForm.area.value == "-1" )
         {
            alert( "Please select your locality!" );
       document.myForm.area.focus() ;
            return false;
         }
     
     
     if( document.myForm.contact_1.value == "" ||
         isNaN( document.myForm.contact_1.value ) ||
         document.myForm.contact_1.value.length != 10 )
         {
            alert( "Please provide  contact number like 94311..." );
            document.myForm.contact_1.focus() ;
            return false;
         }
     
      if( document.myForm.contact_2.value == "")
      { }
      else
      {
      if(isNaN( document.myForm.number2.value ) ||document.myForm.number2.value.length != 10 )
       {
        alert( "Please provide a correct 2nd contact number like 94311..." );
        document.myForm.number2.focus();
        return false;
       }
      }
     
         
         if( document.myForm.EMail.value == "" )
         {
            alert( "Please provide an Email Id--!" );
            document.myForm.EMail.focus() ;
            return false;
         }
         
         
         
    if( document.myForm.deliver.value == "-2" )
         {
            alert( "Please select your deliver option!" );
       document.myForm.deliver.focus() ;
            return false;
         }
     
        
    if( document.myForm.EMail.value == "" )
         {
            alert( "Please provide an Email Id--!" );
            document.myForm.EMail.focus() ;
            return false;
         }
    
    // }
  return (true);
      }
   //-->

    </script>
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
