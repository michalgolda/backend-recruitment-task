<?php
require_once __DIR__ . '/httpResponse.php';

function template($templateFileName, $data = [])
{
    extract(["context" => $data]);

    $templatesPath = SETTINGS['TEMPLATES_PATH'];
    $templatesPath = $templatesPath . $templateFileName . '.php';

    if (file_exists($templatesPath)) {
        include $templatesPath;
    } else {
        httpResponse(500, "Template doesn't exists");
    }
}
