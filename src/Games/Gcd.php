<?php

namespace BrainGames\Games\Gcd;

use function BrainGames\Kernel\game;

const TASK_OF_GAME = 'Find the greatest common divisor of given numbers.';

function run()
{
    $gameData = function () {
        $firstNumber = rand(1, 99);
        $secondNumber = rand(1, 99);

        $question = "{$firstNumber} {$secondNumber}";
        $correct = gcd($firstNumber, $secondNumber);

        return [$question, $correct];
    };
    game(TASK_OF_GAME, $gameData);
}

function gcd(int $first, int $second)
{
    if ($second == 0) {
        return $first;
    }
    return gcd($second, $first % $second);
}
