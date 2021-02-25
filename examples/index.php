<?php
require_once __DIR__ . '/../vendor/autoload.php';

use Nonagod\Abstractions\CRUDInterface;

class SomeClass implements CRUDInterface {
    public function add( array $data ): ?int {
        // TODO: Implement add() method.
    }

    public function delete( int $id ): ?int {
        // TODO: Implement delete() method.
    }

    public function update( int $id, array $data ): ?int {
        // TODO: Implement update() method.
    }

    public function findOne( int $id ): ?array {
        // TODO: Implement findOne() method.
    }

    public function findMany( array $parameters ): ?array {
        // TODO: Implement findMany() method.
    }

    public function doManyAction( string $action_name, array $action_parameters ): array {
        // TODO: Implement doManyAction() method.
    }
}

var_dump(new SomeClass());