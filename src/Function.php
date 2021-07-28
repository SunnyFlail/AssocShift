<?php

/**
 * Shifts off value of array, that is associated with provided key, and returns it
 * 
 * This function DOESN'T update array's key order
 * 
 * This function will reset() the array pointer of the input array after use.
 * 
 * @param string $key Key, whose value you want to get
 * @param array $array Reference to array
 * 
 * @return mixed Value shifted off the array
 */
function array_assoc_shift(string $key, array &$array): mixed
{
    $value = $array[$key];
    unset($array[$key]);
    reset($array);
    return $value;
}