<?php


namespace OpenTechiz\AdminNote\Controller\Test;


class ChildrenTemplateKnockout extends \Magento\Framework\App\Action\Action
{
    protected $pageFactory;
    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        \Magento\Framework\View\Result\PageFactory $pageFactory
    ) {
        $this->pageFactory = $pageFactory;
        parent::__construct($context);
    }

    public function execute()
    {
        $resultPage = $this->pageFactory->create();
        $resultPage->getConfig()->getTitle()->set(__('AdminNote Index'));
        return $resultPage;
    }
}
