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
                    $sock = socket_create(AF_INET, SOCK_DGRAM, SOL_UDP);
                    $res = socket_connect($sock, '8.8.8.8', 53);
                    // You might want error checking code here based on the value of $res
                    socket_getsockname($sock, $addr);
                    socket_shutdown($sock);
                    socket_close($sock);
                    
                    echo $addr; // Ta-da! The IP address you're connecting from
                ?>
            </p>

        </div>
    </body>
</html>