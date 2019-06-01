<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
<body>
<?php echo form_open('form'); ?>
<?php echo validation_errors(); ?>
<div class="container-fluid">
    <h2>HTML Forms</h2>
    <form action="">
        User name:<br>
        <input type="text" name="username" value="">
        <br>
        Password:<br>
        <input type="text" name="password" value="">
        <br><br>
        <input class="btn btn-primary" type="submit" value="Submit">
    </form> 
</div>

</body>
</html>
