<?php
/**
 * Client Socket in PHP.
 *
 * Communication between socket:server and client
 *
 * @package    
 * @subpackage 
 * @license    http://opensource.org/licenses/gpl-license.php  GNU Public License
 * @author     Muhammad Mubashir Mufti <mmufti@hotmail.com>
 */

$socket = stream_socket_client("tcp://127.0.0.1:1037", $errno, $errMessage);
if ($socket === false) {
    throw new UnexceptedValueException("Failed to connect: $errMessage");}
while(!feof($socket)) {
    echo fread($socket, 100);
} 
fclose($socket);