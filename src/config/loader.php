<?php

function loadModel($modelName) {
    require_once(MODEL_PATH . "/{$modelName}.php");
}
?>