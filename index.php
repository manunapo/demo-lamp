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
            <h2> I am: 
            <?php
                echo gethostname();
            ?>
            </h2>
            <h1>Hello, my private IP is</h1>
            <p>
                <?php 
                    $ip_server = $_SERVER['SERVER_ADDR']; 
                    echo $ip_server; 

                   
                ?>
            </p>
            <h1> <h1>Hello, my public IP is</h1> </h1>
            <p>
                <?php
                  echo file_get_contents('https://ipapi.co/ip/')
                ?>
            </p>

        </div>
    </body>
</html>