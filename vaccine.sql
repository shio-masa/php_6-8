-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- ホスト: localhost:8889
-- 生成日時: 2021 年 8 月 04 日 03:16
-- サーバのバージョン： 5.7.32
-- PHP のバージョン: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- データベース: `vaccination_db`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `login_table`
--

CREATE TABLE `login_table` (
  `id` int(12) NOT NULL,
  `name` varchar(64) NOT NULL,
  `kana` varchar(64) NOT NULL,
  `email` varchar(128) NOT NULL,
  `u_name` varchar(64) NOT NULL,
  `lid` varchar(12) NOT NULL,
  `lpw` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `login_table`
--

INSERT INTO `login_table` (`id`, `name`, `kana`, `email`, `u_name`, `lid`, `lpw`) VALUES
(1, '', '', '', '', '', ''),
(2, 'Shiozawa Masayuki', 'Shiozawa Masayuki', 'shio_masa0820@hotmail.com', 'vhy67y', '1000867', 'abco');

-- --------------------------------------------------------

--
-- テーブルの構造 `vaccination_table`
--

CREATE TABLE `vaccination_table` (
  `id` int(12) NOT NULL,
  `name` varchar(64) NOT NULL,
  `times` int(6) NOT NULL,
  `times2` int(6) NOT NULL,
  `vaccine_kinds` varchar(24) NOT NULL,
  `vaccine_kinds2` varchar(12) NOT NULL,
  `indate` text NOT NULL,
  `indate2` text NOT NULL,
  `comments` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `vaccination_table`
--

INSERT INTO `vaccination_table` (`id`, `name`, `times`, `times2`, `vaccine_kinds`, `vaccine_kinds2`, `indate`, `indate2`, `comments`) VALUES
(1, '塩澤 正之', 0, 0, '', '', '', '', ''),
(2, '塩澤 正之', 2, 0, 'モデルナ', '', '2021/7/31', '', '2回目発熱、3回目モデルナアーム＆発熱'),
(3, 'みなみ', 2, 0, 'ファイザー', '', '2021/7/31', '', '2回目発熱、3回目モデルナアーム＆発熱');

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `login_table`
--
ALTER TABLE `login_table`
  ADD PRIMARY KEY (`id`);

--
-- テーブルのインデックス `vaccination_table`
--
ALTER TABLE `vaccination_table`
  ADD PRIMARY KEY (`id`);

--
-- ダンプしたテーブルの AUTO_INCREMENT
--

--
-- テーブルの AUTO_INCREMENT `login_table`
--
ALTER TABLE `login_table`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- テーブルの AUTO_INCREMENT `vaccination_table`
--
ALTER TABLE `vaccination_table`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
