<?php
if(isset($_POST['submit'])) {
$to = "omo1933@gmail.com";
$subject = "Form";
$userName_field = $_POST['userName'];
$userAge_field = $_POST['userAge'];
$occupation_field = $_POST['occupation'];
$gender_field = $_POST['gender'];
$email_field = $_POST['email'];
$phone_field = $_POST['phone'];
$religion_field = $_POST['religion'];
$state_field = $_POST['state'];
$self_field = $_POST['self'];
$myFile_field = $_POST['myFile'];

 
$body = "From: $userName_field\n Age: $userAge_field\n Occupation:\n $occupation_field";
 
echo "Data has been submitted to $to!";
mail($to, $subject, $body);
} else {
echo "blarg!";
}
?>