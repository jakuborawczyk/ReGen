function changeColorSilver() {
    const colorButton = document.getElementById("configurator-jewelry");
    colorButton.classList.add("silver");
    colorButton.classList.remove("gold");
    const colorButtonSilver = document.getElementById("silver-text");
    colorButtonSilver.style.fontWeight = '800';
    const colorButtonGold = document.getElementById("gold-text");
    colorButtonGold.style.fontWeight = '400';


  }

  function changeColorGold() {
    const colorButton = document.getElementById("configurator-jewelry");
    colorButton.classList.remove("silver");
    colorButton.classList.add("gold");
    const colorButtonSilver = document.getElementById("silver-text");
    colorButtonSilver.style.fontWeight = '400';
    const colorButtonGold = document.getElementById("gold-text");
    colorButtonGold.style.fontWeight = '800';


  }


  //jakub dropdown
