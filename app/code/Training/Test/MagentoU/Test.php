<?php
namespace Training\Test\MagentoU;

class Test
{
    // protected $eventManager;
    protected $productRepository;
    protected $productFactory;
    protected $session;
    protected $trainingProductRepository;
    protected $justAParameter;
    public function __construct(
        //   \Magento\Framework\Event\Manager $eventManager,
        \Magento\Catalog\Api\ProductRepositoryInterface $productRepository,
        \Magento\Catalog\Model\ProductFactory $productFactory,
        \Magento\Checkout\Model\Session $session,
        \Training\Test\Api\ProductRepositoryInterface $trainingProductRepository,
        $justAParameter = false,
        array $data = []
        ) {
            //    $this->eventManager = $eventManager;
            $this->justAParameter = $justAParameter;
            $this->productRepository = $productRepository;
            $this->productFactory = $productFactory;
            $this->session = $session;
            $this->trainingProductRepository = $trainingProductRepository;
            $this->justAParameter = $justAParameter;
            $this->data = $data;
    }
    public function displayParam () {
        echo '<pre>'; print_r($this->data); echo '</pre>';
    }
    /*public function startObserver()
    {
        $params = [];
        $this->eventManager->dispatch('controller_action_predispatcha', $params);
        return true;
    }*/
}