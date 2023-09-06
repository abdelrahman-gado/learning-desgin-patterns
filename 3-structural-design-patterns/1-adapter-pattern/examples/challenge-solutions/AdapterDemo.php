<?php

declare(strict_types=1);

require_once "MediaPlayer.php";
require_once "AdvancedMediaPlayer.php";
require_once "AdvancedMediaPlayerAdapter.php";

class AdapterDemo
{
    public static function main()
    {
        $audioPlayer = new AudioPlayer();
        $audioPlayer->play("mp3", "jasonsMusic.mp3");

        $mp4Player = new Mp4Player();
        $advancedMediaPlayerAdapter1 = new AdvancedMediaPlayerAdapter($mp4Player);
        $advancedMediaPlayerAdapter1->play("mp4", "alone.mp4");


        $vlcPlayer = new VlcPlayer();
        $advancedMediaPlayerAdapter2 = new AdvancedMediaPlayerAdapter($vlcPlayer);
        $advancedMediaPlayerAdapter2->play("vlc", "abc.vlc");

    }
}

AdapterDemo::main();