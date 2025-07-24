<?php

namespace App\Services;

use App\Dto\RandomNumberDto;
use App\Models\RandomNumber;
use Random\RandomException;

class RandomNumberService
{
    /**
     * @throws RandomException
     */
    public function generate(): RandomNumberDto
    {
        $random = RandomNumber::create([
            'number' => random_int(1, 100),
        ]);

        return RandomNumberDto::fromModel($random);
    }

    public function retrieve(string $id): RandomNumberDto
    {
        $model = RandomNumber::findOrFail($id);
        return RandomNumberDto::fromModel($model);
    }
}
