const aurora = {
    nom: "Aurora",
    sante: 150,
    force: 25
  };
  
  // Renvoie la description du personnage
  function decrire(personnage) {
    return `${personnage.nom} a ${personnage.sante} points de vie et ${personnage.force} en force`;
  }
  
  // "Aurora a 150 points de vie et 25 en force"
  console.log(decrire(aurora));