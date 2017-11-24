<?php

namespace Magenest\Movie\Block\Adminhtml\Magenestactor;

use    Magento\Backend\Block\Widget\Grid as WidgetGrid;

class    Grid extends \Magento\Backend\Block\Widget\Grid\Extended
{
    /**
     * @var    \Magenest\Movie\Model\ResourceModel\Magenestactor\Collection
     */
    protected $_subscriptionCollection;

    /**
     * @param    \Magento\Backend\Block\Template\Context $context
     * @param    \Magento\Backend\Helper\Data $backendHelper
     * @param
    \Magenest\Movie\Model\ResourceModel\Magenestactor\Collection
     * $subscriptionCollection
     * @param    array $data
     */
    public function __construct(
        \Magento\Backend\Block\Template\Context $context,
        \Magento\Backend\Helper\Data $backendHelper,
        \Magenest\Movie\Model\ResourceModel\Magenestactor\Collection $subscriptionCollection,
        array $data = []
    )
    {
        $this->_subscriptionCollection = $subscriptionCollection;
        parent::__construct($context, $backendHelper, $data);
        $this->setEmptyText(__('No	Actor	Found'));
    }

    /**
     *    Initialize    the    subscription    collection
     *
     * @return    WidgetGrid
     */
    protected function _prepareCollection()
    {
        $this->setCollection($this->_subscriptionCollection);
        return parent::_prepareCollection();
    }

    /**
     *    Prepare    grid    columns
     *
     * @return    $this
     */
    protected function _prepareColumns()
    {
        $this->addColumn(
            'actor_id',
            [
                'header' => __('ID'),
                'index' => 'actor_id',
            ]
        );
        $this->addColumn(
            'name',
            [
                'header' => __('Name'),
                'index' => 'name',
            ]
        );

        return $this;
    }
}