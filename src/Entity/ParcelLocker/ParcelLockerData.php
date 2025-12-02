<?php

namespace Kwarcek\FurgonetkaRestApi\Entity\ParcelLocker;

use Kwarcek\FurgonetkaRestApi\Entity\Entity;

/**
 * Class ParcelLockerData
 * @package Kwarcek\FurgonetkaRestApi\Entity
 */
class ParcelLockerData extends Entity
{
    public string $place = '';
    public string $construction = '';
    public string $additionalInfo = '';
    public string $street;
    public string $postcode;
    public string $city;
    public string $size;

    public function __construct(
        string $street,
        string $postcode,
        string $city,
        string $size
    )
    {
        $this->size = $size;
        $this->city = $city;
        $this->postcode = $postcode;
        $this->street = $street;
    }

    public function toArray(): array
    {
        return [
            'street' => $this->street,
            'postcode' => $this->postcode,
            'city' => $this->city,
            'size' => $this->size,
            'place' => $this->place,
            'construction' => $this->construction,
            'additional_info' => $this->additionalInfo,
        ];
    }
}
