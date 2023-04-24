function GasStation(nome, endereco, tipoCombustivel, preco, avaliacao) {
  this.nome = nome;
  this.endereco = endereco;
  this.tipoCombustivel = tipoCombustivel;
  this.preco = preco;
  this.avaliacao = avaliacao;
}

GasStation.prototype.toString = function() {
  return this.nome + " - " + this.endereco + " - " + this.tipoCombustivel + " - R$ " + this.preco + " - Avaliação: " + this.avaliacao;
};

function findGasStations(localizacao, distanciaMaxima, tipoCombustivel) {
  // Aqui, você precisaria chamar a API que fornece informações de preços de combustíveis para buscar informações atualizadas sobre os postos de gasolina na área especificada.
  // Em seguida, você precisaria analisar as informações da API e construir uma lista de objetos de posto de gasolina para retornar.
  // Este é apenas um exemplo básico para fins ilustrativos.
  var listaPostosGasolina = [];
  listaPostosGasolina.push(new GasStation("Posto A", "Rua X, 123", "Gasolina Aditivada", 4.20, 5));
  listaPostosGasolina.push(new GasStation("Posto B", "Rua Y, 456", "Gasolina Aditivada", 4.15, 4.5));
  listaPostosGasolina.push(new GasStation("Posto C", "Rua Z, 789", "Gasolina Aditivada", 4.10, 4.8));
  return listaPostosGasolina;
}

function main() {
  var readline = require('readline');
  var rl = readline.createInterface({
    input: process.stdin,
    output: process.stdout
  });

  rl.question("Digite sua localização: ", function(localizacao) {
    rl.question("Digite a distância máxima: ", function(distanciaMaxima) {
      rl.question("Digite o tipo de combustível desejado: ", function(tipoCombustivel) {
        console.log("Procurando postos de gasolina próximos...");
        var listaPostosGasolina = findGasStations(localizacao, distanciaMaxima, tipoCombustivel);
        listaPostosGasolina.sort(function(a, b) {
          return a.preco - b.preco;
        });
        console.log("Lista de postos de gasolina encontrados:");
        for (var i = 0; i < listaPostosGasolina.length; i++) {
          console.log(listaPostosGasolina[i].toString());
        }
        rl.close();
      });
    });
  });
}

main();