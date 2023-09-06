<?php

declare(strict_types=1);

interface AdvancedMediaPlayer
{
    public function loadFilename(string $filename);
    public function listen();
}


class VlcPlayer implements AdvancedMediaPlayer
{
    private $myFile;

    public function loadFilename(string $filename)
    {
        $this->myFile = $filename;
    }
    public function listen()
    {
        echo "Playing VLC file. Name: " . $this->myFile . PHP_EOL;
    }
}

class Mp4Player implements AdvancedMediaPlayer
{
    private $myFile;

    public function loadFilename(string $filename)
    {
        $this->myFile = $filename;
    }
    public function listen()
    {
        echo "Playing MP4 file. Name: " . $this->myFile . PHP_EOL;
    }
}