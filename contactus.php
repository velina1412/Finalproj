<?php
$host="localhost";
$dbusername="Velina";
$dbpassword="velina1401";
$dbname="data";
try{
    $db=new mysqli($host, $dbusername, $dbpassword,$dbname);
}catch(Exception $exc){
    echo->getTraceAsString();
}
if(isset($POST['userid'])&&(isset($POST['password'])){
    $fullname = filter_input(INPUT_POST,'fullname');
    $email = filter_input(INPUT_POST,'email');
    $phonenumber = filter_input(INPUT_POST,'phonenumber');
    $your_message = filter_input(INPUT_POST,'your_message');
    $is_insert=$db->query("INSERT INTO 'contact'('fullname','email','phonenumber','your_message') VALUES('$fullname','$email','$phonenumber','$your_message')");
    if($is_insert==TRUE){
        echo"<h2>Thanks,your request submited</h2>";
        exit();
    }
}
?>