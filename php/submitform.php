<?php 
  $to = 'rfalford12@gmail.com' ;
  $name = $_POST['NAME'] ; 
  $email = $_POST['EMAIL'] ;
  $subject = $_POST['SUBJECT'];
  $message = $_POST['MESSAGE'] ;

  $sent = mail($to, $subject, $message) ; 
    if($sent) {
      echo "<h3>Thank you for your message.</h3><p>Your email has been sent successfully and we appreciate you getting in touch with us. We will be sending a reply soon.</p>"; 
    }else{
      echo "<h3>Sorry, your message wasn't sent.</h3><p>We seem to have encountered a problem sending your message. Please go back and try again. If you get this message again please email <a href='mailto:webmaster@yourDomain.com'>webmaster@yourDomain.com</a>.</p>"; 
}

?>