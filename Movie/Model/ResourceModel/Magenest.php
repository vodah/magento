<?php
namespace Magenest\Movie\Model\ResourceModel;
class Magenest extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb {
    public function _construct() {
        $this->_init('magenest_movie', 'movie_id');
    }
}