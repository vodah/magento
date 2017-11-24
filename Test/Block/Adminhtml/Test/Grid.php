<?php

namespace Magenest\Test\Block\Adminhtml\Test;
class Grid extends \Magento\Backend\Block\Widget\Grid\Extended
{
    /**
     * @var    \Magenest\Test\Model\ResourceModel\Test\Collection
     */
    protected $_subscriptionCollection;

    /**
     * @param    \Magento\Backend\Block\Template\Context $context
     * @param    \Magento\Backend\Helper\Data $backendHelper
     * @param
    \Magenest\Test\Model\ResourceModel\Test\Collection
     * $subscriptionCollection
     * @param    array $data
     */
    public function __construct(
        \Magento\Backend\Block\Template\Context $context,
        \Magento\Backend\Helper\Data $backendHelper,
        \Magenest\Test\Model\ResourceModel\Test\Collection $subscriptionCollection,
        array $data = []
    )
    {
        $this->_subscriptionCollection = $subscriptionCollection;
        parent::__construct($context, $backendHelper, $data);
        $this->setEmptyText(__('No	Movie	Found'));
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
            'id',
            [
                'header' => __('ID'),
                'index' => 'id',
            ]
        );
        $this->addColumn(
            'product_id',
            [
                'header' => __('Product ID'),
                'index' => 'product_id',
            ]
        );
        $this->addColumn(
            'name',
            [
                'header' => __('Name'),
                'index' => 'name',
            ]
        );
        $this->addColumn(
            'address',
            [
                'header' => __('Address'),
                'index' => 'address',
            ]
        );
        $this->addColumn(
            'contact_phone',
            [
                'header' => __('Contact phone'),
                'index' => 'contact_phone',
            ]
        );
        $this->addColumn(
            'contact_name',
            [
                'header' => __('contact name'),
                'index' => 'contact_name',
            ]
        );
        return $this;
    }
}