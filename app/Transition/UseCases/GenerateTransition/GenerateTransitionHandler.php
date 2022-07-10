<?php

namespace App\Transition\UseCases\GenerateTransition;

use App\Exceptions\TransitionExistException;
use Domain\Transition\Repository\TransitionRepositoryInterface;
use Domain\Transition\Service\TokenGenerator\TokenGeneratorInterface;

class GenerateTransitionHandler
{
    public function __construct(private TransitionRepositoryInterface $transitionRepository, private TokenGeneratorInterface $tokenGenerator)
    {
    }

    public function handle(GenerateTransitionCommand $command): string
    {

        if ($this->transitionRepository->findTransitionByLongUrl($command->getLongUrl())) {
            throw new TransitionExistException();
        }

        $token = $this->tokenGenerator->generateToken($command->getLongUrl());
        $this->transitionRepository->addTransition($token, $command->getLongUrl());
        return $token;
    }
}
