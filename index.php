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
                    <?php
                        if (isset($_GET['ip'])) {
                            die($_SERVER['REMOTE_ADDR']);
                        }
                        $own_url = (isset($_SERVER['HTTPS']) ? 'https' : 'http') . '://'.$_SERVER['HTTP_HOST'].$_SERVER['SCRIPT_NAME'];
                        $ExternalIP = file_get_contents($own_url.'?ip=1');
                        echo $ExternalIP;
                    ?>
                    
                   
                ?>
            </p>

        </div>
    </body>
</html>