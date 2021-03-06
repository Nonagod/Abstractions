<?php
namespace Nonagod\Abstractions;

use Nonagod\Abstractions\ManyActionAbstractionInterface;

/**
 * Interface CRUDInterface
 *
 * Describes an abstraction for content management. (elements|items|posts|sections or something same)
 * @package Nonagod\Abstractions
 */
interface CRUDInterface extends ManyActionAbstractionInterface {
    /**
     * Action adding new content.
     *
     * @param array $data - item data for adding
     * @return int|null on success return 'new_item_id' OR 'null' in error case
     */
    public function add( array $data ) :? int; // insert, create

    /**
     * Action deleting content.
     *
     * @param int $id - exist content item id
     * @return int|null - 'deleted_item_id' on success, 'null' on an error
     */
    public function delete( int $id ) :? int; // remove

    /**
     * Action updating exist content.
     *
     * @param int $id - exist content item id
     * @param array $data - a new data of exist content item
     * @return int|null - 'updated_item_id' on success, 'null' on an error
     */
    public function update( int $id, array $data ) :? int;

    /**
     * Action finding one item by id.
     *
     * @param int $id - exist content item id
     * @return array|null - 'item_data_array' on success, 'null' on an error
     */

    public function findOne( int $id ) :? array; // read get load
    /**
     * Action finding items by filter.
     *
     * @param array $parameters - action parameters for filtering|ordering and so on
     * @return array|null - 'items_array' on success, 'null' on an error
     */
    public function findMany( array $parameters ) :? array;
}