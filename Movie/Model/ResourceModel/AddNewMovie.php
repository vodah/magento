<?php
namespace Magenest\Movie\Model\ResourceModel;

/**
 * Ecommerce Resource Model
 */
class AddNewMovie extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb{
    /**
     * Initialize resource model
     *
     * @return void
     */
    protected function _construct(){
        $this->_init('magenest_movie', 'movie_id');
    }
}