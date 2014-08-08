<?php

/*
 * Simple Image Display
 * Used to pull images from folder based on page name
 * Created by Cory Mosey
 */

// because this file isn't being included then it cannot find dir so we parse the page from the javascript
if(isset($_GET['page'])) {
    $page = $_GET['page'];
}

// change dir to whatever - if only one page then you can remove $page
$directory = 'assets/img/transitions/'.$page.'/';
if(is_dir($directory)) {

    // Check if the directory exists
    if($handle = opendir($directory)) {
        // Check if its able to open the directory
        $images = array();

        // Loop through files
        while(false !== ($entry = readdir($handle))) {
            if($entry != "." && $entry != "..") {

                // If the file exists store it in array
                // Build the full file path
                $images[] = '/'.$directory.$entry;
            }
        }

        // Close directory and sort array
        closedir($handle);
        sort($images);

        if(!empty($images)) {

            //echo array into json
            echo json_encode($images);
        }
    }
}

?>
