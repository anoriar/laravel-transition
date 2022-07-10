<?php

namespace App\Transition\Repository;

use App\Models\Transition;
use Domain\Transition\Repository\TransitionRepositoryInterface;

class TransitionRepository implements TransitionRepositoryInterface
{
    public function addTransition(string $token, string $longUrl): ?Transition
    {
        return Transition::create(
            [
            'token'     => $token,
            'long_url'    => $longUrl
            ]
        );
    }

    public function findTransitionByLongUrl(string $longUrl): ?Transition
    {
        return Transition::where('long_url', $longUrl)->first();
    }
}
