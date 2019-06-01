<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html>
<head>
<title>Registration form</title>
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
</head>
 
<body>
 <?php
  $i=1;
  foreach($data as $row)
  {
  ?>
 <form method="post">
 <table border="1">
    <tr>
        <td> Name </td>
        <td><input type="text" name="name" value="<?php echo $row->name; ?>"/></td>
    </tr>
    <tr>
        <td>Email </td>
        <td><input type="text" name="email" value="<?php echo $row->email; ?>"/></td>
    </tr>
    <tr>
        <td>Mobile </td>
        <td><input type="text" name="mobile" value="<?php echo $row->mobile; ?>"/></td>
    </tr>
    <tr>
        <td colspan="2" align="center">
    <input class="btn btn-primary" type="submit" name="update" value="Update"/></td>
    </tr>
</table>
 </form>
 <?php } ?>
</body>
</html>