<?php
namespace Magenest\Movie\Model;

///**
// * Movie Model
// *
// * @method \Magenest\Movie\Model\Resource\Page _getResource()
// * @method \Magenest\MovieModel\Resource\Page getResource()
// */
class AddNewMovie extends \Magento\Framework\Model\AbstractModel{
    /**
     * Initialize resource model
     *
     * @return void
     */
    protected function _construct(){
        $this->_init('Magenest\Movie\Model\ResourceModel\AddNewMovie');
    }

}