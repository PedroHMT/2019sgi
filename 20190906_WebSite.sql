-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           10.1.33-MariaDB - mariadb.org binary distribution
-- OS do Servidor:               Win32
-- HeidiSQL Versão:              9.5.0.5196
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Copiando estrutura do banco de dados para website
DROP DATABASE IF EXISTS `website`;
CREATE DATABASE IF NOT EXISTS `website` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `website`;

-- Copiando estrutura para tabela website.blog
CREATE TABLE IF NOT EXISTS `blog` (
  `Blog_Codigo` int(11) NOT NULL AUTO_INCREMENT,
  `Blog_Titulo` varchar(150) DEFAULT NULL,
  `Blog_Corpo` longtext,
  `Blog_Data` timestamp NULL DEFAULT NULL,
  `Blog_Usuarios_Codigo` int(11) DEFAULT NULL,
  PRIMARY KEY (`Blog_Codigo`),
  KEY `FK_blog_usuarios` (`Blog_Usuarios_Codigo`),
  CONSTRAINT `FK_blog_usuarios` FOREIGN KEY (`Blog_Usuarios_Codigo`) REFERENCES `usuarios` (`Usuarios_Codigo`) ON DELETE SET NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela website.blog: ~2 rows (aproximadamente)
DELETE FROM `blog`;
/*!40000 ALTER TABLE `blog` DISABLE KEYS */;
INSERT INTO `blog` (`Blog_Codigo`, `Blog_Titulo`, `Blog_Corpo`, `Blog_Data`, `Blog_Usuarios_Codigo`) VALUES
	(3, 'Sobre o Curso', '<p class="paragrafo_estilizado">Resumidamente, a Segurança da Informação é uma área da Tecnologia da Informação que tem como objetivo formar profissionais que construam a "defesa" de um sistema, sendo geralmente de uma empresa.</p>\r\n<p class="paragrafo_estilizado">Os profissionais aprendem conceitos na teoria e na prática, e testam o sistema para checar se ele é ou não vulnerável. Sem ter uma análise de um profissional, seu sistema pode ser invadido por hackers facilmente.</p>\r\n<p class="paragrafo_estilizado">A segurança da informação (SI) está diretamente relacionada com proteção de um conjunto de informações , no sentido de preservar o valor que possuem para um indivíduo ou uma organização. São propriedades básicas da segurança da informação: confidencialidade, integridade, disponibilidade e autenticidade.</p>\r\n<p class="paragrafo_estilizado">A SI não está restrita somente a sistemas computacionais, informações eletrônicas ou sistemas de armazenamento. O conceito aplica-se a todos os aspectos de proteção de informações e dados. O conceito de Segurança Informática ou Segurança de Computadores está intimamente relacionado com o de Segurança da Informação, incluindo não apenas a segurança dos dados/informação, mas em si o sistema.</p>\r\n<p class="paragrafo_estilizado">Atualmente o conceito de Segurança da Informação está padronizado pela norma ISO/IEC 17799:2005, influenciada pelo padrão inglês BS 7799.</p>', '2019-04-17 17:44:27', 3),
	(4, 'Facebook descobre falha de segurança que afeta 50 milhões de contas', '<p>O <a href="https://www.facebook.com">Facebook</a> acaba de anunciar que hackers aproveitaram uma brecha de segurança da rede social para ter acesso a quase 50 milhões de contas.</p>\r\n<p>\r\nA falha foi descoberta no dia 25 de setembro pelo time de engenheiros, afirmou a companhia. A investigação ainda está no início.\r\n</p><p>\r\nDiversos usuários brasileiros reportam que foram deslogados de suas contas em diferentes dispositivos na manhã de hoje.\r\n</p><p>\r\nA brecha de segurança está em um recurso que permite que um usuário veja o próprio perfil como se fosse outra pessoa. Isso permitiu que os hackers tivessem acesso aos tokens de segurança e às contas desses usuários. Por ora, o recurso “Ver como” está desativado para investigação.\r\n</p><p>\r\nOs tokens são dispositivos que mantêm as pessoas logadas na rede social sem a necessidade de inserir a senha a cada vez que abrem o aplicativo.\r\n</p><p>\r\nEm um post no blog oficial do Facebook em 25 de setembro, quando a falha foi inicialmente reportada, a empresa disse o seguinte, em  um texto assinado por Guy Rosen, vice-presidente de gerenciamento de produto:\r\n</p><p>\r\n“Como estamos apenas começando a nossa investigação, ainda temos que determinar se essas contas foram mal utilizadas ou se alguma informação foi acessada. Nós também não sabemos quem está por trás desses ataques ou onde os invasores estão localizados. Estamos trabalhando muito para entender melhor esses detalhes – e iremos atualizar este post quando tivermos mais informações, ou caso os fatos mudem. Além disso, caso encontremos mais contas afetadas, iremos imediatamente invalidar os seus tokens de acesso.”\r\n</p><p>\r\nDe acordo com Richard Ford, cientista chefe da empresa de segurança digital Forcepoint, o Facebook terá que entender se o ataque foi apenas uma brincadeira ou se trata-se de um ataque coordenado que visava comprometer perfis de usuários específicos para, por fim, conseguir acesso a dados sensíveis.\r\n</p><p>\r\n“Essa brecha ilustra uma verdade fundamental da nova economia digital: quando compartilhamos dados pessoais com uma companhia, estamos depositando nossa confiança na sua habilidade de protegê-los de forma adequada. Os usuários precisam constantemente. Os usuários precisam avaliar continuamente o tipo de dados que compartilham e o impacto potencial que uma violação desses dados pode causar, para se tornarem participantes ativos na proteção de suas próprias identidades on-line. Por outro lado, as empresas precisam se valer de tecnologias proativas, como a análise comportamental, para sustentar o seu lado da equação”, disse, via e-mail, Ford.\r\n</p><p>\r\nMark Zuckerberg, CEO do Facebook, também se pronunciou sobre o caso em uma página oficial na rede social. Zuckerberg disse que ainda não há evidências de que as contas tenham sido comprometidas, mas que a empresa já tomou medidas para evitar que os usuários tenham mais problemas. Ele explicou também que o problema detectado nos tokens de acesso levou a companhia a deslogar os usuários de suas respetivas contas, como uma medida de segurança. Veja o post completo do CEO, em inglês, no link a seguir.\r\n</p>\r\n\r\n \r\n\r\n', '2019-04-23 11:23:00', 5);
/*!40000 ALTER TABLE `blog` ENABLE KEYS */;

-- Copiando estrutura para tabela website.blog_imagens
CREATE TABLE IF NOT EXISTS `blog_imagens` (
  `BlogImagens_Codigo` int(11) NOT NULL AUTO_INCREMENT,
  `BlogImagens_Nome` varchar(150) DEFAULT NULL,
  `BlogImagenss_Nome` varchar(150) DEFAULT NULL,
  `BlogImagens_Blog_Codigo` int(11) DEFAULT NULL,
  PRIMARY KEY (`BlogImagens_Codigo`),
  UNIQUE KEY `BlogImagens_Nome` (`BlogImagens_Nome`),
  KEY `FK_blog_imagens_blog` (`BlogImagens_Blog_Codigo`),
  CONSTRAINT `FK_blog_imagens_blog` FOREIGN KEY (`BlogImagens_Blog_Codigo`) REFERENCES `blog` (`Blog_Codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela website.blog_imagens: ~2 rows (aproximadamente)
DELETE FROM `blog_imagens`;
/*!40000 ALTER TABLE `blog_imagens` DISABLE KEYS */;
INSERT INTO `blog_imagens` (`BlogImagens_Codigo`, `BlogImagens_Nome`, `BlogImagenss_Nome`, `BlogImagens_Blog_Codigo`) VALUES
	(2, 'post1.png', 'ppost1.png', 3),
	(3, 'post2.jpg', 'ppost2.png', 4);
/*!40000 ALTER TABLE `blog_imagens` ENABLE KEYS */;

-- Copiando estrutura para tabela website.config
CREATE TABLE IF NOT EXISTS `config` (
  `Config_Cod` int(11) NOT NULL AUTO_INCREMENT,
  `Config_Autor` varchar(150) DEFAULT NULL,
  `Config_Nome` longtext,
  PRIMARY KEY (`Config_Cod`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- Copiando dados para a tabela website.config: ~0 rows (aproximadamente)
DELETE FROM `config`;
/*!40000 ALTER TABLE `config` DISABLE KEYS */;
INSERT INTO `config` (`Config_Cod`, `Config_Autor`, `Config_Nome`) VALUES
	(5, 'Pedro Mandira', 'Segurança da Informação');
/*!40000 ALTER TABLE `config` ENABLE KEYS */;

-- Copiando estrutura para tabela website.departamento
CREATE TABLE IF NOT EXISTS `departamento` (
  `Departamento_Codigo` int(11) NOT NULL AUTO_INCREMENT,
  `Departamento_Nome` varchar(100) NOT NULL DEFAULT '0',
  PRIMARY KEY (`Departamento_Codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela website.departamento: ~2 rows (aproximadamente)
DELETE FROM `departamento`;
/*!40000 ALTER TABLE `departamento` DISABLE KEYS */;
INSERT INTO `departamento` (`Departamento_Codigo`, `Departamento_Nome`) VALUES
	(1, 'Estoque'),
	(2, 'Recursos Humanos');
/*!40000 ALTER TABLE `departamento` ENABLE KEYS */;

-- Copiando estrutura para tabela website.grade
CREATE TABLE IF NOT EXISTS `grade` (
  `Grade_Cod` int(11) NOT NULL AUTO_INCREMENT,
  `Grade_Nome` varchar(250) DEFAULT NULL,
  `Grade_Horas` int(3) DEFAULT NULL,
  PRIMARY KEY (`Grade_Cod`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela website.grade: ~33 rows (aproximadamente)
DELETE FROM `grade`;
/*!40000 ALTER TABLE `grade` DISABLE KEYS */;
INSERT INTO `grade` (`Grade_Cod`, `Grade_Nome`, `Grade_Horas`) VALUES
	(1, 'Atividades Complementares', 100),
	(2, 'Auditoria de Sistemas (Conceito / Aplicação)', 60),
	(3, 'Banco de Dados', 60),
	(4, 'Certificação Digital', 60),
	(5, 'Computação Forense', 60),
	(6, 'Comunicação Aplicada', 60),
	(7, 'Criptografia', 60),
	(8, 'Desastre e Recuperação', 60),
	(9, 'Desenvolvimento Sustentável', 60),
	(10, 'Direitos Humanos (Optativa)', 20),
	(11, 'Economia e Mercado', 60),
	(12, 'Educação Ambiental (Optativa)', 20),
	(13, 'Empreendedorismo', 60),
	(14, 'Estatística', 60),
	(15, 'Estudos Disciplinares', 240),
	(16, 'Ética e Legislação Profissional', 60),
	(17, 'Fundamentos de Sistemas Operacionais', 60),
	(18, 'Gestão da Qualidade', 60),
	(19, 'Gestão e Análise de Riscos', 60),
	(20, 'Gestão Estratégica de Recursos Humanos', 60),
	(21, 'Língua Brasileira de Sinais (Optativa)', 20),
	(22, 'Lógica', 60),
	(23, 'Matemática para Criptografia', 60),
	(24, 'Metodologia Científica', 60),
	(25, 'Organização de Computadores', 60),
	(26, 'Políticas de Segurança', 60),
	(27, 'Princípios de Sistemas de Informação', 60),
	(28, 'Projeto Integrado Multidisciplinar', 480),
	(29, 'Redes de Computadores (Arquitetura / Fundamentos)', 120),
	(30, 'Relações Étnico-Raciais e Afrodescendência (Optativa)', 20),
	(31, 'Segurança em Redes de Computadores', 60),
	(32, 'Segurança de Sistemas Operacionais (Windows / Linux)', 120),
	(33, 'Segurança no Ambiente Web', 60);
/*!40000 ALTER TABLE `grade` ENABLE KEYS */;

-- Copiando estrutura para tabela website.piso
CREATE TABLE IF NOT EXISTS `piso` (
  `Piso_Cod` int(11) NOT NULL AUTO_INCREMENT,
  `Piso_Nome` varchar(200) DEFAULT NULL,
  `Piso_Salario` double DEFAULT NULL,
  PRIMARY KEY (`Piso_Cod`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela website.piso: ~8 rows (aproximadamente)
DELETE FROM `piso`;
/*!40000 ALTER TABLE `piso` DISABLE KEYS */;
INSERT INTO `piso` (`Piso_Cod`, `Piso_Nome`, `Piso_Salario`) VALUES
	(9, 'Gerente de Segurança da Informação', 10083),
	(11, 'Consultor de Segurança da Informação', 6688),
	(12, 'Coordenador, Supervisor ou Chefe de Segurança da Informação', 6392),
	(13, 'Analista de Segurança da Informação Sênior', 5460),
	(14, 'Analista de Segurança da Informação Pleno', 3763),
	(15, 'Analista de Segurança da Informação Júnior', 2440),
	(16, 'Assistente de Segurança da Informação', 1242),
	(17, 'Estagiário de Segurança da Informação', 1060);
/*!40000 ALTER TABLE `piso` ENABLE KEYS */;

-- Copiando estrutura para tabela website.sobre
CREATE TABLE IF NOT EXISTS `sobre` (
  `sobre_cod` int(11) NOT NULL AUTO_INCREMENT,
  `sobre_titulo` varchar(500) NOT NULL DEFAULT '0',
  `sobre_corpo` varchar(2000) NOT NULL DEFAULT '0',
  `sobre_img` varchar(2000) NOT NULL DEFAULT '0',
  PRIMARY KEY (`sobre_cod`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela website.sobre: ~0 rows (aproximadamente)
DELETE FROM `sobre`;
/*!40000 ALTER TABLE `sobre` DISABLE KEYS */;
INSERT INTO `sobre` (`sobre_cod`, `sobre_titulo`, `sobre_corpo`, `sobre_img`) VALUES
	(1, 'Sobre o curso: Segurança da Informação', 'O tecnólogo em Segurança da Informação é um especialista na segurança de redes e sistemas para computadores. Este profissional é contratado geralmente por empresas para garantir a segurança de seu sistemas, evitando ataques de hackers e outros Indivíduos não autorizados, protegendo assim os dados de seus clientes/compradores.<br />\r\n<br />\r\nO tecnólogo trabalha diariamente no sistema de segurança do seu sistema, revisando assim, possíveis ataques cibernéticos para tentativa de roubo de informações.<br />\r\n<br />\r\n<h4>Tecnólogo & Bacharel</h4><br />\r\nO curso é em sua maioria, uma graduação em <b>tecnólogo</b>, más também tem a disponibilidade para um <b>bacharelado</b>, veja as diferença entre elas:<br />\r\n<br />\r\n<h5>Tempo de Duração</h5><br />\r\nA principal diferença entre um curso de tecnólogo e um de bacharelado é o tempo que você vai levar até se formar:<br />\r\n<br />\r\nO <b>Bacharelado</b> tem duração de 4 a 6 anos (8 a 12 semestres).<br />\r\n<br />\r\nOs cursos de <b>Tecnólogo</b> tem duração de 2 a 3 anos (4 a 6 semestres).<br />\r\n<br />\r\nOs cursos de tecnólogo é uma formação para capacitar profissionais ao mercado de trabalho do mundo inteiro, com ele, você consegue uma formação em um período de tempo menor, em sintonia com o perfil profissional que as empresas estão procurando.<br />\r\n<br />\r\n<h5>Grade Curricular</h5><br />\r\nA diferença perceptível entre o curso de tecnólogo e o bacharelado é os seus objetivos na grade curricular:<br />\r\n<br />\r\n<b>Bacharelado</b>: tem currículo mais amplo, com disciplinas teóricas e algumas práticas.<br />\r\n<br />\r\n<b>Tecnólogo</b>: tem currículo mais focado nas necessidades do mercado de trabalho, com mais disciplinas práticas e menos', '724c1893ee8d4fb15dca652f68639b0e.jpg');
/*!40000 ALTER TABLE `sobre` ENABLE KEYS */;

-- Copiando estrutura para tabela website.texto
CREATE TABLE IF NOT EXISTS `texto` (
  `texto_codigo` int(11) NOT NULL AUTO_INCREMENT,
  `corpo` varchar(2000) DEFAULT NULL,
  PRIMARY KEY (`texto_codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela website.texto: ~0 rows (aproximadamente)
DELETE FROM `texto`;
/*!40000 ALTER TABLE `texto` DISABLE KEYS */;
INSERT INTO `texto` (`texto_codigo`, `corpo`) VALUES
	(1, '<p>Resumidamente, a Segurança da Informação é uma área da Tecnologia da Informação que tem como objetivo formar profissionais que construam a "defesa" de um sistema, sendo geralmente de uma empresa.</p>\r\n<p>Os profissionais aprendem conceitos na teoria e na prática, e testam o sistema para checar se ele é ou não vulnerável. Sem ter uma análise de um profissional, seu sistema pode ser invadido por hackers facilmente.</p>\r\n<p>A segurança da informação (SI) está diretamente relacionada com proteção de um conjunto de informações , no sentido de preservar o valor que possuem para um indivíduo ou uma organização. São propriedades básicas da segurança da informação: confidencialidade, integridade, disponibilidade e autenticidade.</p>\r\n<p>A SI não está restrita somente a sistemas computacionais, informações eletrônicas ou sistemas de armazenamento. O conceito aplica-se a todos os aspectos de proteção de informações e dados. O conceito de Segurança Informática ou Segurança de Computadores está intimamente relacionado com o de Segurança da Informação, incluindo não apenas a segurança dos dados/informação, mas em si o sistema.</p>\r\n<p>Atualmente o conceito de Segurança da Informação está padronizado pela norma ISO/IEC 17799:2005, influenciada pelo padrão inglês BS 7799.</p>');
/*!40000 ALTER TABLE `texto` ENABLE KEYS */;

-- Copiando estrutura para tabela website.usuarios
CREATE TABLE IF NOT EXISTS `usuarios` (
  `Usuarios_Codigo` int(11) NOT NULL AUTO_INCREMENT,
  `Usuarios_Nome` varchar(150) DEFAULT NULL,
  `Usuarios_Email` varchar(50) DEFAULT NULL,
  `Usuarios_Senha` varchar(20) DEFAULT NULL,
  `Usuarios_Departamento_Codigo` int(11) DEFAULT NULL,
  PRIMARY KEY (`Usuarios_Codigo`),
  UNIQUE KEY `Usuarios_Email` (`Usuarios_Email`),
  KEY `FK_usuarios_departamento` (`Usuarios_Departamento_Codigo`),
  CONSTRAINT `FK_usuarios_departamento` FOREIGN KEY (`Usuarios_Departamento_Codigo`) REFERENCES `departamento` (`Departamento_Codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela website.usuarios: ~2 rows (aproximadamente)
DELETE FROM `usuarios`;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` (`Usuarios_Codigo`, `Usuarios_Nome`, `Usuarios_Email`, `Usuarios_Senha`, `Usuarios_Departamento_Codigo`) VALUES
	(3, 'Pedro', 'pedro@email.com', '123', 1),
	(5, 'Nicolas', 'nicolas@email.com', '123', 2);
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
