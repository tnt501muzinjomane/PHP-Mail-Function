<html>
   
   <head>
      <title>Sending HTML email using PHP</title>
   </head>
   
   <body>
      
      <?php
         $to = "tnt501muzinjomane@gmail.com";
         $subject = "Meeting confirmation";
         
         $message = "<b>This email serves to confirm our meeting at 10 am tomorrow as per your request.</b>";
         $message .= "<h1>Thank you.</h1>";
         
         $header = "From:abc@somedomain.com \r\n";
         $header = "Cc:muzi@realnet.co.sz \r\n";
         $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";
         
         $retval = mail ($to,$subject,$message,$header);
         
         if( $retval == true ) {
            echo "Message sent successfully...";
         }else {
            echo "Message could not be sent...";
         }
      ?>
      
   </body>
</html>
