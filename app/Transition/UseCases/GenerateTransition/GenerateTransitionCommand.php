<?php

namespace App\Transition\UseCases\GenerateTransition;

class GenerateTransitionCommand
{
    private string $longUrl;

    /**
     * @param string $longUrl
     */
    public function __construct(string $longUrl)
    {
        $this->longUrl = $longUrl;
    }

    /**
     * @return string
     */
    public function getLongUrl(): string
    {
        return $this->longUrl;
    }
}
