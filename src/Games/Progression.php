<?php

namespace BrainGames\Games\Progression;

use function BrainGames\Kernel\game;

const TASK_OF_GAME = 'What number is missing in the progression?';
const PROGRESSION_LENGTH = 10;
const MIN_POSITION = 0;
const MAX_POSITION = 10;
const MIN_STEP = 2;
const MAX_STEP = 7;

function run()
{
    $getGameData = function () {
        $firstPosition = rand(MIN_POSITION, MAX_POSITION);
        $interval = rand(MIN_STEP, MAX_STEP);

        $progression = getProgression($firstPosition, $interval, PROGRESSION_LENGTH);
        $correct = $progression[$firstPosition];
        $progression[$firstPosition] = '..';
        $question = implode(' ', $progression);

        return [$question, $correct];
    };
    game(TASK_OF_GAME, $getGameData);
}

function getProgression($firstPosition, $interval, $length)
{
    $progression = [];

    for ($i = 0; $i < $length; $i++) {
        $progression[] = $firstPosition + $interval * $i;
    }

    return $progression;
}
