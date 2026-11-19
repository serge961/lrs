<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        body{
            
    display: grid;
    place-items: center;
    height: 100vh;
    margin: 0;
    font-family: sans-serif;
}
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <?php 
    $books = [
        [
            "author"=>"F Scott Fitzgerald",
            "title"=>"Great Gatby",
            "realiseYear"=> 1925,
            "purchase_price"=> 10.99,
            "url_purchase_link"=>"https://www.amazon.com/Greatest-Gatsy/dp/23657"
        ],
        [
            "author"=>"Harper Lee",
            "title"=>"To Kill a Mockingbird",
            "realiseYear"=> 1960,
            "purchase_price"=> 12.99,
            "url_purchase_link"=>"https://www.amazon.com/To-Kill-a-Mockingbird/dp/23657"
        ],
        [
            "author"=>"George Orwell",
            "title"=>"1984",
            "realiseYear"=> 1948,
            "purchase_price"=> 9.99,
            "url_purchase_link"=>"https://www.amazon.com/1984/dp/23657"
        ],
        [
            "author"=>"Jane Austen",
            "title"=>"Pride and Prejudice",
            "realiseYear"=> 2013,
            "purchase_price"=> 11.99,
            "url_purchase_link"=>"https://www.amazon.com/Pride-and-Prejudice/dp/23657"
        ],
        [
            "author"=>"J.D. Salinger",
            "title"=>"The Catcher in the Rye",
            "realiseYear"=> 1951,
            "purchase_price"=> 8.99,
            "url_purchase_link"=>"https://www.amazon.com/The-Catcher-in-the-Rye/dp/23657"
        ]
    ];



    $fiterNyAuthor = array_filter($books, function($book){
        return $book['author'] === "Harper Lee";
    });

    ?>
    <ul>
        <?php foreach ($fiterNyAuthor as $book):?>
            <li>
                <a href="<?= $book['url_purchase_link'] ?>">
                    <?= $book['title'] ?> by <?= $book['author'] ?> - $<?= number_format($book['purchase_price'], 2) ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>


</body>
</html>