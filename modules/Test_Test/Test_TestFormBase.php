<?php

if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

class Test_TestFormBase{ ////file( key_CityFormBase.php)


function getForm($prefix, $mod='', $form=''){
}

function handleSave($prefix,$redirect=true, $useRequired=false){

require_once('include/formbase.php');

$subactivity = new Test_Test(); //(check from module/custom module/key_City.php)

$subactivity = populateFromPost($prefix, $subactivity);

$subactivity->save();

}
}

?>