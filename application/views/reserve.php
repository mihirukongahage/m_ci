<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Reserve</title>
  </head>
  <body>

  
<div class="container mt-5">
<div class="card" style="width: 50rem;">
<div class="text-center mt-3">
<h3>Reserve</h3>
</div>
  <div class="card-body">
  <div class="container">
    <form class="needs-validation" novalidate>
    <div class="form-row">

        <div class="col-md-4 mb-3">
        <label for="validationTooltip01">Name</label>
        <input type="text" class="form-control" id="validationTooltip01" placeholder="Full name" value="Full name" required>
        <div class="valid-tooltip">
            Looks good!
        </div>
        </div>

        <div class="col-md-4 mb-3">
        <label for="validationTooltip02">Telephone</label>
        <input type="number" class="form-control" id="validationTooltip02" placeholder="Telephone" value="Number" required>
        <div class="valid-tooltip">
            Looks good!
        </div>
        </div>

        <div class="col-md-4 mb-3">
        <label for="validationTooltip02">Vehicle number</label>
        <input type="number" class="form-control" id="validationTooltip02" placeholder="Vehicle number" value="Vehicle Number" required>
        <div class="valid-tooltip">
            Looks good!
        </div>
        </div>

    </div>
    <label for="validationTooltip02">Service Type</label>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="Full Service" checked>
        <label class="form-check-label" for="exampleRadios1">
        Full Service
        </label>
        </div>
        <div class="form-check">
        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="Quick Service">
        <label class="form-check-label" for="exampleRadios2">
        Quick Service
        </label>
        </div>
            <button class="btn btn-primary" type="submit">Submit form</button>
            
    </form>
</div>
  </div>
</div>
</div>

<table class="table">
    <thead class="thead-light">
        <tr>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        </tr>
    </thead>
    <tbody>
        
    <?php
        $i=1;
        foreach($reservation_array as $row)
        {
            echo "<tr>";
            echo "<td>".$row->name."</td>";
            echo "<td>".$row->email."</td>";
            echo "</tr>";
            $i++;
        }
        ?>
        
    </tbody>
</table>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>




