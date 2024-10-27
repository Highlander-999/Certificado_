-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 13-Set-2024 às 20:39
-- Versão do servidor: 10.4.25-MariaDB
-- versão do PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `certificado`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `aluno`
--

CREATE TABLE `aluno` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `contato` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `aluno`
--

INSERT INTO `aluno` (`id`, `nome`, `contato`, `email`) VALUES
(1, 'Deusmira Rodrigues', '', ''),
(8, 'albertina gervasio ferreira', '', ''),
(9, 'celia soares de oliveira', '', ''),
(10, 'Antônio Eustáquio De Souza Rosa', '', ''),
(11, 'Cláudio Antônio De Oliveira Duarte', '', ''),
(12, 'Dayanne Coimbra Cangussu', '221-5203 097', ''),
(13, 'Eliane de Faria Coelho', '227-1116 EVA', ''),
(15, 'Cleide Alvarenga Nazaret', '', ''),
(16, 'Dulineu  de Freitas Pena', '', ''),
(17, 'Edgard Goulart Ratazinha', '', ''),
(18, 'sandro de souza santos', '99556666', 'sandrominas@gmail.com'),
(19, 'Cleuza Raria Carvalho', '', ''),
(20, 'Lenimar Nascimento', '221-2702 075', ''),
(21, 'Tania Sousa Carvalho', '271-5945 080', ''),
(22, 'Wellington Ramos Correta', '221-4532 075', ''),
(23, 'Eliza Renia Goulart', '', ''),
(24, 'Emilia Racia França', '', ''),
(25, 'Heldo José Armaral', '', ''),
(26, 'Jab Roseira da Silva', '', ''),
(27, 'João Relo Ratins', '', ''),
(28, 'José Fernandes Fernandes de Souza', '', ''),
(29, 'Janete Fortes Mendes', '', ''),
(30, 'daiana', '', ''),
(31, 'Renan', '', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `aluno_turma`
--

CREATE TABLE `aluno_turma` (
  `id` int(11) NOT NULL,
  `idaluno` int(11) NOT NULL,
  `idturma` int(11) NOT NULL,
  `ordem` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `aluno_turma`
--

INSERT INTO `aluno_turma` (`id`, `idaluno`, `idturma`, `ordem`) VALUES
(1, 0, 0, ''),
(25, 8, 12, '0002'),
(26, 9, 12, '0002'),
(30, 10, 14, '0001'),
(31, 11, 14, '0002'),
(32, 12, 15, '0005'),
(33, 13, 15, '0003'),
(34, 1, 14, '0003'),
(35, 1, 12, ''),
(36, 1, 12, ''),
(37, 1, 12, ''),
(38, 1, 12, '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `cep` varchar(8) NOT NULL,
  `logradouro` varchar(50) NOT NULL,
  `numero` varchar(20) NOT NULL,
  `bairro` varchar(50) NOT NULL,
  `cidade` varchar(50) NOT NULL,
  `uf` varchar(2) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telefone` varchar(100) NOT NULL,
  `complemento` varchar(50) NOT NULL,
  `datanascimento` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`id`, `nome`, `cep`, `logradouro`, `numero`, `bairro`, `cidade`, `uf`, `email`, `telefone`, `complemento`, `datanascimento`) VALUES
(1, 'Kauê de Paiva Santos', '31330-46', 'Rua Maria Cândida de Jesus', '785', 'Paquetá', 'Belo Horizonte', 'MG', 'kaue10166@gmail.com', '99984405265', 'Frente da Pratique', '2004-03-27');

-- --------------------------------------------------------

--
-- Estrutura da tabela `curso`
--

CREATE TABLE `curso` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `curso`
--

INSERT INTO `curso` (`id`, `nome`) VALUES
(1, 'aperfeiçoamento de vendedor'),
(5, 'Operador Telex'),
(6, 'Aux.escritorio em rotinas comerciais');

-- --------------------------------------------------------

--
-- Estrutura da tabela `instrutor`
--

CREATE TABLE `instrutor` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `instrutor`
--

INSERT INTO `instrutor` (`id`, `nome`) VALUES
(1, '_nenhum'),
(5, 'Eduardo A. De Paiva'),
(6, 'Fatima Gomcalves');

-- --------------------------------------------------------

--
-- Estrutura da tabela `log`
--

CREATE TABLE `log` (
  `id` int(11) NOT NULL,
  `idusuario` int(11) NOT NULL,
  `data` date NOT NULL,
  `hora` time NOT NULL,
  `comando` varchar(2000) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `log`
--

INSERT INTO `log` (`id`, `idusuario`, `data`, `hora`, `comando`) VALUES
(1, 1, '2024-09-12', '21:10:57', 'insert into instrutor (nome) values\r\n    (\"pedro henrique\")'),
(2, 1, '2024-09-12', '21:12:15', 'insert into instrutor (nome) values\r\n    (\"Deusmira Rodrigues\")'),
(3, 1, '2024-09-12', '21:13:01', 'insert into instrutor (nome) values\r\n    (\"Janete Fortes Mendes\")');

-- --------------------------------------------------------

--
-- Estrutura da tabela `turma`
--

CREATE TABLE `turma` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `data_periodo_inicial` date NOT NULL,
  `data_periodo_final` date NOT NULL,
  `idcurso` int(11) NOT NULL,
  `horario` varchar(50) NOT NULL,
  `idinstrutor` int(11) NOT NULL,
  `natureza` varchar(50) NOT NULL,
  `cargahoraria` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `turma`
--

INSERT INTO `turma` (`id`, `nome`, `data_periodo_inicial`, `data_periodo_final`, `idcurso`, `horario`, `idinstrutor`, `natureza`, `cargahoraria`) VALUES
(12, '013.1973.0001', '1973-08-13', '1973-08-31', 1, '08h as 11h0', 1, 'f', '45'),
(13, '013.1973.0002', '1973-08-13', '1973-08-31', 1, '19h0 as 22h', 1, 'f', '45'),
(14, '013.1985.0001', '1985-01-28', '1986-01-29', 5, '08:00 Ás 18:00', 5, 'Qualificação', '24hrs'),
(15, '013.1995.0001', '1995-10-16', '1995-12-20', 6, '7:30 as 10:30', 6, 'Qualificativa', '105 Hrs');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `senha` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `master` char(1) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id`, `nome`, `email`, `senha`, `master`) VALUES
(1, 'Administrador', 'admin@gmail.com', '123', 'S'),
(2, 'RAQUEL', 'raquelbacelarfuracao@gmail.com', '321', 'N');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `aluno`
--
ALTER TABLE `aluno`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `aluno_turma`
--
ALTER TABLE `aluno_turma`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idturma` (`idturma`),
  ADD KEY `alunook` (`idaluno`);

--
-- Índices para tabela `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `curso`
--
ALTER TABLE `curso`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `instrutor`
--
ALTER TABLE `instrutor`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `log`
--
ALTER TABLE `log`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `turma`
--
ALTER TABLE `turma`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD KEY `idcurso` (`idcurso`),
  ADD KEY `idinstrutor` (`idinstrutor`);

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `aluno`
--
ALTER TABLE `aluno`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT de tabela `aluno_turma`
--
ALTER TABLE `aluno_turma`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT de tabela `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `curso`
--
ALTER TABLE `curso`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `instrutor`
--
ALTER TABLE `instrutor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de tabela `log`
--
ALTER TABLE `log`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `turma`
--
ALTER TABLE `turma`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
