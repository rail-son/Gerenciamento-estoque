-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 22-Dez-2021 às 01:49
-- Versão do servidor: 10.4.22-MariaDB
-- versão do PHP: 8.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `estoquedidatikos`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `products`
--

CREATE TABLE `products` (
  `cod_produto` bigint(20) UNSIGNED NOT NULL,
  `nome_produto` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `valor_produto` double(8,2) NOT NULL,
  `estoque` int(11) NOT NULL,
  `cidade` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `products`
--

INSERT INTO `products` (`cod_produto`, `nome_produto`, `valor_produto`, `estoque`, `cidade`, `created_at`, `updated_at`) VALUES
(1, 'Arroz Tia Joana 5 KG', 23.99, 15, 'Uberlândia', '2021-12-20 09:56:24', '2021-12-20 09:56:24'),
(2, 'Feijão Mineiro 1 KG', 6.49, 30, 'Uberaba', '2021-12-20 09:56:24', '2021-12-20 09:56:24'),
(3, 'Macarrão Espaguete 8 Com Ovos 500g', 3.90, 20, 'Uberlândia', '2021-12-20 09:56:24', '2021-12-20 09:56:24'),
(4, 'Queijo Mussarela Italac Fatiado 400g', 12.14, 35, 'Uberlândia', '2021-12-20 09:56:24', '2021-12-20 09:56:24'),
(5, 'Molho de Tomate Quero Tradicional 340 G', 1.45, 30, 'Araguari', '2021-12-20 09:56:24', '2021-12-20 09:56:24'),
(6, 'Pão de Forma Tradicional', 3.99, 30, 'Uberlândia', '2021-12-20 09:56:24', '2021-12-20 09:56:24'),
(7, 'Coca-Cola - 2L', 6.99, 40, 'Uberaba', '2021-12-20 10:11:51', '2021-12-20 10:11:51'),
(8, 'Refrigerante Guaraná Carioca - 2L', 6.55, 34, 'Araguari', '2021-12-21 06:01:46', '2021-12-21 06:01:46'),
(9, 'Sal 1 KG', 1.50, 20, 'Monte Alegre', '2021-12-21 10:19:41', '2021-12-21 10:19:41'),
(10, 'Café 500gr', 12.99, 45, 'Campinas', '2021-12-21 10:22:20', '2021-12-21 10:22:20'),
(11, 'Mel', 24.99, 20, 'Araguari', '2021-12-21 10:29:46', '2021-12-21 10:29:46'),
(13, 'Creme de Avelã Nutella 140g', 5.99, 40, 'Caldas Novas', '2021-12-22 03:46:43', '2021-12-22 03:46:43');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`cod_produto`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `products`
--
ALTER TABLE `products`
  MODIFY `cod_produto` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
