-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 23, 2023 at 08:20 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ffsd`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog_models`
--

CREATE TABLE `blog_models` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `excerpt` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_content` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `featured_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `author_id` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog_models`
--

INSERT INTO `blog_models` (`id`, `title`, `slug`, `excerpt`, `post_content`, `featured_image`, `author_id`, `created_at`, `updated_at`) VALUES
(3, 'Tesla workers report explosions, concussions, and grisly robot injuries in Texas factory.', 'Tesla', 'As Tesla begins building Cybertrucks, new reports of increased worker injury are unearthing at the Austin Gigafactory.', '<div class=\"duet--article--article-body-component\">\r\n<p class=\"duet--article--dangerously-set-cms-markup duet--article--standard-paragraph mb-20 font-fkroman text-18 leading-160 -tracking-1 selection:bg-franklin-20 dark:text-white dark:selection:bg-blurple [&amp;_a:hover]:shadow-highlight-franklin dark:[&amp;_a:hover]:shadow-highlight-blurple [&amp;_a]:shadow-underline-black dark:[&amp;_a]:shadow-underline-white\">As Tesla prepares to deliver its first Cybertrucks to customers, a new report paints a grisly picture of the Texas factory where the truck is being built, including a casting machine explosion and a robot allegedly goring a worker.</p>\r\n</div>\r\n<div class=\"duet--article--article-body-component\">\r\n<p class=\"duet--article--dangerously-set-cms-markup duet--article--standard-paragraph mb-20 font-fkroman text-18 leading-160 -tracking-1 selection:bg-franklin-20 dark:text-white dark:selection:bg-blurple [&amp;_a:hover]:shadow-highlight-franklin dark:[&amp;_a:hover]:shadow-highlight-blurple [&amp;_a]:shadow-underline-black dark:[&amp;_a]:shadow-underline-white\"><em>The Information</em>&nbsp;<a href=\"https://www.theinformation.com/articles/at-teslas-giant-texas-factory-injuries-and-safety-lapses-mount\">reported some of the gruesome incidents</a>&nbsp;that have occurred at the Gigafactory in Austin, Texas, where one out of every 21 workers were reportedly hurt in 2022. The data is derived from the required injury reports Tesla submits to OSHA.</p>\r\n</div>\r\n<div class=\"duet--article--article-body-component\">\r\n<p class=\"duet--article--dangerously-set-cms-markup duet--article--standard-paragraph mb-20 font-fkroman text-18 leading-160 -tracking-1 selection:bg-franklin-20 dark:text-white dark:selection:bg-blurple [&amp;_a:hover]:shadow-highlight-franklin dark:[&amp;_a:hover]:shadow-highlight-blurple [&amp;_a]:shadow-underline-black dark:[&amp;_a]:shadow-underline-white\">One incident in 2021 involved an engineer who approached a supposed shutdown robot arm but got clawed and pinned to the wall by the machine performing its programmed motions. A witness said the engineer bled from his back and arms, and after someone hit the emergency stop button, the engineer pulled himself out and fell into a chute, leaving a trail of blood.</p>\r\n</div>\r\n<div class=\"duet--article--article-body-component\">\r\n<p class=\"duet--article--dangerously-set-cms-markup duet--article--standard-paragraph mb-20 font-fkroman text-18 leading-160 -tracking-1 selection:bg-franklin-20 dark:text-white dark:selection:bg-blurple [&amp;_a:hover]:shadow-highlight-franklin dark:[&amp;_a:hover]:shadow-highlight-blurple [&amp;_a]:shadow-underline-black dark:[&amp;_a]:shadow-underline-white\">An injury report submitted to Travis County, Texas, by Tesla reportedly has a robot-related incident but does not clearly match the one from witness accounts. The reported one does not state the person missed any time from work. In unrelated incidents in August 2022, a worker&rsquo;s ankle got caught under a cart, which put them out of work for 127 days. Days later, another worker suffered a head injury which put them out for 85 days.</p>\r\n</div>', 'uploads/1700732863.jpg', 1, '2023-11-23 08:47:43', '2023-11-23 09:41:21'),
(4, 'YouTube says it’s not slowing down Firefox — just ad blockers.', 'ddressing complaints that YouTube videos are taking extra long to load on Firefox, YouTube says it’s down to its efforts to keep the ads flowing', 'The fight between youtube and Firefox', '<div class=\"duet--article--article-body-component\">\r\n<p class=\"duet--article--dangerously-set-cms-markup duet--article--standard-paragraph mb-20 font-fkroman text-18 leading-160 -tracking-1 selection:bg-franklin-20 dark:text-white dark:selection:bg-blurple [&amp;_a:hover]:shadow-highlight-franklin dark:[&amp;_a:hover]:shadow-highlight-blurple [&amp;_a]:shadow-underline-black dark:[&amp;_a]:shadow-underline-white\">Users on&nbsp;<a href=\"https://www.reddit.com/r/firefox/comments/17zdpkl/this_behaviour_from_google_is_beyond_disgusting/?context=3\">Reddit</a>&nbsp;and&nbsp;<a href=\"https://news.ycombinator.com/item?id=38345968\">Hacker News</a>&nbsp;are complaining that YouTube seems to have inserted an intentional five-second delay before video pages will load in Mozilla&rsquo;s Firefox and occasionally some other browsers. YouTube tells&nbsp;<em>The Verge</em>&nbsp;that these users are right about the delay, but the browser has nothing to do with it &mdash; it&rsquo;s part of the company&rsquo;s efforts to quash ad blockers across all platforms.</p>\r\n</div>\r\n<div class=\"duet--article--article-body-component\">\r\n<p class=\"duet--article--dangerously-set-cms-markup duet--article--standard-paragraph mb-20 font-fkroman text-18 leading-160 -tracking-1 selection:bg-franklin-20 dark:text-white dark:selection:bg-blurple [&amp;_a:hover]:shadow-highlight-franklin dark:[&amp;_a:hover]:shadow-highlight-blurple [&amp;_a]:shadow-underline-black dark:[&amp;_a]:shadow-underline-white\">&ldquo;In the past week, users using ad blockers may have experienced suboptimal viewing, which included delays in loading, regardless of the browser they are using,&rdquo; YouTube communications manager Christopher Lawton wrote in an email. Lawton wrote that disabling the ad blocker should resolve the issue, though users &ldquo;may still experience a temporary delay in loading&rdquo; until their browser has refreshed.</p>\r\n</div>\r\n<div class=\"duet--article--article-body-component\">\r\n<p class=\"duet--article--dangerously-set-cms-markup duet--article--standard-paragraph mb-20 font-fkroman text-18 leading-160 -tracking-1 selection:bg-franklin-20 dark:text-white dark:selection:bg-blurple [&amp;_a:hover]:shadow-highlight-franklin dark:[&amp;_a:hover]:shadow-highlight-blurple [&amp;_a]:shadow-underline-black dark:[&amp;_a]:shadow-underline-white\">Lawton also said that users will keep seeing issues like this as YouTube&rsquo;s ad-blocker detection methods improve.</p>\r\n</div>\r\n<div class=\"duet--article--article-body-component\">\r\n<p class=\"duet--article--dangerously-set-cms-markup duet--article--standard-paragraph mb-20 font-fkroman text-18 leading-160 -tracking-1 selection:bg-franklin-20 dark:text-white dark:selection:bg-blurple [&amp;_a:hover]:shadow-highlight-franklin dark:[&amp;_a:hover]:shadow-highlight-blurple [&amp;_a]:shadow-underline-black dark:[&amp;_a]:shadow-underline-white\">The issue was initially reported as targeting Firefox users, but users online have said they&rsquo;re seeing the delay in Chrome and Edge, too. Reddit and Hacker News users who&rsquo;ve examined the code that appears to be causing the delay have said they see no indication that YouTube checks what kind of browser is in use. Mozilla&rsquo;s senior brand manager Damiano DeMonte wrote in an email to&nbsp;<em>The Verge&nbsp;</em>that &ldquo;there&rsquo;s no evidence that this is a Firefox-specific issue.&rdquo;</p>\r\n</div>\r\n<div class=\"duet--article--article-body-component\">&nbsp;</div>', 'uploads/1700744741.jpg', 1, '2023-11-23 09:18:08', '2023-11-23 12:05:41'),
(5, 'OpenAI rival Anthropic makes its Claude chatbot even more useful. wows', 'Claude', 'Open AI still going harder', '<div class=\"duet--article--article-body-component\">\r\n<p class=\"duet--article--dangerously-set-cms-markup duet--article--standard-paragraph mb-20 font-fkroman text-18 leading-160 -tracking-1 selection:bg-franklin-20 dark:text-white dark:selection:bg-blurple [&amp;_a:hover]:shadow-highlight-franklin dark:[&amp;_a:hover]:shadow-highlight-blurple [&amp;_a]:shadow-underline-black dark:[&amp;_a]:shadow-underline-white\">While OpenAI is in the&nbsp;<a href=\"https://www.theverge.com/23966325/openai-sam-altman-fired-turmoil-chatgpt\">middle of an existential crisis</a>, there&rsquo;s a new chatbot update from Anthropic, the&nbsp;<a href=\"https://www.theverge.com/2023/2/3/23584540/google-anthropic-investment-300-million-openai-chatgpt-rival-claude\">Google-backed AI startup</a>&nbsp;founded by former OpenAI engineers who left over disagreements about the company&rsquo;s increasingly commercial direction as its Microsoft partnership went on.</p>\r\n</div>\r\n<div class=\"duet--article--article-body-component\">\r\n<p class=\"duet--article--dangerously-set-cms-markup duet--article--standard-paragraph mb-20 font-fkroman text-18 leading-160 -tracking-1 selection:bg-franklin-20 dark:text-white dark:selection:bg-blurple [&amp;_a:hover]:shadow-highlight-franklin dark:[&amp;_a:hover]:shadow-highlight-blurple [&amp;_a]:shadow-underline-black dark:[&amp;_a]:shadow-underline-white\"><a href=\"https://www.anthropic.com/index/claude-2-1\">Anthropic has announced</a>&nbsp;that the latest update of its chatbot,&nbsp;<a href=\"https://claude.ai/\">Claude</a> 2.1, can digest up to 200,000 tokens at once for Pro tier users, which it says equals over 500 pages of material.</p>\r\n</div>', 'uploads/1700734890.jpg', 1, '2023-11-23 09:21:30', '2023-11-23 09:41:54'),
(6, 'Proton Drive introduces private and encrypted cloud storage for Mac', 'A good time for proton', 'Proton comes for Mac', '<p>Cloud storage is a critical piece of our mission to build an internet that protects your privacy and secures your data. It&rsquo;s where you keep your most sensitive files, from personal photos to identity documents. Unfortunately, the leading cloud storage providers today can scan your data and don&rsquo;t use end-to-end encryption by default.</p>\r\n<p>That&rsquo;s why we&rsquo;re pleased to announce that Proton Drive&rsquo;s encrypted cloud storage is now available on all major platforms with the launch of our macOS app. In addition to Proton Drive apps for iPhone, Android, Windows, and web, we now offer Mac users a privacy-first alternative to Big Tech.&nbsp;</p>\r\n<p>Being available on all major platforms is an important milestone because&nbsp;<strong>Proton is platform agnostic</strong>. Whether you use Mac or Windows, or iPhone or Android, Proton does not tie you to any specific hardware or operating system, and if you use Proton Drive, you can seamlessly move from one platform to another without losing functionality.&nbsp;</p>\r\n<p>The app lets you easily sync files between your Mac and the cloud, access them offline, and free up space on your computer &mdash; all with&nbsp;<strong>end-to-end encryption and privacy by default</strong>.</p>', 'uploads/1700735194.svg', 1, '2023-11-23 09:26:34', '2023-11-23 09:26:34'),
(7, 'Apple introduces iPhone 14 and iPhone 14 Plus', 'A new, larger 6.7-inch size joins the popular 6.1-inch design, featuring a new dual-camera system, Crash Detection, a smartphone industry-first safety service with Emergency SOS via satellite, and the best battery life on iPhone', 'Apple today introduced iPhone 14 and iPhone 14 Plus, featuring two sizes — 6.1 inches and 6.7 inches — in a sophisticated design with impressive camera upgrades and groundbreaking new safety capabilities.', '<div class=\"pagebody-copy\"><strong><span class=\"pagebody-location\">CUPERTINO, CALIFORNIA</span>&nbsp;</strong>Apple today introduced&nbsp;<a href=\"https://www.apple.com/iphone-14/\" target=\"_blank\" rel=\"noopener\">iPhone 14</a>&nbsp;and iPhone 14 Plus, featuring two sizes &mdash; 6.1 inches and 6.7 inches &mdash; in a sophisticated design with impressive camera upgrades and groundbreaking new safety capabilities. iPhone 14 and iPhone 14 Plus take stunning photos and video with a powerful camera system featuring new Main and front TrueDepth cameras, the Ultra Wide camera for unique perspectives, and Photonic Engine &mdash; an enhanced image pipeline. Both models include the A15 Bionic chip with a 5-core GPU, which offers incredible performance and efficiency for demanding workloads, and is designed with privacy and security built in. iPhone 14 and iPhone 14 Plus introduce critical safety capabilities such as Crash Detection and Emergency SOS via satellite, a first in the industry. And with amazing battery life, industry-leading durability features, and super-fast 5G, this iPhone lineup is more advanced than ever before. iPhone 14 and iPhone 14 Plus will be available in midnight, blue, starlight, purple, and (PRODUCT)RED<sup>1</sup>&nbsp;finishes. Pre-orders begin Friday, September 9, with availability for iPhone 14 beginning Friday, September 16, and availability for iPhone 14 Plus beginning Friday, October 7.</div>\r\n<div class=\"pagebody-copy\">&ldquo;Our customers rely on their iPhone every day, and iPhone 14 and iPhone 14 Plus introduce groundbreaking new technologies and important safety capabilities. With the new, larger 6.7-inch display on iPhone 14 Plus, users can enjoy more content onscreen when browsing the web and even more text,&rdquo; said Greg Joswiak, Apple&rsquo;s senior vice president of Worldwide Marketing. &ldquo;Both phones have a powerful new Main camera with a huge leap in low-light performance, advanced connectivity capabilities with 5G and eSIM, and the incredible performance of A15 Bionic, which helps enable even better battery life. All of this, tightly integrated with iOS 16, makes iPhone more essential than ever.&rdquo; &nbsp;</div>', 'uploads/1700736369.jpg', 1, '2023-11-23 09:46:09', '2023-11-23 09:46:09');

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
(1, '2023_11_22_074357_create_blog_models_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `username`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Kingsley', 'uche', 'kamma', 'olekamma.uche@gmail.com', NULL, '$2y$10$/MjP2DAFDO0kJVs/x7hxIu.wydjl.YE2UtNJm9X9vGOYDqNzBxgFS', NULL, '2023-11-21 23:55:00', '2023-11-21 23:55:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog_models`
--
ALTER TABLE `blog_models`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog_models`
--
ALTER TABLE `blog_models`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
