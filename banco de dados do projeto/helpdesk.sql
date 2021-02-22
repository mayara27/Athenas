-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 22-Fev-2021 às 14:53
-- Versão do servidor: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `helpdesk`
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
  `descricao` varchar(255) DEFAULT NULL,
  `deadline` date DEFAULT NULL,
  `id_cliente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `chamados`
--

INSERT INTO `chamados` (`id_chamado`, `titulo`, `status`, `prioridade`, `descricao`, `deadline`, `id_cliente`) VALUES
(7, 'teste', 'inativo', '0', 'teste', '2021-02-25', 4),
(8, 'teste', 'inativo', '0', 'teste', '2021-02-25', 4),
(9, 'Gabinete pegou fogo', 'ativo', '10', 'O gabinete do computador do prefeito pegou fogo enquanto ele fazia os registros dos gastos da prefeittura', '2021-02-14', 4),
(10, 'computador com tela azul', 'ativo', '0', 'O computador da usuária apresenta tela azul após a mesma ver videos do carlinhos maia durante o expediente', '2021-02-16', 4);

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
(4, 'Kassandra kkkkkkkkk', '18177728288', 'Recursos Humanos', '1231321233', 'Kaaah@teste.com'),
(5, 'Dany Bonde', '12333212333', 'Recursos Humanos', '1233333333', 'dany@gmail.com');

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
(5, 'ruateste', NULL, NULL, NULL, NULL, NULL, 5),
(6, 'rua aaa', '675', 'Centro', 11680000, 'Caragua', 'SP', 6),
(7, 'Samambaia', '675', 'Centro', 11680000, 'Caragua', 'SP', 7),
(8, 'Barça', '121', 'Celnona', 11665420, 'guara', 'SP', 9),
(9, 'RUa dos bobos', '90', 'Utero', 119928344, 'Pessoinha', 'SP', 13),
(10, 'rua linda', '123', 'tamandaré', 11665420, 'sao paulo', 'SP', 14),
(11, 'Rua perto do shopping', '872', 'Campo do galvão', 11998879, 'Guaratinguetá', 'SP', 15),
(12, NULL, NULL, NULL, 11665420, NULL, NULL, 16),
(13, 'Avenida Rio Branco', '123', 'Indaiá', 11665600, 'Caraguatatuba', 'SP', 17),
(14, 'Rua Mathias de Albuquerque', '1234', 'Parque Balneário Poiares', 11665420, 'Caraguatatuba', 'SP', 18);

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
(2, 'Rua x', '123', 'Barro', 11665420, 'Cidade', 'SP', 4),
(3, 'Rua legal', '123', 'Bairro x', 11887263, 'Caraguá', 'SP', 5);

-- --------------------------------------------------------

--
-- Estrutura da tabela `horarios`
--

CREATE TABLE `horarios` (
  `id` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `hora_entrada` time DEFAULT NULL,
  `hora_saida` time DEFAULT NULL,
  `dia` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Extraindo dados da tabela `horarios`
--

INSERT INTO `horarios` (`id`, `id_usuario`, `hora_entrada`, `hora_saida`, `dia`) VALUES
(1, 6, '07:30:00', '18:00:00', '2021-02-19'),
(2, 14, '07:00:00', '18:35:02', '2021-02-19'),
(3, 9, '07:04:55', '19:09:22', '2021-02-18'),
(4, 13, '09:05:38', '19:50:09', '2021-02-19');

-- --------------------------------------------------------

--
-- Estrutura da tabela `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(5, 'ana', '1221112221', 'Secretaria', 'ana@teste.com', NULL, 'anajuliarh', 'user123', 'Atendente', '239999228', 0, '2021-01-20', 'Ensino Superior Completo', 'Casado(a)'),
(6, 'DanyBonde', '1231231234', 'Recursos Humanos', 'asd@teste.com', NULL, 'teste', 'user123', 'Atendente', '1231321233', 5, '2021-02-02', 'Analfabeto(a)', 'Casado(a)'),
(7, 'Thamy', '87654', 'Atendimento', 'thamy@hotmail.com', '1299876508', 'tham', 'user123', 'Supervisor', '12998765', 1, '1998-09-23', 'Ensino Superior Completo', 'Casado(a)'),
(9, 'Iris Vezzaro', '11188827277', 'Recursos Humanos', 'iris@teste.com.br', '1232333388', 'Vezzarorh', 'user123', 'Atendente', '1298889900', 2, '2021-01-21', 'Ensino Superior Incompleto', 'Casado(a)'),
(13, 'Jordana Santos', '12333322212', 'Recursos Humanos', 'jojo@gmail.com', '1233221123', 'jojo', 'user123', 'Supervisor', '12221121212', 0, '2021-03-05', 'Ensino Superior Incompleto', 'Solteiro(a)'),
(14, 'Ana julia', '12322289899', 'Secretaria', 'ana@teste.com', '1233221233', 'testee', 'user123', 'Suporte', '1233223344', 1, '1989-05-18', 'Ensino Superior Completo', 'Solteiro(a)'),
(15, 'Fabricio Toledo', '11122288899', 'Marketing', 'fabriciao@gmail.com', '1299228833', 'fabricioperfeito', 'user123', 'Supervisor', '1299889988', 0, '1988-06-07', 'Ensino Superior Completo', 'Solteiro(a)'),
(16, 'Natalye Araujo', '48140380890', 'Recursos Humanos', 'nath@teste.com', '12992120107', NULL, 'user123', 'Atendente', '12992128899', 2, '1997-01-28', 'Ensino Superior Completo', 'Casado(a)'),
(17, 'Mariana Guimarães', '12312389899', 'Desenvolvimento Web', 'mari@teste.com', '1222118899', 'juju@teste.com', 'user123', 'Suporte', '1288383388', 0, '1954-06-30', 'Ensino Superior Incompleto', 'Casado(a)'),
(18, 'Joao Alberto', '12388898999', 'Desenvolvimento Web', 'joao@gmail.com', '1299888899', 'joaodev@gmail.com', 'user123', 'Suporte', '12999889989', 0, '1994-11-23', 'Ensino Superior Completo', 'Casado(a)');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chamados`
--
ALTER TABLE `chamados`
  ADD PRIMARY KEY (`id_chamado`),
  ADD KEY `id_cliente` (`id_cliente`);

--
-- Indexes for table `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Indexes for table `enderecos`
--
ALTER TABLE `enderecos`
  ADD PRIMARY KEY (`id_endereco`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Indexes for table `enderecos_clientes`
--
ALTER TABLE `enderecos_clientes`
  ADD PRIMARY KEY (`id_endereco`),
  ADD KEY `id_cliente` (`id_cliente`);

--
-- Indexes for table `horarios`
--
ALTER TABLE `horarios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chamados`
--
ALTER TABLE `chamados`
  MODIFY `id_chamado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `enderecos`
--
ALTER TABLE `enderecos`
  MODIFY `id_endereco` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `enderecos_clientes`
--
ALTER TABLE `enderecos_clientes`
  MODIFY `id_endereco` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `horarios`
--
ALTER TABLE `horarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `chamados`
--
ALTER TABLE `chamados`
  ADD CONSTRAINT `chamados_ibfk_1` FOREIGN KEY (`id_cliente`) REFERENCES `clientes` (`id_cliente`),
  ADD CONSTRAINT `chamados_ibfk_7` FOREIGN KEY (`id_cliente`) REFERENCES `clientes` (`id_cliente`) ON DELETE CASCADE;

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

--
-- Limitadores para a tabela `horarios`
--
ALTER TABLE `horarios`
  ADD CONSTRAINT `horarios_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_usuario`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
