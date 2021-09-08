-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 01, 2021 at 06:20 AM
-- Server version: 5.7.35-log-cll-lve
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jindal_app`
--

--
-- Dumping data for table `application_applied`
--

INSERT INTO `application_applied` (`id`, `user_id`, `application_type_id`, `application_values`, `updated_at`, `created_at`) VALUES
(1, 29, 3, '{\"_token\":\"7owag8SMGBsYtsAqx3jDv9CSH1HHq1f2u9eAJwVJ\",\"token\":\"9bc2277240fad82f8fb40d95d22e4ee0\",\"money\":\"60\",\"first_name\":\"Ashutosh\",\"last_name\":\"Kumar\",\"birth_date\":\"2003-08-01\",\"email\":\"ashutosh2801@gmail.com\",\"phone\":\"+917905709069\",\"street_number\":\"101\",\"unit\":\"GR\",\"street_name\":\"Lolita Garden\",\"city\":\"Mississauga\",\"province\":\"9\",\"postal_code\":\"L5A3K7\",\"co_applicant\":\"Yes\",\"co_first_name\":\"ARJUN\",\"co_last_name\":\"SINGH\",\"co_birth_date\":\"2003-09-01\",\"co_email\":\"ashutosh2801@gmail.com\",\"co_phone\":\"+447905709069\",\"co_same_as\":\"on\",\"co_street_number\":\"101\",\"co_unit\":\"GR\",\"co_street_name\":\"Lolita Garden\",\"co_city\":\"Mississauga\",\"co_province\":\"9\",\"co_postal_code\":\"L5A3K7\",\"marital_status\":\"Married\",\"credit_agencies\":\"Yes\",\"same_as\":\"on\",\"property_street_number\":\"101\",\"property_unit\":\"GR\",\"property_street_name\":\"Lolita Garden\",\"property_city\":\"Mississauga\",\"property_province\":\"9\",\"property_postal_code\":\"L5A3K7\",\"property_value\":\"$5,000,000\",\"borrow_amount\":\"$300,000\",\"income_type\":\"Yes\",\"cash_amount\":\"$5,000\",\"investment_amount\":\"$0\",\"vehicle_value\":\"$0\",\"other\":\"$0\"}', '2021-08-31 21:07:01', '2021-08-31 21:07:01'),
(2, 29, 2, '{\"_token\":\"7owag8SMGBsYtsAqx3jDv9CSH1HHq1f2u9eAJwVJ\",\"token\":\"9bc2277240fad82f8fb40d95d22e4ee0\",\"money\":\"60\",\"first_name\":\"Ashutosh\",\"last_name\":\"Kumar\",\"birth_date\":\"2003-08-01\",\"email\":\"ashutosh2801@gmail.com\",\"phone\":\"+917905709069\",\"street_number\":\"101\",\"unit\":\"GR\",\"street_name\":\"Lolita Garden\",\"city\":\"Mississauga\",\"province\":\"9\",\"postal_code\":\"L5A3K7\",\"co_applicant\":\"Yes\",\"co_first_name\":\"ARJUN\",\"co_last_name\":\"SINGH\",\"co_birth_date\":\"2003-09-01\",\"co_email\":\"ashutosh2801@gmail.com\",\"co_phone\":\"+447905709069\",\"co_same_as\":\"on\",\"co_street_number\":\"101\",\"co_unit\":\"GR\",\"co_street_name\":\"Lolita Garden\",\"co_city\":\"Mississauga\",\"co_province\":\"9\",\"co_postal_code\":\"L5A3K7\",\"marital_status\":\"Married\",\"credit_agencies\":\"Yes\",\"same_as\":\"on\",\"property_street_number\":\"101\",\"property_unit\":\"GR\",\"property_street_name\":\"Lolita Garden\",\"property_city\":\"Mississauga\",\"property_province\":\"9\",\"property_postal_code\":\"L5A3K7\",\"property_value\":\"$5,000,000\",\"borrow_amount\":\"$300,000\",\"income_type\":\"Yes\",\"cash_amount\":\"$5,000\",\"investment_amount\":\"$0\",\"vehicle_value\":\"$0\",\"other\":\"$0\"}', '2021-09-01 13:19:10', '2021-09-01 13:19:10');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
