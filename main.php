<?php
class UserAgents {
public static function User_Agent() {
              $path = 'user-agents.txt';
              $fp = @fopen($path, "r");
             if (!$fp) {
                die('Sai đường dẫn vui lòng kiểm tra lại');
             } else {
              while(!feof($fp)) {
              $ua[] = fgets($fp);
             }
              fclose($fp);
              $random = rand(0,count($ua)-1);
              return $ua[$random];
            }
                fclose($file);
     }
 }
 print_r(UserAgents::User_Agent());
