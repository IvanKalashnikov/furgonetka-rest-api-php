<?php

namespace Kwarcek\FurgonetkaRestApi\Entity;

/**
 * Class Filter
 * @package Kwarcek\FurgonetkaRestApi\Entity
 */
class Filter extends Entity
{
    public ?array $services = null;
    public ?array $pointTypes = null;
    public ?MapBound $mapBound = null;
    public string $type = '';
    public ?string $pointId = null;

    public function toArray(): array
    {
        $filters = [
            'services' => $this->services,
            'point_types' => $this->pointTypes,
            'map_bounds' => ($this->mapBound === null) ? null : $this->mapBound->toArray(),
            'type' => $this->type,
            'point_id' => $this->pointId,
        ];

        foreach ($filters as $key => $value) {
            if ($value === null) {
                unset($filters[$key]);
            }
        }

        return $filters;
    }
}