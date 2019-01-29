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

function game($name)
{
    for ($i = 0, $counter = 0; $i < 3; $i++) {
        $number = rand(1, 99);
        $correct = $number % 2 === 0 ? 'yes' : 'no';
        line('Question: ' . $number);
        $result = prompt('Your answer');

        if ($result === $correct) {
            $counter++;
            line('Correct!');
        } else {
            line("'{$result}' is wrong answer ;(. Correct answer was '{$correct}'.");
            line("Let's try again, {$name}!");
            return;
        }
    }

    line("Congratulations, {$name}!");
}
