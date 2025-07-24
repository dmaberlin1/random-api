<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Services\RandomNumberService;
use Illuminate\Http\JsonResponse;
class RandomNumberController extends Controller
{
    public function __construct(private readonly RandomNumberService $service) {}

    public function generate(): JsonResponse
    {
        $dto = $this->service->generate();
        return response()->json($dto->toArray(), 201);
    }

    public function retrieve(string $id): JsonResponse
    {
        try {
            $dto = $this->service->retrieve($id);
            return response()->json($dto->toArray());
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException) {
            return response()->json(['error' => 'ID not found'], 404);
        }
    }
}
