<?php

use App\Models\Product;
use App\Service\PriceTagService;

require_once '../../vendor/autoload.php';
$config = require_once '../../config/config.php';

$product = new Product("Left socks", 100, 50 , 5, new PriceTagService($config['markupPercentage']));
echo $product->getSellingPrice();