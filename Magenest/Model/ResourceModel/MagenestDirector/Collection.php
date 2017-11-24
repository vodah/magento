<?php

namespace Magenest\Magenest\Model\ResourceModel\MagenestDirector;
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
        $this->_init('Magenest\Magenest\Model\MagenestDirector',
            'Magenest\Magenest\Model\ResourceModel\MagenestDirector');
    }
}