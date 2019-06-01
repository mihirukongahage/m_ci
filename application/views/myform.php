<!DOCTYPE html>
<html>
<body>

<?php echo validation_errors(); ?>
<?php echo form_open('form'); ?>
<h2>HTML Forms</h2>

<form action="">
    User name:<br>
    <input type="text" name="username" value="">
    <br>
    Password:<br>
    <input type="text" name="password" value="">
    <br>
    <input type="submit" value="Submit">
</form> 


</body>
</html>
