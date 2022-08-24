<?php
/* Database config */
$db_host		= 'localhost';
$db_user		= 'root';
$db_pass		= '';
$db_database	= 'DATABASE'; 

/* End config */

$db = new mysqli($db_host,$db_user,$db_pass,$db_database);


class App {   
    public static function message($type,$message,$code=''){
        if($type=='error'){
            return '<div class="alert alert-danger alert-dismissable">
                                <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                               '.$message.' <a class="alert-link" href="#">'.$code.'</a>.
                            </div>';
        }else{
             return '<div class="alert alert-success alert-dismissable">
                                <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                               '.$message.' <a class="alert-link" href="#">'.$code.'</a>.
                            </div>';
        }
    }
}
function get($val){
    return @$_GET[$val];
    }
    



?>