<?php 
if(isset($_POST["upload"])){

    if($_SERVER["REQUEST_METHOD"]=="POST"){

        $file=$_FILES["attach"];

        $filename=$file["name"];
        $filetype=$file["type"];
        $filetempname=$file["tmp_name"];
        $filesize=$file["size"];

        // var_dump($file);

        echo "<br/>";
        
        // echo $file["temp_name"][0];

        $limitsize=3;

        $totalfilesize=array_sum($filesize);
        $listen=count($filename);

        // echo $totalfilesize;

        // $filesizetomb=$totalfilesize/1000000;
        function bytetomb ($totalfilesize){
            $cal=$totalfilesize/1000000;
            return $cal;
        }

        foreach($filetempname as $key=>$value ){
            // echo $filesize[$key]."<br/>";
            // $filesizetomb=$filesize[$key]/1000000;
            // echo "bit to mb file size = ".$filesizetomb;

            if(bytetomb($totalfilesize) < $limitsize){
            move_uploaded_file($filetempname[$key],"fileserver/.$filename[$key]");
            echo ($listen > 1 ? "{$listen} files are " : "{$listen} file is" )."successful uploaded";
            }else{
                echo "Wow your files are too big.They are about ".bytetomb($totalfilesize)."Mb Cann't upload, we allow {$limitsize}Mb only!";
            }
        }

    }
}


echo "<hr/>";
?>

<!DOCTYPE html>
<html>
<head>
    <title>Attach Form Multi</title>
</head>
<body>
    <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">
    <label for="attach">File</label><br/><br/>
    <input type="file" name="attach[]" id="attach" class="multiple" ><br/><br/>
    <button type="submit" name="upload" id="upload" class="">Upload</button>
    </form>
</body>
</html>