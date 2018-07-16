<?php
/**
 * Created by PhpStorm.
 * User: larry
 * Date: 2018/7/7
 * Time: 11:07 AM
 */

namespace AAXIS\Larry\Controller\Index;
use Magento\Framework\App\Action\Action;

class Index extends Action {
    /** @var  \Magento\Framework\View\Result\Page */
    protected $resultPageFactory;
    /*** @param \Magento\Framework\App\Action\Context $context*/
    public function __construct(\Magento\Framework\App\Action\Context $context,
                                \Magento\Framework\View\Result\PageFactory $resultPageFactory)     {
        $this->resultPageFactory = $resultPageFactory;
        parent::__construct($context);
    }


    /**
     * @return \Magento\Framework\View\Result\PageFactory
     */
    public function execute()
    {
        echo "This is Larry_Test_Controller_Index_Index!!!";
        die();

    }
}