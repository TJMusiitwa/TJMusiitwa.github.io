<?php
if(isset($_POST['submitButton']))
{

    //Get the data values from the form
    $name = $_POST['name']; 
    $email = $_POST['email']; 
    $number = $_POST['number'];
    $data = $_POST['message'];

    //Email the form details to the set email
    $to = "theeventarchitectuganda@gmail.com";//email to which the form is sent
    $from = $_POST['email']; //the senders email
    $subject = "Form Submission From the Website"; //the subject of the email
    $message = " Name: " . $name . "\r\n Email: " . $email . "\r\n Number: " . $number ."\r\n Message: " . $data;
    echo "Thank you " .$name . " ,we will contact you shortly.";
    mail($to,$subject,$message);//An inbuilt function to  email data
    /*echo("Name: " . $_POST['name'] . "<br />\n");
    echo("Email: " . $_POST['email'] . "<br />\n");
    echo("Contact Number: " . $_POST['number'] . "<br />\n");
    echo("Message: " . $_POST['message'] . "<br />\n");*/

} else{
    echo "Please complete any empty fields"
    echo "Error in submitting message! Please mail your message to theeventarchitectuganda@gmail.com";
}

?>