-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Tempo de geração: 30-Nov-2022 às 19:34
-- Versão do servidor: 5.7.23-23
-- versão do PHP: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `agen4830_taycoci`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `app_acessorio`
--

CREATE TABLE `app_acessorio` (
  `id` int(11) NOT NULL,
  `id_app_product` int(50) NOT NULL,
  `nome_acessorio` varchar(150) COLLATE utf8_bin DEFAULT NULL,
  `aplicacao` longtext COLLATE utf8_bin,
  `imagem` varchar(120) COLLATE utf8_bin DEFAULT NULL,
  `slug` varchar(120) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estrutura da tabela `app_banner`
--

CREATE TABLE `app_banner` (
  `id` int(11) NOT NULL,
  `titulo_banner` varchar(120) COLLATE utf8_bin DEFAULT NULL,
  `legenda_banner` varchar(120) COLLATE utf8_bin DEFAULT NULL,
  `texto_suporte` longtext COLLATE utf8_bin,
  `link_banner` varchar(120) COLLATE utf8_bin NOT NULL,
  `imagem` varchar(120) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `app_banner`
--

INSERT INTO `app_banner` (`id`, `titulo_banner`, `legenda_banner`, `texto_suporte`, `link_banner`, `imagem`) VALUES
(4, 'Respirador semifacial filtrante dobrável com válvula de exalação', 'Modelo T-651', 'Fabricado em 4 camadas possui formato anatômico adaptável aos diferentes tipos de face com excelente vedação.', 'https://google.com', '3000561cf609c6879ef864088a8af066.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `app_blog`
--

CREATE TABLE `app_blog` (
  `id` int(11) NOT NULL,
  `title` varchar(120) COLLATE utf8_bin DEFAULT NULL,
  `slug` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `category` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `imagem_destaque` varchar(120) COLLATE utf8_bin DEFAULT NULL,
  `content_post` longtext COLLATE utf8_bin,
  `createad_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `app_blog`
--

INSERT INTO `app_blog` (`id`, `title`, `slug`, `category`, `imagem_destaque`, `content_post`, `createad_at`) VALUES
(1, 'PFF2 ou N95?', 'pff2-ou-n95', 'ANVISA, EPI, N95, PFF2', 'e7f0a6e48f55e0cf91125adbf06126ab.jpg', '<p style=\"text-align:left\">Uma das grandes quest&otilde;es que se instaurou desde o in&iacute;cio da pandemia quando falamos de Equipamentos de Prote&ccedil;&atilde;o Respirat&oacute;ria do tipo Pe&ccedil;a Semifacial Filtrante recai sobre sua classifica&ccedil;&atilde;o. At&eacute; em 2020 s&oacute; ouv&iacute;amos os meios de comunica&ccedil;&atilde;o mencionarem como &ldquo;m&aacute;scaras N95&rdquo;. Contudo, no decorrer do tempo e com a indica&ccedil;&atilde;o de uso de respiradores cada vez mais presente, venho notando uma mudan&ccedil;a significativa e j&aacute; ou&ccedil;o muito mais rep&oacute;rteres e influenciadores digitais mencionarem corretamente como &ldquo;m&aacute;scaras PFF2&rdquo; ao inserir das &ldquo;N95&rdquo;.</p>\r\n\r\n<p style=\"text-align:left\">Creio que mudan&ccedil;as como essas ocorre gra&ccedil;as &agrave;s consultas direcionadas para grupos e pessoas especializadas em Prote&ccedil;&atilde;o Respirat&oacute;ria, como por exemplo, como consultas direcionadas &agrave; Comiss&atilde;o de Estudo de Equipamentos de Prote&ccedil;&atilde;o Respirat&oacute;ria</p>\r\n\r\n<p style=\"text-align:left\">Mas ainda resta a d&uacute;vida para muitas pessoas, qual a diferen&ccedil;a entre os respiradores PFF2 ou N95?&nbsp;<strong>Tecnicamente nenhuma!&nbsp;</strong>&nbsp;A n&atilde;o ser a origem da classifica&ccedil;&atilde;o: PFF2 &eacute; uma classifica&ccedil;&atilde;o definida por uma norma do Brasil (ABNT / NBR 13.698: 2011) e N95 &eacute; uma classifica&ccedil;&atilde;o definida por uma norma dos EUA (NIOSH 42 CFR Parte 84). Contudo, s&atilde;o tecnicamente bastante equivalentes. Como a aprova&ccedil;&atilde;o de EPI&rsquo;s no Brasil deve seguir, quando existam, as normas locais (e ela para respiradores como constam logo acima),&nbsp;&nbsp;<strong>n&atilde;o &eacute; poss&iacute;vel a emiss&atilde;o de Certificado de Aprova&ccedil;&atilde;o</strong>&nbsp;&nbsp;(CA) da Secretaria de Trabalho do Minist&eacute;rio da Economia para classifica&ccedil;&otilde;es que fujam de nossa norma, como por exemplo, N95. No Brasil s&oacute; existe aprova&ccedil;&atilde;o para as classifica&ccedil;&otilde;es PFF1, PFF2 ou PFF3.</p>\r\n\r\n<p style=\"text-align:left\">Vamos &agrave; origem da confus&atilde;o e depois uma breve explica&ccedil;&atilde;o da equival&ecirc;ncia entre ambas classifica&ccedil;&otilde;es. O CDC (Centro de Controle e Preven&ccedil;&atilde;o de Doen&ccedil;as ou, no idioma original,&nbsp;<em>Centers for Disease Control and Prevention</em>) famoso &oacute;rg&atilde;o p&uacute;blico dos EUA, recomenda, j&aacute; h&aacute; muitos anos, a utiliza&ccedil;&atilde;o de respiradores N95 como prote&ccedil;&atilde;o m&iacute;nima para os trabalhadores da &aacute;rea de sa&uacute;de em ambientes com doen&ccedil;as de transmiss&atilde;o por via respirat&oacute;ria pelos aeross&oacute;is contaminados com o pat&oacute;geno, como por exemplo, a tuberculose. No Brasil, os estudos mais robustos sobre a infec&ccedil;&atilde;o e a transmiss&atilde;o de doen&ccedil;as respirat&oacute;rias foram iniciados com base nos estudos norte americanos do CDC, e sem a preocupa&ccedil;&atilde;o de estabelecer a correla&ccedil;&atilde;o das diferentes classifica&ccedil;&otilde;es de respiradores existentes entre os dois pa&iacute;ses, ficou padronizado no meio m&eacute;dico hospitalar a nomenclatura N95 como prote&ccedil;&atilde;o m&iacute;nima para este tipo de atividade.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>\r\n\r\n<p>A ANVISA, publicou em 2009, a 1&ordf; Edi&ccedil;&atilde;o da &ldquo;Cartilha de Prote&ccedil;&atilde;o Respirat&oacute;ria contra Agentes Biol&oacute;gicos para Trabalhadores da Sa&uacute;de&rdquo;&nbsp;<strong>*</strong>, onde j&aacute; esclarece essa quest&atilde;o das classifica&ccedil;&otilde;es de respiradores no Item 18:</p>\r\n\r\n<blockquote>\r\n<p>&ldquo;18. Qual PFF &eacute; equivalente &agrave; N95?</p>\r\n</blockquote>\r\n\r\n<blockquote>\r\n<p>A m&aacute;scara conhecida como N95 refere-se a uma classifica&ccedil;&atilde;o de filtro para aeross&oacute;is adotada nos EUA e equivale, no Brasil, &agrave; PFF2 ou ao EPR do tipo pe&ccedil;a semifacial com filtro P2 (Figura 11), pois ambos apresentam o mesmo n&iacute;vel de prote&ccedil;&atilde;o. A PFF2 &eacute; usada tamb&eacute;m para prote&ccedil;&atilde;o contra outros materiais particulados, como poeiras, n&eacute;voas e fumos, encontrados nos ambientes de trabalho das &aacute;reas agr&iacute;cola e industrial.&rdquo;</p>\r\n</blockquote>\r\n', '2022-10-30 14:15:44');

-- --------------------------------------------------------

--
-- Estrutura da tabela `app_gallery`
--

CREATE TABLE `app_gallery` (
  `id` int(11) NOT NULL,
  `id_app_product` int(50) NOT NULL,
  `fotos` varchar(150) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `app_gallery`
--

INSERT INTO `app_gallery` (`id`, `id_app_product`, `fotos`) VALUES
(1, 1, '19da87959112dfc098dac8754a8dffa9.jpg'),
(2, 1, '85e5247b1065cf039eba45ed7e22a8f2.jpg'),
(3, 1, '088031b7fb7f75a48f852b2d170ee0ba.jpg'),
(4, 1, '639ec1fdfd7dcfcf61623914a2411e6b.jpg'),
(5, 1, '2fe9af3232a272c64eb6013b06f866e6.jpg'),
(6, 6, '26f29bbc8c5aff761732b38b335d038f.jpg'),
(7, 6, 'b77be9dd854e8d89867c3496459bf1a2.jpg'),
(8, 6, 'e35fbf9898e6aed26ab3adf93b1944b7.jpg'),
(9, 6, '9bfe7c8c375d17681c6242a660b596bf.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `app_linha`
--

CREATE TABLE `app_linha` (
  `id` int(11) NOT NULL,
  `nome_linha` varchar(120) COLLATE utf8_bin DEFAULT NULL,
  `slug` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estrutura da tabela `app_product`
--

CREATE TABLE `app_product` (
  `id` int(11) NOT NULL,
  `nome` varchar(150) COLLATE utf8_bin DEFAULT NULL,
  `descricao` varchar(5000) COLLATE utf8_bin DEFAULT NULL,
  `descricao_curta` varchar(300) COLLATE utf8_bin DEFAULT NULL,
  `ficha_tecnica` varchar(120) COLLATE utf8_bin DEFAULT NULL,
  `certificado_aprovacao` varchar(120) COLLATE utf8_bin DEFAULT NULL,
  `certificado_conformidade` varchar(120) COLLATE utf8_bin DEFAULT NULL,
  `imagem_destaque` varchar(120) COLLATE utf8_bin DEFAULT NULL,
  `cor` varchar(120) COLLATE utf8_bin DEFAULT NULL,
  `categoria` varchar(120) COLLATE utf8_bin DEFAULT NULL,
  `tamanho` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `classe` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `linha` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `slug` varchar(120) COLLATE utf8_bin DEFAULT NULL,
  `product_status` enum('1','0') COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `app_product`
--

INSERT INTO `app_product` (`id`, `nome`, `descricao`, `descricao_curta`, `ficha_tecnica`, `certificado_aprovacao`, `certificado_conformidade`, `imagem_destaque`, `cor`, `categoria`, `tamanho`, `classe`, `linha`, `slug`, `product_status`) VALUES
(1, 'Modelo T-650', '<p>A letra &ldquo;<strong>(S)</strong>&rdquo; ap&oacute;s a classe do filtro indica que o mesmo n&atilde;o foi testado para n&eacute;voas oleosas, portanto s&oacute; pode ser utilizado para n&eacute;voas &agrave; base de &aacute;gua.<br />\r\nO FPA (Fator de Prote&ccedil;&atilde;o Atribu&iacute;do) desta m&aacute;scara &eacute; 5, ou seja, pode ser utilizada em ambientes cujo contaminante n&atilde;o exceda 5 vezes o seu limite de exposi&ccedil;&atilde;o ocupacional.<br />\r\n<br />\r\n<strong>Observa&ccedil;&atilde;o:</strong><br />\r\nPara adequada utiliza&ccedil;&atilde;o do equipamento de prote&ccedil;&atilde;o respirat&oacute;ria, devem ser observadas as recomenda&ccedil;&otilde;es da Fundacentro contida na publica&ccedil;&atilde;o intitulada &ldquo;Programa de Prote&ccedil;&atilde;o Respirat&oacute;ria &ndash; Recomenda&ccedil;&otilde;es, sele&ccedil;&atilde;o e uso de respiradores&rdquo;, al&eacute;m do disposto nas Normas Regulamentadoras de Seguran&ccedil;a e Sa&uacute;de no Trabalho.<br />\r\n<br />\r\n<strong>Data de validade do produto:</strong><br />\r\nTr&ecirc;s anos ap&oacute;s a data de fabrica&ccedil;&atilde;o. A data de fabrica&ccedil;&atilde;o est&aacute; gravada no corpo do produto e na embalagem individual.<br />\r\n<br />\r\n<strong>Validade do CA (Certificado de Aprova&ccedil;&atilde;o) e Certificado de Conformidade do INMETRO:</strong><br />\r\nEquipamentos de prote&ccedil;&atilde;o respirat&oacute;ria do tipo Pe&ccedil;a Semifacial Filtrante para Part&iacute;culas s&atilde;o EPI&rsquo;s que possuem CERTIFICA&Ccedil;&Atilde;O COMPULS&Oacute;RIA pelo INMETRO e a validade do Certificado de aprova&ccedil;&atilde;o &eacute; condicionada &agrave; manuten&ccedil;&atilde;o do Certificado de Conformidade do Produto pelo INMETRO (clique aqui para baixar o CA atualizado e o Certificado de Conformidade).<br />\r\n<br />\r\n<strong>Norma t&eacute;cnica aplic&aacute;vel:</strong><br />\r\nABNT NBR 13698:2011<br />\r\n<strong>Organismo de Certifica&ccedil;&atilde;o de Produto:</strong><br />\r\nOCP 0003 &ndash; INSTITUTO FALC&Atilde;O BAUER DE QUALIDADE<br />\r\n<strong>Laborat&oacute;rio de Ensaio:</strong><br />\r\nL.A FALC&Atilde;O BAUER &ndash; CENTRO TECNOL&Oacute;GICO DE CONTROLE DA QUALIDADE LTDA</p>\r\n', 'Respiradores classe PFF1 são indicados para poeiras e névoas em geral até o volume máximo indicado. ', '35a839aab35ac799799cefeef3477bc4.pdf', '78910e5f7d6678a5c8eba2727ea98bf4.pdf', 'efd84bc85045e5e4cc7bee81ea5e139a.pdf', '72efc887186a55f9884fce69a3c32363.png', 'Azul', 'Sem válvula de exalação', 'Único', 'PPF1 (S)', 'Linha T', 'modelo-t650', '1'),
(2, 'Modelo T-651', '<p>A letra &ldquo;<strong>(S)</strong>&rdquo; ap&oacute;s a classe do filtro indica que o mesmo n&atilde;o foi testado para n&eacute;voas oleosas, portanto s&oacute; pode ser utilizado para n&eacute;voas &agrave; base de &aacute;gua.<br />\r\nO FPA (Fator de Prote&ccedil;&atilde;o Atribu&iacute;do) desta m&aacute;scara &eacute; 5, ou seja, pode ser utilizada em ambientes cujo contaminante n&atilde;o exceda 5 vezes o seu limite de exposi&ccedil;&atilde;o ocupacional.<br />\r\n<br />\r\n<strong>Observa&ccedil;&atilde;o:</strong><br />\r\nPara adequada utiliza&ccedil;&atilde;o do equipamento de prote&ccedil;&atilde;o respirat&oacute;ria, devem ser observadas as recomenda&ccedil;&otilde;es da Fundacentro contida na publica&ccedil;&atilde;o intitulada &ldquo;Programa de Prote&ccedil;&atilde;o Respirat&oacute;ria &ndash; Recomenda&ccedil;&otilde;es, sele&ccedil;&atilde;o e uso de respiradores&rdquo;, al&eacute;m do disposto nas Normas Regulamentadoras de Seguran&ccedil;a e Sa&uacute;de no Trabalho.<br />\r\n<br />\r\n<strong>Data de validade do produto:</strong><br />\r\nTr&ecirc;s anos ap&oacute;s a data de fabrica&ccedil;&atilde;o. A data de fabrica&ccedil;&atilde;o est&aacute; gravada no corpo do produto e na embalagem individual.<br />\r\n<br />\r\n<strong>Validade do CA (Certificado de Aprova&ccedil;&atilde;o) e Certificado de Conformidade do INMETRO:</strong><br />\r\nEquipamentos de prote&ccedil;&atilde;o respirat&oacute;ria do tipo Pe&ccedil;a Semifacial Filtrante para Part&iacute;culas s&atilde;o EPI&rsquo;s que possuem CERTIFICA&Ccedil;&Atilde;O COMPULS&Oacute;RIA pelo INMETRO e a validade do Certificado de aprova&ccedil;&atilde;o &eacute; condicionada &agrave; manuten&ccedil;&atilde;o do Certificado de Conformidade do Produto pelo INMETRO (clique aqui para baixar o CA atualizado e o Certificado de Conformidade).<br />\r\n<br />\r\n<strong>Norma t&eacute;cnica aplic&aacute;vel:</strong><br />\r\nABNT NBR 13698:2011<br />\r\n<strong>Organismo de Certifica&ccedil;&atilde;o de Produto:</strong><br />\r\nOCP 0003 &ndash; INSTITUTO FALC&Atilde;O BAUER DE QUALIDADE<br />\r\n<strong>Laborat&oacute;rio de Ensaio:</strong><br />\r\nL.A FALC&Atilde;O BAUER &ndash; CENTRO TECNOL&Oacute;GICO DE CONTROLE DA QUALIDADE LTDA</p>\r\n', 'Respiradores classe PFF1 são indicados para poeiras e névoas em geral até o volume máximo indicado. ', 'b26ba092ab3a29c8d8aad4b6a819573d.pdf', 'd4b76b862a9187a27b6cd2ada95b6dc9.pdf', '4ed2a1e93035e9bf1bd22c0beb75f769.pdf', '8e83aec92fc58bdb8a67daae626981f9.png', 'Azul', 'Com válvula de exalação', 'Único', 'PPF1 (S)', 'Linha T', 'modelo-t651', '1'),
(3, 'Modelo T-750 ', '<p>A letra &ldquo;<strong>(S)</strong>&rdquo; ap&oacute;s a classe do filtro indica que o mesmo n&atilde;o foi testado para n&eacute;voas oleosas, portanto, s&oacute; pode ser utilizado para n&eacute;voas &agrave; base de &aacute;gua.<br />\r\nO FPA (Fator de Prote&ccedil;&atilde;o Atribu&iacute;do) desta m&aacute;scara &eacute; 10, ou seja, pode ser utilizada em ambientes cujo contaminante n&atilde;o exceda 10 vezes o seu limite de exposi&ccedil;&atilde;o ocupacional.<br />\r\n<br />\r\n<strong>Observa&ccedil;&atilde;o:</strong><br />\r\nPara adequada utiliza&ccedil;&atilde;o do equipamento de prote&ccedil;&atilde;o respirat&oacute;ria, devem ser observadas as recomenda&ccedil;&otilde;es da Fundacentro contida na publica&ccedil;&atilde;o intitulada &ldquo;Programa de Prote&ccedil;&atilde;o Respirat&oacute;ria &ndash; Recomenda&ccedil;&otilde;es, sele&ccedil;&atilde;o e uso de respiradores&rdquo;, al&eacute;m do disposto nas Normas Regulamentadoras de Seguran&ccedil;a e Sa&uacute;de no Trabalho.<br />\r\n<br />\r\n<strong>Data de validade do produto:</strong><br />\r\nTr&ecirc;s anos ap&oacute;s a data de fabrica&ccedil;&atilde;o. A data de fabrica&ccedil;&atilde;o est&aacute; gravada no corpo do produto e na embalagem individual.<br />\r\n<br />\r\n<strong>Validade do CA (Certificado de Aprova&ccedil;&atilde;o) e Certificado de Conformidade do INMETRO:</strong><br />\r\nEquipamentos de prote&ccedil;&atilde;o respirat&oacute;ria do tipo Pe&ccedil;a Semifacial Filtrante para Part&iacute;culas s&atilde;o EPI&rsquo;s que possuem CERTIFICA&Ccedil;&Atilde;O COMPULS&Oacute;RIA pelo INMETRO e a validade do Certificado de Aprova&ccedil;&atilde;o &eacute; condicionada &agrave; manuten&ccedil;&atilde;o do Certificado de Conformidade do Produto pelo INMETRO (clique aqui para baixar o CA atualizado e o Certificado de Conformidade).<br />\r\n<br />\r\n<strong>Norma t&eacute;cnica aplic&aacute;vel:</strong><br />\r\nABNT NBR 13698:2011<br />\r\n<strong>Organismo de Certifica&ccedil;&atilde;o de Produto:</strong><br />\r\nOCP 0003 &ndash; INSTITUTO FALC&Atilde;O BAUER DE QUALIDADE<br />\r\n<strong>Laborat&oacute;rio de Ensaio:</strong><br />\r\nL.A FALC&Atilde;O BAUER &ndash; CENTRO TECNOL&Oacute;GICO DE CONTROLE DA QUALIDADE LTDA</p>\r\n', 'Respiradores classe PFF2 são indicados para: poeiras e névoas em geral e fumos metálicos até o volume máximo indicado. ', '26e97c8faf2c112afa3c1248ba092a90.pdf', 'd2b577a5d04d7aa3f8e1f84139b2c630.pdf', '39547a24b96c86644f0549d1e3b57e66.pdf', '7b5772e13dede3faa7abf4a2b8bb0a40.png', 'Azul', 'Sem válvula de exalação', 'Único', 'PPF2 (S)', 'Linha T', 'modelo-t750', '1'),
(4, 'Modelo T-751', '<p>A letra &ldquo;<strong>(S)</strong>&rdquo; ap&oacute;s a classe do filtro indica que o mesmo n&atilde;o foi testado para n&eacute;voas oleosas, portanto, s&oacute; pode ser utilizado para n&eacute;voas &agrave; base de &aacute;gua.<br />\r\nO FPA (Fator de Prote&ccedil;&atilde;o Atribu&iacute;do) desta m&aacute;scara &eacute; 10, ou seja, pode ser utilizada em ambientes cujo contaminante n&atilde;o exceda 10 vezes o seu limite de exposi&ccedil;&atilde;o ocupacional.<br />\r\n<br />\r\n<strong>Observa&ccedil;&atilde;o:</strong><br />\r\nPara adequada utiliza&ccedil;&atilde;o do equipamento de prote&ccedil;&atilde;o respirat&oacute;ria, devem ser observadas as recomenda&ccedil;&otilde;es da Fundacentro contida na publica&ccedil;&atilde;o intitulada &ldquo;Programa de Prote&ccedil;&atilde;o Respirat&oacute;ria &ndash; Recomenda&ccedil;&otilde;es, sele&ccedil;&atilde;o e uso de respiradores&rdquo;, al&eacute;m do disposto nas Normas Regulamentadoras de Seguran&ccedil;a e Sa&uacute;de no Trabalho.<br />\r\n<br />\r\n<strong>Data de validade do produto:</strong><br />\r\nTr&ecirc;s anos ap&oacute;s a data de fabrica&ccedil;&atilde;o. A data de fabrica&ccedil;&atilde;o est&aacute; gravada no corpo do produto e na embalagem individual.<br />\r\n<br />\r\n<strong>Validade do CA (Certificado de Aprova&ccedil;&atilde;o) e Certificado de Conformidade do INMETRO:</strong><br />\r\nEquipamentos de prote&ccedil;&atilde;o respirat&oacute;ria do tipo Pe&ccedil;a Semifacial Filtrante para Part&iacute;culas s&atilde;o EPI&rsquo;s que possuem CERTIFICA&Ccedil;&Atilde;O COMPULS&Oacute;RIA pelo INMETRO e a validade do Certificado de Aprova&ccedil;&atilde;o &eacute; condicionada &agrave; manuten&ccedil;&atilde;o do Certificado de Conformidade do Produto pelo INMETRO (clique aqui para baixar o CA atualizado e o Certificado de Conformidade).<br />\r\n<br />\r\n<strong>Norma t&eacute;cnica aplic&aacute;vel:</strong><br />\r\nABNT NBR 13698:2011<br />\r\n<strong>Organismo de Certifica&ccedil;&atilde;o de Produto:</strong><br />\r\nOCP 0003 &ndash; INSTITUTO FALC&Atilde;O BAUER DE QUALIDADE<br />\r\n<strong>Laborat&oacute;rio de Ensaio:</strong><br />\r\nL.A FALC&Atilde;O BAUER &ndash; CENTRO TECNOL&Oacute;GICO DE CONTROLE DA QUALIDADE LTDA</p>\r\n', 'Respiradores classe PFF2 são indicados para: poeiras e névoas em geral e fumos metálicos até o volume máximo indicado. ', '5eb30b9824320f597873161db0dd3bfa.pdf', '93634ec519c2bc5f8e54ce294c296ad5.pdf', '2020cbe8f1439e8a5db29f2521535389.pdf', 'e51694484261d416950776306a1aaa30.png', 'Azul', 'Com válvula de exalação', 'Único', 'PPF2 (S)', 'Linha T', 'modeo-t751', '1'),
(5, 'Modelo T-851 ', '<p>A letra &ldquo;<strong>(S)</strong>&rdquo; ap&oacute;s a classe do filtro indica que o mesmo n&atilde;o foi testado para n&eacute;voas oleosas, portanto, s&oacute; pode ser utilizado para n&eacute;voas &agrave; base de &aacute;gua.<br />\r\nO FPA (Fator de Prote&ccedil;&atilde;o Atribu&iacute;do) desta m&aacute;scara &eacute; 10, ou seja, pode ser utilizada em ambientes cujo contaminante n&atilde;o exceda 10 vezes o seu limite de exposi&ccedil;&atilde;o ocupacional.<br />\r\n<br />\r\n<strong>Observa&ccedil;&atilde;o:</strong><br />\r\nPara adequada utiliza&ccedil;&atilde;o do equipamento de prote&ccedil;&atilde;o respirat&oacute;ria, devem ser observadas as recomenda&ccedil;&otilde;es da Fundacentro contida na publica&ccedil;&atilde;o intitulada &ldquo;Programa de Prote&ccedil;&atilde;o Respirat&oacute;ria &ndash; Recomenda&ccedil;&otilde;es, sele&ccedil;&atilde;o e uso de respiradores&rdquo;, al&eacute;m do disposto nas Normas Regulamentadoras de Seguran&ccedil;a e Sa&uacute;de no Trabalho.<br />\r\n<br />\r\n<strong>Data de validade do produto:</strong><br />\r\nTr&ecirc;s anos ap&oacute;s a data de fabrica&ccedil;&atilde;o. A data de fabrica&ccedil;&atilde;o est&aacute; gravada no corpo do produto e na embalagem individual.<br />\r\n<br />\r\n<strong>Validade do CA (Certificado de Aprova&ccedil;&atilde;o) e Certificado de Conformidade do INMETRO:</strong><br />\r\nEquipamentos de prote&ccedil;&atilde;o respirat&oacute;ria do tipo Pe&ccedil;a Semifacial Filtrante para Part&iacute;culas s&atilde;o EPI&rsquo;s que possuem CERTIFICA&Ccedil;&Atilde;O COMPULS&Oacute;RIA pelo INMETRO e a validade do Certificado de Aprova&ccedil;&atilde;o &eacute; condicionada &agrave; manuten&ccedil;&atilde;o do Certificado de Conformidade do Produto pelo INMETRO (clique aqui para baixar o CA atualizado e o Certificado de Conformidade).<br />\r\n<br />\r\n<strong>Norma t&eacute;cnica aplic&aacute;vel:</strong><br />\r\nABNT NBR 13698:2011<br />\r\n<strong>Organismo de Certifica&ccedil;&atilde;o de Produto:</strong><br />\r\nOCP 0003 &ndash; INSTITUTO FALC&Atilde;O BAUER DE QUALIDADE<br />\r\n<strong>Laborat&oacute;rio de Ensaio:</strong><br />\r\nL.A FALC&Atilde;O BAUER &ndash; CENTRO TECNOL&Oacute;GICO DE CONTROLE DA QUALIDADE LTDA</p>\r\n', 'Respiradores classe PFF3 são indicados para: poeiras e névoas em geral, fumos metálicos, radionuclídeos e contaminantes altamente tóxicos até o volume máximo indicado. ', '52ece9802e060c5eae342b1114655d01.pdf', 'aa8ab2c1dd299c4ed3568ae87d900c36.pdf', 'f04f7db9f34de729e3a931dbaf2eb2c6.pdf', 'bdec564eb64a3e6ab4b3d4bef0d3089e.png', 'Azul', 'Com válvula de exalação', 'Único', 'PFF3 (S)', 'Linha T', 'modelo-t851', '1'),
(6, 'Modelo T-950 ', '<p>Os modelos com carv&atilde;o ativado possuem uma das mantas de n&atilde;o tecido impregnadas com min&uacute;sculos gr&atilde;os de carv&atilde;o ativado que podem ser utilizados para eliminar odores e inc&ocirc;modos provenientes de certos vapores org&acirc;nicos at&eacute; o n&iacute;vel de a&ccedil;&atilde;o (N&iacute;vel de A&ccedil;&atilde;o &eacute; metade do limite de exposi&ccedil;&atilde;o ocupacional do agente qu&iacute;mico segundo item 9.6.1 item b da NR-09 com reda&ccedil;&atilde;o dada pela Portaria SEPRT n.&ordm; 6.735, de 10 de mar&ccedil;o de 2020). A letra &ldquo;<strong>(S)</strong>&rdquo; ap&oacute;s a classe do filtro indica que o mesmo n&atilde;o foi testado para n&eacute;voas oleosas, portanto, s&oacute; pode ser utilizado para n&eacute;voas &agrave; base de &aacute;gua.<br />\r\nO FPA (Fator de Prote&ccedil;&atilde;o Atribu&iacute;do) desta m&aacute;scara &eacute; 10, ou seja, pode ser utilizada em ambientes cujo contaminante n&atilde;o exceda 10 vezes o seu limite de toler&acirc;ncia.<br />\r\n<br />\r\n<strong>Observa&ccedil;&atilde;o:</strong><br />\r\nPara adequada utiliza&ccedil;&atilde;o do equipamento de prote&ccedil;&atilde;o respirat&oacute;ria, devem ser observadas as recomenda&ccedil;&otilde;es da Fundacentro contida na publica&ccedil;&atilde;o intitulada &ldquo;Programa de Prote&ccedil;&atilde;o Respirat&oacute;ria &ndash; Recomenda&ccedil;&otilde;es, sele&ccedil;&atilde;o e uso de respiradores&rdquo;, al&eacute;m do disposto nas Normas Regulamentadoras de Seguran&ccedil;a e Sa&uacute;de no Trabalho.<br />\r\n<br />\r\n<strong>Data de validade do produto:</strong><br />\r\nTr&ecirc;s anos ap&oacute;s a data de fabrica&ccedil;&atilde;o. A data de fabrica&ccedil;&atilde;o est&aacute; gravada no corpo do produto e na embalagem individual.<br />\r\n<br />\r\n<strong>Validade do CA (Certificado de Aprova&ccedil;&atilde;o) e Certificado de Conformidade do INMETRO:</strong><br />\r\nEquipamentos de prote&ccedil;&atilde;o respirat&oacute;ria do tipo Pe&ccedil;a Semifacial Filtrante para Part&iacute;culas s&atilde;o EPI&rsquo;s que possuem CERTIFICA&Ccedil;&Atilde;O COMPULS&Oacute;RIA pelo INMETRO e a validade do Certificado de Aprova&ccedil;&atilde;o &eacute; condicionada &agrave; manuten&ccedil;&atilde;o do Certificado de Conformidade do Produto pelo INMETRO (clique aqui para baixar o CA atualizado e o Certificado de Conformidade).<br />\r\n<br />\r\n<strong>Norma t&eacute;cnica aplic&aacute;vel:</strong><br />\r\nABNT NBR 13698:2011<br />\r\n<strong>Organismo de Certifica&ccedil;&atilde;o de Produto:</strong><br />\r\nOCP 0003 &ndash; INSTITUTO FALC&Atilde;O BAUER DE QUALIDADE<br />\r\n<strong>Laborat&oacute;rio de Ensaio:</strong><br />\r\nL.A FALC&Atilde;O BAUER &ndash; CENTRO TECNOL&Oacute;GICO DE CONTROLE DA QUALIDADE LTDA</p>\r\n', 'Respiradores classe PFF2 são indicados para: poeiras e névoas em geral e fumos metálicos até o volume máximo indicado. ', 'd8c98aed3b7048bab7b1cb853e1e9a33.pdf', 'b19eb3fb3e9292dbd9506240972accc8.pdf', 'a7c2eda82021a247f3269ebd5f5b5093.pdf', '26afc41c8214980ae2d709624fddc4e7.png', 'Preto', 'Sem válvula de exalação', 'Único', 'PFF2 (S) com Carvão Ativado', 'Linha T', 'modelo-t950', '1'),
(7, 'Modelo T-951', '<p>Os modelos com carv&atilde;o ativado possuem uma das mantas de n&atilde;o tecido impregnadas com min&uacute;sculos gr&atilde;os de carv&atilde;o ativado que podem ser utilizados para eliminar odores e inc&ocirc;modos provenientes de certos vapores org&acirc;nicos at&eacute; o n&iacute;vel de a&ccedil;&atilde;o (N&iacute;vel de A&ccedil;&atilde;o &eacute; metade do limite de exposi&ccedil;&atilde;o ocupacional do agente qu&iacute;mico segundo item 9.6.1 item b da NR-09 com reda&ccedil;&atilde;o dada pela Portaria SEPRT n.&ordm; 6.735, de 10 de mar&ccedil;o de 2020). A letra &ldquo;<strong>(S)</strong>&rdquo; ap&oacute;s a classe do filtro indica que o mesmo n&atilde;o foi testado para n&eacute;voas oleosas, portanto, s&oacute; pode ser utilizado para n&eacute;voas &agrave; base de &aacute;gua.<br />\r\nO FPA (Fator de Prote&ccedil;&atilde;o Atribu&iacute;do) desta m&aacute;scara &eacute; 10, ou seja, pode ser utilizada em ambientes cujo contaminante n&atilde;o exceda 10 vezes o seu limite de toler&acirc;ncia.<br />\r\n<br />\r\n<strong>Observa&ccedil;&atilde;o:</strong><br />\r\nPara adequada utiliza&ccedil;&atilde;o do equipamento de prote&ccedil;&atilde;o respirat&oacute;ria, devem ser observadas as recomenda&ccedil;&otilde;es da Fundacentro contida na publica&ccedil;&atilde;o intitulada &ldquo;Programa de Prote&ccedil;&atilde;o Respirat&oacute;ria &ndash; Recomenda&ccedil;&otilde;es, sele&ccedil;&atilde;o e uso de respiradores&rdquo;, al&eacute;m do disposto nas Normas Regulamentadoras de Seguran&ccedil;a e Sa&uacute;de no Trabalho.<br />\r\n<br />\r\n<strong>Data de validade do produto:</strong><br />\r\nTr&ecirc;s anos ap&oacute;s a data de fabrica&ccedil;&atilde;o. A data de fabrica&ccedil;&atilde;o est&aacute; gravada no corpo do produto e na embalagem individual.<br />\r\n<br />\r\n<strong>Validade do CA (Certificado de Aprova&ccedil;&atilde;o) e Certificado de Conformidade do INMETRO:</strong><br />\r\nEquipamentos de prote&ccedil;&atilde;o respirat&oacute;ria do tipo Pe&ccedil;a Semifacial Filtrante para Part&iacute;culas s&atilde;o EPI&rsquo;s que possuem CERTIFICA&Ccedil;&Atilde;O COMPULS&Oacute;RIA pelo INMETRO e a validade do Certificado de Aprova&ccedil;&atilde;o &eacute; condicionada &agrave; manuten&ccedil;&atilde;o do Certificado de Conformidade do Produto pelo INMETRO (clique aqui para baixar o CA atualizado e o Certificado de Conformidade).<br />\r\n<br />\r\n<strong>Norma t&eacute;cnica aplic&aacute;vel:</strong><br />\r\nABNT NBR 13698:2011<br />\r\n<strong>Organismo de Certifica&ccedil;&atilde;o de Produto:</strong><br />\r\nOCP 0003 &ndash; INSTITUTO FALC&Atilde;O BAUER DE QUALIDADE<br />\r\n<strong>Laborat&oacute;rio de Ensaio:</strong><br />\r\nL.A FALC&Atilde;O BAUER &ndash; CENTRO TECNOL&Oacute;GICO DE CONTROLE DA QUALIDADE LTDA</p>\r\n', 'Respiradores classe PFF2 são indicados para: poeiras e névoas em geral e fumos metálicos até o volume máximo indicado.', '41e0f66049de1d80c3f7c34036134f45.pdf', '7053e45e78cb83715e060939a0a77dc6.pdf', '4060c01e000a3fcf4c8ef4e249ef1b8b.pdf', '7159d962e055a4eeb18e28613d40e879.png', 'Preto', 'Com válvula de exalação', 'Único', 'PFF2 (S) com Carvão Ativado', 'Linha T', 'modelo-t951', '1'),
(8, 'Modelo 2750', '<p>A letra &ldquo;<strong>(SL)</strong>&rdquo; ap&oacute;s a classe do filtro indica que o mesmo<strong>&nbsp;foi testado para aeross&oacute;is l&iacute;quidos oleosos, portanto, podendo ser utilizado para os dois tipos de n&eacute;voa (oleosas e &agrave; base de &aacute;gua).</strong><br />\r\nO FPA (Fator de Prote&ccedil;&atilde;o Atribu&iacute;do) dessa m&aacute;scara &eacute; 10, ou seja, pode ser utilizada em ambientes cujo contaminante n&atilde;o exceda 10 vezes o seu limite de exposi&ccedil;&atilde;o ocupacional.<br />\r\n<br />\r\n<strong>Observa&ccedil;&atilde;o:</strong><br />\r\nPara adequada utiliza&ccedil;&atilde;o do equipamento de prote&ccedil;&atilde;o respirat&oacute;ria, devem ser observadas as recomenda&ccedil;&otilde;es da Fundacentro contida na publica&ccedil;&atilde;o intitulada &ldquo;Programa de Prote&ccedil;&atilde;o Respirat&oacute;ria &ndash; Recomenda&ccedil;&otilde;es, sele&ccedil;&atilde;o e uso de respiradores&rdquo;, al&eacute;m do disposto nas Normas Regulamentadoras de Seguran&ccedil;a e Sa&uacute;de no Trabalho.<br />\r\n<br />\r\n<strong>Data de validade do produto:</strong><br />\r\nTr&ecirc;s anos ap&oacute;s a data de fabrica&ccedil;&atilde;o. A data de fabrica&ccedil;&atilde;o est&aacute; gravada no corpo do produto e na embalagem individual.<br />\r\n<br />\r\n<strong>Validade do CA (Certificado de Aprova&ccedil;&atilde;o) e Certificado de Conformidade do INMETRO:</strong><br />\r\nEquipamentos de prote&ccedil;&atilde;o respirat&oacute;ria do tipo Pe&ccedil;a Semifacial Filtrante para Part&iacute;culas s&atilde;o EPI&rsquo;s que possuem CERTIFICA&Ccedil;&Atilde;O COMPULS&Oacute;RIA pelo INMETRO e a validade do Certificado de Aprova&ccedil;&atilde;o &eacute; condicionada &agrave; manuten&ccedil;&atilde;o do Certificado de Conformidade do Produto pelo INMETRO (clique aqui para baixar o CA atualizado e o Certificado de Conformidade).<br />\r\n<br />\r\n<strong>Norma t&eacute;cnica aplic&aacute;vel:</strong><br />\r\nABNT NBR 13698:2011<br />\r\n<strong>Organismo de Certifica&ccedil;&atilde;o de Produto:</strong><br />\r\nOCP 0003 &ndash; INSTITUTO FALC&Atilde;O BAUER DE QUALIDADE<br />\r\n<strong>Laborat&oacute;rio de Ensaio:</strong><br />\r\nL.A FALC&Atilde;O BAUER &ndash; CENTRO TECNOL&Oacute;GICO DE CONTROLE DA QUALIDADE LTDA</p>\r\n', 'Respiradores classe PFF2 são indicados para: poeiras e névoas em geral e fumos metálicos até o volume máximo indicado.', '49d57843b2c0399e90e44f15fc6c0047.pdf', '2fd0aabfb0d48f0bd9faa4bd96402d92.pdf', '7683acf00910673b2c883cb3314fe0ae.pdf', 'ee28abc5eee265d30671d6890c31913e.png', 'Azul', 'Sem válvula de exalação', 'Único', 'PPF2 (SL)', 'Linha ST', 'modelo-2750', '1'),
(9, 'Modelo 2751', '<p>A letra &ldquo;<strong>(SL)</strong>&rdquo; ap&oacute;s a classe do filtro indica que o mesmo<strong>&nbsp;foi testado para aeross&oacute;is l&iacute;quidos oleosos, portanto, podendo ser utilizado para os dois tipos de n&eacute;voa (oleosas e &agrave; base de &aacute;gua).</strong><br />\r\nO FPA (Fator de Prote&ccedil;&atilde;o Atribu&iacute;do) dessa m&aacute;scara &eacute; 10, ou seja, pode ser utilizada em ambientes cujo contaminante n&atilde;o exceda 10 vezes o seu limite de exposi&ccedil;&atilde;o ocupacional.<br />\r\n<br />\r\n<strong>Observa&ccedil;&atilde;o:</strong><br />\r\nPara adequada utiliza&ccedil;&atilde;o do equipamento de prote&ccedil;&atilde;o respirat&oacute;ria, devem ser observadas as recomenda&ccedil;&otilde;es da Fundacentro contida na publica&ccedil;&atilde;o intitulada &ldquo;Programa de Prote&ccedil;&atilde;o Respirat&oacute;ria &ndash; Recomenda&ccedil;&otilde;es, sele&ccedil;&atilde;o e uso de respiradores&rdquo;, al&eacute;m do disposto nas Normas Regulamentadoras de Seguran&ccedil;a e Sa&uacute;de no Trabalho.<br />\r\n<br />\r\n<strong>Data de validade do produto:</strong><br />\r\nTr&ecirc;s anos ap&oacute;s a data de fabrica&ccedil;&atilde;o. A data de fabrica&ccedil;&atilde;o est&aacute; gravada no corpo do produto e na embalagem individual.<br />\r\n<br />\r\n<strong>Validade do CA (Certificado de Aprova&ccedil;&atilde;o) e Certificado de Conformidade do INMETRO:</strong><br />\r\nEquipamentos de prote&ccedil;&atilde;o respirat&oacute;ria do tipo Pe&ccedil;a Semifacial Filtrante para Part&iacute;culas s&atilde;o EPI&rsquo;s que possuem CERTIFICA&Ccedil;&Atilde;O COMPULS&Oacute;RIA pelo INMETRO e a validade do Certificado de Aprova&ccedil;&atilde;o &eacute; condicionada &agrave; manuten&ccedil;&atilde;o do Certificado de Conformidade do Produto pelo INMETRO (clique aqui para baixar o CA atualizado e o Certificado de Conformidade).<br />\r\n<br />\r\n<strong>Norma t&eacute;cnica aplic&aacute;vel:</strong><br />\r\nABNT NBR 13698:2011<br />\r\n<strong>Organismo de Certifica&ccedil;&atilde;o de Produto:</strong><br />\r\nOCP 0003 &ndash; INSTITUTO FALC&Atilde;O BAUER DE QUALIDADE<br />\r\n<strong>Laborat&oacute;rio de Ensaio:</strong><br />\r\nL.A FALC&Atilde;O BAUER &ndash; CENTRO TECNOL&Oacute;GICO DE CONTROLE DA QUALIDADE LTDA</p>\r\n', 'Respiradores classe PFF2 são indicados para: poeiras e névoas em geral e fumos metálicos até o volume máximo indicado. ', 'a1fabd2d9e38ee4af13dcf281d52d1c0.pdf', '879b6095ba2fd23b17734c59895c85f2.pdf', 'efa076d7cd1f7743defd8cdaa34c70cf.pdf', 'ddc754f42f6d761817b3b97784c3d55d.png', 'Azul', 'Com válvula de exalação', 'Único', 'PPF2 (SL)', 'Linha ST', 'modelo-2751', '1'),
(10, 'Modelo H-2750', '<p>Tamb&eacute;m, indicado como n&iacute;vel m&iacute;nimo de prote&ccedil;&atilde;o respirat&oacute;ria contra a exposi&ccedil;&atilde;o ocupacional a aeross&oacute;is contendo agentes biol&oacute;gicos potencialmente patog&ecirc;nicos e/ou infecciosos, tais como:&nbsp;<em>M.tuberculosis</em>, agentes da S&iacute;ndrome Respirat&oacute;ria Aguda Grave (SRAG), Influenza Avi&aacute;ria (Influenza A/H5N1), Influenza A/H1N1, varicela, sarampo, COVID-19 (Sars-Cov-2), entre outros microrganismos cuja via de transmiss&atilde;o seja predominantemente a&eacute;rea conforme indicado no documento &ldquo;Cartilha de Prote&ccedil;&atilde;o Respirat&oacute;ria contra Agentes Biol&oacute;gicos para Trabalhadores de Sa&uacute;de&rdquo; da ANVISA.&nbsp;<br />\r\n<strong>A letra &ldquo;(S)&rdquo; ap&oacute;s a classe do filtro do modelo T-750H indica que o mesmo n&atilde;o foi testado para n&eacute;voas oleosas, portanto, s&oacute; pode ser utilizado para n&eacute;voas &agrave; base de &aacute;gua &ndash; equivalente &agrave; classifica&ccedil;&atilde;o norte americana N95.</strong><br />\r\n<strong>A letra &ldquo;(SL)&rdquo; ap&oacute;s a classe do filtro do modelo H-2750 indica que o mesmo foi testado para aeross&oacute;is l&iacute;quidos oleosos, portanto, pode ser utilizado para os dois tipos de n&eacute;voa (oleosas e &agrave; base de &aacute;gua) &ndash; equivalente &agrave; classifica&ccedil;&atilde;o norte americana P95.</strong><br />\r\nO FPA (Fator de Prote&ccedil;&atilde;o Atribu&iacute;do) desta m&aacute;scara &eacute; 10, ou seja, pode ser utilizada em ambientes cujo contaminante n&atilde;o exceda 10 vezes o seu limite de exposi&ccedil;&atilde;o ocupacional.<br />\r\n<br />\r\n<strong>Observa&ccedil;&atilde;o:</strong><br />\r\nPara adequada utiliza&ccedil;&atilde;o do equipamento de prote&ccedil;&atilde;o respirat&oacute;ria, devem ser observadas as recomenda&ccedil;&otilde;es da Fundacentro contida na publica&ccedil;&atilde;o intitulada &ldquo;Programa de Prote&ccedil;&atilde;o Respirat&oacute;ria &ndash; Recomenda&ccedil;&otilde;es, sele&ccedil;&atilde;o e uso de respiradores&rdquo;, na &ldquo;Cartilha de Prote&ccedil;&atilde;o Respirat&oacute;ria contra Agentes Biol&oacute;gicos para Trabalhadores de Sa&uacute;de&rdquo; da ANVISA, al&eacute;m do disposto nas Normas Regulamentadoras de Seguran&ccedil;a e Sa&uacute;de no Trabalho.<br />\r\n<br />\r\n<strong>Data de validade do produto:</strong><br />\r\nTr&ecirc;s anos ap&oacute;s a data de fabrica&ccedil;&atilde;o. A data de fabrica&ccedil;&atilde;o est&aacute; gravada no corpo do produto e na embalagem individual.<br />\r\n<br />\r\n<strong>Validade do CA (Certificado de Aprova&ccedil;&atilde;o) e Certificado de Conformidade do INMETRO:</strong><br />\r\nEquipamentos de prote&ccedil;&atilde;o respirat&oacute;ria do tipo Pe&ccedil;a Semifacial Filtrante para Part&iacute;culas s&atilde;o EPI&rsquo;s que possuem CERTIFICA&Ccedil;&Atilde;O COMPULS&Oacute;RIA pelo INMETRO e a validade do Certificado de Aprova&ccedil;&atilde;o &eacute; condicionada &agrave; manuten&ccedil;&atilde;o do Certificado de Conformidade do Produto pelo INMETRO (clique aqui para baixar o CA atualizado e o Certificado de Conformidade).<br />\r\n<br />\r\n<strong>Registro do Produto na ANVISA n&ordm; 82239620001&nbsp;</strong><br />\r\nO n&uacute;mero do registro do produto na ANVISA est&aacute; gravado na embalagem individual pr&oacute;ximo ao n&uacute;mero do CA &ndash; Certificado de Aprova&ccedil;&atilde;o.<br />\r\n<br />\r\n<strong>Norma t&eacute;cnica aplic&aacute;vel:</strong><br />\r\nABNT NBR 13698:2011<br />\r\n<strong>Organismo de Certifica&ccedil;&atilde;o de Produto:&nbsp;</strong><br />\r\nOCP 0003 &ndash; INSTITUTO FALC&Atilde;O BAUER DE QUALIDADE<br />\r\n<strong>Laborat&oacute;rio de Ensaio:</strong><br />\r\nL.A FALC&Atilde;O BAUER &ndash; CENTRO TECNOL&Oacute;GICO DE CONTROLE DA QUALIDADE LTDA</p>\r\n', 'Respiradores classe PFF2 são indicados para: poeiras e névoas em geral, fumos metálicos até o volume máximo indicado. ', 'a4af1c419a42d99190819c925ab7a97d.pdf', '20820559f2c3b6c8ee3f700a2c454e40.pdf', '61530fa9aab3152601facf29d18cb114.pdf', '419688e98809ee8728374781394fff33.png', 'Branco', 'Sem válvula de exalação', 'Único', 'PPF2 (S)', 'Linha Hospitalar', 'modelo-h2750', '1'),
(11, 'Respirador T-9500', '<p>O Respirador T-9500 &eacute; fabricado em ABS e silicone, tirantes refor&ccedil;ados com ajuste deslizantes.<br />\r\n&ndash; Possui de 4 pontos de ajustes, que garante excelente veda&ccedil;&atilde;o.<br />\r\n&ndash; Conex&atilde;o dos cartuchos e filtros via baioneta.<br />\r\n&ndash; F&aacute;cil desmontagem para higieniza&ccedil;&atilde;o e manuten&ccedil;&atilde;o da pe&ccedil;a semifacial.<br />\r\n&ndash; Al&eacute;m disso, o jogo de carneira e v&aacute;lvulas de inala&ccedil;&atilde;o e exala&ccedil;&atilde;o podem ser facilmente substitu&iacute;dos facilitando a manuten&ccedil;&atilde;o e vida &uacute;til do respirador.<br />\r\n<br />\r\n<strong>Aplica&ccedil;&atilde;o:</strong><br />\r\nOs Respiradores tipo Pe&ccedil;a Semifacial da Tayco modelo T-9500 s&atilde;o projetados para ajudar a fornecer prote&ccedil;&atilde;o respirat&oacute;ria contra certos contaminantes do ar como part&iacute;culas (aerodispers&oacute;ides), gases e vapores, desde que observadas todas as instru&ccedil;&otilde;es, limita&ccedil;&otilde;es de uso e normas de sa&uacute;de e seguran&ccedil;a aplic&aacute;veis, especialmente as recomenda&ccedil;&otilde;es da FUNDACENTRO na publica&ccedil;&atilde;o intitulada &ldquo;Programa de Prote&ccedil;&atilde;o Respirat&oacute;ria: recomenda&ccedil;&otilde;es, sele&ccedil;&atilde;o e uso de respiradores&rdquo; &ndash; 4&ordf; Ed. 2016, institu&iacute;da pela Instru&ccedil;&atilde;o Normativa n&ordm; 1 de 11 de abril de 1994. Somente poder&aacute; ser considerado um Equipamento de Prote&ccedil;&atilde;o Respirat&oacute;ria com o sistema completo, ou seja, quando corretamente montado com um conjunto de filtros (que podem ser para part&iacute;culas, qu&iacute;micos ou combinados) autorizados no Certificado de Aprova&ccedil;&atilde;o (CA) emitido pelo Minist&eacute;rio do Trabalho para uso em conjunto com esta pe&ccedil;a semifacial.<br />\r\n<br />\r\n<strong>Use para:</strong><br />\r\nProte&ccedil;&atilde;o respirat&oacute;ria de certos contaminantes do ar como part&iacute;culas (aerodispers&oacute;ides), gases e vapores. Para sua adequada utiliza&ccedil;&atilde;o, devem ser observadas as recomenda&ccedil;&otilde;es da FUNDACENTRO contidas na publica&ccedil;&atilde;o intitulada &ldquo;Programa de Prote&ccedil;&atilde;o Respirat&oacute;ria &ndash; recomenda&ccedil;&otilde;es, sele&ccedil;&atilde;o e uso de respiradores&rdquo; &ndash; 4&ordf; Ed. 2016, al&eacute;m do disposto nas Normas Regulamentadoras de Seguran&ccedil;a e Sa&uacute;de no Trabalho e nas Instru&ccedil;&otilde;es de Uso deste produto. Os filtros para part&iacute;culas, qu&iacute;micos ou combinados que comp&otilde;em o sistema completo do Equipamento de Prote&ccedil;&atilde;o Respirat&oacute;ria s&atilde;o aqueles indicados neste documento e autorizados no Certificado de Aprova&ccedil;&atilde;o emitido pelo Minist&eacute;rio do Trabalho deste produto e devem ser adequadamente selecionados de acordo com o contaminante ao qual o usu&aacute;rio estar&aacute; exposto para que o sistema ofere&ccedil;a a prote&ccedil;&atilde;o pretendida.</p>\r\n', 'O Respirador T-9500 é fabricado em ABS e silicone, tirantes reforçados com ajuste deslizantes.', NULL, '23debb1ab960f46332b6155029b26e2c.pdf', 'e7eabbfd9b9a9748edfe1eb719e0dd3b.pdf', 'f11f7b70ff5fccbe8eda7e5d90620f57.png', 'Azul e Cinza', 'Respirador Semifacial', 'P, M e G', 'Semifacial', 'Linha T-9500', 'respirador-t9500', '1');

-- --------------------------------------------------------

--
-- Estrutura da tabela `app_social`
--

CREATE TABLE `app_social` (
  `id` int(11) NOT NULL,
  `rede_social` varchar(70) COLLATE utf8_bin DEFAULT NULL,
  `link_social` varchar(120) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estrutura da tabela `app_user`
--

CREATE TABLE `app_user` (
  `id` int(11) NOT NULL,
  `nome` varchar(150) COLLATE utf8_bin DEFAULT NULL,
  `email` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `senha` varchar(150) COLLATE utf8_bin DEFAULT NULL,
  `ativo` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `app_user`
--

INSERT INTO `app_user` (`id`, `nome`, `email`, `senha`, `ativo`) VALUES
(1, 'Igor Henrique', 'igor@agenciaduetto.com.br', 'ad108b78d9733dbdf783007c88a08282c9bca427', 1),
(2, 'Backup User', 'backup@agenciaduetto.com.br', 'e42c3f0c260dfc1c12b21734d1749c191d9ca573', 1);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `app_acessorio`
--
ALTER TABLE `app_acessorio`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `app_banner`
--
ALTER TABLE `app_banner`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `app_blog`
--
ALTER TABLE `app_blog`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `app_gallery`
--
ALTER TABLE `app_gallery`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `app_linha`
--
ALTER TABLE `app_linha`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `app_product`
--
ALTER TABLE `app_product`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `app_social`
--
ALTER TABLE `app_social`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `app_user`
--
ALTER TABLE `app_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `app_acessorio`
--
ALTER TABLE `app_acessorio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `app_banner`
--
ALTER TABLE `app_banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `app_blog`
--
ALTER TABLE `app_blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `app_gallery`
--
ALTER TABLE `app_gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de tabela `app_linha`
--
ALTER TABLE `app_linha`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `app_product`
--
ALTER TABLE `app_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de tabela `app_social`
--
ALTER TABLE `app_social`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `app_user`
--
ALTER TABLE `app_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
