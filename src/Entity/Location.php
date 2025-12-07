<?php

namespace Kwarcek\FurgonetkaRestApi\Entity;

/**
 * Class Location
 * @package Kwarcek\FurgonetkaRestApi\Entity
 */
class Location extends Entity
{
    public ?Coordinate $coordinate = null;
    public ?string $searchPhrase = null;
    public Address $address;
    public ?float $pointsMaxDistance = 10.00;

    public function toArray(): array
    {
        $location = [
          'coordinates' => $this->coordinate->toArray(),
          'search_phrase' => $this->searchPhrase,
          'address' => $this->address->toArray(),
          'points_max_distance' => $this->pointsMaxDistance,
        ];

        foreach ($location as $k => $v) {
            if ($v === null) {
                unset($location[$k]);
            }
        }

        return $location;
    }
}
