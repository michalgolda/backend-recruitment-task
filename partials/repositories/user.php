<?php
require_once __DIR__ . '/base.php';
require_once __DIR__ . '/../entities/user.php';

class UserJSONRepository extends FileRepository
{
    public function __construct(private string $filePath, private $users = [],)
    {

        $this->users = $users;
        $this->filePath = $filePath;

        $this->loadDataFromFile();
    }

    public function findById(int $id)
    {
        foreach ($this->users as $user) {
            if ($user->getId() == $id) {
                return $user;
            }
        }
        return NULL;
    }

    public function findAll()
    {
        return $this->users;
    }

    public function save($user)
    {
        array_push($this->users, $user);

        $this->saveDataToFile();

        return $user;
    }

    public function delete($user)
    {
        $userId = $user->getId();

        $this->users = array_filter(
            $this->users,
            function ($user) use ($userId) {
                return $user->getId() != $userId;
            }
        );

        $this->saveDataToFile();

        return NULL;
    }

    public function update($user)
    {
        $this->delete($user);
        $this->save($user);

        return $user;
    }

    protected function loadDataFromFile()
    {
        $fileContent = file_get_contents($this->filePath);
        $usersArray = json_decode($fileContent, true);

        foreach ($usersArray as $userArray) {
            $user = User::fromArray($userArray);
            array_push($this->users, $user);
        }
    }

    protected function saveDataToFile()
    {
        $fileContent = json_encode($this->users, JSON_PRETTY_PRINT);
        file_put_contents($this->filePath, $fileContent);
    }
}
