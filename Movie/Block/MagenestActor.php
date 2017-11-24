<?php

namespace Magenest\Movie\Block;

use Magento\Framework\View\Element\Template;

class MagenestActor extends Template
{
    private $_actorCollectionFactory;

    public function __construct(
        Template\Context $context,
        \Magenest\Movie\Model\ResourceModel\MagenestActor\CollectionFactory $_actorCollectionFactory,
        array $data = [])
    {
        parent::__construct($context, $data);
        $this->_actorCollectionFactory = $_actorCollectionFactory;
        $this->_isScopePrivate = true;
    }

    public function getActor()
    {
        $collection = $this->_actorCollectionFactory->create();
        return $collection->getData();
    }

}