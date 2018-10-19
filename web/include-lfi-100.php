<?php
error_reporting(0);
// Siapkan file main.php
// FLAG: FLAG{Just_a_Random_String}
$page = $_GET['page'];
if(isset($page))
    {
    	if(preg_match('/^\//', $_GET['link'])) {
    		echo "Hacking detected!";
    	}
    	else if(preg_match('/resource\=\//', $page)) {
    		echo "Hacking detected!";
    	}
    	else if(preg_match('/\.\./', $page)) {
    		echo "Hacking detected!";
    	}
    	else {
			$inputfile = str_replace('..', '', addslashes($page));
			$file_inc = include($inputfile.".php");
			echo $file_inc;
		}
    }

else
    {
        header("Location: ?page=main");
    }
?>
