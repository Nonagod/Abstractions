<?php
namespace Nonagod\Abstractions;

/**
 * Interface ManyActionAbstractionInterface
 * @package Nonagod\Abstractions
 */
interface ManyActionAbstractionInterface {
    /**
     * Method using for call same action many times
     *
     * @param string $action_name - action name (depends from abstraction)
     * @param array $action_parameters - parameters for each action call. array item must be array.
     * @return array - array of a action results with action call parameters
     */
    public function doManyAction( string $action_name, array $action_parameters ) : array;
}