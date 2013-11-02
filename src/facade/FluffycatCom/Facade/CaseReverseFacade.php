<?php
namespace FluffycatCom\Facade;

class CaseReverseFacade {

    public static function reverseStringCase($stringIn) {

        // str -> array -> reverse -> string
        $arrayFromString = ArrayStringFunctions::stringToArray($stringIn);

        $reversedCaseArray = ArrayCaseReverse::reverseCase($arrayFromString);

        $reversedCaseString = ArrayStringFunctions::arrayToString($reversedCaseArray);

        return $reversedCaseString;
    }

