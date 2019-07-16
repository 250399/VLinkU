-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 14, 2019 at 02:08 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `database`
--

-- --------------------------------------------------------

--
-- Table structure for table `comment_table`
--

CREATE TABLE `comment_table` (
  `cid` int(100) NOT NULL,
  `comment` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comment_table`
--

INSERT INTO `comment_table` (`cid`, `comment`) VALUES
(2, 'public class Fibonacci {\r\n\r\n    public static void main(String[] args) {\r\n\r\n        int n = 10, t1 = 0, t2 = 1;\r\n        System.out.print(\"First \" + n + \" terms: \");\r\n\r\n        for (int i = 1; i <= n; ++i)\r\n        {\r\n            System.out.print(t1 + \" + \");\r\n\r\n            int sum = t1 + t2;\r\n            t1 = t2;\r\n            t2 = sum;\r\n        }\r\n    }\r\n}'),
(2, 'public class Fibonacci {\r\n\r\n    public static void main(String[] args) {\r\n\r\n        int n = 10, t1 = 0, t2 = 1;\r\n        System.out.print(\"First \" + n + \" terms: \");\r\n\r\n        for (int i = 1; i <= n; ++i)\r\n        {\r\n            System.out.print(t1 + \" + \");\r\n\r\n            int sum = t1 + t2;\r\n            t1 = t2;\r\n            t2 = sum;\r\n        }\r\n    }\r\n}'),
(2, '1<br />\r\n2'),
(3, '#include &lt;stdio.h&gt;<br />\r\nint main()<br />\r\n{<br />\r\n   <br />\r\n   printf(&quot;Hello, World!&quot;);<br />\r\n   return 0;<br />\r\n}'),
(6, 'public class Fibonacci {<br />\r\n<br />\r\n    public static void main(String[] args) {<br />\r\n<br />\r\n        int n = 10, t1 = 0, t2 = 1;<br />\r\n        System.out.print(&quot;First &quot; + n + &quot; terms: &quot;);<br />\r\n<br />\r\n        for (int i = 1; i &lt;= n; ++i)<br />\r\n        {<br />\r\n            System.out.print(t1 + &quot; + &quot;);<br />\r\n<br />\r\n            int sum = t1 + t2;<br />\r\n            t1 = t2;<br />\r\n            t2 = sum;<br />\r\n        }<br />\r\n    }<br />\r\n}'),
(5, '#include &lt;stdio.h&gt;<br />\r\nint main()<br />\r\n{<br />\r\n   // printf() displays the string inside quotation<br />\r\n   printf(&quot;Hello, World!&quot;);<br />\r\n   return 0;<br />\r\n}');

-- --------------------------------------------------------

--
-- Table structure for table `email_verify`
--

CREATE TABLE `email_verify` (
  `Email` varchar(100) NOT NULL,
  `Verified` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `email_verify`
--

INSERT INTO `email_verify` (`Email`, `Verified`) VALUES
('zzzaxwk@gmail.com', 1);

-- --------------------------------------------------------

--
-- Table structure for table `problem_stmt`
--

CREATE TABLE `problem_stmt` (
  `stmt` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `id` int(11) NOT NULL,
  `commit` int(11) NOT NULL,
  `comitted_by` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `problem_stmt`
--

INSERT INTO `problem_stmt` (`stmt`, `email`, `id`, `commit`, `comitted_by`) VALUES
(' Need an Python program for factorial.', 'kunaldeshmukh2503@gmail.com', 1, 1, 'kunaldeshmukh2503@gmail.com'),
('Need Fibonacci series in Java', 'kunaldeshmukh2503@gmail.com', 2, 1, 'zzzaxwk@gmail.com'),
('Hello world program in C', 'kdgamer47@gmail.com', 3, 1, 'kunaldeshmukh2503@gmail.com'),
('What is up with all these YouTube videos consisting of, &ldquo;Attention all _______ gamers&rdquo;?<', 'kunaldeshmukh2503@gmail.com', 4, 1, 'kunaldeshmukh2503@gmail.com'),
('Hello world program in C.', 'kunaldeshmukh2503@gmail.com', 5, 0, ''),
('Fibonacci series in Java', 'kunaldeshmukh2503@gmail.com', 6, 0, ''),
('factorial in java', 'zzzaxwk@gmail.com', 7, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `profilepic`
--

CREATE TABLE `profilepic` (
  `email` varchar(100) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profilepic`
--

INSERT INTO `profilepic` (`email`, `status`) VALUES
('kunaldeshmukh2503@gmail.com', 1),
('zzzaxwk@gmail.com', 1),
('jagtaprushabh97@gmail.com', 0),
('kdgamer47@gmail.com', 0),
('kdgamer47@gmail.com', 0),
('kunaldeshmukh2503@gmail.com', 0),
('kunaldeshmukh2503@gmail.com', 0);

-- --------------------------------------------------------

--
-- Table structure for table `registration_details`
--

CREATE TABLE `registration_details` (
  `Username` varchar(50) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `PhoneNo` varchar(15) NOT NULL,
  `Role` varchar(15) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration_details`
--

INSERT INTO `registration_details` (`Username`, `Email`, `Password`, `PhoneNo`, `Role`, `id`) VALUES
('kunal', 'zzzaxwk@gmail.com', 'Kunal@25', '111-111-1111', 'Entrepreneur', 3),
('rushabh', 'jagtaprushabh97@gmail.com', 'Rushabh@123', '111-111-1111', 'Entrepreneur', 5),
('kunal', 'kdgamer47@gmail.com', 'Kunal@25', '111-111-1111', 'Entrepreneur', 7),
('kunal', 'kunaldeshmukh2503@gmail.com', 'Kunal@25', '111-111-1111', 'Entrepreneur', 9);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `email_verify`
--
ALTER TABLE `email_verify`
  ADD PRIMARY KEY (`Email`);

--
-- Indexes for table `problem_stmt`
--
ALTER TABLE `problem_stmt`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration_details`
--
ALTER TABLE `registration_details`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `problem_stmt`
--
ALTER TABLE `problem_stmt`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `registration_details`
--
ALTER TABLE `registration_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
