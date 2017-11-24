<?php

namespace Magenest\Ui\Block\Adminhtml;
class Movie extends \Magento\Backend\Block\Widget\Grid\Container
{
    protected function _construct()
    {
        $this->_blockGroup = 'Magenest_Ui';
        $this->_controller = 'adminhtml_movie';
        $this->_headerText = __('Movies');
        $this->_addButtonLabel = __('Create New Movie');
        parent::_construct();
    }
}