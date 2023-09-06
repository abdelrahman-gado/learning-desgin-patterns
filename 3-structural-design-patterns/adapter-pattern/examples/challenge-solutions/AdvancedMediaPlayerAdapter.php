<?php

declare(strict_types=1);

require_once "MediaPlayer.php";
require_once "AdvancedMediaPlayer.php";

class AdvancedMediaPlayerAdapter implements MediaPlayer
{
    private AdvancedMediaPlayer $advMediaPlayer;

    public function __construct(AdvancedMediaPlayer $advMediaPlayer)
    {
        $this->advMediaPlayer = $advMediaPlayer; 
    }

    public function play(string $audioType, string $filename)
    {
        $this->advMediaPlayer->loadFilename($filename);
        $this->advMediaPlayer->listen();
    }
}