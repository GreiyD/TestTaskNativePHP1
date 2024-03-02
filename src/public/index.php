<?php

use App\Helpers\Validators\DateValidator;
use App\Models\Product;
use App\Service\PreOrderService;
use App\Service\PriceTagService;
use \App\Models\PreOrder;

require_once '../../vendor/autoload.php';
$config = require_once '../../config/config.php';

$preOrder = new PreOrder("03.03.2024", new PreOrderService(), new DateValidator());
$product = new Product("Left socks", 100, 50 , new PriceTagService($config['markupPercentage']), $preOrder);

echo $product->getPreOrder()->getPreOrder();