<?php

namespace BrainGames\Games\Calc;

use function \cli\line;
use function \cli\prompt;
use function BrainGames\Kernel\greeting;
use function BrainGames\Kernel\game;

function run($task)
{
    $name = greeting($task);
    $gameData = function () {
        $firstNumber = rand(1, 99);
        $secondNumber = rand(1, 99);
        $operands = array("+", "-", "*");
        $randKey = rand(0, 2);

        $question = "{$firstNumber} {$operands[$randKey]} {$secondNumber}";
        $correct = getCorrect($firstNumber, $secondNumber, $operands[$randKey]);

        return [$question, $correct];
    };
    game($name, $gameData);
}

function getCorrect($firstNumber, $secondNumber, $operand)
{
    $correct = 0;
    switch ($operand) {
        case '+':
            $correct = $firstNumber + $secondNumber;
            break;
        case '-':
            $correct = $firstNumber - $secondNumber;
            break;
        case '*':
            $correct = $firstNumber * $secondNumber;
            break;
    }

    return $correct;
}
