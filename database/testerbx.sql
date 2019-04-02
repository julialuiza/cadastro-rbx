-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 01-Abr-2019 às 18:02
-- Versão do servidor: 10.1.37-MariaDB
-- versão do PHP: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `testerbx`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `admin`
--

CREATE TABLE `admin` (
  `ID` int(11) NOT NULL,
  `login` varchar(50) NOT NULL,
  `senha` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `admin`
--

INSERT INTO `admin` (`ID`, `login`, `senha`) VALUES
(1, 'admin', '123');

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientespf`
--

CREATE TABLE `clientespf` (
  `ID` int(11) NOT NULL,
  `CPF` varchar(255) NOT NULL,
  `TipoContribuinte` varchar(10) DEFAULT NULL,
  `RG` varchar(10) DEFAULT NULL,
  `nome` varchar(255) NOT NULL,
  `sigla` varchar(20) DEFAULT NULL,
  `nascimento` date DEFAULT NULL,
  `grupo` varchar(20) DEFAULT NULL,
  `situacao` varchar(20) DEFAULT NULL,
  `cep` varchar(20) DEFAULT NULL,
  `uf` varchar(20) DEFAULT NULL,
  `cidade` varchar(20) DEFAULT NULL,
  `endereco` varchar(255) DEFAULT NULL,
  `numero` varchar(10) DEFAULT NULL,
  `complemento` varchar(255) DEFAULT NULL,
  `bairro` varchar(30) DEFAULT NULL,
  `distrito` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `clientespf`
--

INSERT INTO `clientespf` (`ID`, `CPF`, `TipoContribuinte`, `RG`, `nome`, `sigla`, `nascimento`, `grupo`, `situacao`, `cep`, `uf`, `cidade`, `endereco`, `numero`, `complemento`, `bairro`, `distrito`) VALUES
(5, '88285863204', '1', '20851855', 'Julia Luiza S. L.', 'JL', '5151-11-19', '1', 'INATIVO', '69041360', 'AM', 'Manaus', 'Rua Praia Canoa Quebrada', '41', 'Prox ao posto ATEM', 'TarumÃ£', '2'),
(7, '78965412345', '1', '78965413', 'Leonardo', 'Leo', '2019-03-26', '1', 'INATIVO', '69093085', 'AM', 'Manaus', 'Rua Tal', '1', 'Prox shopping', 'SÃ£o JosÃ©', 'Zona Leste');

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientespj`
--

CREATE TABLE `clientespj` (
  `ID` int(11) NOT NULL,
  `CNPJ` varchar(255) NOT NULL,
  `TipoContribuinte` int(10) DEFAULT NULL,
  `IE` varchar(10) DEFAULT NULL,
  `razaoSocial` varchar(255) NOT NULL,
  `nomeFantasia` varchar(20) DEFAULT NULL,
  `nascimento` date DEFAULT NULL,
  `grupo` varchar(20) DEFAULT NULL,
  `situacao` varchar(20) DEFAULT NULL,
  `cep` varchar(20) DEFAULT NULL,
  `uf` varchar(20) DEFAULT NULL,
  `cidade` varchar(20) DEFAULT NULL,
  `endereco` varchar(255) DEFAULT NULL,
  `numero` varchar(10) DEFAULT NULL,
  `complemento` varchar(255) DEFAULT NULL,
  `bairro` varchar(30) DEFAULT NULL,
  `distrito` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `clientespj`
--

INSERT INTO `clientespj` (`ID`, `CNPJ`, `TipoContribuinte`, `IE`, `razaoSocial`, `nomeFantasia`, `nascimento`, `grupo`, `situacao`, `cep`, `uf`, `cidade`, `endereco`, `numero`, `complemento`, `bairro`, `distrito`) VALUES
(6, '09.382.790/0001-91', 1, '375450', 'AXES SERVICOS DE COMUNICACAO LTDA', 'AXES', '2006-10-10', '1', 'INATIVO', '69036-595', 'AM', 'Manaus', 'Av. Brasil', '1000', 'prox a igreja ', 'Santo Agostinho', '212');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `clientespf`
--
ALTER TABLE `clientespf`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `clientespj`
--
ALTER TABLE `clientespj`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `clientespf`
--
ALTER TABLE `clientespf`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `clientespj`
--
ALTER TABLE `clientespj`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
