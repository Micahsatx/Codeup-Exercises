<?php


$books = array(
    'The Hobbit' => array(
        'published' => 1937,
        'author' => 'J. R. R. Tolkien',
        'pages' => 310
    ),
    'Game of Thrones' => array(
        'published' => 1996,
        'author' => 'George R. R. Martin',
        'pages' => 835
    ),
    'The Catcher in the Rye' => array(
        'published' => 1951,
        'author' => 'J. D. Salinger',
        'pages' => 220
    ),
    'A Tale of Two Cities' => array(
        'published' => 1859,
        'author' => 'Charles Dickens',
        'pages' => 544
    )
);


foreach($books as $booksKeys => $booksValues){
    if ($booksValues['published'] <= 1950){
        echo "Title: $booksKeys\n";  
        foreach($booksValues as $individualBooksKey => $individualBooksValue){
            echo "Above book: $individualBooksKey is $individualBooksValue\n";
        }
        echo "~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~" . PHP_EOL;
    }
}


foreach($books as $booksKeys => $booksValues){
        echo "Title: $booksKeys\n";
        foreach($booksValues as $individualBooksKey => $individualBooksValue){
            echo "This book: $individualBooksKey is $individualBooksValue\n";
        }
    if($booksValues['pages'] >= 500){   
        echo "Buckle down, this is a long book\n";
    } else {
        echo "Good book, but it is pretty short.\n";
    }
        echo "~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~" . PHP_EOL;
}