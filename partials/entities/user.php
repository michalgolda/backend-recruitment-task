<?php
require_once __DIR__ . '/base.php';

class User implements Entity
{
    public function __construct(
        private int $id,
        private string $name,
        private string $username,
        private string $email,
        private string $phone,
        private string $website,
        private string $addressStreet,
        private string $addressSuite,
        private string $addressCity,
        private string $addressZipcode,
        private string $addressGeoLat,
        private string $addressGeoLng,
        private string $companyName,
        private string $companyCatchPhrase,
        private string $companyBs
    ) {
        $this->id = $id;
        $this->name = $name;
        $this->username = $username;
        $this->email = $email;
        $this->phone = $phone;
        $this->website = $website;
        $this->addressStreet = $addressStreet;
        $this->addressSuite = $addressSuite;
        $this->addressCity = $addressCity;
        $this->addressZipcode = $addressZipcode;
        $this->addressGeoLat = $addressGeoLat;
        $this->addressGeoLng = $addressGeoLng;
        $this->companyName = $companyName;
        $this->companyCatchPhrase = $companyCatchPhrase;
        $this->companyBs = $companyBs;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getUsername(): string
    {
        return $this->username;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function getPhone(): string
    {
        return $this->phone;
    }

    public function getWebsite(): string
    {
        return $this->website;
    }

    public function getAddressStreet(): string
    {
        return $this->addressStreet;
    }

    public function getAddressSuite(): string
    {
        return $this->addressSuite;
    }

    public function getAddressCity(): string
    {
        return $this->addressCity;
    }

    public function getAddressZipcode(): string
    {
        return $this->addressZipcode;
    }

    public function getAddressGeoLat(): string
    {
        return $this->addressGeoLat;
    }

    public function getAddressGeoLng(): string
    {
        return $this->addressGeoLng;
    }

    public function getCompanyName(): string
    {
        return $this->companyName;
    }

    public function getCompanyCatchPhrase(): string
    {
        return $this->companyCatchPhrase;
    }

    public function getCompanyBs(): string
    {
        return $this->companyBs;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function setUsername(string $username): void
    {
        $this->username = $username;
    }

    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    public function setPhone(string $phone): void
    {
        $this->phone = $phone;
    }

    public function setWebsite(string $website): void
    {
        $this->website = $website;
    }

    public function setAddressStreet(string $addressStreet): void
    {
        $this->addressStreet = $addressStreet;
    }

    public function setAddressSuite(string $addressSuite): void
    {
        $this->addressSuite = $addressSuite;
    }

    public function setAddressCity(string $addressCity): void
    {
        $this->addressCity = $addressCity;
    }

    public function setAddressZipcode(string $addressZipcode): void
    {
        $this->addressZipcode = $addressZipcode;
    }

    public function setAddressGeoLat(string $addressGeoLat): void
    {
        $this->addressGeoLat = $addressGeoLat;
    }

    public function setAddressGeoLng(string $addressGeoLng): void
    {
        $this->addressGeoLng = $addressGeoLng;
    }

    public function setCompanyName(string $companyName): void
    {
        $this->companyName = $companyName;
    }

    public function setCompanyCatchPhrase(string $companyCatchPhrase): void
    {
        $this->companyCatchPhrase = $companyCatchPhrase;
    }

    public function setCompanyBs(string $companyBs): void
    {
        $this->companyBs = $companyBs;
    }

    public function jsonSerialize()
    {
        $userArray = [
            "id" => $this->id,
            "name" => $this->name,
            "username" => $this->username,
            "email" => $this->email,
            "phone" => $this->phone,
            "website" => $this->website,
            "address" => [
                "street" => $this->addressStreet,
                "suite" => $this->addressSuite,
                "city" => $this->addressCity,
                "zipcode" => $this->addressZipcode,
                "geo" => [
                    "lat" => $this->addressGeoLat,
                    "lng" => $this->addressGeoLng
                ]
            ],
            "company" => [
                "name" => $this->companyName,
                "catchPhrase" => $this->companyCatchPhrase,
                "bs" => $this->companyBs
            ]
        ];

        return $userArray;
    }

    public static function fromArray($userArray)
    {
        $user = new User(
            $userArray["id"],
            $userArray["name"],
            $userArray["username"],
            $userArray["email"],
            $userArray["phone"],
            $userArray["website"],
            $userArray["address"]["street"],
            $userArray["address"]["suite"],
            $userArray["address"]["city"],
            $userArray["address"]["zipcode"],
            $userArray["address"]["geo"]["lat"],
            $userArray["address"]["geo"]["lng"],
            $userArray["company"]["name"],
            $userArray["company"]["catchPhrase"],
            $userArray["company"]["name"],
            $userArray["company"]["bs"],
        );

        return $user;
    }
}
