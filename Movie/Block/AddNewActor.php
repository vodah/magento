<?php

namespace Magenest\Movie\Block;

use Magento\Framework\View\Element\Template;

class AddNewActor extends Template
{
    private $_productCollectionFactory;

    public function __construct(
        Template\Context $context,
        \Magenest\Movie\Model\ResourceModel\MagenestActor\CollectionFactory $productCollectionFactory,
        array $data = [])
    {
        parent::__construct($context, $data);
        $this->_productCollectionFactory = $productCollectionFactory;
        $this->_isScopePrivate = true;
    }

    public function getActor()
    {
        $collection = $this->_productCollectionFactory->create();
        return $collection;
    }

}