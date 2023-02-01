<?php
if (isset($_POST['Submit'])){
if(
    !empty($_POST['name']  &&
     !empty ($_POST['email']  {
        $name= $_POST['name'];
        $email = $_POST['email'];
        $action = "From noreply@gmail.com" . "\r\n";
        $action = "Reply to noreply@gmail.com" . "\r\n";
        $action = "X-Mailer: PHP/" . phpversion();
        $mail =($email,$name,$action);
        if ($mail}){
          echo "<h4>¡Mail enviado con exito!<h4>";
        }
}
}

?>