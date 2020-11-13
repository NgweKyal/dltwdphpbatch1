<?php

if(isset($_POST['upload'])){
    if($_SERVER['REQUEST_METHOD']=='POST'){
        $attach=$_FILES["attach"];

        // var_dump($fruits); 

        $filename=$attach["name"];
        $filetype=$attach["type"];
        $filetmpname=$attach["tmp_name"];
        $filesize=$attach["size"];
        
        // echo "file name is = ". $filename ."<br/>";
        // echo "file type is = ". $filetype."<br/>";
        // echo "file tmp-name is = ". $filetmpname ."<br/>";
        // echo "file size is = ". $filesize ."<br/>";
       $limit=1;
       $filesizeinmb=$filesize/1000000;
        if($filesizeinmb > $limit){
            echo "Wow your file is too big.it's have {$filesizeinmb}Mb.Cann't upload, we allow {$limit}Mb only!";
        }else{
            //Move to fileserver(temp name,distination.filename)
             move_uploaded_file($filetmpname,'fileserver/'.$filename);
             echo "Success uploaded";
        }
        
    }
    
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Attach Form-Single</title>
    </head>
<body>
    <form action="<?php $_SERVER['PHP_SELF'] ?>"  method="POST" enctype="multipart/form-data">
        <label for="attach">Attach</label>
        <input type="file" name="attach" id="attach" class=""><br/><br/>
        <input type="submit" name="upload" id="upload" class="" value="Upload">
    </form>
</body>
</html>