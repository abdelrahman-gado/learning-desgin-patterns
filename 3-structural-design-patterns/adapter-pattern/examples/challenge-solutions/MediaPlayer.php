<?php

declare(strict_types=1);


interface MediaPlayer
{
    public function play(string $audioType, string $filename);
}

class AudioPlayer implements MediaPlayer
{
    public function play(string $audioType, string $filename)
    {
        if ($audioType === "mp3") {
            echo "Playing the " . $filename . ".mp3" . PHP_EOL;
        } else {
            echo "Invalid media " . $audioType . " format not supported" . PHP_EOL;
        }
    }
}