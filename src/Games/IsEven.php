<?php

namespace BrainGames\Games\IsEven;

use function BrainGames\Kernel\game;

const TASK_OF_GAME = 'Answer "yes" if number even otherwise answer "no".';

function run()
{
    $getGameData = function () {
        $question = rand(1, 99);
        $correct = isEven($question) ? 'yes' : 'no';

        return [$question, $correct];
    };
    game(TASK_OF_GAME, $getGameData);
}

function isEven($number)
{
    return $number % 2 === 0;
}
