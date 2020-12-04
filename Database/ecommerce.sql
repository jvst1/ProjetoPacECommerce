-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 04-Dez-2020 às 02:54
-- Versão do servidor: 10.4.14-MariaDB
-- versão do PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `ecommerce`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes`
--

CREATE TABLE `clientes` (
  `Cliente_ID` int(11) NOT NULL,
  `Cliente_Nome` text NOT NULL,
  `Cliente_Senha` varchar(100) NOT NULL,
  `Cliente_Email` varchar(100) NOT NULL,
  `Cliente_CPF` int(11) NOT NULL,
  `Cliente_Telefone` int(11) NOT NULL,
  `Cliente_Endereco` text NOT NULL,
  `Cliente_Bairro` text NOT NULL,
  `Cliente_Cidade` text NOT NULL,
  `Cliente_Estado` text NOT NULL,
  `Cliente_Endereco_Numero` int(11) NOT NULL,
  `Cliente_CEP` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `clientes`
--

INSERT INTO `clientes` (`Cliente_ID`, `Cliente_Nome`, `Cliente_Senha`, `Cliente_Email`, `Cliente_CPF`, `Cliente_Telefone`, `Cliente_Endereco`, `Cliente_Bairro`, `Cliente_Cidade`, `Cliente_Estado`, `Cliente_Endereco_Numero`, `Cliente_CEP`) VALUES
(1, 'João Artur', '81dc9bdb52d04dc20036dbd8313ed055', 'joao@', 120765, 0, 'Rua Joaquim Nabuco', 'Anita Garibaldi', 'Joinville', 'Santa Catarina', 81, 89203070),
(2, 'Ana', '81dc9bdb52d04dc20036dbd8313ed055', 'ana@', 123452, 0, 'akjgfdasdlkfg', 'asdfkjgdsk', 'asdfkjasd', 'asdfkjgsd', 2345234, 4432523),
(3, 'Suellen', '81dc9bdb52d04dc20036dbd8313ed055', 'suellen@', 435689, 0, 'akjgfdasdlkfg', 'asdfkjgdsk', 'asdfkjasd', 'SC', 2314123, 2147483647),
(4, 'Suellen', '698dc19d489c4e4db73e28a713eab07b', 'suellen@', 123434, 0, 'akjgfdasdlkfg', 'asdfkjgdsk', 'asdfkjasd', 'SC', 12345, 123434541),
(5, 'Eduardo Klein', '7aeac3327f0e37e8f8e95ee489a283e6', 'eduardo@', 82566, 0, 'Rua Groenlandia', 'Itinga', 'Joinville', 'MS', 102, 2147483647),
(6, 'Frederico', 'c01fcaf08c742545d5d76992d58775e2', 'fred@', 104072, 0, 'Rua Gothard Kaesemodel', 'Anita Garibaldi', 'Joinville', 'SC', 605, 89203522),
(7, 'rafael', '81dc9bdb52d04dc20036dbd8313ed055', 'rafael@', 124352, 0, '1adfsadf', 'asdfasd', 'asdfdf', 'SC', 123, 12342134),
(8, 'Natalia Ertl', '81dc9bdb52d04dc20036dbd8313ed055', 'nataliaertl@', 113798, 0, 'Rua Alfeu Carneiro Lins', 'Iririu', 'Joinville', 'SC', 82, 89227522),
(9, 'Tais', '81dc9bdb52d04dc20036dbd8313ed055', 'tais@', 432543, 0, 'erdfsgsdg', 'sdfgsdf', 'sdfsfdgf', 'SC', 1243, 21342134);

-- --------------------------------------------------------

--
-- Estrutura da tabela `clienteteste`
--

CREATE TABLE `clienteteste` (
  `Cliente_ID` int(11) NOT NULL,
  `Cliente_Nome` varchar(100) NOT NULL,
  `Cliente_Senha` varchar(100) NOT NULL,
  `Cliente_Email` varchar(100) NOT NULL,
  `Cliente_CPF` varchar(100) NOT NULL,
  `Cliente_Telefone` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `clienteteste`
--

INSERT INTO `clienteteste` (`Cliente_ID`, `Cliente_Nome`, `Cliente_Senha`, `Cliente_Email`, `Cliente_CPF`, `Cliente_Telefone`) VALUES
(4, 'João Artur', '81dc9bdb52d04dc20036dbd8313ed055', 'joao@', '120.765.619-43', '(47) 9 9947-1030');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pedido`
--

CREATE TABLE `pedido` (
  `Pedido_ID` int(11) NOT NULL,
  `Pedido_Preco` float NOT NULL,
  `Pedido_Entrega_Tipo` varchar(100) NOT NULL,
  `Pedido_Frete` float NOT NULL,
  `Pedido_Pagamento_Tipo` varchar(100) NOT NULL,
  `Pedido_Produtos` int(11) NOT NULL,
  `Pedido_Cliente` int(11) NOT NULL,
  `Pedido_Destinatario` varchar(300) NOT NULL,
  `Pedido_Valor_Total` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `Prod_ID` int(11) NOT NULL,
  `Prod_Nome` text NOT NULL,
  `Prod_Descricao` varchar(3000) NOT NULL,
  `Prod_Preco` float NOT NULL,
  `Prod_Promocao` tinyint(1) NOT NULL,
  `Prod_Quantidade` int(11) NOT NULL,
  `Prod_Preco_Antigo` float DEFAULT NULL,
  `Url_imagem` text NOT NULL,
  `Pro_Preco_Frete` float NOT NULL,
  `Pro_Peso` float NOT NULL,
  `Pro_Altura` float NOT NULL,
  `Pro_Largura` float NOT NULL,
  `Pro_Comprimento` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`Prod_ID`, `Prod_Nome`, `Prod_Descricao`, `Prod_Preco`, `Prod_Promocao`, `Prod_Quantidade`, `Prod_Preco_Antigo`, `Url_imagem`, `Pro_Preco_Frete`, `Pro_Peso`, `Pro_Altura`, `Pro_Largura`, `Pro_Comprimento`) VALUES
(1, 'Camiseta', '', 19.9, 1, 12, 50, '', 0, 0, 0, 0, 0),
(2, 'Calça', '', 11.5, 0, 10, NULL, '', 0, 0.5, 20, 20, 20),
(3, 'Meia', '', 5.65, 0, 10, NULL, '', 0, 0, 0, 0, 0),
(4, 'ESCADA ELETRICA', 'UMA ESCADA ELETRICA INCRIVEL QUE DAJFHDSFKLHSDGLKAHSDF kjahgkfdkg  adfkjfdaklghf adfkgjdfghlk', 800, 1, 20, NULL, '', 0, 0, 0, 0, 0),
(5, 'telha', '', 15, 0, 10, NULL, '', 0, 0, 0, 0, 0),
(6, 'cotonete', '', 20, 0, 5, NULL, '', 0, 0, 0, 0, 0),
(7, 'Cotonete enorme', '', 25, 0, 10, 100, '', 0, 0, 0, 0, 0),
(8, 'Betoneira', '', 15, 0, 15, 9000, '', 0, 0, 0, 0, 0),
(9, 'Delineador Colorido', '', 20, 0, 1, NULL, '', 0, 0, 0, 0, 0),
(10, 'Latinha', '', 120, 0, 5, NULL, '', 0, 0, 0, 0, 0),
(12, 'Yasuo', 'O herói mais temido por seus aliados de toda Runeterra.', 1000, 0, 1, NULL, 'https://i.pinimg.com/originals/65/2a/79/652a79805036c5b55d7845037df042a4.jpg', 0, 0, 0, 0, 0),
(13, 'AWP - Dragon Lore', 'Obra prima.', 7320, 0, 1, NULL, 'https://i.redd.it/h91sil5400e51.png', 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos_pedido`
--

CREATE TABLE `produtos_pedido` (
  `Cod_Link` int(11) NOT NULL,
  `Cod_Cliente` int(11) NOT NULL,
  `Cod_Pedido` int(11) NOT NULL,
  `Cod_Produtos` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `produtos_pedido`
--

INSERT INTO `produtos_pedido` (`Cod_Link`, `Cod_Cliente`, `Cod_Pedido`, `Cod_Produtos`) VALUES
(1, 1, 1, 2323),
(1, 1, 1, 2424);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`Cliente_ID`);

--
-- Índices para tabela `clienteteste`
--
ALTER TABLE `clienteteste`
  ADD PRIMARY KEY (`Cliente_ID`);

--
-- Índices para tabela `pedido`
--
ALTER TABLE `pedido`
  ADD PRIMARY KEY (`Pedido_ID`);

--
-- Índices para tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`Prod_ID`);

--
-- Índices para tabela `produtos_pedido`
--
ALTER TABLE `produtos_pedido`
  ADD PRIMARY KEY (`Cod_Link`,`Cod_Cliente`,`Cod_Pedido`,`Cod_Produtos`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `clientes`
--
ALTER TABLE `clientes`
  MODIFY `Cliente_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de tabela `clienteteste`
--
ALTER TABLE `clienteteste`
  MODIFY `Cliente_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `pedido`
--
ALTER TABLE `pedido`
  MODIFY `Pedido_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `Prod_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
