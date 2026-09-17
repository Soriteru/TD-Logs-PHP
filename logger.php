<?php 

function write_log($username, $message){
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

?>