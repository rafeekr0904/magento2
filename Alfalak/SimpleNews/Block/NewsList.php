<?php

namespace Alfalak\SimpleNews\Block;

use Magento\Framework\View\Element\Template;
use Alfalak\SimpleNews\Model\NewsFactory;

class NewsList extends Template
{
   /**
    * @var \Tutorial\SimpleNews\Model\NewsFactory
    */
   protected $_newsFactory;

   /**
    * @param Template\Context $context
    * @param NewsFactory $newsFactory
    * @param array $data
    */
   public function __construct(
      Template\Context $context,
      NewsFactory $newsFactory,
      array $data = []
   ) {
        $this->_newsFactory = $newsFactory;
        parent::__construct($context, $data);
   }

   /**
     * Set news collection
     */
    protected  function _construct()
    {
        parent::_construct();
        $collection = $this->_newsFactory->create()->getCollection()
            ->setOrder('id', 'DESC');
        $this->setCollection($collection);
    }

   /**
     * @return $this
     */
    protected function _prepareLayout()
    {
        parent::_prepareLayout();
        /** @var \Magento\Theme\Block\Html\Pager */
        $pager = $this->getLayout()->createBlock(
           'Magento\Theme\Block\Html\Pager',
           'simplenews.news.list.pager'
        );
        //get values of current page
        $page=($this->getRequest()->getParam('p'))? $this->getRequest()->getParam('p') : 1;
        $pageSize=($this->getRequest()->getParam('limit'))? $this->getRequest()->getParam('limit') : 5;
        $pager->setAvailableLimit(array(5=>5,10=>10,15=>15))
				->setShowPerPage(true)
				->setCollection($this->getCollection());
        $this->getCollection()->setPageSize($pageSize);
        $this->getCollection()->setCurPage($page);
        $this->setChild('pager', $pager);
        $this->getCollection()->load();

        return $this;
    }
   /**
     * @return string
     */
    public function getPagerHtml()
    {
        return $this->getChildHtml('pager');
    }
}
