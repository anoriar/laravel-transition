<?php

namespace App\Transition\Repository;

use App\Transition\Mapper\TransitionMapper;
use App\Transition\Models\Transition as TransitionModel;
use Domain\Transition\Entity\Transition;
use Domain\Transition\Repository\TransitionRepositoryInterface;

class TransitionRepository implements TransitionRepositoryInterface
{
    public function __construct(private TransitionMapper $mapper)
    {
    }

    public function addTransition(string $token, string $longUrl): Transition
    {
        $transitionModel = TransitionModel::create(
            [
            'token'     => $token,
            'long_url'    => $longUrl
            ]
        );
        return $this->mapper->mapModelToDomain($transitionModel);
    }

    public function findTransitionByLongUrl(string $longUrl): ?Transition
    {
        $model = TransitionModel::where('long_url', $longUrl)->first();

        return $model ? $this->mapper->mapModelToDomain($model) : null;
    }

    public function findTransitionByToken(string $longUrl): ?Transition
    {
        $model = TransitionModel::where('token', $longUrl)->first();
        return $model ? $this->mapper->mapModelToDomain($model) : null;
    }

    public function increaseClicksCount(Transition $transition): void
    {
        TransitionModel::where('id', $transition->getId())->update(['clicks' => $transition->getClicks() + 1]);
    }
}
