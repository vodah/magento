<?php

namespace Magenest\Test\Setup;

use Magento\Framework\DB\Ddl\Table as Table;

/**
 * DB setup script for TokenBase
 */
class InstallSchema implements \Magento\Framework\Setup\InstallSchemaInterface
{
    /**
     * DB setup code
     *
     * @param \Magento\Framework\Setup\SchemaSetupInterface $setup
     * @param \Magento\Framework\Setup\ModuleContextInterface $context
     * @return void
     */
    public function install(
        \Magento\Framework\Setup\SchemaSetupInterface $setup,
        \Magento\Framework\Setup\ModuleContextInterface $context
    )
    {
        $setup->startSetup();
        /**
         * Create table 'magenest_test_product'
         */
        $table = $setup->getConnection()->newTable(
            $setup->getTable('magenest_test_product')
        )->addColumn(
            'id',
            Table::TYPE_INTEGER,
            null,
            ['identity' => true, 'unsigned' => true, 'nullable' => false, 'primary' => true],
            'ID'
        )->addColumn(
            'product_id',
            \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
            null,
            ['nullable' => false],
            'Product ID'
        )->addColumn(
            'name',
            \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
            null,
            ['nullable' => false],
            'Manufacturer name'
        )->addColumn(
            'address',
            \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
            null,
            ['nullable' => false],
            'Manufacturer address'
        )->addColumn(
            'contact_phone',
            \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
            null,
            ['nullable' => false],
            'Contact phone'
        )->addColumn(
            'contact_name',
            \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
            null,
            ['nullable' => false],
            'Contact personnel’s name'
        )->setComment(
            'manufacturer for each product'
        );
        $setup->getConnection()->createTable($table);
        /**
         * Add index(es)
         */
        $setup->getConnection()->addIndex(
            $setup->getTable('magenest_test_product'),
            $setup->getIdxName(
                $setup->getTable('magenest_test_product'),
                ['id'],
                \Magento\Framework\DB\Adapter\AdapterInterface::INDEX_TYPE_UNIQUE
            ),
            ['id'],
            \Magento\Framework\DB\Adapter\AdapterInterface::INDEX_TYPE_UNIQUE
        );
    }
}