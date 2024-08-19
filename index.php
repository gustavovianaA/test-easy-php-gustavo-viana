<?php

//Helper Functions
function showResults($word){

    echo "Word: <strong>{$word->word}</strong>. Result: ";
    echo '<pre>';
    if($word->valid)
        var_dump($word->detectCapitalUse());
    else
        echo 'This is not a valid word!';
    echo '</pre>'; 
    echo '<hr>';   
}

function maximumCharacters(){
    $word = '';
    for($i = 1 ; $i <= 101 ; $i++){
        $word .= 'a';
    }
    return $word;
}

//Solution class and tests
require_once('Solution.php');

echo "<h1>Detect Capital Tests</h1>";

$word = new Solution('USA');
showResults($word);

$word = new Solution('teste');
showResults($word);

$word = new Solution('Teste');
showResults($word);

$word = new Solution('GusTavo');
showResults($word);

$word = new Solution('ResultadoFalSO');
showResults($word);

//This tests cannot be computed due to the constraints
echo "<h2>This tests cannot be computed due to the constraints</h2>";
$word = new Solution('');
showResults($word);

$word = new Solution(maximumCharacters());
showResults($word);

$word = new Solution('123Gustavo0');
showResults($word);
