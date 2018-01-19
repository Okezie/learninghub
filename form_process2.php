<?php 

    // define variables and set to empty values
$email_error = "";
$email = $success = "";

//form is submitted with POST method
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    

    if (empty($_POST["email"])) {
        $email_error = "Email is required";
    } else {
        $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $email_error = "Invalid email format"; 
        }
    }



    

    if ($email_error =='' ){
        $message_body = '';
        unset($_POST['submit']);
        foreach ($_POST as $key => $value){
            $message_body .=  "$key: $value\n";
        }

        $to = 'suzzy@pac-center.com, emmanuelgbnn23@gmail.com';
        $subject = 'Contact Form Submit';
        if (mail($to, $subject, $message_body)){
            $success = "Thanks for subscribing";
            $name = $email = $phone = $message = '';
        }
    }

}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

?>