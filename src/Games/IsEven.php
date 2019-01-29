<?php

namespace BrainGames\Games\IsEven;

use function \cli\line;
use function \cli\prompt;
use function BrainGames\Kernel\greeting;
use function BrainGames\Kernel\game;

function run($task)
{
    $name = greeting($task);
    $gameData = function () {
        $question = rand(1, 99);
        $correct = isEven($question) ? 'yes' : 'no';

        return [$question, $correct];
    };
    game($name, $gameData);
}

function isEven($number)
{
    return $number % 2 === 0;
}
