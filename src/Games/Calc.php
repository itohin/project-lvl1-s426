<?php

namespace BrainGames\Games\Calc;

use function BrainGames\Kernel\game;

const TASK_OF_GAME = 'What is the result of the expression?';

function run()
{
    $gameData = function () {
        $firstNumber = rand(1, 99);
        $secondNumber = rand(1, 99);
        $operands = array("+", "-", "*");
        $randKey = rand(0, 2);

        $question = "{$firstNumber} {$operands[$randKey]} {$secondNumber}";
        $correct = getCorrect($firstNumber, $secondNumber, $operands[$randKey]);

        return [$question, $correct];
    };
    game(TASK_OF_GAME, $gameData);
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
