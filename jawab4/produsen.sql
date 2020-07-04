-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 04 juli 2020
-- Versi server: 127.0.0.1 -MariaDB
-- Versi PHP: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `produsen`
--
--menampilkan seluruh data produk beserta importir
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--
CREATE TABLE `produsen`.`produk_tb` ( 
	`id` INT NOT NULL AUTO_INCREMENT , 
	`name` VARCHAR(100) NOT NULL , 
	`importir_id` VARCHAR(100) NOT NULL , 
	`photo` VARCHAR(100) NOT NULL , 
	`qty` INT(100) NOT NULL , 
	`price` BIGINT NOT NULL , 
	PRIMARY KEY (`id`)) ENGINE = InnoDB;

-- --
-- Dumping data untuk tabel `produk`
--
INSERT INTO `produk_tb` (`id`, `name`, `importir_id`, `photo`, `qty`, `price`) 
    VALUES 
(NULL, 'CUBE', 'Singapur', 'cube.jpg', '20', '3500000'), 
(NULL, 'GIANT', 'Australia', 'giant.jpg', '12', '8400000'),
 (NULL, 'KONA', 'Amerika', 'kona.jpg', '18', '9250000'), 
 (NULL, 'MONTAIN', 'Brazil', 'montain.jpg', '12', '25600000');

​--
-- Struktur dari tabel `importir`
--
CREATE TABLE `produsen`.`importir_tb` (
 `id` INT NOT NULL AUTO_INCREMENT , 
 `name` VARCHAR(100) NOT NULL , 
 `addres` VARCHAR(100) NOT NULL , 
 `phone` INT(20) NOT NULL , 
 PRIMARY KEY (`id`)) ENGINE = InnoDB;

​-- --
-- Dumping data untuk tabel `importir`
--
INSERT INTO `importir_tb` (`id`, `name`, `addres`, `phone`) 
        VALUES 
        (NULL, 'PT.WARS', '52 Taruna Street, Bekasi', '02121145116'),
         (NULL, 'PT.ECO', 'Ten Ahmad Yani Street, Jakarta', '02123457645'),
          (NULL, 'PT.PLAZA', 'One Srigunting Raya Street, Bandung', '02112355423'),
           (NULL, 'PT.STAR', 'Two hundred seventy three Brigjend Slamet Riyadi Street, Solo', '02109123125');

​
-- menampilkan seuruh data produk berdasarkan importir tertentu
--
SELECT name,importir_id FROM produk_tb;
--output
--
--name	importir_id 	
--CUBE 	Singapur
--GIANT 	Australia
--KONA 	Amerika
--MONTAIN 	Brazil


