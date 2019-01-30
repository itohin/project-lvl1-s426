<?php

namespace BrainGames\Games\Progression;

use function BrainGames\Kernel\game;

const TASK_OF_GAME = 'What number is missing in the progression?';
const PROGRESSION_LENGTH = 10;

function run()
{
    $getGameData = function () {
        $firstPosition = rand(0, 9);
        $interval = rand(2, 7);

        return getProgression($firstPosition, $interval);
    };
    game(TASK_OF_GAME, $getGameData);
}

function getProgression($firstPosition, $interval)
{
    $progression[] = $firstPosition;

    for ($i = 1; $i < PROGRESSION_LENGTH; $i++) {
        $progression[$i] = $progression[$i - 1] + $interval;
    }

    $correct = $progression[$firstPosition];
    $progression[$firstPosition] = '..';

    return [implode(' ', $progression), $correct];
}
