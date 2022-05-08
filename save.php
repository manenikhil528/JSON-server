<?php
if(isset($_POST['title']) && isset($_POST['description'])) 
{
 
    $uploadFileDir = 'C:\xampp\htdocs\image';
        
        move_uploaded_file($_FILES['image']['tmp_name'],"image/".$_FILES['image']['name']);
        
        
        $filetxt = 'formdata.json';

        // check if the file exists
        if(file_exists($filetxt)) {
            // gets json-data from file
            $jsondata = file_get_contents($filetxt);
    
            // converts json string into array
            $arr_data = json_decode($jsondata, true);
        }
        // adds form data into an array
        $formdata = array(
        'id'    => rand(10,100),
        'title'=> $_POST['title'],
        'description'=> $_POST['description'],
        'image'=> $_FILES['image']['name'],
        'rating' => $_POST['rating'],
        );

        $arr_data[] = $formdata;

        

        // encodes the array into a string in JSON format (JSON_PRETTY_PRINT - uses whitespace in json-string, for human readable)
        $jsondata = json_encode($arr_data, JSON_PRETTY_PRINT);

        

        // saves the json string in "formdata.txt" (in "dirdata" folder)
        // outputs error message if data cannot be saved
        if(file_put_contents('formdata.json', $jsondata)) 
        {
            echo 'Data successfully saved';

            header("Location: view.php");
        }else
        {
            echo 'Unable to save data in "dirdata/formdata.json"';
        }
    
}
?>