-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 12-Set-2022 às 21:36
-- Versão do servidor: 10.4.22-MariaDB
-- versão do PHP: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bootstrap_projeto`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_equipe`
--

CREATE TABLE `tb_equipe` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `descricao` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tb_equipe`
--

INSERT INTO `tb_equipe` (`id`, `nome`, `descricao`) VALUES
(15, 'Eric', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.'),
(17, 'Eric', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.'),
(18, 'Teste', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.'),
(19, 'Teste', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.'),
(20, 'Eric', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_sobre`
--

CREATE TABLE `tb_sobre` (
  `id` int(11) NOT NULL,
  `sobre` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tb_sobre`
--

INSERT INTO `tb_sobre` (`id`, `sobre`) VALUES
(13, '<div class=\"col-md-4\">\r\n                        <h3><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-box\" viewBox=\"0 0 16 16\">\r\n                            <path d=\"M8.186 1.113a.5.5 0 0 0-.372 0L1.846 3.5 8 5.961 14.154 3.5 8.186 1.113zM15 4.239l-6.5 2.6v7.922l6.5-2.6V4.24zM7.5 14.762V6.838L1 4.239v7.923l6.5 2.6zM7.443.184a1.5 1.5 0 0 1 1.114 0l7.129 2.852A.5.5 0 0 1 16 3.5v8.662a1 1 0 0 1-.629.928l-7.185 2.874a.5.5 0 0 1-.372 0L.63 13.09a1 1 0 0 1-.63-.928V3.5a.5.5 0 0 1 .314-.464L7.443.184z\"/>\r\n                          </svg></h3>  \r\n                          <h2>Diferencial #1</h2> \r\n                          <p>\"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam at nisl et mauris vehicula interdum in eget nulla. Sed pellentesque iaculis mi, non mollis ligula egestas vitae. Integer iaculis tincidunt neque sit amet varius. Nullam eget neque id ligula ornare sollicitudin. Pellentesque ac urna sed ipsum auctor bibendum ac vitae enim. Suspendisse fringilla, est nec cursus hendrerit, elit est faucibus neque, vitae molestie nisl erat ut tellus. Mauris congue aliquet blandit. Phasellus sagittis malesuada feugiat.\"</p>\r\n                    </div>\r\n                    <div class=\"col-md-4\">\r\n                        <h3><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-box\" viewBox=\"0 0 16 16\">\r\n                            <path d=\"M8.186 1.113a.5.5 0 0 0-.372 0L1.846 3.5 8 5.961 14.154 3.5 8.186 1.113zM15 4.239l-6.5 2.6v7.922l6.5-2.6V4.24zM7.5 14.762V6.838L1 4.239v7.923l6.5 2.6zM7.443.184a1.5 1.5 0 0 1 1.114 0l7.129 2.852A.5.5 0 0 1 16 3.5v8.662a1 1 0 0 1-.629.928l-7.185 2.874a.5.5 0 0 1-.372 0L.63 13.09a1 1 0 0 1-.63-.928V3.5a.5.5 0 0 1 .314-.464L7.443.184z\"/>\r\n                          </svg></h3>  \r\n                          <h2>Diferencial #2</h2> \r\n                          <p>\"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam at nisl et mauris vehicula interdum in eget nulla. Sed pellentesque iaculis mi, non mollis ligula egestas vitae. Integer iaculis tincidunt neque sit amet varius. Nullam eget neque id ligula ornare sollicitudin. Pellentesque ac urna sed ipsum auctor bibendum ac vitae enim. Suspendisse fringilla, est nec cursus hendrerit, elit est faucibus neque, vitae molestie nisl erat ut tellus. Mauris congue aliquet blandit. Phasellus sagittis malesuada feugiat.\"</p>\r\n                    </div>\r\n                    <div class=\"col-md-4\">\r\n                        <h3><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-box\" viewBox=\"0 0 16 16\">\r\n                            <path d=\"M8.186 1.113a.5.5 0 0 0-.372 0L1.846 3.5 8 5.961 14.154 3.5 8.186 1.113zM15 4.239l-6.5 2.6v7.922l6.5-2.6V4.24zM7.5 14.762V6.838L1 4.239v7.923l6.5 2.6zM7.443.184a1.5 1.5 0 0 1 1.114 0l7.129 2.852A.5.5 0 0 1 16 3.5v8.662a1 1 0 0 1-.629.928l-7.185 2.874a.5.5 0 0 1-.372 0L.63 13.09a1 1 0 0 1-.63-.928V3.5a.5.5 0 0 1 .314-.464L7.443.184z\"/>\r\n                          </svg></h3>  \r\n                          <h2>Diferencial #3</h2> \r\n                          <p>\"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam at nisl et mauris vehicula interdum in eget nulla. Sed pellentesque iaculis mi, non mollis ligula egestas vitae. Integer iaculis tincidunt neque sit amet varius. Nullam eget neque id ligula ornare sollicitudin. Pellentesque ac urna sed ipsum auctor bibendum ac vitae enim. Suspendisse fringilla, est nec cursus hendrerit, elit est faucibus neque, vitae molestie nisl erat ut tellus. Mauris congue aliquet blandit. Phasellus sagittis malesuada feugiat.\"</p>\r\n                    </div>');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tb_equipe`
--
ALTER TABLE `tb_equipe`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tb_sobre`
--
ALTER TABLE `tb_sobre`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tb_equipe`
--
ALTER TABLE `tb_equipe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de tabela `tb_sobre`
--
ALTER TABLE `tb_sobre`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
