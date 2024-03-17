<?php
if (isset($_SESSION['productSerialized'])):
    $product = unserialize($_SESSION['productSerialized']);

    $stockQuantity = $product->getStockQuantity();
    $preOrderQuantity = $product->getPreOrder()->getPreOrder();
    $balanceStock = $stockQuantity - $preOrderQuantity;
    ?>
    <p>Наименование товара: <?php echo $product->getName(); ?></p>
    <p>Остаток на складе: <?php echo $balanceStock ?></p>
    <p>Текущая цена: <?php echo $product->getSellingPrice(); ?></p>
<?php endif;
if (isset($_SESSION['exception'])):
    echo $_SESSION['exception'];
endif;
session_destroy(); ?>

