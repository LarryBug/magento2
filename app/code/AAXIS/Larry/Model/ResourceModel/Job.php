<?php
/**
 * Created by PhpStorm.
 * User: larry
 * Date: 2018/7/7
 * Time: 8:09 PM
 */

namespace AAXIS\Larry\Model\ResourceModel;

use \Magento\Framework\Model\ResourceModel\Db\AbstractDb;
class Job extends AbstractDb
{
    /**
     * Initialize resource model
     *
     * @return void
     */
    protected function _construct()
    {
        //创建用户资源模型
        // Table Name and Primary Key column
        $this->_init('larry_test', 'entity_id');
    }

}