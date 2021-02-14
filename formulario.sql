-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 15-Fev-2021 às 00:32
-- Versão do servidor: 10.4.17-MariaDB
-- versão do PHP: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `empresa`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `formulario`
--

CREATE TABLE `formulario` (
  `cod_pessoa` int(11) NOT NULL,
  `nome` varchar(150) NOT NULL,
  `telefone` varchar(50) NOT NULL,
  `email1` varchar(150) NOT NULL,
  `email2` varchar(150) NOT NULL,
  `endereco` varchar(200) NOT NULL,
  `numero` int(50) NOT NULL,
  `estado` varchar(20) NOT NULL,
  `cidade` varchar(100) NOT NULL,
  `bairro` varchar(100) NOT NULL,
  `cep` varchar(20) NOT NULL,
  `cargo` varchar(50) NOT NULL,
  `sexo` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `formulario`
--

INSERT INTO `formulario` (`cod_pessoa`, `nome`, `telefone`, `email1`, `email2`, `endereco`, `numero`, `estado`, `cidade`, `bairro`, `cep`, `cargo`, `sexo`) VALUES
(1, 'Caio Filipe Silva França', '6198378-9301', 'caiofilipee@gmail.com', '', 'SHVP Chá 145/1 Lote 2D - Apt', 108, 'DF', 'Brasília', 'Vicente Pires', '72000-000', 'Assessor', 'Masculino'),
(2, 'Lucas Silva França', '3333-4444', 'lucas@gmail.com', '', 'cnb 4', 90, 'DF', 'Ceilandia', 'P.Sul', '72000-000', 'Vereador', 'Masculino'),
(3, 'Bianca Dayane Silva', '444-4444', 'bianca@gmail.com', '', 'xxx', 90, 'CE', 'Brasilia', 'Taguatinga', '', 'Vereador', 'Feminino'),
(4, 'Teste 1', '00000', 'teste@teste.com', '', 'teste 3434', 43, 'AC', 'ab', 'tt', '7788990', 'Vereador', 'Feminino');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `formulario`
--
ALTER TABLE `formulario`
  ADD PRIMARY KEY (`cod_pessoa`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `formulario`
--
ALTER TABLE `formulario`
  MODIFY `cod_pessoa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
