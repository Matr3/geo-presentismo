<!doctype html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   
      <title>How to Find Nearest Location using Latitude and Longitude In PHP</title>
       <!-- CSS -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
   </head>
   <body>
      <div class="container mt-5">
          <div class="card">
            <div class="card-header text-center">
              How to Find Nearest Location using Latitude and Longitude In PHP
            </div>
            <div class="card-body">
              <form action="location.php" method="post">
 
                <div class="form-group">
                  <label for="exampleInputEmail1">Latitude</label>
                  <input type="text" name="lat" class="form-control" required="">
                </div>                                
 
                <div class="form-group">
                  <label for="exampleInputEmail1">Longitude</label>
                  <input type="text" name="lng" class="form-control" required="">
                </div>
 
                <input type="submit" name="submit" class="btn btn-primary">
              </form>
            </div>
          </div>
      </div>
 
   </body>
</html>