<?php
/**
 * Created by PhpStorm.
 * User: larry
 * Date: 2018/7/7
 * Time: 8:10 PM
 */

namespace AAXIS\Larry\Model\ResourceModel\Job;

use \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{

    protected $_idFieldName = \AAXIS\Larry\Model\Job::JOB_ID;

    /**
     * Define resource model
     *
     * @return void
     */
    protected function _construct()
    {
        //创建用户集合
        $this->_init('AAXIS\Larry\Model\Job',
            'AAXIS\Larry\Model\ResourceModel\Job');
    }
}