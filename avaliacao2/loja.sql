-- Criação do banco de dados
CREATE DATABASE IF NOT EXISTS artesanato_db;
USE artesanato_db;

-- Criação da tabela de produtos artesanais
CREATE TABLE produtos_artesanais (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome_produto VARCHAR(100) NOT NULL,
    preco DECIMAL(10,2) NOT NULL,
    descricao VARCHAR(255),
    categoria VARCHAR(30)
);

-- Inserção de dados de exemplo
INSERT INTO produtos_artesanais (nome_produto, preco, descricao, categoria) VALUES
('Sabonete Artesanal de Lavanda', 12.50, 'Sabonete 100% natural com essência de lavanda e óleo de coco.', 'Higiene'),
('Velas Decorativas Aromáticas', 29.90, 'Conjunto de 3 velas com aromas variados: baunilha, canela e rosas.', 'Decoração'),
('Colar de Miçangas Coloridas', 18.00, 'Feito à mão com miçangas recicladas. Peça única.', 'Bijuteria'),
('Caderno Artesanal Costurado à Mão', 35.00, 'Capa dura com tecido floral. Papel reciclado.', 'Papelaria'),
('Macramê para Parede - Mandala', 65.00, 'Peça decorativa feita com fios de algodão cru.', 'Decoração'),
('Kit de Cosméticos Naturais', 89.90, 'Inclui creme corporal, bálsamo labial e óleo essencial.', 'Cosméticos'),
('Porta-copos em Crochê (conjunto com 4)', 22.00, 'Porta-copos coloridos feitos em crochê artesanal.', 'Utilidades'),
('Bolsa de Crochê com Alça de Madeira', 120.00, 'Bolsa exclusiva feita à mão em fio de malha.', 'Moda'),
('Quadro Decorativo em Madeira Reutilizada', 75.00, 'Frase motivacional pintada à mão.', 'Decoração'),
('Brinco de Argola com Pedras Naturais', 28.50, 'Brinco feito com arame banhado e pedras naturais.', 'Bijuteria');
