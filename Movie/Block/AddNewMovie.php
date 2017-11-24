<?php

namespace Magenest\Movie\Block;

use Magento\Framework\View\Element\Template;

class AddNewMovie extends Template
{
    private $_productCollectionFactory;

    public function __construct(
        Template\Context $context,
        \Magenest\Movie\Model\ResourceModel\AddNewMovie\CollectionFactory $productCollectionFactory,
        array $data = [])
    {
        parent::__construct($context, $data);
        $this->_productCollectionFactory = $productCollectionFactory;
        $this->_isScopePrivate = true;
    }

    public function getMovies()
    {
        $collection = $this->_productCollectionFactory->create();
        return $collection;
    }

}