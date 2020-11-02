-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 02-Nov-2020 às 20:07
-- Versão do servidor: 8.0.21
-- versão do PHP: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `loja_virtual`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `acessorios`
--

DROP TABLE IF EXISTS `acessorios`;
CREATE TABLE IF NOT EXISTS `acessorios` (
  `id` int NOT NULL AUTO_INCREMENT,
  `Produto_categoria` varchar(100) NOT NULL,
  `Descriçao` varchar(120) DEFAULT NULL,
  `Preço` float DEFAULT NULL,
  `Valor_Total` float NOT NULL,
  `Imagem` varchar(100) DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=32 DEFAULT CHARSET=latin2;

--
-- Extraindo dados da tabela `acessorios`
--

INSERT INTO `acessorios` (`id`, `Produto_categoria`, `Descriçao`, `Preço`, `Valor_Total`, `Imagem`) VALUES
(1, 'Bolsas', 'Bolsa feminina couro ecológico roxa', 170.00, 110.00, 'img/CAJ.SCR.FR%20PURPLE%20FASHION%2016.png'),
(2, 'Bolsas', 'Bolsa Bella Modas', 79.9, 60.00, 'img/Bolsa-De-Couro-Sem-Costura-1.png'),
(3, 'Bolsas', 'Bolsa importada La Petite fleur', 167.00, 125.9, 'img/2017-nova-moda-mulheres-bolsa-de-ombro-bolsa-saco-do-mensageiro-do-vintage-bolsas-de-couro.jpg'),
(4, 'Bolsas', 'Bolsa Social', 85.00, 52.90, 'bolsa_couro_legitimo_com_alca_trancada_caramelo_7433_1_20190701143249.jpg'),
(5, 'Acessórios', 'Pulseira PURPLE FASHION', 19.9, 14.00, 'img/CAJ.SCR.FR%20PURPLE%20FASHION%2012.png'),
(6, 'Acessórios', 'Brinco floral folheado a prata', 40, 29.9, 'img/CAJ.SCR.FR%20PURPLE%20FASHION%206.png'),
(7, 'Acessórios', 'Kit de colar e brinco  ponto de luz folheado a prata', 120.00, 150, 'img/collar%206.png'),
(8, 'Acessórios', 'Kit de Colar e brinco de ouro com pedraria 24k', 2.399, 2.000, 'img/collar%201.png'),
(9, 'Cosméticos', 'Batom Lary Glamur', 9.9, 3.00, 'img/1514464994850%20(1).png '),
(10, 'Cosméticos', 'Pó compacto Nu DF', 32.9, 21.9, 'img/Make%20-%20po%202.png' ),
(11, 'Cosméticos', 'Esmaltes Skyturks', 9.9, 4.00, 'img/Make%20-%20esmalte%201.png'),
(12, 'Cosméticos', 'Kit de maquiagem Ruby Rose', 159.8, 110.00, 'img/28.png');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
