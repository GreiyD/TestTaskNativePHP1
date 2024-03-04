<?php

use App\Helpers\Validators\DateValidator;
use App\Models\Product;
use App\Repository\ProductRepository;
use App\Service\PreOrderService;
use App\Service\PriceTagService;
use \App\Models\PreOrder;

require_once '../../vendor/autoload.php';
$config = require_once '../../config/config.php';

$preOrder = new PreOrder("05.03.2024", new PreOrderService(), new DateValidator());
$productRepository = new ProductRepository($config['filePath']);

$productData = $productRepository->getProductById(1);

$product = new Product($productData['name'], $productData['costPrice'], $productData['stockQuantity'] , new PriceTagService($config['markupPercentage']), $preOrder);
