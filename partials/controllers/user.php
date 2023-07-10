<?php
require_once __DIR__ . "/base.php";
require_once __DIR__ . '/../utilities/template.php';
require_once __DIR__ . '/../utilities/redirect.php';

class UserController extends Controller
{
    public function __construct(private UserService $userService)
    {
        $this->userService = $userService;
    }

    public function main()
    {
        $users = $this->userService->getAll();
        return template('main', ["users" => $users]);
    }

    public function deleteUser($requestData)
    {
        $userId = $requestData["userId"];
        $this->userService->delete($userId);

        return redirect('/');
    }

    public function addUser($requestData)
    {
        $id = rand();
        $user = new User(
            $id,
            $requestData["name"],
            $requestData["username"],
            $requestData["email"],
            $requestData["phone"],
            $requestData["website"],
            $requestData["addressStreet"],
            $requestData["addressSuite"],
            $requestData["addressCity"],
            $requestData["addressZipcode"],
            $requestData["addressGeoLat"],
            $requestData["addressGeoLng"],
            $requestData["companyName"],
            $requestData["companyCatchPhrase"],
            $requestData["companyBs"]
        );

        $this->userService->add($user);

        return redirect('/');
    }
}
