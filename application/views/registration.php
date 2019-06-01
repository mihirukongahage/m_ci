<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>
</head>
<body>
       

<!--Enter Users-->
<div id="container">
    <form method="post">
        <table style="width:50%" border="2">
        <tr>
            <td>Enter Your Name</td>
            <td>    
                <input type="text" name="name">
            </td> 
        </tr>
        <tr>
            <td>Enter Your Email</td>
            <td>    
                <input type="text" name="email">
            </td>  
        </tr>
        <tr>
            <td>Enter Your Mobile</td>
            <td>    
                <input type="text" name="mobile">
            </td>  
        </tr>
        <tr>
            <td colspan="2">
                <center>
                <input type="submit" value="Submit" name="save">
                </center>
            </td>
        </tr>
        </table>
    </form>
</div>

</body>
</html>