-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Ноя 08 2017 г., 17:41
-- Версия сервера: 5.7.16-log
-- Версия PHP: 7.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `yii2-blog`
--

-- --------------------------------------------------------

--
-- Структура таблицы `auth_assignments`
--

CREATE TABLE `auth_assignments` (
  `item_name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `auth_assignments`
--

INSERT INTO `auth_assignments` (`item_name`, `user_id`, `created_at`) VALUES
('admin', '1', 1508920286),
('author', '3', 1508920299),
('user', '2', 1508923338);

-- --------------------------------------------------------

--
-- Структура таблицы `auth_items`
--

CREATE TABLE `auth_items` (
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `type` smallint(6) NOT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `rule_name` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `data` blob,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `auth_items`
--

INSERT INTO `auth_items` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`) VALUES
('admin', 1, 'Admin', NULL, NULL, 1508919828, 1508919828),
('author', 1, 'Author', NULL, NULL, 1508919828, 1508919828),
('createComment', 2, 'Create a comment', NULL, NULL, 1508919827, 1508919827),
('createPost', 2, 'Create a post', NULL, NULL, 1508919828, 1508919828),
('updateComment', 2, 'Update a comment', NULL, NULL, 1508919828, 1508919828),
('updateOwnComment', 2, 'Update own comment', 'isAuthorComment', NULL, 1508919828, 1508919828),
('updateOwnPost', 2, 'Update own post', 'isAuthorPost', NULL, 1508919828, 1508919828),
('updatePost', 2, 'Update a post', NULL, NULL, 1508919828, 1508919828),
('user', 1, 'User', NULL, NULL, 1508919828, 1508919828);

-- --------------------------------------------------------

--
-- Структура таблицы `auth_item_children`
--

CREATE TABLE `auth_item_children` (
  `parent` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `child` varchar(64) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `auth_item_children`
--

INSERT INTO `auth_item_children` (`parent`, `child`) VALUES
('admin', 'author'),
('user', 'createComment'),
('author', 'createPost'),
('updateOwnComment', 'updateComment'),
('user', 'updateOwnComment'),
('author', 'updateOwnPost'),
('updateOwnPost', 'updatePost'),
('author', 'user');

-- --------------------------------------------------------

--
-- Структура таблицы `auth_rules`
--

CREATE TABLE `auth_rules` (
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `data` blob,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `auth_rules`
--

INSERT INTO `auth_rules` (`name`, `data`, `created_at`, `updated_at`) VALUES
('isAuthorComment', 0x4f3a32333a22626c6f675c6163636573735c436f6d6d656e7452756c65223a333a7b733a343a226e616d65223b733a31353a226973417574686f72436f6d6d656e74223b733a393a22637265617465644174223b693a313530383931393832373b733a393a22757064617465644174223b693a313530383931393832373b7d, 1508919827, 1508919827),
('isAuthorPost', 0x4f3a32303a22626c6f675c6163636573735c506f737452756c65223a333a7b733a343a226e616d65223b733a31323a226973417574686f72506f7374223b733a393a22637265617465644174223b693a313530383931393832373b733a393a22757064617465644174223b693a313530383931393832373b7d, 1508919827, 1508919827);

-- --------------------------------------------------------

--
-- Структура таблицы `blog_categories`
--

CREATE TABLE `blog_categories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `sort` int(11) NOT NULL,
  `meta_json` json NOT NULL,
  `posts_count` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `blog_categories`
--

INSERT INTO `blog_categories` (`id`, `name`, `slug`, `title`, `description`, `sort`, `meta_json`, `posts_count`) VALUES
(1, 'Nature', 'nature', 'the flowers', '<p><span style=\"color:rgb(0, 0, 0); font-family:open sans,arial,sans-serif; font-size:14px\">&quot;Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.&quot;</span></p>\r\n', 1, '{\"title\": \"the flowers\", \"keywords\": \"the flowers bouquet\", \"description\": \"bouquet\"}', 3),
(2, 'Sport', 'sport', 'Sport', '<p>Only Sport</p>\r\n', 2, '{\"title\": \"\", \"keywords\": \"\", \"description\": \"\"}', 1),
(3, 'the NEWS', 'news', 'conversation', '<p><strong>Lorem Ipsum</strong><span style=\"color:rgb(0, 0, 0); font-family:open sans,arial,sans-serif; font-size:14px\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It h</span></p>\r\n', 3, '{\"title\": \"news\", \"keywords\": \"news, about us\", \"description\": \"Lorem Ipsum is simply dummy text of the printing and typesetting industry.\"}', 2);

-- --------------------------------------------------------

--
-- Структура таблицы `blog_comments`
--

CREATE TABLE `blog_comments` (
  `id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `created_at` int(11) UNSIGNED NOT NULL,
  `text` text COLLATE utf8_unicode_ci NOT NULL,
  `active` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `blog_comments`
--

INSERT INTO `blog_comments` (`id`, `post_id`, `user_id`, `parent_id`, `created_at`, `text`, `active`) VALUES
(1, 3, 1, NULL, 1508826896, 'good\r\n', 1),
(2, 3, 1, 1, 1508826925, 'sdfdsfsfsfsfs', 1),
(3, 3, 1, 1, 1508826936, 'fdgdfgdfgfgdf', 1),
(9, 4, 1, NULL, 1508837217, 'fjkdsfjfsjfsdk;lkfdfdd', 1),
(10, 4, 1, 9, 1508837225, 'dsfsdfsffsfsfsfsfsf', 1),
(13, 3, 1, NULL, 1508908321, '1', 1),
(15, 3, 2, NULL, 1508920714, '33', 1),
(16, 3, 1, 3, 1509000929, 'dfgdfgfgdfg', 1),
(17, 3, 1, 1, 1509017793, 'qqqqqqqqq', 1),
(18, 3, 1, 2, 1509017816, 'qqqqqqqqqqqqqqqqqq', 1),
(19, 3, 1, 1, 1509017832, 'qqqqqqqqqqq', 1),
(20, 3, 1, 2, 1509017847, 'qqqq', 1),
(21, 3, 1, 1, 1509017891, 'qqq', 1),
(22, 3, 1, 18, 1509021292, '22', 1),
(23, 3, 1, NULL, 1509093780, 'fake', 1),
(24, 3, 1, NULL, 1509634117, 'admin', 1),
(25, 7, 1, NULL, 1509873871, 'it is the best', 1),
(26, 7, 1, 25, 1509873893, 'Yes, I am agree', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `blog_posts`
--

CREATE TABLE `blog_posts` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `created_at` int(11) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `content` mediumtext COLLATE utf8_unicode_ci,
  `photo` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL,
  `meta_json` json NOT NULL,
  `comments_count` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `blog_posts`
--

INSERT INTO `blog_posts` (`id`, `user_id`, `category_id`, `created_at`, `title`, `description`, `content`, `photo`, `status`, `meta_json`, `comments_count`) VALUES
(3, 1, 1, 1508410402, 'my photo', 'bouquet', '<p><span style=\"color:rgb(0, 0, 0); font-family:open sans,arial,sans-serif; font-size:14px\">&quot;Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.&quot;</span></p>\r\n', 'AA011.jpg', 1, '{\"title\": \"\", \"keywords\": \"\", \"description\": \"\"}', 14),
(4, 1, 1, 1508757231, 'Night', 'Sed a nibh maximus mauris mollis sagittis. Vivamus ac laoreet odio. Cras vitae mauris dictum, interdum orci ac, scelerisque mi. Aliquam erat volutpat. Nulla nec urna at mi egestas ultricies in sed purus.', '<p><span style=\"color:rgb(0, 0, 0); font-family:open sans,arial,sans-serif; font-size:14px\">Quisque ullamcorper consectetur ipsum, id rutrum arcu euismod quis. Pellentesque iaculis felis facilisis, pharetra enim eu, imperdiet felis. Duis ac dolor ultricies, facilisis justo at, hendrerit arcu. Nullam urna arcu, luctus et blandit a, dapibus vitae turpis. Etiam eget mi sit amet lectus hendrerit condimentum eu quis mauris. Suspendisse sed felis vel lorem maximus placerat. Nullam pellentesque condimentum nibh sed venenatis. Proin in cursus felis. Vestibulum aliquam ipsum id est iaculis aliquet. Nulla purus diam, ullamcorper et malesuada eu, gravida ac lacus. Fusce a augue in ipsum aliquet tincidunt. Praesent iaculis mi tincidunt purus varius tempor. Maecenas malesuada massa sit amet nibh vulputate, et pellentesque justo pretium. Pellentesque et neque posuere, auctor lectus et, luctus tellus. Suspendisse suscipit leo efficitur nisi bibendum, nec condimentum augue cursus. Integer tortor nisl, accumsan eget feugiat quis, rhoncus sit amet ex.</span></p>\r\n', 'post_1.jpg', 1, '{\"title\": \"\", \"keywords\": \"\", \"description\": \"\"}', 2),
(5, 1, 2, 1509790376, 'Nike', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. ', '<p><strong>Lorem Ipsum</strong><span style=\"color:rgb(0, 0, 0); font-family:open sans,arial,sans-serif; font-size:14px\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span></p>\r\n', 'site-hero.jpg', 1, '{\"title\": \"\", \"keywords\": \"\", \"description\": \"\"}', 0),
(6, 1, 3, 1509864715, 'work', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', '<p><strong>Lorem Ipsum</strong><span style=\"color:rgb(0, 0, 0); font-family:open sans,arial,sans-serif; font-size:14px\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span></p>\r\n', 'post_1.jpg', 1, '{\"title\": \"news\", \"keywords\": \"news\", \"description\": \"news\"}', 0),
(7, 1, 1, 1509873370, 'Nature', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '<p style=\"text-align:justify\">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, &quot;Lorem ipsum dolor sit amet..&quot;, comes from a line in section 1.10.32.</p>\r\n\r\n<p style=\"text-align:justify\">The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from &quot;de Finibus Bonorum et Malorum&quot; by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>\r\n', 'site-hero2.jpg', 1, '{\"title\": \"nature\", \"keywords\": \"mountaines\", \"description\": \"around us\"}', 2),
(8, 1, 3, 1509873463, 'politics', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '<p style=\"text-align:justify\">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, &quot;Lorem ipsum dolor sit amet..&quot;, comes from a line in section 1.10.32.</p>\r\n\r\n<p style=\"text-align:justify\">The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from &quot;de Finibus Bonorum et Malorum&quot; by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>\r\n', 'post_1.jpg', 1, '{\"title\": \"politics\", \"keywords\": \"newspapers\", \"description\": \"news\"}', 0);

-- --------------------------------------------------------

--
-- Структура таблицы `blog_tags`
--

CREATE TABLE `blog_tags` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `blog_tags`
--

INSERT INTO `blog_tags` (`id`, `name`, `slug`) VALUES
(1, 'nature', 'flowers'),
(2, 'the news', 'news'),
(3, 'SPORT', 'fast'),
(4, 'The Conversation', 'talking');

-- --------------------------------------------------------

--
-- Структура таблицы `blog_tag_assignments`
--

CREATE TABLE `blog_tag_assignments` (
  `post_id` int(11) NOT NULL,
  `tag_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `blog_tag_assignments`
--

INSERT INTO `blog_tag_assignments` (`post_id`, `tag_id`) VALUES
(3, 1),
(4, 1),
(5, 2),
(5, 3),
(5, 4),
(6, 2),
(7, 1),
(7, 4),
(8, 2),
(8, 3),
(8, 4);

-- --------------------------------------------------------

--
-- Структура таблицы `migration`
--

CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1507875667),
('m171013_053114_create_users_table', 1507875671),
('m171017_053921_rbac_init', 1508219187),
('m171018_052248_create_blog_tags_table', 1508315114),
('m171018_052429_create_blog_categories_table', 1508315114),
('m171018_052627_create_blog_posts_table', 1508315114),
('m171018_053735_create_blog_tag_assignments_table', 1508315114),
('m171018_053853_create_blog_comments_table', 1508315114),
('m171104_090717_add_blog_category_posts_count_field', 1509786624),
('m171105_094248_create_pages_table', 1509875037);

-- --------------------------------------------------------

--
-- Структура таблицы `pages`
--

CREATE TABLE `pages` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` mediumtext COLLATE utf8_unicode_ci,
  `meta_json` json NOT NULL,
  `lft` int(11) NOT NULL,
  `rgt` int(11) NOT NULL,
  `depth` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `pages`
--

INSERT INTO `pages` (`id`, `title`, `slug`, `content`, `meta_json`, `lft`, `rgt`, `depth`) VALUES
(1, '', 'root', NULL, '{}', 1, 4, 0),
(2, 'news', 'sadsadasdasd', '<p>asdasdasdadadad</p>\r\n', '{\"title\": \"\", \"keywords\": \"\", \"description\": \"\"}', 2, 3, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email_confirm_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) UNSIGNED NOT NULL,
  `updated_at` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `email_confirm_token`, `status`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'Y01d9e5xM4gfJjpYs2-4-vWjiVAwnEYH', '$2y$13$dr29vHhbqeydH.yjOq01pu8yJDSVarNdvaAaqzS0U1KgQU8m0ogpi', NULL, 'miker_v@bk.ru', 'jUSj_mbeUPQMsqIKXNNROyX0MH2EeczB', 10, 1507892013, 1509262735),
(2, 'user', '5dSijGgvkLimUV67sPEsvlpfMarjg1Os', '$2y$13$CITbnMMjbR3yJDF3v6X5TuTjmi/LBh75yH1YQOAMO11EQAKU9ZS7W', NULL, 'user@mail.ru', 'jVGxPOVPIHPKcPTt5bcgi2mJvt8bCmM6', 10, 1508233726, 1508923338),
(3, 'author', 'UyZsPsWRgx7tWwza_Pli00u8C_qo9dWe', '$2y$13$tLd7L6few/wZPINEWa.KEeJG/.zbFezn5prt9DJEabVUgncVuj0aq', NULL, 'miker@bk.ru', 'cSkks2vaY8V0H1dSHuM22SyBO0REwYCm', 10, 1508910127, 1508922533);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `auth_assignments`
--
ALTER TABLE `auth_assignments`
  ADD PRIMARY KEY (`item_name`,`user_id`);

--
-- Индексы таблицы `auth_items`
--
ALTER TABLE `auth_items`
  ADD PRIMARY KEY (`name`),
  ADD KEY `rule_name` (`rule_name`),
  ADD KEY `idx-auth_item-type` (`type`);

--
-- Индексы таблицы `auth_item_children`
--
ALTER TABLE `auth_item_children`
  ADD PRIMARY KEY (`parent`,`child`),
  ADD KEY `child` (`child`);

--
-- Индексы таблицы `auth_rules`
--
ALTER TABLE `auth_rules`
  ADD PRIMARY KEY (`name`);

--
-- Индексы таблицы `blog_categories`
--
ALTER TABLE `blog_categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `idx-blog_categories-slug` (`slug`);

--
-- Индексы таблицы `blog_comments`
--
ALTER TABLE `blog_comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx-blog_comments-post_id` (`post_id`),
  ADD KEY `idx-blog_comments-user_id` (`user_id`),
  ADD KEY `idx-blog_comments-parent_id` (`parent_id`);

--
-- Индексы таблицы `blog_posts`
--
ALTER TABLE `blog_posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx-blog_posts-category_id` (`category_id`),
  ADD KEY `fk-blog_posts-user_id` (`user_id`);

--
-- Индексы таблицы `blog_tags`
--
ALTER TABLE `blog_tags`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `idx-blog_tags-slug` (`slug`);

--
-- Индексы таблицы `blog_tag_assignments`
--
ALTER TABLE `blog_tag_assignments`
  ADD PRIMARY KEY (`post_id`,`tag_id`),
  ADD KEY `idx-blog_tag_assignments-post_id` (`post_id`),
  ADD KEY `idx-blog_tag_assignments-tag_id` (`tag_id`);

--
-- Индексы таблицы `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Индексы таблицы `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `idx-pages-slug` (`slug`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `password_reset_token` (`password_reset_token`),
  ADD UNIQUE KEY `email_confirm_token` (`email_confirm_token`),
  ADD UNIQUE KEY `idx-users-username` (`username`),
  ADD UNIQUE KEY `idx-users-password_reset_token` (`password_reset_token`),
  ADD UNIQUE KEY `idx-users-email` (`email`),
  ADD UNIQUE KEY `idx-users-email_confirm_token` (`email_confirm_token`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `blog_categories`
--
ALTER TABLE `blog_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT для таблицы `blog_comments`
--
ALTER TABLE `blog_comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT для таблицы `blog_posts`
--
ALTER TABLE `blog_posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT для таблицы `blog_tags`
--
ALTER TABLE `blog_tags`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT для таблицы `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `auth_assignments`
--
ALTER TABLE `auth_assignments`
  ADD CONSTRAINT `auth_assignments_ibfk_1` FOREIGN KEY (`item_name`) REFERENCES `auth_items` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `auth_items`
--
ALTER TABLE `auth_items`
  ADD CONSTRAINT `auth_items_ibfk_1` FOREIGN KEY (`rule_name`) REFERENCES `auth_rules` (`name`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `auth_item_children`
--
ALTER TABLE `auth_item_children`
  ADD CONSTRAINT `auth_item_children_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `auth_items` (`name`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `auth_item_children_ibfk_2` FOREIGN KEY (`child`) REFERENCES `auth_items` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `blog_comments`
--
ALTER TABLE `blog_comments`
  ADD CONSTRAINT `fk-blog_comments-parent_id` FOREIGN KEY (`parent_id`) REFERENCES `blog_comments` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk-blog_comments-post_id` FOREIGN KEY (`post_id`) REFERENCES `blog_posts` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk-blog_comments-user_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `blog_posts`
--
ALTER TABLE `blog_posts`
  ADD CONSTRAINT `fk-blog_posts-category_id` FOREIGN KEY (`category_id`) REFERENCES `blog_categories` (`id`),
  ADD CONSTRAINT `fk-blog_posts-user_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Ограничения внешнего ключа таблицы `blog_tag_assignments`
--
ALTER TABLE `blog_tag_assignments`
  ADD CONSTRAINT `fk-blog_tag_assignments-post_id` FOREIGN KEY (`post_id`) REFERENCES `blog_posts` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk-blog_tag_assignments-tag_id` FOREIGN KEY (`tag_id`) REFERENCES `blog_tags` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
