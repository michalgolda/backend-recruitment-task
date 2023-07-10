<?php
require_once __DIR__ . '/httpResponse.php';

function httpBadRequest()
{
    httpResponse(400, "Bad request");
}

function httpNotFound()
{
    httpResponse(404, "Page not found");
}
