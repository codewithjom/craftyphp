<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php 
    $books = [
      [
        'name' => 'Do Androids Dream of Electric Sheep',
        'author' => 'Philip K. Dick',
        'releaseYear' => 1968,
        'purchaseURL' => 'http://example.com'
      ],
      [
        'name' => 'Project Hail Mary',
        'author' => 'Andy Weir',
        'releaseYear' => 2021,
        'purchaseURL' => 'http://example.com'
      ],
      [
        'name' => 'The Martian',
        'author' => 'Andy Weir',
        'releaseYear' => 2011,
        'purchaseURL' => 'http://example.com'
      ],
    ];

    $filteredBooks = array_filter($books, function ($book) {
      return $book['author'] === 'Andy Weir';
    });
  ?>

  <ul>
    <?php foreach ($filteredBooks as $book) : ?>
      <li>
        <a href="<?= $book['purchaseURL'] ?>">
          <?= $book['name']; ?> (<?= $book['releaseYear']; ?>) - By <?= $book['author']; ?>
        </a>
      </li>
    <?php endforeach; ?>
  </ul>
</body>
</html>