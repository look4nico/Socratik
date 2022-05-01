<?php
  // Update log
  function updatePost($content) {
    file_put_contents("userfeed.txt", $content);
  }

  // Read the log
  function readPost() {
    return file_get_contents("userfeed.txt");
  }

  // Update log from POST
  function updateFromPOST() {
    // Does the value exist?
    if(isset($_POST["post"])) {

    // Get the current contents
    $currentContent = readPost();
    
    // Add a <br> between content
    $currentContent = $currentContent . "<br>" . "<span id='userScreen'>" . $_COOKIE["screenname"] . "</span>" . "&nbsp;&nbsp;" . $_POST["post"];

    // Update the file  
    updatePost($currentContent);
    }
  }
?>