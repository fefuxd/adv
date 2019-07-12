-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 29-Fev-2016 às 19:04
-- Versão do servidor: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `adv`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `agenda`
--

CREATE TABLE IF NOT EXISTS `agenda` (
  `agendaId` int(11) NOT NULL,
  `usuarioId` int(11) DEFAULT NULL,
  `dataAgenda` date DEFAULT NULL,
  `horaAgenda` text,
  `descricaoAgenda` longtext
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE IF NOT EXISTS `cliente` (
  `clienteId` int(11) NOT NULL,
  `clienteNome` varchar(255) DEFAULT NULL,
  `clienteEndereco` varchar(255) DEFAULT NULL,
  `clienteNumero` varchar(50) DEFAULT NULL,
  `clienteComplemento` varchar(250) DEFAULT NULL,
  `clienteBairro` varchar(250) DEFAULT NULL,
  `clienteCep` varchar(250) DEFAULT NULL,
  `clienteCidade` varchar(250) DEFAULT NULL,
  `estadoId` tinyint(4) DEFAULT NULL,
  `clienteRg` varchar(250) DEFAULT NULL,
  `clienteCpf` varchar(250) DEFAULT NULL,
  `clienteDataNascimento` date DEFAULT NULL,
  `clienteNomeMae` varchar(250) DEFAULT NULL,
  `clienteEstadoCivil` varchar(255) DEFAULT NULL,
  `clienteEmail` varchar(255) DEFAULT NULL,
  `clienteTelefone` varchar(255) DEFAULT NULL,
  `clienteCelular` varchar(255) DEFAULT NULL,
  `clienteFoto` varchar(255) DEFAULT NULL,
  `clientePis` varchar(255) DEFAULT NULL,
  `clienteProfissao` varchar(255) DEFAULT NULL,
  `clienteIndicamento` varchar(255) DEFAULT NULL,
  `clienteObs` varchar(255) DEFAULT NULL,
  `clienteDocumento` longtext,
  `clienteDataCad` date DEFAULT NULL,
  `clienteStatus` tinyint(1) DEFAULT '1'
) ENGINE=InnoDB AUTO_INCREMENT=58 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente_historico`
--

CREATE TABLE IF NOT EXISTS `cliente_historico` (
  `cHistoricoId` int(11) NOT NULL,
  `usuarioId` int(11) DEFAULT NULL,
  `clienteId` int(11) DEFAULT NULL,
  `cHistoricoData` datetime DEFAULT NULL,
  `cHistoricoDescricao` longtext
) ENGINE=InnoDB AUTO_INCREMENT=74 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente_providencia`
--

CREATE TABLE IF NOT EXISTS `cliente_providencia` (
  `cProvidenciaId` int(11) NOT NULL,
  `usuarioId` int(11) DEFAULT NULL,
  `clienteId` int(11) DEFAULT NULL,
  `cProvidenciaData` datetime DEFAULT NULL,
  `cProvidenciaDescricao` longtext
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `estados`
--

CREATE TABLE IF NOT EXISTS `estados` (
  `estadoId` tinyint(3) unsigned NOT NULL,
  `nome` char(20) DEFAULT '0',
  `sigla` char(2) DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=31 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `estados`
--

INSERT INTO `estados` (`estadoId`, `nome`, `sigla`) VALUES
(1, 'Acre', 'AC'),
(2, 'Alagoas', 'AL'),
(3, 'Amapá', 'AP'),
(4, 'Amazonas', 'AM'),
(5, 'Bahia', 'BA'),
(6, 'Ceará', 'CE'),
(7, 'Distrito Federal', 'DF'),
(8, 'Espírito Santo', 'ES'),
(9, 'Goiás', 'GO'),
(10, 'Maranhão', 'MA'),
(11, 'Mato Grosso', 'MT'),
(12, 'Mato Grosso do Sul', 'MS'),
(13, 'Minas Gerais', 'MG'),
(14, 'Pará', 'PA'),
(15, 'Paraíba', 'PB'),
(16, 'Paraná', 'PR'),
(17, 'Pernambuco', 'PE'),
(19, 'Piauí', 'PI'),
(20, 'RG do Norte', 'RN'),
(21, 'RG do Sul', 'RS'),
(22, 'Rio de Janeiro', 'RJ'),
(24, 'Rondônia', 'RO'),
(25, 'Roraima', 'RA'),
(26, 'Santa Catarina', 'SC'),
(27, 'São Paulo', 'SP'),
(29, 'Sergipe', 'SE'),
(30, 'Tocantins', 'TO');

-- --------------------------------------------------------

--
-- Estrutura da tabela `processos`
--

CREATE TABLE IF NOT EXISTS `processos` (
  `processoId` int(11) NOT NULL,
  `clienteId` int(11) DEFAULT NULL,
  `processoNumero` varchar(100) DEFAULT NULL,
  `processoStatus` tinyint(1) DEFAULT '1',
  `processoTipo` int(11) DEFAULT NULL,
  `processoDataCad` date DEFAULT NULL,
  `processoJsituacao` varchar(255) DEFAULT NULL,
  `processoJadvogado` varchar(255) DEFAULT NULL,
  `processoJclasse` varchar(250) DEFAULT NULL,
  `processoJarea` varchar(250) DEFAULT NULL,
  `processoJassunto` varchar(250) DEFAULT NULL,
  `processoJdistribuicao` date DEFAULT NULL,
  `processoJdependencia` varchar(250) DEFAULT NULL,
  `processoJcomarca` varchar(250) DEFAULT NULL,
  `processoJvara` varchar(250) DEFAULT NULL,
  `processoJinstancia` varchar(250) DEFAULT NULL,
  `processoJcompetencia` varchar(250) DEFAULT NULL,
  `processoJvaloracao` float DEFAULT NULL,
  `processoJrequerente` varchar(250) DEFAULT NULL,
  `processoJrequerido` varchar(250) DEFAULT NULL,
  `processoJlinkprocesso` varchar(250) DEFAULT NULL,
  `processoAnumerobeneficio` varchar(250) DEFAULT NULL,
  `processoAsedeinss` varchar(250) DEFAULT NULL,
  `processoAtipobeneficio` varchar(250) DEFAULT NULL,
  `processoAjudicial` varchar(250) DEFAULT NULL,
  `processoAdataconcessao` date DEFAULT NULL,
  `processoAdatarequerimento` date DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `processos_historico`
--

CREATE TABLE IF NOT EXISTS `processos_historico` (
  `historicoId` int(11) NOT NULL,
  `usuarioId` int(11) DEFAULT NULL,
  `processoId` int(11) DEFAULT NULL,
  `historicoData` datetime DEFAULT NULL,
  `historicoDescricao` longtext
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `processos_providencia`
--

CREATE TABLE IF NOT EXISTS `processos_providencia` (
  `providenciaId` int(11) NOT NULL,
  `usuarioId` int(11) DEFAULT NULL,
  `processoId` int(11) DEFAULT NULL,
  `providenciaData` datetime DEFAULT NULL,
  `providenciaDescricao` longtext
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `processos_publicacao`
--

CREATE TABLE IF NOT EXISTS `processos_publicacao` (
  `publicacaoId` int(11) NOT NULL,
  `usuarioId` int(11) DEFAULT NULL,
  `processoId` int(11) DEFAULT NULL,
  `publicacaoData` datetime DEFAULT NULL,
  `publicacaoDescricao` longtext
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `usuarioId` int(11) NOT NULL,
  `usuarioLogin` varchar(255) DEFAULT NULL,
  `usuarioSenha` varchar(255) DEFAULT NULL,
  `usuarioNome` varchar(255) DEFAULT NULL,
  `usuarioApelido` varchar(255) DEFAULT NULL,
  `usuarioNivel` int(11) DEFAULT NULL,
  `usuarioStatus` tinyint(1) DEFAULT '1',
  `usuarioTipo` int(11) DEFAULT NULL,
  `usuarioQtdAcesso` int(11) DEFAULT '0',
  `usuarioResetaSenha` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=81 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`usuarioId`, `usuarioLogin`, `usuarioSenha`, `usuarioNome`, `usuarioApelido`, `usuarioNivel`, `usuarioStatus`, `usuarioTipo`, `usuarioQtdAcesso`, `usuarioResetaSenha`) VALUES
(41, 'FEFU', 'fefu', 'FERNANDO GABRIEL', 'FERNANDO', 2, 1, 2, 61, 1),
(43, 'FABIAN', 'fabian', 'FABIAN AUGUSTO CAZELE RIBEIRO', 'FABIAN', 2, 1, 2, 36, 1),
(56, 'FRED', '1234', 'FREDERICO COSENTINO DE CAMARGO', 'FRED', 2, 1, 2, 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agenda`
--
ALTER TABLE `agenda`
  ADD PRIMARY KEY (`agendaId`);

--
-- Indexes for table `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`clienteId`);

--
-- Indexes for table `cliente_historico`
--
ALTER TABLE `cliente_historico`
  ADD PRIMARY KEY (`cHistoricoId`);

--
-- Indexes for table `cliente_providencia`
--
ALTER TABLE `cliente_providencia`
  ADD PRIMARY KEY (`cProvidenciaId`);

--
-- Indexes for table `estados`
--
ALTER TABLE `estados`
  ADD PRIMARY KEY (`estadoId`);

--
-- Indexes for table `processos`
--
ALTER TABLE `processos`
  ADD PRIMARY KEY (`processoId`);

--
-- Indexes for table `processos_historico`
--
ALTER TABLE `processos_historico`
  ADD PRIMARY KEY (`historicoId`);

--
-- Indexes for table `processos_providencia`
--
ALTER TABLE `processos_providencia`
  ADD PRIMARY KEY (`providenciaId`);

--
-- Indexes for table `processos_publicacao`
--
ALTER TABLE `processos_publicacao`
  ADD PRIMARY KEY (`publicacaoId`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`usuarioId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agenda`
--
ALTER TABLE `agenda`
  MODIFY `agendaId` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `cliente`
--
ALTER TABLE `cliente`
  MODIFY `clienteId` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=58;
--
-- AUTO_INCREMENT for table `cliente_historico`
--
ALTER TABLE `cliente_historico`
  MODIFY `cHistoricoId` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=74;
--
-- AUTO_INCREMENT for table `cliente_providencia`
--
ALTER TABLE `cliente_providencia`
  MODIFY `cProvidenciaId` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `estados`
--
ALTER TABLE `estados`
  MODIFY `estadoId` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `processos`
--
ALTER TABLE `processos`
  MODIFY `processoId` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `processos_historico`
--
ALTER TABLE `processos_historico`
  MODIFY `historicoId` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `processos_providencia`
--
ALTER TABLE `processos_providencia`
  MODIFY `providenciaId` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `processos_publicacao`
--
ALTER TABLE `processos_publicacao`
  MODIFY `publicacaoId` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `usuarioId` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=81;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
