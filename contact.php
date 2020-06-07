<?php
    if (isset($_POST['submit'])){
        $name = $_POST['name'];
        $mailFrom = $_POST['mail'];
        $message = $_POST['message'];
        $subject = "Regarding Biofest";

        $emailTo = 'test@mail.com';
        $headers = 'FROM: '.$mailFrom;
        $txt = 'You have received an email from '.$name.'.\n\n'.$message;

        mail($emailTo, $subject, $txt, $headers);
        header('Location: index.html?mailsend');
    }
    
