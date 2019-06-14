<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>login</title>
  </head>
  <body>

    <div class="row mt-5">
    <div class="col col-sm-12 col-md-6 col-lg-4 offset-md-3 offset-lg-4">
        <div class="card login-card" style="width: 25rem"">
        <div class="card-body">
            <h3 class="card-title">SignUp</h3>
            <h6 class="card-subtitle mb-2 text-muted">Enter your details</h6>
        </div>
        <div class="card-body">

            <!--Form-->
            <form method="post" action="<?php echo base_url(); ?>index.php/main/signup_validate">
            <div class="form-group">
                <label for="Firstname">Firstname</label>
                <input type="text" name="firstname" class="form-control" id="firstname" placeholder="Enter Firstname">
                <!-- <span class="text-danger"><?php echo form_error('username'); ?></span> -->
            </div>
            <div class="form-group">
                <label for="Lastname">Lastname</label>
                <input type="text" name="lastname" class="form-control" id="lastname" placeholder="Enter Lastname">
                <!-- <span class="text-danger"><?php echo form_error('lastname'); ?></span> -->
            </div>
            <div class="form-group">
                <label for="Username">Username</label>
                <input type="text" name="username" class="form-control" id="username" placeholder="Enter username">
                <!-- <span class="text-danger"><?php echo form_error('username'); ?></span> -->
            </div>
            <div class="form-group">
                <label for="Email">Email</label>
                <input type="email" name="email" class="form-control" id="email" placeholder="Enter Email">
                <!-- <span class="text-danger"><?php echo form_error('email'); ?></span> -->
            </div>
            <div class="form-group">
                <label for="Password">Password</label>
                <input type="password" name="password" class="form-control" id="password" placeholder="Enter Password">
                <!-- <span class="text-danger"><?php echo form_error('lastname'); ?></span> -->
            </div>
            <div class="form-group">
                <label for="CPassword">Confirm Password</label>
                <input type="password" name="cpassword" class="form-control" id="cpassword" placeholder="Confirm Password">
                <!-- <span class="text-danger"><?php echo form_error('cpassword'); ?></span> -->
            </div>
            <div class="text-center">
            <button type="submit" name="insert" class="btn btn-primary" name="save">SignUp</button>
            <?php
                echo $this->session->flashdata("error"); 
             ?>
            </form>
            </div>
            <!--/Form-->
        </div>
        <div class="card-body">
            <div class="text-center">
                <a class="card-link" href="<?=base_url('')?>">I have an account</a>
            </div>
        </div>
        </div>
    </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>