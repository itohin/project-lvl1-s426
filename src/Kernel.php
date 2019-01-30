<?php

namespace BrainGames\Kernel;

use function \cli\line;
use function \cli\prompt;

const ROUNDS = 3;

function greeting($task)
{
    line('Welcome to the Brain Games!');
    line($task);
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    line("");

    return $name;
}

function game($task, $gameData)
{
    $name = greeting($task);

    for ($i = 0; $i < ROUNDS; $i++) {
        [$question, $correct] = $gameData();
        line('Question: ' . $question);
        $answer = prompt('Your answer');

        if ($answer == $correct) {
            line('Correct!');
        } else {
            line("'{$answer}' is wrong answer ;(. Correct answer was '{$correct}'.");
            line("Let's try again, {$name}!");
            return;
        }
    }

    line("Congratulations, {$name}!");
}
