<?php
    # $_SERVER SUPERGLOBAL

    // Create Server Array
    $server = [
        'Host Server Name' => $_SERVER['SERVER_NAME'], //gets the server name
        'Host Header' => $_SERVER['HTTP_HOST'], // gets the server host
        'Server Software' => $_SERVER['SERVER_SOFTWARE'], //gets the info about the server technologies
        'Document Root' => $_SERVER['DOCUMENT_ROOT'], //gets the server location on the computer ,example: C:/xampp/htdocs
        'Current Page' => $_SERVER['PHP_SELF'], //gets the current page your on in the website
        'Script Name' => $_SERVER['SCRIPT_NAME'], //gts the location of the current script as the document root
        'Absolute Path' => $_SERVER['SCRIPT_FILENAME'] //gets the absolute path of the file on the computer
    ];

//print_r($server);

    //Create Client Array
    $client = [
        'Client System Info' => $_SERVER['HTTP_USER_AGENT'], //gets the browsers version
        'Client IP' => $_SERVER['REMOTE_ADDR'], //gets the client IP
        'Remote Port' => $_SERVER['REMOTE_PORT'] //gets the client remote port
    ];

    //print_r($client);
?>