<?php 

function write_log($username = null){
    $fp = fopen('app.log', 'a');
    $date = $date = date("Y-m-d H:i:s");
    if(empty($username)){
        $username = "UNKNOWN";
    }
    
    fwrite($fp, "[" . $date . "]" . " - " . $username . "\n");
    fclose($fp);
}

write_log();

?>