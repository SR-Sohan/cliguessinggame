<?php

    $options = getopt('',['min::',"max::"]);

    $min = $options['min'] ?? 1;
    $max = $options['max'] ?? 100;

    $random = rand($min,$max);

    while (true) {
       $guess = readline("What is correct number?\n");

       if($guess == $random){
        printf("Yes, This number is correct\n",);
        break;
       }else if($guess > $random){
        printf("Chosse smaller number\n",);
       }else{
        printf("Chosse higher number\n",);
       }
    }