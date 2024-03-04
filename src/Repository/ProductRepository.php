<?php

namespace App\Repository;

use PhpOffice\PhpSpreadsheet\IOFactory;

class ProductRepository extends ExcelRepository
{
    public function getProductById($productId): ?array
    {
        $reader = IOFactory::createReader('Xlsx');
        $spreadsheet = $reader->load($this->getFilePath());
        $reader->setReadDataOnly(true);

        $worksheet = $spreadsheet->getActiveSheet();
        $highestRow = $worksheet->getHighestRow();


        for ($row = 2; $row <= $highestRow; $row++) {

            $productIdTable = $worksheet->getCell('A' . $row)->getValue();

            if ($productIdTable == $productId) {
                $name = $worksheet->getCell('B' . $row)->getValue();
                $costPrice = $worksheet->getCell('C' . $row)->getValue();
                $stockQuantity = $worksheet->getCell('D' . $row)->getValue();

                return ['name' => $name, 'costPrice' => $costPrice, 'stockQuantity' => $stockQuantity];
            }
        }

        return null;
    }

}