<?php 
    include("security.php");
?>
<html>
    <head>
        <title>UPDATE ACCOUNT PASSWORD</title>
        <style>
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
                border-radius: 10px;
                border-color:#cffadb;

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
                echo(
                "<h1 id='introD'>UPDATE ACCOUNT PASSWORD</h1>
                <h2  class='introBody'>Please enter account info</h2>
                <form action='update.php' method='POST'>
                    
                    <label class='introBody' for='username'>Username</label><br>
                    <input id='postInput' type='text' id='username' name='username' /><br><br>
                    
                    <label class='introBody' for='password'>Password</label><br>
                    <input id='postInput' type='password' id='password' name='password' /><br><br>
                    
                    <label class='introBody' for='newPassword'>New Password</label><br>
                    <input id='postInput' type='password' id='newPassword' name='newPassword' /><br><br>
                    
                    <input type='submit' name='submit' value='Submit Update' />
                    
                </form>");
                echo('<a href="index.php">Go to home</a><br>');
                echo('<a href="logout.php">Logout</a><br>');

                if(security_validate()) { 
                    
                    security_updatePassword();
                    security_logout();  
                                
                }

            } else {
                echo("<h1 id='introD'>Not logged in. Please signup today!</h1><br>");
                echo('<a href="signup.php">Signup here!</a><br>');
                echo('<a href="index.php">Go to home</a><br>');
            };
        ?>
    </body>
</html>