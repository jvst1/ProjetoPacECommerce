-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 03-Out-2020 às 19:01
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
  `Prod_Preco` float NOT NULL,
  `Prod_Quantidade` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `clientes`
--
ALTER TABLE `clientes`
  MODIFY `Cliente_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `clienteteste`
--
ALTER TABLE `clienteteste`
  MODIFY `Cliente_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `pedido`
--
ALTER TABLE `pedido`
  MODIFY `Pedido_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `Prod_ID` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
