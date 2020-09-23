 <?php

  if (isset($_POST['submit'])
  {
  $text=$_POST['name'];
  $mail=$_POST['mail'];
  $phone=$_POST['number'];
  $message=$_POST['message'];
  $to="asmitarampurkar@gmail.com";
  $subject="new enquiry";


  $headers="From:$text<$mail>";

  $message="Name:$text\n\n Email:$mail\n\n Phone No:$phone";

  if (mail($to,$subject,$message,$headers))
  {
    echo " THANKS FOR SENDING US MAIL WE WILL CONTACT YOU SHORTLY";
  }

   else
   {
     echo "PLEASE TRY AGAIN LATER";
   }
  }
}
?>