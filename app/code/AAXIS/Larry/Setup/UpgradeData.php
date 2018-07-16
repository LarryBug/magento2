<?php
/**
 * Created by PhpStorm.
 * User: larry
 * Date: 2018/7/16
 * Time: 3:30 PM
 */

namespace AAXIS\Larry\Setup;

use Magento\Framework\Encryption\Encryptor;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;
use Magento\Framework\Setup\UpgradeDataInterface;


class UpgradeData implements UpgradeDataInterface
{
    /**
     * @inheritdoc
     */
    public function upgrade(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
    {
        if (version_compare($context->getVersion(), '2.0.1', '<')) {
            $setup->startSetup();
            $data = [
                ['e_name' => 'name1', 'e_address' => 'add11', 'is_active' => '1', 'created_at' => time(), 'update_time' => time()],
                ['e_name' => 'name2', 'e_address' => 'add22', 'is_active' => '0', 'created_at' => time(), 'update_time' => time()]
            ];
            foreach ($data as $bind) {
                $setup->getConnection()
                    ->update($setup->getTable('larry_test'), $bind);
            }


            $setup->endSetup();
        }
    }
}

