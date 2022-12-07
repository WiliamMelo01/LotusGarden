-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: fdb30.awardspace.net
-- Tempo de geração: 07-Dez-2022 às 13:12
-- Versão do servidor: 5.7.20-log
-- versão do PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `4184430_lotusgarden`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbcategoria`
--

CREATE TABLE `tbcategoria` (
  `idCategoria` int(11) NOT NULL,
  `nomeCategoria` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tbcategoria`
--

INSERT INTO `tbcategoria` (`idCategoria`, `nomeCategoria`) VALUES
(15, 'CARTA'),
(16, 'DADOS'),
(17, 'DECKS'),
(22, 'SHIELDS'),
(23, 'TOKENS'),
(25, 'DECK BOX');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbcliente`
--

CREATE TABLE `tbcliente` (
  `idCliente` int(11) NOT NULL,
  `nomeCliente` varchar(50) DEFAULT NULL,
  `cpfCliente` varchar(15) DEFAULT NULL,
  `emailCliente` varchar(50) DEFAULT NULL,
  `senhaCliente` varchar(50) DEFAULT NULL,
  `logradouroCliente` varchar(150) DEFAULT NULL,
  `numLogCliente` int(11) DEFAULT NULL,
  `compCliente` varchar(150) DEFAULT NULL,
  `bairroCliente` varchar(100) DEFAULT NULL,
  `cidadeCliente` varchar(100) DEFAULT NULL,
  `udCliente` varchar(25) DEFAULT NULL,
  `cepCliente` varchar(9) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tbcliente`
--

INSERT INTO `tbcliente` (`idCliente`, `nomeCliente`, `cpfCliente`, `emailCliente`, `senhaCliente`, `logradouroCliente`, `numLogCliente`, `compCliente`, `bairroCliente`, `cidadeCliente`, `udCliente`, `cepCliente`) VALUES
(18, 'Wiliam Melo da Mota', '241.954.368-85', 'wiliammelo.mota@gmail.com', 'Platina@78', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(19, 'Alexandre Sousa Garrido ', '236.509.988-23', 'alexgarrido843@gmail.com', 'AmorEPaz2@', NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbitemvenda`
--

CREATE TABLE `tbitemvenda` (
  `idItemVenda` int(11) NOT NULL,
  `idVenda` int(11) DEFAULT NULL,
  `idProduto` int(11) DEFAULT NULL,
  `qtdeItemVenda` int(11) DEFAULT NULL,
  `subTotalItemVenda` decimal(6,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tbitemvenda`
--

INSERT INTO `tbitemvenda` (`idItemVenda`, `idVenda`, `idProduto`, `qtdeItemVenda`, `subTotalItemVenda`) VALUES
(86, 57, 42, 1, '5.99'),
(87, 58, 43, 1, '2.99'),
(88, 58, 49, 1, '0.25'),
(89, 58, 42, 1, '5.99');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbproduto`
--

CREATE TABLE `tbproduto` (
  `idProduto` int(11) NOT NULL,
  `nomeProduto` varchar(50) DEFAULT NULL,
  `precoProduto` varchar(20) DEFAULT NULL,
  `idCategoria` int(11) DEFAULT NULL,
  `imagem` varchar(255) NOT NULL,
  `promocao` tinyint(1) NOT NULL,
  `precoAntigo` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tbproduto`
--

INSERT INTO `tbproduto` (`idProduto`, `nomeProduto`, `precoProduto`, `idCategoria`, `imagem`, `promocao`, `precoAntigo`) VALUES
(42, 'Comando De Prismari', '5.99', 15, 'images/produtos/42.webP', 1, '6.99'),
(43, 'Impulso Flamejante', '2.99', 15, 'images/produtos/43.webP', 1, '3.99'),
(44, 'Luminescriba Leonino', '0.99', 15, 'images/produtos/44.webP', 1, '1.98'),
(45, 'Mago Iniciado De Murchaflor', '2.99', 15, 'images/produtos/45.webP', 1, '3.99'),
(46, 'Palavra De Poder: Matar', '0.50', 15, 'images/produtos/46.webP', 1, '1.50'),
(47, 'Verso Desvanescedor', '3.99', 15, 'images/produtos/47.webP', 1, '4.99'),
(48, 'Vingança Imediata', '2.99', 15, 'images/produtos/48.webP', 1, '5.99'),
(49, 'Adormecer', '0.25', 15, 'images/produtos/49.webP', 1, '1.25'),
(50, 'Demonio Da Oferenda De Sangue', '3.99', 15, 'images/produtos/50.webP', 0, ''),
(52, 'Lumimante Esperta', '4.99', 15, 'images/produtos/52.webP', 0, ''),
(53, 'Mechanized Production', '1.99', 15, 'images/produtos/53.webP', 0, ''),
(54, 'Vôo Espectral', '0.55', 15, 'images/produtos/54.webP', 0, ''),
(55, 'Esmagador Provisorio', '4.50', 15, 'images/produtos/55.webP', 0, ''),
(56, 'Supervisor Angelical', '7.99', 15, 'images/produtos/56.webP', 0, ''),
(57, 'Guardiao Do Mausoleu', '10.99', 15, 'images/produtos/57.webP', 0, ''),
(58, 'Cat', '0.25', 23, 'images/produtos/58.webP', 0, ''),
(59, 'Dinossaur Cat', '0.25', 23, 'images/produtos/59.png', 0, ''),
(60, 'Hydra', '0.25', 23, 'images/produtos/60.png', 0, ''),
(61, 'kraken', '0.25', 23, 'images/produtos/61.webP', 0, ''),
(62, 'Shark', '0.25', 23, 'images/produtos/62.webP', 0, ''),
(63, 'Silver', '0.25', 23, 'images/produtos/63.webP', 0, ''),
(64, 'Zombie', '0.25', 23, 'images/produtos/64.webp', 0, ''),
(65, 'Skeleton', '0.25', 23, 'images/produtos/65.webp', 0, ''),
(66, 'Anjo', '0.25', 23, 'images/produtos/66.webp', 0, ''),
(67, 'Demon', '0.25', 23, 'images/produtos/67.webp', 0, ''),
(68, 'Dado D20 - VOW', '10.00', 16, 'images/produtos/68.webp', 0, ''),
(69, 'Dado D20 - DOM', '10.00', 16, 'images/produtos/69.webp', 0, ''),
(70, 'Dado D20 - SNC (Azul)', '10.00', 16, 'images/produtos/70.webp', 0, ''),
(71, 'D20 Magic (Roxo)', '10.00', 16, 'images/produtos/71.webp', 0, ''),
(72, 'Conjunto de d6 (Vermelho e preto)', '28.00', 16, 'images/produtos/72.webp', 0, ''),
(73, 'Deck de Commander 2 de Dominária Unida', '350.00', 17, 'images/produtos/73.webp', 0, ''),
(74, 'Deck de Pioneiro Mono Vermelho de Dano', '354.86', 17, 'images/produtos/74.webp', 0, ''),
(75, 'Deck de Azorius Spirits', '379.00', 17, 'images/produtos/75.webp', 0, ''),
(76, 'Deck de Orzhov Auras', '319.99', 17, 'images/produtos/76.webp', 0, ''),
(77, 'Deck de Controle Dimir', '381.00', 17, 'images/produtos/77.webp', 0, ''),
(78, 'Sleeve Classic – STANDARD ( 63,5x88mm)', '29.90', 22, 'images/produtos/78.webp', 0, ''),
(79, 'Sleeve Padrão USA', '10.00', 22, 'images/produtos/79.webp', 0, ''),
(80, 'Shield Matte Mini - Preto', '37.99', 22, 'images/produtos/80.webp', 0, ''),
(81, 'Prime Sleeves (Azul)', '72.59', 22, 'images/produtos/81.webp', 0, ''),
(82, 'Matte Prime Sleeves (Preto)', '70.21', 22, 'images/produtos/82.webp', 0, ''),
(83, 'Gamegenic: Deck Holder 100+ (Azul)', '22.68', 25, 'images/produtos/83.webp', 0, ''),
(84, 'Mythic Edition Premium Deck Box Alcove Tower', '294.61', 25, 'images/produtos/84.webp', 0, ''),
(85, 'Deck Box Magic Commander 100 Azul', '39.90', 25, 'images/produtos/85.webp', 0, ''),
(86, 'Arcane Tinmen Dragon Shield Card(preto)', '57.99', 25, 'images/produtos/86.webp', 0, ''),
(87, 'Central Deck Box Case Torre(preto)', '214.99', 25, 'images/produtos/87.webp', 0, ''),
(88, 'Comando De Prismari', '5.99', 15, 'images/produtos/42.webP', 0, ''),
(89, 'Impulso Flamejante', '2.99', 15, 'images/produtos/43.webP', 0, ''),
(90, 'Luminescriba Leonino', '0.99', 15, 'images/produtos/44.webP', 0, ''),
(91, 'Mago Iniciado De Murchaflor', '2.99', 15, 'images/produtos/45.webP', 0, ''),
(92, 'Palavra De Poder: Matar', '0.50', 15, 'images/produtos/46.webP', 0, ''),
(93, 'Verso Desvanescedor', '3.99', 15, 'images/produtos/47.webP', 0, ''),
(94, 'Vingança Imediata', '2.99', 15, 'images/produtos/48.webP', 0, ''),
(95, 'Adormecer', '0.25', 15, 'images/produtos/49.webP', 0, ''),
(96, 'Demonio Da Oferenda De Sangue', '3.99', 15, 'images/produtos/50.webP', 0, ''),
(97, 'Lumimante Esperta', '4.99', 15, 'images/produtos/52.webP', 0, ''),
(98, 'Mechanized Production', '1.99', 15, 'images/produtos/53.webP', 0, ''),
(99, 'Vôo Espectral', '0.55', 15, 'images/produtos/54.webP', 0, ''),
(100, 'Esmagador Provisorio', '4.50', 15, 'images/produtos/55.webP', 0, ''),
(101, 'Supervisor Angelical', '7.99', 15, 'images/produtos/56.webP', 0, ''),
(102, 'Guardiao Do Mausoleu', '10.99', 15, 'images/produtos/57.webP', 0, ''),
(103, 'Cat', '0.25', 23, 'images/produtos/58.webP', 0, ''),
(104, 'Dinossaur Cat', '0.25', 23, 'images/produtos/59.png', 0, ''),
(105, 'Hydra', '0.25', 23, 'images/produtos/60.png', 0, ''),
(106, 'kraken', '0.25', 23, 'images/produtos/61.webP', 0, ''),
(107, 'Shark', '0.25', 23, 'images/produtos/62.webP', 0, ''),
(108, 'Silver', '0.25', 23, 'images/produtos/63.webP', 0, ''),
(109, 'Zombie', '0.25', 23, 'images/produtos/64.webp', 0, ''),
(110, 'Skeleton', '0.25', 23, 'images/produtos/65.webp', 0, ''),
(111, 'Anjo', '0.25', 23, 'images/produtos/66.webp', 0, ''),
(112, 'Demon', '0.25', 23, 'images/produtos/67.webp', 0, ''),
(113, 'Dado D20 - VOW', '10.00', 16, 'images/produtos/68.webp', 0, ''),
(114, 'Dado D20 - DOM', '10.00', 16, 'images/produtos/69.webp', 0, ''),
(115, 'Dado D20 - SNC (Azul)', '10.00', 16, 'images/produtos/70.webp', 0, ''),
(116, 'D20 Magic (Roxo)', '10.00', 16, 'images/produtos/71.webp', 0, ''),
(117, 'Conjunto de d6 (Vermelho e preto)', '28.00', 16, 'images/produtos/72.webp', 0, ''),
(118, 'Deck de Commander 2 de Dominária Unida', '350.00', 17, 'images/produtos/73.webp', 0, ''),
(119, 'Deck de Pioneiro Mono Vermelho de Dano', '354.86', 17, 'images/produtos/74.webp', 0, ''),
(120, 'Deck de Azorius Spirits', '379.00', 17, 'images/produtos/75.webp', 0, ''),
(121, 'Deck de Orzhov Auras', '319.99', 17, 'images/produtos/76.webp', 0, ''),
(122, 'Deck de Controle Dimir', '381.00', 17, 'images/produtos/77.webp', 0, ''),
(123, 'Sleeve Classic – STANDARD ( 63,5x88mm)', '29.90', 22, 'images/produtos/78.webp', 0, ''),
(124, 'Sleeve Padrão USA', '10.00', 22, 'images/produtos/79.webp', 0, ''),
(125, 'Shield Matte Mini - Preto', '37.99', 22, 'images/produtos/80.webp', 0, ''),
(126, 'Prime Sleeves (Azul)', '72.59', 22, 'images/produtos/81.webp', 0, ''),
(127, 'Matte Prime Sleeves (Preto)', '70.21', 22, 'images/produtos/82.webp', 0, ''),
(128, 'Gamegenic: Deck Holder 100+ (Azul)', '22.68', 25, 'images/produtos/83.webp', 0, ''),
(129, 'Mythic Edition Premium Deck Box Alcove Tower', '294.61', 25, 'images/produtos/84.webp', 0, ''),
(130, 'Deck Box Magic Commander 100 Azul', '39.90', 25, 'images/produtos/85.webp', 0, ''),
(131, 'Arcane Tinmen Dragon Shield Card(preto)', '57.99', 25, 'images/produtos/86.webp', 0, ''),
(132, 'Central Deck Box Case Torre(preto)', '214.99', 25, 'images/produtos/87.webp', 0, '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbvenda`
--

CREATE TABLE `tbvenda` (
  `idVenda` int(11) NOT NULL,
  `dataVenda` date DEFAULT NULL,
  `valorTotalVenda` decimal(6,2) DEFAULT NULL,
  `statusVenda` varchar(50) DEFAULT NULL,
  `idCliente` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tbvenda`
--

INSERT INTO `tbvenda` (`idVenda`, `dataVenda`, `valorTotalVenda`, `statusVenda`, `idCliente`) VALUES
(57, '2022-12-07', '5.99', '1', 18),
(58, '2022-12-07', '9.23', '1', 19);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tbcategoria`
--
ALTER TABLE `tbcategoria`
  ADD PRIMARY KEY (`idCategoria`);

--
-- Índices para tabela `tbcliente`
--
ALTER TABLE `tbcliente`
  ADD PRIMARY KEY (`idCliente`);

--
-- Índices para tabela `tbitemvenda`
--
ALTER TABLE `tbitemvenda`
  ADD PRIMARY KEY (`idItemVenda`),
  ADD KEY `idProduto` (`idProduto`),
  ADD KEY `idVenda` (`idVenda`);

--
-- Índices para tabela `tbproduto`
--
ALTER TABLE `tbproduto`
  ADD PRIMARY KEY (`idProduto`),
  ADD KEY `idCategoria` (`idCategoria`);

--
-- Índices para tabela `tbvenda`
--
ALTER TABLE `tbvenda`
  ADD PRIMARY KEY (`idVenda`),
  ADD KEY `idCliente` (`idCliente`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tbcategoria`
--
ALTER TABLE `tbcategoria`
  MODIFY `idCategoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT de tabela `tbcliente`
--
ALTER TABLE `tbcliente`
  MODIFY `idCliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de tabela `tbitemvenda`
--
ALTER TABLE `tbitemvenda`
  MODIFY `idItemVenda` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;

--
-- AUTO_INCREMENT de tabela `tbproduto`
--
ALTER TABLE `tbproduto`
  MODIFY `idProduto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=133;

--
-- AUTO_INCREMENT de tabela `tbvenda`
--
ALTER TABLE `tbvenda`
  MODIFY `idVenda` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `tbitemvenda`
--
ALTER TABLE `tbitemvenda`
  ADD CONSTRAINT `tbItemVenda_ibfk_1` FOREIGN KEY (`idProduto`) REFERENCES `tbproduto` (`idProduto`),
  ADD CONSTRAINT `tbItemVenda_ibfk_2` FOREIGN KEY (`idVenda`) REFERENCES `tbvenda` (`idVenda`);

--
-- Limitadores para a tabela `tbproduto`
--
ALTER TABLE `tbproduto`
  ADD CONSTRAINT `tbProduto_ibfk_1` FOREIGN KEY (`idCategoria`) REFERENCES `tbcategoria` (`idCategoria`);

--
-- Limitadores para a tabela `tbvenda`
--
ALTER TABLE `tbvenda`
  ADD CONSTRAINT `tbVenda_ibfk_1` FOREIGN KEY (`idCliente`) REFERENCES `tbcliente` (`idCliente`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
