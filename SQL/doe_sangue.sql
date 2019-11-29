-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 29, 2019 at 03:34 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `doe_sangue`
--

-- --------------------------------------------------------

--
-- Table structure for table `bancodesangue`
--

CREATE TABLE `bancodesangue` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nome` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gerente_cpf` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bancodesangue`
--

INSERT INTO `bancodesangue` (`id`, `nome`, `gerente_cpf`, `created_at`, `updated_at`) VALUES
(1, 'Núcleo Reginal Hemominas', '123.456.826-80', '2019-11-27 03:00:00', '2019-11-27 03:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `cadastrodoador`
--

CREATE TABLE `cadastrodoador` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `doadorcpf` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bancocodigo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `doacao`
--

CREATE TABLE `doacao` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sangue_tipo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Bsangue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Dcpf` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `doacao`
--

INSERT INTO `doacao` (`id`, `sangue_tipo`, `Bsangue`, `Dcpf`, `created_at`, `updated_at`) VALUES
(1, 'A+', '1', '13774282650', '2019-11-27 03:00:00', '2019-11-27 03:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `doadores`
--

CREATE TABLE `doadores` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `data_nascimento` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `d_cpf` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `d_endereco` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `d_telefone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `d_peso` double NOT NULL,
  `d_sexo` enum('M','F') COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipo_sangue` enum('A+','B+','O+','AB+','A-','B-','O-','AB-') COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `doadores`
--

INSERT INTO `doadores` (`id`, `name`, `data_nascimento`, `d_cpf`, `d_endereco`, `d_telefone`, `email`, `email_verified_at`, `password`, `d_peso`, `d_sexo`, `tipo_sangue`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Livany Nunes', '2019-11-29 02:05:15', '13774282650', 'Av. José Antônio, n62', '(31)9 9999-9989', 'doador@doador.com', '2019-11-27 04:18:00', '$2y$10$L1nwU/K89aEYwAmlM5rRg.aZRPmLXxO/es34qMoSQp5VyBNFlWI22', 60, 'M', 'AB-', 'wm8QXks8NE9QNUuVpj8pPmQSheIK3VECyW5FbL0bIqOsfFaGcrxU1ECBT4uP', '2019-11-27 04:18:00', '2019-11-28 03:56:26'),
(2, 'Anna', '2019-11-28 07:51:21', '13556772396', 'Rua José do coco, n 50', '31956787758', 'anna@doe.org', '2019-11-28 03:00:00', '$2y$10$NxZ51TzKnVWmbcgkZ8uZDOKWr1hWWD35P1U8ZVh94XlwyjkNZ7cxa', 60, 'F', 'B+', NULL, '2019-11-28 03:00:00', '2019-11-28 03:00:00'),
(4, 'Rafa teste', '1997-10-21 03:00:00', '145648685599', 'Rua josé antonio vou ser exlcuido', '318584654965', 'Rafa@doei.org', NULL, '$2y$10$CjdHVZFYtCSFvvEkpG.SQuZdpaMbFMA6w62sV7XTvwdTLtxljLhYa', 56, 'M', 'O+', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
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
-- Table structure for table `localbanco`
--

CREATE TABLE `localbanco` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Bnumero` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Blocal` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `localbanco`
--

INSERT INTO `localbanco` (`id`, `Bnumero`, `Blocal`, `created_at`, `updated_at`) VALUES
(1, '1', 'Avenida Doutor Renato Azeredo, R. Dante Lanza, 3170, MG', '2019-11-28 08:00:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2019_08_19_000000_create_failed_jobs_table', 1),
(2, '2019_11_20_213709_create_doadores_table', 1),
(3, '2019_11_25_233050_create_bancodesangue_table', 1),
(4, '2019_11_25_234057_create_doacao_table', 1),
(5, '2019_11_25_234808_create_cadastrodoador_table', 1),
(6, '2019_11_25_235138_create_localbanco_table', 1),
(7, '2019_11_26_000000_create_users_table', 1),
(8, '2019_11_26_100000_create_password_resets_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('livanynunes@outlook.com', '$2y$10$ZHyxsuV.N0xOPVPk519H9ehxhCAuHyY6l4fda7AyAxlmLPiwlYVmy', '2019-11-28 05:30:33');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_cpf` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_telefone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `user_cpf`, `user_telefone`) VALUES
(3, 'Admin Admin', 'admin@material.com', '2019-11-27 04:18:00', '$2y$10$L1nwU/K89aEYwAmlM5rRg.aZRPmLXxO/es34qMoSQp5VyBNFlWI22', NULL, '2019-11-27 04:18:00', '2019-11-29 02:01:25', '123.456.826-80', '(31)9 9999-9998');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bancodesangue`
--
ALTER TABLE `bancodesangue`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cadastrodoador`
--
ALTER TABLE `cadastrodoador`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doacao`
--
ALTER TABLE `doacao`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doadores`
--
ALTER TABLE `doadores`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `doadores_email_unique` (`email`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `localbanco`
--
ALTER TABLE `localbanco`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bancodesangue`
--
ALTER TABLE `bancodesangue`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cadastrodoador`
--
ALTER TABLE `cadastrodoador`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `doacao`
--
ALTER TABLE `doacao`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `doadores`
--
ALTER TABLE `doadores`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `localbanco`
--
ALTER TABLE `localbanco`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
