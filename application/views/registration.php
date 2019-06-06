

<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    </head>
<body>
    
<div class="container">
    <div class="d-flex justify-content-center mt-5">
        <div class="card" style="width: 32rem;">
        <div class="text-center">
            <div class="card-body">
                <h5 class="card-title">Create Account</h5>
                <form method="post">
                <div class="input-group mb-3 mr-sm-2">
                    <div class="input-group-prepend">
                    <div class="input-group-text"><i class="fas fa-user"></i></span></div>
                    </div>
                    <input type="text" class="form-control" name="name" placeholder="Full Name">
                </div>

                <div class="input-group mb-3 mr-sm-2">
                    <div class="input-group-prepend">
                    <div class="input-group-text"><i class="fas fa-envelope"></i></div>
                    </div>
                    <input type="email" class="form-control" name="email" placeholder="Email Address">
                </div>

                <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <div class="input-group-text"><i class="fas fa-phone"></i></div>
                    </div>
                        <select class="custom-select">
                            <option selected>+9411</option>
                            <option value="1">+9477</option>
                            <option value="2">+9471</option>
                            <option value="3">+9475</option>
                        </select>
                        <input type="text" class="form-control" aria-label="Text input with segmented dropdown button" placeholder="Phone Number" id="mobile">
                    <div class="input-group-append">  
                    </div>
                </div>

                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <label class="input-group-text" id="job"><i class="fas fa-building"></i></label>
                    </div>
                    <select class="custom-select" name="job">
                        <option selected>Select job type</option>
                        <option value="1">Seller</option>
                        <option value="2">Student</option>
                    </select>
                </div>

                <div class="input-group mb-3 mr-sm-2">
                    <div class="input-group-prepend">
                    <div class="input-group-text"><i class="fas fa-lock"></i></div>
                    </div>
                    <input type="password" class="form-control" name="password" placeholder="Create Password">
                </div>

                <div class="input-group mb-3 mr-sm-2">
                    <div class="input-group-prepend">
                    <div class="input-group-text"><i class="fas fa-lock"></i></div>
                    </div>
                    <input type="password" class="form-control" name="cpassword" placeholder="Repeat Password">
                </div>

                <button class="btn btn-primary btn-block" type="submit" name="save" >Create Account</button>
                
                <div class="mt-3">
                    <p>Have an account?<a href="#">Log In</a></p>
                </div>
                </form>
            </div>
            </div>
        </div>
    </div>
</div>


</body>
</html>