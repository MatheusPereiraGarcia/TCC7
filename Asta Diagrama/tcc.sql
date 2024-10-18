-- Criação da tabela Usuario
CREATE DATABASE tcc;
USE DATABASE tcc;
CREATE TABLE Usuario (
    id_usuario INT AUTO_INCREMENT PRIMARY KEY,
    status CHAR(1),
    tipo BOOLEAN,
    nome VARCHAR(255),
    email VARCHAR(255),
    senha VARCHAR(255)
);

-- Criação da tabela Cliente
CREATE TABLE Cliente (
    id_cliente INT AUTO_INCREMENT PRIMARY KEY,
    status CHAR(1),
    nome VARCHAR(255),
    telefone VARCHAR(20),
    email VARCHAR(255),
    cpf CHAR(11),
    dt_nasc DATE,
    endereco VARCHAR(255),
    cep CHAR(8),
    cidade VARCHAR(100),
    uf CHAR(2),
    rua VARCHAR(255),
    numero INT
);

-- Criação da tabela Venda
CREATE TABLE Venda (
    id_venda INT AUTO_INCREMENT PRIMARY KEY,
    status CHAR(1),
    dt_venda DATE,
    hr_venda TIME,
    tipo_recebimento CHAR(50),
    vlr_total DECIMAL(10, 2),
    qtd_parcela INT,
    id_usuario INT,
    id_cliente INT,
    FOREIGN KEY (id_usuario) REFERENCES Usuario(id_usuario),
    FOREIGN KEY (id_cliente) REFERENCES Cliente(id_cliente)
);

-- Criação da tabela Marca
CREATE TABLE Marca (
    id_marca INT AUTO_INCREMENT PRIMARY KEY,
    status CHAR(1),
    obs VARCHAR(255),
    nome VARCHAR(255)
);

-- Criação da tabela Grupo
CREATE TABLE Grupo (
    id_grupo INT AUTO_INCREMENT PRIMARY KEY,
    status CHAR(1),
    obs VARCHAR(255),
    nome VARCHAR(255)
);

-- Criação da tabela Produto
CREATE TABLE Produto (
    id_produto INT AUTO_INCREMENT PRIMARY KEY,
    status CHAR(1),
    nome VARCHAR(255),
    vlr_compra DECIMAL(10, 2),
    vlr_venda DECIMAL(10, 2),
    estoque INT,
    descricao VARCHAR(255),
    obs VARCHAR(255),
    id_marca INT,
    id_grupo INT,
    FOREIGN KEY (id_marca) REFERENCES Marca(id_marca),
    FOREIGN KEY (id_grupo) REFERENCES Grupo(id_grupo)
);

-- Criação da tabela Itens_De_Venda
CREATE TABLE Itens_De_Venda (
    id_item_venda INT AUTO_INCREMENT PRIMARY KEY,
    status CHAR(1),
    promocao VARCHAR(255),
    valor_unitario DECIMAL(10, 2),
    quantidade INT,
    id_produto INT,
    id_venda INT,
    FOREIGN KEY (id_produto) REFERENCES Produto(id_produto),
    FOREIGN KEY (id_venda) REFERENCES Venda(id_venda)
);

-- Criação da tabela Recebimento
CREATE TABLE Recebimento (
    id_recebimento INT AUTO_INCREMENT PRIMARY KEY,
    status CHAR(1),
    num_parcela INT,
    dt_recebimento DATE,
    valor_recebido DECIMAL(10, 2),
    valor_receber DECIMAL(10, 2),
    id_venda INT,
    FOREIGN KEY (id_venda) REFERENCES Venda(id_venda)
);
