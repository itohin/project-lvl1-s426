<?php

namespace BrainGames\IsEven;

use function \cli\line;
use function \cli\prompt;

function run()
{
    $name = greeting();
    game($name);
}

function greeting()
{
    line('Welcome to the Brain Games!');
    line('Answer "yes" if number even otherwise answer "no".');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    line("");

    return $name;
}

function isEven($number)
{
    return $number % 2 === 0;
}

function game($name)
{
    $rounds = 3;

    for ($i = 0; $i < $rounds; $i++) {
        $question = rand(1, 99);
        $correct = isEven($question) ? 'yes' : 'no';
        line('Question: ' . $question);
        $answer = prompt('Your answer');

        if ($answer === $correct) {
            line('Correct!');
        } else {
            line("'{$answer}' is wrong answer ;(. Correct answer was '{$correct}'.");
            line("Let's try again, {$name}!");
            return;
        }
    }

    line("Congratulations, {$name}!");
}
