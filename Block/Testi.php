<?php

namespace Erik\CategoryBlockTest\Block;


use Magento\Framework\View\Element\Template;

class Testi extends \Magento\Framework\View\Element\Template
{
    protected $collection;
    public function __construct(Template\Context $context,
                                \Magento\Catalog\Model\ResourceModel\Product\Collection $collection,
                                array $data = [])
    {
        $this->collection = $collection;
        parent::__construct($context, $data);
    }

    public function getCollection() {
        return $this->collection;
    }


}