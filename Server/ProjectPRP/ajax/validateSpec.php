<?php
session_start();
$Id_specialty = $_POST["Id_specialty"];
$Name_Universities = $_POST["Name_Universities"];
//echo "wqwertyu";
$mysql = new mysqli("localhost","root","","users");
if ($mysql->connect_errno) {
    printf("Не удалось подключиться: %s\n", $mysql->connect_error);
    exit();
}
$mysql->query("SET NAMES 'utf8'");
$result = $mysql->query("SELECT Min_Budget FROM specialty_in_universities WHERE Id_specialty = '$Id_specialty' AND Name_Universities = '$Name_Universities'");

/*$arr=array();
if (mysqli_num_rows($result)>0){
    while ($row=mysqli_fetch_assoc($result)){
        $arr[]=$row;
    }
}


$_SESSION["SpecRate"] = $arr;*/
echo mysqli_num_rows($result); //0
//echo mysqli_num_fields($result); //19*/
/*if (mysqli_num_rows($result)>0){
    echo 1;
}else{
    echo 0;
}*/
if($result == false) {
    echo "fail";
}


    ?>