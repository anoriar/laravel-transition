<?php

namespace App\Transition\Service\TokenGenerator;

use Domain\Transition\Service\TokenGenerator\TokenGeneratorInterface;
use Hashids\HashidsInterface;

class HashIdsTokenGenerator implements TokenGeneratorInterface
{
    public function __construct(private HashidsInterface $hashIds)
    {
    }

    public function generateToken(string $longUrl): string
    {
        return $this->hashIds->encode(intval($longUrl, 36));
    }
}
