-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Tempo de geração: 17/06/2025 às 01:48
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `receitacadastrologin`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `receitas`
--

CREATE TABLE `receitas` (
  `id` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `ingredientes` text NOT NULL,
  `instrucoes` text NOT NULL,
  `criado_em` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `receitas`
--

INSERT INTO `receitas` (`id`, `titulo`, `ingredientes`, `instrucoes`, `criado_em`) VALUES
(1, 'Refogado de Peru', 'Peru', 'Prepare o Peru para comer.', '2025-06-16 06:45:57'),
(2, 'Vidro com pimenta', 'Vidro e pimenta', 'Coloque a pimenta no vidro', '2025-06-16 07:24:22'),
(3, 'AQ', 'AW', 'AR', '2025-06-16 22:32:53'),
(4, 'aa', 'aa', 'aa', '2025-06-16 22:47:52'),
(5, 'asd', 'asd', 'asd', '2025-06-16 22:51:00'),
(6, 'sdf', 'sdf', 'sdf', '2025-06-16 22:51:53');

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `nome` varchar(60) NOT NULL,
  `nomeUsuario` varchar(45) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `cpf` varchar(14) NOT NULL,
  `data_nascimento` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `usuario`
--

INSERT INTO `usuario` (`id`, `nome`, `nomeUsuario`, `senha`, `cpf`, `data_nascimento`) VALUES
(0, 'Raichu', 'Rai', '$2y$10$uc2rBKsBku1ir62mpXuLi..B16wmkSN9HRPayi81lNs29QjnkNr5G', '567.789.345-33', '1996-12-10'),
(0, 'Yu', 'yuk', '$2y$10$KBV7a3zJ/KMWO8O.nRHyFejP7ws0Ulb93hOT7hVIcKStf4nmRzoCa', '567.896.054-63', '1996-12-10'),
(0, 'Zildo', 'Zil', '$2y$10$fHBEGWNyKB4nGaSTU4WbIe7hto8SWoCkI7MXIzD/yEQdN70a.u2uK', '456.789.345-23', '1996-12-10'),
(0, 'Luis', 'lulu', '$2y$10$qqAkjQQ.Y6ScE6PYsj9b4eeVXPo/Z8jpOfBfBfDLNv8N8F1IsDGIu', '123.678.90', '1996-12-10'),
(0, '2', '2', '$2y$10$qB63z//rSbbd7gdgf/qfselZOjbK1.llIWqnvqpCWNTzCqXmXhRrK', '22222222255', '2025-03-19'),
(0, 'sdfsd', 'sdfs', '$2y$10$KejiQ1KdujHYPhhqg7iyWeIgYMQYSJursL9e1.JDky/D7VQpw9rOS', '23423432434', '2005-12-12');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `receitas`
--
ALTER TABLE `receitas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `receitas`
--
ALTER TABLE `receitas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
