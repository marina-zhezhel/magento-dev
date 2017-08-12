<?php
namespace Training\Test\Plugin;

class FooterPlugin
{
    protected $copyright;
    public function aroundGetCopyright(\Magento\Theme\Block\Html\Footer $subject, callable $proceed)
    {
        $this->copyright = 'Customized copyright!';
        $returnValue = $proceed();
        return  $this->copyright;
    }
}