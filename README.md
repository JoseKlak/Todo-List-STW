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
    