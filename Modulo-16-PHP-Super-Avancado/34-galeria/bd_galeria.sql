-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 14-Ago-2019 às 08:41
-- Versão do servidor: 10.3.16-MariaDB
-- versão do PHP: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bd_galeria`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `fotos`
--

CREATE TABLE `fotos` (
  `id` int(11) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `url` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `fotos`
--

INSERT INTO `fotos` (`id`, `titulo`, `url`) VALUES
(5, 'Guerreiro Japones ', 'dc17e951a86956fd484b462a820e041djpg'),
(7, 'Guerreira do Egito ', '8430a9883364fa2f7e63b6ad7913db6ajpg'),
(8, 'Guerreiro do Egito ', 'b99c6599cca2b26c25e5c2c7b60c63d9jpg'),
(9, 'Elfos Negros ', '8c6c112b7897b425ca1a23bb1e19ab9ejpg'),
(10, 'Elfo', 'b5283a0195cfbc81bedcb71fed8f0493jpg'),
(11, 'AnÃ£o', 'c6e3946d5cddf055f2af89ba4d5f800cjpg'),
(12, 'AnÃ£o ', '69e613a2539025bc33f5e35d54d30a72jpg'),
(13, 'Espartano', '9451ebaa2b0ef88f5e6947a6b0fce6d7jpg'),
(14, 'Romano ', '155e11d5b54d1ff231a2ac76f3af53e8jpg'),
(15, 'Chines', 'f18943b854f5a9ff9a6f8e5826f71f89jpg'),
(16, 'Europeu ', '3d308064d8a4322e2f35b35d3f4cb9a7jpg'),
(17, 'DragÃ£o na china', '62d0e002368f811d4cd0492e8126f2d8jpg');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `fotos`
--
ALTER TABLE `fotos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `fotos`
--
ALTER TABLE `fotos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
