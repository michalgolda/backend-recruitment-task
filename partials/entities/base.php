<?php
interface Entity extends JsonSerializable
{
    public static function fromArray($entityArray);
}
