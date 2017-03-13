<?php
   $host = "localhost";
   $database = "stream";
   $user = "bravo";
   $pass = "xoco12345";
	
  	function clean($input, $maxlength)
 	{
     $input = substr($input, 0, $maxlength);
    $input = EscapeShellCmd($input);
   return ($input);
  }
?>
