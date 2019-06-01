<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
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
        <th>Update</th>
    </tr>
    <?php
    foreach($userArray as $value){
    echo "<tr>
        <td>$value[id]</td>
        <td>$value[name]</td>
        <td>$value[email]</td>
        <td>$value[mobile]</td>
        <td><a href='deleteData?id=$value[id]'>Delete</a></td>
        <td><a href='updateData?id=$value[id]'>Update</a></td>
    </tr>";
    }
    ?>
    </table>
</div>
<br><br>


</body>
</html>