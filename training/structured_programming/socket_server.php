<?php
/**
 * Server Socket in PHP.
 *
 * Communication between socket:server and client
 *
 * @package    
 * @subpackage 
 * @license    http://opensource.org/licenses/gpl-license.php  GNU Public License
 * @author     Muhammad Mubashir Mufti <mmufti@hotmail.com>
 */

$socket = stream_socket_server("tcp://127.0.0.1:1037");
while($conn = stream_socket_accept($socket)) {
    fwrite($conn, "Assalamo Alaikum\n");
	fclose($conn);
} 
fclose($socket);