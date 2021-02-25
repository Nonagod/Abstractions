<?php
namespace Nonagod\Abstractions;

use Nonagod\Abstractions\ManyActionAbstractionInterface;

/**
 * Interface RWXInterface
 * @package Nonagod\Abstractions
 */
interface RWXInterface extends ManyActionAbstractionInterface {
    /**
     * @param string $from - what to read from
     * @return mixed
     */
    public function read( string $from );

    /**
     * @param string $to - where to write
     * @param $data - what to write
     * @return bool
     */
    public function write( string $to, $data ) : bool;

    /**
     * @param string $what - what to execute
     * @return bool|null
     */
    public function execute( string $what ) :? bool;
}