<?php

namespace DotSistemas\CronjobManager\Controller\Adminhtml\Jobs;

use Magento\Backend\App\Action;
use Magento\Backend\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;

class Index extends Action
{
    protected $resultPageFactory;

    public function __construct(
        Context $context,
        PageFactory $resultPageFactory
    ) {
        parent::__construct($context);
        $this->resultPageFactory = $resultPageFactory;
    }

    public function execute()
    {
        $resultPage = $this->resultPageFactory->create();
        $resultPage->setActiveMenu('DotSistemas_CronjobManager::job_manager');
        $resultPage->getConfig()->getTitle()->prepend(__('Gerenciar Jobs'));
        return $resultPage;
    }
}
