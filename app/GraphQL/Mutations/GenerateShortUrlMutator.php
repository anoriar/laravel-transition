<?php

namespace App\GraphQL\Mutations;

use App\Transition\UseCases\GenerateTransition\GenerateTransitionCommand;
use App\Transition\UseCases\GenerateTransition\GenerateTransitionHandler;
use GraphQL\Type\Definition\ResolveInfo;
use Hashids\Hashids;
use Illuminate\Support\Arr;
use Nuwave\Lighthouse\Support\Contracts\GraphQLContext;

class GenerateShortUrlMutator
{
    public function __construct(private GenerateTransitionHandler $generateTransitionHandler)
    {
    }

    public function resolve($rootValue, array $args, GraphQLContext $context, ResolveInfo $resolveInfo)
    {
        $command = new GenerateTransitionCommand(Arr::first(Arr::only($args, ['long_url'])));
        return $this->generateTransitionHandler->execute($command);
    }
}
