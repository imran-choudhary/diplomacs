<?php
// Check for empty fields
if(empty($_POST['name'])     ||
   empty($_POST['message']))
   {
   echo "No arguments Provided!";
   return false;
   }
   else
   {
       echo '<center>';
       echo '<br><br><br><br><br>';
       echo '<h1>Your Message has been</h1>';
       echo '<h1 style="color:green;">successfully sent <img src="images/demo/tick.png"></h1>';
       echo '<h1>to the Admin of this website !!!</h1>';
       echo '<title>Contact Form</title>';
       echo '<br>';
       echo '<button style="font-size:20pt"; type="button" onclick="goBack()">Go Back</button>';
       echo '<script>
function goBack() {
    window.history.back();
}
</script>
';
         echo '<br>';
          echo '<br>';
        echo '<h3 style="font-size:20pt;color:red">Note: Please provide your <b style="color:green;">email</b> in <b  style="color:darkblue;">comment section</b> if you want reply from us!</h3>';
       echo '</center>';
   }
   

$name = strip_tags(htmlspecialchars($_POST['name']));
$message = strip_tags(htmlspecialchars($_POST['message']));
   
// Create the email and send the message
$to = 'imrankhalid@yandex.com'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
$email_subject = "Website Contact Form: $name";
$email_body = "You have received a new message from your website contact form.\n\n"."Here are the details:\n\nName: $name\n\nMessage:\n$message";
$headers = "From: info@diplomacs.com\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
mail($to,$email_subject,$email_body,$headers);
return true;       

?>