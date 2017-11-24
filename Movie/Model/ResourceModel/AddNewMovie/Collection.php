<?php

/**
 * AddNewMovie Resource Collection
 */
namespace Magenest\Movie\Model\ResourceModel\AddNewMovie;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection{
    /**
     * Resource initialization
     *
     * @return void
     */
    protected function _construct(){
        $this->_init('Magenest\Movie\Model\AddNewMovie', 'Magenest\Movie\Model\ResourceModel\AddNewMovie');
    }
}