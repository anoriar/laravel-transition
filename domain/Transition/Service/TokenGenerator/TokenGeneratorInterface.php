<?php

namespace Domain\Transition\Service\TokenGenerator;

interface TokenGeneratorInterface
{
    public function generateToken(string $longUrl): string;
}
