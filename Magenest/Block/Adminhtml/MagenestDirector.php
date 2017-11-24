<?php

namespace Magenest\Magenest\Block\Adminhtml;
class    MagenestDirector extends \Magento\Backend\Block\Widget\Grid\Container
{
    protected function _construct()
    {
        $this->_blockGroup = 'Magenest_Magenest';
        $this->_controller = 'adminhtml_magenestdirector';
        parent::_construct();
    }
}