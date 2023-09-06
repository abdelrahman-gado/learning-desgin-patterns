<?php

declare(strict_types=1);

interface Turkey
{
    public function gobble(): void;
    public function fly(): void;
}


class WildTurkey implements Turkey
{
    public function gobble(): void
    {
        echo "Gobble gobble" . PHP_EOL;
    }

    public function fly(): void
    {
        echo "I am flying a short distances" . PHP_EOL;
    }
}