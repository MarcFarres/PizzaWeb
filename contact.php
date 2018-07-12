<?php 

    // EDIT THE 2 LINES BELOW AS REQUIRED
    $email_to = "marcfarresp@gmail.com";
    $email_subject = "Nou missatge d'un usuari de la web: PizzaNyam";  
 
    $nom = isset($_POST['name'])?$_POST['name']:false; // required
    $email = isset($_POST['mail'])?$_POST['mail']:false; // required
    $missatge = isset($_POST['comment'])?$_POST['comment']:false; // required
    
    $response = [];

    if(!$nom || !$email || !$missatge){
        $response = [
          'info'=>"error",
          'msg'=>"falten dades o son incorrectes"
        ];
        echo json_encode($response);
        exit;
    }
 
    $email_message = "Missatge rebut de la web.\n\n";
    $email_message .= "Nom: ".$nom."\n";
    $email_message .= "Mail: ".$email."\n";
    $email_message .= "Missatge: ".$missatge."\n";

// create email headers
 
$headers = 'From: '.$email."\r\n".
 
'Reply-To: '.$email."\r\n" .
 
'X-Mailer: PHP/' . phpversion();
 
$result = mail($email_to, $email_subject, $email_message, $headers);  

if($result){
  $response = [
      'info'=>"tot ok",
      'msg'=>"missatge enviat correctament: ".$missatge
    ];  
}else{
  $response = [
    'info'=>"error",
    'msg'=>"error al enviar el missatge"
  ];   
}

echo json_encode($response);