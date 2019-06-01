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
       

<!--Enter Users-->
<div class="container-fluid mt-2">
    <form method="post">
        <table style="width:50%" border="1">
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