<?php

namespace Magenest\Magenest\Block\Adminhtml\MagenestDirector;

use    Magento\Backend\Block\Widget\Grid as WidgetGrid;

class    Grid extends \Magento\Backend\Block\Widget\Grid\Extended
{
    /**
     * @var    \Magenest\Magenest\Model\ResourceModel\MagenestDirector\Collection
     */
    protected $_subscriptionCollection;

    /**
     * @param    \Magento\Backend\Block\Template\Context $context
     * @param    \Magento\Backend\Helper\Data $backendHelper
     * @param
    \Magenest\Magenest\Model\ResourceModel\MagenestDirector\Collection
     * $subscriptionCollection
     * @param    array $data
     */
    public function __construct(
        \Magento\Backend\Block\Template\Context $context,
        \Magento\Backend\Helper\Data $backendHelper,
        \Magenest\Magenest\Model\ResourceModel\MagenestDirector\Collection $subscriptionCollection,
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
            'director_id',
            [
                'header' => __('ID'),
                'index' => 'director_id',
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