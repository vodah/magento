<?php

namespace Magenest\Test\Block\Adminhtml;
class Grid extends \Magento\Backend\Block\Widget\Grid\Container
{
    protected function _construct()
    {
        $this->_controller = 'adminhtml_grid';
        $this->_blockGroup = 'Magenest_Test';
        $this->_headerText = __('Grid');
        parent::_construct();
        if ($this->_isAllowedAction('Magenest_Test::save')) {
            $this->buttonList->update('add', 'label', __('Add New Product'));
        } else {
            $this->buttonList->remove('add');
        }
    }

    protected function _isAllowedAction($resourceId)
    {
        return $this->_authorization->isAllowed($resourceId);
    }
}