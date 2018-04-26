## 浏览量统计参考我的github博客

URL:[http://tanwubin.github.io](http://tanwubin.github.io)


## blogcounter介绍

博客爱好者肯定都折腾过不少平台，不同搭建方式，比如wordpress，但由于主机托管、域名备案
等原因，若干年后，疲于对服务器的维护而转到github+jekyll静态博客托管，这种方式有很多好处，一是
不用维护托管主机，二是基于github方式，数据也可以备份，三是还能遇到一群开源爱好者。

blogcounter正是在这个背景下产生的，解决静态博客文章访问量的统计问题。

blogcounter原理如下：

Ajax+PHP，用户访问post页面时，通过ajax向服务端发起POST请求，服务端接受到请求后，
刷新后台数据库中的访问数据。

目录结构说明如下：
counteradd.php，服务端程序，用于向数据库中刷新浏览量

counterget.php，服务端程序，用于从数据库中获取浏览量

index.html，模拟博客首页，展示获取博客浏览量

page.html，模拟查看博文，增加浏览量

pagecounteradd.js，客户端增加浏览量js文件

pagecounterget.js，客户端获取浏览量js文件

## 数据库（拷贝执行即可）

-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 26, 2018 at 05:28 PM
-- Server version: 5.7.22-0ubuntu0.17.10.1
-- PHP Version: 7.1.15-0ubuntu0.17.10.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blogcounter`
--

-- --------------------------------------------------------

--
-- Table structure for table `pageviewcounter`
--

CREATE TABLE `pageviewcounter` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `url` text NOT NULL,
  `viewcounter` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pageviewcounter`
--
ALTER TABLE `pageviewcounter`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pageviewcounter`
--
ALTER TABLE `pageviewcounter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

## 如何运用到自己的博客？

ToDo，待完善
