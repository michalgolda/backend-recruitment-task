<?php
abstract class Repository
{
    abstract public function findById(int $id);
    abstract public function findAll();
    abstract public function save($entity);
    abstract public function delete($entity);
    abstract public function update($entity);
}

abstract class FileRepository extends Repository
{
    abstract protected function loadDataFromFile();
    abstract protected function saveDataToFile();
}
