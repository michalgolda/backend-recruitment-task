<?php
function httpResponse(int $statusCode, string $message)
{
    http_response_code($statusCode);
    echo $message;
    exit;
}
