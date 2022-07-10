<?php

namespace Domain\Transition\Repository;

use App\Models\Transition;

interface TransitionRepositoryInterface
{
    public function findTransitionByLongUrl(string $longUrl): ?Transition;

    public function addTransition(string $token, string $longUrl): ?Transition;
}
