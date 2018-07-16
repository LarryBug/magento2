<?php
/**
 * Created by PhpStorm.
 * User: larry
 * Date: 2018/7/12
 * Time: 11:01 PM
 */

namespace AAXIS\Larry\Block;
class Hello extends \Magento\Framework\View\Element\Template
{
    /**
     * @var \Trackingmore\Detrack\Model\UserFactory
     */
    protected $_userFactory;

    /**
     * Hello constructor.
     *
     * @param \Magento\Framework\View\Element\Template\Context $context
     * @param \Trackingmore\Detrack\Model\UserFactory $jobFactory
     */
    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        \AAXIS\Larry\Model\JobFactory $jobFactory
    ) {
        $this->_jobFactory = $jobFactory;
        parent::__construct($context);
    }

    /**
     * @return $this
     */
    public function _prepareLayout() {
        return parent::_prepareLayout();
    }

    /**
     * 测试输出
     */
    public function testOutputAction() {
        echo 'block function !';
    }

    /**
     * 获取用户模型数据
     *
     * @return \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
     */
    public function getJobData() {
        $post = $this->_jobFactory->create();

        $collection = $post->getCollection();

        $jobArr = [];
        foreach ($collection as $item) {
            $jobArr[] = $item->getData();
        }
//        var_dump($jobArr);

        return $jobArr;
    }

}