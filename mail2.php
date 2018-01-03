<?php
if ( isset($_SERVER["OS"]) && $_SERVER["OS"] == "Windows_NT" ) {
    $hostname = strtolower($_SERVER["COMPUTERNAME"]);
} else {
    $hostname = `hostname`;
    $hostnamearray = explode('.', $hostname);
    $hostname = $hostnamearray[0];
}

function headers1($name = '', $from = '') { //Function use for setting header for all mail.
    $headers  = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-utf8' . "\r\n";
    //$headers .= 'CC: bookings@himalayanheli.com' . "\r\n";
    //$headers .= 'BCC: vinay.radicalreflex@gmail.com' . "\r\n";
    $headers .= 'Reply-To: Test Mail <test@test.com>'. "\r\n";
    $headers .= "From: Test Mail<test@test.com>";   
    return $headers;
}
?>



<?php
    header("X-Node: $hostname");
    header("HTTP/1.1 500 WhatAreYouDoing");    
    $message='<h1>Testing</h1>';
    $result = mail('test@test.com', 'Testing Mail', $message, headers1());
    if ( $result ) {

        echo 'OK';

    } else {

        echo 'FAIL';

    }



?>