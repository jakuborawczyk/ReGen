<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>main</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <section class="openingsContainer">
        <div class="openingsImageContainer">

        </div>
        <aside class="collageContainer desktopOnly">
            <div class="topCollage">
                <?php for ($i = 0; $i < 3; $i++): ?>
                    <div class="collageIMG" style="background: url('<?php echo $imagePaths[$i]; ?>') lightgray 0px -146.186px / 100% 235.971% no-repeat;"></div>
                <?php endfor; ?>
            </div>
            <div class="midCollage">
                <?php for ($i = 3; $i < 6; $i++): ?>
                    <div class="collageIMG" style="background: url('<?php echo $imagePaths[$i]; ?>') lightgray 0px -146.186px / 100% 235.971% no-repeat;"></div>
                <?php endfor; ?>
            </div>
            <div class="botCollage">
                <?php for ($i = 6; $i < 9; $i++): ?>
                    <div class="collageIMG" style="background: url('<?php echo $imagePaths[$i]; ?>') lightgray 0px -146.186px / 100% 235.971% no-repeat;"></div>
                <?php endfor; ?>
            </div>
        </aside>
    </section>

    <section class="categoryContainer">
        <?php for ($i = 9; $i < 14; $i++): ?>
            <div class="categoryIMG" style="background: url('<?php echo $imagePaths[$i]; ?>')"></div>
        <?php endfor; ?>
        </div>
    </section>
</body>

</html>

<?php

$imagePaths = [
    // Images 1-9 are for Collage
    'assets/collage1.jpg',  //Collage Image 1
    'assets/collage2.jpg',  //Collage Image 2
    'assets/collage3.jpg',  //Collage Image 3
    'assets/collage4.jpg',  //Collage Image 4
    'assets/collage5.jpg',  //Collage Image 5
    'assets/collage6.jpg',  //Collage Image 6
    'assets/collage7.jpg',  //Collage Image 7
    'assets/collage8.jpg',  //Collage Image 8
    'assets/collage9.jpg',  //Collage Image 9

    // Images for Categories 1-5
    'assets/category1.jpg', //Category Image 1
    'assets/category2.jpg', //Category Image 2
    'assets/category3.jpg', //Category Image 3
    'assets/category4.jpg', //Category Image 4
    'assets/category5.jpg', //Category Image 5
];
