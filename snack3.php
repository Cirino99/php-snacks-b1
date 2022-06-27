<?php
$posts = [
    '10/01/2019' => [
        [
            'title' => 'Post 1',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 1'
        ],
        [
            'title' => 'Post 2',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 2'
        ],
        [
            'title' => 'Post 3',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 3'
        ],
        [
            'title' => 'Post 4',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 4'
        ],
        [
            'title' => 'Post 5',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 5'
        ],
    ],
    '10/02/2019' => [
        [
            'title' => 'Post 6',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 6'
        ],
        [
            'title' => 'Post 7',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 7'
        ],
        [
            'title' => 'Post 8',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 8'
        ],
        [
            'title' => 'Post 9',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 9'
        ],
    ],
    '15/05/2019' => [
        [
            'title' => 'Post 10',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 10'
        ],
        [
            'title' => 'Post 11',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 11'
        ],
        [
            'title' => 'Post 11',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 11'
        ]
    ],
];
$date = array_keys($posts);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>

<body>
    <section>
        <?php
        for ($i = 0; $i < count($posts); $i++) {
            $post = $posts[$date[$i]]; ?>
            <div class="d-flex">
                <div>
                    <span><?= $date[$i] ?></span>
                </div>
                <div class="d-flex flex-wrap ms-4">
                    <?php
                    for ($j = 0; $j < count($post); $j++) { ?>
                        <div class="my-post">
                            <span><?= $post[$j]['author'] ?></span>
                            <span><?= $post[$j]['title'] ?></span>
                            <p><?= $post[$j]['text'] ?></p>
                        </div>
                    <?php } ?>
                </div>
            </div>
        <?php } ?>
    </section>
</body>

</html>