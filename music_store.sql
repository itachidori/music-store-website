-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 01-Out-2021 às 17:46
-- Versão do servidor: 10.4.18-MariaDB
-- versão do PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `music_store`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `basses`
--

CREATE TABLE `basses` (
  `id_bass` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `units_stock` int(11) NOT NULL,
  `price` float(6,2) NOT NULL,
  `photo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `basses`
--

INSERT INTO `basses` (`id_bass`, `name`, `units_stock`, `price`, `photo`) VALUES
(1, 'Harley Benton JB-75MN NA Vintage Series', 140, 149.99, './upload/6157218d538a7_Harley Benton JB-75MN NA Vintage Series.jpg'),
(2, 'Marcus Miller V7 Alder-4 AWH 2nd Gen', 7, 444.00, './upload/615325738c0e9_Marcus Miller V7 Alder-4 AWH 2nd Gen.jpg'),
(3, 'Ibanez BTB1836-NDL', 60, 1444.90, './upload/61532ebf84a6f_Ibanez BTB1836-NDL.jpg'),
(4, 'Fender Flea Sig Bass RDWRN SHP', 26, 1259.90, './upload/615720ae62a6f_Fender Flea Sig Bass RDWRN SHP.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `drums`
--

CREATE TABLE `drums` (
  `id_drum` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `units_stock` int(11) NOT NULL,
  `price` float(6,2) NOT NULL,
  `photo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `drums`
--

INSERT INTO `drums` (`id_drum`, `name`, `units_stock`, `price`, `photo`) VALUES
(1, 'Pearl EXX725BR/C Export Jet Black', 3, 710.99, './upload/61525c6d1a077_Pearl EXX725BRC Export Jet Black.jpg'),
(2, 'Startone Star Drum Set Standard -BK', 41, 185.00, './upload/6155ff3a5b571_Startone Star Drum Set Standard -BK.jpg'),
(3, 'Mapex Storm Rock Set Bundle #IZ', 20, 549.90, './upload/6155ffcbd4416_Mapex Storm Rock Set Bundle.jpg'),
(4, 'Pearl Decade Maple 6pc Red Burst', 9, 1222.00, './upload/6156005279ba4_Pearl Decade Maple 6pc Red Burst.jpg'),
(5, 'Millenium MPS-850 E-Drum Set', 31, 555.00, './upload/61571f3574e3c_Millenium MPS-850 E-Drum Set.jpg'),
(6, 'Roland TD-17KVX E-Drum Set', 6, 1577.00, './upload/61571f8d0afbd_Roland TD-17KVX E-Drum Set.jpg'),
(7, 'Roland TD-27KV V-Drum Set', 2, 2650.00, './upload/61571fed3a0f5_Roland TD-27KV V-Drum Set.jpg'),
(8, 'Alesis Nitro Mesh Kit', 15, 333.99, './upload/6157202a9b183_Alesis Nitro Mesh Kit.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `forms`
--

CREATE TABLE `forms` (
  `id_form` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `contact` int(12) NOT NULL,
  `comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `forms`
--

INSERT INTO `forms` (`id_form`, `name`, `email`, `contact`, `comment`) VALUES
(1, 'Rafael Andrade', 'rafandrade@gmail.com', 911111111, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto commodi necessitatibus provident, quos impedit exercitationem atque praesentium ratione suscipit quod dolor, in eaque tempore enim ducimus qui possimus repudiandae. Ex nihil quam ipsam ad culpa vitae magni corporis quaerat id sit dicta eaque corrupti quibusdam quidem in exercitationem aut, est ea cum? Libero, pariatur hic esse iure, nam repellendus suscipit dicta expedita dolor et exercitationem sint repellat? Ea repudiandae iure, ipsa voluptate, corrupti saepe aliquid deleniti, accusamus velit itaque facere soluta? Itaque atque est rem! Quo error possimus voluptatibus consequuntur praesentium quia repellat perferendis, debitis explicabo eius illum recusandae porro!\r\n'),
(2, 'Rafa ', 'rafanasdasd@gmail.com', 123456789, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel, est? Similique, obcaecati ut veritatis enim modi possimus voluptate voluptas facilis quae eos! Aliquam omnis atque distinctio facilis obcaecati at iste nisi laboriosam commodi itaque eligendi, alias suscipit temporibus rerum. Earum sequi expedita odio in delectus quidem sunt veritatis modi quibusdam.\r\n'),
(3, 'dfsdfsdf dsf sadd', 'sdasf@sdfskdfsdf', 111111111, 'hofwlefpwj ffipEJF I DSIPFJSAKDFJ DSJFPSAJDJ DFKGKFD Jdfgfdgd');

-- --------------------------------------------------------

--
-- Estrutura da tabela `guitars`
--

CREATE TABLE `guitars` (
  `id_guitar` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `units_stock` int(11) NOT NULL,
  `price` float(6,2) NOT NULL,
  `photo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `guitars`
--

INSERT INTO `guitars` (`id_guitar`, `name`, `units_stock`, `price`, `photo`) VALUES
(1, 'PRS SE Custom 24 Lefthand DC', 30, 819.00, './upload/PRS SE Custom 24 Lefthand DC.jpg'),
(2, 'Gibson Les Paul Standard 60s BB', 4, 2065.45, './upload/Gibson Les Paul Standard 60s BB.jpg'),
(3, 'Fender J Mascis Telecaster', 15, 1299.80, './upload/6152592a777b0_Fender J Mascis Telecaster.jpg'),
(4, 'Harley Benton CST-24T Paradise Flame', 85, 229.00, './upload/61525a7945707_Harley Benton CST-24T Paradise Flame.jpg'),
(5, 'Fender Squier Bullet Strat HSS BSB', 170, 123.00, './upload/6155fb0f7bd45_Fender Squier Bullet Strat HSS BSB.jpg'),
(6, 'PRS PS Special Semi Chesapeake Bay', 1, 9999.99, './upload/6155fb8622680_PRS PS Special Semi Chesapeake Bay.jpg'),
(7, 'Fender SQ Bullet Tele LRL BSB', 66, 149.99, './upload/6155fbd515050_Fender SQ Bullet Tele LRL BSB.jpg'),
(8, 'Epiphone Slash Les Paul Appetite Burst', 33, 825.50, './upload/6155fc28278ee_Epiphone Slash Les Paul Appetite Burst.jpg'),
(9, 'Gibson LP 57 Custom 3PU Bigsby VOS', 2, 6799.00, './upload/6155fc7db28e9_Gibson LP 57 Custom 3PU Bigsby VOS.jpg'),
(10, 'Harley Benton DC-200 BK Student Series', 101, 99.99, './upload/6155fd29d62ec_Harley Benton DC-200 BK Student Series.jpg'),
(11, 'Taylor 110e Walnut', 40, 735.00, './upload/6155fdb65591b_Taylor 110e Walnut.jpg'),
(12, 'Takamine P5DCWB', 6, 1379.00, './upload/6155fded16781_Takamine P5DCWB.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `keyboards`
--

CREATE TABLE `keyboards` (
  `id_keyboard` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `units_stock` int(11) NOT NULL,
  `price` float(6,2) NOT NULL,
  `photo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `keyboards`
--

INSERT INTO `keyboards` (`id_keyboard`, `name`, `units_stock`, `price`, `photo`) VALUES
(1, 'Thomann SP-5600', 45, 358.00, './upload/6157230f2598f_Thomann SP-5600.jpg'),
(3, 'Yamaha Genos', 3, 3555.00, './upload/6157227aa4bea_Yamaha Genos.jpg'),
(4, 'Korg PA-4X61 Oriental', 6, 2700.00, './upload/615722cde71a6_Korg PA-4X61 Oriental.jpg'),
(5, 'Korg PA-300', 26, 555.90, './upload/61572365a7aae_Korg PA-300.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nome` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id_user`, `username`, `password`, `nome`) VALUES
(1, 'carlos', 'cinel', 'Carlos Almeida'),
(2, 'ana', 'ana', 'Ana Ana'),
(3, 'joao', 'joao', 'Joao Joao'),
(4, 'rafael', 'andrade', 'Rafael Andrade'),
(5, 'joao', 'cinel', 'João Câncio           ');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `basses`
--
ALTER TABLE `basses`
  ADD PRIMARY KEY (`id_bass`);

--
-- Índices para tabela `drums`
--
ALTER TABLE `drums`
  ADD PRIMARY KEY (`id_drum`);

--
-- Índices para tabela `forms`
--
ALTER TABLE `forms`
  ADD PRIMARY KEY (`id_form`);

--
-- Índices para tabela `guitars`
--
ALTER TABLE `guitars`
  ADD PRIMARY KEY (`id_guitar`);

--
-- Índices para tabela `keyboards`
--
ALTER TABLE `keyboards`
  ADD PRIMARY KEY (`id_keyboard`);

--
-- Índices para tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `basses`
--
ALTER TABLE `basses`
  MODIFY `id_bass` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `drums`
--
ALTER TABLE `drums`
  MODIFY `id_drum` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de tabela `forms`
--
ALTER TABLE `forms`
  MODIFY `id_form` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `guitars`
--
ALTER TABLE `guitars`
  MODIFY `id_guitar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de tabela `keyboards`
--
ALTER TABLE `keyboards`
  MODIFY `id_keyboard` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
