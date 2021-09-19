<?php declare(strict_types=1); //does not allow code conversions

class ArrayUtils{

    public static function removeElement(string $targetElement, array &$targetArray){

        //search element position - strict comparison (third argument)
        $elementPosition = array_search($targetElement, $targetArray, true);

        var_dump($elementPosition);

        //IS_INT prevent the "if" from converting the 0 to false
        if ((is_int($elementPosition)) == false) {

            echo "<p>nonexistent element</p>";

        }else{

            //remove reference of the element position
            /* 
            CAUTION: if nonexistent element (false result in ARRAY_SEARCH method), UNSET method will convert result for 0, 
            and consequently, the [0] position will be unseated (Type juggling), if not resolved.
            */
            unset($targetArray[$elementPosition]);

        } 

    }

}