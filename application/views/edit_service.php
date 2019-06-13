<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  </head>
  <body>
    
    <div class="container">
      <h1>Edit Service</h1>
        <div class="offset-2">
            <div class="card" style="width: 42rem;">
            <div class="card-body">
                <div class="form-group">
                    <label for="name">Service Name</label>
                    <input type="text" class="form-control" id="name" value="<?php echo $services->name; ?>">
                </div>
                <div class="form-group">
                    <label for="name">Price</label>
                    <input type="number" class="form-control" id="name" value="<?php echo $services->price; ?>">
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea class="form-control" id="description" rows="3" placeholder="<?php echo $services->description; ?>"></textarea>
                </div>
                <a class="btn btn-secondary" href="<?=base_url('index.php/main/enter')?>" id="<?php echo $services->id; ?>">Back</a>
                <a class="btn btn-primary" href="remove_service/?id=<?php echo $services->id; ?>" id="<?php echo $services->id; ?>">Save</a>
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