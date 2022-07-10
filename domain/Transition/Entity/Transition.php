<?php

namespace Domain\Transition\Entity;

class Transition
{
    private int $id;
    private string $token;
    private string $longUrl;
    private int $clicks;

    /**
     * @param int $id
     * @param string $token
     * @param string $longUrl
     * @param int $clicks
     */
    public function __construct(int $id, string $token, string $longUrl, int $clicks)
    {
        $this->id = $id;
        $this->token = $token;
        $this->longUrl = $longUrl;
        $this->clicks = $clicks;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getToken(): string
    {
        return $this->token;
    }

    /**
     * @return string
     */
    public function getLongUrl(): string
    {
        return $this->longUrl;
    }

    /**
     * @return int
     */
    public function getClicks(): int
    {
        return $this->clicks;
    }
}
