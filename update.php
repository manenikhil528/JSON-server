<?php
$str = file_get_contents('formdata.json');

$json = json_decode($str, true);
$array=array();
$array=($json);

if(isset($_POST['title']) && isset($_POST['description'])) 
{
    
    $str = file_get_contents('formdata.json');

    $json = json_decode($str, true);
    $array=array();
    foreach ($json as $key => $entry) 
    {

        $uploadFileDir = 'C:\xampp\htdocs\image';
        
        move_uploaded_file($_FILES['image']['tmp_name'],"image/".$_FILES['image']['name']);
        
        if ($entry['id'] == $_GET['id']) 
        {
            $array= array($entry);
            $json[$key]['title'] = $_POST['title'];
            $json[$key]['description'] = $_POST['description'];
            $json[$key]['rating'] = $_POST['rating'];
            $json[$key]['image'] = $_FILES['image']['name'];

           
            
        }
    }


    // $filetxt = 'formdata.json';

    //     // check if the file exists
    // if(file_exists($filetxt)) 
    // {
    //     // gets json-data from file
    //     $jsondata = file_put_contents($filetxt);

    //     // converts json string into array
    //     $arr_data = json_decode($jsondata, true);
    // }

    

    $arr_data = $json;

    

    $jsona = json_encode($arr_data);
    file_put_contents('formdata.json', $jsona);

    header("Location: view.php");
}
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
  <h2>Movie form</h2>
  <form  method="post" class="form-horizontal" action="#" enctype="multipart/form-data">
  <?php
        foreach ($array as $key => $value) 
        {
               

    ?>
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Title:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="title" placeholder="Enter Title" name="title" value="<?php echo $value['title']; ?>">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Description:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="description" placeholder="Enter Description" name="description" value="<?php echo $value['description']; ?>">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Image:</label>
      <div class="col-sm-10">    
      <input type="file" class="form-control" id="image"  name="image">
      <img style="width: 50px;height:50px" src="<?php echo "image/".$value['image'] ?>">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Rating:</label>
      <div class="col-sm-10">          
        <input type="number" class="form-control"   name="rating" value="<?php echo $value['rating']; ?>">
      </div>
    </div>
    
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">Submit</button>
      </div>
    </div>
    <?php } ?>
  </form>
</div>

</body>
</html>
