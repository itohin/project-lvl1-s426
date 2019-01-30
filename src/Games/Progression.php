<?php

namespace BrainGames\Games\Progression;

use function BrainGames\Kernel\game;

const TASK_OF_GAME = 'What number is missing in the progression?';

function run()
{
    echo 'Progression';
}

//function run()
//{
//    $gameData = function () {
//        $firstNumber = rand(1, 99);
//        $secondNumber = rand(1, 99);
//
//        $question = "{$firstNumber} {$secondNumber}";
//        $correct = gcd($firstNumber, $secondNumber);
//
//        return [$question, $correct];
//    };
//    game(TASK_OF_GAME, $gameData);
//}
//
//function gcd(int $first, int $second)
//{
//    if ($second == 0) {
//        return $first;
//    }
//    return gcd($second, $first % $second);
//}
