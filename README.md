# Todo List 

Projeto para aprimorar as habilidades utilizando JS com Vue, e PHP com laravel

### 📋 Recomendações para rodar o projeto

* Laragon <br>
* Visual Studio Code <br>

## 📦 Implantação

* Em uma pasta reservada para o projeto, executar o cmd e depois o seguinte comando:

```git
git clone https://github.com/JoseKlak/Todo-List-STW.git
```

* E para abrir o projeto no Visual Studio Code, basta fazer o comando abaixo, no mesmo terminal:

```git
code .
```

## Criando o banco de dados:

* Crie um database usando Laragon, para armazenar os dados (não é necessário a criação de nenhuma table).

* Após isso dentro da pasta 'todo_laravel', abra o arquivo '.env' e insira nas linhas '14, 15 e 16' os dados relacionados a database anteriormente criada.

* Feito isso basta apenas abrir um terminal na pasta 'todo_laravel', e executar o seguinte comando para fazer toda a criação das tabelas em seu banco de dados:

```bash
mysql -u root -p
```
Criando o database:
```sql
CREATE DATABASE desafiostw;
```
Importando o arquivo banco.sql:
```bash
mysql -u root -p desafiostw < banco.sql
```
        


## Considerações finais:
Uma das principais dificuldades neste projeto, foi fazer a integração do projeto em si, devido a nunca antes ter feito um projeto integrando front-end, back-end e banco de dados. Com isso em mente, tentei fazer da maneira mais simples possível, utilizando apenas PHP e MySQL, para pelo menos conseguir entregar um projeto funcional.

Um ponto técnico específico no qual tive dificuldades, foi na criação das receitas. O fato de ter que fazer uma tabela relacional, que ligava os ingredientes com a receita foi bem complicado no começo, algumas horas depois de ter "travado" nesta parte do projeto, as coisas começaram a funcionar novamente.

Uma dificuldade que eu não consegui resolver nesta versão inicial, muito devido ao pouco tempo que tive para realizar todo o projeto, foi na tela de criação de receitas. Onde meu objetivo inicial era ter um botão para a função "Adicionar mais 1 ingrediente a receita". Eu contornei essa dificuldade, mesmo que não tenha ficado da maneira em que eu planejei inicialmente, fazendo cinco campos para cadastro de ingredientes, onde o usuario tem a opção de relacionar de 1 ou até 5 ingredientes a uma única receita.

Alguns pontos de melhoria para as proximas futuras versões, além dos pontos já comentados, é principalmente na parte visual do projeto, em que não tive muito tempo para dedicar.