<?php
$str = file_get_contents('formdata.json');
$json = json_decode($str, true);

?>
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
  <h2>Movie Table</h2>     
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Title</th>
        <th>Description</th>
        <th>Image</th>
        <th>Rating</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
        <?php
            foreach ($json as $key => $value) 
            {
               

        ?>
            <tr>
                <td><?php  echo $value['title'] ?></td>
                <td><?php  echo $value['description'] ?></td>
                <td><img style="width: 50px;height:50px" src="<?php echo "image/".$value['image'] ?>"></td>
                <td><?php  echo $value['rating'] ?></td>
                <td><a href="delete.php?id=<?php echo $value['id']?>" style="color:red">Delete</a> <a href="update.php?id=<?php echo $value['id']?>" style="color:green">Update</a></td>
            </tr>
        <?php } ?>
    </tbody>
  </table>
</div>

</body>
</html>