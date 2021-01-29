-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 24-Jan-2021 às 04:35
-- Versão do servidor: 10.4.16-MariaDB
-- versão do PHP: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `helpdesk`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `chamados`
--

CREATE TABLE `chamados` (
  `id_chamado` int(11) NOT NULL,
  `titulo` varchar(50) DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL,
  `prioridade` varchar(10) DEFAULT NULL,
  `descrição` varchar(255) DEFAULT NULL,
  `deadline` date DEFAULT NULL,
  `id_cliente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes`
--

CREATE TABLE `clientes` (
  `id_cliente` int(11) NOT NULL,
  `nome_cliente` varchar(100) DEFAULT NULL,
  `cpf` varchar(11) DEFAULT NULL,
  `setor` varchar(30) DEFAULT NULL,
  `telefone` varchar(11) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `clientes`
--

INSERT INTO `clientes` (`id_cliente`, `nome_cliente`, `cpf`, `setor`, `telefone`, `email`) VALUES
(3, NULL, NULL, 'Recursos Humanos', NULL, NULL),
(4, 'Julia Fernandes', '2139402225', 'Marketing', '1299876452', 'julia@gmail.com.br'),
(5, 'Julia Fernandes', '21394022254', 'Financeiro', '1299876452', 'julia@gmail.com.br'),
(6, 'Julia Fernandessss', '37496274290', 'Marketing', '1299876452', 'julia@gmail.com.br'),
(7, 'Julia Fernandessss', '37496274290', 'Marketing', '1299876452', 'julia@gmail.com.br'),
(8, 'Mayara', '67898743234', 'Atendimento', '11990876543', 'mayara@hotmail.com'),
(9, 'Julia Fernandessss', '2139402225', 'Marketing', '12998764523', 'mayara@hotmail.com'),
(10, 'Julia Fernandessss', '2139402225', 'Marketing', '12998764523', 'mayara@hotmail.com'),
(11, 'Mayara', '2139402225', 'Fiscalização', '1299876452', 'mayara@hotmail.com'),
(12, 'Mayara', '2139402225', 'Fiscalização', '1299876452', 'mayara@hotmail.com'),
(13, 'Mayara', '21394022254', 'Financeiro', NULL, 'julia@gmail.com.br'),
(14, 'Mayara', '21394022254', 'Financeiro', NULL, 'julia@gmail.com.br'),
(15, 'Mayara', '21394022254', 'Financeiro', NULL, 'julia@gmail.com.br'),
(16, 'Mayara', '21394022254', 'Financeiro', NULL, 'julia@gmail.com.br'),
(17, 'Mayara', '21394022254', 'Financeiro', NULL, 'julia@gmail.com.br'),
(18, 'Mayara', '2139402225', 'Marketing', '1299876452', 'mayara@hotmail.com'),
(19, 'Mayara', '2139402225', 'Marketing', '1299876452', 'mayara@hotmail.com'),
(20, 'Mayara', '2139402225', 'Marketing', '1299876452', 'mayara@hotmail.com');

-- --------------------------------------------------------

--
-- Estrutura da tabela `enderecos`
--

CREATE TABLE `enderecos` (
  `id_endereco` int(11) NOT NULL,
  `Rua` varchar(50) DEFAULT NULL,
  `num` varchar(5) DEFAULT NULL,
  `bairro` varchar(50) DEFAULT NULL,
  `cep` int(20) DEFAULT NULL,
  `cidade` varchar(20) DEFAULT NULL,
  `estado` varchar(2) DEFAULT NULL,
  `id_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `enderecos`
--

INSERT INTO `enderecos` (`id_endereco`, `Rua`, `num`, `bairro`, `cep`, `cidade`, `estado`, `id_usuario`) VALUES
(1, 'ruateste', '123', 'testebairro', 99888721, 'testecity', 'SP', 5),
(2, 'rua aaa', '123', 'bairrddde', 11665420, 'seila', 'SP', 6),
(4, NULL, NULL, NULL, NULL, NULL, NULL, 7),
(5, NULL, NULL, NULL, NULL, NULL, NULL, 5),
(6, 'Samambaia', '675', 'Centro', 11680000, 'Caragua', 'SP', 6),
(7, 'Samambaia', '675', 'Centro', 11680000, 'Caragua', 'SP', 7),
(8, 'Dois', '2840', 'Centro', 11680000, 'Guara', 'SP', 8),
(9, 'Dois', '2840', 'Centro', 11680000, 'Ubatuba', 'SP', 8);

-- --------------------------------------------------------

--
-- Estrutura da tabela `enderecos_clientes`
--

CREATE TABLE `enderecos_clientes` (
  `id_endereco` int(11) NOT NULL,
  `Rua` varchar(50) DEFAULT NULL,
  `num` varchar(5) DEFAULT NULL,
  `bairro` varchar(50) DEFAULT NULL,
  `cep` int(8) DEFAULT NULL,
  `cidade` varchar(20) DEFAULT NULL,
  `estado` varchar(2) DEFAULT NULL,
  `id_cliente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `enderecos_clientes`
--

INSERT INTO `enderecos_clientes` (`id_endereco`, `Rua`, `num`, `bairro`, `cep`, `cidade`, `estado`, `id_cliente`) VALUES
(1, 'Dois', '579', 'Sumare', 11680000, 'Caragua', 'SP', 20);

-- --------------------------------------------------------

--
-- Estrutura da tabela `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2019_08_19_000000_create_failed_jobs_table', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `nome_usuario` varchar(120) DEFAULT NULL,
  `cpf` varchar(11) DEFAULT NULL,
  `cargo` varchar(20) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `telefone` varchar(11) DEFAULT NULL,
  `login` varchar(20) DEFAULT NULL,
  `senha` varchar(8) DEFAULT NULL,
  `nivel_acesso` varchar(20) DEFAULT NULL,
  `tel_contato_usuario` varchar(11) NOT NULL,
  `filhos_usuario` int(11) NOT NULL,
  `nascimento_usuario` varchar(255) NOT NULL,
  `escolaridade` varchar(255) NOT NULL,
  `estado_civil_usuario` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nome_usuario`, `cpf`, `cargo`, `email`, `telefone`, `login`, `senha`, `nivel_acesso`, `tel_contato_usuario`, `filhos_usuario`, `nascimento_usuario`, `escolaridade`, `estado_civil_usuario`) VALUES
(5, 'ana', '1221112221', 'Recursos Humanos', 'ana@teste.com', '129999222', 'anajuliarh', 'user123', 'Atendente', '239999228', 0, '2021-01-20', 'Analfabeto(a)', 'Casado(a)'),
(6, 'asfdasfd', '1231231234', 'Recursos Humanos', 'asd@teste.com', '1231313212', 'teste', 'user123', 'Atendente', '1231321233', 5, '2021-02-02', 'Analfabeto(a)', 'Casado(a)'),
(7, 'Thamy', '87654', 'Atendimento', 'thamy@hotmail.com', '1299876508', 'tham', 'user123', 'Supervisor', '12998765', 1, '1998-09-23', 'Ensino Superior Completo', 'Casado(a)'),
(8, 'Diana Bianca', '35964867598', 'Desenvolvimento Web', 'dianinha28@gmail.com', '12897656789', 'dianaweb', 'user123', 'Suporte', '12897656789', 1, '2000-09-30', 'Ensino Superior Completo', 'Solteiro(a)');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `chamados`
--
ALTER TABLE `chamados`
  ADD PRIMARY KEY (`id_chamado`),
  ADD KEY `id_cliente` (`id_cliente`);

--
-- Índices para tabela `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Índices para tabela `enderecos`
--
ALTER TABLE `enderecos`
  ADD PRIMARY KEY (`id_endereco`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Índices para tabela `enderecos_clientes`
--
ALTER TABLE `enderecos_clientes`
  ADD PRIMARY KEY (`id_endereco`),
  ADD KEY `id_cliente` (`id_cliente`);

--
-- Índices para tabela `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `chamados`
--
ALTER TABLE `chamados`
  MODIFY `id_chamado` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de tabela `enderecos`
--
ALTER TABLE `enderecos`
  MODIFY `id_endereco` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de tabela `enderecos_clientes`
--
ALTER TABLE `enderecos_clientes`
  MODIFY `id_endereco` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `chamados`
--
ALTER TABLE `chamados`
  ADD CONSTRAINT `chamados_ibfk_1` FOREIGN KEY (`id_cliente`) REFERENCES `clientes` (`id_cliente`);

--
-- Limitadores para a tabela `enderecos`
--
ALTER TABLE `enderecos`
  ADD CONSTRAINT `enderecos_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_usuario`);

--
-- Limitadores para a tabela `enderecos_clientes`
--
ALTER TABLE `enderecos_clientes`
  ADD CONSTRAINT `enderecos_clientes_ibfk_1` FOREIGN KEY (`id_cliente`) REFERENCES `clientes` (`id_cliente`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
