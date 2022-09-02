<?php

function loadModel($modelName) {
    require_once(MODEL_PATH . "/{$modelName}.php");
}

function loadView($ViewName, $params = array()) {

    if(count($params) > 0) {
        foreach($params as $key => $value) {
            if(strlen($key) > 0){
                ${$key} = $value;
            }
        }
    }

    require_once(VIEW_PATH . "/{$ViewName}.php");
}

?>