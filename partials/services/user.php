<?php
class UserService
{
    public function __construct(private Repository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function getAll()
    {
        return $this->userRepository->findAll();
    }

    public function add(User $user)
    {
        $this->userRepository->save($user);
    }

    public function delete(int $userId)
    {
        $user = $this->userRepository->findById($userId);
        if ($user == NULL) {
            throw new DomainException("Not found User entity", 404);
        }


        $this->userRepository->delete($user);
    }
}
