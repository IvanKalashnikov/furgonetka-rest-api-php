<?php

namespace Kwarcek\FurgonetkaRestApi\Entity\ParcelLocker;

use Kwarcek\FurgonetkaRestApi\Entity\Entity;

/**
 * Class UserData
 * @package Kwarcek\FurgonetkaRestApi\Entity
 */
class UserData extends Entity
{
    public string $name;
    public string $surname;
    public string $email;
    public string $phone;

    public function __construct(
        string $name,
        string $surname,
        string $email,
        string $phone
    ){
        $this->phone = $phone;
        $this->email = $email;
        $this->surname = $surname;
        $this->name = $name;
    }

    public function toArray(): array
    {
        return [
            'name' => $this->name,
            'surname' => $this->surname,
            'email' => $this->email,
            'phone' => $this->phone,
        ];
    }
}
