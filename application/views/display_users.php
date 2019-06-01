<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>
</head>
<body>

<div id="container">
    <table style="width:50%" border="2">
    <tr>
        <th>Sr No</th>
        <th>Name</th> 
        <th>Email</th>
        <th>Mobile</th>
        <th>Delete</th>
    </tr>
    <?php
    foreach($userArray as $value){
    echo "<tr>
        <td>$value[id]</td>
        <td>$value[name]</td>
        <td>$value[email]</td>
        <td>$value[mobile]</td>
        <td><a href='deleteData?id=$value[id]'>Delete</a></td>
    </tr>";
    }
    ?>
    </table>
</div>
<br><br>


</body>
</html>