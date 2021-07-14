<!DOCTYPE html>
<html>
<head>
<title>form</title>
</head>

<body background="pic.jpg">
<hr align ="left" size ="2" width ="1200">
<center><header><h1>HARINESWARI CAFE</h1></header></center>

<hr allign="left" size="2" width="2" width="1200">
<form action="register_process.php" method="POST" name="product">

<fieldset id="personal">
<legend>Personal Info</legend>
<table  width="100%">

<tr>
 <td width="100">
          First Name
    
 </td>
 <td>
     <input type = "text" name = "fname" id = "fname">
     Last Name
    <input type = "text" name = "lname" id = "lname" >
 </td>
</tr>

<tr>
 <td>
       Address 1
 </td>
 <td>
    <input type = "text" name = "address" id = "address">
 </td>
</tr>

<tr>
 <td>
    Address 2
 </td>
 <td>
    <input type = "text" name = "address" id = "address">
 </td>
</tr>

<tr>
 <td>
    City
 </td>
 <td>
    <input type = "text" name = "city" id= "city">
    State
    <input type = "text" name = "state" id = "state">
    Zip
    <input type = "text" name = "zip" id = "zip">    
 </td>
</tr>

<tr>
 <td>  
    Phone Number
 </td>
 <td>
    <input type = "text" name = "zip" id = "zip">
 </td>
</tr>
</table>
</fieldset>
<hr allign="left" size="2" width="1200">

<fieldset id="Purchased">
<legend>Reservation Details</legend>
<table width="100%">
<tr>

 <td width="100" valign="top" rowspan="2">
 <label for="item">Table</label>
 </td>
 <td width="150" valign="top" rowspan="2">
     <select name="table" id="item">
             <option name="table" value="1">1</option>
             <option name="table" value="2">2</option>
             <option name="table" value="3">3</option>
             <option name="table" value="4">4</option>
             <option name="table" value="5">5</option>
             <option name="table" value="6">6</option>
             <option name="table" value="7">7</option>
             <option name="table" value="8">8</option>
      </select>
 </td> 
 </td> 
 <td width="150">
        Date    
 </td>
 <td>   
      <input type="date" name="pd" id="pd">
 </td>
</tr> 

<tr>
 <td width="150">
       Serial Number
 </td>
 <td>
       <input type="text" name="sn" id="pd">
 </td>
</tr>
</table>  
</fieldset> 
<hr allign="left" size="2" width="1200">

<table width="100%">         
<tr>
 <td>
 <fieldset id="radio">
 <legend>Used For (check one)</legend>

         <input type="radio" name="usage" id="dlvry" value="dlvry">
         <label for="dlvry">Delivery</label><br>
         
         <input type="radio" name="usage" id="wlkin" value="wlkin">
         <label for="wlkin">Walk in</label><br>
 
         <input type="radio" name="usage" id="taw" value="taw">
         <label for="taw">Take away</label><br> 

         <input type="radio" name="usage" id="op" value="op">
         <label for="op">Online payment</label><br>

</fieldset>
</td>
<td>
<fieldset id="button">
<legend>Online Operating System (Check all that apply)</legend>

          <input type="checkbox" name="sw" id="sw" value="sw">
	  <a href="http://www.subway.com/en-us">Subway</a><br>

          <input type="checkbox" name="mcd" id="mcd" value="mcd"> 
          <label for="mcd"><a href="https://www.google.com/aclk?sa=L&ai=DChcSEwjIt_Xz697ZAhXGHCsKHTpnA_EYABAAGgJzZg&sig=AOD64_27ytyniL10m39UPnUIx5aCackX4Q&q=&ved=0ahUKEwi6_fDz697ZAhUYTo8KHTAwBjEQ0QwIJA&adurl=">McDonald</a></label><br>

          <input type="checkbox" name="pzht" id="pzht" value="pzht">
	  <label for="pzht"><a href="https://www.googleadservices.com/pagead/aclk?sa=L&ai=DChcSEwjV0orX7N7ZAhXLHCsKHTCWAdkYABAAGgJzZg&ohost=www.google.com&cid=CAASE-RoA7_XurwXRSD_mUkrwrLqO10&sig=AOD64_3W7cBORCjjUaP1pHQfy61_HxRoDA&q=&ved=0ahUKEwjG5oXX7N7ZAhWFuI8KHdcGBVgQ0QwIJA&adurl=">Pizza Hut</a></label><br>

          <input type="checkbox" name="bk" id="bk" value="bk">
	  <label for="bk">Burger King</label><br>
</fieldset>
</tr>
</table>
<hr>

<table align="left">     
<tr>
      <td width="80" valign="top">
		<label for="comments">Comments:</label>
      </td>
      <td valign="top">
           <textarea name="comments" id="comments" rows=10" cols="70" 				wrap="soft">any comments</textarea>
</td>
</tr>
</table>
<hr align="left" size="2" width="1200">

<table align="center">
<tr>
      <td>
      <input type="submit" name="send" value="Send Registration">
      <input type="reset" name="cancel" value="Cancel">
      </td>


<p>Adam Enterprise &copy </p>

</tr>
</table>
</form>
</body>
</html>