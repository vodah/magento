<?php
namespace Magenest\Movie\Model\ResourceModel\Magenest;
/**
 * Subscription Collection
 */
class Collection extends
    \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    /**
     * Initialize resource collection
     *
     * @return void
     */
    public function _construct() {
        $this->_init('Magenest\Movie\Model\Magenest',
            'Magenest\Movie\Model\ResourceModel\Magenest');
    }
}