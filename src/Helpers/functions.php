<?php

function getStockStatus(int $quantity): string
{
    if ($quantity <= 0) {
        return 'Out of stock';
    } elseif ($quantity <= 2) {
        return 'Low stock';
    }

    return 'Available';
}

function formatBookTitle(string $title): string
{
    return strtoupper($title);
}

function getTotalQuantity(array $books): int
{
    return array_reduce($books, function ($carry, $book) {
        return $carry + $book['quantity'];
    }, 0);
}

function getAvailableBooks(array $books): array
{
    return array_values(array_filter($books, function ($book) {
        return $book['quantity'] > 0;
    }));
}