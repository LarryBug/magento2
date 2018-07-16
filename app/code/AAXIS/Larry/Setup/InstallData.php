<?php
/**
 * Created by PhpStorm.
 * User: larry
 * Date: 2018/7/16
 * Time: 3:30 PM
 */

namespace AAXIS\Larry\Setup;

use Magento\Framework\Setup\InstallDataInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;


class InstallData implements InstallDataInterface
{
    /**
     * 安装方法
     *
     * @param ModuleDataSetupInterface $setup   数据表迁移接口
     * @param ModuleContextInterface   $context 上下文
     *
     * @return bool
     */
    public function install(
        ModuleDataSetupInterface $setup,
        ModuleContextInterface $context
    ) {
        $data = [
            ['e_name' => 'name1', 'e_address' => 'add1', 'is_active' => '1', 'created_at' =>time(), 'update_time'=>'']
        ];
        foreach ($data as $bind) {
            $setup->getConnection()
                ->insertForce($setup->getTable('larry_test'), $bind);
        }
    }

}