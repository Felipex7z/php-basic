NOT NULL é uma constraint que n permite que o dado adicionado a essa coluna esteja vazio
ex:   
nome VARCHAR(100) NOT NULL;


UNIQUE é uma constraint que garante que os valores sejam unicos 
ex:
nome VARCHAR (255) UNIQUE;


PRIMARY KEY é uma constraint onde  as chaves primaria devem ter valores unicos e não pode ser nulas, geralmente colocado na coluna ID
ex:
id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
nome VARCHAR(255),