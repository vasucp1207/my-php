<?php 

function welcome(){
    // All global variables are stored in the array called globals
    $GLOBALS['greet'] = "Welcome Sir";
}

welcome();
/* echo $greet;

echo $_SERVER['PHP_SELF'];
echo $_SERVER['SERVER_NAME'];
echo $_SERVER['HTTP_HOST'];
echo $_SERVER['HTTP_USER_AGENT'];
echo $_SERVER['SCRIPT_NAME'];
*/

/* if($_SERVER['REQUEST_METHOD'] == 'POST'){
    // collect data fo the form input
    // REQUEST is used to collect the after sumitting the HTML form
    $name = $_REQUEST['Name'];
    if(empty($name)) {
        echo 'Name is empty';
    } else {
        echo $name;
    }
} */

if(isset($_GET['submit'])) {
    $personName = $_GET['fullname'];
    $email = $_GET['email'];
    
    // will see all submitted value in query string
}

else if(isset($_POST['submit'])) {
    $personName = $_POST['fullname'];
    $email = $_POST['email'];
    
    echo $personName . ' ' . $email;
}

$cookie_name = "username";
$cookie_value = "vasu_singh";

setcookie($cookie_name, $cookie_value, time() + (86400 * 15), '/');
setcookie($cookie_name, "", time() - (86400 * 15));

echo $cookie_value;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action='<?php $_SERVER['PHP_SELF']; ?>' method="POST">
        Name: <input type="text" name="fullname" />
        Email: <input type="text" name="email" />
        <input type="submit" value="Subscribe"/>
    </form>
</body>
</html>