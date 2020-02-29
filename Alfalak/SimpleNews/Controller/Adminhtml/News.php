<?php

namespace Alfalak\SimpleNews\Controller\Adminhtml;

use Magento\Backend\App\Action;
use Magento\Backend\App\Action\Context;
use Magento\Framework\Registry;
use Magento\Framework\View\Result\PageFactory;
use Alfalak\SimpleNews\Model\NewsFactory;

class News extends Action
{
    /**
     * Core registry
     *
     * @var \Magento\Framework\Registry
     */
    protected $_coreRegistry;

    /**
     * Result page factory
     *
     * @var \Magento\Framework\View\Result\PageFactory
     */
    protected $_resultPageFactory;

    /**
     * News model factory
     *
     * @var \Tutorial\SimpleNews\Model\NewsFactory
     */
    protected $_newsFactory;

    /**
     * @param Context $context
     * @param Registry $coreRegistry
     * @param PageFactory $resultPageFactory
     * @param NewsFactory $newsFactory
     */
    public function __construct(
        Context $context,
        Registry $coreRegistry,
        PageFactory $resultPageFactory,
        NewsFactory $newsFactory
    ) {
		//echo 'haii';exit;
       parent::__construct($context);
        $this->_coreRegistry = $coreRegistry;
        $this->_resultPageFactory = $resultPageFactory;
        $this->_newsFactory = $newsFactory;
    }

    /**
     * News access rights checking
     *
     * @return bool
     */
       
     public function execute()
    {
		$pageFactory = $this->_resultPageFactory->create();
		 return $pageFactory;
		
	}
    protected function _isAllowed()
    {
        return $this->_authorization->isAllowed('Alfalak_SimpleNews::manage_news');
    }
}
