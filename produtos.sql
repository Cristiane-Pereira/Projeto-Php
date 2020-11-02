-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 02-Nov-2020 às 20:05
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
-- Estrutura da tabela `produtos`
--

DROP TABLE IF EXISTS `produtos`;
CREATE TABLE IF NOT EXISTS `produtos` (
  `id` int NOT NULL AUTO_INCREMENT,
  `Produto_categoria` varchar(100) NOT NULL,
  `Descriçao` varchar(120) DEFAULT NULL,
  `Preço` float DEFAULT NULL,
  `Valor_Total` float NOT NULL,
  `Imagem` varchar(100) DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=32 DEFAULT CHARSET=latin2;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id`, `Produto_categoria`, `Descriçao`, `Preço`, `Valor_Total`, `Imagem`) VALUES
(1, 'Vestidos', 'Vestido manga longa princesa Mob', 220.00, 110.00, 'img/ddc1c2_88f6ce44d8364ad7a01b1a5ad2c951ce_mv2.jpg'),
(2, 'Vestido', 'Vestido Moda Blogueiras', 100.00, 73.9, 'img//ddc1c2_f3411434679d43fd9a3a5f24609e6ac5_mv2.jpg'),
(3, 'Vestidos', 'Vestido Longo Plus Size', 167.00, 115.9, 'img/ddc1c2_f3411434679d43fd9a3a5f24609e6ac5_mv2.jpg'),
(4, 'Vestidos', 'Vestido Floral', 209.8, 167.00, 'img/ddc1c2_c9bb6a6fe46d42c4b0b7888ed37a7ba7_mv2.jpg'),
(5, 'vestidos', 'Vestido Midi', 159.00, 127.00, 'img/ddc1c2_eb9385a3177c4637a58da610640bd120_mv2.jpg'),
(6, 'Conjunto', 'Conjunto Neoprame Blusa e Calça', 210.00, 150.00, 'img/ddc1c2_b59f665277044cf9958a8d34379a6ea2_mv2.jpg'),
(7, 'Conjunto', 'Conjunto Moda Blogueira Tricolor', 179.9, 130.5, 'img/ddc1c2_266c5068bc694035bdf86e1cc265597e_mv2.jpg'),
(8, 'Conjunto', 'Conjunto Moleton Blusa e Calça', 149.9, 125.00, 'img/ddc1c2_8236421c67a44198869de487c3f6fb44_mv2.jpg'),
(9, 'Blusa', 'Blusa de Lã Tricolor', 149.9, 109.9, 'img/ddc1c2_91a069e5e25d4a99aa1d292120afc0b4_mv2.jpg '),
(10, 'Saias', 'Saia moda Evangelica', 120.00, 92.9, 'img/ddc1c2_5db26878bcd749b492d233655195cfdf_mv2.jpg' ),
(11, 'Macacao', 'Macacão Feminino Social', 220.00, 150.00, 'img/ddc1c2_c7bc15629c0d46cabb43def061c01f65_mv2.jpg'),
(12, 'Blusinhas', 'Camisa Feminina Mullet Famosas', 92.9, 61.9, 'img/ddc1c2_cff73157c3a047beb3ca6fea9cb60cc4_mv2.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
