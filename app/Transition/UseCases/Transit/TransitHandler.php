<?php

namespace App\Transition\UseCases\Transit;

use Domain\Transition\Repository\TransitionRepositoryInterface;

class TransitHandler
{
    public function __construct(private TransitionRepositoryInterface $transitionRepository)
    {
    }

    public function handle(TransitCommand $command): ?string
    {
        if ($transition = $this->transitionRepository->findTransitionByToken($command->getToken())) {
            $this->transitionRepository->increaseClicksCount($transition);
            return $transition->getLongUrl();
        }
        return null;
    }
}
