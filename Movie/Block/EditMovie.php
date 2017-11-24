<?php

namespace Magenest\Movie\Block;

use Magento\Framework\View\Element\Template;

class EditMovie extends Template
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

    public function getById()
    {


        $id = $this->getRequest()->getParam('id');
        $objectManager = \Magento\Framework\App\ObjectManager::getInstance();
//        $resultRedirect = $this->resultPageFactory->create();
        $customer = $objectManager->create('Magenest\Movie\Model\MagenestMovie')->load($id);
        $result = $customer->getData();
        return $result;
    }

}