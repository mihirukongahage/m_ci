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
      <h1>Services</h1>
      <a class="btn btn-primary float-right" href="<?=base_url('index.php/main/add_service')?>">Add Service</a>
    <div class="row">
    <?php 
      if($services->num_rows()>0)
      {
        foreach($services->result() as $row)
        {
          ?>
          <div class="offset-1 mt-3">
            <div class="card" style="width: 18rem;">
              <div class="card-body">
                <h5 class="card-title"> <?php echo $row->name; ?> </h5>
                <h6 class="card-subtitle mb-2 text-muted">Rs.<?php echo $row->price; ?>.00</h6>
                <p class="card-text"><?php echo $row->description; ?></p>
                <a class="btn btn-primary" href="edit_service/?id=<?php echo $row->id; ?>">Edit</a>
                <a class="btn btn-secondary" href="remove_service/?id=<?php echo $row->id; ?>" id="<?php echo $row->id; ?>">Remove</a>
              </div>
            </div>     
          </div>    
    <?php }
      }
      else
      {
        echo "no data";
      }
    ?>
</div>
</div>
  
    
  

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
  
  </body>
</html>