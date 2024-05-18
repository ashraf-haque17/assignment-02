<?php

    // given array

    $strings = ["Hello", "World", "PHP", "Programming"];
    

    $str  = implode(", ", $strings);
    
    // single word 
    $strHello       = "Hello";
    $strWorld       = "World";
    $strPHP         = "PHP";
    $strProgramming = "Programming";

    // single word length
    $hello          = strlen($strHello);
    $world          = strlen($strWorld);  
    $php            = strlen($strPHP);  
    $programming    = strlen($strProgramming);  
    
    $vowels = ["a", "e", "i", "o", "u"];
    
    
    // single word count
    $countH     = 0;
    $countW     = 0;
    $countPhp   = 0;
    $countPro   = 0;
    
    // Original String Hello
    if (strpos($str, $strHello) !== false)
    {
        for ($i = 0; $i < $hello; $i++)
        {
            if (in_array(strtolower($strHello[$i]), $vowels))
            {
                $countH++;
            }
        }
    }

    // Original String World
    if(strpos($str, $strWorld) !== false)
    {
        for ($i = 0; $i < $world; $i++)
        {
            if (in_array(strtolower($strWorld[$i]), $vowels))
            {
                $countW++;
            }
        }
    }

    // Original String PHP
    if(strpos($str, $strPHP) !== false)
    {
        for ($i = 0; $i < $php; $i++)
        {
            if (in_array(strtolower($strPHP[$i]), $vowels))
            {
                $countPhp++;
            }
        }
    }

    // Original String Programming
    if(strpos($str, $strProgramming) !== false)
    {
        for ($i = 0; $i < $programming; $i++)
        {
            if (in_array(strtolower($strProgramming[$i]), $vowels))
            {
                $countPro++;
            }
        }
    }


    echo "Original String: Hello, ". "Vowel Count: ".$countH.", Reversed String: ".strrev($strHello)."\n";
    echo "Original String: World, ". "Vowel Count: ".$countW.", Reversed String: ".strrev($strWorld)."\n";
    echo "Original String: PHP, ". "Vowel Count: ".$countPhp.", Reversed String: ".strrev($strPHP)."\n";   
    echo "Original String: Programming, ". "Vowel Count: ".$countPro.", Reversed String: ".strrev($strProgramming);
    
