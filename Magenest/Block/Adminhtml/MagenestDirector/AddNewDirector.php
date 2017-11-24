<?php

namespace Magenest\Magenest\Balock;

use Magento\Framework\View\Element\Template;

class AddNewDirector extends Template
{
    private $_productCollectionFactory;

    public function __construct(
        Template\Context $context,
        \Magenest\Magenest\Model\ResourceModel\MagenestDirector\CollectionFactory $productCollectionFactory,
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