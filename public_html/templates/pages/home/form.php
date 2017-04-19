<?php
$_POST = json_decode(file_get_contents('php://input'));
$name = $_POST->name;
$formName = $_POST->form;
preg_match_all("/ei/i", $name, $matches, PREG_OFFSET_CAPTURE);
$matches = $matches[0];
$result = false;

if(sizeof($matches) > 0) {
    $result = checkSpelling($name, $matches);
} else {
    $result = true;
}
createLog($_POST, $formName);
echo json_encode($result);

function checkSpelling($name, $matches) {
    
    foreach($matches as $match) {
        $eIndex = $match[1];
        $name = strtolower($name);
        if($eIndex > 0 && $name[$eIndex - 1] === "c") {
            return true;
        } else {
            header('HTTP/1.1 500 Server Error: Letter C Not Found');
            header('Content-Type: application/json; charset=UTF-8');
            die(json_encode(array('message' => 'Letter C was not be found!')));
        }
    }
}

function createLog($data,$formName) {
    $logName = $formName === "contactForm" ? "contactLog.txt" : "applyLog.txt";
    file_put_contents('../../../logs/'.$logName, json_encode($data) . ":", FILE_APPEND);
}

 ?>
