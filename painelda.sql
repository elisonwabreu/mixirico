-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 03-Jan-2015 às 17:12
-- Versão do servidor: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `painelda`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `auditoria`
--

CREATE TABLE IF NOT EXISTS `auditoria` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(45) NOT NULL,
  `data_hora` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `operacao` varchar(45) NOT NULL,
  `query` text NOT NULL,
  `observacao` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=182 ;

--
-- Extraindo dados da tabela `auditoria`
--

INSERT INTO `auditoria` (`id`, `usuario`, `data_hora`, `operacao`, `query`, `observacao`) VALUES
(1, 'oshima', '2014-12-15 11:54:40', 'Login no sistema', 'SELECT *\nFROM (`usuarios`)\nWHERE `login` =  ''oshima''\nLIMIT 1', 'Usuário "oshima" fez login no sistema'),
(2, 'oshima', '2014-12-15 11:57:35', 'Inclusão de categoria', 'INSERT INTO `cat_prod` (`nome`, `descricao`, `tags`) VALUES (''DOP'', ''fisdhfg'', ''DOP'')', 'Nova categoria cadastrada no sistema'),
(3, 'oshima', '2014-12-15 12:03:29', 'Inclusão de configuração', 'INSERT INTO `settings` (`nome_config`, `valor_config`) VALUES (''nome_site'', ''SCWPANEL'')', 'Nova configuração cadastrada no sistema'),
(4, 'oshima', '2014-12-15 12:03:29', 'Inclusão de configuração', 'INSERT INTO `settings` (`nome_config`, `valor_config`) VALUES (''url_logomarca'', ''http://localhost/scwpanel/images/logo-deposito-aracati.png'')', 'Nova configuração cadastrada no sistema'),
(5, 'oshima', '2014-12-15 12:03:29', 'Inclusão de configuração', 'INSERT INTO `settings` (`nome_config`, `valor_config`) VALUES (''email_adm'', ''antevertonlima@gmail.com'')', 'Nova configuração cadastrada no sistema'),
(6, 'oshima', '2014-12-15 12:03:30', 'Inclusão de configuração', 'INSERT INTO `settings` (`nome_config`, `valor_config`) VALUES (''facebook'', '''')', 'Nova configuração cadastrada no sistema'),
(7, 'oshima', '2014-12-15 12:03:30', 'Inclusão de configuração', 'INSERT INTO `settings` (`nome_config`, `valor_config`) VALUES (''descricao_site'', ''dgsdfg'')', 'Nova configuração cadastrada no sistema'),
(8, 'oshima', '2014-12-15 12:03:30', 'Inclusão de configuração', 'INSERT INTO `settings` (`nome_config`, `valor_config`) VALUES (''descricao_curta'', ''dfgsdfg'')', 'Nova configuração cadastrada no sistema'),
(9, 'oshima', '2014-12-15 12:03:30', 'Inclusão de configuração', 'INSERT INTO `settings` (`nome_config`, `valor_config`) VALUES (''keywords_site'', ''sdfgsdfgsdfg'')', 'Nova configuração cadastrada no sistema'),
(10, 'oshima', '2014-12-15 12:03:30', 'Inclusão de configuração', 'INSERT INTO `settings` (`nome_config`, `valor_config`) VALUES (''txt_home'', ''<p>sdfgsdfgdsfgdsfg</p>'')', 'Nova configuração cadastrada no sistema'),
(11, 'oshima', '2014-12-15 12:03:30', 'Inclusão de configuração', 'INSERT INTO `settings` (`nome_config`, `valor_config`) VALUES (''twitter'', ''@everton_rolim'')', 'Nova configuração cadastrada no sistema'),
(12, 'oshima', '2014-12-15 12:50:27', 'Exclusão de configuração', 'DELETE FROM `settings`\nWHERE `nome_config` =  ''facebook''', 'A configuração do campo "facebook" foi excluída'),
(13, 'oshima', '2014-12-15 12:50:27', 'Alteração de configuração', 'UPDATE `settings` SET `nome_config` = ''txt_home'', `valor_config` = ''<p>sdfgsdfgdsfgdsfg h dfghfgh</p>'' WHERE `nome_config` =  ''txt_home''', 'A configuração para o campo "txt_home" foi alterada'),
(14, 'oshima', '2014-12-15 16:30:42', 'Login no sistema', 'SELECT *\nFROM (`usuarios`)\nWHERE `login` =  ''oshima''\nLIMIT 1', 'Usuário "oshima" fez login no sistema'),
(15, 'oshima', '2014-12-15 16:33:39', 'Logoff no sistema', '', 'O usuário "oshima" fez logoff do sistema'),
(16, 'Desconhecido', '2014-12-15 16:33:56', 'Erro de login', 'SELECT *\nFROM (`usuarios`)\nWHERE `login` =  ''administrador''\nLIMIT 1', 'Usuário inexistente "administrador"'),
(17, 'oshima', '2014-12-15 16:34:20', 'Login no sistema', 'SELECT *\nFROM (`usuarios`)\nWHERE `login` =  ''oshima''\nLIMIT 1', 'Usuário "oshima" fez login no sistema'),
(18, 'oshima', '2014-12-15 23:08:37', 'Login no sistema', 'SELECT *\nFROM (`usuarios`)\nWHERE `login` =  ''oshima''\nLIMIT 1', 'Usuário "oshima" fez login no sistema'),
(19, 'oshima', '2014-12-16 01:21:31', 'Login no sistema', 'SELECT *\nFROM (`usuarios`)\nWHERE `login` =  ''oshima''\nLIMIT 1', 'Usuário "oshima" fez login no sistema'),
(20, 'oshima', '2014-12-16 14:04:14', 'Login no sistema', 'SELECT *\nFROM (`usuarios`)\nWHERE `login` =  ''oshima''\nLIMIT 1', 'Usuário "oshima" fez login no sistema'),
(21, 'oshima', '2014-12-16 16:51:47', 'Login no sistema', 'SELECT *\nFROM (`usuarios`)\nWHERE `login` =  ''oshima''\nLIMIT 1', 'Usuário "oshima" fez login no sistema'),
(22, 'oshima', '2014-12-16 19:06:34', 'Exclusão de categoria', 'DELETE FROM `cat_prod`\nWHERE `id` =  ''1''', 'A categoria com o id "1" foi excluída'),
(23, 'oshima', '2014-12-16 19:06:41', 'Inclusão de categoria', 'INSERT INTO `cat_prod` (`nome`, `descricao`, `tags`) VALUES (''DOP'', ''sdfghdfghdfgh'', ''DOP'')', 'Nova categoria cadastrada no sistema'),
(24, 'oshima', '2014-12-16 19:43:46', 'Inclusão de mídia', 'INSERT INTO `midia` (`nome`, `descricao`, `arquivo`) VALUES (''DOP'', ''DOP'', ''baby_against_blue_sky_204313.jpg'')', 'Nova mídia cadastrada no sistema'),
(25, 'Desconhecido', '2014-12-16 23:48:47', 'Erro de login', 'SELECT *\nFROM (`usuarios`)\nWHERE `login` =  ''administrador''\nLIMIT 1', 'Usuário inexistente "administrador"'),
(26, 'oshima', '2014-12-16 23:49:01', 'Login no sistema', 'SELECT *\nFROM (`usuarios`)\nWHERE `login` =  ''oshima''\nLIMIT 1', 'Usuário "oshima" fez login no sistema'),
(27, 'oshima', '2014-12-16 23:54:24', 'Logoff no sistema', '', 'O usuário "oshima" fez logoff do sistema'),
(28, 'oshima', '2014-12-16 23:57:07', 'Login no sistema', 'SELECT *\nFROM (`usuarios`)\nWHERE `login` =  ''oshima''\nLIMIT 1', 'Usuário "oshima" fez login no sistema'),
(29, 'oshima', '2014-12-17 00:00:29', 'Logoff no sistema', '', 'O usuário "oshima" fez logoff do sistema'),
(30, 'oshima', '2014-12-17 00:00:31', 'Login no sistema', 'SELECT *\nFROM (`usuarios`)\nWHERE `login` =  ''oshima''\nLIMIT 1', 'Usuário "oshima" fez login no sistema'),
(31, 'oshima', '2014-12-17 00:02:07', 'Inclusão de mídia', 'INSERT INTO `midia` (`nome`, `descricao`, `arquivo`) VALUES (''DOPhg'', ''DOP'', ''sleeping_in_the_car_seat.jpg'')', 'Nova mídia cadastrada no sistema'),
(32, 'oshima', '2014-12-17 00:02:20', 'Exclusão de mídia', 'DELETE FROM `midia`\nWHERE `id` =  ''2''', 'A mídia com o id "2" foi excluída'),
(33, 'oshima', '2014-12-17 01:39:08', 'Login no sistema', 'SELECT *\nFROM (`usuarios`)\nWHERE `login` =  ''oshima''\nLIMIT 1', 'Usuário "oshima" fez login no sistema'),
(34, 'oshima', '2014-12-17 01:40:13', 'Inclusão de produto', 'INSERT INTO `produtos` (`titulo`, `conteudo`, `preco`, `slug`, `cat_prod`, `arquivo`, `tags`) VALUES (''Gfdfgh'', ''fdfghnfghfghjghj'', ''dfghdfgh'', ''gfdfgh'', ''2'', ''glyphicons-halflings.png'', ''Gfdfgh'')', 'Nova produto cadastrado no sistema'),
(35, 'oshima', '2014-12-17 13:26:32', 'Login no sistema', 'SELECT *\nFROM (`usuarios`)\nWHERE `login` =  ''oshima''\nLIMIT 1', 'Usuário "oshima" fez login no sistema'),
(36, 'oshima', '2014-12-17 13:26:53', 'Inclusão de categoria', 'INSERT INTO `cat_prod` (`nome`, `descricao`, `tags`) VALUES (''DOPhg'', ''http://localhost/scwpanel/'', ''DOPhg'')', 'Nova categoria cadastrada no sistema'),
(37, 'oshima', '2014-12-17 13:27:55', 'Inclusão de produto', 'INSERT INTO `produtos` (`titulo`, `conteudo`, `preco`, `slug`, `cat_prod`, `arquivo`, `tags`) VALUES (''Dophg'', ''sdfgsdfgsdfdfgs'', '''', ''dophg'', ''3'', ''bg-body.jpg'', ''Dophg'')', 'Nova produto cadastrado no sistema'),
(38, 'oshima', '2014-12-17 13:33:16', 'Inclusão de produto', 'INSERT INTO `produtos` (`titulo`, `conteudo`, `preco`, `slug`, `cat_prod`, `arquivo`, `tags`) VALUES (''Dophg01'', ''sfgsdfgsdf'', '''', ''dophg01'', ''3'', ''bg-body1.jpg'', ''Dophg01'')', 'Nova produto cadastrado no sistema'),
(39, 'oshima', '2014-12-17 17:49:23', 'Login no sistema', 'SELECT *\nFROM (`usuarios`)\nWHERE `login` =  ''oshima''\nLIMIT 1', 'Usuário "oshima" fez login no sistema'),
(40, 'oshima', '2014-12-17 20:08:56', 'Login no sistema', 'SELECT *\nFROM (`usuarios`)\nWHERE `login` =  ''oshima''\nLIMIT 1', 'Usuário "oshima" fez login no sistema'),
(41, 'oshima', '2014-12-18 02:30:47', 'Login no sistema', 'SELECT *\nFROM (`usuarios`)\nWHERE `login` =  ''oshima''\nLIMIT 1', 'Usuário "oshima" fez login no sistema'),
(42, 'oshima', '2014-12-18 02:31:34', 'Inclusão de mídia', 'INSERT INTO `midia` (`nome`, `descricao`, `arquivo`) VALUES (''Logo'', ''logo'', ''logo-estampas-e-bordados.png'')', 'Nova mídia cadastrada no sistema'),
(43, 'oshima', '2014-12-18 02:31:51', 'Alteração de configuração', 'UPDATE `settings` SET `nome_config` = ''url_logomarca'', `valor_config` = ''http://localhost/scwpanel/assets/uploads/logo-estampas-e-bordados.png'' WHERE `nome_config` =  ''url_logomarca''', 'A configuração para o campo "url_logomarca" foi alterada'),
(44, 'oshima', '2014-12-18 02:31:51', 'Inclusão de configuração', 'INSERT INTO `settings` (`nome_config`, `valor_config`) VALUES (''facebook'', '''')', 'Nova configuração cadastrada no sistema'),
(45, 'oshima', '2014-12-18 02:41:55', 'Inclusão de configuração', 'INSERT INTO `settings` (`nome_config`, `valor_config`) VALUES (''rua'', ''rua 303, 284'')', 'Nova configuração cadastrada no sistema'),
(46, 'oshima', '2014-12-18 02:41:55', 'Inclusão de configuração', 'INSERT INTO `settings` (`nome_config`, `valor_config`) VALUES (''bairro'', ''Jangurussu'')', 'Nova configuração cadastrada no sistema'),
(47, 'oshima', '2014-12-18 02:41:55', 'Inclusão de configuração', 'INSERT INTO `settings` (`nome_config`, `valor_config`) VALUES (''cid_uf'', ''Fortaleza'')', 'Nova configuração cadastrada no sistema'),
(48, 'oshima', '2014-12-18 02:41:55', 'Inclusão de configuração', 'INSERT INTO `settings` (`nome_config`, `valor_config`) VALUES (''emailcom'', ''antevertonlima@gmail.com'')', 'Nova configuração cadastrada no sistema'),
(49, 'oshima', '2014-12-18 02:41:55', 'Exclusão de configuração', 'DELETE FROM `settings`\nWHERE `nome_config` =  ''facebook''', 'A configuração do campo "facebook" foi excluída'),
(50, 'oshima', '2014-12-18 02:41:56', 'Inclusão de configuração', 'INSERT INTO `settings` (`nome_config`, `valor_config`) VALUES (''cep'', ''60.866-320'')', 'Nova configuração cadastrada no sistema'),
(51, 'oshima', '2014-12-18 02:41:56', 'Inclusão de configuração', 'INSERT INTO `settings` (`nome_config`, `valor_config`) VALUES (''telcom'', ''+558587961779'')', 'Nova configuração cadastrada no sistema'),
(52, 'oshima', '2014-12-18 02:41:56', 'Inclusão de configuração', 'INSERT INTO `settings` (`nome_config`, `valor_config`) VALUES (''telcel'', ''+558587961779'')', 'Nova configuração cadastrada no sistema'),
(53, 'oshima', '2014-12-18 11:49:10', 'Login no sistema', 'SELECT *\nFROM (`usuarios`)\nWHERE `login` =  ''oshima''\nLIMIT 1', 'Usuário "oshima" fez login no sistema'),
(54, 'oshima', '2014-12-18 11:50:42', 'Inclusão de configuração', 'INSERT INTO `settings` (`nome_config`, `valor_config`) VALUES (''facebook'', ''https://www.facebook.com/doctype'')', 'Nova configuração cadastrada no sistema'),
(55, 'oshima', '2014-12-18 11:50:42', 'Inclusão de configuração', 'INSERT INTO `settings` (`nome_config`, `valor_config`) VALUES (''skype'', ''oshima.gdm'')', 'Nova configuração cadastrada no sistema'),
(56, 'oshima', '2014-12-18 11:50:43', 'Alteração de configuração', 'UPDATE `settings` SET `nome_config` = ''telcom'', `valor_config` = ''(85) 8796-1779'' WHERE `nome_config` =  ''telcom''', 'A configuração para o campo "telcom" foi alterada'),
(57, 'oshima', '2014-12-18 11:50:43', 'Alteração de configuração', 'UPDATE `settings` SET `nome_config` = ''telcel'', `valor_config` = ''(85) 8796-1779'' WHERE `nome_config` =  ''telcel''', 'A configuração para o campo "telcel" foi alterada'),
(58, 'oshima', '2014-12-18 11:55:18', 'Alteração de configuração', 'UPDATE `settings` SET `nome_config` = ''telcel'', `valor_config` = ''(00) 0000-0000'' WHERE `nome_config` =  ''telcel''', 'A configuração para o campo "telcel" foi alterada'),
(59, 'oshima', '2014-12-18 11:55:51', 'Alteração de configuração', 'UPDATE `settings` SET `nome_config` = ''telcel'', `valor_config` = ''(85) 8548-7735'' WHERE `nome_config` =  ''telcel''', 'A configuração para o campo "telcel" foi alterada'),
(60, 'oshima', '2014-12-18 11:57:23', 'Alteração de configuração', 'UPDATE `settings` SET `nome_config` = ''rua'', `valor_config` = ''Rua 303, 284'' WHERE `nome_config` =  ''rua''', 'A configuração para o campo "rua" foi alterada'),
(61, 'oshima', '2014-12-18 15:06:18', 'Login no sistema', 'SELECT *\nFROM (`usuarios`)\nWHERE `login` =  ''oshima''\nLIMIT 1', 'Usuário "oshima" fez login no sistema'),
(62, 'oshima', '2014-12-19 02:08:50', 'Login no sistema', 'SELECT *\nFROM (`usuarios`)\nWHERE `login` =  ''oshima''\nLIMIT 1', 'Usuário "oshima" fez login no sistema'),
(63, 'oshima', '2014-12-20 04:42:29', 'Login no sistema', 'SELECT *\nFROM (`usuarios`)\nWHERE `login` =  ''oshima''\nLIMIT 1', 'Usuário "oshima" fez login no sistema'),
(64, 'oshima', '2014-12-20 04:47:38', 'Inclusão de mídia', 'INSERT INTO `midia` (`nome`, `descricao`, `arquivo`) VALUES (''DOP'', ''DOP'', ''03.jpg'')', 'Nova mídia cadastrada no sistema'),
(65, 'oshima', '2014-12-20 04:52:31', 'Exclusão de mídia', 'DELETE FROM `midia`\nWHERE `id` =  ''3''', 'A mídia com o id "3" foi excluída'),
(66, 'oshima', '2014-12-20 04:52:35', 'Exclusão de mídia', 'DELETE FROM `midia`\nWHERE `id` =  ''1''', 'A mídia com o id "1" foi excluída'),
(67, 'oshima', '2014-12-23 13:44:33', 'Login no sistema', 'SELECT *\nFROM (`usuarios`)\nWHERE `login` =  ''oshima''\nLIMIT 1', 'Usuário "oshima" fez login no sistema'),
(68, 'oshima', '2014-12-23 13:53:47', 'Inclusão de categoria', 'INSERT INTO `cat_prod` (`nome`, `descricao`, `tags`) VALUES (''Maluco doido'', ''sdfgsdfgsdfg'', ''Maluco doido'')', 'Nova categoria cadastrada no sistema'),
(69, 'oshima', '2014-12-23 13:55:50', 'Exclusão de categoria', 'DELETE FROM `cat_prod`\nWHERE `id` =  ''4''', 'A categoria com o id "4" foi excluída'),
(70, 'oshima', '2014-12-23 13:57:30', 'Inclusão de categoria', 'INSERT INTO `cat_prod` (`nome`, `cat_pai_id`, `descricao`, `tags`) VALUES (''Maluco doido'', ''1'', ''asdfasdfasdfasd'', ''Maluco doido'')', 'Nova categoria cadastrada no sistema'),
(71, 'oshima', '2014-12-23 18:57:47', 'Login no sistema', 'SELECT *\nFROM (`usuarios`)\nWHERE `login` =  ''oshima''\nLIMIT 1', 'Usuário "oshima" fez login no sistema'),
(72, 'oshima', '2014-12-23 18:59:24', 'Alteração de categorias', 'UPDATE `cat_prod` SET `nome` = ''DOPhg'', `cat_pai_id` = ''1'', `descricao` = ''http://localhost/scwpanel/'', `tags` = ''dophg'' WHERE `id` =  ''3''', 'A categoria com o id "3" foi alterada'),
(73, 'oshima', '2014-12-23 19:22:28', 'Alteração de categorias', 'UPDATE `cat_prod` SET `nome` = ''Maluco doido'', `cat_pai_id` = ''0'', `descricao` = ''asdfasdfasdfasd'', `tags` = ''maluco-doido'' WHERE `id` =  ''5''', 'A categoria com o id "5" foi alterada'),
(74, 'oshima', '2014-12-23 19:24:23', 'Alteração de categorias', 'UPDATE `cat_prod` SET `nome` = ''Maluco doido'', `cat_pai_id` = ''2'', `descricao` = ''asdfasdfasdfasd'', `tags` = ''maluco-doido'' WHERE `id` =  ''5''', 'A categoria com o id "5" foi alterada'),
(75, 'oshima', '2014-12-23 19:33:01', 'Alteração de categorias', 'UPDATE `cat_prod` SET `nome` = ''DOP'', `cat_pai_id` = ''0'', `descricao` = ''sdfghdfghdfgh'', `tags` = ''dop'', `slug` = ''dop'' WHERE `id` =  ''2''', 'A categoria com o id "2" foi alterada'),
(76, 'oshima', '2014-12-23 19:33:06', 'Alteração de categorias', 'UPDATE `cat_prod` SET `nome` = ''DOPhg'', `cat_pai_id` = ''2'', `descricao` = ''http://localhost/scwpanel/'', `tags` = ''dophg'', `slug` = ''dophg'' WHERE `id` =  ''3''', 'A categoria com o id "3" foi alterada'),
(77, 'oshima', '2014-12-23 19:33:12', 'Alteração de categorias', 'UPDATE `cat_prod` SET `nome` = ''Maluco doido'', `cat_pai_id` = ''2'', `descricao` = ''asdfasdfasdfasd'', `tags` = ''maluco-doido'', `slug` = ''maluco-doido'' WHERE `id` =  ''5''', 'A categoria com o id "5" foi alterada'),
(78, 'oshima', '2014-12-24 12:42:55', 'Login no sistema', 'SELECT *\nFROM (`usuarios`)\nWHERE `login` =  ''oshima''\nLIMIT 1', 'Usuário "oshima" fez login no sistema'),
(79, 'oshima', '2014-12-24 12:43:47', 'Inclusão de produto', 'INSERT INTO `produtos` (`titulo`, `conteudo`, `preco`, `slug`, `cat_prod`, `arquivo`, `tags`) VALUES (''Maluco doido'', ''&lt;p&gt;&lt;img src=&quot;http://localhost/scwpanel/assets/uploads/logo-estampas-e-bordados.png&quot; alt=&quot;&quot; /&gt;&lt;/p&gt;'', ''000'', ''maluco-doido'', ''3'', ''scwpanel.png'', ''Maluco doido'')', 'Nova produto cadastrado no sistema'),
(80, 'oshima', '2014-12-24 12:50:35', 'Alteração de página', 'UPDATE `produtos` SET `titulo` = ''Maluco doido'', `conteudo` = ''&lt;p&gt;&lt;img src=&quot;http://localhost/scwpanel/assets/uploads/logo-estampas-e-bordados.png&quot; alt=&quot;&quot; /&gt;&lt;/p&gt;'', `preco` = ''0'', `slug` = ''maluco-doido'', `cat_prod` = ''5'', `tags` = ''maluco-doido'' WHERE `id` =  ''4''', 'A página com o id "4" foi alterada'),
(81, 'oshima', '2014-12-24 12:50:59', 'Alteração de página', 'UPDATE `produtos` SET `titulo` = ''Gfdfgh'', `conteudo` = ''&lt;p&gt;fdfghnfghfghjghj&lt;/p&gt;'', `preco` = ''0'', `slug` = ''gfdfgh'', `cat_prod` = ''5'', `tags` = ''gfdfgh'' WHERE `id` =  ''1''', 'A página com o id "1" foi alterada'),
(82, 'oshima', '2014-12-24 12:51:13', 'Alteração de página', 'UPDATE `produtos` SET `titulo` = ''Dophg01'', `conteudo` = ''&lt;p&gt;sfgsdfgsdf&lt;/p&gt;'', `preco` = ''0'', `slug` = ''dophg01'', `cat_prod` = ''5'', `tags` = ''dophg01'' WHERE `id` =  ''3''', 'A página com o id "3" foi alterada'),
(83, 'oshima', '2014-12-24 12:51:26', 'Alteração de página', 'UPDATE `produtos` SET `titulo` = ''Dophg'', `conteudo` = ''&lt;p&gt;sdfgsdfgsdfdfgs&lt;/p&gt;'', `preco` = ''0'', `slug` = ''dophg'', `cat_prod` = ''5'', `tags` = ''dophg'' WHERE `id` =  ''2''', 'A página com o id "2" foi alterada'),
(84, 'oshima', '2014-12-26 00:39:00', 'Login no sistema', 'SELECT *\nFROM (`usuarios`)\nWHERE `login` =  ''oshima''\nLIMIT 1', 'Usuário "oshima" fez login no sistema'),
(85, 'oshima', '2014-12-26 01:13:54', 'Inclusão de mídia', 'INSERT INTO `midia` (`tipo`, `nome`, `descricao`, `arquivo`) VALUES (''B'', ''DOP'', ''DOP'', ''01.jpg'')', 'Nova mídia cadastrada no sistema'),
(86, 'oshima', '2014-12-26 01:42:04', 'Inclusão de mídia', 'INSERT INTO `midia` (`tipo`, `nome`, `descricao`, `arquivo`) VALUES (''B'', ''Maluco doido'', ''DOP'', ''05.jpg'')', 'Nova mídia cadastrada no sistema'),
(87, 'oshima', '2014-12-26 01:51:47', 'Login no sistema', 'SELECT *\nFROM (`usuarios`)\nWHERE `login` =  ''oshima''\nLIMIT 1', 'Usuário "oshima" fez login no sistema'),
(88, 'oshima', '2014-12-26 01:51:58', 'Alteração de mídia', 'UPDATE `midia` SET `tipo` = ''B'', `nome` = ''Maluco doido'', `descricao` = ''DOP - Maluco doido'' WHERE `id` =  ''4''', 'A mídia com o id "4" foi alterada'),
(89, 'oshima', '2014-12-26 01:52:15', 'Alteração de mídia', 'UPDATE `midia` SET `tipo` = ''B'', `nome` = ''DOP'', `descricao` = ''DOP - Dop'' WHERE `id` =  ''3''', 'A mídia com o id "3" foi alterada'),
(90, 'oshima', '2014-12-26 01:55:31', 'Inclusão de mídia', 'INSERT INTO `midia` (`tipo`, `nome`, `descricao`, `arquivo`) VALUES (''B'', ''Maluco doido'', ''Maluco doido DOIDO'', ''04.jpg'')', 'Nova mídia cadastrada no sistema'),
(91, 'oshima', '2014-12-26 02:04:29', 'Login no sistema', 'SELECT *\nFROM (`usuarios`)\nWHERE `login` =  ''oshima''\nLIMIT 1', 'Usuário "oshima" fez login no sistema'),
(92, 'oshima', '2014-12-26 02:09:10', 'Inclusão de produto', 'INSERT INTO `produtos` (`titulo`, `conteudo`, `preco`, `slug`, `cat_prod`, `arquivo`, `tags`) VALUES (''Dophg'', ''&lt;p&gt;&lt;img src=&quot;http://localhost/scwpanel/assets/uploads/logo-estampas-e-bordados.png&quot; alt=&quot;&quot; /&gt;&lt;/p&gt;'', ''0'', ''dophg'', ''5'', ''011.jpg'', ''Dophg'')', 'Nova produto cadastrado no sistema'),
(93, 'oshima', '2014-12-26 02:10:55', 'Inclusão de produto', 'INSERT INTO `produtos` (`titulo`, `conteudo`, `preco`, `slug`, `cat_prod`, `arquivo`, `tags`) VALUES (''Dophg'', ''&lt;p&gt;&lt;img src=&quot;http://localhost/scwpanel/assets/uploads/logo-estampas-e-bordados.png&quot; alt=&quot;&quot; /&gt;&lt;/p&gt;'', ''0'', ''dophg'', ''5'', ''041.jpg'', ''Dophg'')', 'Nova produto cadastrado no sistema'),
(94, 'oshima', '2014-12-26 02:20:49', 'Alteração de página', 'UPDATE `produtos` SET `titulo` = ''Dophg'', `conteudo` = ''&lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce in felis hendrerit, fringilla ex id, tempus lectus. Quisque pellentesque erat dictum justo molestie, in maximus turpis gravida. Cras leo felis, euismod tempor turpis a, cursus bibendum purus. In hac habitasse platea dictumst. In mollis massa ut viverra eleifend. Donec tempus non enim eu luctus. Aenean imperdiet in nibh et laoreet. Sed in lorem eu nunc elementum hendrerit. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Maecenas aliquam mi ut metus congue, a pulvinar orci mollis. Vestibulum at eros a eros aliquam euismod rutrum sit amet nisl. Aenean sapien tellus, porta imperdiet sagittis ac, congue id nibh.&lt;/p&gt;\\r\\n&lt;p&gt;Nulla ut fringilla sem, vitae interdum justo. Quisque vitae massa ut augue interdum lobortis eu cursus risus. Integer nec quam non est pharetra tempor a sed turpis. Phasellus sed tincidunt erat. Mauris lacinia vehicula eros, sit amet cursus libero placerat vitae. Suspendisse eget dictum nulla, vestibulum malesuada lorem. Suspendisse purus ipsum, posuere nec metus eget, mollis aliquet diam. Aliquam scelerisque ultricies tempor.&lt;/p&gt;\\r\\n&lt;p&gt;Mauris vitae tempor erat. Pellentesque blandit lacus quis massa feugiat, et blandit lorem maximus. Quisque blandit libero quis mi ullamcorper dapibus ut nec ex. Etiam commodo est eu tellus congue, vel sollicitudin leo iaculis. Integer placerat tortor at mollis faucibus. Cras lobortis dui sed tortor aliquam, nec pellentesque ligula gravida. Nullam vitae maximus lorem, quis placerat leo. Proin fermentum, mauris nec pellentesque placerat, magna magna faucibus turpis, id lacinia velit quam eu sem. Sed a lacus eget lorem sollicitudin finibus nec auctor libero. Ut augue mauris, congue ac sem eget, cursus ornare est. Aenean viverra ipsum a gravida aliquet. Donec volutpat ut mi varius tempus. Duis commodo tincidunt auctor. Sed vitae nibh nec tortor gravida sagittis.&lt;/p&gt;\\r\\n&lt;p&gt;Nam et pellentesque justo, id feugiat tellus. Sed ultrices gravida ornare. Praesent sollicitudin laoreet ullamcorper. Praesent pretium lacinia accumsan. Integer volutpat purus quis metus viverra ultricies. Praesent aliquam dolor a dolor pretium dictum. Nullam sit amet porta arcu, eget posuere purus. Cras quis quam ex. Nulla ullamcorper mauris vitae ante interdum, vel blandit diam consequat.&lt;/p&gt;\\r\\n&lt;p&gt;Vivamus eu justo tincidunt, semper velit a, fringilla eros. Nulla facilisi. Ut ultricies auctor dui. Etiam egestas scelerisque ex vel auctor. Aliquam ut tellus scelerisque, accumsan mi vel, sodales mi. Praesent eleifend quam vitae nulla rhoncus imperdiet vel at nisi. Curabitur et ex condimentum, facilisis metus eget, tincidunt elit. Aenean sit amet posuere ligula, ac blandit lectus. Fusce hendrerit elementum arcu, a fringilla nunc porta at. Cras luctus viverra odio ac sodales. Vivamus vehicula ut eros eu luctus. Vivamus rhoncus ligula at lectus sollicitudin eleifend. Nulla maximus placerat neque ac feugiat. In at gravida risus.&lt;/p&gt;'', `preco` = ''0'', `slug` = ''dophg'', `cat_prod` = ''5'', `tags` = ''dophg'' WHERE `id` =  ''2''', 'A página com o id "2" foi alterada'),
(95, 'oshima', '2014-12-26 03:06:56', 'Alteração de configuração', 'UPDATE `settings` SET `nome_config` = ''rua'', `valor_config` = ''Rua 315, 168'' WHERE `nome_config` =  ''rua''', 'A configuração para o campo "rua" foi alterada'),
(96, 'oshima', '2014-12-26 03:06:57', 'Exclusão de configuração', 'DELETE FROM `settings`\nWHERE `nome_config` =  ''skype''', 'A configuração do campo "skype" foi excluída'),
(97, 'oshima', '2014-12-26 03:08:55', 'Alteração de configuração', 'UPDATE `settings` SET `nome_config` = ''rua'', `valor_config` = ''Avenida Santos Dumount, 1789'' WHERE `nome_config` =  ''rua''', 'A configuração para o campo "rua" foi alterada'),
(98, 'oshima', '2014-12-26 03:08:55', 'Alteração de configuração', 'UPDATE `settings` SET `nome_config` = ''bairro'', `valor_config` = ''Aldeota'' WHERE `nome_config` =  ''bairro''', 'A configuração para o campo "bairro" foi alterada'),
(99, 'oshima', '2014-12-26 03:08:56', 'Inclusão de configuração', 'INSERT INTO `settings` (`nome_config`, `valor_config`) VALUES (''skype'', 0)', 'Nova configuração cadastrada no sistema'),
(100, 'oshima', '2014-12-26 04:03:16', 'Login no sistema', 'SELECT *\nFROM (`usuarios`)\nWHERE `login` =  ''oshima''\nLIMIT 1', 'Usuário "oshima" fez login no sistema'),
(101, 'oshima', '2014-12-26 11:21:12', 'Login no sistema', 'SELECT *\nFROM (`usuarios`)\nWHERE `login` =  ''oshima''\nLIMIT 1', 'Usuário "oshima" fez login no sistema'),
(102, 'oshima', '2014-12-26 14:00:50', 'Login no sistema', 'SELECT *\nFROM (`usuarios`)\nWHERE `login` =  ''oshima''\nLIMIT 1', 'Usuário "oshima" fez login no sistema'),
(103, 'oshima', '2014-12-26 16:03:24', 'Login no sistema', 'SELECT *\nFROM (`usuarios`)\nWHERE `login` =  ''oshima''\nLIMIT 1', 'Usuário "oshima" fez login no sistema'),
(104, 'oshima', '2014-12-26 16:45:27', 'Exclusão de configuração', 'DELETE FROM `settings`\nWHERE `nome_config` =  ''rua''', 'A configuração do campo "rua" foi excluída'),
(105, 'oshima', '2014-12-26 16:45:27', 'Exclusão de configuração', 'DELETE FROM `settings`\nWHERE `nome_config` =  ''bairro''', 'A configuração do campo "bairro" foi excluída'),
(106, 'oshima', '2014-12-26 16:45:27', 'Exclusão de configuração', 'DELETE FROM `settings`\nWHERE `nome_config` =  ''cid_uf''', 'A configuração do campo "cid_uf" foi excluída'),
(107, 'oshima', '2014-12-26 16:45:27', 'Exclusão de configuração', 'DELETE FROM `settings`\nWHERE `nome_config` =  ''emailcom''', 'A configuração do campo "emailcom" foi excluída'),
(108, 'oshima', '2014-12-26 16:45:28', 'Exclusão de configuração', 'DELETE FROM `settings`\nWHERE `nome_config` =  ''descricao_site''', 'A configuração do campo "descricao_site" foi excluída'),
(109, 'oshima', '2014-12-26 16:45:28', 'Exclusão de configuração', 'DELETE FROM `settings`\nWHERE `nome_config` =  ''descricao_curta''', 'A configuração do campo "descricao_curta" foi excluída'),
(110, 'oshima', '2014-12-26 16:45:28', 'Exclusão de configuração', 'DELETE FROM `settings`\nWHERE `nome_config` =  ''keywords_site''', 'A configuração do campo "keywords_site" foi excluída'),
(111, 'oshima', '2014-12-26 16:45:28', 'Exclusão de configuração', 'DELETE FROM `settings`\nWHERE `nome_config` =  ''txt_home''', 'A configuração do campo "txt_home" foi excluída'),
(112, 'oshima', '2014-12-26 16:45:28', 'Alteração de configuração', 'UPDATE `settings` SET `nome_config` = ''skype'', `valor_config` = ''oshima.gdm'' WHERE `nome_config` =  ''skype''', 'A configuração para o campo "skype" foi alterada'),
(113, 'oshima', '2014-12-26 16:45:29', 'Alteração de configuração', 'UPDATE `settings` SET `nome_config` = ''cep'', `valor_config` = ''0000000'' WHERE `nome_config` =  ''cep''', 'A configuração para o campo "cep" foi alterada'),
(114, 'oshima', '2014-12-26 16:45:29', 'Alteração de configuração', 'UPDATE `settings` SET `nome_config` = ''telcom'', `valor_config` = ''(00) 0000-0000'' WHERE `nome_config` =  ''telcom''', 'A configuração para o campo "telcom" foi alterada'),
(115, 'oshima', '2014-12-26 16:45:29', 'Alteração de configuração', 'UPDATE `settings` SET `nome_config` = ''telcel'', `valor_config` = ''(00) 0000-0000'' WHERE `nome_config` =  ''telcel''', 'A configuração para o campo "telcel" foi alterada'),
(116, 'oshima', '2014-12-26 16:53:51', 'Inclusão de configuração', 'INSERT INTO `settings` (`nome_config`, `valor_config`) VALUES (''rua'', ''Rua 303, 284'')', 'Nova configuração cadastrada no sistema'),
(117, 'oshima', '2014-12-26 16:53:52', 'Inclusão de configuração', 'INSERT INTO `settings` (`nome_config`, `valor_config`) VALUES (''bairro'', ''Jangurussu'')', 'Nova configuração cadastrada no sistema'),
(118, 'oshima', '2014-12-26 16:53:52', 'Inclusão de configuração', 'INSERT INTO `settings` (`nome_config`, `valor_config`) VALUES (''cid_uf'', ''Fortaleza'')', 'Nova configuração cadastrada no sistema'),
(119, 'oshima', '2014-12-26 16:53:52', 'Inclusão de configuração', 'INSERT INTO `settings` (`nome_config`, `valor_config`) VALUES (''emailcom'', ''antevertonlima@gmail.com'')', 'Nova configuração cadastrada no sistema'),
(120, 'oshima', '2014-12-26 16:53:52', 'Inclusão de configuração', 'INSERT INTO `settings` (`nome_config`, `valor_config`) VALUES (''descricao_site'', 0)', 'Nova configuração cadastrada no sistema'),
(121, 'oshima', '2014-12-26 16:53:52', 'Inclusão de configuração', 'INSERT INTO `settings` (`nome_config`, `valor_config`) VALUES (''descricao_curta'', 0)', 'Nova configuração cadastrada no sistema'),
(122, 'oshima', '2014-12-26 16:53:52', 'Inclusão de configuração', 'INSERT INTO `settings` (`nome_config`, `valor_config`) VALUES (''keywords_site'', 0)', 'Nova configuração cadastrada no sistema'),
(123, 'oshima', '2014-12-26 16:53:53', 'Inclusão de configuração', 'INSERT INTO `settings` (`nome_config`, `valor_config`) VALUES (''txt_home'', 0)', 'Nova configuração cadastrada no sistema'),
(124, 'oshima', '2014-12-26 16:53:53', 'Alteração de configuração', 'UPDATE `settings` SET `nome_config` = ''cep'', `valor_config` = ''60.866-320'' WHERE `nome_config` =  ''cep''', 'A configuração para o campo "cep" foi alterada'),
(125, 'oshima', '2014-12-26 16:53:53', 'Alteração de configuração', 'UPDATE `settings` SET `nome_config` = ''telcom'', `valor_config` = ''(85) 8796-1779'' WHERE `nome_config` =  ''telcom''', 'A configuração para o campo "telcom" foi alterada'),
(126, 'oshima', '2014-12-26 16:53:53', 'Alteração de configuração', 'UPDATE `settings` SET `nome_config` = ''telcel'', `valor_config` = ''(85) 8548-7735'' WHERE `nome_config` =  ''telcel''', 'A configuração para o campo "telcel" foi alterada'),
(127, 'oshima', '2014-12-26 17:04:27', 'Alteração de configuração', 'UPDATE `settings` SET `nome_config` = ''descricao_site'', `valor_config` = ''This is non libero bibendum, scelerisque arcu id, placerat nunc. Integer ullamcorper rutrum dui eget porta. Fusce enim dui, pulvinar a augue nec, dapibus hendrerit mauris. Praesent efficitur, elit non convallis faucibus, enim sapien suscipit mi, sit amet fringilla felis arcu id sem. Phasellus semper felis in odio convallis, et venenatis nisl posuere. Morbi non aliquet magna, a consectetur risus. Vivamus quis tellus eros. Nulla sagittis nisi sit amet orci consectetur laoreet.'' WHERE `nome_config` =  ''descricao_site''', 'A configuração para o campo "descricao_site" foi alterada'),
(128, 'oshima', '2014-12-26 17:04:28', 'Alteração de configuração', 'UPDATE `settings` SET `nome_config` = ''descricao_curta'', `valor_config` = ''This is non libero bibendum, scelerisque arcu id, placerat nunc. Integer ullamcorper rutrum dui eget porta. Fusce enim dui, pulvinar a augue nec, dapibus hendrerit mauris. Praesent efficitur, elit non convallis faucibus, enim sapien suscipit mi, sit amet fringilla felis arcu id sem. Phasellus semper felis in odio convallis, et venenatis nisl posuere. Morbi non aliquet magna, a consectetur risus. Vivamus quis tellus eros. Nulla sagittis nisi sit amet orci consectetur laoreet.'' WHERE `nome_config` =  ''descricao_curta''', 'A configuração para o campo "descricao_curta" foi alterada'),
(129, 'oshima', '2014-12-26 17:04:28', 'Alteração de configuração', 'UPDATE `settings` SET `nome_config` = ''keywords_site'', `valor_config` = ''This is non libero bibendum, scelerisque arcu id, placerat nunc. Integer ullamcorper rutrum dui eget porta. Fusce enim dui, pulvinar a augue nec, dapibus hendrerit mauris. Praesent efficitur, elit non convallis faucibus, enim sapien suscipit mi, sit amet fringilla felis arcu id sem. Phasellus semper felis in odio convallis, et venenatis nisl posuere. Morbi non aliquet magna, a consectetur risus. Vivamus quis tellus eros. Nulla sagittis nisi sit amet orci consectetur laoreet.'' WHERE `nome_config` =  ''keywords_site''', 'A configuração para o campo "keywords_site" foi alterada'),
(130, 'oshima', '2014-12-26 17:04:28', 'Alteração de configuração', 'UPDATE `settings` SET `nome_config` = ''txt_home'', `valor_config` = ''This is non libero bibendum, scelerisque arcu id, placerat nunc. Integer ullamcorper rutrum dui eget porta. Fusce enim dui, pulvinar a augue nec, dapibus hendrerit mauris. Praesent efficitur, elit non convallis faucibus, enim sapien suscipit mi, sit amet fringilla felis arcu id sem. Phasellus semper felis in odio convallis, et venenatis nisl posuere. Morbi non aliquet magna, a consectetur risus. Vivamus quis tellus eros. Nulla sagittis nisi sit amet orci consectetur laoreet.'' WHERE `nome_config` =  ''txt_home''', 'A configuração para o campo "txt_home" foi alterada'),
(131, 'oshima', '2014-12-26 17:56:31', 'Login no sistema', 'SELECT *\nFROM (`usuarios`)\nWHERE `login` =  ''oshima''\nLIMIT 1', 'Usuário "oshima" fez login no sistema'),
(132, 'oshima', '2014-12-26 18:12:09', 'Logoff no sistema', '', 'O usuário "oshima" fez logoff do sistema'),
(133, 'oshima', '2014-12-26 18:12:19', 'Login no sistema', 'SELECT *\nFROM (`usuarios`)\nWHERE `login` =  ''oshima''\nLIMIT 1', 'Usuário "oshima" fez login no sistema'),
(134, 'oshima', '2014-12-26 18:15:09', 'Logoff no sistema', '', 'O usuário "oshima" fez logoff do sistema'),
(135, 'oshima', '2014-12-26 18:18:48', 'Login no sistema', 'SELECT *\nFROM (`usuarios`)\nWHERE `login` =  ''oshima''\nLIMIT 1', 'Usuário "oshima" fez login no sistema'),
(136, 'oshima', '2014-12-26 18:20:19', 'Logoff no sistema', '', 'O usuário "oshima" fez logoff do sistema'),
(137, 'oshima', '2014-12-26 18:35:38', 'Login no sistema', 'SELECT *\nFROM (`usuarios`)\nWHERE `login` =  ''oshima''\nLIMIT 1', 'Usuário "oshima" fez login no sistema'),
(138, 'oshima', '2014-12-26 19:01:21', 'Logoff no sistema', '', 'O usuário "oshima" fez logoff do sistema'),
(139, 'oshima', '2014-12-26 19:01:25', 'Login no sistema', 'SELECT *\nFROM (`usuarios`)\nWHERE `login` =  ''oshima''\nLIMIT 1', 'Usuário "oshima" fez login no sistema'),
(140, 'oshima', '2014-12-26 19:02:18', 'Exclusão de página', 'DELETE FROM `produtos`\nWHERE `id` =  ''5''', 'A página com o id "5" foi excluída'),
(141, 'oshima', '2014-12-26 19:02:27', 'Exclusão de página', 'DELETE FROM `produtos`\nWHERE `id` =  ''6''', 'A página com o id "6" foi excluída'),
(142, 'oshima', '2014-12-28 19:16:17', 'Login no sistema', 'SELECT *\nFROM (`usuarios`)\nWHERE `login` =  ''oshima''\nLIMIT 1', 'Usuário "oshima" fez login no sistema'),
(143, 'oshima', '2014-12-29 11:48:04', 'Login no sistema', 'SELECT *\nFROM (`usuarios`)\nWHERE `login` =  ''oshima''\nLIMIT 1', 'Usuário "oshima" fez login no sistema'),
(144, 'oshima', '2014-12-29 12:11:32', 'Login no sistema', 'SELECT *\nFROM (`usuarios`)\nWHERE `login` =  ''oshima''\nLIMIT 1', 'Usuário "oshima" fez login no sistema'),
(145, 'oshima', '2014-12-29 16:24:34', 'Login no sistema', 'SELECT *\nFROM (`usuarios`)\nWHERE `login` =  ''oshima''\nLIMIT 1', 'Usuário "oshima" fez login no sistema'),
(146, 'oshima', '2014-12-29 18:00:24', 'Login no sistema', 'SELECT *\nFROM (`usuarios`)\nWHERE `login` =  ''oshima''\nLIMIT 1', 'Usuário "oshima" fez login no sistema'),
(147, 'oshima', '2014-12-29 18:03:29', 'Login no sistema', 'SELECT *\nFROM (`usuarios`)\nWHERE `login` =  ''oshima''\nLIMIT 1', 'Usuário "oshima" fez login no sistema'),
(148, 'oshima', '2014-12-29 18:57:57', 'Logoff no sistema', '', 'O usuário "oshima" fez logoff do sistema'),
(149, 'oshima', '2014-12-29 18:58:06', 'Login no sistema', 'SELECT *\nFROM (`usuarios`)\nWHERE `login` =  ''oshima''\nLIMIT 1', 'Usuário "oshima" fez login no sistema'),
(150, 'oshima', '2014-12-29 19:09:27', 'Logoff no sistema', '', 'O usuário "oshima" fez logoff do sistema'),
(151, 'oshima', '2014-12-29 19:09:35', 'Login no sistema', 'SELECT *\nFROM (`usuarios`)\nWHERE `login` =  ''oshima''\nLIMIT 1', 'Usuário "oshima" fez login no sistema'),
(152, 'oshima', '2014-12-29 19:20:42', 'Login no sistema', 'SELECT *\nFROM (`usuarios`)\nWHERE `login` =  ''oshima''\nLIMIT 1', 'Usuário "oshima" fez login no sistema'),
(153, 'oshima', '2014-12-29 19:20:58', 'Logoff no sistema', '', 'O usuário "oshima" fez logoff do sistema'),
(154, 'oshima', '2014-12-29 19:21:16', 'Login no sistema', 'SELECT *\nFROM (`usuarios`)\nWHERE `login` =  ''oshima''\nLIMIT 1', 'Usuário "oshima" fez login no sistema'),
(155, 'oshima', '2014-12-30 12:19:36', 'Login no sistema', 'SELECT *\nFROM (`usuarios`)\nWHERE `login` =  ''oshima''\nLIMIT 1', 'Usuário "oshima" fez login no sistema'),
(156, 'oshima', '2014-12-30 12:20:55', 'Alteração de configuração', 'UPDATE `settings` SET `nome_config` = ''descricao_site'', `valor_config` = ''This is non libero bibendum, scelerisque arcu id, placerat nunc. Integer ullamcorper rutrum dui eget porta. Fusce enim dui, pulvinar a augue nec, dapi'' WHERE `nome_config` =  ''descricao_site''', 'A configuração para o campo "descricao_site" foi alterada'),
(157, 'oshima', '2014-12-30 12:20:56', 'Alteração de configuração', 'UPDATE `settings` SET `nome_config` = ''descricao_curta'', `valor_config` = ''This is non libero bibendum, scelerisque arcu id, placerat nunc. Integ'' WHERE `nome_config` =  ''descricao_curta''', 'A configuração para o campo "descricao_curta" foi alterada'),
(158, 'oshima', '2014-12-30 12:20:56', 'Alteração de configuração', 'UPDATE `settings` SET `nome_config` = ''keywords_site'', `valor_config` = ''This is non libero bibendum, scelerisque arcu id, placerat nunc. Integer ullamcorper rutrum dui eget porta. Fusce enim dui, pulvinar a augue nec, dapibus hendrerit mauris. Praesent efficitur, elit non convallis faucibus, enim sapien suscipit mi, sit amet '' WHERE `nome_config` =  ''keywords_site''', 'A configuração para o campo "keywords_site" foi alterada'),
(159, 'oshima', '2014-12-30 12:20:56', 'Alteração de configuração', 'UPDATE `settings` SET `nome_config` = ''txt_home'', `valor_config` = ''<p>This is non libero bibendum, scelerisque arcu id, placerat nunc. Integer ullamcorper rutrum dui eget porta. Fusce enim dui, pulvinar a augue nec, dapibus hendrerit mauris. Praesent efficitur, elit non convallis faucibus, enim sapien suscipit mi, sit amet fringilla felis arcu id sem. Phasellus semper felis in odio convallis, et venenatis nisl posuere. Morbi non aliquet magna, a consectetur risus. Vivamus quis tellus eros. Nulla sagittis nisi sit amet orci consectetur laoreet.</p>'' WHERE `nome_config` =  ''txt_home''', 'A configuração para o campo "txt_home" foi alterada'),
(160, 'oshima', '2014-12-30 14:16:54', 'Login no sistema', 'SELECT *\nFROM (`usuarios`)\nWHERE `login` =  ''oshima''\nLIMIT 1', 'Usuário "oshima" fez login no sistema'),
(161, 'oshima', '2014-12-30 16:45:19', 'Login no sistema', 'SELECT *\nFROM (`usuarios`)\nWHERE `login` =  ''oshima''\nLIMIT 1', 'Usuário "oshima" fez login no sistema'),
(162, 'oshima', '2014-12-30 16:58:55', 'Logoff no sistema', '', 'O usuário "oshima" fez logoff do sistema'),
(163, 'oshima', '2014-12-30 17:11:25', 'Login no sistema', 'SELECT *\nFROM (`usuarios`)\nWHERE `login` =  ''oshima''\nLIMIT 1', 'Usuário "oshima" fez login no sistema'),
(164, 'oshima', '2014-12-30 17:43:05', 'Logoff no sistema', '', 'O usuário "oshima" fez logoff do sistema'),
(165, 'oshima', '2014-12-30 17:46:33', 'Login no sistema', 'SELECT *\nFROM (`usuarios`)\nWHERE `login` =  ''oshima''\nLIMIT 1', 'Usuário "oshima" fez login no sistema'),
(166, 'oshima', '2014-12-30 17:55:22', 'Login no sistema', 'SELECT *\nFROM (`usuarios`)\nWHERE `login` =  ''oshima''\nLIMIT 1', 'Usuário "oshima" fez login no sistema'),
(167, 'oshima', '2014-12-30 18:01:47', 'Login no sistema', 'SELECT *\nFROM (`usuarios`)\nWHERE `login` =  ''oshima''\nLIMIT 1', 'Usuário "oshima" fez login no sistema'),
(168, 'oshima', '2015-01-02 10:55:52', 'Login no sistema', 'SELECT *\nFROM (`usuarios`)\nWHERE `login` =  ''oshima''\nLIMIT 1', 'Usuário "oshima" fez login no sistema'),
(169, 'oshima', '2015-01-02 12:51:02', 'Login no sistema', 'SELECT *\nFROM (`usuarios`)\nWHERE `login` =  ''oshima''\nLIMIT 1', 'Usuário "oshima" fez login no sistema'),
(170, 'oshima', '2015-01-02 13:36:28', 'Login no sistema', 'SELECT *\nFROM (`usuarios`)\nWHERE `login` =  ''oshima''\nLIMIT 1', 'Usuário "oshima" fez login no sistema'),
(171, 'oshima', '2015-01-02 13:40:20', 'Logoff no sistema', '', 'O usuário "oshima" fez logoff do sistema'),
(172, 'oshima', '2015-01-02 13:40:22', 'Login no sistema', 'SELECT *\nFROM (`usuarios`)\nWHERE `login` =  ''oshima''\nLIMIT 1', 'Usuário "oshima" fez login no sistema'),
(173, 'oshima', '2015-01-02 15:16:19', 'Login no sistema', 'SELECT *\nFROM (`usuarios`)\nWHERE `login` =  ''oshima''\nLIMIT 1', 'Usuário "oshima" fez login no sistema'),
(174, 'oshima', '2015-01-03 16:58:38', 'Login no sistema', 'SELECT *\nFROM (`usuarios`)\nWHERE `login` =  ''oshima''\nLIMIT 1', 'Usuário "oshima" fez login no sistema'),
(175, 'oshima', '2015-01-03 16:58:44', 'Exclusão de categoria', 'DELETE FROM `cat_prod`\nWHERE `id` =  ''2''', 'A categoria com o id "2" foi excluída'),
(176, 'oshima', '2015-01-03 17:19:14', 'Logoff no sistema', '', 'O usuário "oshima" fez logoff do sistema'),
(177, 'oshima', '2015-01-03 17:19:18', 'Login no sistema', 'SELECT *\nFROM (`usuarios`)\nWHERE `login` =  ''oshima''\nLIMIT 1', 'Usuário "oshima" fez login no sistema'),
(178, 'oshima', '2015-01-03 17:19:54', 'Alteração de configuração', 'UPDATE `settings` SET `nome_config` = ''email_adm'', `valor_config` = ''antevertonlima@gmail.com.br'' WHERE `nome_config` =  ''email_adm''', 'A configuração para o campo "email_adm" foi alterada'),
(179, 'oshima', '2015-01-03 17:29:59', 'Alteração de configuração', 'UPDATE `settings` SET `nome_config` = ''email_adm'', `valor_config` = ''elisonwabreu@gmail.com.br'' WHERE `nome_config` =  ''email_adm''', 'A configuração para o campo "email_adm" foi alterada'),
(180, 'oshima', '2015-01-03 17:30:00', 'Alteração de configuração', 'UPDATE `settings` SET `nome_config` = ''emailcom'', `valor_config` = ''elisonwabreu@gmail.com'' WHERE `nome_config` =  ''emailcom''', 'A configuração para o campo "emailcom" foi alterada'),
(181, 'oshima', '2015-01-03 18:52:12', 'Login no sistema', 'SELECT *\nFROM (`usuarios`)\nWHERE `login` =  ''oshima''\nLIMIT 1', 'Usuário "oshima" fez login no sistema');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cat_prod`
--

CREATE TABLE IF NOT EXISTS `cat_prod` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cat_pai_id` int(11) NOT NULL COMMENT 'Se hover uma categoria acima da atual o id da categoria principal ficara aqui',
  `nome` varchar(70) NOT NULL,
  `descricao` longtext NOT NULL,
  `slug` varchar(100) NOT NULL,
  `tags` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Extraindo dados da tabela `cat_prod`
--

INSERT INTO `cat_prod` (`id`, `cat_pai_id`, `nome`, `descricao`, `slug`, `tags`) VALUES
(3, 2, 'DOPhg', 'http://localhost/scwpanel/', 'dophg', 'dophg'),
(5, 2, 'Maluco doido', 'asdfasdfasdfasd', 'maluco-doido', 'maluco-doido');

-- --------------------------------------------------------

--
-- Estrutura da tabela `midia`
--

CREATE TABLE IF NOT EXISTS `midia` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tipo` char(1) NOT NULL,
  `nome` varchar(45) NOT NULL,
  `descricao` varchar(255) NOT NULL,
  `arquivo` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Extraindo dados da tabela `midia`
--

INSERT INTO `midia` (`id`, `tipo`, `nome`, `descricao`, `arquivo`) VALUES
(2, 'G', 'Logo', 'logo', 'logo-estampas-e-bordados.png'),
(3, 'B', 'DOP', 'DOP - Dop', '01.jpg'),
(4, 'B', 'Maluco doido', 'DOP - Maluco doido', '05.jpg'),
(5, 'B', 'Maluco doido', 'Maluco doido DOIDO', '04.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE IF NOT EXISTS `produtos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(255) NOT NULL,
  `cat_prod` int(11) NOT NULL,
  `preco` float NOT NULL,
  `arquivo` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `tags` varchar(100) NOT NULL,
  `conteudo` longtext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id`, `titulo`, `cat_prod`, `preco`, `arquivo`, `slug`, `tags`, `conteudo`) VALUES
(1, 'Gfdfgh', 5, 0, 'glyphicons-halflings.png', 'gfdfgh', 'gfdfgh', '&lt;p&gt;fdfghnfghfghjghj&lt;/p&gt;'),
(2, 'Dophg', 5, 0, 'bg-body.jpg', 'dophg', 'dophg', '&lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce in felis hendrerit, fringilla ex id, tempus lectus. Quisque pellentesque erat dictum justo molestie, in maximus turpis gravida. Cras leo felis, euismod tempor turpis a, cursus bibendum purus. In hac habitasse platea dictumst. In mollis massa ut viverra eleifend. Donec tempus non enim eu luctus. Aenean imperdiet in nibh et laoreet. Sed in lorem eu nunc elementum hendrerit. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Maecenas aliquam mi ut metus congue, a pulvinar orci mollis. Vestibulum at eros a eros aliquam euismod rutrum sit amet nisl. Aenean sapien tellus, porta imperdiet sagittis ac, congue id nibh.&lt;/p&gt;\r\n&lt;p&gt;Nulla ut fringilla sem, vitae interdum justo. Quisque vitae massa ut augue interdum lobortis eu cursus risus. Integer nec quam non est pharetra tempor a sed turpis. Phasellus sed tincidunt erat. Mauris lacinia vehicula eros, sit amet cursus libero placerat vitae. Suspendisse eget dictum nulla, vestibulum malesuada lorem. Suspendisse purus ipsum, posuere nec metus eget, mollis aliquet diam. Aliquam scelerisque ultricies tempor.&lt;/p&gt;\r\n&lt;p&gt;Mauris vitae tempor erat. Pellentesque blandit lacus quis massa feugiat, et blandit lorem maximus. Quisque blandit libero quis mi ullamcorper dapibus ut nec ex. Etiam commodo est eu tellus congue, vel sollicitudin leo iaculis. Integer placerat tortor at mollis faucibus. Cras lobortis dui sed tortor aliquam, nec pellentesque ligula gravida. Nullam vitae maximus lorem, quis placerat leo. Proin fermentum, mauris nec pellentesque placerat, magna magna faucibus turpis, id lacinia velit quam eu sem. Sed a lacus eget lorem sollicitudin finibus nec auctor libero. Ut augue mauris, congue ac sem eget, cursus ornare est. Aenean viverra ipsum a gravida aliquet. Donec volutpat ut mi varius tempus. Duis commodo tincidunt auctor. Sed vitae nibh nec tortor gravida sagittis.&lt;/p&gt;\r\n&lt;p&gt;Nam et pellentesque justo, id feugiat tellus. Sed ultrices gravida ornare. Praesent sollicitudin laoreet ullamcorper. Praesent pretium lacinia accumsan. Integer volutpat purus quis metus viverra ultricies. Praesent aliquam dolor a dolor pretium dictum. Nullam sit amet porta arcu, eget posuere purus. Cras quis quam ex. Nulla ullamcorper mauris vitae ante interdum, vel blandit diam consequat.&lt;/p&gt;\r\n&lt;p&gt;Vivamus eu justo tincidunt, semper velit a, fringilla eros. Nulla facilisi. Ut ultricies auctor dui. Etiam egestas scelerisque ex vel auctor. Aliquam ut tellus scelerisque, accumsan mi vel, sodales mi. Praesent eleifend quam vitae nulla rhoncus imperdiet vel at nisi. Curabitur et ex condimentum, facilisis metus eget, tincidunt elit. Aenean sit amet posuere ligula, ac blandit lectus. Fusce hendrerit elementum arcu, a fringilla nunc porta at. Cras luctus viverra odio ac sodales. Vivamus vehicula ut eros eu luctus. Vivamus rhoncus ligula at lectus sollicitudin eleifend. Nulla maximus placerat neque ac feugiat. In at gravida risus.&lt;/p&gt;'),
(3, 'Dophg01', 5, 0, 'bg-body1.jpg', 'dophg01', 'dophg01', '&lt;p&gt;sfgsdfgsdf&lt;/p&gt;'),
(4, 'Maluco doido', 5, 0, 'scwpanel.png', 'maluco-doido', 'maluco-doido', '&lt;p&gt;&lt;img src=&quot;http://localhost/scwpanel/assets/uploads/logo-estampas-e-bordados.png&quot; alt=&quot;&quot; /&gt;&lt;/p&gt;');

-- --------------------------------------------------------

--
-- Estrutura da tabela `settings`
--

CREATE TABLE IF NOT EXISTS `settings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome_config` varchar(255) NOT NULL,
  `valor_config` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=29 ;

--
-- Extraindo dados da tabela `settings`
--

INSERT INTO `settings` (`id`, `nome_config`, `valor_config`) VALUES
(1, 'nome_site', 'SCWPANEL'),
(2, 'url_logomarca', 'http://localhost/scwpanel/assets/uploads/logo-estampas-e-bordados.png'),
(3, 'email_adm', 'elisonwabreu@gmail.com.br'),
(9, 'twitter', '@everton_rolim'),
(15, 'cep', '60.866-320'),
(16, 'telcom', '(85) 8796-1779'),
(17, 'telcel', '(85) 8548-7735'),
(18, 'facebook', 'https://www.facebook.com/doctype'),
(20, 'skype', 'oshima.gdm'),
(21, 'rua', 'Rua 303, 284'),
(22, 'bairro', 'Jangurussu'),
(23, 'cid_uf', 'Fortaleza'),
(24, 'emailcom', 'elisonwabreu@gmail.com'),
(25, 'descricao_site', 'This is non libero bibendum, scelerisque arcu id, placerat nunc. Integer ullamcorper rutrum dui eget porta. Fusce enim dui, pulvinar a augue nec, dapi'),
(26, 'descricao_curta', 'This is non libero bibendum, scelerisque arcu id, placerat nunc. Integ'),
(27, 'keywords_site', 'This is non libero bibendum, scelerisque arcu id, placerat nunc. Integer ullamcorper rutrum dui eget porta. Fusce enim dui, pulvinar a augue nec, dapibus hendrerit mauris. Praesent efficitur, elit non convallis faucibus, enim sapien suscipit mi, sit amet '),
(28, 'txt_home', '<p>This is non libero bibendum, scelerisque arcu id, placerat nunc. Integer ullamcorper rutrum dui eget porta. Fusce enim dui, pulvinar a augue nec, dapibus hendrerit mauris. Praesent efficitur, elit non convallis faucibus, enim sapien suscipit mi, sit amet fringilla felis arcu id sem. Phasellus semper felis in odio convallis, et venenatis nisl posuere. Morbi non aliquet magna, a consectetur risus. Vivamus quis tellus eros. Nulla sagittis nisi sit amet orci consectetur laoreet.</p>');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `login` varchar(45) NOT NULL,
  `senha` varchar(32) NOT NULL,
  `ativo` tinyint(1) NOT NULL DEFAULT '1',
  `adm` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `email`, `login`, `senha`, `ativo`, `adm`) VALUES
(1, 'Everton Lima', 'antevertonlima@gmail.com', 'oshima', '98353ac2d5ed63bbc6e9a73ba4e2b19f', 1, 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
