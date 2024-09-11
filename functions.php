<?php
declare(strict_types=1);

$books = [
    '2000' => ['price' => 15.50, 'stock' => 5],
    'World Full of HTML' => ['price' => 12.99, 'stock' => 34],
    'JavaScript Time' => ['price' => 9.99, 'stock' => 2],
    'Python Assembly' => ['price' => 15.99, 'stock' => 4],
];

$salesTaxRate = 10;

function needsRestocking(int $stock): string {
    return ($stock < 10) ? 'Yes' : 'No';
}

function computeTotalCost(float $price, int $quantity): float {
    return $price * $quantity;
}

function computeSalesTax(float $price, int $quantity, float $taxRate = 0): float {
    return ($price * $quantity) * ($taxRate / 100);
}
