<?php
	set_include_path(get_include_path() . PATH_SEPARATOR . 'phpseclib0.3.5');

  function runcmd($cmd){
    include('Net/SSH2.php');
     $ssh = new Net_SSH2('localhost');
     if (!$ssh->login('rc', 'cacapedo')) {
         exit('Login Failed');
     }
     // echo $ssh->exec('pwd');
     $r = $ssh->exec($cmd); 
     return str_replace("\n", "<br>", $r); 
  }
 ?>