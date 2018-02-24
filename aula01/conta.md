# Classe Conta

## Atributos
- numConta - Número da Conta
- saldo - Saldo da Conta
- titular - Títular da Conta
- tipo - Tipo da conta, CC ou CP
- status - Status, aberto(true) ou fechado (false)


## Métodos

- gets e sets. Status, Titular

- abrirConta(Tipo, Titular)
> Se CC = Saldo 100;
> Se CP = Saldo 150;
> Status = true;

- fecharConta
> Não pode ter dinheiro na Conta
> Não pode estar devendo o banco.
> Status = false;

- sacar
> Verifica se Conta está aberta.
> Verificar a quantidade do saldo.

- depositar
> Verifica se Conta está aberta.

- verSaldo
> Verifica se Conta está aberta.

- verTitular
- verNumConta
- gerarNumConta - usar rand()


## Contrutor 

- Nome do Titular, Tipo da Conta
- Executar a funcao abrirConta();

## Exibir na tela;
- o Titular
- o Número da Conta
- o Saldo atual