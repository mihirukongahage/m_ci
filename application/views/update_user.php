<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html>
<head>
<title>Registration form</title>
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
    <input type="submit" name="update" value="Update"/></td>
    </tr>
</table>
 </form>
 <?php } ?>
</body>
</html>