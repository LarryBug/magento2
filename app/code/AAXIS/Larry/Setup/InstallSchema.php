<?php
/**
 * Created by PhpStorm.
 * User: larry
 * Date: 2018/7/7
 * Time: 8:14 PM
 */

namespace AAXIS\Larry\Setup;

use Magento\Framework\Setup\InstallSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;

/**
 * @codeCoverageIgnore
 */
class InstallSchema implements InstallSchemaInterface
{
    /**
     * {@inheritdoc}
     * @SuppressWarnings(PHPMD.ExcessiveMethodLength)
     */
    public function install(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
        //获取安装器
        $installer = $setup;

        //开始数据库安装
        $installer->startSetup();

        $table = $installer->getConnection()->newTable(
            $installer->getTable('larry_test')
        )->addColumn(
            'e_id',
            \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
            null,
            array('identity' => true, 'nullable' => false, 'primary' => true),
            'Employee ID'
        )->addColumn(
            'e_name',
            \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
            255,
            array('nullable' => false),
            'Employee Name'
        )->addColumn(
            'e_address',
            \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
            '2M',
            array('nullable' => false),
            'Employee Address'
        )->addColumn(
            'is_active',
            \Magento\Framework\DB\Ddl\Table::TYPE_SMALLINT,
            null,
            array(),
            'Active Status'
        )->addColumn(
            'created_at',
            \Magento\Framework\DB\Ddl\Table::TYPE_TIMESTAMP,
            null,
            array(),
            'Creation Time'
        )->addColumn(
            'update_time',
            \Magento\Framework\DB\Ddl\Table::TYPE_TIMESTAMP,
            null,
            array(),
            'Modification Time'
        )->setComment(
            'Employee Table'
        );
        $installer->getConnection()->createTable($table);

        //结束数据库安装
        $installer->endSetup();

    }
}
