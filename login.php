<?php
$host="localhost";
$dbusername="Velina";
$dbpassword="velina1401";
$dbname="log";
try{
    $db=new mysqli($host, $dbusername, $dbpassword,$dbname);
}catch(Exception $exc){
    echo->getTraceAsString();
}
if(isset($POST['userid'])&&(isset($POST['password'])){
    $userid = filter_input(INPUT_POST,'userid');
    $password = filter_input(INPUT_POST,'password');
    $is_insert=$db->query("INSERT INTO 'inside'('userid','password') VALUES('$userid','$password')");
    if($is_insert==TRUE){
        echo"<h2>Thanks,your request submited</h2>";
        exit();
    }
}
?>
<?php
$host="localhost";
$dbusername="Velina";
$dbpassword="velina1401";
$dbname="sign";
try{
    $db=new mysqli($host, $dbusername, $dbpassword,$dbname);
}catch(Exception $exc){
    echo->getTraceAsString();
}
if(isset($POST['userid'])&&(isset($POST['password'])){
    $userid = filter_input(INPUT_POST,'userid');
    $emailid = filter_input(INPUT_POST,'email');
    $password = filter_input(INPUT_POST,'password');
    $is_insert=$db->query("INSERT INTO 'signup'('userid','email','password') VALUES('$userid','$emailid','$password')");
    if($is_insert==TRUE){
        echo"<h2>Thanks,your request submited</h2>";
        exit();
    }
}
?>