<?php

class Solution
{

    public $word;
    public $valid;

    public function __construct($word)
    {
        $this->word = $word;
        $this->valid = $this->validateWord();
    }

    /**
     * Aply the constraints to the target word
     * 
     * @param String $word
     * @return Boolean
     */
    private function validateWord()
    {

        //Validate lenght constraint
        if (strlen($this->word) < 1 || strlen($this->word) > 100) {
            return false;
        }

        //Validate Characters constraint
        if(!preg_match("/^[a-zA-Z]+$/", $this->word)){
            return false;
        }

        return true;
    }

    /**
     * @param String $word
     * @return Boolean
     */
    public function detectCapitalUse() {
        
        if(!$this->valid){
            return null; 
        }

        //Check if all letters are upper or lower case
        if(ctype_upper($this->word) || ctype_lower($this->word)){
            return true;
        }
        
        //Check if the first letter is upper case and the other lower case
        $firstLetter = $this->word[0];
        $otherLetters = substr($this->word, - ( strlen($this->word) - 1 ) );
        
        if(ctype_upper($firstLetter) && ctype_lower($otherLetters)){
            return true;
        }
        
        return false;
    }
}
