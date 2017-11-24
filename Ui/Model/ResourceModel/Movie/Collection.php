<?php

namespace Magenest\Ui\Model\ResourceModel\Movie;
/**
 * Subscription Collection
 */
class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    /**
     * Initialize resource collection
     *
     * @return void
     */
    public function _construct()
    {
        $this->_init('Magenest\Ui\Model\Movie', 'Magenest\Ui\Model\ResourceModel\Movie');
    }
}