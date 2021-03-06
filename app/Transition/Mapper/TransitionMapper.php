<?php

namespace App\Transition\Mapper;

use App\Transition\Models\Transition as TransitionModel;
use Domain\Transition\Entity\Transition;

class TransitionMapper
{
    public function mapDomainToModel(Transition $transitionDomain): TransitionModel
    {
        $model = new TransitionModel();
        $model->id = $transitionDomain->getId();
        $model->token = $transitionDomain->getToken();
        $model->long_url = $transitionDomain->getLongUrl();
        $model->clicks = $transitionDomain->getClicks();
        return $model;
    }

    public function mapModelToDomain(TransitionModel $model): Transition
    {
        $domain = new Transition(
            id: $model->id,
            token: $model->token,
            longUrl: $model->long_url,
            clicks: $model->clicks
        );

        return $domain;
    }
}
