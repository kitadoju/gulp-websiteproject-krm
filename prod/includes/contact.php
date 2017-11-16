<?php
 
// Email address verification
function isEmail($email) {
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}
 
if($_POST) {
 
    // Enter the email where you want to receive the message
    $emailTo = 'leguejuline@gmail.com, kristopher.recinos@gmail.com';

    $name = addslashes(trim($_POST['fullName']));
    $clientEmail = addslashes(trim($_POST['emailAdress']));
    $message = addslashes(trim($_POST['message']));
    
 
    $array = array('emailMessage' => '', 'nameMessage' => '', 'messageMessage' => '');
 
    if(!isEmail($clientEmail)) {
        $array['emailMessage'] = 'Invalid email!';
    }
    if($name == '') {
        $array['nameMessage'] = 'Empty name!';
    }
    if($message == '') {
        $array['messageMessage'] = 'Empty message!';
    }
    
    if(isEmail($clientEmail) && $name != '' && $message != '') {
        // Send email
        $headers = "From: " . $clientEmail . " <" . $clientEmail . ">" . "\r\n" . "Reply-To: " . $clientEmail;
        mail($emailTo, $subject . " contact KRM-WEB ", $message, $headers);
    }
 
    echo json_encode($array);
 
}
 
?>