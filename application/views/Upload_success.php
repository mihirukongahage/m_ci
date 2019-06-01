<html>
 
   <head> 
      <title>Upload Form</title> 
      <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
   </head>
	
   <body>  
      <h3>Your file was successfully uploaded!</h3>  
		
      <ul> 
         <?phpforeach ($upload_data as $item => $value):?> 
         <li><?php echo $item;?>: <?php echo $value;?></li> 
         <?phpendforeach; ?>
      </ul>  
		
      <p><?php echo anchor('upload', 'Upload Another File!'); ?></p>  
   </body>
	
</html>