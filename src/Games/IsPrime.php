<?php

namespace BrainGames\Games\IsPrime;

use function BrainGames\Kernel\game;

const TASK_OF_GAME = 'Answer "yes" if given number is prime. Otherwise answer "no".';

function run()
{
    $getGameData = function () {
        $question = rand(1, 50);
        $correct = isPrime($question) ? 'yes' : 'no';

        return [$question, $correct];
    };
    game(TASK_OF_GAME, $getGameData);
}

function isPrime($number)
{
    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i == 0) {
            return false;
        }
    }
    return true;
}
