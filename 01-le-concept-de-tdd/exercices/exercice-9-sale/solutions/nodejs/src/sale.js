function scanBarCode(barCode) {
  const prixProduits = {
      '12345': 7.25,
      '23456': 12.50,
  };

  return prixProduits[barCode] || 'Erreur : code-barres non trouvé';
}

class PointDeVente {
  constructor() {
      this.command = [];
  }

  scannerArticle(barCode) {
      this.command.push(barCode);
  }

  calculerTotalcommand() {
      return this.command.reduce((total, barCode) => total + scanBarCode(barCode), 0);
  }
}

module.exports = { scanBarCode, PointDeVente };
