<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$return = false;
if( isset( $_POST['name'] ) ) {
        $return = true;
}
if( $return ){
    echo 'ok';
}
else{
    echo 'not ok';
}

?>
?
