<?php
    class Translator
    {
        public static function TelFormatter ($telString)
        {
            $telString = trim($telString);
            $telString = trim($telString, "()");
            $telString = trim($telString, "+");
        }
        public static function OnTimeChecker($category, $elDays, $isDried)
        {
            if($category === 0)
                if($elDays >= 5 && $isDried === false)
                    $returnVar = '🥔';
            else if($category === 1)
                if($elDays >= 8 && $isDried === false)
                    $returnVar = '🥔';
            else if($category === 2)
                if($elDays >= 12 && $isDried === false)
                    $returnVar = '🥔';
            else if($category === 3)
                if($elDays >= 18 && $isDried === false)
                    $returnVar = '🥔';
            else
                $returnVar = '🍎';
            return($returnVar);
        }
        public static function CategoryTranslator($categoryid)
        {
            if ($categoryid == 0)
                $returnVar = '0-5kg';
            else if ($categoryid == 1)
                $returnVar = '5-10kg';
            else if($categoryid == 2)
                $returnVar = '10-15kg';
            else if($categoryid == 3)
                $returnVar = '15-20kg';
            else
                $returnVar = 'error:translator.category/exception';
        }
    }
    
?>