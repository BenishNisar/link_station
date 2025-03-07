-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 07, 2025 at 06:34 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `link_station`
--

-- --------------------------------------------------------

--
-- Table structure for table `app_dev`
--

CREATE TABLE `app_dev` (
  `id` int(11) NOT NULL,
  `title` varchar(800) NOT NULL,
  `descripation` varchar(900) NOT NULL,
  `img` varchar(900) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `app_dev`
--

INSERT INTO `app_dev` (`id`, `title`, `descripation`, `img`, `created_at`, `updated_at`) VALUES
(1, 'APP Development', 'Get your brand on your customer’s fingertips with interactive responsive apps by Links Station. Your app enables your customers to connect with your business on an interactive level. You can use your app to increase your brand recognition, post special deals, collect orders & much more.\r\nOur App development team experts can help you in growing your brand through your APP and make your brand a center mark in the market as fast as possible.\r\n\r\nIf your APP is already built but isn’t performing to expectations, we can perform a detailed audit and work with you to improve APP architecture, design, and responsiveness.', 'Dashboard_assets/1741164212_mobile.jpg', '2025-03-04 14:37:24', '2025-03-05 16:43:32'),
(2, 'workings', 'Quia ullam qui in hi', 'Dashboard_assets/1741161129_weboctane.png', '2025-03-05 15:52:09', '2025-03-05 15:52:23');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(300) NOT NULL,
  `email` varchar(900) NOT NULL,
  `message` varchar(400) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `message`, `updated_at`, `created_at`) VALUES
(1, 'work', 'hepitu@mailinator.com', 'Nostrum anim recusan', '2025-03-03 16:03:34', '2025-03-03 16:00:49'),
(2, 'Darryl Conrad', 'garo@mailinator.com', 'Autem qui quas ipsam', '2025-03-06 13:37:04', '2025-03-06 13:37:04');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `title` varchar(900) NOT NULL,
  `descripation` varchar(900) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `img` varchar(900) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `title`, `descripation`, `created_at`, `updated_at`, `img`) VALUES
(1, 'Customer Liaison', 'Interacting with customers Handling customer queries and complaints Gathering customer feedback.', '2025-03-04 16:54:47', '2025-03-05 18:08:04', 'Dashboard_assets/1741169284_customer.jpg'),
(2, 'tesytt', 'tewett', '2025-03-04 16:57:02', '2025-03-04 16:57:02', 'Dashboard_assets/1741078622_gitl.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `digital_market`
--

CREATE TABLE `digital_market` (
  `id` int(11) NOT NULL,
  `title` varchar(800) NOT NULL,
  `descripation` varchar(2000) NOT NULL,
  `img` varchar(900) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `digital_market`
--

INSERT INTO `digital_market` (`id`, `title`, `descripation`, `img`, `created_at`, `updated_at`) VALUES
(1, 'Digital Marketing', 'Digital marketing services provide businesses of all sizes with an opportunity to market their brand 24/7 at a low cost. From startups to medium-sized enterprises to multiple-location companies, a digital marketing company helps you expand your niche market reach to offer goods and services to your target customers, irrespective of time differences or location.\r\n\r\n\r\nSocial Media has changed how brands communicate with their audiences forever. Whether your business is a B2B or B2C brand, social media is a powerful way to build brand awareness, build a positive image, and drive lead generation. We specialize in strategic social media campaigns that focus on building and protecting a positive brand image, creating loyalty among fans, and driving new leads for your business.', 'Dashboard_assets/1741164624_digital.png', '2025-03-04 15:06:49', '2025-03-05 16:50:24');

-- --------------------------------------------------------

--
-- Table structure for table `office_details`
--

CREATE TABLE `office_details` (
  `id` int(11) NOT NULL,
  `location` varchar(800) NOT NULL,
  `email` varchar(599) NOT NULL,
  `contact` varchar(500) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `office_details`
--

INSERT INTO `office_details` (`id`, `location`, `email`, `contact`, `updated_at`, `created_at`) VALUES
(1, '14th and 15th floor ,BRR Tower, I.I Chundrigar Road Karachi', 'contact@linksstation.com.pk', '021 32640403', '2025-03-05 16:11:50', '2025-03-05 15:22:58');

-- --------------------------------------------------------

--
-- Table structure for table `package_det`
--

CREATE TABLE `package_det` (
  `id` int(11) NOT NULL,
  `title` varchar(900) NOT NULL,
  `descripation` varchar(900) NOT NULL,
  `img` varchar(900) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `package_det`
--

INSERT INTO `package_det` (`id`, `title`, `descripation`, `img`, `created_at`, `updated_at`) VALUES
(1, 'Packaging Designing', 'This is the purpose of packaging. Packaging, when done correctly and creatively, is ultimately what sells your product. It’s more than just putting your logo on a package or coming up with a cool label or sticker. It draws attention, sends a message, and makes consumers feel a certain way.\r\n\r\nPackaging is a form of branding and knowing how to make your product stand out amongst all the others on the shelves can be hard, so take a look at these 50 creative and unique packaging examples and tips to draw inspiration and learn how to make your packaging appeal to the masses.', 'Dashboard_assets/1741163648_graphic.jpg', '2025-03-04 13:59:47', '2025-03-05 16:34:08');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id` int(11) NOT NULL,
  `role_name` varchar(800) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id`, `role_name`, `created_at`, `updated_at`) VALUES
(1, 'admins', '2025-03-03 15:08:44', '2025-03-05 15:34:25'),
(2, 'user', '2025-03-03 15:09:41', '2025-03-03 15:09:41'),
(3, 'check', '2025-03-03 15:09:54', '2025-03-03 15:15:15');

-- --------------------------------------------------------

--
-- Table structure for table `seo`
--

CREATE TABLE `seo` (
  `id` int(11) NOT NULL,
  `title` varchar(800) NOT NULL,
  `descripation` varchar(900) NOT NULL,
  `img` varchar(900) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `seo`
--

INSERT INTO `seo` (`id`, `title`, `descripation`, `img`, `created_at`, `updated_at`) VALUES
(1, 'workings', 'Billions of webs browsing sessions begin with a search query every day. With more than a billion websites competing for the top spot in search results, it can be difficult to drive traffic to your site from search engines.\r\nAt Links Stations we specialize in an innovative approach to SEO that uses white-hat tactics to put your website at the top of your target audience’s searches.\r\n\r\nOur SEO services includes:', 'Dashboard_assets/1741168331_seo.png', '2025-03-04 15:34:26', '2025-03-05 17:52:11');

-- --------------------------------------------------------

--
-- Table structure for table `travel_doc`
--

CREATE TABLE `travel_doc` (
  `id` int(11) NOT NULL,
  `title` varchar(800) NOT NULL,
  `descripation` varchar(900) NOT NULL,
  `img` varchar(900) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `travel_doc`
--

INSERT INTO `travel_doc` (`id`, `title`, `descripation`, `img`, `created_at`, `updated_at`) VALUES
(1, 'Travel Documentation', 'We provide all types of travel documentation which includes tickets and visas. We also provide customized travel packages.', 'Dashboard_assets/1741169241_travel.jpg', '2025-03-04 15:55:17', '2025-03-05 18:07:21');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstname` varchar(300) NOT NULL,
  `email` varchar(900) NOT NULL,
  `password` text NOT NULL,
  `gender` enum('male','female','other','') NOT NULL,
  `city` varchar(400) NOT NULL,
  `country` varchar(400) NOT NULL,
  `zip_code` varchar(900) NOT NULL,
  `role_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `organization` varchar(900) NOT NULL,
  `profile_img` varchar(900) NOT NULL,
  `lastname` varchar(900) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `email`, `password`, `gender`, `city`, `country`, `zip_code`, `role_id`, `created_at`, `updated_at`, `organization`, `profile_img`, `lastname`) VALUES
(1, 'web', 'weboctane@gmail.com', '$2y$10$xJbdshHmXBO0xjUUHdtOP.J0BjDgVd1PqEHLJoVY8LeD1d5sBuO.K', 'female', 'karachi', 'Pakistan', '07557', 1, '2025-03-01 09:26:32', '2025-03-03 16:07:33', 'https://weboctane.tech/', 'assets/profile_images/1740989253_weboctane.png', 'octane'),
(2, 'new', 'kurywab@mailinator.com', '$2y$10$G0vA2wDPlqV88B0JUfQuV.iZsmeuhYpQqopUNM0QBWMlSfEMScLaG', 'male', 'Culpa illo quis magn', 'Anim sint esse min', '30560', 2, '2025-03-03 13:57:15', '2025-03-06 12:39:06', 'Kelley Alston Plc', 'assets/profile_images/1740981435_18.jpg', 'Meadows'),
(3, 'Bushra', 'bushra@gmail.com', '$2y$10$tLcAd3Tt0.QTOIiruv5C9eqvvOGF.hDCnB3dvxMEhexH8DDWNQuAy', 'female', 'lahore', 'Pakistan', '999', 3, '2025-03-03 14:27:15', '2025-03-06 12:39:16', 'https://weboctane.tech/', 'assets/profile_images/1740983235_gitl.jpg', 'khan'),
(5, 'Katelyn', 'sadewycixo@mailinator.com', '$2y$10$YF5T2QhkNEtOeWK8YplTm.HBP9vIB4cGbzAJEruA2gBphMrz2575K', 'male', 'Vero possimus atque', 'Do facilis aut disti', '81139', 2, '2025-03-06 12:39:46', '2025-03-06 12:39:46', 'Mcfarland and Gonzalez Plc', 'assets/profile_images/1741235985_travel.jpg', 'Ellison'),
(6, 'Maisie', 'tuxiqefyh@mailinator.com', '$2y$10$RGoLvigzP6KgNST.ViszTu.OWJdRb/BfLD7Sa4tBJs/edKISlCGcu', 'female', 'Perferendis id totam', 'Quidem odio officia', '75063', 2, '2025-03-06 12:42:46', '2025-03-06 12:42:46', 'Taylor Ball Traders', 'assets/profile_images/1741236166_graphic.jpg', 'Newton');

-- --------------------------------------------------------

--
-- Table structure for table `web_dev`
--

CREATE TABLE `web_dev` (
  `id` int(11) NOT NULL,
  `title` varchar(800) NOT NULL,
  `descripation` varchar(900) NOT NULL,
  `img` varchar(900) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `web_dev`
--

INSERT INTO `web_dev` (`id`, `title`, `descripation`, `img`, `created_at`, `updated_at`) VALUES
(1, 'Web Developmentessss', 'Your website is the center of your digital presence. It’s one of the few places on the internet where you can deliver your brand’s message free of distortion or distraction. Links Stations Web Development services are perfect for brands at any stage.\r\nOur web development team experts can help you in growing your brand through your websites and make your brand a center mark in the market as fast as possible.\r\n\r\nIf your website is already built but isn’t performing to expectations, we can perform a detailed audit and work with you to improve site architecture, design, and responsiveness.', 'Dashboard_assets/1741163092_webdesign.jpg', '2025-03-03 18:17:17', '2025-03-05 16:25:29');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `app_dev`
--
ALTER TABLE `app_dev`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `digital_market`
--
ALTER TABLE `digital_market`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `office_details`
--
ALTER TABLE `office_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `package_det`
--
ALTER TABLE `package_det`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seo`
--
ALTER TABLE `seo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `travel_doc`
--
ALTER TABLE `travel_doc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `web_dev`
--
ALTER TABLE `web_dev`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `app_dev`
--
ALTER TABLE `app_dev`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `digital_market`
--
ALTER TABLE `digital_market`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `office_details`
--
ALTER TABLE `office_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `package_det`
--
ALTER TABLE `package_det`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `seo`
--
ALTER TABLE `seo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `travel_doc`
--
ALTER TABLE `travel_doc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `web_dev`
--
ALTER TABLE `web_dev`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
