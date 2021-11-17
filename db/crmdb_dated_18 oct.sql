-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 18, 2021 at 08:17 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crmdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `ctg_id` int(11) NOT NULL,
  `category_name` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_by` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`ctg_id`, `category_name`, `created_at`, `updated_by`) VALUES
(19, 'Helper', '2021-10-12 01:34:02', '0000-00-00 00:00:00'),
(18, 'Trademan', '2021-10-12 01:19:09', '0000-00-00 00:00:00'),
(17, 'Staff', '2021-10-12 01:18:41', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `cnt_id` int(11) NOT NULL,
  `cnt_no` int(200) NOT NULL,
  `clint_company_name` varchar(250) NOT NULL,
  `owner_name` varchar(250) NOT NULL,
  `owner_cellno` varchar(250) NOT NULL,
  `owner_email` varchar(250) NOT NULL,
  `contact_person_name` varchar(250) NOT NULL,
  `contact_person_cellno` varchar(250) NOT NULL,
  `contact_person_email` varchar(250) NOT NULL,
  `office_no` varchar(250) NOT NULL,
  `office_address` longtext NOT NULL,
  `office_email` varchar(250) NOT NULL,
  `vatno` varchar(250) NOT NULL,
  `company_address` longtext NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_by` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`cnt_id`, `cnt_no`, `clint_company_name`, `owner_name`, `owner_cellno`, `owner_email`, `contact_person_name`, `contact_person_cellno`, `contact_person_email`, `office_no`, `office_address`, `office_email`, `vatno`, `company_address`, `created_at`, `updated_by`) VALUES
(1, 1, 'Logicon Techn', 'Tushar', '4', 'bhushan@gmail.com', '4', '4', 'bhushan@gmail.com', '4', '4', 'bhuhsna@bhushan.com', '4', '4', '2021-10-15 00:32:10', '0000-00-00 00:00:00'),
(2, 2, 'Siddhi Software', 'bhushan salunkhe', '9595888075', 'B@gmail.com', 'fasdfas', '95857445585', 'Bhuh@gmaoi.com', '44544', 'fsdf', 'Buus@gmail.com', '4454', 'fsdaf', '2021-10-14 23:33:34', '0000-00-00 00:00:00'),
(3, 3, 'Vaneera Software', 'Bhavesh', 'afsdf', 'bhusha@gmail.co', 'fasd', '99', 'fsad@gmail.com', '4445', 'fsadffsda', 'bhushan@gmail.com', '555', 'fdsf', '2021-10-14 05:50:05', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `crm_invoice`
--

CREATE TABLE `crm_invoice` (
  `inv_id` int(11) NOT NULL,
  `inv_no` bigint(20) NOT NULL,
  `inv_date` varchar(250) NOT NULL,
  `inv_to` varchar(250) NOT NULL,
  `phone` varchar(250) NOT NULL,
  `cell` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `ac_no` varchar(250) NOT NULL,
  `ac_title` varchar(250) NOT NULL,
  `branch_name` varchar(250) NOT NULL,
  `created_at` datetime NOT NULL,
  `created_by` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `crm_revnue`
--

CREATE TABLE `crm_revnue` (
  `rev_id` int(11) NOT NULL,
  `rev_payment_date` date NOT NULL,
  `rev_voucher_no` int(11) NOT NULL,
  `rev_invoice_no` bigint(11) NOT NULL,
  `rev_project_code` varchar(100) NOT NULL,
  `rev_clint_id` bigint(20) NOT NULL,
  `rev_project_title` varchar(100) NOT NULL,
  `rev_cash_amt` varchar(100) NOT NULL,
  `rev_cheque_amt` int(11) NOT NULL,
  `rev_cheque_no` bigint(20) NOT NULL,
  `rev_cheque_statu` varchar(50) NOT NULL,
  `rev_cheque_due_date` date NOT NULL,
  `rev_bank_name` varchar(200) NOT NULL,
  `rev_invoice_amount` varchar(100) NOT NULL,
  `rev_total_paid` varchar(100) NOT NULL,
  `rev_balance_amount` varchar(100) NOT NULL,
  `rev_sadqa` varchar(100) NOT NULL,
  `rev_cheque_status` int(11) NOT NULL,
  `rev_remarks` int(11) NOT NULL,
  `rev_added_datetime` datetime NOT NULL,
  `rev_updated_datetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `crm_revnue`
--

INSERT INTO `crm_revnue` (`rev_id`, `rev_payment_date`, `rev_voucher_no`, `rev_invoice_no`, `rev_project_code`, `rev_clint_id`, `rev_project_title`, `rev_cash_amt`, `rev_cheque_amt`, `rev_cheque_no`, `rev_cheque_statu`, `rev_cheque_due_date`, `rev_bank_name`, `rev_invoice_amount`, `rev_total_paid`, `rev_balance_amount`, `rev_sadqa`, `rev_cheque_status`, `rev_remarks`, `rev_added_datetime`, `rev_updated_datetime`) VALUES
(1, '1992-10-01', 4, 4, '0', 0, 'fas', '100', 100, 47777, 'Paid', '1900-01-01', 'sbi', '444', '44', '44', 'fasd', 0, 0, '2021-10-12 01:49:45', '0000-00-00 00:00:00'),
(2, '2021-10-03', 123455, 123, '121', 0, 'DVM bulders', '1000', 100, 43294, 'Pending', '2021-10-20', 'sbi', '100', '100', '100', '100', 0, 0, '2021-10-12 08:36:06', '0000-00-00 00:00:00'),
(3, '2021-10-23', 123, 659, '12', 0, 'testibg', '1000', 2000, 123, 'In-Compalite', '2021-10-20', 'hdfc', '1100', '100', '100', '100', 0, 0, '2021-10-12 08:42:32', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `emp_id` int(11) NOT NULL,
  `first_name` varchar(200) NOT NULL,
  `last_name` varchar(200) NOT NULL,
  `emp_no` varchar(200) NOT NULL,
  `designation` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `mobile` varchar(200) NOT NULL,
  `project` varchar(250) NOT NULL,
  `category` varchar(250) NOT NULL,
  `doj` date NOT NULL,
  `father_name` varchar(200) NOT NULL,
  `nationality` varchar(100) NOT NULL,
  `homeno` varchar(100) NOT NULL,
  `relative_name` varchar(200) NOT NULL,
  `relative_no` varchar(100) NOT NULL,
  `home_address` longtext NOT NULL,
  `basic_salary` varchar(200) NOT NULL,
  `accommodation` varchar(200) NOT NULL,
  `transport` varchar(300) NOT NULL,
  `salary_per_day` varchar(100) NOT NULL,
  `food` varchar(300) NOT NULL,
  `total` varchar(300) NOT NULL,
  `allowances` varchar(250) NOT NULL,
  `passport_no` varchar(200) NOT NULL,
  `pissue_date` date NOT NULL,
  `pexpire_date` date NOT NULL,
  `emirate_id` varchar(100) NOT NULL,
  `eissue_date` date NOT NULL,
  `eexpire_date` date NOT NULL,
  `visa_no` varchar(100) NOT NULL,
  `vissue_date` date NOT NULL,
  `vexpire_date` date NOT NULL,
  `driving_licence` varchar(250) NOT NULL,
  `didate` date NOT NULL,
  `dedate` date NOT NULL,
  `passport_img` longtext NOT NULL,
  `img_name` varchar(250) NOT NULL,
  `img_type` varchar(250) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_by` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`emp_id`, `first_name`, `last_name`, `emp_no`, `designation`, `email`, `mobile`, `project`, `category`, `doj`, `father_name`, `nationality`, `homeno`, `relative_name`, `relative_no`, `home_address`, `basic_salary`, `accommodation`, `transport`, `salary_per_day`, `food`, `total`, `allowances`, `passport_no`, `pissue_date`, `pexpire_date`, `emirate_id`, `eissue_date`, `eexpire_date`, `visa_no`, `vissue_date`, `vexpire_date`, `driving_licence`, `didate`, `dedate`, `passport_img`, `img_name`, `img_type`, `created_at`, `updated_by`) VALUES
(18, 'bhavesh', 'bamaniya', '1234', 'developers', 'bhavesh11bamaniya@gmail.com', '9989898721', 'crm', '', '2021-09-17', 'papa', 'indian', '9909897821', 'ram', '8393838281', 'pandesara surat', '20000', '1000', '100', '200', '0', '21300', '', '84837427', '2021-09-01', '2021-09-03', '13313453', '2021-09-20', '2021-09-12', '98765432', '2021-09-13', '2021-10-01', '3456876543', '2021-09-28', '2021-09-13', '1632919057_d0ddf4066e624e5ecae3.jpg', '', '', '2021-09-29 06:43:49', '2021-10-02 05:05:52'),
(25, 'arun', 'more', '1234566', 'designer', 'arunmorep90@gmail.com', '12323232332', 'CRM', '', '2021-10-01', 'pandit', 'indian', 'dindoli', 'xyz', '8645784526', 'dasdas', '180000', 'ddsda', 'abc', '5000', 'Apple', '10', '', '12d5de256de', '2021-10-01', '2021-10-31', '84dwd56586d', '2021-10-01', '2021-10-31', 'dw7d4d56wd4', '2021-10-01', '2021-10-31', '45dwd4d5w', '2021-10-01', '2021-10-31', '1633092273_dc2710de4b2c8f2d0e08.jpg', '', '', '2021-10-01 07:44:33', '0000-00-00 00:00:00'),
(27, 'Ankit', 'patill', '121212', 'Manager', 'manager@gmail.com', '8530465246', 'Not started Yet', '', '2021-10-01', 'Manoj mandal', 'Indian', '2930702374', 'fhjksfhdkh', '2849236492', 'qewfkjeqfkjqe', '800', '100', '50', '20', '50', '1500', '', '934892980', '2021-10-01', '2021-10-30', 'KFJHWEKFHK', '2021-10-01', '2021-10-23', 'KJJKDHFKJD', '2021-10-01', '2021-10-21', '2JK3H4K23', '2021-10-01', '2021-10-01', '', '', '', '2021-10-02 04:21:08', '0000-00-00 00:00:00'),
(41, 'testing', 'last testing', '446', '', 'admin123@gmail.com', '9989898721', 'abc', '', '0000-00-00', '', 'Andorra', '', '', '', '', '20000', '', '', 'Salary Per Day', '', '', '', '321', '2021-10-07', '2021-10-20', '', '0000-00-00', '0000-00-00', '223', '2021-10-11', '2021-11-04', '', '0000-00-00', '0000-00-00', '', '', '', '2021-10-04 01:10:14', '2021-10-04 01:15:40'),
(73, 'final', 'test', '611', 'developer', 'abc@gmail.com', '998989872', 'abv1', '', '0000-00-00', '', 'American Samoa', '', '', '', '', '20000', '', '', 'Salary Per Day', '', '', '', '87653459876', '2021-10-21', '2021-10-28', '', '0000-00-00', '0000-00-00', 'sdfcm', '2021-10-02', '2021-10-06', '', '0000-00-00', '0000-00-00', '', '70833207_img 04.jpg', '', '2021-10-06 06:43:16', '0000-00-00 00:00:00'),
(91, 'MD Salam Ali', 'Shahid', '893', 'Building supervisor', 'salamalishaid@gmail.com', '05055556666', 'note yet', '', '2021-10-30', 'Shahid Ali', 'India', '+91529784565', 'Azad mian', '', '', '2000', 'Provided', '700', 'Salary Per Day', '200', '', '100', 'PJ78964', '2021-10-12', '2021-11-02', '12365478963258741', '2021-10-27', '2021-11-06', '1465/45879/963258741', '2021-10-30', '2021-11-06', '2365478', '2021-11-02', '2021-11-30', '1633757827_a7f22839b31a1c58cd5e.jpeg', '55786309_JEDDAH CABLES.jpeg', '', '2021-10-09 00:37:07', '0000-00-00 00:00:00'),
(92, 'category ', 'testing', '300', 'hello', 'meet12@gmail.com', '9989898721', 'abv', 'Staff', '2021-10-14', 'neel', 'Anguilla', '04059', 'abc', '242233dc', 'aaak', '200', '1000', '12', 'Salary Per Day', '10', 'qq', '100', '100', '2021-10-01', '2021-10-21', '', '0000-00-00', '0000-00-00', '98765432', '2021-10-27', '2021-10-22', '', '0000-00-00', '0000-00-00', '1633937724_96122821f2ba09481ffd.jpg', '48418543_12129062_client-02.png', '', '2021-10-11 02:35:24', '0000-00-00 00:00:00'),
(98, 'das', 'fa', '1001', 'fa', 'asdf@gmail.com', 'fa', 'fda', 'Staff', '2021-10-15', 'f', 'American Samoa', 'fa', 'asf', 'sdaf', 'dsaf', '2', '2', '2', 'Salary Per Day', '2', '10', '2', 'fa', '2021-09-28', '2021-10-13', 'f', '2021-10-13', '2021-10-22', 'fa', '2021-10-15', '2021-10-07', 'fa', '2021-10-27', '2021-10-12', '', '22178079_', '', '2021-10-13 05:31:17', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `equipments`
--

CREATE TABLE `equipments` (
  `id` int(11) NOT NULL,
  `pe_id` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pe_type` varchar(999) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pe_model` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `per_day_charge` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `maintanence` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `registration_expiry` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_by` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `equipments`
--

INSERT INTO `equipments` (`id`, `pe_id`, `pe_type`, `pe_model`, `status`, `per_day_charge`, `maintanence`, `registration_expiry`, `created_at`, `updated_by`) VALUES
(1, 'Car-021', 'CAR 7 Seater', 'Mitsubishi', 'Expired', '50', 'aa', 'aa11', '2021-10-05 04:42:15', '2021-10-08 00:54:25'),
(3, 'Car-1', 'CAR 7 Seate', 'Mitsubish', 'Working', '5', 'a', 'a', '2021-10-05 05:07:14', '2021-10-08 00:54:11'),
(10, 'Car-03', 'CAR 4 Seater', 'Mitsubish', 'Expired', '50', 'testig', '12-12', '2021-10-08 00:58:10', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `ad_id` int(11) NOT NULL,
  `ad_name` varchar(100) NOT NULL,
  `ad_email` varchar(100) NOT NULL,
  `ad_password` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`ad_id`, `ad_name`, `ad_email`, `ad_password`) VALUES
(1, 'admin', 'crmadmin123@gmail.com', '0192023a7bbd73250516f069df18b500');

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `pro_id` int(11) NOT NULL,
  `project_no` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cnt_id` int(250) NOT NULL,
  `owner_company_name` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `project_title` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `work_order_satus` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `starting_date` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `complation_date` date NOT NULL,
  `days_compated` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `days_remaining` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pro_status` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `sub_ctr_code` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_ctr_name` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `project_expens` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_revenue` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profit_loss` tinyint(250) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_by` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`pro_id`, `project_no`, `cnt_id`, `owner_company_name`, `project_title`, `work_order_satus`, `starting_date`, `complation_date`, `days_compated`, `days_remaining`, `pro_status`, `sub_ctr_code`, `sub_ctr_name`, `project_expens`, `total_revenue`, `profit_loss`, `created_at`, `updated_by`) VALUES
(5, '1', 2, 'Siddhi Software', 'testibg', 'In-Compalte', '2021-11-04', '2021-11-05', '1', '2', '0', 'abc', 'ramesh', '100', '200', 127, '2021-10-08 08:31:54', '0000-00-00 00:00:00'),
(1, '2', 2, 'Siddhi Software', 'testibg', 'In-Compalte', '2021-10-15', '2023-02-27', '500', '', 'submited by me', 'ASS', 'enter', '1000', '500', -128, '0000-00-00 00:00:00', '2021-10-15 00:31:32'),
(8, '3', 1, 'Logicon Techn', 'hello', 'Complated', '2021-10-15', '2021-10-15', '5', '5', 'test', 'abc1', 'ramesh1', '1001', '2001', 127, '2021-10-09 08:27:27', '2021-10-15 00:30:36');

-- --------------------------------------------------------

--
-- Table structure for table `sub_activities`
--

CREATE TABLE `sub_activities` (
  `atv_id` int(11) NOT NULL,
  `sub_id` bigint(20) NOT NULL,
  `roba` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `tile` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `marble` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `interlock` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_by` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sub_contractor`
--

CREATE TABLE `sub_contractor` (
  `sub_id` int(11) NOT NULL,
  `sub_no` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cnt_id` bigint(20) NOT NULL,
  `sub_cell_no` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_email` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_contact_person` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_contact_cell_no` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_contact_email` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_by` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`ctg_id`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`cnt_id`);

--
-- Indexes for table `crm_invoice`
--
ALTER TABLE `crm_invoice`
  ADD PRIMARY KEY (`inv_id`);

--
-- Indexes for table `crm_revnue`
--
ALTER TABLE `crm_revnue`
  ADD PRIMARY KEY (`rev_id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`emp_id`);

--
-- Indexes for table `equipments`
--
ALTER TABLE `equipments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`ad_id`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`pro_id`);

--
-- Indexes for table `sub_activities`
--
ALTER TABLE `sub_activities`
  ADD PRIMARY KEY (`atv_id`);

--
-- Indexes for table `sub_contractor`
--
ALTER TABLE `sub_contractor`
  ADD PRIMARY KEY (`sub_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `ctg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `cnt_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `crm_invoice`
--
ALTER TABLE `crm_invoice`
  MODIFY `inv_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `crm_revnue`
--
ALTER TABLE `crm_revnue`
  MODIFY `rev_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `emp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;

--
-- AUTO_INCREMENT for table `equipments`
--
ALTER TABLE `equipments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `ad_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `pro_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `sub_activities`
--
ALTER TABLE `sub_activities`
  MODIFY `atv_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sub_contractor`
--
ALTER TABLE `sub_contractor`
  MODIFY `sub_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
