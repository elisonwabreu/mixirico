-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 15-Jan-2015 às 16:43
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
-- Estrutura da tabela `agenda`
--

CREATE TABLE IF NOT EXISTS `agenda` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(70) NOT NULL,
  `descricao` text NOT NULL,
  `data` varchar(10) NOT NULL,
  `hora` varchar(5) NOT NULL,
  `banner` int(11) DEFAULT NULL,
  `logradouro` varchar(60) NOT NULL,
  `bairro` varchar(60) NOT NULL,
  `numero` varchar(60) NOT NULL,
  `cidade` varchar(60) NOT NULL,
  `estado` varchar(60) NOT NULL,
  `status` char(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `agenda`
--

INSERT INTO `agenda` (`id`, `titulo`, `descricao`, `data`, `hora`, `banner`, `logradouro`, `bairro`, `numero`, `cidade`, `estado`, `status`) VALUES
(1, 'Mussum ipsum', '<p>Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. Pra l&aacute; , depois divoltis porris, paradis. Paisis, filhis, espiritis santis. M&eacute; faiz elementum girarzis, nisi eros vermeio, in elementis m&eacute; pra quem &eacute; amistosis quis leo. Manduma pindureta quium dia nois paga. Sapien in monti palavris qui num significa nadis i pareci latim. Interessantiss quisso pudia ce receita de bolis, mais bolis eu num gostis.</p>\r\n<p>Suco de cevadiss, &eacute; um leite divinis, qui tem lupuliz, matis, aguis e fermentis. Interagi no m&eacute;, cursus quis, vehicula ac nisi. Aenean vel dui dui. Nullam leo erat, aliquet quis tempus a, posuere ut mi. Ut scelerisque neque et turpis posuere pulvinar pellentesque nibh ullamcorper. Pharetra in mattis molestie, volutpat elementum justo. Aenean ut ante turpis. Pellentesque laoreet m&eacute; vel lectus scelerisque interdum cursus velit auctor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam ac mauris lectus, non scelerisque augue. Aenean justo massa.</p>\r\n<p>Casamentiss faiz malandris se pirulit&aacute;, Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Lorem ipsum dolor sit amet, consectetuer Ispecialista im m&eacute; intende tudis nuam golada, vinho, uiski, carir&iacute;, rum da jamaikis, s&oacute; num pode ser mijis. Adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>\r\n<p>Cevadis im ampola pa arma uma pindureta. Nam varius eleifend orci, sed viverra nisl condimentum ut. Donec eget justis enim. Atirei o pau no gatis. Viva Forevis aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Copo furadis &eacute; disculpa de babadis, arcu quam euismod magna, bibendum egestas augue arcu ut est. Delegadis gente finis. In sit amet mattis porris, paradis. Paisis, filhis, espiritis santis. M&eacute; faiz elementum girarzis. Pellentesque viverra accumsan ipsum elementum gravidis.</p>\r\n<p>Forevis aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Copo furadis &eacute; disculpa de babadis, arcu quam euismod magna, bibendum egestas augue arcu ut est. Etiam ultricies tincidunt ligula, sed accumsan sapien mollis et. Delegadis gente finis. In sit amet mattis porris, paradis. Paisis, filhis, espiritis santis. M&eacute; faiz elementum girarzis. Pellentesque viverra accumsan ipsum elementum gravida. Quisque vitae metus id massa tincidunt iaculis sed sed purus. Vestibulum viverra lobortis faucibus. Vestibulum et turpis.</p>\r\n<p>Vitis e adipiscing enim. Nam varius eleifend orci, sed viverra nisl condimentum ut. Donec eget justo enim. Atirei o pau no gatis. Quisque dignissim felis quis sapien ullamcorper varius tempor sem varius. Vivamus lobortis posuere facilisis. Sed auctor eros ac sapien sagittis accumsan. Integer semper accumsan arcu, at aliquam nisl sollicitudin non. Nullam pellentesque metus nec libero laoreet vitae vestibulum ante ultricies. Phasellus non mollis purus. Integer vel lacus dolor. Proin eget mi nec mauris convallis ullamcorper vel ac nulla. Nulla et semper metus.</p>', '16/01/2015', '20:00', 385429, 'rua 303', 'Jangurussu', '284', 'fortaleza', 'ce', '1');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=340 ;

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
(181, 'oshima', '2015-01-03 18:52:12', 'Login no sistema', 'SELECT *\nFROM (`usuarios`)\nWHERE `login` =  ''oshima''\nLIMIT 1', 'Usuário "oshima" fez login no sistema'),
(182, 'oshima', '2015-01-03 20:20:05', 'Alteração de configuração', 'UPDATE `settings` SET `nome_config` = ''facebook'', `valor_config` = ''https://www.facebook.com/doctypesolution'' WHERE `nome_config` =  ''facebook''', 'A configuração para o campo "facebook" foi alterada'),
(183, 'oshima', '2015-01-03 20:20:05', 'Inclusão de configuração', 'INSERT INTO `settings` (`nome_config`, `valor_config`) VALUES (''instagram'', '''')', 'Nova configuração cadastrada no sistema'),
(184, 'oshima', '2015-01-03 20:20:05', 'Inclusão de configuração', 'INSERT INTO `settings` (`nome_config`, `valor_config`) VALUES (''youtube'', '''')', 'Nova configuração cadastrada no sistema'),
(185, 'oshima', '2015-01-04 02:18:44', 'Login no sistema', 'SELECT *\nFROM (`usuarios`)\nWHERE `login` =  ''oshima''\nLIMIT 1', 'Usuário "oshima" fez login no sistema'),
(186, 'oshima', '2015-01-04 03:25:14', 'Exclusão de página', 'DELETE FROM `produtos`\nWHERE `id` =  ''2''', 'A página com o id "2" foi excluída'),
(187, 'oshima', '2015-01-04 03:25:16', 'Exclusão de página', 'DELETE FROM `produtos`\nWHERE `id` =  ''3''', 'A página com o id "3" foi excluída'),
(188, 'oshima', '2015-01-04 03:25:19', 'Exclusão de página', 'DELETE FROM `produtos`\nWHERE `id` =  ''1''', 'A página com o id "1" foi excluída'),
(189, 'oshima', '2015-01-04 03:25:21', 'Exclusão de página', 'DELETE FROM `produtos`\nWHERE `id` =  ''4''', 'A página com o id "4" foi excluída'),
(190, 'oshima', '2015-01-04 21:18:39', 'Login no sistema', 'SELECT *\nFROM (`usuarios`)\nWHERE `login` =  ''oshima''\nLIMIT 1', 'Usuário "oshima" fez login no sistema'),
(191, 'oshima', '2015-01-05 23:56:25', 'Login no sistema', 'SELECT *\nFROM (`usuarios`)\nWHERE `login` =  ''oshima''\nLIMIT 1', 'Usuário "oshima" fez login no sistema'),
(192, 'oshima', '2015-01-06 01:48:26', 'Login no sistema', 'SELECT *\nFROM (`usuarios`)\nWHERE `login` =  ''oshima''\nLIMIT 1', 'Usuário "oshima" fez login no sistema'),
(193, 'oshima', '2015-01-06 15:10:39', 'Login no sistema', 'SELECT *\nFROM (`usuarios`)\nWHERE `login` =  ''oshima''\nLIMIT 1', 'Usuário "oshima" fez login no sistema'),
(194, 'oshima', '2015-01-06 18:28:27', 'Login no sistema', 'SELECT *\nFROM (`usuarios`)\nWHERE `login` =  ''oshima''\nLIMIT 1', 'Usuário "oshima" fez login no sistema'),
(195, 'oshima', '2015-01-06 18:52:48', 'Inclusão de página', 'INSERT INTO `paginas` (`titulo`, `slug`, `conteudo`) VALUES (''Maluco doido'', ''maluco-doido'', ''&lt;p&gt;&lt;img src=&quot;http://localhost/mixirico/assets/uploads/logo-estampas-e-bordados.png&quot; alt=&quot;&quot; /&gt;&lt;/p&gt;'')', 'Nova página cadastrada no sistema'),
(196, 'oshima', '2015-01-06 19:54:25', 'Alteração de página', 'UPDATE `paginas` SET `titulo` = ''Release'', `slug` = ''release'', `conteudo` = ''&lt;p style=&quot;text-align: center;&quot;&gt;&lt;span style=&quot;font-weight: bold;&quot;&gt;&amp;nbsp;&lt;/span&gt;&lt;img style=&quot;text-align: center;&quot; title=&quot;logo mixirico&quot; src=&quot;http://localhost/mixirico/uploads/images/logo_mixirico.png&quot; alt=&quot;Logomarca Mixirico - Feio, mas elegante!&quot; width=&quot;229&quot; height=&quot;88&quot; /&gt;&lt;/p&gt;\\r\\n&lt;p&gt;&amp;nbsp;&lt;/p&gt;\\r\\n&lt;p&gt;&lt;strong&gt;MIXIRICO&lt;/strong&gt;&lt;br /&gt; Nascido no interior do interior do interior do Cear&amp;aacute;, sempre foi o &lt;strong&gt;MAIS&lt;/strong&gt; de sua casa o &lt;strong&gt;MAIS&lt;/strong&gt; feio, &lt;strong&gt;MAIS&lt;/strong&gt; magro, &lt;strong&gt;MAIS &lt;/strong&gt;gaiato e o &lt;strong&gt;MAIS &lt;/strong&gt;azarado, Incorporando o tipo &lt;strong&gt;&quot;BREGA RURAL&quot;&lt;/strong&gt; (Matuto) encanta as pessoas e desencanta o mist&amp;eacute;rio de ser &lt;strong&gt;FEIO&lt;/strong&gt; e &lt;strong&gt;EXCLU&amp;Iacute;DO &lt;/strong&gt;com muita gra&amp;ccedil;a e talento, Ele &amp;eacute; t&amp;atilde;o feio que foi a &amp;uacute;nica crian&amp;ccedil;a a passar 18 meses pra nascer,pois da vez que ele botou a cabe&amp;ccedil;a pra fora o parteiro olhou e disse&lt;strong&gt;:&quot;VOC&amp;Ecirc; N&amp;Atilde;O T&amp;Aacute; PRONTO N&amp;Atilde;O,VOLTE&quot;&lt;/strong&gt;...mas apesar de sua fei&amp;uacute;ra ele conseguiu casar pois afinal de contas &lt;strong&gt;MILAGRES &lt;/strong&gt;acontecem, o desfecho dessa hist&amp;oacute;ria s&amp;oacute; contratando-o pra saber.&lt;br /&gt; Arranca seus &lt;strong&gt;&quot;CAUSOS&quot; &lt;/strong&gt;do dia a dia e &amp;eacute; tido como um dos melhores contador de &lt;strong&gt;PIADAS&lt;/strong&gt; a n&amp;iacute;vel local, com a vis&amp;atilde;o cr&amp;iacute;tica elabora seus textos temas com cad&amp;ecirc;ncia.&lt;br /&gt; Participou de um dos maiores festivais de humor do Cear&amp;aacute; em 1992 e foi o &amp;uacute;nico representante do Cear&amp;aacute; que ele mesmo denomina como um &lt;strong&gt;&quot;ESTADO DE GRA&amp;Ccedil;A&quot;&lt;/strong&gt; pelo povo hospitaleiro e acolhedor.&lt;br /&gt; Foi convidado a participar da&lt;strong&gt;&quot;SEMANA DO CEAR&amp;Aacute;&quot;&lt;/strong&gt;promovida pela &lt;strong&gt;SETUR-SECRETARIA DE TURISMO&lt;/strong&gt; do CEAR&amp;Aacute; e &lt;strong&gt;TAM LINHAS A&amp;Eacute;REAS&lt;/strong&gt;, um fato in&amp;eacute;dito na hist&amp;oacute;ria do humor brasileiro e da Avia&amp;ccedil;&amp;atilde;o pois a semana do Cear&amp;aacute; constava em fazer apresenta&amp;ccedil;&amp;otilde;es de humor a bordo das aeronaves,eram apenas 10 minutos ap&amp;oacute;s o servi&amp;ccedil;o de bordo.Foi uma experi&amp;ecirc;ncia grandiosa, que deu ao comediante um &lt;strong&gt;STATUS &lt;/strong&gt;maior perante os demais humoristas. &lt;br /&gt; Atualmente MIXIRICO &amp;eacute; um dos nomes mais cotados pelas casas e restaurantes locais que tem o humor como refer&amp;ecirc;ncia, e se apresenta todo final de semana por diversos bairros mostrando o seu talento de &lt;strong&gt;&quot;FAZER RIR&quot;&lt;/strong&gt;.&lt;br /&gt; Sempre preocupado em atender a todos os tipos gostos e plat&amp;eacute;ias procura agradar dos &lt;strong&gt;08 aos 800 anos de idade&lt;/strong&gt;,assim ele est&amp;aacute; dentre os melhores do humor cearense.&lt;/p&gt;\\r\\n&lt;p&gt;&amp;nbsp;&lt;/p&gt;\\r\\n&lt;p&gt;&amp;Uacute;nico humorista patrocinado pelo F.M.I &lt;strong&gt;Fundo de Molecagem Intensa&lt;/strong&gt;.&lt;/p&gt;\\r\\n&lt;p&gt;&amp;nbsp;&lt;/p&gt;\\r\\n&lt;p style=&quot;text-align: left;&quot;&gt;Agora em dezembro de 2011 foi ganhador do quadro &lt;strong&gt;&quot;QUEM CHEGA&lt;/strong&gt; &lt;strong&gt;L&amp;Aacute;&quot;&lt;/strong&gt; do doming&amp;atilde;o do Faust&amp;atilde;o na &lt;strong&gt;REDE GLOBO&lt;/strong&gt; justamente com a pe&amp;ccedil;a &lt;strong&gt;BAR ZIL A COM&amp;Eacute;DIA&lt;/strong&gt; escrita por ele e compartilhada com mais tr&amp;ecirc;s companheiros de profiss&amp;atilde;o ao qual deu o nome de &lt;strong&gt;&quot;QUARTETO&lt;/strong&gt; &lt;strong&gt;EM RIR&quot; .&lt;/strong&gt;&lt;/p&gt;\\r\\n&lt;p&gt;&amp;nbsp;&lt;/p&gt;\\r\\n&lt;p&gt;&lt;span style=&quot;font-weight: bold;&quot;&gt;Contatos para shows em todo o Brasil(85)9956.5011.&lt;/span&gt;&lt;/p&gt;\\r\\n&lt;p&gt;&amp;nbsp;&lt;/p&gt;\\r\\n&lt;p style=&quot;text-align: center;&quot;&gt;&lt;img title=&quot;Mixirico Sentado&quot; src=&quot;http://localhost/mixirico/uploads/images/fjs_5700.jpg&quot; alt=&quot;Mixirico Sentado na mala&quot; width=&quot;199&quot; height=&quot;298&quot; /&gt;&lt;/p&gt;'' WHERE `id` =  ''1''', 'A página com o id "1" foi alterada');
INSERT INTO `auditoria` (`id`, `usuario`, `data_hora`, `operacao`, `query`, `observacao`) VALUES
(197, 'oshima', '2015-01-06 22:20:52', 'Login no sistema', 'SELECT *\nFROM (`usuarios`)\nWHERE `login` =  ''oshima''\nLIMIT 1', 'Usuário "oshima" fez login no sistema'),
(198, 'oshima', '2015-01-06 23:07:17', 'Alteração de video', 'UPDATE `videos` SET `titulo` = ''Humor de grac?a - Mixirico'', `descricao` = ''fgdfgdfgdfg'' WHERE `id` =  ''3''', 'O video com o id "3" foi alterado'),
(199, 'oshima', '2015-01-06 23:07:35', 'Alteração de video', 'UPDATE `videos` SET `titulo` = ''Video SBT'', `descricao` = ''Video gravado em um restaurante local.'' WHERE `id` =  ''4''', 'O video com o id "4" foi alterado'),
(200, 'oshima', '2015-01-06 23:08:47', 'Alteração de video', 'UPDATE `videos` SET `titulo` = ''Humor de graça - Mixirico'', `descricao` = ''fgdfgdfgdfg'' WHERE `id` =  ''3''', 'O video com o id "3" foi alterado'),
(201, 'oshima', '2015-01-07 00:10:48', 'Inclusão de video', 'INSERT INTO `videos` (`embed`, `thumb`, `titulo`, `descricao`, `server`) VALUES (''tl95fmvREqk'', ''http://i1.ytimg.com/vi/tl95fmvREqk/default.jpg'', ''Programa Leruaite 22/10/2014 - Humorista Mixirico'', ''Programa Leruaite 22/10/2014 - Humorista Mixirico'', ''YouTube'')', 'Novo video cadastrado no sistema'),
(202, 'oshima', '2015-01-07 00:11:59', 'Inclusão de video', 'INSERT INTO `videos` (`embed`, `thumb`, `titulo`, `descricao`, `server`) VALUES (''Http://vimeo.com/21361914'', ''http://i.vimeocdn.com/video/137356918_100x75.jpg'', ''Sistema helpdesk Final - Corrigindo listas e datas, enviando e-mails do sistema'', ''Saudações meus queridos, aqui estou eu entrando com a última aula de nosso sistema de suporte em helpdesk com PHP!<br />\\n<br />\\nE nessa veremos uma pequena correção na ordenação das listas e nas datas. Espero que tenham gostado de mais essa seqüência e que tenha ajudado vocês com suas tarefas.<br />\\n<br />\\nDeixo aquele forte abraço e até a próxima!<br />\\n<br />\\nOS ARQUIVOS DESENVOLVIODOS E SCRIPTS, ASSIM COMO AS AULAS ESTÃO EM: http://www.upinside.com.br/categoria/especiais/sistema-helpedesk-com-php'', ''Vimeo'')', 'Novo video cadastrado no sistema'),
(203, 'oshima', '2015-01-07 00:27:32', 'Alteração de video', 'UPDATE `videos` SET `titulo` = ''Sistema helpdesk Final - Corrigindo listas e datas, enviando e-mails do sistema'', `descricao` = ''Saudações meus queridos, aqui estou eu entrando com a última aula de nosso sistema de suporte em helpdesk com PHP!<br />\\r\\n<br />\\r\\nE nessa veremos uma pequena correção na ordenação das listas e nas datas. Espero que tenham gostado de mais essa seqüência e que tenha ajudado vocês com suas tarefas.<br />\\r\\n<br />\\r\\nDeixo aquele forte abraço e até a próxima!<br />\\r\\n<br />\\r\\nOS ARQUIVOS DESENVOLVIODOS E SCRIPTS, ASSIM COMO AS AULAS ESTÃO EM: http://www.upinside.com.br/categoria/especiais/sistema-helpedesk-com-php'' WHERE `id` =  ''7''', 'O video com o id "7" foi alterado'),
(204, 'oshima', '2015-01-07 00:34:50', 'Exclusão de video', 'DELETE FROM `videos`\nWHERE `id` =  ''7''', 'O video com o id "7" foi excluído'),
(205, 'oshima', '2015-01-07 01:54:37', 'Inclusão de página', 'INSERT INTO `agenda` (`titulo`, `descricao`, `data`, `hora`, `logradouro`, `bairro`, `numero`, `cidade`, `estado`, `banner`) VALUES (''Humor de graça - Mixirico'', ''<p><img src=\\"http://localhost/mixirico/assets/uploads/logo-estampas-e-bordados.png\\" alt=\\"\\" /></p>'', ''16/01/2015'', ''20:00'', ''rua 303'', ''Jangurussu'', ''284'', ''fortaleza'', ''ce'', ''08.jpg'')', 'Nova página cadastrada no sistema'),
(206, 'oshima', '2015-01-07 02:00:45', 'Alteração de página', 'UPDATE `agenda` SET `titulo` = ''Humor de graça - Mixirico'', `descricao` = ''&lt;p&gt;&lt;span&gt;Lorem Ipsum&lt;/span&gt;&lt;span&gt;&amp;nbsp;&amp;eacute; simplesmente uma simula&amp;ccedil;&amp;atilde;o de texto da ind&amp;uacute;stria tipogr&amp;aacute;fica e de impressos, e vem sendo utilizado desde o s&amp;eacute;culo XVI, quando um impressor&amp;nbsp;&lt;/span&gt;&lt;/p&gt;'', `data` = ''16/01/2015'', `hora` = ''20:00'', `logradouro` = ''rua 303'', `bairro` = ''Jangurussu'', `numero` = ''284'', `cidade` = ''fortaleza'', `estado` = ''ce'' WHERE `id` =  ''1''', 'A página com o id "1" foi alterada'),
(207, 'oshima', '2015-01-07 02:01:08', 'Exclusão de página', 'DELETE FROM `agenda`\nWHERE `id` =  ''1''', 'A página com o id "1" foi excluída'),
(208, 'oshima', '2015-01-09 01:26:51', 'Login no sistema', 'SELECT *\nFROM (`usuarios`)\nWHERE `login` =  ''oshima''\nLIMIT 1', 'Usuário "oshima" fez login no sistema'),
(209, 'oshima', '2015-01-09 14:19:40', 'Login no sistema', 'SELECT *\nFROM (`usuarios`)\nWHERE `login` =  ''oshima''\nLIMIT 1', 'Usuário "oshima" fez login no sistema'),
(210, 'oshima', '2015-01-09 21:15:11', 'Login no sistema', 'SELECT *\nFROM (`usuarios`)\nWHERE `login` =  ''oshima''\nLIMIT 1', 'Usuário "oshima" fez login no sistema'),
(211, 'oshima', '2015-01-09 22:19:55', 'Inclusão de video', 'INSERT INTO `videos` (`embed`, `thumb`, `titulo`, `descricao`, `server`) VALUES (''-y8tvDpgdPc'', ''http://i1.ytimg.com/vi/-y8tvDpgdPc/default.jpg'', ''Gaijin Sentai - Jingle Bells (feat Julio Cesar)'', ''Band: Gaijin Sentai Music: Jingle Bells Merry Kurishimasu!!! www.gaijinsentai.wordpress.com www.myspace.com/gaijinsentai www.twitter.com/GaijinSentai'', ''YouTube'')', 'Novo video cadastrado no sistema'),
(212, 'oshima', '2015-01-09 22:20:09', 'Exclusão de video', 'DELETE FROM `videos`\nWHERE `id` =  ''7''', 'O video com o id "7" foi excluído'),
(213, 'oshima', '2015-01-09 23:48:48', 'Exclusão de mídia', 'DELETE FROM `midia`\nWHERE `id` =  ''3''', 'A mídia com o id "3" foi excluída'),
(214, 'oshima', '2015-01-09 23:48:51', 'Exclusão de mídia', 'DELETE FROM `midia`\nWHERE `id` =  ''2''', 'A mídia com o id "2" foi excluída'),
(215, 'oshima', '2015-01-09 23:48:54', 'Exclusão de mídia', 'DELETE FROM `midia`\nWHERE `id` =  ''4''', 'A mídia com o id "4" foi excluída'),
(216, 'oshima', '2015-01-09 23:48:59', 'Exclusão de mídia', 'DELETE FROM `midia`\nWHERE `id` =  ''5''', 'A mídia com o id "5" foi excluída'),
(217, 'oshima', '2015-01-10 01:38:23', 'Logoff no sistema', '', 'O usuário "oshima" fez logoff do sistema'),
(218, 'oshima', '2015-01-10 01:38:53', 'Login no sistema', 'SELECT *\nFROM (`usuarios`)\nWHERE `login` =  ''oshima''\nLIMIT 1', 'Usuário "oshima" fez login no sistema'),
(219, 'oshima', '2015-01-10 02:17:52', 'Inclusão de mídia', 'INSERT INTO `midia` (`idGal`, `tipo`, `nome`, `descricao`, `arquivo`) VALUES (0, ''G'', ''sleeping_in_the_car_seat.jpg'', ''Upload via Ajax.'', ''sleeping_in_the_car_seat.jpg'')', 'Nova mídia cadastrada no sistema'),
(220, 'oshima', '2015-01-10 02:17:53', 'Inclusão de mídia', 'INSERT INTO `midia` (`idGal`, `tipo`, `nome`, `descricao`, `arquivo`) VALUES (0, ''G'', ''baby_against_blue_sky_204313.jpg'', ''Upload via Ajax.'', ''baby_against_blue_sky_204313.jpg'')', 'Nova mídia cadastrada no sistema'),
(221, 'oshima', '2015-01-10 02:17:53', 'Inclusão de mídia', 'INSERT INTO `midia` (`idGal`, `tipo`, `nome`, `descricao`, `arquivo`) VALUES (0, ''G'', ''04.jpg'', ''Upload via Ajax.'', ''04.jpg'')', 'Nova mídia cadastrada no sistema'),
(222, 'oshima', '2015-01-10 02:17:53', 'Inclusão de mídia', 'INSERT INTO `midia` (`idGal`, `tipo`, `nome`, `descricao`, `arquivo`) VALUES (0, ''G'', ''03.jpg'', ''Upload via Ajax.'', ''03.jpg'')', 'Nova mídia cadastrada no sistema'),
(223, 'oshima', '2015-01-10 02:40:15', 'Login no sistema', 'SELECT *\nFROM (`usuarios`)\nWHERE `login` =  ''oshima''\nLIMIT 1', 'Usuário "oshima" fez login no sistema'),
(224, 'oshima', '2015-01-10 02:50:26', 'Inclusão de mídia', 'INSERT INTO `midia` (`idGal`, `tipo`, `nome`, `descricao`, `arquivo`) VALUES (0, ''G'', ''Barcodes2_r2d.jpg'', ''Upload via Ajax.'', ''Barcodes2_r2d.jpg'')', 'Nova mídia cadastrada no sistema'),
(225, 'oshima', '2015-01-10 02:50:26', 'Inclusão de mídia', 'INSERT INTO `midia` (`idGal`, `tipo`, `nome`, `descricao`, `arquivo`) VALUES (0, ''G'', ''63503204d18160dd6a733e989b70c404_XL.jpg'', ''Upload via Ajax.'', ''63503204d18160dd6a733e989b70c404_XL.jpg'')', 'Nova mídia cadastrada no sistema'),
(226, 'oshima', '2015-01-10 02:50:26', 'Inclusão de mídia', 'INSERT INTO `midia` (`idGal`, `tipo`, `nome`, `descricao`, `arquivo`) VALUES (0, ''G'', ''boleto.jpg'', ''Upload via Ajax.'', ''boleto.jpg'')', 'Nova mídia cadastrada no sistema'),
(227, 'oshima', '2015-01-10 02:52:01', 'Inclusão de mídia', 'INSERT INTO `midia` (`idGal`, `tipo`, `nome`, `descricao`, `arquivo`) VALUES (0, ''G'', ''Barcodes2_r2d1.jpg'', ''Upload via Ajax.'', ''Barcodes2_r2d1.jpg'')', 'Nova mídia cadastrada no sistema'),
(228, 'oshima', '2015-01-10 02:52:02', 'Inclusão de mídia', 'INSERT INTO `midia` (`idGal`, `tipo`, `nome`, `descricao`, `arquivo`) VALUES (0, ''G'', ''boleto1.jpg'', ''Upload via Ajax.'', ''boleto1.jpg'')', 'Nova mídia cadastrada no sistema'),
(229, 'oshima', '2015-01-10 02:52:02', 'Inclusão de mídia', 'INSERT INTO `midia` (`idGal`, `tipo`, `nome`, `descricao`, `arquivo`) VALUES (0, ''G'', ''63503204d18160dd6a733e989b70c404_XL1.jpg'', ''Upload via Ajax.'', ''63503204d18160dd6a733e989b70c404_XL1.jpg'')', 'Nova mídia cadastrada no sistema'),
(230, 'oshima', '2015-01-10 02:52:57', 'Inclusão de mídia', 'INSERT INTO `midia` (`idGal`, `tipo`, `nome`, `descricao`, `arquivo`) VALUES (0, ''G'', ''Barcodes2_r2d.jpg'', ''Upload via Ajax.'', ''Barcodes2_r2d.jpg'')', 'Nova mídia cadastrada no sistema'),
(231, 'oshima', '2015-01-10 02:52:57', 'Inclusão de mídia', 'INSERT INTO `midia` (`idGal`, `tipo`, `nome`, `descricao`, `arquivo`) VALUES (0, ''G'', ''boleto.jpg'', ''Upload via Ajax.'', ''boleto.jpg'')', 'Nova mídia cadastrada no sistema'),
(232, 'oshima', '2015-01-10 02:52:57', 'Inclusão de mídia', 'INSERT INTO `midia` (`idGal`, `tipo`, `nome`, `descricao`, `arquivo`) VALUES (0, ''G'', ''63503204d18160dd6a733e989b70c404_XL.jpg'', ''Upload via Ajax.'', ''63503204d18160dd6a733e989b70c404_XL.jpg'')', 'Nova mídia cadastrada no sistema'),
(233, 'oshima', '2015-01-10 02:58:11', 'Inclusão de mídia', 'INSERT INTO `midia` (`idGal`, `tipo`, `nome`, `descricao`, `arquivo`) VALUES (''1'', ''G'', ''boleto1.jpg'', ''Upload via Ajax.'', ''boleto1.jpg'')', 'Nova mídia cadastrada no sistema'),
(234, 'oshima', '2015-01-10 03:01:37', 'Inclusão de mídia', 'INSERT INTO `midia` (`idGal`, `tipo`, `nome`, `descricao`, `arquivo`) VALUES (''2'', ''G'', ''63503204d18160dd6a733e989b70c404_XL.jpg'', ''Upload via Ajax.'', ''63503204d18160dd6a733e989b70c404_XL.jpg'')', 'Nova mídia cadastrada no sistema'),
(235, 'oshima', '2015-01-10 03:03:04', 'Inclusão de mídia', 'INSERT INTO `midia` (`idGal`, `tipo`, `nome`, `descricao`, `arquivo`) VALUES (0, ''G'', ''63503204d18160dd6a733e989b70c404_XL1.jpg'', ''Upload via Ajax.'', ''63503204d18160dd6a733e989b70c404_XL1.jpg'')', 'Nova mídia cadastrada no sistema'),
(236, 'oshima', '2015-01-10 03:03:04', 'Inclusão de mídia', 'INSERT INTO `midia` (`idGal`, `tipo`, `nome`, `descricao`, `arquivo`) VALUES (0, ''G'', ''Barcodes2_r2d.jpg'', ''Upload via Ajax.'', ''Barcodes2_r2d.jpg'')', 'Nova mídia cadastrada no sistema'),
(237, 'oshima', '2015-01-10 03:03:56', 'Inclusão de mídia', 'INSERT INTO `midia` (`idGal`, `tipo`, `nome`, `descricao`, `arquivo`) VALUES (''2'', ''G'', ''63503204d18160dd6a733e989b70c404_XL2.jpg'', ''Upload via Ajax.'', ''63503204d18160dd6a733e989b70c404_XL2.jpg'')', 'Nova mídia cadastrada no sistema'),
(238, 'oshima', '2015-01-10 03:07:55', 'Inclusão de mídia', 'INSERT INTO `midia` (`idGal`, `tipo`, `nome`, `descricao`, `arquivo`) VALUES (''2'', ''G'', ''63503204d18160dd6a733e989b70c404_XL3.jpg'', ''Upload via Ajax.'', ''63503204d18160dd6a733e989b70c404_XL3.jpg'')', 'Nova mídia cadastrada no sistema'),
(239, 'oshima', '2015-01-10 03:15:39', 'Inclusão de mídia', 'INSERT INTO `midia` (`idGal`, `tipo`, `nome`, `descricao`, `arquivo`) VALUES (0, ''G'', ''63503204d18160dd6a733e989b70c404_XL.jpg'', ''Upload via Ajax.'', ''63503204d18160dd6a733e989b70c404_XL.jpg'')', 'Nova mídia cadastrada no sistema'),
(240, 'oshima', '2015-01-10 03:15:39', 'Inclusão de mídia', 'INSERT INTO `midia` (`idGal`, `tipo`, `nome`, `descricao`, `arquivo`) VALUES (0, ''G'', ''Barcodes2_r2d.jpg'', ''Upload via Ajax.'', ''Barcodes2_r2d.jpg'')', 'Nova mídia cadastrada no sistema'),
(241, 'oshima', '2015-01-10 03:15:39', 'Inclusão de mídia', 'INSERT INTO `midia` (`idGal`, `tipo`, `nome`, `descricao`, `arquivo`) VALUES (0, ''G'', ''boleto.jpg'', ''Upload via Ajax.'', ''boleto.jpg'')', 'Nova mídia cadastrada no sistema'),
(242, 'oshima', '2015-01-10 03:18:33', 'Inclusão de mídia', 'INSERT INTO `midia` (`idGal`, `tipo`, `nome`, `descricao`, `arquivo`) VALUES (''10'', ''G'', ''63503204d18160dd6a733e989b70c404_XL1.jpg'', ''Upload via Ajax.'', ''63503204d18160dd6a733e989b70c404_XL1.jpg'')', 'Nova mídia cadastrada no sistema'),
(243, 'oshima', '2015-01-10 03:18:33', 'Inclusão de mídia', 'INSERT INTO `midia` (`idGal`, `tipo`, `nome`, `descricao`, `arquivo`) VALUES (''10'', ''G'', ''Barcodes2_r2d1.jpg'', ''Upload via Ajax.'', ''Barcodes2_r2d1.jpg'')', 'Nova mídia cadastrada no sistema'),
(244, 'oshima', '2015-01-10 13:33:04', 'Login no sistema', 'SELECT *\nFROM (`usuarios`)\nWHERE `login` =  ''oshima''\nLIMIT 1', 'Usuário "oshima" fez login no sistema'),
(245, 'oshima', '2015-01-10 17:39:56', 'Login no sistema', 'SELECT *\nFROM (`usuarios`)\nWHERE `login` =  ''oshima''\nLIMIT 1', 'Usuário "oshima" fez login no sistema'),
(246, 'oshima', '2015-01-10 17:43:04', 'Login no sistema', 'SELECT *\nFROM (`usuarios`)\nWHERE `login` =  ''oshima''\nLIMIT 1', 'Usuário "oshima" fez login no sistema'),
(247, 'oshima', '2015-01-10 17:43:52', 'Alteração de video', 'UPDATE `videos` SET `titulo` = ''Humor de graça - Mixirico'', `descricao` = ''iosdhfgpaudshfgiphaipdfhgiupsdfipgasipudgiups'' WHERE `id` =  ''3''', 'O video com o id "3" foi alterado'),
(248, 'oshima', '2015-01-10 17:45:48', 'Inclusão de mídia', 'INSERT INTO `midia` (`tipo`, `nome`, `descricao`, `arquivo`) VALUES (''B'', ''Maluco doido'', ''DOP'', ''63503204d18160dd6a733e989b70c404_XL2.jpg'')', 'Nova mídia cadastrada no sistema'),
(249, 'oshima', '2015-01-10 17:46:28', 'Inclusão de mídia', 'INSERT INTO `midia` (`tipo`, `nome`, `descricao`, `arquivo`) VALUES (''G'', ''DOP'', ''logo'', ''boleto1.jpg'')', 'Nova mídia cadastrada no sistema'),
(250, 'oshima', '2015-01-10 17:56:55', 'Inclusão de mídia', 'INSERT INTO `midia` (`idGal`, `tipo`, `nome`, `descricao`, `arquivo`) VALUES (''1'', ''G'', ''63503204d18160dd6a733e989b70c404_XL3.jpg'', ''Upload via Ajax.'', ''63503204d18160dd6a733e989b70c404_XL3.jpg'')', 'Nova mídia cadastrada no sistema'),
(251, 'oshima', '2015-01-10 17:56:56', 'Inclusão de mídia', 'INSERT INTO `midia` (`idGal`, `tipo`, `nome`, `descricao`, `arquivo`) VALUES (''1'', ''G'', ''boleto2.jpg'', ''Upload via Ajax.'', ''boleto2.jpg'')', 'Nova mídia cadastrada no sistema'),
(252, 'oshima', '2015-01-10 17:56:55', 'Inclusão de mídia', 'INSERT INTO `midia` (`idGal`, `tipo`, `nome`, `descricao`, `arquivo`) VALUES (''1'', ''G'', ''Barcodes2_r2d2.jpg'', ''Upload via Ajax.'', ''Barcodes2_r2d2.jpg'')', 'Nova mídia cadastrada no sistema'),
(253, 'oshima', '2015-01-10 17:58:06', 'Inclusão de mídia', 'INSERT INTO `midia` (`idGal`, `tipo`, `nome`, `descricao`, `arquivo`) VALUES (''1'', ''G'', ''63503204d18160dd6a733e989b70c404_XL.jpg'', ''Upload via Ajax.'', ''63503204d18160dd6a733e989b70c404_XL.jpg'')', 'Nova mídia cadastrada no sistema'),
(254, 'oshima', '2015-01-10 17:58:06', 'Inclusão de mídia', 'INSERT INTO `midia` (`idGal`, `tipo`, `nome`, `descricao`, `arquivo`) VALUES (''1'', ''G'', ''7WEMh2Y.png'', ''Upload via Ajax.'', ''7WEMh2Y.png'')', 'Nova mídia cadastrada no sistema'),
(255, 'oshima', '2015-01-10 17:58:06', 'Inclusão de mídia', 'INSERT INTO `midia` (`idGal`, `tipo`, `nome`, `descricao`, `arquivo`) VALUES (''1'', ''G'', ''Barcodes2_r2d.jpg'', ''Upload via Ajax.'', ''Barcodes2_r2d.jpg'')', 'Nova mídia cadastrada no sistema'),
(256, 'oshima', '2015-01-10 17:58:43', 'Logoff no sistema', '', 'O usuário "oshima" fez logoff do sistema'),
(257, 'oshima', '2015-01-10 18:05:12', 'Login no sistema', 'SELECT *\nFROM (`usuarios`)\nWHERE `login` =  ''oshima''\nLIMIT 1', 'Usuário "oshima" fez login no sistema'),
(258, 'oshima', '2015-01-10 18:05:29', 'Alteração de configuração', 'UPDATE `settings` SET `nome_config` = ''facebook'', `valor_config` = ''https://www.facebook.com/pages/Zedoidin/1545837109005479'' WHERE `nome_config` =  ''facebook''', 'A configuração para o campo "facebook" foi alterada'),
(259, 'oshima', '2015-01-10 18:05:29', 'Exclusão de configuração', 'DELETE FROM `settings`\nWHERE `nome_config` =  ''instagram''', 'A configuração do campo "instagram" foi excluída'),
(260, 'oshima', '2015-01-10 18:05:30', 'Exclusão de configuração', 'DELETE FROM `settings`\nWHERE `nome_config` =  ''youtube''', 'A configuração do campo "youtube" foi excluída'),
(261, 'oshima', '2015-01-10 22:55:44', 'Login no sistema', 'SELECT *\nFROM (`usuarios`)\nWHERE `login` =  ''oshima''\nLIMIT 1', 'Usuário "oshima" fez login no sistema'),
(262, 'oshima', '2015-01-10 22:58:07', 'Logoff no sistema', '', 'O usuário "oshima" fez logoff do sistema'),
(263, 'oshima', '2015-01-10 23:33:34', 'Login no sistema', 'SELECT *\nFROM (`usuarios`)\nWHERE `login` =  ''oshima''\nLIMIT 1', 'Usuário "oshima" fez login no sistema'),
(264, 'oshima', '2015-01-11 00:45:08', 'Login no sistema', 'SELECT *\nFROM (`usuarios`)\nWHERE `login` =  ''oshima''\nLIMIT 1', 'Usuário "oshima" fez login no sistema'),
(265, 'oshima', '2015-01-11 01:05:54', 'Inclusão de página', 'INSERT INTO `galerias` (`titulo`, `descricao`, `arquivo`) VALUES (''Maluco doido'', ''dgsdfg sdfgsdfg'', ''08.jpg'')', 'Nova página cadastrada no sistema'),
(266, 'oshima', '2015-01-11 01:06:13', 'Exclusão de mídia', 'DELETE FROM `midia`\nWHERE `id` =  ''4''', 'A mídia com o id "4" foi excluída'),
(267, 'oshima', '2015-01-11 01:06:19', 'Exclusão de mídia', 'DELETE FROM `midia`\nWHERE `id` =  ''5''', 'A mídia com o id "5" foi excluída'),
(268, 'oshima', '2015-01-11 01:06:23', 'Exclusão de mídia', 'DELETE FROM `midia`\nWHERE `id` =  ''2''', 'A mídia com o id "2" foi excluída'),
(269, 'oshima', '2015-01-11 01:06:27', 'Exclusão de mídia', 'DELETE FROM `midia`\nWHERE `id` =  ''1''', 'A mídia com o id "1" foi excluída'),
(270, 'oshima', '2015-01-11 01:06:33', 'Exclusão de mídia', 'DELETE FROM `midia`\nWHERE `id` =  ''3''', 'A mídia com o id "3" foi excluída'),
(271, 'oshima', '2015-01-11 01:25:59', 'Alteração de página', 'UPDATE `galerias` SET `titulo` = ''Maluco doido'', `descricao` = ''maluco doido'' WHERE `id` =  ''7''', 'A página com o id "7" foi alterada'),
(272, 'oshima', '2015-01-11 01:28:24', 'Exclusão de mídia', 'DELETE FROM `midia`\nWHERE `id` =  ''7''', 'A mídia com o id "7" foi excluída'),
(273, 'oshima', '2015-01-11 01:29:19', 'Exclusão de página', 'DELETE FROM `galerias`\nWHERE `id` =  ''7''', 'A página com o id "7" foi excluída'),
(274, 'oshima', '2015-01-11 01:46:33', 'Inclusão de mídia', 'INSERT INTO `midia` (`idGal`, `tipo`, `nome`, `descricao`, `arquivo`) VALUES (''4'', ''G'', ''06.jpg'', ''Upload via Ajax.'', ''06.jpg'')', 'Nova mídia cadastrada no sistema'),
(275, 'oshima', '2015-01-11 01:46:33', 'Inclusão de mídia', 'INSERT INTO `midia` (`idGal`, `tipo`, `nome`, `descricao`, `arquivo`) VALUES (''4'', ''G'', ''05.jpg'', ''Upload via Ajax.'', ''05.jpg'')', 'Nova mídia cadastrada no sistema'),
(276, 'oshima', '2015-01-11 01:46:34', 'Inclusão de mídia', 'INSERT INTO `midia` (`idGal`, `tipo`, `nome`, `descricao`, `arquivo`) VALUES (''4'', ''G'', ''07.jpg'', ''Upload via Ajax.'', ''07.jpg'')', 'Nova mídia cadastrada no sistema'),
(277, 'oshima', '2015-01-11 01:46:34', 'Inclusão de mídia', 'INSERT INTO `midia` (`idGal`, `tipo`, `nome`, `descricao`, `arquivo`) VALUES (''4'', ''G'', ''081.jpg'', ''Upload via Ajax.'', ''081.jpg'')', 'Nova mídia cadastrada no sistema'),
(278, 'oshima', '2015-01-11 01:48:28', 'Inclusão de mídia', 'INSERT INTO `midia` (`idGal`, `tipo`, `nome`, `descricao`, `arquivo`) VALUES (''4'', ''G'', ''082.jpg'', ''Upload via Ajax.'', ''082.jpg'')', 'Nova mídia cadastrada no sistema'),
(279, 'oshima', '2015-01-11 01:48:28', 'Inclusão de mídia', 'INSERT INTO `midia` (`idGal`, `tipo`, `nome`, `descricao`, `arquivo`) VALUES (''4'', ''G'', ''071.jpg'', ''Upload via Ajax.'', ''071.jpg'')', 'Nova mídia cadastrada no sistema'),
(280, 'oshima', '2015-01-11 01:48:28', 'Inclusão de mídia', 'INSERT INTO `midia` (`idGal`, `tipo`, `nome`, `descricao`, `arquivo`) VALUES (''4'', ''G'', ''061.jpg'', ''Upload via Ajax.'', ''061.jpg'')', 'Nova mídia cadastrada no sistema'),
(281, 'oshima', '2015-01-11 01:50:24', 'Inclusão de mídia', 'INSERT INTO `midia` (`idGal`, `tipo`, `nome`, `descricao`, `arquivo`) VALUES (''4'', ''G'', ''05.jpg'', ''Upload via Ajax.'', ''05.jpg'')', 'Nova mídia cadastrada no sistema'),
(282, 'oshima', '2015-01-11 01:50:24', 'Inclusão de mídia', 'INSERT INTO `midia` (`idGal`, `tipo`, `nome`, `descricao`, `arquivo`) VALUES (''4'', ''G'', ''06.jpg'', ''Upload via Ajax.'', ''06.jpg'')', 'Nova mídia cadastrada no sistema'),
(283, 'oshima', '2015-01-11 01:50:25', 'Inclusão de mídia', 'INSERT INTO `midia` (`idGal`, `tipo`, `nome`, `descricao`, `arquivo`) VALUES (''4'', ''G'', ''07.jpg'', ''Upload via Ajax.'', ''07.jpg'')', 'Nova mídia cadastrada no sistema'),
(284, 'oshima', '2015-01-11 01:50:25', 'Inclusão de mídia', 'INSERT INTO `midia` (`idGal`, `tipo`, `nome`, `descricao`, `arquivo`) VALUES (''4'', ''G'', ''08.jpg'', ''Upload via Ajax.'', ''08.jpg'')', 'Nova mídia cadastrada no sistema'),
(285, 'oshima', '2015-01-11 01:53:25', 'Inclusão de mídia', 'INSERT INTO `midia` (`idGal`, `tipo`, `nome`, `descricao`, `arquivo`) VALUES (''4'', ''G'', ''escalator_2012.jpg'', ''Upload via Ajax.'', ''escalator_2012.jpg'')', 'Nova mídia cadastrada no sistema'),
(286, 'oshima', '2015-01-11 01:53:25', 'Inclusão de mídia', 'INSERT INTO `midia` (`idGal`, `tipo`, `nome`, `descricao`, `arquivo`) VALUES (''4'', ''G'', ''shopping_mall.jpg'', ''Upload via Ajax.'', ''shopping_mall.jpg'')', 'Nova mídia cadastrada no sistema'),
(287, 'oshima', '2015-01-11 01:58:20', 'Inclusão de mídia', 'INSERT INTO `midia` (`idGal`, `tipo`, `nome`, `descricao`, `arquivo`) VALUES (''4'', ''G'', ''sleeping_in_the_car_seat.jpg'', ''Upload via Ajax.'', ''sleeping_in_the_car_seat.jpg'')', 'Nova mídia cadastrada no sistema'),
(288, 'oshima', '2015-01-11 01:58:20', 'Inclusão de mídia', 'INSERT INTO `midia` (`idGal`, `tipo`, `nome`, `descricao`, `arquivo`) VALUES (''4'', ''G'', ''04.jpg'', ''Upload via Ajax.'', ''04.jpg'')', 'Nova mídia cadastrada no sistema'),
(289, 'oshima', '2015-01-11 01:58:20', 'Inclusão de mídia', 'INSERT INTO `midia` (`idGal`, `tipo`, `nome`, `descricao`, `arquivo`) VALUES (''4'', ''G'', ''baby_against_blue_sky_204313.jpg'', ''Upload via Ajax.'', ''baby_against_blue_sky_204313.jpg'')', 'Nova mídia cadastrada no sistema'),
(290, 'oshima', '2015-01-11 01:58:21', 'Inclusão de mídia', 'INSERT INTO `midia` (`idGal`, `tipo`, `nome`, `descricao`, `arquivo`) VALUES (''4'', ''G'', ''03.jpg'', ''Upload via Ajax.'', ''03.jpg'')', 'Nova mídia cadastrada no sistema'),
(291, 'oshima', '2015-01-11 02:09:46', 'Inclusão de mídia', 'INSERT INTO `midia` (`idGal`, `tipo`, `nome`, `descricao`, `arquivo`) VALUES (''4'', ''G'', ''051.jpg'', ''Upload via Ajax.'', ''051.jpg'')', 'Nova mídia cadastrada no sistema'),
(292, 'oshima', '2015-01-11 02:09:46', 'Inclusão de mídia', 'INSERT INTO `midia` (`idGal`, `tipo`, `nome`, `descricao`, `arquivo`) VALUES (''4'', ''G'', ''baby_against_blue_sky_2043131.jpg'', ''Upload via Ajax.'', ''baby_against_blue_sky_2043131.jpg'')', 'Nova mídia cadastrada no sistema'),
(293, 'oshima', '2015-01-11 02:09:46', 'Inclusão de mídia', 'INSERT INTO `midia` (`idGal`, `tipo`, `nome`, `descricao`, `arquivo`) VALUES (''4'', ''G'', ''sleeping_in_the_car_seat1.jpg'', ''Upload via Ajax.'', ''sleeping_in_the_car_seat1.jpg'')', 'Nova mídia cadastrada no sistema'),
(294, 'oshima', '2015-01-11 02:09:46', 'Inclusão de mídia', 'INSERT INTO `midia` (`idGal`, `tipo`, `nome`, `descricao`, `arquivo`) VALUES (''4'', ''G'', ''061.jpg'', ''Upload via Ajax.'', ''061.jpg'')', 'Nova mídia cadastrada no sistema'),
(295, 'oshima', '2015-01-11 02:14:09', 'Inclusão de mídia', 'INSERT INTO `midia` (`idGal`, `tipo`, `nome`, `descricao`, `arquivo`) VALUES (''4'', ''G'', ''01.jpg'', ''Upload via Ajax.'', ''01.jpg'')', 'Nova mídia cadastrada no sistema'),
(296, 'oshima', '2015-01-11 02:14:09', 'Inclusão de mídia', 'INSERT INTO `midia` (`idGal`, `tipo`, `nome`, `descricao`, `arquivo`) VALUES (''4'', ''G'', ''06.jpg'', ''Upload via Ajax.'', ''06.jpg'')', 'Nova mídia cadastrada no sistema'),
(297, 'oshima', '2015-01-11 02:14:09', 'Inclusão de mídia', 'INSERT INTO `midia` (`idGal`, `tipo`, `nome`, `descricao`, `arquivo`) VALUES (''4'', ''G'', ''05.jpg'', ''Upload via Ajax.'', ''05.jpg'')', 'Nova mídia cadastrada no sistema'),
(298, 'oshima', '2015-01-11 02:14:09', 'Inclusão de mídia', 'INSERT INTO `midia` (`idGal`, `tipo`, `nome`, `descricao`, `arquivo`) VALUES (''4'', ''G'', ''02.jpg'', ''Upload via Ajax.'', ''02.jpg'')', 'Nova mídia cadastrada no sistema'),
(299, 'oshima', '2015-01-11 02:14:09', 'Inclusão de mídia', 'INSERT INTO `midia` (`idGal`, `tipo`, `nome`, `descricao`, `arquivo`) VALUES (''4'', ''G'', ''03.jpg'', ''Upload via Ajax.'', ''03.jpg'')', 'Nova mídia cadastrada no sistema'),
(300, 'oshima', '2015-01-11 02:14:09', 'Inclusão de mídia', 'INSERT INTO `midia` (`idGal`, `tipo`, `nome`, `descricao`, `arquivo`) VALUES (''4'', ''G'', ''04.jpg'', ''Upload via Ajax.'', ''04.jpg'')', 'Nova mídia cadastrada no sistema'),
(301, 'oshima', '2015-01-11 02:14:10', 'Inclusão de mídia', 'INSERT INTO `midia` (`idGal`, `tipo`, `nome`, `descricao`, `arquivo`) VALUES (''4'', ''G'', ''sleeping_in_the_car_seat.jpg'', ''Upload via Ajax.'', ''sleeping_in_the_car_seat.jpg'')', 'Nova mídia cadastrada no sistema'),
(302, 'oshima', '2015-01-11 02:14:10', 'Inclusão de mídia', 'INSERT INTO `midia` (`idGal`, `tipo`, `nome`, `descricao`, `arquivo`) VALUES (''4'', ''G'', ''baby_against_blue_sky_204313.jpg'', ''Upload via Ajax.'', ''baby_against_blue_sky_204313.jpg'')', 'Nova mídia cadastrada no sistema'),
(303, 'oshima', '2015-01-11 02:16:44', 'Inclusão de mídia', 'INSERT INTO `midia` (`idGal`, `tipo`, `nome`, `descricao`, `arquivo`) VALUES (''4'', ''G'', ''01.jpg'', ''Upload via Ajax.'', ''01.jpg'')', 'Nova mídia cadastrada no sistema'),
(304, 'oshima', '2015-01-11 02:16:44', 'Inclusão de mídia', 'INSERT INTO `midia` (`idGal`, `tipo`, `nome`, `descricao`, `arquivo`) VALUES (''4'', ''G'', ''02.jpg'', ''Upload via Ajax.'', ''02.jpg'')', 'Nova mídia cadastrada no sistema'),
(305, 'oshima', '2015-01-11 02:16:45', 'Inclusão de mídia', 'INSERT INTO `midia` (`idGal`, `tipo`, `nome`, `descricao`, `arquivo`) VALUES (''4'', ''G'', ''04.jpg'', ''Upload via Ajax.'', ''04.jpg'')', 'Nova mídia cadastrada no sistema'),
(306, 'oshima', '2015-01-11 02:16:45', 'Inclusão de mídia', 'INSERT INTO `midia` (`idGal`, `tipo`, `nome`, `descricao`, `arquivo`) VALUES (''4'', ''G'', ''baby_against_blue_sky_204313.jpg'', ''Upload via Ajax.'', ''baby_against_blue_sky_204313.jpg'')', 'Nova mídia cadastrada no sistema'),
(307, 'oshima', '2015-01-11 02:16:45', 'Inclusão de mídia', 'INSERT INTO `midia` (`idGal`, `tipo`, `nome`, `descricao`, `arquivo`) VALUES (''4'', ''G'', ''03.jpg'', ''Upload via Ajax.'', ''03.jpg'')', 'Nova mídia cadastrada no sistema'),
(308, 'oshima', '2015-01-11 02:16:45', 'Inclusão de mídia', 'INSERT INTO `midia` (`idGal`, `tipo`, `nome`, `descricao`, `arquivo`) VALUES (''4'', ''G'', ''06.jpg'', ''Upload via Ajax.'', ''06.jpg'')', 'Nova mídia cadastrada no sistema'),
(309, 'oshima', '2015-01-11 02:16:45', 'Inclusão de mídia', 'INSERT INTO `midia` (`idGal`, `tipo`, `nome`, `descricao`, `arquivo`) VALUES (''4'', ''G'', ''05.jpg'', ''Upload via Ajax.'', ''05.jpg'')', 'Nova mídia cadastrada no sistema'),
(310, 'oshima', '2015-01-11 02:16:45', 'Inclusão de mídia', 'INSERT INTO `midia` (`idGal`, `tipo`, `nome`, `descricao`, `arquivo`) VALUES (''4'', ''G'', ''sleeping_in_the_car_seat.jpg'', ''Upload via Ajax.'', ''sleeping_in_the_car_seat.jpg'')', 'Nova mídia cadastrada no sistema'),
(311, 'oshima', '2015-01-11 03:25:40', 'Login no sistema', 'SELECT *\nFROM (`usuarios`)\nWHERE `login` =  ''oshima''\nLIMIT 1', 'Usuário "oshima" fez login no sistema'),
(312, 'oshima', '2015-01-11 03:26:03', 'Inclusão de mídia', 'INSERT INTO `midia` (`idGal`, `tipo`, `nome`, `descricao`, `arquivo`) VALUES (''4'', ''G'', ''021.jpg'', ''Upload via Ajax.'', ''021.jpg'')', 'Nova mídia cadastrada no sistema'),
(313, 'oshima', '2015-01-11 03:26:03', 'Inclusão de mídia', 'INSERT INTO `midia` (`idGal`, `tipo`, `nome`, `descricao`, `arquivo`) VALUES (''4'', ''G'', ''041.jpg'', ''Upload via Ajax.'', ''041.jpg'')', 'Nova mídia cadastrada no sistema'),
(314, 'oshima', '2015-01-11 03:26:03', 'Inclusão de mídia', 'INSERT INTO `midia` (`idGal`, `tipo`, `nome`, `descricao`, `arquivo`) VALUES (''4'', ''G'', ''baby_against_blue_sky_2043131.jpg'', ''Upload via Ajax.'', ''baby_against_blue_sky_2043131.jpg'')', 'Nova mídia cadastrada no sistema'),
(315, 'oshima', '2015-01-11 03:26:03', 'Inclusão de mídia', 'INSERT INTO `midia` (`idGal`, `tipo`, `nome`, `descricao`, `arquivo`) VALUES (''4'', ''G'', ''sleeping_in_the_car_seat1.jpg'', ''Upload via Ajax.'', ''sleeping_in_the_car_seat1.jpg'')', 'Nova mídia cadastrada no sistema'),
(316, 'oshima', '2015-01-11 03:26:03', 'Inclusão de mídia', 'INSERT INTO `midia` (`idGal`, `tipo`, `nome`, `descricao`, `arquivo`) VALUES (''4'', ''G'', ''031.jpg'', ''Upload via Ajax.'', ''031.jpg'')', 'Nova mídia cadastrada no sistema'),
(317, 'oshima', '2015-01-11 03:26:03', 'Inclusão de mídia', 'INSERT INTO `midia` (`idGal`, `tipo`, `nome`, `descricao`, `arquivo`) VALUES (''4'', ''G'', ''061.jpg'', ''Upload via Ajax.'', ''061.jpg'')', 'Nova mídia cadastrada no sistema'),
(318, 'oshima', '2015-01-11 15:30:41', 'Login no sistema', 'SELECT *\nFROM (`usuarios`)\nWHERE `login` =  ''oshima''\nLIMIT 1', 'Usuário "oshima" fez login no sistema'),
(319, 'oshima', '2015-01-11 15:33:23', 'Inclusão de página', 'INSERT INTO `posts` (`titulo`, `slug`, `conteudo`) VALUES (''Mussum ipsum'', ''mussum-ipsum'', ''&lt;p&gt;Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. Pra l&amp;aacute; , depois divoltis porris, paradis. Paisis, filhis, espiritis santis. M&amp;eacute; faiz elementum girarzis, nisi eros vermeio, in elementis m&amp;eacute; pra quem &amp;eacute; amistosis quis leo. Manduma pindureta quium dia nois paga. Sapien in monti palavris qui num significa nadis i pareci latim. Interessantiss quisso pudia ce receita de bolis, mais bolis eu num gostis.&lt;/p&gt;\\r\\n&lt;p&gt;Suco de cevadiss, &amp;eacute; um leite divinis, qui tem lupuliz, matis, aguis e fermentis. Interagi no m&amp;eacute;, cursus quis, vehicula ac nisi. Aenean vel dui dui. Nullam leo erat, aliquet quis tempus a, posuere ut mi. Ut scelerisque neque et turpis posuere pulvinar pellentesque nibh ullamcorper. Pharetra in mattis molestie, volutpat elementum justo. Aenean ut ante turpis. Pellentesque laoreet m&amp;eacute; vel lectus scelerisque interdum cursus velit auctor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam ac mauris lectus, non scelerisque augue. Aenean justo massa.&lt;/p&gt;\\r\\n&lt;p&gt;Casamentiss faiz malandris se pirulit&amp;aacute;, Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Lorem ipsum dolor sit amet, consectetuer Ispecialista im m&amp;eacute; intende tudis nuam golada, vinho, uiski, carir&amp;iacute;, rum da jamaikis, s&amp;oacute; num pode ser mijis. Adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.&lt;/p&gt;'')', 'Nova página cadastrada no sistema'),
(320, 'oshima', '2015-01-11 15:33:45', 'Inclusão de página', 'INSERT INTO `posts` (`titulo`, `slug`, `conteudo`) VALUES (''Mussum ipsum 2'', ''mussum-ipsum-2'', ''&lt;p&gt;Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. Pra l&amp;aacute; , depois divoltis porris, paradis. Paisis, filhis, espiritis santis. M&amp;eacute; faiz elementum girarzis, nisi eros vermeio, in elementis m&amp;eacute; pra quem &amp;eacute; amistosis quis leo. Manduma pindureta quium dia nois paga. Sapien in monti palavris qui num significa nadis i pareci latim. Interessantiss quisso pudia ce receita de bolis, mais bolis eu num gostis.&lt;/p&gt;\\r\\n&lt;p&gt;Suco de cevadiss, &amp;eacute; um leite divinis, qui tem lupuliz, matis, aguis e fermentis. Interagi no m&amp;eacute;, cursus quis, vehicula ac nisi. Aenean vel dui dui. Nullam leo erat, aliquet quis tempus a, posuere ut mi. Ut scelerisque neque et turpis posuere pulvinar pellentesque nibh ullamcorper. Pharetra in mattis molestie, volutpat elementum justo. Aenean ut ante turpis. Pellentesque laoreet m&amp;eacute; vel lectus scelerisque interdum cursus velit auctor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam ac mauris lectus, non scelerisque augue. Aenean justo massa.&lt;/p&gt;\\r\\n&lt;p&gt;Casamentiss faiz malandris se pirulit&amp;aacute;, Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Lorem ipsum dolor sit amet, consectetuer Ispecialista im m&amp;eacute; intende tudis nuam golada, vinho, uiski, carir&amp;iacute;, rum da jamaikis, s&amp;oacute; num pode ser mijis. Adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.&lt;/p&gt;'')', 'Nova página cadastrada no sistema'),
(321, 'oshima', '2015-01-11 15:34:10', 'Inclusão de página', 'INSERT INTO `posts` (`titulo`, `slug`, `conteudo`) VALUES (''Mussum ipsum 3'', ''mussum-ipsum-3'', ''&lt;p&gt;Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. Pra l&amp;aacute; , depois divoltis porris, paradis. Paisis, filhis, espiritis santis. M&amp;eacute; faiz elementum girarzis, nisi eros vermeio, in elementis m&amp;eacute; pra quem &amp;eacute; amistosis quis leo. Manduma pindureta quium dia nois paga. Sapien in monti palavris qui num significa nadis i pareci latim. Interessantiss quisso pudia ce receita de bolis, mais bolis eu num gostis.&lt;/p&gt;\\r\\n&lt;p&gt;Suco de cevadiss, &amp;eacute; um leite divinis, qui tem lupuliz, matis, aguis e fermentis. Interagi no m&amp;eacute;, cursus quis, vehicula ac nisi. Aenean vel dui dui. Nullam leo erat, aliquet quis tempus a, posuere ut mi. Ut scelerisque neque et turpis posuere pulvinar pellentesque nibh ullamcorper. Pharetra in mattis molestie, volutpat elementum justo. Aenean ut ante turpis. Pellentesque laoreet m&amp;eacute; vel lectus scelerisque interdum cursus velit auctor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam ac mauris lectus, non scelerisque augue. Aenean justo massa.&lt;/p&gt;\\r\\n&lt;p&gt;Casamentiss faiz malandris se pirulit&amp;aacute;, Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Lorem ipsum dolor sit amet, consectetuer Ispecialista im m&amp;eacute; intende tudis nuam golada, vinho, uiski, carir&amp;iacute;, rum da jamaikis, s&amp;oacute; num pode ser mijis. Adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.&lt;/p&gt;'')', 'Nova página cadastrada no sistema'),
(322, 'oshima', '2015-01-11 16:49:25', 'Inclusão de mídia', 'INSERT INTO `midia` (`tipo`, `nome`, `descricao`, `arquivo`) VALUES (''B'', ''Maluco doido'', ''DOP - Maluco doido'', ''385429_2201173323250_1664840903_1757753_150102401_n.jpg'')', 'Nova mídia cadastrada no sistema'),
(323, 'oshima', '2015-01-11 16:49:42', 'Inclusão de mídia', 'INSERT INTO `midia` (`tipo`, `nome`, `descricao`, `arquivo`) VALUES (''B'', ''Maluco doido 2'', ''DOP - Maluco doido 2'', ''393414_2201175523305_2130581748_n.jpg'')', 'Nova mídia cadastrada no sistema'),
(324, 'oshima', '2015-01-11 17:08:05', 'Exclusão de página', 'DELETE FROM `posts`\nWHERE `id` =  ''3''', 'A página com o id "3" foi excluída'),
(325, 'oshima', '2015-01-11 17:08:08', 'Exclusão de página', 'DELETE FROM `posts`\nWHERE `id` =  ''1''', 'A página com o id "1" foi excluída'),
(326, 'oshima', '2015-01-11 17:08:10', 'Exclusão de página', 'DELETE FROM `posts`\nWHERE `id` =  ''2''', 'A página com o id "2" foi excluída'),
(327, 'oshima', '2015-01-11 17:12:31', 'Inclusão de página', 'INSERT INTO `posts` (`titulo`, `slug`, `conteudo`, `dataCreate`) VALUES (''Mussum ipsum'', ''mussum-ipsum'', ''&lt;p&gt;Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. Pra l&amp;aacute; , depois divoltis porris, paradis. Paisis, filhis, espiritis santis. M&amp;eacute; faiz elementum girarzis, nisi eros vermeio, in elementis m&amp;eacute; pra quem &amp;eacute; amistosis quis leo. Manduma pindureta quium dia nois paga. Sapien in monti palavris qui num significa nadis i pareci latim. Interessantiss quisso pudia ce receita de bolis, mais bolis eu num gostis.&lt;/p&gt;\\r\\n&lt;p&gt;Suco de cevadiss, &amp;eacute; um leite divinis, qui tem lupuliz, matis, aguis e fermentis. Interagi no m&amp;eacute;, cursus quis, vehicula ac nisi. Aenean vel dui dui. Nullam leo erat, aliquet quis tempus a, posuere ut mi. Ut scelerisque neque et turpis posuere pulvinar pellentesque nibh ullamcorper. Pharetra in mattis molestie, volutpat elementum justo. Aenean ut ante turpis. Pellentesque laoreet m&amp;eacute; vel lectus scelerisque interdum cursus velit auctor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam ac mauris lectus, non scelerisque augue. Aenean justo massa.&lt;/p&gt;\\r\\n&lt;p&gt;Casamentiss faiz malandris se pirulit&amp;aacute;, Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Lorem ipsum dolor sit amet, consectetuer Ispecialista im m&amp;eacute; intende tudis nuam golada, vinho, uiski, carir&amp;iacute;, rum da jamaikis, s&amp;oacute; num pode ser mijis. Adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.&lt;/p&gt;\\r\\n&lt;p&gt;Cevadis im ampola pa arma uma pindureta. Nam varius eleifend orci, sed viverra nisl condimentum ut. Donec eget justis enim. Atirei o pau no gatis. Viva Forevis aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Copo furadis &amp;eacute; disculpa de babadis, arcu quam euismod magna, bibendum egestas augue arcu ut est. Delegadis gente finis. In sit amet mattis porris, paradis. Paisis, filhis, espiritis santis. M&amp;eacute; faiz elementum girarzis. Pellentesque viverra accumsan ipsum elementum gravidis.&lt;/p&gt;\\r\\n&lt;p&gt;Forevis aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Copo furadis &amp;eacute; disculpa de babadis, arcu quam euismod magna, bibendum egestas augue arcu ut est. Etiam ultricies tincidunt ligula, sed accumsan sapien mollis et. Delegadis gente finis. In sit amet mattis porris, paradis. Paisis, filhis, espiritis santis. M&amp;eacute; faiz elementum girarzis. Pellentesque viverra accumsan ipsum elementum gravida. Quisque vitae metus id massa tincidunt iaculis sed sed purus. Vestibulum viverra lobortis faucibus. Vestibulum et turpis.&lt;/p&gt;\\r\\n&lt;p&gt;Vitis e adipiscing enim. Nam varius eleifend orci, sed viverra nisl condimentum ut. Donec eget justo enim. Atirei o pau no gatis. Quisque dignissim felis quis sapien ullamcorper varius tempor sem varius. Vivamus lobortis posuere facilisis. Sed auctor eros ac sapien sagittis accumsan. Integer semper accumsan arcu, at aliquam nisl sollicitudin non. Nullam pellentesque metus nec libero laoreet vitae vestibulum ante ultricies. Phasellus non mollis purus. Integer vel lacus dolor. Proin eget mi nec mauris convallis ullamcorper vel ac nulla. Nulla et semper metus.&lt;/p&gt;'', ''2015-01-11 14:12:31'')', 'Nova página cadastrada no sistema'),
(328, 'oshima', '2015-01-11 17:15:00', 'Exclusão de página', 'DELETE FROM `posts`\nWHERE `id` =  ''4''', 'A página com o id "4" foi excluída'),
(329, 'oshima', '2015-01-11 17:15:17', 'Inclusão de página', 'INSERT INTO `posts` (`titulo`, `slug`, `conteudo`, `dataCreate`, `arquivo`) VALUES (''Mussum ipsum'', ''mussum-ipsum'', ''&lt;p&gt;Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. Pra l&amp;aacute; , depois divoltis porris, paradis. Paisis, filhis, espiritis santis. M&amp;eacute; faiz elementum girarzis, nisi eros vermeio, in elementis m&amp;eacute; pra quem &amp;eacute; amistosis quis leo. Manduma pindureta quium dia nois paga. Sapien in monti palavris qui num significa nadis i pareci latim. Interessantiss quisso pudia ce receita de bolis, mais bolis eu num gostis.&lt;/p&gt;\\r\\n&lt;p&gt;Suco de cevadiss, &amp;eacute; um leite divinis, qui tem lupuliz, matis, aguis e fermentis. Interagi no m&amp;eacute;, cursus quis, vehicula ac nisi. Aenean vel dui dui. Nullam leo erat, aliquet quis tempus a, posuere ut mi. Ut scelerisque neque et turpis posuere pulvinar pellentesque nibh ullamcorper. Pharetra in mattis molestie, volutpat elementum justo. Aenean ut ante turpis. Pellentesque laoreet m&amp;eacute; vel lectus scelerisque interdum cursus velit auctor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam ac mauris lectus, non scelerisque augue. Aenean justo massa.&lt;/p&gt;\\r\\n&lt;p&gt;Casamentiss faiz malandris se pirulit&amp;aacute;, Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Lorem ipsum dolor sit amet, consectetuer Ispecialista im m&amp;eacute; intende tudis nuam golada, vinho, uiski, carir&amp;iacute;, rum da jamaikis, s&amp;oacute; num pode ser mijis. Adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.&lt;/p&gt;\\r\\n&lt;p&gt;Cevadis im ampola pa arma uma pindureta. Nam varius eleifend orci, sed viverra nisl condimentum ut. Donec eget justis enim. Atirei o pau no gatis. Viva Forevis aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Copo furadis &amp;eacute; disculpa de babadis, arcu quam euismod magna, bibendum egestas augue arcu ut est. Delegadis gente finis. In sit amet mattis porris, paradis. Paisis, filhis, espiritis santis. M&amp;eacute; faiz elementum girarzis. Pellentesque viverra accumsan ipsum elementum gravidis.&lt;/p&gt;\\r\\n&lt;p&gt;Forevis aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Copo furadis &amp;eacute; disculpa de babadis, arcu quam euismod magna, bibendum egestas augue arcu ut est. Etiam ultricies tincidunt ligula, sed accumsan sapien mollis et. Delegadis gente finis. In sit amet mattis porris, paradis. Paisis, filhis, espiritis santis. M&amp;eacute; faiz elementum girarzis. Pellentesque viverra accumsan ipsum elementum gravida. Quisque vitae metus id massa tincidunt iaculis sed sed purus. Vestibulum viverra lobortis faucibus. Vestibulum et turpis.&lt;/p&gt;\\r\\n&lt;p&gt;Vitis e adipiscing enim. Nam varius eleifend orci, sed viverra nisl condimentum ut. Donec eget justo enim. Atirei o pau no gatis. Quisque dignissim felis quis sapien ullamcorper varius tempor sem varius. Vivamus lobortis posuere facilisis. Sed auctor eros ac sapien sagittis accumsan. Integer semper accumsan arcu, at aliquam nisl sollicitudin non. Nullam pellentesque metus nec libero laoreet vitae vestibulum ante ultricies. Phasellus non mollis purus. Integer vel lacus dolor. Proin eget mi nec mauris convallis ullamcorper vel ac nulla. Nulla et semper metus.&lt;/p&gt;'', ''2015-01-11 14:15:17'', ''393414_2201175523305_2130581748_n2.jpg'')', 'Nova página cadastrada no sistema'),
(330, 'oshima', '2015-01-11 18:43:43', 'Login no sistema', 'SELECT *\nFROM (`usuarios`)\nWHERE `login` =  ''oshima''\nLIMIT 1', 'Usuário "oshima" fez login no sistema'),
(331, 'oshima', '2015-01-11 18:44:24', 'Inclusão de página', 'INSERT INTO `agenda` (`titulo`, `descricao`, `data`, `hora`, `logradouro`, `bairro`, `numero`, `cidade`, `estado`, `banner`) VALUES (''Mussum ipsum'', ''<p>Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. Pra l&aacute; , depois divoltis porris, paradis. Paisis, filhis, espiritis santis. M&eacute; faiz elementum girarzis, nisi eros vermeio, in elementis m&eacute; pra quem &eacute; amistosis quis leo. Manduma pindureta quium dia nois paga. Sapien in monti palavris qui num significa nadis i pareci latim. Interessantiss quisso pudia ce receita de bolis, mais bolis eu num gostis.</p>\\r\\n<p>Suco de cevadiss, &eacute; um leite divinis, qui tem lupuliz, matis, aguis e fermentis. Interagi no m&eacute;, cursus quis, vehicula ac nisi. Aenean vel dui dui. Nullam leo erat, aliquet quis tempus a, posuere ut mi. Ut scelerisque neque et turpis posuere pulvinar pellentesque nibh ullamcorper. Pharetra in mattis molestie, volutpat elementum justo. Aenean ut ante turpis. Pellentesque laoreet m&eacute; vel lectus scelerisque interdum cursus velit auctor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam ac mauris lectus, non scelerisque augue. Aenean justo massa.</p>\\r\\n<p>Casamentiss faiz malandris se pirulit&aacute;, Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Lorem ipsum dolor sit amet, consectetuer Ispecialista im m&eacute; intende tudis nuam golada, vinho, uiski, carir&iacute;, rum da jamaikis, s&oacute; num pode ser mijis. Adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>\\r\\n<p>Cevadis im ampola pa arma uma pindureta. Nam varius eleifend orci, sed viverra nisl condimentum ut. Donec eget justis enim. Atirei o pau no gatis. Viva Forevis aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Copo furadis &eacute; disculpa de babadis, arcu quam euismod magna, bibendum egestas augue arcu ut est. Delegadis gente finis. In sit amet mattis porris, paradis. Paisis, filhis, espiritis santis. M&eacute; faiz elementum girarzis. Pellentesque viverra accumsan ipsum elementum gravidis.</p>\\r\\n<p>Forevis aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Copo furadis &eacute; disculpa de babadis, arcu quam euismod magna, bibendum egestas augue arcu ut est. Etiam ultricies tincidunt ligula, sed accumsan sapien mollis et. Delegadis gente finis. In sit amet mattis porris, paradis. Paisis, filhis, espiritis santis. M&eacute; faiz elementum girarzis. Pellentesque viverra accumsan ipsum elementum gravida. Quisque vitae metus id massa tincidunt iaculis sed sed purus. Vestibulum viverra lobortis faucibus. Vestibulum et turpis.</p>\\r\\n<p>Vitis e adipiscing enim. Nam varius eleifend orci, sed viverra nisl condimentum ut. Donec eget justo enim. Atirei o pau no gatis. Quisque dignissim felis quis sapien ullamcorper varius tempor sem varius. Vivamus lobortis posuere facilisis. Sed auctor eros ac sapien sagittis accumsan. Integer semper accumsan arcu, at aliquam nisl sollicitudin non. Nullam pellentesque metus nec libero laoreet vitae vestibulum ante ultricies. Phasellus non mollis purus. Integer vel lacus dolor. Proin eget mi nec mauris convallis ullamcorper vel ac nulla. Nulla et semper metus.</p>'', ''16/01/2015'', ''20:00'', ''rua 303'', ''Jangurussu'', ''284'', ''fortaleza'', ''ce'', ''385429_2201173323250_1664840903_1757753_150102401_n1.jpg'')', 'Nova página cadastrada no sistema'),
(332, 'oshima', '2015-01-12 21:58:13', 'Login no sistema', 'SELECT *\nFROM (`usuarios`)\nWHERE `login` =  ''oshima''\nLIMIT 1', 'Usuário "oshima" fez login no sistema'),
(333, 'oshima', '2015-01-13 00:46:24', 'Login no sistema', 'SELECT *\nFROM (`usuarios`)\nWHERE `login` =  ''oshima''\nLIMIT 1', 'Usuário "oshima" fez login no sistema'),
(334, 'oshima', '2015-01-14 13:12:07', 'Login no sistema', 'SELECT *\nFROM (`usuarios`)\nWHERE `login` =  ''oshima''\nLIMIT 1', 'Usuário "oshima" fez login no sistema'),
(335, 'oshima', '2015-01-14 17:19:32', 'Login no sistema', 'SELECT *\nFROM (`usuarios`)\nWHERE `login` =  ''oshima''\nLIMIT 1', 'Usuário "oshima" fez login no sistema'),
(336, 'oshima', '2015-01-15 19:27:44', 'Login no sistema', 'SELECT *\nFROM (`usuarios`)\nWHERE `login` =  ''oshima''\nLIMIT 1', 'Usuário "oshima" fez login no sistema'),
(337, 'oshima', '2015-01-15 19:28:34', 'Inclusão de produto', 'INSERT INTO `produtos` (`titulo`, `conteudo`, `preco`, `slug`, `cat_prod`, `arquivo`, `tags`) VALUES (''SnupDog'', ''&lt;p&gt;&lt;img src=&quot;http://localhost/mixirico/assets/uploads/sleeping_in_the_car_seat.jpg&quot; alt=&quot;&quot; /&gt;&lt;/p&gt;'', ''10.00'', ''snupdog'', ''5'', ''393414_2201175523305_2130581748_n.jpg'', ''SnupDog'')', 'Nova produto cadastrado no sistema'),
(338, 'oshima', '2015-01-15 19:35:29', 'Exclusão de mídia', 'DELETE FROM `midia`\nWHERE `id` =  ''16''', 'A mídia com o id "16" foi excluída');
INSERT INTO `auditoria` (`id`, `usuario`, `data_hora`, `operacao`, `query`, `observacao`) VALUES
(339, 'oshima', '2015-01-15 19:35:39', 'Exclusão de mídia', 'DELETE FROM `midia`\nWHERE `id` =  ''15''', 'A mídia com o id "15" foi excluída');

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
-- Estrutura da tabela `galerias`
--

CREATE TABLE IF NOT EXISTS `galerias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(100) NOT NULL,
  `descricao` longtext NOT NULL,
  `arquivo` varchar(255) NOT NULL,
  `status` char(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Extraindo dados da tabela `galerias`
--

INSERT INTO `galerias` (`id`, `titulo`, `descricao`, `arquivo`, `status`) VALUES
(1, 'Participação no programa do Faustão', 'Participação no programa do Faustão', '1', '0'),
(2, 'FOTOS DO SHOWS', 'Magnis', '2', '0'),
(4, 'FOTO DO SHOWS', '*MIXIRICO UM SUPER SHOW DE HUMOR*', '2', '0'),
(5, 'FOTOS DO SHOW', 'MIXIRICO UM SUPER SHOW DE HUMOR!!', '6', '1'),
(6, 'PARTICIPAÇÃO NO PROGRAMA DO FAUSTÃO!!', 'PARTICIPAÇÃO NO PROGRAMA DO FAUSTÃO', '1', '1');

-- --------------------------------------------------------

--
-- Estrutura da tabela `midia`
--

CREATE TABLE IF NOT EXISTS `midia` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idGal` int(11) NOT NULL,
  `tipo` char(1) NOT NULL,
  `nome` varchar(45) NOT NULL,
  `descricao` varchar(255) NOT NULL,
  `arquivo` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Extraindo dados da tabela `midia`
--

INSERT INTO `midia` (`id`, `idGal`, `tipo`, `nome`, `descricao`, `arquivo`) VALUES
(1, 4, 'G', '01.jpg', 'Upload via Ajax.', '01.jpg'),
(2, 4, 'G', '02.jpg', 'Upload via Ajax.', '02.jpg'),
(3, 4, 'G', '03.jpg', 'Upload via Ajax.', '03.jpg'),
(4, 4, 'G', '06.jpg', 'Upload via Ajax.', '06.jpg'),
(5, 4, 'G', '05.jpg', 'Upload via Ajax.', '05.jpg'),
(6, 4, 'G', '04.jpg', 'Upload via Ajax.', '04.jpg'),
(7, 4, 'G', 'baby_against_blue_sky_204313.jpg', 'Upload via Ajax.', 'baby_against_blue_sky_204313.jpg'),
(8, 4, 'G', 'sleeping_in_the_car_seat.jpg', 'Upload via Ajax.', 'sleeping_in_the_car_seat.jpg'),
(9, 4, 'G', '021.jpg', 'Upload via Ajax.', '021.jpg'),
(10, 4, 'G', '031.jpg', 'Upload via Ajax.', '031.jpg'),
(11, 4, 'G', 'sleeping_in_the_car_seat1.jpg', 'Upload via Ajax.', 'sleeping_in_the_car_seat1.jpg'),
(12, 4, 'G', '041.jpg', 'Upload via Ajax.', '041.jpg'),
(13, 4, 'G', 'baby_against_blue_sky_2043131.jpg', 'Upload via Ajax.', 'baby_against_blue_sky_2043131.jpg'),
(14, 4, 'G', '061.jpg', 'Upload via Ajax.', '061.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `paginas`
--

CREATE TABLE IF NOT EXISTS `paginas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `tags` varchar(255) NOT NULL,
  `conteudo` longtext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `paginas`
--

INSERT INTO `paginas` (`id`, `titulo`, `slug`, `tags`, `conteudo`) VALUES
(1, 'Release', 'release', '', '&lt;p style=&quot;text-align: center;&quot;&gt;&lt;span style=&quot;font-weight: bold;&quot;&gt;&amp;nbsp;&lt;/span&gt;&lt;img style=&quot;text-align: center;&quot; title=&quot;logo mixirico&quot; src=&quot;http://localhost/mixirico/uploads/images/logo_mixirico.png&quot; alt=&quot;Logomarca Mixirico - Feio, mas elegante!&quot; width=&quot;229&quot; height=&quot;88&quot; /&gt;&lt;/p&gt;\r\n&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n&lt;p&gt;&lt;strong&gt;MIXIRICO&lt;/strong&gt;&lt;br /&gt; Nascido no interior do interior do interior do Cear&amp;aacute;, sempre foi o &lt;strong&gt;MAIS&lt;/strong&gt; de sua casa o &lt;strong&gt;MAIS&lt;/strong&gt; feio, &lt;strong&gt;MAIS&lt;/strong&gt; magro, &lt;strong&gt;MAIS &lt;/strong&gt;gaiato e o &lt;strong&gt;MAIS &lt;/strong&gt;azarado, Incorporando o tipo &lt;strong&gt;&quot;BREGA RURAL&quot;&lt;/strong&gt; (Matuto) encanta as pessoas e desencanta o mist&amp;eacute;rio de ser &lt;strong&gt;FEIO&lt;/strong&gt; e &lt;strong&gt;EXCLU&amp;Iacute;DO &lt;/strong&gt;com muita gra&amp;ccedil;a e talento, Ele &amp;eacute; t&amp;atilde;o feio que foi a &amp;uacute;nica crian&amp;ccedil;a a passar 18 meses pra nascer,pois da vez que ele botou a cabe&amp;ccedil;a pra fora o parteiro olhou e disse&lt;strong&gt;:&quot;VOC&amp;Ecirc; N&amp;Atilde;O T&amp;Aacute; PRONTO N&amp;Atilde;O,VOLTE&quot;&lt;/strong&gt;...mas apesar de sua fei&amp;uacute;ra ele conseguiu casar pois afinal de contas &lt;strong&gt;MILAGRES &lt;/strong&gt;acontecem, o desfecho dessa hist&amp;oacute;ria s&amp;oacute; contratando-o pra saber.&lt;br /&gt; Arranca seus &lt;strong&gt;&quot;CAUSOS&quot; &lt;/strong&gt;do dia a dia e &amp;eacute; tido como um dos melhores contador de &lt;strong&gt;PIADAS&lt;/strong&gt; a n&amp;iacute;vel local, com a vis&amp;atilde;o cr&amp;iacute;tica elabora seus textos temas com cad&amp;ecirc;ncia.&lt;br /&gt; Participou de um dos maiores festivais de humor do Cear&amp;aacute; em 1992 e foi o &amp;uacute;nico representante do Cear&amp;aacute; que ele mesmo denomina como um &lt;strong&gt;&quot;ESTADO DE GRA&amp;Ccedil;A&quot;&lt;/strong&gt; pelo povo hospitaleiro e acolhedor.&lt;br /&gt; Foi convidado a participar da&lt;strong&gt;&quot;SEMANA DO CEAR&amp;Aacute;&quot;&lt;/strong&gt;promovida pela &lt;strong&gt;SETUR-SECRETARIA DE TURISMO&lt;/strong&gt; do CEAR&amp;Aacute; e &lt;strong&gt;TAM LINHAS A&amp;Eacute;REAS&lt;/strong&gt;, um fato in&amp;eacute;dito na hist&amp;oacute;ria do humor brasileiro e da Avia&amp;ccedil;&amp;atilde;o pois a semana do Cear&amp;aacute; constava em fazer apresenta&amp;ccedil;&amp;otilde;es de humor a bordo das aeronaves,eram apenas 10 minutos ap&amp;oacute;s o servi&amp;ccedil;o de bordo.Foi uma experi&amp;ecirc;ncia grandiosa, que deu ao comediante um &lt;strong&gt;STATUS &lt;/strong&gt;maior perante os demais humoristas. &lt;br /&gt; Atualmente MIXIRICO &amp;eacute; um dos nomes mais cotados pelas casas e restaurantes locais que tem o humor como refer&amp;ecirc;ncia, e se apresenta todo final de semana por diversos bairros mostrando o seu talento de &lt;strong&gt;&quot;FAZER RIR&quot;&lt;/strong&gt;.&lt;br /&gt; Sempre preocupado em atender a todos os tipos gostos e plat&amp;eacute;ias procura agradar dos &lt;strong&gt;08 aos 800 anos de idade&lt;/strong&gt;,assim ele est&amp;aacute; dentre os melhores do humor cearense.&lt;/p&gt;\r\n&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n&lt;p&gt;&amp;Uacute;nico humorista patrocinado pelo F.M.I &lt;strong&gt;Fundo de Molecagem Intensa&lt;/strong&gt;.&lt;/p&gt;\r\n&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n&lt;p style=&quot;text-align: left;&quot;&gt;Agora em dezembro de 2011 foi ganhador do quadro &lt;strong&gt;&quot;QUEM CHEGA&lt;/strong&gt; &lt;strong&gt;L&amp;Aacute;&quot;&lt;/strong&gt; do doming&amp;atilde;o do Faust&amp;atilde;o na &lt;strong&gt;REDE GLOBO&lt;/strong&gt; justamente com a pe&amp;ccedil;a &lt;strong&gt;BAR ZIL A COM&amp;Eacute;DIA&lt;/strong&gt; escrita por ele e compartilhada com mais tr&amp;ecirc;s companheiros de profiss&amp;atilde;o ao qual deu o nome de &lt;strong&gt;&quot;QUARTETO&lt;/strong&gt; &lt;strong&gt;EM RIR&quot; .&lt;/strong&gt;&lt;/p&gt;\r\n&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n&lt;p&gt;&lt;span style=&quot;font-weight: bold;&quot;&gt;Contatos para shows em todo o Brasil(85)9956.5011.&lt;/span&gt;&lt;/p&gt;\r\n&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n&lt;p style=&quot;text-align: center;&quot;&gt;&lt;img title=&quot;Mixirico Sentado&quot; src=&quot;http://localhost/mixirico/uploads/images/fjs_5700.jpg&quot; alt=&quot;Mixirico Sentado na mala&quot; width=&quot;199&quot; height=&quot;298&quot; /&gt;&lt;/p&gt;');

-- --------------------------------------------------------

--
-- Estrutura da tabela `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(255) NOT NULL,
  `slug` varchar(150) NOT NULL,
  `tags` varchar(255) NOT NULL,
  `conteudo` longtext NOT NULL,
  `arquivo` varchar(255) NOT NULL,
  `dataCreate` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Extraindo dados da tabela `posts`
--

INSERT INTO `posts` (`id`, `titulo`, `slug`, `tags`, `conteudo`, `arquivo`, `dataCreate`) VALUES
(5, 'Mussum ipsum', 'mussum-ipsum', '', '&lt;p&gt;Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. Pra l&amp;aacute; , depois divoltis porris, paradis. Paisis, filhis, espiritis santis. M&amp;eacute; faiz elementum girarzis, nisi eros vermeio, in elementis m&amp;eacute; pra quem &amp;eacute; amistosis quis leo. Manduma pindureta quium dia nois paga. Sapien in monti palavris qui num significa nadis i pareci latim. Interessantiss quisso pudia ce receita de bolis, mais bolis eu num gostis.&lt;/p&gt;\r\n&lt;p&gt;Suco de cevadiss, &amp;eacute; um leite divinis, qui tem lupuliz, matis, aguis e fermentis. Interagi no m&amp;eacute;, cursus quis, vehicula ac nisi. Aenean vel dui dui. Nullam leo erat, aliquet quis tempus a, posuere ut mi. Ut scelerisque neque et turpis posuere pulvinar pellentesque nibh ullamcorper. Pharetra in mattis molestie, volutpat elementum justo. Aenean ut ante turpis. Pellentesque laoreet m&amp;eacute; vel lectus scelerisque interdum cursus velit auctor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam ac mauris lectus, non scelerisque augue. Aenean justo massa.&lt;/p&gt;\r\n&lt;p&gt;Casamentiss faiz malandris se pirulit&amp;aacute;, Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Lorem ipsum dolor sit amet, consectetuer Ispecialista im m&amp;eacute; intende tudis nuam golada, vinho, uiski, carir&amp;iacute;, rum da jamaikis, s&amp;oacute; num pode ser mijis. Adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.&lt;/p&gt;\r\n&lt;p&gt;Cevadis im ampola pa arma uma pindureta. Nam varius eleifend orci, sed viverra nisl condimentum ut. Donec eget justis enim. Atirei o pau no gatis. Viva Forevis aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Copo furadis &amp;eacute; disculpa de babadis, arcu quam euismod magna, bibendum egestas augue arcu ut est. Delegadis gente finis. In sit amet mattis porris, paradis. Paisis, filhis, espiritis santis. M&amp;eacute; faiz elementum girarzis. Pellentesque viverra accumsan ipsum elementum gravidis.&lt;/p&gt;\r\n&lt;p&gt;Forevis aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Copo furadis &amp;eacute; disculpa de babadis, arcu quam euismod magna, bibendum egestas augue arcu ut est. Etiam ultricies tincidunt ligula, sed accumsan sapien mollis et. Delegadis gente finis. In sit amet mattis porris, paradis. Paisis, filhis, espiritis santis. M&amp;eacute; faiz elementum girarzis. Pellentesque viverra accumsan ipsum elementum gravida. Quisque vitae metus id massa tincidunt iaculis sed sed purus. Vestibulum viverra lobortis faucibus. Vestibulum et turpis.&lt;/p&gt;\r\n&lt;p&gt;Vitis e adipiscing enim. Nam varius eleifend orci, sed viverra nisl condimentum ut. Donec eget justo enim. Atirei o pau no gatis. Quisque dignissim felis quis sapien ullamcorper varius tempor sem varius. Vivamus lobortis posuere facilisis. Sed auctor eros ac sapien sagittis accumsan. Integer semper accumsan arcu, at aliquam nisl sollicitudin non. Nullam pellentesque metus nec libero laoreet vitae vestibulum ante ultricies. Phasellus non mollis purus. Integer vel lacus dolor. Proin eget mi nec mauris convallis ullamcorper vel ac nulla. Nulla et semper metus.&lt;/p&gt;', '393414_2201175523305_2130581748_n2.jpg', '2015-01-11 14:15:17');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id`, `titulo`, `cat_prod`, `preco`, `arquivo`, `slug`, `tags`, `conteudo`) VALUES
(1, 'SnupDog', 5, 10, '393414_2201175523305_2130581748_n.jpg', 'snupdog', 'SnupDog', '&lt;p&gt;&lt;img src=&quot;http://localhost/mixirico/assets/uploads/sleeping_in_the_car_seat.jpg&quot; alt=&quot;&quot; /&gt;&lt;/p&gt;');

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
(18, 'facebook', 'https://www.facebook.com/pages/Zedoidin/1545837109005479'),
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

-- --------------------------------------------------------

--
-- Estrutura da tabela `videos`
--

CREATE TABLE IF NOT EXISTS `videos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(200) NOT NULL,
  `descricao` text NOT NULL,
  `thumb` varchar(70) NOT NULL,
  `embed` varchar(30) NOT NULL,
  `server` varchar(50) NOT NULL,
  `status` char(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Extraindo dados da tabela `videos`
--

INSERT INTO `videos` (`id`, `titulo`, `descricao`, `thumb`, `embed`, `server`, `status`) VALUES
(1, 'OlimPiadas - Marcos Aurélio (Mixirico)', 'humorista cearense Marcos Aurélio (Mixirico) participando do OlimPiadas quadro do Programa Tudo é Possível com Ana Hickman na Rede Record. Gleiciano Silva FG...', 'http://i1.ytimg.com/vi/zvAwku9GKrI/default.jpg', 'zvAwku9GKrI', 'YouTube', '1'),
(2, 'Quarteto em Rir - Ceará No Faustão.', 'Apresentação do grupo cearense em que nosso amigo Juan esteve participando. Parabéns Juan!!!', 'http://i1.ytimg.com/vi/EEjMdOrSFn4/default.jpg', 'EEjMdOrSFn4', 'YouTube', '1'),
(3, 'Humor de graça - Mixirico', 'iosdhfgpaudshfgiphaipdfhgiupsdfipgasipudgiups', 'http://i1.ytimg.com/vi/YjLMA5DoX24/default.jpg', 'YjLMA5DoX24', 'YouTube', '1'),
(4, 'Video SBT', 'Video gravado em um restaurante local.', 'http://i1.ytimg.com/vi/N0Sdgi2Mxng/default.jpg', 'N0Sdgi2Mxng', 'YouTube', '1'),
(5, 'show de humor com mixirico', 'Um humorista cearense.', 'http://i1.ytimg.com/vi/kJrf2W3p7-M/default.jpg', 'kJrf2W3p7-M', 'YouTube', '1'),
(6, 'Programa Leruaite 22/10/2014 - Humorista Mixirico', 'Programa Leruaite 22/10/2014 - Humorista Mixirico', 'http://i1.ytimg.com/vi/tl95fmvREqk/default.jpg', 'tl95fmvREqk', 'YouTube', '1');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
