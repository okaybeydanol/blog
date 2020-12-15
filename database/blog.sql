-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 15 Ara 2020, 15:17:04
-- Sunucu sürümü: 10.4.6-MariaDB
-- PHP Sürümü: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `blog`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `articles_guid` varchar(36) NOT NULL,
  `user_guid` varchar(36) NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `slug` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `hit` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `articles`
--

INSERT INTO `articles` (`id`, `articles_guid`, `user_guid`, `title`, `image`, `content`, `slug`, `created_at`, `updated_at`, `hit`) VALUES
(1, '7945b682-3d42-11eb-adc1-0242ac120002', '1', 'Aleyna Tilki\'nin mini etekli dizi kostümü takipçilerini ikiye böldü', 'https://picsum.photos/1000/400', 'Aleyna Tilki, Acun Ilıcalı\'nın platformu Exxen\'de yayınlanacak dizi için kamera karşısına geçti. Dizide liseli bir kızı oynayacak olan Tilki\'nin süper mini elbiseli okul forması takipçilerini ikiye böldü.\r\n\r\nSurvivor şampiyonu Cemal Can Canseven ile genç popçu Aleyna Tilki, Acun Ilıcalı\'nın kurduğu Exxen\'de yayınlanacak dizi için partner oldu. Dizide liseli bir kızı canlandıracak olan Aleyna, setten ilk pozları da Instagram hesabından paylaşmayı ihmal etmedi.KİMİ BEĞENDİ, KİMİ GEREKSİZ BULDU2,6 milyon takipçisinin bulunduğu Instagram hesabından \"Sürpriz geliyor\" notuyla set fotoğraflarını paylaşan Aleyna Tilki, kostümüyle takipçilerini ikiye böldü. Şarkıcının takipçilerinin bir kısmı eteği gereksiz kısa bulurken bir kısım da şarkıcıya çok yakıştığını ve yeni onu izlemek için merakla beklediklerini söyledi.İşte Aleyna Tilki\'nin çok konuşulan pozları...', 'aleyna-tilkinin-mini-etekli-dizi-kostumu-takipcilerini-ikiye-boldu', '2020-12-13 12:57:26', '2020-12-13 16:06:39', 17),
(2, 'b8eef8f6-85ac-4e38-860f-1279eeefbc05', '1', 'Lorem ipsum dolor sit amet.', 'https://picsum.photos/1000/400', 'Aleyna Tilki, Acun Ilıcalı\'nın platformu Exxen\'de yayınlanacak dizi için kamera karşısına geçti. Dizide liseli bir kızı oynayacak olan Tilki\'nin süper mini elbiseli okul forması takipçilerini ikiye böldü.\r\n\r\nSurvivor şampiyonu Cemal Can Canseven ile genç popçu Aleyna Tilki, Acun Ilıcalı\'nın kurduğu Exxen\'de yayınlanacak dizi için partner oldu. Dizide liseli bir kızı canlandıracak olan Aleyna, setten ilk pozları da Instagram hesabından paylaşmayı ihmal etmedi.KİMİ BEĞENDİ, KİMİ GEREKSİZ BULDU2,6 milyon takipçisinin bulunduğu Instagram hesabından \"Sürpriz geliyor\" notuyla set fotoğraflarını paylaşan Aleyna Tilki, kostümüyle takipçilerini ikiye böldü. Şarkıcının takipçilerinin bir kısmı eteği gereksiz kısa bulurken bir kısım da şarkıcıya çok yakıştığını ve yeni onu izlemek için merakla beklediklerini söyledi.İşte Aleyna Tilki\'nin çok konuşulan pozları...', 'lorem-ipsum-dolor-sit-amet', '2020-12-13 12:57:26', '2020-12-13 16:06:45', 20),
(3, 'b72c68fc-3d46-11eb-adc1-0242ac120002', '1', 'Integer in tellus lacus. Phasellus.', 'https://picsum.photos/1000/400', 'Aleyna Tilki, Acun Ilıcalı\'nın platformu Exxen\'de yayınlanacak dizi için kamera karşısına geçti. Dizide liseli bir kızı oynayacak olan Tilki\'nin süper mini elbiseli okul forması takipçilerini ikiye böldü.\r\n\r\nSurvivor şampiyonu Cemal Can Canseven ile genç popçu Aleyna Tilki, Acun Ilıcalı\'nın kurduğu Exxen\'de yayınlanacak dizi için partner oldu. Dizide liseli bir kızı canlandıracak olan Aleyna, setten ilk pozları da Instagram hesabından paylaşmayı ihmal etmedi.KİMİ BEĞENDİ, KİMİ GEREKSİZ BULDU2,6 milyon takipçisinin bulunduğu Instagram hesabından \"Sürpriz geliyor\" notuyla set fotoğraflarını paylaşan Aleyna Tilki, kostümüyle takipçilerini ikiye böldü. Şarkıcının takipçilerinin bir kısmı eteği gereksiz kısa bulurken bir kısım da şarkıcıya çok yakıştığını ve yeni onu izlemek için merakla beklediklerini söyledi.İşte Aleyna Tilki\'nin çok konuşulan pozları...', 'integer-in-tellus-lacus-phasellus', '2020-12-13 12:57:26', '2020-12-13 15:40:58', 13),
(4, 'bb01ca3a-3d46-11eb-adc1-0242ac120002', '1', 'Aliquam pulvinar at quam ac.', 'https://picsum.photos/1000/400', 'Aleyna Tilki, Acun Ilıcalı\'nın platformu Exxen\'de yayınlanacak dizi için kamera karşısına geçti. Dizide liseli bir kızı oynayacak olan Tilki\'nin süper mini elbiseli okul forması takipçilerini ikiye böldü.\r\n\r\nSurvivor şampiyonu Cemal Can Canseven ile genç popçu Aleyna Tilki, Acun Ilıcalı\'nın kurduğu Exxen\'de yayınlanacak dizi için partner oldu. Dizide liseli bir kızı canlandıracak olan Aleyna, setten ilk pozları da Instagram hesabından paylaşmayı ihmal etmedi.KİMİ BEĞENDİ, KİMİ GEREKSİZ BULDU2,6 milyon takipçisinin bulunduğu Instagram hesabından \"Sürpriz geliyor\" notuyla set fotoğraflarını paylaşan Aleyna Tilki, kostümüyle takipçilerini ikiye böldü. Şarkıcının takipçilerinin bir kısmı eteği gereksiz kısa bulurken bir kısım da şarkıcıya çok yakıştığını ve yeni onu izlemek için merakla beklediklerini söyledi.İşte Aleyna Tilki\'nin çok konuşulan pozları...', 'aliquam-pulvinar-at-quam-ac', '2020-12-13 12:57:26', '2020-12-13 13:20:44', 12),
(5, 'c121f2d2-3d46-11eb-adc1-0242ac120002', '1', 'Nullam ac neque nulla. Nam.', 'https://picsum.photos/1000/400', 'Aleyna Tilki, Acun Ilıcalı\'nın platformu Exxen\'de yayınlanacak dizi için kamera karşısına geçti. Dizide liseli bir kızı oynayacak olan Tilki\'nin süper mini elbiseli okul forması takipçilerini ikiye böldü.\r\n\r\nSurvivor şampiyonu Cemal Can Canseven ile genç popçu Aleyna Tilki, Acun Ilıcalı\'nın kurduğu Exxen\'de yayınlanacak dizi için partner oldu. Dizide liseli bir kızı canlandıracak olan Aleyna, setten ilk pozları da Instagram hesabından paylaşmayı ihmal etmedi.KİMİ BEĞENDİ, KİMİ GEREKSİZ BULDU2,6 milyon takipçisinin bulunduğu Instagram hesabından \"Sürpriz geliyor\" notuyla set fotoğraflarını paylaşan Aleyna Tilki, kostümüyle takipçilerini ikiye böldü. Şarkıcının takipçilerinin bir kısmı eteği gereksiz kısa bulurken bir kısım da şarkıcıya çok yakıştığını ve yeni onu izlemek için merakla beklediklerini söyledi.İşte Aleyna Tilki\'nin çok konuşulan pozları...', 'nullam-ac-neque-nulla-nam', '2020-12-13 12:57:26', '2020-12-13 13:20:44', 12),
(6, 'c79cd938-3d46-11eb-adc1-0242ac120002', '1', 'Ut eu porttitor magna. Phasellus.', 'https://picsum.photos/1000/400', 'Aleyna Tilki, Acun Ilıcalı\'nın platformu Exxen\'de yayınlanacak dizi için kamera karşısına geçti. Dizide liseli bir kızı oynayacak olan Tilki\'nin süper mini elbiseli okul forması takipçilerini ikiye böldü.\r\n\r\nSurvivor şampiyonu Cemal Can Canseven ile genç popçu Aleyna Tilki, Acun Ilıcalı\'nın kurduğu Exxen\'de yayınlanacak dizi için partner oldu. Dizide liseli bir kızı canlandıracak olan Aleyna, setten ilk pozları da Instagram hesabından paylaşmayı ihmal etmedi.KİMİ BEĞENDİ, KİMİ GEREKSİZ BULDU2,6 milyon takipçisinin bulunduğu Instagram hesabından \"Sürpriz geliyor\" notuyla set fotoğraflarını paylaşan Aleyna Tilki, kostümüyle takipçilerini ikiye böldü. Şarkıcının takipçilerinin bir kısmı eteği gereksiz kısa bulurken bir kısım da şarkıcıya çok yakıştığını ve yeni onu izlemek için merakla beklediklerini söyledi.İşte Aleyna Tilki\'nin çok konuşulan pozları...', 'ut-eu-porttitor-magna-phasellus', '2020-12-13 12:57:26', '2020-12-13 13:41:20', 20);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `articles_category`
--

CREATE TABLE `articles_category` (
  `id` int(11) NOT NULL,
  `category_guid` varchar(36) NOT NULL,
  `articles_guid` varchar(36) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `articles_category`
--

INSERT INTO `articles_category` (`id`, `category_guid`, `articles_guid`) VALUES
(1, 'd28a9e1a-3d42-11eb-adc1-0242ac120002', '7945b682-3d42-11eb-adc1-0242ac120002');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `article_comments`
--

CREATE TABLE `article_comments` (
  `id` int(11) NOT NULL,
  `article_guid` varchar(36) DEFAULT NULL,
  `comment_guid` varchar(36) NOT NULL,
  `pcomment_guid` varchar(36) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `article_comments`
--

INSERT INTO `article_comments` (`id`, `article_guid`, `comment_guid`, `pcomment_guid`, `created_at`, `updated_at`) VALUES
(1, '7945b682-3d42-11eb-adc1-0242ac120002', 'f48fe60a-3d42-11eb-adc1-0242ac120002', '', '2020-12-13 13:13:16', '2020-12-12 21:00:00'),
(6, 'b8eef8f6-85ac-4e38-860f-1279eeefbc05', '5c1fe015-866d-4cb0-a127-ef2e8fb57a95', NULL, '2020-12-13 13:44:47', '2020-12-13 13:44:47'),
(7, NULL, '6cc3d6aa-1375-42fe-95ae-4b97d1973069', '5c1fe015-866d-4cb0-a127-ef2e8fb57a95', '2020-12-13 13:44:52', '2020-12-13 13:44:52'),
(8, 'b8eef8f6-85ac-4e38-860f-1279eeefbc05', 'e866acc4-b5f4-4eeb-a684-2eaf93e336d3', NULL, '2020-12-13 13:45:02', '2020-12-13 13:45:02');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `category_guid` varchar(36) NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `categories`
--

INSERT INTO `categories` (`id`, `category_guid`, `name`, `slug`) VALUES
(1, 'd28a9e1a-3d42-11eb-adc1-0242ac120002', 'Yaşam', 'yasam');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `comment_guid` varchar(36) NOT NULL,
  `ad` varchar(255) NOT NULL,
  `comment` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `comments`
--

INSERT INTO `comments` (`id`, `comment_guid`, `ad`, `comment`, `created_at`, `updated_at`) VALUES
(1, 'f48fe60a-3d42-11eb-adc1-0242ac120002', 'okay', 'naber !!!!!!!!!!!!1', '2020-12-13 13:11:05', '2020-12-12 21:00:00'),
(5, '5c1fe015-866d-4cb0-a127-ef2e8fb57a95', 'asdad', 'adasdasd', '2020-12-13 13:44:47', '2020-12-13 13:44:47'),
(6, '6cc3d6aa-1375-42fe-95ae-4b97d1973069', 'cccc', 'asdas', '2020-12-13 13:44:52', '2020-12-13 13:44:52'),
(7, 'e866acc4-b5f4-4eeb-a684-2eaf93e336d3', 'cgggg', 'dsdsd', '2020-12-13 13:45:02', '2020-12-13 13:45:02');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `pages`
--

CREATE TABLE `pages` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `slug` varchar(255) NOT NULL,
  `order` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `pages`
--

INSERT INTO `pages` (`id`, `title`, `image`, `content`, `slug`, `order`) VALUES
(1, 'Görkem Demir Kimdir?', 'https://picsum.photos/660/591', 'Aleyna Tilki, Acun Ilıcalı\'nın platformu Exxen\'de yayınlanacak dizi için kamera karşısına geçti. Dizide liseli bir kızı oynayacak olan Tilki\'nin süper mini elbiseli okul forması takipçilerini ikiye böldü.  Survivor şampiyonu Cemal Can Canseven ile genç popçu Aleyna Tilki, Acun Ilıcalı\'nın kurduğu Exxen\'de yayınlanacak dizi için partner oldu. Dizide liseli bir kızı canlandıracak olan Aleyna, setten ilk pozları da Instagram hesabından paylaşmayı ihmal etmedi.KİMİ BEĞENDİ, KİMİ GEREKSİZ BULDU2,6 milyon takipçisinin bulunduğu Instagram hesabından \"Sürpriz geliyor\" notuyla set fotoğraflarını paylaşan Aleyna Tilki, kostümüyle takipçilerini ikiye böldü. Şarkıcının takipçilerinin bir kısmı eteği gereksiz kısa bulurken bir kısım da şarkıcıya çok yakıştığını ve yeni onu izlemek için merakla beklediklerini söyledi.İşte Aleyna Tilki\'nin çok konuşulan pozları...', 'görkem-demir-kimdir', 1);

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `articles_category`
--
ALTER TABLE `articles_category`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `article_comments`
--
ALTER TABLE `article_comments`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Tablo için AUTO_INCREMENT değeri `articles_category`
--
ALTER TABLE `articles_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `article_comments`
--
ALTER TABLE `article_comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Tablo için AUTO_INCREMENT değeri `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Tablo için AUTO_INCREMENT değeri `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Tablo için AUTO_INCREMENT değeri `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
