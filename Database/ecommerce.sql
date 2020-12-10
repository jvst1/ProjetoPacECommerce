-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 10-Dez-2020 às 20:34
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
(9, 'Tais', '81dc9bdb52d04dc20036dbd8313ed055', 'tais@', 432543, 0, 'erdfsgsdg', 'sdfgsdf', 'sdfsfdgf', 'SC', 1243, 21342134),
(10, 'suellen teste', '81dc9bdb52d04dc20036dbd8313ed055', 'suellen@teste', 120765, 0, 'Rua Joaquim Nabuco', 'Anita Garibaldi', 'Joinville', 'SC', 81, 89203070),
(11, 'Joao Teste', 'aa1bf4646de67fd9086cf6c79007026c', 'joao@teste', 120765, 0, 'sadfsadf', 'adfg', 'Joinville', 'SC', 81, 89203590);

-- --------------------------------------------------------

--
-- Estrutura da tabela `pedido`
--

CREATE TABLE `pedido` (
  `Pedido_ID` int(11) NOT NULL,
  `Pedido_Cliente` varchar(11) NOT NULL,
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
  `Pro_Preco_Frete` float NOT NULL,
  `Pro_Peso` float NOT NULL,
  `Pro_Altura` float NOT NULL,
  `Pro_Largura` float NOT NULL,
  `Pro_Comprimento` float NOT NULL,
  `Prod_Imagem` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`Prod_ID`, `Prod_Nome`, `Prod_Descricao`, `Prod_Preco`, `Prod_Promocao`, `Prod_Quantidade`, `Prod_Preco_Antigo`, `Pro_Preco_Frete`, `Pro_Peso`, `Pro_Altura`, `Pro_Largura`, `Pro_Comprimento`, `Prod_Imagem`) VALUES
(1, 'Camiseta Branca Rose', '', 79, 1, 2, 99, 0, 0, 0, 0, 0, 'https://d26lpennugtm8s.cloudfront.net/stores/001/101/580/products/camiseta-masculina-classic-rose-branca1-68f79b40b6405f4c4315879875226873-1024-1024.jpg'),
(2, 'Camiseta Preta Basica', '', 79.9, 0, 10, NULL, 0, 0, 0, 0, 0, 'https://47069.cdn.simplo7.net/static/47069/sku/roupas-camiseta-preta-basica-logo-patch--p-1582826230345.jpg'),
(3, 'Camiseta Vans', '', 99.9, 0, 5, NULL, 0, 0, 0, 0, 0, 'https://d26lpennugtm8s.cloudfront.net/stores/001/035/054/products/camiseta-vans-mc-basic-classic-boys-21-aaccd32e9379a9142f15786833752311-640-0.jpg'),
(4, 'Camiseta Manga Longa', '', 99.9, 1, 10, 129.9, 0, 0, 0, 0, 0, 'https://47069.cdn.simplo7.net/static/47069/sku/colecao-global-moviment-camiseta-manga-longa-caveira--p-1588775213217.jpg'),
(5, 'Camiseta Criação de Adão', '', 49.9, 1, 10, 59.9, 0, 0, 0, 0, 0, 'https://22036.cdn.simplo7.net/static/22036/sku/camisetas-nerd-camisetas-obras-de-arte-camiseta-criacao-de-adao-michelangelo--p-1570197119476.jpg'),
(6, 'Tênis Nike Quest', '', 199.9, 0, 4, NULL, 0, 0, 0, 0, 0, 'https://static.netshoes.com.br/produtos/tenis-nike-quest-2-masculino/26/HZM-1743-026/HZM-1743-026_zoom1.jpg?ts=1562156633');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos_pedido`
--

CREATE TABLE `produtos_pedido` (
  `id_prod_pedido` int(11) NOT NULL,
  `email_cliente` varchar(11) NOT NULL,
  `cod_prod` int(11) NOT NULL,
  `qtd_prod` int(11) NOT NULL,
  `prod_finalizado` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `produtos_pedido`
--

INSERT INTO `produtos_pedido` (`id_prod_pedido`, `email_cliente`, `cod_prod`, `qtd_prod`, `prod_finalizado`) VALUES
(46, 'joao@', 1, 2, '0');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `clientes`
--
ALTER TABLE `clientes`
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
  ADD PRIMARY KEY (`id_prod_pedido`,`email_cliente`,`cod_prod`,`qtd_prod`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `clientes`
--
ALTER TABLE `clientes`
  MODIFY `Cliente_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de tabela `pedido`
--
ALTER TABLE `pedido`
  MODIFY `Pedido_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `Prod_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1424;

--
-- AUTO_INCREMENT de tabela `produtos_pedido`
--
ALTER TABLE `produtos_pedido`
  MODIFY `id_prod_pedido` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
