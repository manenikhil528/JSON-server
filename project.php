<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Movie form</h2>
  <form  method="post" class="form-horizontal" action="save.php" enctype="multipart/form-data">
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Title:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="title" placeholder="Enter Title" name="title">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Description:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="description" placeholder="Enter Description" name="description">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Image:</label>
      <div class="col-sm-10">          
        <input type="file" class="form-control" id="image"  name="image">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Rating:</label>
      <div class="col-sm-10">          
        <input type="number" class="form-control"   name="rating">
      </div>
    </div>
    
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">Submit</button>
      </div>
    </div>
  </form>
</div>

</body>
</html>
