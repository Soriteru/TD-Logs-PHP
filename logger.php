<?php 

function write_log($username = null, $message = "Je suis vendeur chez Carrefour"){
    $fp = fopen('app.log', 'a');
    $date = $date = date("Y-m-d H:i:s");
    if(empty($username)){
        $username = "UNKNOWN";
    }

    if(empty($message)) {
        $message = "EMPTY";
    }
    
    fwrite($fp, "[" . $date . "]" . " - " . $username . " - " . "'" . $message . "'" .  "\n");
    fclose($fp);
}

write_log();

?>