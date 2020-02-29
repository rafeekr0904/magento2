<?php

namespace Alfalak\SimpleNews\Controller\Adminhtml\News;

use Alfalak\SimpleNews\Controller\Adminhtml\News;

class Index extends News
{
    /**
     * @return void
     */
   public function execute()
   {
	   //echo 'aaa';exit;
      if ($this->getRequest()->getQuery('ajax')) {
            $this->_forward('grid');
            return;
        }
        //echo 'vvvvv';exit;
        /** @var \Magento\Backend\Model\View\Result\Page $resultPage */
        $resultPage = $this->_resultPageFactory->create();
        $resultPage->setActiveMenu('Alfalak_SimpleNews::main_menu');
        $resultPage->getConfig()->getTitle()->prepend(__('Simple News'));

        return $resultPage;
   }
}
