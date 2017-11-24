<?php

namespace Magenest\Movie\Block;

use Magento\Framework\View\Element\Template;

class EditActor extends Template
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

    public function getById()
    {


        $id = $this->getRequest()->getParam('id');
        $objectManager = \Magento\Framework\App\ObjectManager::getInstance();
        $customer = $objectManager->create('Magenest\Movie\Model\MagenestActor')->load($id);
        $result = $customer->getData();
        return $result;
    }

}