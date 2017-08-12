<?php
namespace Training\Test\Plugin;

class ProductPlugin
{
    public function afterGetPrice(\Magento\Catalog\Model\Product $subject, $price)
    {
        return $price*100;
    }
}