<?php
/**
 * Created by PhpStorm.
 * User: larry
 * Date: 2018/7/7
 * Time: 8:07 PM
 */

namespace AAXIS\Larry\Model;

use \Magento\Framework\Model\AbstractModel;

class Job extends AbstractModel
{
    const JOB_ID = 'entity_id';

    /**
     * Prefix of model events names
     *
     * @var string
     */
    protected $_eventPrefix = 'test';

    /**
     * Name of the event object
     *
     * @var string
     */
    protected $_eventObject = 'job';

    /**
     * Name of object id field
     *
     * @var string
     */
    protected $_idFieldName = self::JOB_ID;

    /**
     * Initialize resource model
     *
     * @return void
     */
    protected function _construct()
    {
        //初始化资源模型
        $this->_init('AAXIS\Larry\Model\ResourceModel\Job');
    }
}