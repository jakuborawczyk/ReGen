<?php

$imagePaths = [
    // Images 1-9 are for Collage
    'assets/Desktop-webp/collage1.webp',  //Collage Image 1
    'assets/Desktop-webp/collage2.webp',  //Collage Image 2
    'assets/Desktop-webp/collage3.webp',  //Collage Image 3
    'assets/Desktop-webp/collage4.webp',  //Collage Image 4
    'assets/Desktop-webp/collage5.webp',  //Collage Image 5
    'assets/Desktop-webp/collage6.webp',  //Collage Image 6
    'assets/Desktop-webp/collage7.webp',  //Collage Image 7
    'assets/collage8.webp',  //Collage Image 8
    'assets/Desktop-webp/collage9.webp',  //Collage Image 9

    // // Images for Categories 1-5
    // 'assets/Desktop-webp/category1.jpg', //Category Image 1
    // 'assets/Desktop-webp/category2.jpg', //Category Image 2
    // 'assets/Desktop-webp/category3.jpg', //Category Image 3
    // 'assets/Desktop-webp/category4.jpg', //Category Image 4
    // 'assets/Desktop-webp/category5.jpg', //Category Image 5
];
?>

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
            <div class="openingsImageText">
                <p class="openingsText">"Med ReGen utstrålar jag</p>
                <p class="secondOpeningsText">SJÄLVFÖRTROENDE"</p>
                <div class="subheadingContainer">
                    
                </div>
            </div>
        </div>
        <aside class="collageContainer">
            <div class="topCollage">
                <?php for ($i = 0; $i < 3; $i++): ?>
                    <div class="collageIMG" style="background: url('<?php echo $imagePaths[$i]; ?>') "></div>
                <?php endfor; ?>
            </div>
            <div class="midCollage">
                <?php for ($i = 3; $i < 6; $i++): ?>
                    <div class="collageIMG" style="background: url('<?php echo $imagePaths[$i]; ?>')"></div>
                <?php endfor; ?>
            </div>
            <div class="botCollage">
                <?php for ($i = 6; $i < 9; $i++): ?>
                    <div class="collageIMG" style="background: url('<?php echo $imagePaths[$i]; ?>')"></div>
                <?php endfor; ?>
            </div>
        </aside>
    </section>

    <section class=" categoryContainer">
        <?php for ($i = 9; $i < 13; $i++): ?>
            <div class="categoryIMG" style="background: url('<?php echo $imagePaths[$i]; ?>')"></div>
        <?php endfor; ?>
        <div class="desktopOnly categoryIMG " style="background-image: url('assets/category5.jpg"></div>
        </div>
    </section>
</body>

</html>