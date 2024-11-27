<?php

$imagePaths = [
    // Images 1-9 are for Collage
    'assets/CG_bilder/desktop/collage1.webp',  //Collage Image 1
    'assets/Desktop-webp/collage2.png',  //Collage Image 2
    'assets/Desktop-webp/collage3.webp',  //Collage Image 3
    'assets/Desktop-webp/collage4.png',  //Collage Image 4
    'assets/Desktop-webp/collage5.webp',  //Collage Image 5
    'assets/Desktop-webp/collage6.png',  //Collage Image 6
    'assets/Desktop-webp/collage7.webp',  //Collage Image 7
    'assets/Desktop-webp/collage8.png',  //Collage Image 8
    'assets//CG_bilder/desktop/collage9.webp',  //Collage Image 9

    //Images for Categories 1-5
    'assets/Desktop-webp/category1.webp', //Category Image 1
    'assets/Desktop-webp/category2.webp', //Category Image 2
    'assets/CG_bilder/desktop/category3.webp', //Category Image 3
    'assets/CG_bilder/desktop/category4.webp', //Category Image 4
    'assets/CG_bilder/desktop/category5.webp', //Category Image 5
];
$categoryTexts = [
    'Halsband',
    'Armband',
    'Örhängen',
    'Ringar',
    'Designa dina egna smycken'
];
$collageColors=[
    '#F5F5F5',//collage 2
    '#373737',//collage 4
    '#EBAF6A',//collage6
    '#F8B382'//collage8
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
                <div class="topTextContainer">
                    <p class="openingsText">"Med ReGen utstrålar jag</p>
                    <p class="secondOpeningsText">SJÄLVFÖRTROENDE"</p>
                </div>
                <div class="subheadingContainer">
                    <p class="subheadingText">”Jag trodde inte ett hållbart smycke kunde göra så stor skillnad”</p>
                    <div class="subheadingStarsContainer desktopOnlySmaller">
                        <?php for ($i = 0; $i < 5; $i++):   ?>
                            <svg xmlns="http://www.w3.org/2000/svg" width="29" height="28" viewBox="0 0 29 28" fill="none">
                                <path d="M14.5 0L17.8677 10.3647H28.7658L19.9491 16.7705L23.3168 27.1353L14.5 20.7295L5.68322 27.1353L9.05093 16.7705L0.234152 10.3647H11.1323L14.5 0Z" fill="white" />
                            </svg>
                        <?php endfor; ?>
                    </div>
                </div>
            </div>
        </div>
        <aside class="collageContainer">
            <div class="topCollage">
                <?php for ($i = 0; $i < 3; $i++): ?>
                    <div class="collageIMG" style="background: url('<?php echo $imagePaths[$i]; ?>');  background-size: cover; 
            background-position: center; 
            background-repeat: no-repeat;  "></div>
                <?php endfor; ?>
            </div>
            <div class="midCollage">
                <?php for ($i = 3; $i < 6; $i++): ?>
                    <div class="collageIMG" style="background: url('<?php echo $imagePaths[$i]; ?>'); background-size: cover; 
            background-position: center; 
            background-repeat: no-repeat; "></div>
                <?php endfor; ?>
            </div>
            <div class="botCollage">
                <?php for ($i = 6; $i < 9; $i++): ?>
                    <div class="collageIMG" style="background: url('<?php echo $imagePaths[$i]; ?>'); background-size: cover; 
            background-position: center; 
            background-repeat: no-repeat; "></div>
                <?php endfor; ?>
            </div>
        </aside>
    </section>

    <section class="categoryContainer">
        <?php for ($i = 9; $i < 13; $i++): ?>
            <div
                class="categoryIMG"
                href="#"
                style="
                background-image: linear-gradient(180deg, rgba(0, 0, 0, 0.00) 50%, rgba(0, 0, 0, 0.50) 100%), url('<?php echo $imagePaths[$i]; ?>');
                background-color: lightgray; 
                background-size: cover; 
                background-repeat: no-repeat;">
                <span class="categoryText"><?php echo $categoryTexts[$i - 9]; ?></span>
            </div>
        <?php endfor; ?>
        <div
            class="categoryIMG fiftCategory"
            href="#"
            style="
            background-image: linear-gradient(180deg, rgba(0, 0, 0, 0.00) 50%, rgba(0, 0, 0, 0.50) 100%), url('<?php echo $imagePaths[13]; ?>');
            background-color: lightgray; 
            background-size: cover; 
            background-repeat: no-repeat;
        ">
            <span class="categoryText"><?php echo $categoryTexts[4]; ?></span>
        </div>
    </section>


</body>

</html>