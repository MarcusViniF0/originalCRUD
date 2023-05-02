-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 02-Maio-2023 às 15:14
-- Versão do servidor: 10.4.21-MariaDB
-- versão do PHP: 7.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `reg_ponto`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cad_user`
--

CREATE TABLE `cad_user` (
  `id` smallint(6) NOT NULL,
  `email` varchar(50) NOT NULL,
  `senha` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `cad_user`
--

INSERT INTO `cad_user` (`id`, `email`, `senha`) VALUES
(2, 'vivi@live.com', '202cb962ac59075b964b07152d234b70'),
(3, 'Daniel@gmail.com', '202cb962ac59075b964b07152d234b70'),
(4, 'Nathan@live.com', '123'),
(5, 'Renato@live.com', '123'),
(6, 'Magno@gmail.com', '202cb962ac59075b964b07152d234b70'),
(10, 'Germano@gmail.com', '123'),
(11, 'Yuri@gmail.com', '123'),
(12, '', 'd41d8cd98f00b204e9800998ecf8427e'),
(13, '', 'd41d8cd98f00b204e9800998ecf8427e'),
(14, 'Luana@gmail.com', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id` smallint(6) NOT NULL,
  `nome` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `data_nascimento` date NOT NULL,
  `Faculdade` varchar(40) NOT NULL,
  `Semestre` int(11) NOT NULL,
  `Presença` varchar(40) NOT NULL,
  `atividades_hoje` varchar(90) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id`, `nome`, `email`, `data_nascimento`, `Faculdade`, `Semestre`, `Presença`, `atividades_hoje`) VALUES
(1, 'Marcus', 'Marcus@gmail.com', '2023-04-29', 'unifametro', 7, 'entrando', 'CRUD');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `cad_user`
--
ALTER TABLE `cad_user`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cad_user`
--
ALTER TABLE `cad_user`
  MODIFY `id` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
