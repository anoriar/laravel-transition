<?php

namespace App\Exceptions;

use Exception;
use Nuwave\Lighthouse\Exceptions\RendersErrorsExtensions;

class TransitionExistException extends Exception implements RendersErrorsExtensions
{
    const TRANSITION_EXIST_MESSAGE = "This transition exists";

    public function __construct()
    {
        parent::__construct(self::TRANSITION_EXIST_MESSAGE, 404);
    }

    public function isClientSafe()
    {
        return true;
    }

    public function getCategory()
    {
        return 'transition';
    }

    public function extensionsContent(): array
    {
        return [];
    }
}
