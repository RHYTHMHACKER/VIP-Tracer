<?php
include("modules/system.php");
class un {
  public function uni() {
    global $system;
    // removing old files
    if ($system=="termux") {
      system("rm -rf /data/data/com.termux/files/usr/share/VIP-Tracer");
      system("rm -rf /data/data/com.termux/files/usr/bin/vip-tracer");
      system("rm -rf /data/data/com.termux/files/usr/bin/trace");
    } elseif ($system=="ubuntu") {
      system("sudo rm -rf /usr/bin/vip-tracer");
      system("sudo rm -rf /usr/bin/trace");
      system("sudo rm -rf /usr/share/VIP-Tracer");
    } else {
      system("rm -rf /usr/bin/vip-tracer");
      system("rm -rf /usr/bin/trace");
      system("rm -rf /usr/share/VIP-Tracer");
    }
  }
  function logo() {
    system("clear");
    echo <<<EOL
\033[01;33m


\033[01;31m      _\033[01;33m 

╭╮╱╱╭┳━━┳━━━╮╭━━━━╮

┃╰╮╭╯┣┫┣┫╭━╮┃┃╭╮╭╮┃

╰╮┃┃╭╯┃┃┃╰━╯┃╰╯┃┃┣┻┳━━┳━━┳━━┳━╮

╱┃╰╯┃╱┃┃┃╭━┳┻━╮┃┃┃╭┫╭╮┃╭━┫┃━┫╭╯

╱╰╮╭╯╭┫┣┫┃╱╰━━╯┃┃┃┃┃╭╮┃╰━┫┃━┫┃

╱╱╰╯╱╰━━┻╯╱╱╱╱╱╰╯╰╯╰╯╰┻━━┻━━┻╯


    \033[01;37m}\033[01;31m--------------------------------------\033[01;37m{
 }\033[01;31m------------- \033[01;32mTrack IPLocation\033[01;31m -------------\033[01;37m{
    }\033[01;31m--------------------------------------\033[01;37m{

\033[00m
EOL;

    if (file_exists("/usr/bin/ip-tracer")) {
      echo "\n\033[01;31m        Sorry VIP-Tracer is not removed Contract NSproGAMERSYT !!!\033[00m\n";
    } else if(file_exists("/data/data/com.termux/files/usr/bin/vip-tracer")) {
      echo "\n\033[01;31m        Sorry VIP-Tracer is not removed Contact NSproGAMERSYT !!!\033[00m\n";
    } else {
      echo "\n\033[01;32m        VIP-Tracer-Pro is uninstalled !!!\033[00m\n";
    }
  }
}
$a=new un;
$a->uni();
$a->logo();
?>
