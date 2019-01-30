<?php

namespace BrainGames\Games\Calc;

use function BrainGames\Kernel\game;

const TASK_OF_GAME = 'What is the result of the expression?';

function run()
{
    $getGameData = function () {
        $firstNumber = rand(1, 99);
        $secondNumber = rand(1, 99);
        $operands = array("+", "-", "*");
        $randKey = array_rand($operands);

        $question = "{$firstNumber} {$operands[$randKey]} {$secondNumber}";
        $correct = calculate($firstNumber, $secondNumber, $operands[$randKey]);

        return [$question, $correct];
    };
    game(TASK_OF_GAME, $getGameData);
}

function calculate($firstNumber, $secondNumber, $operand)
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
