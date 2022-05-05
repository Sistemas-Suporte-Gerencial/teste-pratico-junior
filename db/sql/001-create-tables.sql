-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: mysql:3306
-- Tempo de geração: 25-Fev-2022 às 11:46
-- Versão do servidor: 8.0.28
-- versão do PHP: 8.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `app_db`
--

-- --------------------------------------------------------


CREATE TABLE `sys_aluno` (
  `alu_id` int NOT NULL,
  `alu_nome` varchar(50) NOT NULL,
  `alu_email` varchar(40) NOT NULL,
  `alu_data_nasc` date NOT NULL,
  `alu_status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `sys_aluno`
--

INSERT INTO `sys_aluno` (`alu_id`, `alu_nome`, `alu_email`, `alu_data_nasc`, `alu_status`) VALUES
(1, 'Aluno 1', 'aluno1@gmail.com', '2000-02-25', 0),
(2, 'Aluno 2 ', 'aluno2@gmail.com', '1990-03-13', 1),
(3, 'Aluno 3', 'aluno3@gmail.com', '1999-12-24', 1),
(4, 'Aluno 4', 'aluno4@gmail.com', '1995-05-01', 1),
(5, 'Aluno 5', 'aluno5@gmail.com', '2004-09-29', 1),
(6, 'Aluno 6', 'aluno6@gmail.com', '2004-05-20', 1),
(7, 'Aluno 7', 'aluno7@gmail.com', '2005-06-01', 1),
(8, 'Aluno 8', 'aluno8@gmail.com', '2003-02-12', 1),
(9, 'Aluno 9', 'aluno9@gmail.com', '2003-05-06', 1),
(10, 'aluno 10', 'aluno10@gmail.com', '2000-10-10', 1),
(11, 'Aluno 11', 'aluno11@gmail.com', '1997-08-17', 1),
(12, 'Aluno 12', 'aluno12@gmail.com', '2001-12-15', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `sys_classe`
--

CREATE TABLE `sys_classe` (
  `classe_id` int NOT NULL,
  `classe_desc` varchar(30) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Extraindo dados da tabela `sys_classe`
--

INSERT INTO `sys_classe` (`classe_id`, `classe_desc`) VALUES
(1, 'Administrador'),
(2, 'Usuário'),
(3, 'Cliente'),
(4, 'Gestor');

-- --------------------------------------------------------

--
-- Estrutura da tabela `sys_curso`
--

CREATE TABLE `sys_curso` (
  `cur_id` int NOT NULL,
  `cur_titulo` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `cur_desc` varchar(100) NOT NULL,
  `cur_data_ini` date NOT NULL,
  `cur_data_fin` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `sys_curso`
--

INSERT INTO `sys_curso` (`cur_id`, `cur_titulo`, `cur_desc`, `cur_data_ini`, `cur_data_fin`) VALUES
(1, 'PHP', 'Descrição', '2021-12-01', '2022-01-31'),
(2, 'Node js', '									\n										\n										', '2022-03-01', '2022-03-01'),
(3, 'Bootstrap', 'Descrição', '2022-03-25', '2022-04-29');

-- --------------------------------------------------------

--
-- Estrutura da tabela `sys_dashboard`
--

CREATE TABLE `sys_dashboard` (
  `dash_id` int NOT NULL,
  `dash_collor` varchar(20) NOT NULL,
  `dash_desc` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Extraindo dados da tabela `sys_dashboard`
--

INSERT INTO `sys_dashboard` (`dash_id`, `dash_collor`, `dash_desc`) VALUES
(1, 'primary', 'Azul'),
(2, 'secondary', 'Cinza'),
(3, 'info', 'Azul claro'),
(4, 'success', 'Verde'),
(5, 'warning', 'Amarelo'),
(6, 'black', 'Preto'),
(7, 'light', 'light'),
(8, 'gray-dark', 'Cinza Escuro'),
(9, 'gray', 'Cinza Claro'),
(10, 'white', 'Branco'),
(11, 'cyan', 'Cyan'),
(12, 'teal', 'Verde Claro'),
(13, 'pink', 'Rosa'),
(14, 'purple', 'Roxo'),
(16, 'dark', 'Dark'),
(17, 'orange', 'Laranja');

-- --------------------------------------------------------

--
-- Estrutura da tabela `sys_departamento`
--

CREATE TABLE `sys_departamento` (
  `dp_id` int NOT NULL,
  `dp_empId` int NOT NULL,
  `dp_nome` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `sys_departamento`
--

INSERT INTO `sys_departamento` (`dp_id`, `dp_empId`, `dp_nome`) VALUES
(1, 2, 'Informatica'),
(2, 1, 'Informatica'),
(3, 1, 'Recursos Humanos');

-- --------------------------------------------------------

--
-- Estrutura da tabela `sys_empresa`
--

CREATE TABLE `sys_empresa` (
  `emp_id` int NOT NULL,
  `emp_nome` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `emp_alias` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `emp_cnpj` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `emp_ie` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `emp_cep` varchar(15) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `emp_log` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `emp_num` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `emp_compl` varchar(40) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `emp_bai` varchar(40) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `emp_cid` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `emp_uf` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `emp_contato` varchar(40) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `emp_email` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `emp_tel` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `emp_site` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `emp_logo` varchar(150) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci COMMENT='Tabela das Empresas';

--
-- Extraindo dados da tabela `sys_empresa`
--

INSERT INTO `sys_empresa` (`emp_id`, `emp_nome`, `emp_alias`, `emp_cnpj`, `emp_ie`, `emp_cep`, `emp_log`, `emp_num`, `emp_compl`, `emp_bai`, `emp_cid`, `emp_uf`, `emp_contato`, `emp_email`, `emp_tel`, `emp_site`, `emp_logo`) VALUES
(1, 'Ensino Online Ltda.', 'EO', '08.000.000/0001-54', '111.111.111.111', '07134170', 'Rua Águas de Lindóia', '156', '', 'Vila Marilda', 'Guarulhos', 'SP', 'Anderson Douglas', 'suporte@ensino.online.com.br', '(11)2468-7400', 'http://www.ensino.online.com.br/', '/images/logo_emp/logo.png');

-- --------------------------------------------------------

--
-- Estrutura da tabela `sys_logado`
--

CREATE TABLE `sys_logado` (
  `log_id` int NOT NULL,
  `log_user` varchar(100) NOT NULL DEFAULT '0',
  `log_classe` tinyint NOT NULL DEFAULT '0',
  `log_token` varchar(100) NOT NULL DEFAULT '0',
  `log_horario` timestamp NULL DEFAULT NULL,
  `log_expira` timestamp NULL DEFAULT NULL,
  `log_status` enum('1','0') DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COMMENT='Tabela para Logados';


--
-- Estrutura da tabela `sys_matricula`
--

CREATE TABLE `sys_matricula` (
  `mat_id` int NOT NULL,
  `mat_curId` int NOT NULL,
  `mat_aluId` int NOT NULL,
  `mat_usuId` int NOT NULL,
  `mat_data` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `sys_matricula`
--

INSERT INTO `sys_matricula` (`mat_id`, `mat_curId`, `mat_aluId`, `mat_usuId`, `mat_data`) VALUES
(1, 2, 2, 1, '2022-02-25 08:26:21'),
(2, 2, 3, 1, '2022-02-25 08:26:28'),
(3, 2, 4, 1, '2022-02-25 08:26:36'),
(4, 2, 5, 1, '2022-02-25 08:26:41'),
(5, 2, 6, 1, '2022-02-25 08:26:46'),
(6, 2, 7, 1, '2022-02-25 08:26:57'),
(7, 2, 8, 1, '2022-02-25 08:27:02'),
(8, 2, 9, 1, '2022-02-25 08:27:11'),
(9, 2, 10, 1, '2022-02-25 08:27:17'),
(10, 2, 11, 1, '2022-02-25 08:27:25');

-- --------------------------------------------------------

--
-- Estrutura da tabela `sys_sistema`
--

CREATE TABLE `sys_sistema` (
  `sys_id` int NOT NULL,
  `sys_nome` varchar(20) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `sys_versao` varchar(10) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `sys_retorno` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `sys_empresa` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `sys_cnpj` varchar(18) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `sys_mail` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `sys_senha` varchar(20) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `sys_logo` varchar(200) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `sys_sistema`
--

INSERT INTO `sys_sistema` (`sys_id`, `sys_nome`, `sys_versao`, `sys_retorno`, `sys_empresa`, `sys_cnpj`, `sys_mail`, `sys_senha`, `sys_logo`) VALUES
(1, 'portaria-prime', '1.0', 'infraprimesystema@gmail.com', 'Priore Sistemas', '23.072.748/0001-03', 'infraprimesystema@gmail.com', 'marra1109', 'images/logo_niff.png');

-- --------------------------------------------------------

--
-- Estrutura da tabela `sys_usuario`
--

CREATE TABLE `sys_usuario` (
  `usu_cod` int NOT NULL,
  `usu_nome` varchar(30) NOT NULL DEFAULT '0',
  `usu_senha` varchar(36) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT 'c65b0c751648454fbe595faa4ac69ece',
  `usu_empId` int NOT NULL,
  `usu_dpId` int NOT NULL,
  `usu_classeId` int NOT NULL,
  `usu_email` varchar(50) DEFAULT '0',
  `usu_ativo` enum('0','1') DEFAULT '0',
  `usu_online` enum('0','1') DEFAULT '0',
  `usu_foto` varchar(25) DEFAULT '0',
  `usu_datacad` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `usu_datades` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `usu_chapa` varchar(6) DEFAULT NULL,
  `usu_sexo` enum('F','M') DEFAULT NULL,
  `usu_ramal` varchar(6) DEFAULT NULL,
  `usu_cel` varchar(15) DEFAULT NULL,
  `usu_dashId` int DEFAULT NULL,
  `usu_mnutopId` int NOT NULL,
  `usu_pagId` int NOT NULL,
  `usu_usucadId` int DEFAULT NULL,
  `usu_pmail` enum('0','1') DEFAULT NULL,
  `usu_pchat` enum('0','1') DEFAULT NULL,
  `usu_pcalend` enum('0','1') DEFAULT NULL,
  `usu_prelatorio` enum('0','1') DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COMMENT='Armazena usuarios do sistema';

--
-- Extraindo dados da tabela `sys_usuario`
--

INSERT INTO `sys_usuario` (`usu_cod`, `usu_nome`, `usu_senha`, `usu_empId`, `usu_dpId`, `usu_classeId`, `usu_email`, `usu_ativo`, `usu_online`, `usu_foto`, `usu_datacad`, `usu_datades`, `usu_chapa`, `usu_sexo`, `usu_ramal`, `usu_cel`, `usu_dashId`, `usu_mnutopId`, `usu_pagId`, `usu_usucadId`, `usu_pmail`, `usu_pchat`, `usu_pcalend`, `usu_prelatorio`) VALUES
(1, 'Elvis Leite', '4badaee57fed5610012a296273158f5f', 1, 2, 1, 'admin@ensino.online.com', '1', '0', '/images/perfil/Elv_1.png', '2022-01-12 03:00:00', '2021-02-16 03:00:00', '1103', 'M', '7445', '(11)9 4749-1646', 11, 16, 10, 1, '1', '1', '1', '1');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `sys_aluno`
--
ALTER TABLE `sys_aluno`
  ADD PRIMARY KEY (`alu_id`);

--
-- Índices para tabela `sys_classe`
--
ALTER TABLE `sys_classe`
  ADD PRIMARY KEY (`classe_id`);

--
-- Índices para tabela `sys_curso`
--
ALTER TABLE `sys_curso`
  ADD PRIMARY KEY (`cur_id`);

--
-- Índices para tabela `sys_dashboard`
--
ALTER TABLE `sys_dashboard`
  ADD PRIMARY KEY (`dash_id`);

--
-- Índices para tabela `sys_departamento`
--
ALTER TABLE `sys_departamento`
  ADD PRIMARY KEY (`dp_id`);

--
-- Índices para tabela `sys_empresa`
--
ALTER TABLE `sys_empresa`
  ADD PRIMARY KEY (`emp_id`);

--
-- Índices para tabela `sys_logado`
--
ALTER TABLE `sys_logado`
  ADD PRIMARY KEY (`log_id`);

--
-- Índices para tabela `sys_matricula`
--
ALTER TABLE `sys_matricula`
  ADD PRIMARY KEY (`mat_id`);

--
-- Índices para tabela `sys_sistema`
--
ALTER TABLE `sys_sistema`
  ADD PRIMARY KEY (`sys_id`);

--
-- Índices para tabela `sys_usuario`
--
ALTER TABLE `sys_usuario`
  ADD PRIMARY KEY (`usu_cod`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

ALTER TABLE `sys_aluno`
  MODIFY `alu_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de tabela `sys_classe`
--
ALTER TABLE `sys_classe`
  MODIFY `classe_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `sys_curso`
--
ALTER TABLE `sys_curso`
  MODIFY `cur_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `sys_dashboard`
--
ALTER TABLE `sys_dashboard`
  MODIFY `dash_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de tabela `sys_departamento`
--
ALTER TABLE `sys_departamento`
  MODIFY `dp_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `sys_empresa`
--
ALTER TABLE `sys_empresa`
  MODIFY `emp_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de tabela `sys_logado`
--
ALTER TABLE `sys_logado`
  MODIFY `log_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de tabela `sys_matricula`
--
ALTER TABLE `sys_matricula`
  MODIFY `mat_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `sys_sistema`
--
ALTER TABLE `sys_sistema`
  MODIFY `sys_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `sys_usuario`
--
ALTER TABLE `sys_usuario`
  MODIFY `usu_cod` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
