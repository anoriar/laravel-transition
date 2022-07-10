<?php

namespace App\Transition\Service\TokenGenerator;

use DateTimeImmutable;
use Domain\Transition\Service\TokenGenerator\TokenGeneratorInterface;
use Hashids\HashidsInterface;

class HashIdsTokenGenerator implements TokenGeneratorInterface
{
    public function __construct(private HashidsInterface $hashIds)
    {
    }

    public function generateToken(string $longUrl): string
    {
        $curDatetime = new DateTimeImmutable();
        return $this->hashIds->encode(crc32($longUrl), $curDatetime->getTimestamp());
    }
}
