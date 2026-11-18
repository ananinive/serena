CREATE DATABASE IF NOT EXISTS bancoSerena
    CHARACTER SET utf8mb4
    COLLATE utf8mb4_bin;
USE bancoSerena;

CREATE TABLE IF NOT EXISTS usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    senha VARCHAR(50) NOT NULL
);

CREATE TABLE IF NOT EXISTS tarefas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    id_usuario INT NOT NULL,
    titulo VARCHAR(100) NOT NULL,
    descricao TEXT,
    data_final DATE NOT NULL,
    data_inicial TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
    categoria ENUM ('estudo', 'pessoal', 'trabalho') DEFAULT ('pessoal'),
    prioridade ENUM ('baixa', 'media', 'alta') DEFAULT ('media'),
    status ENUM ('todas', 'pendentes', 'concluidas') DEFAULT ('todas'),
    FOREIGN KEY (id_usuario) REFERENCES usuarios(id)
);

CREATE TABLE IF NOT EXISTS habitos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    titulo VARCHAR(100) NOT NULL,
    descricao TEXT,
    frequencia VARCHAR(50),
    data_criacao DATE DEFAULT(CURRENT_DATE),
    id_usuario INT NOT NULL,
    FOREIGN KEY (id_usuario) REFERENCES usuarios(id)
);

CREATE TABLE IF NOT EXISTS registro_habitos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    id_usuario INT NOT NULL,
    id_habito INT NOT NULL,
    data DATE NOT NULL,
    status ENUM ('pendente', 'feito', 'nao realizado') DEFAULT ('pendente'),
    FOREIGN KEY (id_habito) REFERENCES habitos(id),
    FOREIGN KEY (id_usuario) REFERENCES usuarios(id)
);

CREATE TABLE IF NOT EXISTS anotacoes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    id_usuario INT NOT NULL,
    conteudo TEXT NOT NULL,
    FOREIGN KEY (id_usuario) REFERENCES usuarios(id)
);
