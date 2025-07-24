<?php

namespace App\Dto;

use App\Models\RandomNumber;

class RandomNumberDto
{
    public function __construct(
        public readonly string $id,
        public readonly int $number,
    ) {}

    public static function fromModel(RandomNumber $model): self
    {
        return new self($model->id, $model->number);
    }

    public function toArray(): array
    {
        return [
            'id' => $this->id,
            'number' => $this->number,
        ];
    }
}
