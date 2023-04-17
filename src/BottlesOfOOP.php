<?php

namespace BottlesOfOop;

class BottlesOfOOP
{
    public function run(): string
    {
        $song = '';
        for ($i=99; $i>=0; $i--) {
            $song .= $this->verse($i);
        }
        return $song;
    }

    private function verse(int $i)
    {
        $initialBeersOnTheWall = $i !== 0 ? (string) $i : "No more";
        $beersLeftOnTheWall = $i - 1 !== 0 ? (string) $i-1 : "no more";

        $verseAction = "Take one down and pass it around";
        if ($i === 0) {
            $verseAction = "Go to the store and buy some more";
            $beersLeftOnTheWall = "99";
        }

        return "$initialBeersOnTheWall bottles of beer on the wall, " . strtolower($initialBeersOnTheWall) . " bottles of beer.\n" .
            "{$verseAction}, $beersLeftOnTheWall bottles of beer on the wall.\n\n";
    }
}
