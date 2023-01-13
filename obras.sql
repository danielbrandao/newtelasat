-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 13-Jan-2023 às 23:02
-- Versão do servidor: 10.4.22-MariaDB
-- versão do PHP: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `obras`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `mestres`
--

CREATE TABLE `mestres` (
  `id` int(100) NOT NULL,
  `mestre` varchar(100) NOT NULL,
  `cidade` varchar(100) NOT NULL,
  `categoria` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `mestres`
--

INSERT INTO `mestres` (`id`, `mestre`, `cidade`, `categoria`) VALUES
(1, 'GILMA PEREIRA DE OLIVEIRA', 'CAAPORÃ - PB', 'FIBRA\n'),
(2, 'FRANCISCO RIBEIRO VIANA', 'JOAO PESSOA - PB', 'BRINQUEDO POPULAR'),
(3, 'MARIA DE LOURDES LEANDRO', 'MAMANGUAPE - PB', 'FUXICO\n\n'),
(4, 'ANTÔNIA DO NASCIMENTO MARINHO', 'JUAREZ TÁVORA - PB', 'LABIRINTO'),
(5, 'MARIA MARTA FERREIRA DA SILVA', 'INGÁ - PB', 'LABIRINTO'),
(6, 'MARIA DE LOURDES DINIZ DA SILVA', 'LAGOA SECA - PB', 'MADEIRA'),
(7, 'MARIA DAS DORES RAMOS', 'CAMPINA GRANDE - PB', 'RENDA RENASCENÇA'),
(8, 'MARIA DO SOCORRO DA SILVA LIMA', 'REMÍGIO - PB', 'BRINQUEDO POPULAR'),
(9, 'JOÃO HUMBERTO NÓBREGA DA SILVA', 'CABEDELO - PB', 'FIBRA DE COCO'),
(10, 'GIVANILDO ISMAEL SILVA DOS SANTOS', 'SOLEDADE - PB', 'ENTALHE EM MADEIRA'),
(11, 'VIOLETA ALMEIDA DE SOUZA', 'JOÃO PESSOA - PB', 'FIOS - BORDADO\n           \n'),
(12, 'MARIA JOSELENE BERNARDO', 'CABEDELO - PB', 'OSSO'),
(13, 'EMILIANO ALVES PEREIRA', 'MONTEIRO - PB', 'RENDA RENASCENÇA');

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `cpf` int(11) NOT NULL,
  `voto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `mestres`
--
ALTER TABLE `mestres`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `mestres`
--
ALTER TABLE `mestres`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
