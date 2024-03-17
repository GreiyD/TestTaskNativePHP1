<?php
session_start();

use App\Helpers\Validators\DateValidator;
use App\Models\PreOrder;
use App\Models\Product;
use App\Repository\ProductRepository;
use App\Service\PreOrderService;
use App\Service\PriceTagService;

require_once '../vendor/autoload.php';
$config = require_once '../config/config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    try {
        try {
            $preOrder = new PreOrder($_POST['dateInput'], new PreOrderService(), new DateValidator());
        }catch (InvalidArgumentException $e) {
            $_SESSION['exception'] =  'Ошибка: Не валидная дата';
        } catch (Exception $e) {
            $_SESSION['exception'] = 'Ошибка: Неверная дата ' . $e->getMessage();
        }finally {
            header("Location: ../");
        }

        $productRepository = new ProductRepository($config['filePath']);
        $productData = $productRepository->getProductById($_POST['productId']);
        $product = new Product($productData['name'], $productData['costPrice'], $productData['stockQuantity'], new PriceTagService($config['markupPercentage']), $preOrder);

        $_SESSION['productSerialized'] = serialize($product);

        header("Location: ../");
    } catch (Exception $e) {
        $_SESSION['exception'] = 'Ошибка:' . $e->getMessage();
        header("Location: ../");
    }

}