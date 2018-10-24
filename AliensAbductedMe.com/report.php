<html>
    <head>
        <link rel="stylesheet" href="style.css">
        <title>Aliens Abducted Me - Report an Abduction</title>
    </head>
    <body>
<?php
    //print_r($_POST);
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $hasBeenAbducted = $_POST['fang'];
    /*for($i=0;i<sizeof($_POST);$i++){
        echo $_POST[i];
    }*/
    echo sizeof($_POST);
    echo '<br>';
    foreach($_POST as $key => $value){
        echo 'key:'.$key.' value:'.$value.'<br>';
    }
    echo 'First Name:'.$firstname.'<br>';
    echo 'Last Name:'.$lastname.'<br>';
    echo 'email:'.$email.'<br>';
    echo 'Has been abducted? '.$hasBeenAbducted.'<br >';

?>
    </body>
</html>