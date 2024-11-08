SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

CREATE DATABASE todo;

USE todo;

CREATE TABLE tarefas (
  id int AUTO_INCREMENT NOT NULL,
  nome varchar(255) NOT NULL,
  descricao varchar(255) NOT NULL,
  `status` int NOT NULL,
  data_limite date NOT NULL,
  PRIMARY KEY (id)
);


INSERT INTO tarefas (nome, descricao, `status`, data_limite) VALUES
('Estudar SQL', 'Revisar comandos básicos de SQL', 1, '2024-11-10'),
('Criar relatório', 'Gerar o relatório mensal de vendas', 2, '2024-11-15'),
('Limpar a casa', 'Fazer uma limpeza geral na casa', 0, '2024-11-05'),
('Fazer compras', 'Comprar mantimentos para a semana', 2, '2024-11-12'),
('Reunião de equipe', 'Discutir o progresso dos projetos', 0, '2024-11-08'),
('Atualizar site', 'Fazer alterações no site da empresa', 2, '2024-11-20'),
('Enviar e-mails', 'Enviar e-mails de follow-up para clientes', 1, '2024-11-03'),
('Preparar apresentação', 'Criar slides para a apresentação da próxima semana', 1, '2024-11-09'),
('Treinamento de equipe', 'Organizar sessão de treinamento para novos colaboradores', 2, '2024-11-25'),
('Revisar orçamento', 'Analisar o orçamento do próximo trimestre', 0, '2024-11-15'),
('Planejar férias', 'Definir datas e locais para as próximas férias', 1, '2024-12-01');


