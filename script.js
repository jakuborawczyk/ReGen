function changeColor() {
    const colorButton = document.getElementById("configurator-jewelry");
    colorButton.classList.toggle("silver");
    colorButton.classList.toggle("gold");
    const colorButtonSilver = document.getElementById("silver-text");
    colorButtonSilver.classList.toggle("bold");
    const colorButtonGold = document.getElementById("gold-text");
    colorButtonGold.classList.toggle("bold");


  }
