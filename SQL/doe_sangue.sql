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

DROP DATABASE doe_sangue;
CREATE DATABASE doe_sangue;
use doe_sangue;

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
(1, 'Núcleo Reginal Hemominas', '123.456.826-80', '2019-11-27 03:00:00', '2019-11-27 03:00:00'),
(2, 'VITA Hemoterapia', '135.567.723-96', '2019-11-27 03:00:00', '2019-11-27 03:00:00'),
(3, 'Cetebio de Minas Gerais', '514.134.287-54', '2019-11-27 03:00:00', '2019-11-27 03:00:00'),
(4, 'LM Controle de Qualidade em Imuno-hematologia', '422.335.041-27', '2019-11-27 03:00:00', '2019-11-27 03:00:00');

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
(1, 'Livany Nunes', '1995-02-22 02:05:15', '137.742.826-50', 'Av. José Antônio, n. 62', '(31) 9 9999-9989', 'doador@doador.com', '2019-11-27 04:18:00', '$2y$10$L1nwU/K89aEYwAmlM5rRg.aZRPmLXxO/es34qMoSQp5VyBNFlWI22', 60, 'F', 'AB-', 'wm8QXks8NE9QNUuVpj8pPmQSheIK3VECyW5FbL0bIqOsfFaGcrxU1ECBT4uP', '2019-11-27 04:18:00', '2019-11-28 03:56:26'),
(2, 'Anna Theresa', '1999-07-15 07:51:21', '135.567.723-96', 'Rua José do coco, n. 50', '(31) 9 5678-7758', 'anna@doe.org', '2019-11-28 03:00:00', '$2y$10$NxZ51TzKnVWmbcgkZ8uZDOKWr1hWWD35P1U8ZVh94XlwyjkNZ7cxa', 60, 'F', 'B+', NULL, '2019-11-28 03:00:00', '2019-11-28 03:00:00'),
(3, 'Rafaela Satler', '1998-10-21 03:00:00', '145.648.685-99', 'Rua Avulsa, n. 57', '(31) 9 3245-1228', 'rafa@doe.org', NULL, '$2y$10$CjdHVZFYtCSFvvEkpG.SQuZdpaMbFMA6w62sV7XTvwdTLtxljLhYa', 56, 'F', 'O+', NULL, NULL, NULL),
(4, 'Jorge Farias', '1982-07-15 02:05:15', '654.219.354-95', 'Rua Tirusbango Tirusbagus n. 1337', '(31) 9 23415-9989', 'jorj@doe.org', '2019-11-27 04:18:00', '$2y$10$L1nwU/K89aEYwAmlM5rRg.aZRPmLXxO/es34qMoSQp5VyBNFlWI22', 60, 'M', 'AB+', 'wm8QXks8NE9QNUuVpj8pPmQSheIK3VECyW5FbL0bIqOsfFaGcrxU1ECBT4uP', '2019-11-27 04:18:00', '2019-11-28 03:56:26'),
(5, 'Gabriel Barbosa', '1999-07-15 07:51:21', '436.354.159-37', 'Rua Zero menos um, n. 18', '(31) 9 5678-7758', 'gabigol@doe.org', '2019-11-28 03:00:00', '$2y$10$NxZ51TzKnVWmbcgkZ8uZDOKWr1hWWD35P1U8ZVh94XlwyjkNZ7cxa', 60, 'M', 'B-', NULL, '2019-11-28 03:00:00', '2019-11-28 03:00:00'),
(6, 'Michael Jackson', '1998-10-21 03:00:00', '921.657.952-88', 'Rua Avulsa, n. 231', '(31) 9 3245-1228', 'theonemj@doe.org', NULL, '$2y$10$CjdHVZFYtCSFvvEkpG.SQuZdpaMbFMA6w62sV7XTvwdTLtxljLhYa', 56, 'M', 'O-', NULL, NULL, NULL);

INSERT INTO `doadores` (`id`,`name`,`data_nascimento`,`d_cpf`,`d_endereco`,`d_telefone`,`email`,`email_verified_at`,`password`,`d_peso`,`d_sexo`,`tipo_sangue`,`remember_token`,`created_at`,`updated_at`) VALUES 
(7,"Moses Hendricks","2019-02-17 01:34:36","328.550.569-93","Ap #331-2750 Cras Road","(31) 9-7005-6393","sociis.natoque.penatibus@senectus.edu",NULL,"$2y$10$CjdHVZFYtCSFvvEkpG.SQuZdpaMbFMA6w62sV7XTvwdTLtxljLhYa",84,"M","A+",NULL,NULL,NULL),
(8,"Nero Emerson","2019-12-04 20:29:16","153.694.852-75","5994 Aliquam Street","(31) 9-5007-3873","ipsum.Curabitur@diam.org",NULL,"$2y$10$CjdHVZFYtCSFvvEkpG.SQuZdpaMbFMA6w62sV7XTvwdTLtxljLhYa",82,"F","AB+",NULL,NULL,NULL),
(9,"Virginia Wise","2019-12-30 13:43:54","848.734.317-19","P.O. Box 265, 3194 A Road","(31) 9-5691-3292","Nullam.enim@Aliquam.ca",NULL,"$2y$10$CjdHVZFYtCSFvvEkpG.SQuZdpaMbFMA6w62sV7XTvwdTLtxljLhYa",80,"M","AB+",NULL,NULL,NULL),
(10,"Brock Buckley","2020-01-10 08:32:26","826.183.802-15","Ap #669-8395 Quisque Rd.","(31) 9-1350-2300","Quisque.varius@orci.edu",NULL,"$2y$10$CjdHVZFYtCSFvvEkpG.SQuZdpaMbFMA6w62sV7XTvwdTLtxljLhYa",74,"M","B-",NULL,NULL,NULL),
(11,"Giselle Cameron","2020-08-04 18:04:01","421.760.775-04","994-7548 Eleifend St.","(31) 9-4631-8397","lacinia@Quisquevarius.org",NULL,"$2y$10$CjdHVZFYtCSFvvEkpG.SQuZdpaMbFMA6w62sV7XTvwdTLtxljLhYa",101,"M","B-",NULL,NULL,NULL),
(12,"Eden Wallace","2020-07-28 21:04:20","944.504.480-06","111-7734 Enim. Rd.","(31) 9-7857-3022","lacinia.at.iaculis@egetmagna.co.uk",NULL,"$2y$10$CjdHVZFYtCSFvvEkpG.SQuZdpaMbFMA6w62sV7XTvwdTLtxljLhYa",120,"M","A-",NULL,NULL,NULL),
(13,"Raja Adkins","2019-03-31 11:05:51","162.633.933-35","167-2497 Urna Ave","(31) 9-5636-8220","est.mauris.rhoncus@Vivamusnibhdolor.ca",NULL,"$2y$10$CjdHVZFYtCSFvvEkpG.SQuZdpaMbFMA6w62sV7XTvwdTLtxljLhYa",95,"M","A-",NULL,NULL,NULL),
(14,"Audrey Hernandez","2019-02-15 05:42:44","546.487.356-25","3894 Massa. Rd.","(31) 9-1514-1053","gravida.Praesent@Proineget.org",NULL,"$2y$10$CjdHVZFYtCSFvvEkpG.SQuZdpaMbFMA6w62sV7XTvwdTLtxljLhYa",91,"M","B-",NULL,NULL,NULL),
(15,"Portia Knapp","2019-08-30 09:57:43","486.017.045-81","Ap #995-6279 Phasellus St.","(31) 9-9060-4865","lorem.auctor@orciluctuset.org",NULL,"$2y$10$CjdHVZFYtCSFvvEkpG.SQuZdpaMbFMA6w62sV7XTvwdTLtxljLhYa",63,"M","B+",NULL,NULL,NULL),
(16,"Illiana Keller","2020-07-28 04:38:51","592.231.598-65","P.O. Box 442, 8465 Volutpat. Road","(31) 9-5232-9587","arcu.Morbi@Sedeueros.edu",NULL,"$2y$10$CjdHVZFYtCSFvvEkpG.SQuZdpaMbFMA6w62sV7XTvwdTLtxljLhYa",88,"F","O-",NULL,NULL,NULL),
(17,"Camden Mcgowan","2019-03-29 08:21:01","419.148.951-85","Ap #655-3491 Libero. Rd.","(31) 9-9372-7677","justo@necleoMorbi.com",NULL,"$2y$10$CjdHVZFYtCSFvvEkpG.SQuZdpaMbFMA6w62sV7XTvwdTLtxljLhYa",56,"F","AB+",NULL,NULL,NULL),
(18,"Malcolm Wall","2019-04-26 02:52:25","422.335.041-27","5156 Porttitor Rd.","(31) 9-4294-9619","Mauris.magna.Duis@ligula.co.uk",NULL,"$2y$10$CjdHVZFYtCSFvvEkpG.SQuZdpaMbFMA6w62sV7XTvwdTLtxljLhYa",100,"M","B-",NULL,NULL,NULL),
(19,"Sigourney Turner","2020-09-11 13:34:07","231.476.287-87","822-3115 Feugiat Street","(31) 9-3793-3963","nonummy.ac@mauriselitdictum.net",NULL,"$2y$10$CjdHVZFYtCSFvvEkpG.SQuZdpaMbFMA6w62sV7XTvwdTLtxljLhYa",115,"M","O-",NULL,NULL,NULL),
(20,"Naida Slater","2020-04-30 10:44:36","616.890.387-99","961-7296 Consectetuer St.","(31) 9-1122-6085","vehicula.et.rutrum@rhoncus.com",NULL,"$2y$10$CjdHVZFYtCSFvvEkpG.SQuZdpaMbFMA6w62sV7XTvwdTLtxljLhYa",123,"F","A+",NULL,NULL,NULL),
(21,"Damon Brewer","2019-09-01 22:53:47","642.520.833-38","598-7097 Est Street","(31) 9-4954-9062","purus.Maecenas@laoreetlectusquis.org",NULL,"$2y$10$CjdHVZFYtCSFvvEkpG.SQuZdpaMbFMA6w62sV7XTvwdTLtxljLhYa",61,"M","B+",NULL,NULL,NULL),
(22,"Rashad Holden","2019-05-29 18:12:18","262.546.229-98","Ap #525-4814 Eu St.","(31) 9-8313-2200","purus@nequeMorbi.com",NULL,"$2y$10$CjdHVZFYtCSFvvEkpG.SQuZdpaMbFMA6w62sV7XTvwdTLtxljLhYa",114,"F","B-",NULL,NULL,NULL),
(23,"Sylvia Berger","2020-05-13 09:41:23","365.896.062-00","7753 Proin Ave","(31) 9-6995-8872","Nam.porttitor@pedeCrasvulputate.com",NULL,"$2y$10$CjdHVZFYtCSFvvEkpG.SQuZdpaMbFMA6w62sV7XTvwdTLtxljLhYa",57,"F","AB-",NULL,NULL,NULL),
(24,"Mollie Leon","2019-03-12 18:51:12","215.468.228-60","6937 Sagittis. St.","(31) 9-7340-5705","tortor@acmattis.org",NULL,"$2y$10$CjdHVZFYtCSFvvEkpG.SQuZdpaMbFMA6w62sV7XTvwdTLtxljLhYa",108,"M","O-",NULL,NULL,NULL),
(25,"Wallace Greer","2019-01-20 19:41:06","514.134.287-54","969-6694 Tristique Road","(31) 9-6149-3306","vel@hendreritneque.com",NULL,"$2y$10$CjdHVZFYtCSFvvEkpG.SQuZdpaMbFMA6w62sV7XTvwdTLtxljLhYa",94,"F","O-",NULL,NULL,NULL),
(26,"Kellie Austin","2020-04-16 07:23:56","781.123.025-96","P.O. Box 980, 9099 Porttitor Av.","(31) 9-5798-0505","Aliquam@ultricesposuere.org",NULL,"$2y$10$CjdHVZFYtCSFvvEkpG.SQuZdpaMbFMA6w62sV7XTvwdTLtxljLhYa",100,"M","AB-",NULL,NULL,NULL),
(27,"Craig Haley","2019-02-07 20:26:13","128.450.828-51","930-8756 Aliquet Av.","(31) 9-3515-2601","tempor.bibendum.Donec@felisullamcorper.edu",NULL,"$2y$10$CjdHVZFYtCSFvvEkpG.SQuZdpaMbFMA6w62sV7XTvwdTLtxljLhYa",54,"F","AB+",NULL,NULL,NULL),
(28,"Zeph Ward","2020-04-12 21:00:20","632.321.070-36","6100 Vivamus Rd.","(31) 9-7925-8693","Phasellus.dolor@infelisNulla.net",NULL,"$2y$10$CjdHVZFYtCSFvvEkpG.SQuZdpaMbFMA6w62sV7XTvwdTLtxljLhYa",75,"M","O-",NULL,NULL,NULL),
(29,"Coby Lloyd","2020-01-14 04:08:33","475.712.627-12","Ap #264-5219 Nonummy St.","(31) 9-6519-2664","libero.Morbi.accumsan@Curabitursed.com",NULL,"$2y$10$CjdHVZFYtCSFvvEkpG.SQuZdpaMbFMA6w62sV7XTvwdTLtxljLhYa",114,"M","O-",NULL,NULL,NULL),
(30,"Lilah Abbott","2020-08-19 22:41:59","667.821.195-28","Ap #168-499 Praesent St.","(31) 9-4134-9909","arcu.Vivamus.sit@Aliquamerat.edu",NULL,"$2y$10$CjdHVZFYtCSFvvEkpG.SQuZdpaMbFMA6w62sV7XTvwdTLtxljLhYa",117,"M","AB-",NULL,NULL,NULL),
(31,"Freya Albert","2019-08-24 12:28:10","963.578.825-85","302-1617 Imperdiet Ave","(31) 9-7008-3291","Fusce.dolor@ipsumdolorsit.ca",NULL,"$2y$10$CjdHVZFYtCSFvvEkpG.SQuZdpaMbFMA6w62sV7XTvwdTLtxljLhYa",67,"M","B-",NULL,NULL,NULL),
(32,"Thor Chase","2019-03-18 04:30:05","478.269.166-15","P.O. Box 234, 8985 Vitae Rd.","(31) 9-1180-3654","scelerisque.sed.sapien@adipiscingelit.net",NULL,"$2y$10$CjdHVZFYtCSFvvEkpG.SQuZdpaMbFMA6w62sV7XTvwdTLtxljLhYa",56,"M","A-",NULL,NULL,NULL),
(33,"Idona Mercer","2018-12-01 23:02:19","718.545.312-71","1190 Ante. St.","(31) 9-5868-0172","sit.amet@dolorelit.com",NULL,"$2y$10$CjdHVZFYtCSFvvEkpG.SQuZdpaMbFMA6w62sV7XTvwdTLtxljLhYa",124,"M","AB+",NULL,NULL,NULL),
(34,"Alika Kerr","2018-12-20 17:25:54","783.843.247-27","P.O. Box 809, 2546 Eget, Street","(31) 9-7322-8120","sit.amet@ac.org",NULL,"$2y$10$CjdHVZFYtCSFvvEkpG.SQuZdpaMbFMA6w62sV7XTvwdTLtxljLhYa",56,"M","AB+",NULL,NULL,NULL);

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
(1, 'AB-', '1', '137.742.826-50', '2019-11-27 03:00:00', '2019-11-27 03:00:00'),
(2, 'B+', '2', '135.567.723-96', '2019-11-27 03:00:00', '2019-11-27 03:00:00'),
(3, 'B+', '4', '145.648.685-99', '2019-11-27 03:00:00', '2019-11-27 03:00:00'),
(4, 'O+', '4', '145.648.685-9', '2019-11-27 03:00:00', '2019-11-27 03:00:00'),
(5, 'AB+', '1', '654.219.354-95', '2019-11-27 03:00:00', '2019-11-27 03:00:00'),
(6, 'B-', '3', '436.354.159-37', '2019-11-27 03:00:00', '2019-11-27 03:00:00'),
(7, 'O-', '3', '921.657.952-88', '2019-11-27 03:00:00', '2019-11-27 03:00:00'),
(8, 'A+', '1', '328.550.569-93', '2019-11-27 03:00:00', '2019-11-27 03:00:00'),
(9, 'AB+', '1', '153.694.852-75', '2019-11-27 03:00:00', '2019-11-27 03:00:00'),
(10, 'AB+', '1', '848.734.317-19', '2019-11-27 03:00:00', '2019-11-27 03:00:00'),
(11, 'B-', '2', '826.183.802-15', '2019-11-27 03:00:00', '2019-11-27 03:00:00'),
(12, 'B-', '4', '421.760.775-04', '2019-11-27 03:00:00', '2019-11-27 03:00:00'),
(13, 'A-', '4', '944.504.480-06', '2019-11-27 03:00:00', '2019-11-27 03:00:00'),
(14, 'A-', '1', '162.633.933-35', '2019-11-27 03:00:00', '2019-11-27 03:00:00'),
(15, 'B-', '2', '546.487.356-25', '2019-11-27 03:00:00', '2019-11-27 03:00:00'),
(16, 'B+', '3', '486.017.045-81', '2019-11-27 03:00:00', '2019-11-27 03:00:00'),
(17, 'O-', '1', '592.231.598-65', '2019-11-27 03:00:00', '2019-11-27 03:00:00'),
(18, 'AB+', '1', '419.148.951-85', '2019-11-27 03:00:00', '2019-11-27 03:00:00'),
(19, 'B-', '1', '422.335.041-27', '2019-11-27 03:00:00', '2019-11-27 03:00:00'),
(20, 'O-', '3', '231.476.287-87', '2019-11-27 03:00:00', '2019-11-27 03:00:00'),
(21, 'A+', '2', '616.890.387-99', '2019-11-27 03:00:00', '2019-11-27 03:00:00'),
(22, 'B+', '1', '642.520.833-38', '2019-11-27 03:00:00', '2019-11-27 03:00:00'),
(23, 'B-', '3', '262.546.229-98', '2019-11-27 03:00:00', '2019-11-27 03:00:00'),
(24, 'AB-', '1', '365.896.062-00', '2019-11-27 03:00:00', '2019-11-27 03:00:00'),
(25, 'O-', '1', '215.468.228-60', '2019-11-27 03:00:00', '2019-11-27 03:00:00'),
(26, 'O-', '2', '514.134.287-54', '2019-11-27 03:00:00', '2019-11-27 03:00:00'),
(27, 'AB-', '1', '781.123.025-96', '2019-11-27 03:00:00', '2019-11-27 03:00:00'),
(28, 'AB+', '3', '128.450.828-51', '2019-11-27 03:00:00', '2019-11-27 03:00:00'),
(29, 'O-', '1', '632.321.070-36', '2019-11-27 03:00:00', '2019-11-27 03:00:00'),
(30, 'O-', '1', '475.712.627-12', '2019-11-27 03:00:00', '2019-11-27 03:00:00'),
(31, 'AB-', '1', '667.821.195-28', '2019-11-27 03:00:00', '2019-11-27 03:00:00'),
(32, 'B-', '1', '963.578.825-85', '2019-11-27 03:00:00', '2019-11-27 03:00:00'),
(33, 'A-', '2', '478.269.166-15', '2019-11-27 03:00:00', '2019-11-27 03:00:00'),
(34, 'AB+', '1', '718.545.312-71', '2019-11-27 03:00:00', '2019-11-27 03:00:00'),
(35, 'AB+', '4', '783.843.247-27', '2019-11-27 03:00:00', '2019-11-27 03:00:00'),
(36, 'B-', '1', '826.183.802-15', '2019-11-27 03:00:00', '2019-11-27 03:00:00'),
(37, 'B-', '3', '421.760.775-04', '2019-11-27 03:00:00', '2019-11-27 03:00:00'),
(38, 'B+', '2', '642.520.833-38', '2019-11-27 03:00:00', '2019-11-27 03:00:00'),
(39, 'B+', '1', '642.520.833-38', '2019-11-27 03:00:00', '2019-11-27 03:00:00'),
(40, 'AB-', '4', '781.123.025-96', '2019-11-27 03:00:00', '2019-11-27 03:00:00'),
(41, 'O-', '1', '632.321.070-36', '2019-11-27 03:00:00', '2019-11-27 03:00:00'),
(42, 'O-', '1', '632.321.070-36', '2019-11-27 03:00:00', '2019-11-27 03:00:00'),
(43, 'B+', '3', '135.567.723-96', '2019-11-27 03:00:00', '2019-11-27 03:00:00'),
(44, 'B+', '3', '135.567.723-96', '2019-11-27 03:00:00', '2019-11-27 03:00:00'),
(45, 'B+', '1', '135.567.723-96', '2019-11-27 03:00:00', '2019-11-27 03:00:00'),
(46, 'AB-', '1', '137.742.826-50', '2019-11-27 03:00:00', '2019-11-27 03:00:00'),
(47, 'AB-', '4', '137.742.826-50', '2019-11-27 03:00:00', '2019-11-27 03:00:00'),
(48, 'AB-', '4', '137.742.826-50', '2019-11-27 03:00:00', '2019-11-27 03:00:00');

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
(1, '1', 'Avenida Doutor Renato Azeredo, R. Dante Lanza, 3170, MG', '2019-11-28 08:00:00', NULL),
(2, '2', 'Rua Juiz de Fora, 941 - Barro Preto, Belo Horizonte - MG', '2019-11-28 08:00:00', NULL),
(3, '3', 'R. das Goiabeiras, 779 - Distrito Industrial Genesco Aparecido De Oliveira, Lagoa Santa - MG', '2019-11-28 08:00:00', NULL),
(4, '4', 'Rua dos Otoni, 296 / 202 - Santa Efigênia, Belo Horizonte - MG', '2019-11-28 08:00:00', NULL);

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
(1, 'Livany Nunes', 'doador@doador.com', '2019-11-27 04:18:00', '$2y$10$L1nwU/K89aEYwAmlM5rRg.aZRPmLXxO/es34qMoSQp5VyBNFlWI22', NULL, '2019-11-27 04:18:00', '2019-11-29 02:01:25', '137.742.826-50', '(31) 9 9999-9989'),
(2, 'Anna Theresa', 'anna@doe.org', '2019-11-27 04:18:00', '$2y$10$L1nwU/K89aEYwAmlM5rRg.aZRPmLXxO/es34qMoSQp5VyBNFlWI22', NULL, '2019-11-27 04:18:00', '2019-11-29 02:01:25', '135.567.723-96', '(31) 9 5678-7758'),
(3, 'Virginia Wise', 'Nullam.enim@Aliquam.ca', '2019-11-27 04:18:00', '$2y$10$L1nwU/K89aEYwAmlM5rRg.aZRPmLXxO/es34qMoSQp5VyBNFlWI22', NULL, '2019-11-27 04:18:00', '2019-11-29 02:01:25', '848.734.317-19', '(31) 9-5691-3292'),
(4, 'Malcolm Wall', 'Mauris.magna.Duis@ligula.co.uk', '2019-11-27 04:18:00', '$2y$10$L1nwU/K89aEYwAmlM5rRg.aZRPmLXxO/es34qMoSQp5VyBNFlWI22', NULL, '2019-11-27 04:18:00', '2019-11-29 02:01:25', '422.335.041-27', '(31) 9-4294-9619'),
(5, 'Wallace Greer', 'vel@hendreritneque.com', '2019-11-27 04:18:00', '$2y$10$L1nwU/K89aEYwAmlM5rRg.aZRPmLXxO/es34qMoSQp5VyBNFlWI22', NULL, '2019-11-27 04:18:00', '2019-11-29 02:01:25', '514.134.287-54', '(31) 9-6149-3306');

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cadastrodoador`
--
ALTER TABLE `cadastrodoador`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `doacao`
--
ALTER TABLE `doacao`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `doadores`
--
ALTER TABLE `doadores`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `localbanco`
--
ALTER TABLE `localbanco`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
