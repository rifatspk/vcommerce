<?php

namespace App\Contracts;


interface BaseContract
{
    /**
     * Undocumented function
     *
     * @param array $attributes
     * @return void
     */
    public function create(array $attributes);


    /**
     * Undocumented function
     *
     * @param array $attributes
     * @param integer $id
     * @return void
     */
    public function update(array $attributes, int $id);

    /**
     * Undocumented function
     *
     * @param array $columns
     * @param string $orderBy
     * @param string $sortBy
     * @return void
     */
    public function all($columns = array('*'), string $orderBy = 'id', string $sortBy = 'desc');
    /**
     * Undocumented function
     *
     * @param integer $id
     * @return void
     */
    public function find(int $id);

    /**
     * Undocumented function
     *
     * @param integer $id
     * @return void
     */
    public function findOneOrFail(int $id);

    /**
     * Undocumented function
     *
     * @param array $data
     * @return void
     */
    public function findBy(array $data);
    /**
     * Undocumented function
     *
     * @param array $data
     * @return void
     */
    public function findOneBy(array $data);
    /**
     * Undocumented function
     *
     * @param array $data
     * @return void
     */
    public function findOneByOrFail(array $data);
    /**
     * Undocumented function
     *
     * @param integer $id
     * @return void
     */
    public function delete(int $id);
}
