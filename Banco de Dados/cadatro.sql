-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 11-Out-2023 às 13:23
-- Versão do servidor: 10.4.27-MariaDB
-- versão do PHP: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `cadastro`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadatro`
--

CREATE TABLE `cadatro` (
  `NomeCompleto` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Senha` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `cadatro`
--

INSERT INTO `cadatro` (`NomeCompleto`, `Email`, `Senha`) VALUES
('', '', '0'),
('Diavolo', 'diego.botelho@aluno.cetiradentes.com.br', '15129diego'),
('adfadv', 'Joycehemilly5@gmail.com', '12345'),
('fdsg', 'joycehemilly78@gmail.com', '123456'),
('joyce h a v', 'joycehemilly@gmail.com', '123'),
('afdv d', 'teste10@teste10.com', '48561'),
('fsvbsfv', 'teste11@teste.com', '0'),
('ncm', 'teste2@teste2.com', '646845'),
('loko', 'teste3@teste3.com', '123'),
('abc', 'teste4@teste4.com', '1234'),
('asad', 'teste5@teste5.com', '12345'),
('adjdaa', 'teste6@teste6.com', '123'),
('afvsv', 'teste7@teste7.com', '123456'),
('dasvsf', 'teste8@teste8.com', '1234567'),
('gstgsz', 'teste9@teste9.com', '12345'),
('afjajdfns', 'teste@teste.com', '1234567');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `cadatro`
--
ALTER TABLE `cadatro`
  ADD PRIMARY KEY (`Email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
