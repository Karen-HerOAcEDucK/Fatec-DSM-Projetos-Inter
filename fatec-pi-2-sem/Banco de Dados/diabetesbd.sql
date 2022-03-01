-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 22-Nov-2021 às 02:23
-- Versão do servidor: 10.4.21-MariaDB
-- versão do PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `diabetesbd`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `historico_monitor`
--

CREATE TABLE `historico_monitor` (
  `id_historico` int(255) NOT NULL,
  `id_pessoa` int(255) NOT NULL,
  `nivel_gli` double NOT NULL,
  `dt_monitor` date NOT NULL,
  `nome_refeicao` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `historico_monitor`
--

INSERT INTO `historico_monitor` (`id_historico`, `id_pessoa`, `nivel_gli`, `dt_monitor`, `nome_refeicao`) VALUES
(1, 1, 1.52, '2021-11-21', 'Almoço'),
(2, 1, 0.25, '2021-11-21', 'Jantar'),
(3, 2, 0.75, '2021-11-21', 'Café da Manha');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pessoa`
--

CREATE TABLE `pessoa` (
  `id` int(255) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `sobrenome` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `senha` varchar(150) NOT NULL,
  `tp_diabetes` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `pessoa`
--

INSERT INTO `pessoa` (`id`, `nome`, `sobrenome`, `email`, `senha`, `tp_diabetes`) VALUES
(1, 'Karen', 'Alexandre', 'a@a.com', '81dc9bdb52d04dc20036dbd8313ed055', ''),
(2, 'Marcos', 'Marcolino', 'a@a.com', 'af8f9dffa5d420fbc249141645b962ee', '');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `historico_monitor`
--
ALTER TABLE `historico_monitor`
  ADD PRIMARY KEY (`id_historico`),
  ADD KEY `id_pessoa` (`id_pessoa`);

--
-- Índices para tabela `pessoa`
--
ALTER TABLE `pessoa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `historico_monitor`
--
ALTER TABLE `historico_monitor`
  MODIFY `id_historico` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `pessoa`
--
ALTER TABLE `pessoa`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `historico_monitor`
--
ALTER TABLE `historico_monitor`
  ADD CONSTRAINT `historico_monitor_ibfk_1` FOREIGN KEY (`id_pessoa`) REFERENCES `pessoa` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
