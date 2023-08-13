CREATE TABLE vagas(
    id int AUTO_INCREMENT PRIMARY KEY,
    titulo varchar(255)not null,
    descricao text,
    ativo enum('s', 'n')not null,
    criacao TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);