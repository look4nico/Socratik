<?php
    include("security.php");
    security_logout();
?>

<html>
    <head>
        <title>Logout</title>
        <style type="text/css">
            html, body {
                height: 100%;
            }
            html {
                display: table;
                margin: auto;
            }

            body {
                display: table-cell;
                vertical-align: middle;
                background-color: black;
            }
            .postText {
                color: #cffadb;
                font-weight: bold;
                font-family: monospace;
            }
            #userScreen {
                color: #c880ff;
                font-weight: bold;
                font-family: monospace;
            }
            #introD {
                color: #cffadb;
                font-weight: bold;
                font-family: monospace;
            }
            .introBody {
                color: #cffefb;
                font-weight: bold;
                font-family: monospace;
            }
            .postBox {
                background: rgba(76, 175, 80, 0.1);
                padding-top: 5px;
                padding-bottom: 10px;
                padding-left: 20px;
                border-radius: 25px;

            }
            a:link, a:visited {
                background-color: rgba(0, 0, 0, 0);
                border: 2.5px solid #ccc;
                color: white;
                border-radius: 15px;
                padding: 7px 12.5px;
                margin: 5px 0 5px 0;
                text-align: center;
                text-decoration: none;
                display: inline-block;
            }

            a:hover, a:active {
                background-color: #ff446f;
            }
            #postInput {
                background: rgba(0, 0, 0, 0);
                color: #eeee;
                font-weight: bold;
                padding-top: 5px;
                padding-bottom: 10px;
                padding-left: 20px;
                border-radius: 20px;

            }
            input[type=submit] {
                background-color: rgba(0, 0, 0, 0);
                border: 2.5px solid lightgreen;
                border-radius: 15px;
                color: white;
                font-size: 16px;
                padding: 10px 62px;
                text-decoration: none;
                margin: 4px 2px;
                cursor: pointer;
            }
            input[type=submit]:hover, input[type=submit]:active {
                background-color: #04AA6D;
            }
            #sloaganText {
                font-size: 20px;
                color: #fff;
                text-align: center;
                animation: glow 1s ease-in-out infinite alternate;
            }
            @-webkit-keyframes glow {
            from {
                text-shadow: 0 0 0px #fff, 0 0 10px #fff, 0 0 20px lightgreen, 0 0 30px #e60073, 0 0 40px lightgreen, 0 0 50px lightgreen, 0 0 60px lightgreen;
            }
            
            to {
                text-shadow: 0 0 0px #fff, 0 0 10px greenyellow, 0 0 20px greenyellow, 0 0 30px greenyellow, 0 0 40px greenyellow, 0 0 50px greenyellow, 0 0 70px greenyellow;
            }
            }
        </style>
    </head>
    <body>
        <?php
            if (security_loggedIn()) {

                security_logout();

                echo(
                "<h1 id='introD'>Account Logout</h1>
                <h2 class='introBody'>Logout</h2>
                <p class='introBody'>You've been logged out</p>
                <a href='login.php'>Return to Login</a>");

            } else {
                echo("<h1 id='introD'>Not logged in.</h1><br>");
                echo("<h2 class='introBody'>Please return to home</h2><br>");
                echo('<a href="index.php">Go to home</a><br>');
            };
        ?> 
    </body>
</html>

