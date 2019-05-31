<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>
</head>
<body>


<!--View Users-->
<div id="container">
    <table style="width:50%" border="2">
    <tr>
        <th>Sr No</th>
        <th>Name</th> 
        <th>Email</th>
        <th>Mobile</th>
    </tr>
    <?php
    foreach($userArray as $value){
    echo "<tr>
        <td>$value[id]</td>
        <td>$value[name]</td>
        <td>$value[email]</td>
        <td>$value[mobile]</td>
    </tr>";
    }
    ?>
    </table>
</div>
<br><br>

        
    

<!--Enter Users-->
<div id="container">
    <table style="width:50%" border="2">
    <tr>
        <td>Enter Your Name</td>
        <td>    
            <input type="text">
        </td> 
    </tr>
    <tr>
        <td>Enter Your Email</td>
        <td>    
            <input type="text">
        </td>  
    </tr>
    <tr>
        <td>Enter Your Mobile</td>
        <td>    
            <input type="text">
        </td>  
    </tr>
    <tr>
        <td colspan="2">
            <center>
            <input type="submit" value="Submit">
            </center>
        </td>
    </tr>
    </table>
</div>

</body>
</html>