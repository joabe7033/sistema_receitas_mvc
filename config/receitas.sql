-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Tempo de geração: 17/06/2025 às 04:50
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
(14, 'Bolo de Cenoura com Cobertura de Chocolate', 'Ingredientes:\r\n\r\nMassa:\r\n  ½ xícara (chá) de óleo\r\n  3 cenouras médias raladas\r\n  4 ovos\r\n  2 xícaras (chá) de açúcar\r\n  2 e ½ xícaras (chá) de farinha de trigo\r\n  1 colher (sopa) de fermento em pó\r\n\r\nCobertura:\r\n  1 colher (sopa) de manteiga\r\n  3 colheres (sopa) de chocolate em pó\r\n  1 xícara (chá) de açúcar\r\n  1 xícara (chá) de leite', 'Modo de preparo:\r\nBata no liquidificador o óleo, as cenouras, os ovos e o açúcar até ficar homogêneo. Misture a farinha e o fermento delicadamente. Asse em forma untada até dourar. Para a cobertura, cozinhe manteiga, chocolate, açúcar e leite até engrossar e despeje sobre o bolo.', '2025-06-16 23:58:07'),
(15, 'Lasanha de Frango com Molho Branco', 'Ingredientes:\r\n\r\nMassa para lasanha (pronta para uso)\r\n\r\n400 g de presunto\r\n\r\n400 g de queijo mussarela ralado\r\n\r\n2 copos de requeijão\r\n\r\n150 g de mussarela para gratinar\r\n\r\nMolho branco:\r\n  2 colheres (sopa) de manteiga\r\n  2 colheres (sopa) de farinha de trigo\r\n  400 ml de leite\r\n  Sal, pimenta-do-reino e noz-moscada a gosto\r\n  1 caixa de creme de leite\r\n\r\nFrango:\r\n  1 colher (sopa) de manteiga\r\n  1 cebola picada\r\n  2 dentes de alho picados\r\n  2 peitos de frango desfiados\r\n  Sal e pimenta a gosto', 'Modo de preparo:\r\nPrepare o molho branco derretendo manteiga, adicionando farinha e depois leite, mexendo até engrossar. Refogue cebola e alho, adicione o frango desfiado e tempere. Monte camadas de massa, frango, presunto, queijo e molho. Finalize com mussarela e asse até gratinar.', '2025-06-16 23:59:03'),
(16, 'Omelete Simples', 'Ingredientes:\r\n\r\n3 ovos\r\n\r\nSal a gosto\r\n\r\nPimenta-do-reino a gosto\r\n\r\n1 colher (sopa) de óleo ou manteiga\r\n\r\nRecheio opcional: queijo, presunto, tomate', 'Bata os ovos com sal e pimenta. Aqueça óleo ou manteiga na frigideira, despeje os ovos batidos. Cozinhe em fogo baixo até firmar. Adicione recheio se quiser, dobre a omelete e sirva.', '2025-06-16 23:59:36'),
(17, 'Salada de Alface com Tomate', 'Ingredientes:\r\n\r\n1 maço de alface lavado e picado\r\n\r\n2 tomates maduros picados\r\n\r\n1 cebola pequena em rodelas\r\n\r\nAzeite, sal e vinagre a gosto', 'Modo de preparo:\r\nMisture a alface, tomate e cebola em uma saladeira. Tempere com azeite, sal e vinagre. Sirva fresca.', '2025-06-17 00:00:56'),
(18, 'Arroz Branco Simples', 'Ingredientes:\r\n\r\n1 xícara (chá) de arroz\r\n\r\n2 xícaras (chá) de água\r\n\r\n1 colher (sopa) de óleo\r\n\r\n1 dente de alho picado\r\n\r\nSal a gosto', 'Modo de preparo:\r\nAqueça o óleo e refogue o alho. Adicione o arroz e refogue rapidamente. Acrescente a água e o sal. Cozinhe em fogo médio até secar a água e o arroz ficar macio.', '2025-06-17 00:01:52'),
(20, '434434', '434434334334', '343', '2025-06-17 00:14:30');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
