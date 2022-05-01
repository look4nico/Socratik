<?php
  include("utilities.php");
  include("security.php");
  updateFromPOST();
  security_login();
?>
<html>
  <head>
    <title>Socratik</title>
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
      <img src="./images/logo.png" alt="socratik site logo" width="500" height="150">
      <div class="container">
          <?php
        ?> 
        <?php
            if (security_loggedIn()) {
                // echo $_COOKIE["screenname"];
                // echo $_COOKIE["login"];
                echo(
                    "<h1 id='introD'>Welcome Back!&nbsp;&nbsp;" . $_COOKIE["screenname"] . "</h1><br>
                    <h2 id='sloaganText'>what is on your mind?</h2>
                    <div class='postBox'><p class='postText'>" . readPost() . "</p>
                    </div>
                    <div style='margin-bottom: 20px;'></div>
                      <form action='index.php' method='POST'>
                        <textarea id='postInput' name='post' rows='2' cols='65' placeholder='Write something...'></textarea><br>
                        <input type='submit' value='Post'></input>
                      </form>
                    <div>
                        <a href='logout.php'>Logout</a><br>
                        <a href='update.php'>Update Password</a><br>
                        <a href='remove.php'>Delete Account</a><br>
                    </div>");
                } else {
                    echo("<h2 id='introD'>No Account Found</h2><br>");  
                    echo("<a href='signup.php'>Signup</a><br>");
                    echo("<a href='login.php'>Login</a>");
            };
        ?>
      </div>
  </body>
</html>