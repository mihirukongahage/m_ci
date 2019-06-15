<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://code.highcharts.com/highcharts.src.js"></script>

  </head>
  <body>
    
    <div class="container">
      <h1>Services</h1>
      <!-- Add service button -->
      <a class="btn btn-primary float-right" href="<?=base_url('index.php/main/addnewservice')?>">Add Service</a>
    <div class="row">
    <?php 
      if($services->num_rows()>0)
      {
        foreach($services->result() as $row)
        {
          ?>
          <!-- Card to dispaly the service -->
          <div class="offset-1 mt-3">
            <div class="card" style="width: 18rem;">
              <div class="card-body">
                <h5 class="card-title"> <?php echo $row->name; ?> </h5>
                <h6 class="card-subtitle mb-2 text-muted">Rs.<?php echo $row->price; ?>.00</h6>
                <p class="card-text"><?php echo $row->description; ?></p>
                <!-- Edit and remove buttons -->
                <a class="btn btn-primary" href="edit_service/?id=<?php echo $row->id; ?>">Edit</a>
                <a class="btn btn-secondary" href="remove_service/?id=<?php echo $row->id; ?>" id="<?php echo $row->id; ?>">Remove</a>
              </div>
            </div>
          </div>    
    <?php }
      }
      else
      {
        //When no services are available
        echo "No Services Available";
      }
    ?>
</div>
</div>

<div class="mt-5">
<div class="container">
      <h1>Reservations for the last week</h1>
      <div id="container" style="width:100%; height:400px;"></div>
      
</div>
<script type="text/javascript">
document.addEventListener('DOMContentLoaded', function () {
    var myChart = Highcharts.chart('container', {

title: {
    text: 'Week 26'
},

subtitle: {
    text: ''
},

yAxis: {
    title: {
        text: 'No of reservations'
    }
},
legend: {
    layout: 'vertical',
    align: 'right',
    verticalAlign: 'middle'
},

plotOptions: {
    series: {
        label: {
            connectorAllowed: false
        },
        pointStart: 0
    }
},

series: [{
    name: 'No of reservations',
    data: [15, 13, 14, 12, 18, 19, 14, 18]
}],

responsive: {
    rules: [{
        condition: {
            maxWidth: 500
        },
        chartOptions: {
            legend: {
                layout: 'horizontal',
                align: 'center',
                verticalAlign: 'bottom'
            }
        }
    }]
}

});
});
</script>
</div>
 

  

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  
  </body>
</html>