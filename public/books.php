<?php

$books = require __DIR__ . '/../src/Data/books.php';
require __DIR__ . '/../src/Helpers/functions.php';

$totalBooks = count($books);
$totalQuantity = getTotalQuantity($books);
$availableBooks = getAvailableBooks($books);
$availableCount = count($availableBooks);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Books</title>
</head>
<body>
    <h1>Library Books</h1>

    <h2>Statistics</h2>
    <ul>
        <li>Total titles: <?php echo $totalBooks; ?></li>
        <li>Total quantity: <?php echo $totalQuantity; ?></li>
        <li>Available books: <?php echo $availableCount; ?></li>
    </ul>

    <h2>Book List</h2>

    <?php foreach ($books as $book): ?>
        <div style="margin-bottom: 16px; padding: 8px; border: 1px solid #ccc;">
            <p><strong>Title:</strong> <?php echo formatBookTitle($book['title']); ?></p>
            <p><strong>Author:</strong> <?php echo $book['author']; ?></p>
            <p><strong>Category:</strong> <?php echo $book['category']; ?></p>
            <p><strong>Year:</strong> <?php echo $book['year']; ?></p>
            <p><strong>Quantity:</strong> <?php echo $book['quantity']; ?></p>
            <p><strong>Status:</strong> <?php echo getStockStatus($book['quantity']); ?></p>
        </div>
    <?php endforeach; ?>
</body>
</html>