<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title> Simple IP getter DEMO </title>

    </head>
    <body>
        <div >

            <h1>Hello, my IP is</h1>
            <p>
                <?php 
                    $ip_server = $_SERVER['SERVER_ADDR']; 
                    echo $ip_server; 

                    echo file_get_contents("http://ipecho.net/plain");
                ?>
            </p>
            <h1> Minor change done </h1>
        </div>
    </body>
</html>