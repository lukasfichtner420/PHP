<?php

class Block
{
    public int $id;
    public string $previousHash;
    public string $hash;
    public mixed $content;

    public function __construct(int $id, string $previousHash, mixed $content)
    {
        $this->id = $id;
        $this->previousHash = $previousHash;
        $this->content = $content;
        $this->hash = $this->calculateHash();
    }

    private function calculateHash(): string
    {
        $data = $this->id . $this->previousHash . serialize($this->content);
        return hash('sha256', $data);
    }
}
