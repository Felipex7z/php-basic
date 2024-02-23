para CRIAR o banco de dados se usa 
CREATE DATABASE nomedobanco; 

para DELETAR o banco de dados se usa 
DROP DATABASE nomedobanco;




para CRIAR  TABELA do banco de dados, selecione o banco ex:
USE DATABASE nomedobanco; / USE nomedobanco;
depois use o comando 
CREATE TABLE nometabela(
    nome VARCHAR(200),
    idade INT
); 

para DELETAR TABELA selecione o banco e use o comando 
DROP TABLE nome;

para ALTERAR TABELA  e adicionar tabela
ALTER TABLE nometabela;
ADD motor INT;




para DELETAR COLUNA da tabela
ALTER TABLE nometabela;
DROP motor;

para ALTERAR COLUNA da tabela
ALTER TABLE nometabela;
MODIFY COLUMN nomecoluna VARCHAR(30);




para INSERIR DADOS a um bando de dados usa o comando 
INSERT INTO nometabela (nomecoluna) VALUES ("jorge");




para SELECIONAR DADOS utiliza-se o comando SELECT
ex:
SELECT * FROM nometabela;
SELECT namecoluna FROM nometabela; 

para SELECIONAR UM DADO MAIS ESPECIFICO da tabela 
ex:
SELECT * FROM nometabela WHERE nomecoluna = "jorge";
ou podemos usar o OR, AND e NOT para filtrar ainda mais




com o comando ORDER BY é possivel ordenar o retorno com base em uma coluna e podemos ordenar de forma crescente(ASC) e descendente(DESC);
ex:
SELECT * FROM nometabela ORDER BY id DESC; dessa forma os dados serão ordenados do ultimo para o primeiro



para ATUALIZAR dados em uma tabela utiliza a instrução UPDATE sempre é bom usar WHERE se n quiser atualizar toda tabela
exemplo de atualizar um item especifico 
UPDATE nometabela
SET nomecoluna = "jorge"
WHERE id = 8;



para DELETAR DADOS DE UMA TABELA utiliza DELETE FROM;
obs: DELETE SEM WHERE DELETA TODOS DADOS DA TABELA
EX:
DELETE FROM nometabela
WHERE ID = 9;






























