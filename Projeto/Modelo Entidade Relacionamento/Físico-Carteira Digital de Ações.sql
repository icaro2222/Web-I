/* Lógico-Carteira Digital de Ações: */

 /*!40100 COLLATE 'utf8mb4_unicode_ci' */
 
CREATE DATABASE `carteira_acao` CHARACTER SET utf8mb4 COLLATE 'utf8mb4_unicode_ci';

CREATE TABLE acao (
    id INTEGER PRIMARY KEY,
    status VARCHAR(15),
    nome VARCHAR(45),
    media_perdas FLOAT,
    instituicao VARCHAR(45),
    quantidade_atual INTEGER,
    quantidade_compadas INTEGER,
    quantidade_vendidas INTEGER,
    media_lucro FLOAT,
    fk_carteira INTEGER
);

CREATE TABLE usuario (
    id INTEGER PRIMARY KEY,
    nome VARCHAR(45),
    cpf VARCHAR(15),
    saldo FLOAT
);

CREATE TABLE historico (
    id INTEGER PRIMARY KEY,
    media_lucro FLOAT,
    data_hora DATE,
    status VARCHAR(15),
    perdas FLOAT,
    lucro FLOAT,
    compremento TEXT,
    media_perdas FLOAT,
    fk_acao INTEGER
);

CREATE TABLE carteira (
    id INTEGER PRIMARY KEY,
    nome VARCHAR(45),
    status VARCHAR(15),
    media_lucro FLOAT,
    media_perdas FLOAT,
    fk_usuario INTEGER
);

CREATE TABLE venda (
    id INTEGER PRIMARY KEY,
    instituicao VARCHAR(45),
    tipo VARCHAR(15),
    valor FLOAT,
    quantidade INTEGER,
    fk_historico INTEGER
);

CREATE TABLE compra (
    id INTEGER PRIMARY KEY,
    instituicao VARCHAR(45),
    tipo VARCHAR(15),
    valor FLOAT,
    quantidade INTEGER,
    fk_historico INTEGER
);
 
ALTER TABLE carteira ADD CONSTRAINT FK_carteira
    FOREIGN KEY (fk_usuario)
    REFERENCES usuario (id)
    ON DELETE CASCADE;

ALTER TABLE acao ADD CONSTRAINT FK_acao
    FOREIGN KEY (fk_carteira)
    REFERENCES carteira (id)
    ON DELETE CASCADE;

ALTER TABLE historico ADD CONSTRAINT FK_historico
    FOREIGN KEY (fk_acao)
    REFERENCES acao (id)
    ON DELETE CASCADE;

ALTER TABLE venda ADD CONSTRAINT FK_venda
    FOREIGN KEY (fk_historico)
    REFERENCES historico (id)
    ON DELETE CASCADE;

ALTER TABLE compra ADD CONSTRAINT FK_compra
    FOREIGN KEY (fk_historico)
    REFERENCES historico (id)
    ON DELETE CASCADE;