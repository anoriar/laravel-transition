<?php

namespace Domain\Transition\Repository;

use Domain\Transition\Entity\Transition;

interface TransitionRepositoryInterface
{
    public function findTransitionByLongUrl(string $longUrl): ?Transition;

    public function findTransitionByToken(string $longUrl): ?Transition;

    public function addTransition(string $token, string $longUrl): Transition;

    public function increaseClicksCount(Transition $transition): void;
}
