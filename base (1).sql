-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 26, 2025 at 06:39 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `base`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_us`
--

CREATE TABLE `about_us` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `service` varchar(255) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `about_us`
--

INSERT INTO `about_us` (`id`, `title`, `description`, `service`, `link`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Designing Experiences, Elevating Brands', 'We craft stunning digital experiences that blend creativity with strategy. Our expertise in UI/UX, web design, and marketing ensures that your brand stands out, engages users, and drives results. Whether you\'re looking for a sleek website, a user-friendly interface, or a powerful marketing strategy, we’ve got you covered.', 'Award Winning,Professional Staff,24/7 Support,Fair Prices', 'https://www.youtube.com/watch?v=xcJtL7QggTI', 'backend/home/about_us_banner_A0MS9q.png', '2025-02-17 22:18:01', '2025-03-03 07:32:23'),
(2, 'WebSolutionUs Visions', 'What sets Websolutionus apart, we believe in our commitment to providing actual value to our consumers. In the business, our dedication and quality are unrivaled. We\'re more than a technology service provider. We care as much about our customer’s achievements as we do about our own, therefore we share business risks with them so they may take chances with technological innovations.', NULL, NULL, 'backend/home/about_us_banner_uWR5aS.png', NULL, '2025-02-19 10:01:22'),
(3, 'WebSolutionUs Visions', 'What sets Websolutionus apart, we believe in our commitment to providing actual value to our consumers. In the business, our dedication and quality are unrivaled. We\'re more than a technology service provider. We care as much about our customer’s achievements as we do about our own, therefore we share business risks with them so they may take chances with technological innovations.', NULL, NULL, 'backend/home/our_mission_banner_VuXVLp.png', NULL, '2025-02-19 10:18:19');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `short_desp` text NOT NULL,
  `category` varchar(255) NOT NULL,
  `tags` varchar(255) DEFAULT NULL,
  `author` varchar(255) DEFAULT NULL,
  `date` varchar(255) NOT NULL,
  `content` longtext NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `short_desp`, `category`, `tags`, `author`, `date`, `content`, `image`, `created_at`, `updated_at`) VALUES
(1, 'UI UX design, dashboard, website, mobile app UI UX design', 'Fill out your billing details and create your account password on the registration page.', 'Chelsea Conner', 'Rem iure quasi simil', 'Howard Tran', '2016-12-31', '<font color=\"#000000\"><span style=\"font-family: system-ui, -apple-system, \"Segoe UI\", Roboto, \"Helvetica Neue\", \"Noto Sans\", \"Liberation Sans\", Arial, sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\", \"Noto Color Emoji\"; font-size: 16px;\">Custom </span><code style=\"\"><select></code><span style=\"font-family: system-ui, -apple-system, \"Segoe UI\", Roboto, \"Helvetica Neue\", \"Noto Sans\", \"Liberation Sans\", Arial, sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\", \"Noto Color Emoji\"; font-size: 16px;\"> menus need only a custom class, </span><code style=\"\">.form-select</code><span style=\"font-family: system-ui, -apple-system, \"Segoe UI\", Roboto, \"Helvetica Neue\", \"Noto Sans\", \"Liberation Sans\", Arial, sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\", \"Noto Color Emoji\"; font-size: 16px;\"> to trigger the custom styles. Custom styles are limited to the </span><code style=\"\"><select></code><span style=\"font-family: system-ui, -apple-system, \"Segoe UI\", Roboto, \"Helvetica Neue\", \"Noto Sans\", \"Liberation Sans\", Arial, sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\", \"Noto Color Emoji\"; font-size: 16px;\">’s initial appearance and cannot modify the </span><code style=\"\"><option></code><span style=\"font-family: system-ui, -apple-system, \"Segoe UI\", Roboto, \"Helvetica Neue\", \"Noto Sans\", \"Liberation Sans\", Arial, sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\", \"Noto Color Emoji\"; font-size: 16px;\">s due to browser limitations.</span></font>', 'backend/blog/blog_svBDvk.jpg', '2025-02-20 09:25:10', '2025-02-26 07:01:55'),
(2, 'Free UX & UI Agency Website Banner Template XD', 'Once you complete the checkout you will be automatically logged-in to your BlueHost account.  You will then need to login to WordPress. Click “Edit site” to be taken to the WordPress administrator dashboard.', 'Chelsea Conner', 'Sunt incididunt des', 'Destiny Thomas', '2000-04-07', '<div class=\"text__font-size--12 text--extrabold text__green--500 text__letter-spacing--2 text__transform--uppercase mb-2\" style=\"box-sizing: inherit; border: 0px; outline: 0px; font-size: 12px; font-family: proxima-nova, sans-serif; vertical-align: baseline; color: rgb(35, 206, 107); text-transform: uppercase; letter-spacing: 2px; font-weight: 800 !important;\">We Create High-Level Niche Blog Content</div><h2 style=\"box-sizing: inherit; border: 0px; outline: 0px; font-family: proxima-nova, sans-serif; vertical-align: baseline; line-height: 1.25em; color: rgb(49, 41, 41); font-size: 22px !important;\" class=\"\"><b>For The More Expert Niche, Use HOTH Blogger Pro</b></h2><div class=\"text__font-size--18 text__grey--700 text--regular mb-5\" style=\"box-sizing: inherit; border: 0px; outline: 0px; font-family: proxima-nova, sans-serif; vertical-align: baseline; font-size: 18px !important; color: rgb(100, 93, 93) !important;\"><p style=\"box-sizing: inherit; border: 0px; outline: 0px; font-style: inherit; font-family: inherit; vertical-align: baseline; line-height: 1.5em;\">Some niches need writers with a higher level of expertise. With Blogger Pro you not only get an SEO optimized blog, but you’ll also get access to qualified niche writers who’ve been published within your industry. Plus, they’ve been vetted by our staff to ensure they’re the perfect fit for you. Our niche writers have an emphasis on factual, top-notch quality.</p></div>', 'backend/blog/blog_kQ7jUD.jpg', '2025-02-20 09:40:16', '2025-02-26 07:02:14'),
(3, '10 Design Tips for Creating a Stunning App UI', 'On the following screen click “I’m following a tutorial, take me to the WP Admin Dashboard” to be logged-in.', 'Chelsea Conner', 'Ipsa cumque illum', 'Keelie Daugherty', '1985-06-08', '<h3 style=\"box-sizing: inherit; clear: both; font-family: roboto; font-weight: 700; color: rgb(64, 64, 64);\">Should you start a blog?</h3><p style=\"box-sizing: inherit; margin-bottom: 17px; color: rgb(64, 64, 64); font-family: Open-Sans-Regular; font-size: 19px;\">One of the misconceptions about starting a blog is that you need to be a great writer to be successful. Nothing could be further from the truth. People read blog sites to get a personal perspective on things, so most bloggers write in a very informal and conversational style.</p><p style=\"box-sizing: inherit; margin-bottom: 17px; color: rgb(64, 64, 64); font-family: Open-Sans-Regular; font-size: 19px;\">And because of the format, many successful bloggers will <span style=\"box-sizing: inherit; font-weight: bolder;\">write about a variety of topics</span> on the same blog.</p><p style=\"box-sizing: inherit; margin-bottom: 17px; color: rgb(64, 64, 64); font-family: Open-Sans-Regular; font-size: 19px;\">In addition, you don’t need to be an expert on any of the topics you write about to have a successful blog. For example, visitors to a cooking blog don’t want to read a textbook from a food scientist, they want to hear the experiences of someone who has actually cooked some real meals, mistakes and all.</p><p style=\"box-sizing: inherit; margin-bottom: 17px; color: rgb(64, 64, 64); font-family: Open-Sans-Regular; font-size: 19px;\"><span style=\"box-sizing: inherit; font-weight: bolder;\">To be successful as a blogger there is really just one requirement: a passion for your topic.</span></p><p style=\"box-sizing: inherit; margin-bottom: 17px; color: rgb(64, 64, 64); font-family: Open-Sans-Regular; font-size: 19px;\">At its heart, blogging is about sharing your knowledge with the world. Writing about things that you are passionate about makes the process of starting a successful blog so much easier. As long as you are writing about things that you are genuinely interested in, your passion will shine through and keep your visitors interested.</p><p style=\"box-sizing: inherit; margin-bottom: 17px; color: rgb(64, 64, 64); font-family: Open-Sans-Regular; font-size: 19px;\">So why would you go to the trouble of blogging? There are a few reasons:</p><ul style=\"margin-bottom: 1.5em; list-style-type: disc; color: rgb(64, 64, 64); font-family: Open-Sans-Regular; font-size: 19px;\"><li style=\"box-sizing: inherit;\"><span style=\"box-sizing: inherit; font-weight: bolder;\">Share your story.</span> A blog allows you to have a voice and be heard. You can share your story with the entire world if you so choose. One of the most common ways blogs are used are as a diary where the blogger writes about their daily experiences so that friends, family, and others can all be a part of their lives.</li><li style=\"box-sizing: inherit;\"><span style=\"box-sizing: inherit; font-weight: bolder;\">Make money from home.</span> Blogging can be quite lucrative if done correctly. The top bloggers in the world obviously earn quite a bit, but even a part-time blogger can expect to make a nice profit if things are done correctly. The best part about it is that blogging is a form of passive income, since you can spend just a few hours a week writing a piece of content and then continue to profit from it long after the the writing is finished. I go into much more detail on how to blog for money later in this guide.</li><li style=\"box-sizing: inherit;\"><span style=\"box-sizing: inherit; font-weight: bolder;\">Recognition for yourself or your business.</span> No, you probably won’t have paparazzi following you around because of your latest post. But a successful blog makes your idea into a reality, and can gain you a ton of recognition in your respective field. Many bloggers are known as experts just because of their blogs, and some have even gotten book and movie deals based on their blogs.</li><li style=\"box-sizing: inherit;\"><span style=\"box-sizing: inherit; font-weight: bolder;\">Find a community.</span> Blogging at its heart is interactive. You write a post and people comment on it. This is a good way to connect with people who are interested in the same things as you are. Blogging allows you to teach these people based on your experience, and it gives you the opportunity to learn from your readers as well.</li></ul><p style=\"box-sizing: inherit; margin-bottom: 17px; color: rgb(64, 64, 64); font-family: Open-Sans-Regular; font-size: 19px;\"><span style=\"box-sizing: inherit; font-weight: bolder;\">Ready to begin?</span> <a href=\"https://www.theblogstarter.com/#step1\" style=\"box-sizing: inherit; background-color: transparent; color: rgb(37, 115, 164);\"><span style=\"box-sizing: inherit; font-weight: bolder;\">Click here to go to Step #1 of the guide</span></a></p><p style=\"box-sizing: inherit; margin-bottom: 17px; color: rgb(64, 64, 64); font-family: Open-Sans-Regular; font-size: 19px;\"></p><h3 style=\"box-sizing: inherit; clear: both; font-family: roboto; font-weight: 700; color: rgb(64, 64, 64);\">What is a blog anyway?</h3><p style=\"box-sizing: inherit; margin-bottom: 17px; color: rgb(64, 64, 64); font-family: Open-Sans-Regular; font-size: 19px;\">In short, <span style=\"box-sizing: inherit; font-weight: bolder;\">a blog is a type of website that focuses mainly on written content</span>, also known as blog posts. In popular culture we most often hear about news blogs or celebrity blog sites, but as you’ll see in this guide, you can start a successful blog on just about any topic imaginable.</p><p style=\"box-sizing: inherit; margin-bottom: 17px; color: rgb(64, 64, 64); font-family: Open-Sans-Regular; font-size: 19px;\">Bloggers often write from a personal perspective that allows them to connect directly with their readers. In addition, most blogs also have a “comments” section where visitors can correspond with the blogger. Interacting with your visitors in the comments section helps to further the connection between the blogger and the reader.</p><p style=\"box-sizing: inherit; margin-bottom: 17px; color: rgb(64, 64, 64); font-family: Open-Sans-Regular; font-size: 19px;\">This direct connection to the reader is one of the main benefits of starting a blog. This connection allows you to interact and share ideas with other like-minded people. It also allows you to build trust with your readers. Having the trust and loyalty of your readers also opens up the door to making money from your blog, which is something I discuss later in this guide.</p><p style=\"box-sizing: inherit; margin-bottom: 17px; color: rgb(64, 64, 64); font-family: Open-Sans-Regular; font-size: 19px;\">The good news is that the internet is exploding with growth right now. More people than ever are online. This explosion in growth means more potential readers for your blog. In short, if you are thinking about starting a blog then there is no better time than right now.<a name=\"step1\" style=\"box-sizing: inherit; background-color: transparent; color: rgb(65, 105, 225);\"></a></p><p style=\"box-sizing: inherit; margin-bottom: 17px; color: rgb(64, 64, 64); font-family: Open-Sans-Regular; font-size: 19px;\"><span style=\"box-sizing: inherit; font-weight: bolder;\">Let’s start your blog!</span></p><p style=\"box-sizing: inherit; margin-bottom: 17px; color: rgb(64, 64, 64); font-family: Open-Sans-Regular; font-size: 19px;\"></p><h2 style=\"box-sizing: inherit; clear: both; font-family: roboto; font-weight: 700; color: rgb(64, 64, 64);\">Step 1: Pick a blog name</h2><p style=\"box-sizing: inherit; margin-bottom: 17px; color: rgb(64, 64, 64); font-family: Open-Sans-Regular; font-size: 19px;\">The first step is the choose a domain name for your blog. A domain name is the web address for your blog, such as MyNewBlog.com</p><p style=\"box-sizing: inherit; margin-bottom: 17px; color: rgb(64, 64, 64); font-family: Open-Sans-Regular; font-size: 19px;\">If you already have a domain name in mind for your blog, then you can <span style=\"box-sizing: inherit; font-weight: bolder;\">use the domain checker tool below</span> to make sure that no one else has already registered that name.</p><p style=\"box-sizing: inherit; margin-bottom: 17px; color: rgb(64, 64, 64); font-family: Open-Sans-Regular; font-size: 19px;\">If you are not sure what to name your blog, or what topic to blog about, skip to the <a href=\"https://www.theblogstarter.com/#blogname\" style=\"box-sizing: inherit; background-color: transparent; color: rgb(37, 115, 164);\">next section</a> for helpful tips on how to choose a blog name.</p><h3 class=\"domain-check-header\" style=\"box-sizing: inherit; clear: both; font-family: roboto; font-weight: 700; margin-right: 174.953px; margin-left: 174.953px; max-width: 250px; color: rgb(64, 64, 64); margin-top: 40px !important; margin-bottom: 15px !important; line-height: 1.3 !important;\">See if your blog name is available:</h3><div class=\"domain-check\" style=\"box-sizing: inherit; margin: 6.98438px 174.953px; width: 699.812px; color: rgb(64, 64, 64); font-family: Open-Sans-Regular; font-size: 19px;\"><form id=\"domain-check-form\" method=\"post\" style=\"box-sizing: inherit;\"><input id=\"input_domain_name\" name=\"input_domain_name\" type=\"text\" placeholder=\" Enter blog name & extension here...\" style=\"box-sizing: inherit; font-family: -apple-system, BlinkMacSystemFont, \"Segoe UI\", Roboto, Oxygen-Sans, Ubuntu, Cantarell, \"Helvetica Neue\", sans-serif; font-size: 13px; line-height: 1.5; overflow: visible; color: black; border-width: 1px; border-style: solid; border-color: rgb(124, 176, 255); border-radius: 0px; padding: 6.98438px; clear: both; font-weight: 700; width: 262.422px; display: block;\"><br style=\"box-sizing: inherit;\"><input id=\"input_domain_submit\" name=\"input_domain_submit\" type=\"submit\" value=\"check availability\" style=\"box-sizing: inherit; font-family: -apple-system, BlinkMacSystemFont, \"Segoe UI\", Roboto, Oxygen-Sans, Ubuntu, Cantarell, \"Helvetica Neue\", sans-serif; font-size: 16px; line-height: 1; margin-right: auto; margin-bottom: 20px; overflow: visible; border-width: 1px; border-style: solid; border-color: rgb(124, 176, 255); border-radius: 5px; background-image: linear-gradient(rgb(169, 3, 41) 0%, rgb(143, 2, 34) 44%, rgb(109, 0, 25) 100%); background-position: 0px 0px; background-size: initial; background-repeat: repeat; background-attachment: scroll; background-origin: initial; background-clip: initial; padding: 6.98438px; box-shadow: rgb(221, 221, 221) 2px 2px 0px 1px; display: block; position: relative; clear: both; font-weight: 700; width: 244.922px; color: rgb(255, 255, 255) !important;\"></form><div class=\"domain_check_result\" style=\"box-sizing: inherit;\"> </div></div><p style=\"box-sizing: inherit; margin-bottom: 17px; color: rgb(64, 64, 64); font-family: Open-Sans-Regular; font-size: 19px;\"><span style=\"box-sizing: inherit; font-weight: bolder;\">If your preferred domain name is available, then you can <a href=\"https://www.theblogstarter.com/#step2\" style=\"box-sizing: inherit; background-color: transparent; color: rgb(37, 115, 164);\">jump ahead to Step #2 to register your domain name</a></span></p><p style=\"box-sizing: inherit; margin-bottom: 17px; color: rgb(64, 64, 64); font-family: Open-Sans-Regular; font-size: 19px;\">If you find that the name you wanted is already taken there are a few things you can do:</p><ul style=\"margin-bottom: 1.5em; list-style-type: disc; color: rgb(64, 64, 64); font-family: Open-Sans-Regular; font-size: 19px;\"><li style=\"box-sizing: inherit;\"><span style=\"box-sizing: inherit; font-weight: bolder;\">Try a different domain extension.</span> If the .com version is already registered you may still be able to get the .net or .org version of the name.</li><p style=\"box-sizing: inherit; margin-bottom: 17px;\"><a name=\"blogname\" style=\"box-sizing: inherit; background-color: transparent; color: rgb(65, 105, 225);\"></a></p><li style=\"box-sizing: inherit;\"><span style=\"box-sizing: inherit; font-weight: bolder;\">Add small words.</span> Words like “a”, “my”, “best”, or “the”. For example, this site is called TheBlogStarter.com instead of BlogStarter.com.</li><li style=\"box-sizing: inherit;\"><span style=\"box-sizing: inherit; font-weight: bolder;\">Add dashes between words.</span> For example, scott-chow.com</li><li style=\"box-sizing: inherit;\"><span style=\"box-sizing: inherit; font-weight: bolder;\">Note:</span> You cannot use any spaces or punctuation, other than dashes, in a domain name. Capitalization is ignored.</li></ul><h3 style=\"box-sizing: inherit; clear: both; font-family: roboto; font-weight: 700; color: rgb(64, 64, 64);\">How to Choose a Blog Topic & Name</h3><p style=\"box-sizing: inherit; margin-bottom: 17px; color: rgb(64, 64, 64); font-family: Open-Sans-Regular; font-size: 19px;\">If you don’t have an idea for a name already, the first step is choosing your blog topic.</p><p style=\"box-sizing: inherit; margin-bottom: 17px; color: rgb(64, 64, 64); font-family: Open-Sans-Regular; font-size: 19px;\">If you’re not sure what to blog about, there are <u style=\"box-sizing: inherit;\">a few ways to find a good blog topic</u>:</p><ul style=\"margin-bottom: 1.5em; list-style-type: disc; color: rgb(64, 64, 64); font-family: Open-Sans-Regular; font-size: 19px;\"><li style=\"box-sizing: inherit;\"><span style=\"box-sizing: inherit; font-weight: bolder;\">Life experiences.</span> Everyone has lessons they have learned through life experience. Sharing this knowledge can be incredibly helpful to others in similar situations.<br style=\"box-sizing: inherit;\">For example, I recently helped a woman start her blog about being a fireman’s wife. She has a lot of experience and knowledge to share with others about this topic, and it has helped her connect with others in similar situations.<br style=\"box-sizing: inherit;\">Think about the things you have experienced in life. This could be related to your family (example: a blog about being a stay at home mom), work (a blog about experiences dealing with clients), or other life experiences (a blog about dealing with a troubling time such as a disease or divorce, or about a happy time such as preparing for a wedding or a birth of a child).</li><li style=\"box-sizing: inherit;\"><span style=\"box-sizing: inherit; font-weight: bolder;\">A personal blog.</span> A personal blog is a blog all about you. This will include a variety of topics, from things you do on a daily basis, to random thoughts and musings. This is a great way to share your thoughts with the world without having to stick to just one topic.</li><li style=\"box-sizing: inherit;\"><span style=\"box-sizing: inherit; font-weight: bolder;\">Hobbies & passions.</span> Hobbies or other interests you are passionate about are a great place to start. Cooking, travel, fashion, sports, and cars are all classic examples. But even blogs about more obscure hobbies can be successful, since the your audience is literally anyone in the world with the internet.</li></ul><p style=\"box-sizing: inherit; margin-bottom: 17px; color: rgb(64, 64, 64); font-family: Open-Sans-Regular; font-size: 19px;\">Once you have a topic it’s time to choose your blog name, also known as your domain name.</p><p style=\"box-sizing: inherit; margin-bottom: 17px; color: rgb(64, 64, 64); font-family: Open-Sans-Regular; font-size: 19px;\"><span style=\"box-sizing: inherit; font-weight: bolder;\">A good blog name should be descriptive</span> so that potential visitors can instantly tell what your blog is about just from the name.</p><p style=\"box-sizing: inherit; margin-bottom: 17px; color: rgb(64, 64, 64); font-family: Open-Sans-Regular; font-size: 19px;\">If you are blogging about one specific topic then you will definitely want to include that in some way when you pick a domain name. Try not to get hung-up on just one word though. For example, a cooking blog doesn’t necessarily have to have the word “cooking” in it. The words “food”, “recipes”, and “meals” would also let people know that your blog is about cooking.</p><p style=\"box-sizing: inherit; margin-bottom: 17px; color: rgb(64, 64, 64); font-family: Open-Sans-Regular; font-size: 19px;\">If you are planning to create a personal blog where you discuss a variety of topics then I recommend using your name, or some variation of it, since your blog is all about you. For example, I own the blog scottchow.com. You can also add your middle name or middle initial if you find your name is already taken. Or you could use a variation like “Scott Chow Blog” or “Blogging with Scott”.</p><p style=\"box-sizing: inherit; margin-bottom: 17px; color: rgb(64, 64, 64); font-family: Open-Sans-Regular; font-size: 19px;\"></p><p style=\"box-sizing: inherit; margin-bottom: 17px; color: rgb(64, 64, 64); font-family: Open-Sans-Regular; font-size: 19px;\"><span style=\"box-sizing: inherit; font-weight: bolder;\">Can’t decide on a good name for your blog? <a href=\"https://www.theblogstarter.com/contact-me/\" target=\"_blank\" rel=\"noopener noreferrer\" style=\"box-sizing: inherit; background-color: transparent; color: rgb(37, 115, 164);\">Contact me</a> and I will help you personally (for free)!</span></p><p style=\"box-sizing: inherit; margin-bottom: 17px; color: rgb(64, 64, 64); font-family: Open-Sans-Regular; font-size: 19px;\">Once you have some name ideas you will need to <span style=\"box-sizing: inherit; font-weight: bolder;\">choose a domain extension</span>.</p><p style=\"box-sizing: inherit; margin-bottom: 17px; color: rgb(64, 64, 64); font-family: Open-Sans-Regular; font-size: 19px;\">A .com domain extension is the most preferred, but .net, .org, .co, or other extension work just as well. It is also important to note that for the purposes of a blog domain you cannot have any spaces between words. <a name=\"step2\" style=\"box-sizing: inherit; background-color: transparent; color: rgb(65, 105, 225);\"></a>So “Blogging with Scott” becomes bloggingwithscott.com</p><h2 style=\"box-sizing: inherit; clear: both; font-family: roboto; font-weight: 700; color: rgb(64, 64, 64);\">Step 2: Get your blog online</h2><p style=\"box-sizing: inherit; margin-bottom: 17px; color: rgb(64, 64, 64); font-family: Open-Sans-Regular; font-size: 19px;\"><img decoding=\"async\" class=\"alignright size-full wp-image-1423 lazyloaded\" src=\"https://www.theblogstarter.com/wp-content/uploads/2020/12/start-your-first-blog.png\" alt=\"Simple steps to help you create a blog easily\" width=\"292\" height=\"256\" data-ll-status=\"loaded\" style=\"box-sizing: inherit; height: auto; max-width: 100%; border: 1px solid rgb(221, 221, 221); float: right; margin-left: 1.5em; margin-bottom: 1.5em; background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; padding: 6px;\"></p><p style=\"box-sizing: inherit; margin-bottom: 17px; color: rgb(64, 64, 64); font-family: Open-Sans-Regular; font-size: 19px;\">Now that you’ve got a name picked out it’s time to get your blog online.</p><p style=\"box-sizing: inherit; margin-bottom: 17px; color: rgb(64, 64, 64); font-family: Open-Sans-Regular; font-size: 19px;\">This might sound hard or technical, so let’s go step-by-step to <em style=\"box-sizing: inherit;\">make the process easy</em>.</p><p style=\"box-sizing: inherit; margin-bottom: 17px; color: rgb(64, 64, 64); font-family: Open-Sans-Regular; font-size: 19px;\">To get your blog up and running you need three things:</p><ol style=\"margin-bottom: 1.5em; list-style-position: initial; list-style-image: initial; color: rgb(64, 64, 64); font-family: Open-Sans-Regular; font-size: 19px;\"><li style=\"box-sizing: inherit;\"><span style=\"box-sizing: inherit; font-weight: bolder;\">Domain registration</span><br style=\"box-sizing: inherit;\"><p style=\"box-sizing: inherit; margin-bottom: 17px;\">To claim your domain name and use it for your blog you first need to register it.</p></li><li style=\"box-sizing: inherit;\"><span style=\"box-sizing: inherit; font-weight: bolder;\">Blog hosting</span><br style=\"box-sizing: inherit;\"><p style=\"box-sizing: inherit; margin-bottom: 17px;\">A blog host is a company that stores all of the files for your blog and delivers them to the visitor when they type in your blog name. <em style=\"box-sizing: inherit;\">You must have blog hosting in order to have a blog.</em></p></li><li style=\"box-sizing: inherit;\"><span style=\"box-sizing: inherit; font-weight: bolder;\">Blogging software</span><br style=\"box-sizing: inherit;\"><p style=\"box-sizing: inherit; margin-bottom: 17px;\">You also need to have the software to build your blog. In this guide I will show you how to build a blog using the <em style=\"box-sizing: inherit;\">WordPress blogging software</em>, because it is the most popular, customizable, and easiest to use.</p></li></ol><p style=\"box-sizing: inherit; margin-bottom: 17px; color: rgb(64, 64, 64); font-family: Open-Sans-Regular; font-size: 19px;\">The good news is that these all come packaged together from the blog host I recommend, and the one I show you how to use in this guide: BlueHost.</p>', 'backend/blog/blog_7AmzHQ.png', '2025-02-26 06:54:01', '2025-02-26 07:02:34'),
(4, 'Why integrating UI/UX in your website design is essential for growth?', 'How do I start a blog? You can watch me build and customize a beautiful blog from scratch here:', 'Oscar Horne', 'Maiores dolorem volu', 'Sage Russell', '1996-12-12', '<p style=\"box-sizing: inherit; margin-bottom: 17px; color: rgb(64, 64, 64); font-family: Open-Sans-Regular; font-size: 19px;\"><span style=\"box-sizing: inherit; font-weight: bolder;\">I personally use <a href=\"https://www.theblogstarter.com/go/bluehost/\" target=\"_blank\" rel=\"noopener noreferrer\" style=\"box-sizing: inherit; background-color: transparent; color: rgb(37, 115, 164);\">BlueHost</a> and I recommend them for all new bloggers because:</span></p><ul style=\"margin-bottom: 1.5em; list-style-type: disc; color: rgb(64, 64, 64); font-family: Open-Sans-Regular; font-size: 19px;\"><li style=\"box-sizing: inherit;\">They will <u style=\"box-sizing: inherit;\">register your custom domain name for free</u>, making sure no one else can take it.</li><li style=\"box-sizing: inherit;\">They offer an automatic <u style=\"box-sizing: inherit;\">free installation of the WordPress blogging software</u> (which I show you how to use in this guide).</li><li style=\"box-sizing: inherit;\">They offer reliable web hosting that has been <u style=\"box-sizing: inherit;\">recommended by WordPress since 2005</u> and they currently host over 2 million blogs and websites.</li><li style=\"box-sizing: inherit;\">They have helpful <u style=\"box-sizing: inherit;\">24/7 customer service</u> via phone or web chat.</li><li style=\"box-sizing: inherit;\">They have a <u style=\"box-sizing: inherit;\">30 day money back guarantee</u> if you are unsatisfied for any reason.</li></ul><p style=\"box-sizing: inherit; margin-bottom: 17px; color: rgb(64, 64, 64); font-family: Open-Sans-Regular; font-size: 19px;\"><span style=\"box-sizing: inherit; font-weight: bolder;\">You can use any <a href=\"https://www.theblogstarter.com/go/bluehost/\" target=\"_blank\" rel=\"noopener noreferrer\" style=\"box-sizing: inherit; background-color: transparent; color: rgb(37, 115, 164);\">BlueHost link</a> on this site to get the special Winter Sale price of $1.99 per month.</span></p><p style=\"box-sizing: inherit; margin-bottom: 17px; color: rgb(64, 64, 64); font-family: Open-Sans-Regular; font-size: 19px;\"></p><ul style=\"margin-bottom: 1.5em; list-style-type: disc; color: rgb(64, 64, 64); font-family: Open-Sans-Regular; font-size: 19px;\"><li style=\"box-sizing: inherit;\"><span style=\"box-sizing: inherit; font-weight: bolder;\">Disclosure:</span> BlueHost compensates The Blog Starter when you purchase through <a href=\"https://www.theblogstarter.com/go/bluehost/\" target=\"_blank\" rel=\"noopener noreferrer\" style=\"box-sizing: inherit; background-color: transparent; color: rgb(37, 115, 164);\">this link</a>, which means my services are free of charge to you!<br style=\"box-sizing: inherit;\">In fact, if you have any trouble at all setting up a blog with this tutorial, just <a href=\"https://www.theblogstarter.com/free-blog-install/\" target=\"_blank\" rel=\"noopener noreferrer\" style=\"box-sizing: inherit; background-color: transparent; color: rgb(37, 115, 164);\">contact me</a> and I will do it for you (free!).</li></ul><p style=\"box-sizing: inherit; margin-bottom: 17px; color: rgb(64, 64, 64); font-family: Open-Sans-Regular; font-size: 19px;\"></p><h3 style=\"box-sizing: inherit; clear: both; font-family: roboto; font-weight: 700; color: rgb(64, 64, 64);\">Let’s start your blog!</h3><h3 style=\"box-sizing: inherit; clear: both; font-family: roboto; font-weight: 700; color: rgb(64, 64, 64);\">1. <a href=\"https://www.theblogstarter.com/go/bluehost/\" target=\"_blank\" rel=\"noopener noreferrer\" style=\"box-sizing: inherit; background-color: transparent; color: rgb(37, 115, 164);\">Click here to get the special Winter Sale price of $1.99 per month on BlueHost before it expires</a> and then click “get started now”.</h3><p style=\"box-sizing: inherit; margin-bottom: 17px; color: rgb(64, 64, 64); font-family: Open-Sans-Regular; font-size: 19px;\"><a href=\"https://www.theblogstarter.com/go/bluehost/\" style=\"box-sizing: inherit; background-color: transparent; color: rgb(37, 115, 164);\"><img decoding=\"async\" class=\"aligncenter size-full wp-image-3600 lazyloaded\" src=\"https://www.theblogstarter.com/wp-content/uploads/2024/06/bluehost-199.jpg\" alt=\"Web hosting special discount\" width=\"600\" height=\"545\" data-ll-status=\"loaded\" style=\"box-sizing: inherit; height: auto; max-width: 100%; border: 1px solid rgb(221, 221, 221); clear: both; display: block; margin-left: auto; margin-right: auto; margin-bottom: 1.5em; background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; padding: 6px;\"></a></p><h3 style=\"box-sizing: inherit; clear: both; font-family: roboto; font-weight: 700; color: rgb(64, 64, 64);\">2. Select your plan. <span style=\"box-sizing: inherit; font-weight: bolder;\">I recommend that beginning bloggers get the Basic plan.</span> Click “Select” to choose your plan.</h3><ul style=\"margin-bottom: 1.5em; list-style-type: disc; color: rgb(64, 64, 64); font-family: Open-Sans-Regular; font-size: 19px;\"><li style=\"box-sizing: inherit;\">All of the BlueHost plans have everything you need to get your blog up and running, including a <span style=\"box-sizing: inherit; font-weight: bolder;\">free custom domain name, easy WordPress installation, web hosting, and custom email addresses (yourname@yourdomain.com)</span>.</li></ul><p style=\"box-sizing: inherit; margin-bottom: 17px; color: rgb(64, 64, 64); font-family: Open-Sans-Regular; font-size: 19px;\"><a href=\"https://www.theblogstarter.com/go/bluehost/\" target=\"_blank\" rel=\"noopener noreferrer\" style=\"box-sizing: inherit; background-color: transparent; color: rgb(37, 115, 164);\"><img decoding=\"async\" class=\"aligncenter size-full wp-image-3601 lazyloaded\" src=\"https://www.theblogstarter.com/wp-content/uploads/2024/06/hosting-plan.jpg\" alt=\"pick a hosting plan from Bluehost\" width=\"600\" height=\"258\" data-ll-status=\"loaded\" style=\"box-sizing: inherit; height: auto; max-width: 100%; border: 1px solid rgb(221, 221, 221); clear: both; display: block; margin-left: auto; margin-right: auto; margin-bottom: 1.5em; background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; padding: 6px;\"></a></p><h3 style=\"box-sizing: inherit; clear: both; font-family: roboto; font-weight: 700; color: rgb(64, 64, 64);\">3. Type in your domain name in the box and then click “Search for Domain” to start the registration process.</h3><ul style=\"margin-bottom: 1.5em; list-style-type: disc; color: rgb(64, 64, 64); font-family: Open-Sans-Regular; font-size: 19px;\"><li style=\"box-sizing: inherit;\">When you register a domain name your contact information gets put into a database of domain name owners. If you would rather keep your information private, be sure to check the box at the top right that says “Add Private Registration”.</li><li style=\"box-sizing: inherit;\">If you already own a domain name and want to use it for your blog, check the box at the top left</li></ul>', 'backend/blog/blog_8kj0r5.png', '2025-02-26 06:54:37', '2025-02-26 07:27:37');

-- --------------------------------------------------------

--
-- Table structure for table `blog_categories`
--

CREATE TABLE `blog_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog_categories`
--

INSERT INTO `blog_categories` (`id`, `name`, `image`, `slug`, `status`, `created_at`, `updated_at`) VALUES
(10, 'Fair & Festivals', 'backend/blog/category_5j5Y7X.jpg', 'fair-festivals', 1, '2025-03-24 11:56:03', '2025-03-24 11:56:03'),
(11, 'Travel & Tourism', 'backend/blog/category_EQPQJZ.jpg', 'travel-tourism', 1, '2025-03-24 11:56:13', '2025-03-24 11:56:13'),
(12, 'Fashion & LifeStyle', 'backend/blog/category_WHtRVf.webp', 'fashion-lifestyle', 1, '2025-03-24 11:56:26', '2025-03-24 11:56:26'),
(13, 'Cultural & Heritage', 'backend/blog/category_IqmtP7.webp', 'cultural-heritage', 1, '2025-03-24 11:56:38', '2025-03-24 11:56:38');

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `descriptions`
--

CREATE TABLE `descriptions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `descriptions`
--

INSERT INTO `descriptions` (`id`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Meet Our Creative Experts Driving Innovation', 'A skilled team dedicated to delivering top-notch UI/UX, web development, and marketing solutions.', '2025-03-04 05:01:07', '2025-03-04 05:01:07'),
(2, 'Client’s Testimonials', 'Real feedback from satisfied clients who have experienced our exceptional services firsthand.', '2025-03-04 05:49:52', '2025-03-04 05:49:52'),
(3, 'Latest Blogs & News', 'Stay updated with the latest trends, expert insights, and valuable tips on design, development, and digital marketing.', '2025-03-04 05:58:59', '2025-03-04 05:58:59'),
(4, 'Let’s Connect & Bring Your Ideas to Life', 'Have a project in mind? Get in touch with us today, and let\'s create something amazing together!', '2025-03-04 06:11:47', '2025-03-04 06:11:47'),
(5, 'Innovative Solutions for Digital Success', 'Innovative Solutions for Digital Success\r\nWe provide top-notch UI/UX design, web design, and marketing services to help businesses grow and thrive online. Our expert team crafts seamless user experiences, visually stunning websites, and data-driven marketing strategies that drive engagement and conversions.', '2025-03-04 06:21:05', '2025-03-04 06:21:05'),
(6, 'Flexible Plans for Every Need', 'We offer transparent and flexible pricing plans tailored to suit businesses of all sizes. Choose a plan that fits your goals and budget, and let’s build something amazing together!', '2025-03-04 06:27:59', '2025-03-04 06:27:59'),
(7, 'Showcasing Excellence in Design & Marketing', 'We take pride in delivering high-quality UI/UX designs, web solutions, and marketing strategies that drive success. Explore our portfolio to see how we transform ideas into stunning digital experiences.', '2025-03-04 06:32:15', '2025-03-04 06:32:15'),
(8, 'Trusted by Leading Brands & Businesses', 'We take pride in working with top brands and businesses, delivering exceptional digital solutions that drive success.', '2025-03-04 07:50:10', '2025-03-04 07:50:10');

-- --------------------------------------------------------

--
-- Table structure for table `emails`
--

CREATE TABLE `emails` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `emails`
--

INSERT INTO `emails` (`id`, `email`, `created_at`, `updated_at`) VALUES
(1, 'mipidewi@mailinator.com', '2025-02-18 07:59:47', '2025-02-18 07:59:47'),
(2, 'qihuga@mailinator.com', '2025-02-18 08:00:36', '2025-02-18 08:00:36'),
(3, 'buvuf@mailinator.com', '2025-02-18 08:04:38', '2025-02-18 08:04:38'),
(4, 'horamejodumailinator.com', '2025-02-18 08:04:52', '2025-02-18 08:04:52'),
(6, 'quletegamailinator.com', '2025-02-18 08:09:57', '2025-02-18 08:09:57'),
(7, 'jijar@mailinator', '2025-02-18 08:10:03', '2025-02-18 08:10:03'),
(8, 'zyqubon@mailinator.com', '2025-02-18 08:10:07', '2025-02-18 08:10:07'),
(9, 'gutebu@mailinator.com', '2025-02-18 08:11:29', '2025-02-18 08:11:29'),
(10, 'zajoc@mailinator.com', '2025-02-18 08:24:44', '2025-02-18 08:24:44'),
(11, 'hezeqig@mailinator.com', '2025-02-18 08:24:48', '2025-02-18 08:24:48'),
(12, 'xobuhukedi@mailinator.com', '2025-02-19 10:22:18', '2025-02-19 10:22:18'),
(13, 'cogakisoko@mailinator.com', '2025-02-25 09:42:11', '2025-02-25 09:42:11'),
(14, 'vyqulesuv@mailinator.com', '2025-02-28 07:25:21', '2025-02-28 07:25:21'),
(15, 'dybobu@mailinator.com', '2025-02-28 07:25:25', '2025-02-28 07:25:25'),
(16, 'jedeligy@mailinator.com', '2025-02-28 07:25:27', '2025-02-28 07:25:27'),
(17, 'tuzukicuh@mailinator.com', '2025-03-02 05:14:30', '2025-03-02 05:14:30'),
(18, 'rigu@mailinator.com', '2025-03-04 09:46:37', '2025-03-04 09:46:37'),
(19, 'rameqy@mailinator.com', '2025-03-04 10:39:56', '2025-03-04 10:39:56');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `gallary_image` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `gallary_image`, `status`, `created_at`, `updated_at`) VALUES
(5, 'backend/gallary/gallary_zRL7E3.webp', 0, NULL, '2025-03-25 23:33:43'),
(6, 'backend/gallary/gallary_40lG7a.webp', 1, NULL, '2025-03-25 23:31:46'),
(7, 'backend/gallary/gallary_SNdUs5.jpg', 1, NULL, '2025-03-25 23:31:47'),
(8, 'backend/gallary/gallary_aaSiDD.jpg', 1, NULL, '2025-03-25 23:31:48');

-- --------------------------------------------------------

--
-- Table structure for table `hero_sections`
--

CREATE TABLE `hero_sections` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `contact_us` varchar(255) NOT NULL,
  `free_quote` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hero_sections`
--

INSERT INTO `hero_sections` (`id`, `title`, `description`, `contact_us`, `free_quote`, `image`, `created_at`, `updated_at`) VALUES
(1, 'We specialize in UI/UX, Web Design, Marketing.', 'We craft innovative and scalable digital solutions to help businesses thrive in the digital world. Whether you need a high-performance website, custom software, or a seamless mobile app, our expert team is here to bring your vision to life.', '#support', '#aboutUs', 'backend/home/first_banner_AODMOM.png', '2025-02-17 21:51:49', '2025-03-05 09:17:21');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2025_02_17_023429_create_settings_table', 2),
(5, '2025_02_17_213157_create_hero_sections_table', 3),
(6, '2025_02_17_221307_create_about_us_table', 4),
(7, '2025_02_17_225437_create_newsletters_table', 5),
(8, '2025_02_17_234353_create_emails_table', 6),
(9, '2025_02_18_004046_create_services_table', 7),
(10, '2025_02_18_015545_create_projects_table', 8),
(11, '2025_02_18_034741_create_testimonials_table', 9),
(12, '2025_02_18_215019_create_teams_table', 10),
(13, '2025_02_19_001038_create_contacts_table', 11),
(14, '2025_02_20_001448_create_blogs_table', 12),
(15, '2025_02_20_021630_create_blog_categories_table', 13),
(16, '2025_02_23_232736_create_pricings_table', 14),
(17, '2025_02_24_214540_create_projects_table', 15),
(18, '2025_02_25_030735_create_models_table', 16),
(20, '2025_02_25_030922_create_settings_table', 17),
(21, '2025_02_25_035228_create_features_table', 18),
(22, '2025_03_03_204502_create_descriptions_table', 19),
(24, '2025_03_03_224101_create_brands_table', 20),
(28, '2025_03_25_195237_create_ship_divisions_table', 21),
(29, '2025_03_25_195302_create_ship_districts_table', 21),
(30, '2025_03_25_195322_create_ship_states_table', 21),
(31, '2025_03_25_210109_create_galleries_table', 22);

-- --------------------------------------------------------

--
-- Table structure for table `newsletters`
--

CREATE TABLE `newsletters` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `newsletters`
--

INSERT INTO `newsletters` (`id`, `title`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Subscribe Newsletters', 'Subscribe to our newsletter and receive the latest news about our products and services!', 'backend/home/first_banner_nAtjmh.png', '2025-02-17 22:57:14', '2025-03-02 05:12:59');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('i8uSiGjJ74yDJ8uSoYPld6TydfoOPZmMtsZ308rp', 1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/134.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiRHAwQm43TWVmemtHeHdGM1FEcnc5aXdkd252dHRUQXpkYXE2OXJVZiI7czozOiJ1cmwiO2E6MDp7fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjQ4OiJodHRwOi8vbG9jYWxob3N0L0JCLW1hZ2F6aW5lL3B1YmxpYy9nYWxsZXJ5L2xpc3QiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO30=', 1742967226);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `dark_logo` varchar(255) DEFAULT NULL,
  `favicon` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `twitter` varchar(255) DEFAULT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `youtube` varchar(255) DEFAULT NULL,
  `instagram` varchar(255) DEFAULT NULL,
  `linkedin` varchar(255) DEFAULT NULL,
  `whats_app` varchar(14) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `map_link` text DEFAULT NULL,
  `projects` int(11) DEFAULT NULL,
  `clients` int(11) DEFAULT NULL,
  `support` int(11) DEFAULT NULL,
  `workers` int(11) DEFAULT NULL,
  `promo_title` varchar(255) DEFAULT NULL,
  `promo_desp` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `logo`, `dark_logo`, `favicon`, `address`, `phone`, `email`, `twitter`, `facebook`, `youtube`, `instagram`, `linkedin`, `whats_app`, `title`, `map_link`, `projects`, `clients`, `support`, `workers`, `promo_title`, `promo_desp`, `created_at`, `updated_at`) VALUES
(1, 'backend/setting/logo_NBqfK4.png', 'backend/setting/dark_logo_g5IOzx.png', 'backend/setting/favicon_ePanFH.png', 'Dhaka, Mirpur-2', '+1 (871) 424-5909', 'nafugofedy@mailinator.com', '#', '#', '#', '#', '#', '01586548540', 'BB Magazine', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4967.473047998453!2d90.35640713404075!3d23.803186122749143!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c0e73f16be8d%3A0xcf14921445f8c82f!2sPizzaBurg!5e0!3m2!1sen!2sbd!4v1740874090332!5m2!1sen!2sbd', 452, 94, 1526, 32, 'Join 5000+ Startups Thriving with Base', 'Take your business to the next level with our expert solutions. Unlock growth, innovation, and success with seamless support and cutting-edge strategies.', NULL, '2025-03-25 12:17:42');

-- --------------------------------------------------------

--
-- Table structure for table `ship_districts`
--

CREATE TABLE `ship_districts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `division_id` bigint(20) UNSIGNED NOT NULL,
  `district_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ship_districts`
--

INSERT INTO `ship_districts` (`id`, `division_id`, `district_name`, `created_at`, `updated_at`) VALUES
(1, 1, 'Barguna', NULL, NULL),
(2, 1, 'Barishal', NULL, NULL),
(3, 1, 'Bhola', NULL, NULL),
(4, 1, 'Jhalokathi', NULL, NULL),
(5, 1, 'Patuakhali', NULL, NULL),
(6, 1, 'Pirojpur', NULL, NULL),
(7, 2, 'B.baria', NULL, NULL),
(8, 2, 'Bandarban', NULL, NULL),
(9, 2, 'Chandpur', NULL, NULL),
(10, 2, 'Chattogram', NULL, NULL),
(11, 2, 'Cox\'s bazar', NULL, NULL),
(12, 2, 'Cumilla', NULL, NULL),
(13, 2, 'Feni\n            ', NULL, NULL),
(14, 2, 'Khagrachari', NULL, NULL),
(15, 2, 'Laxmipur', NULL, NULL),
(16, 2, 'Noakhali\n            ', NULL, NULL),
(17, 2, 'Rangamati', NULL, NULL),
(18, 3, 'Dhaka', NULL, NULL),
(19, 3, 'Faridpur', NULL, NULL),
(20, 3, 'Gazipur', NULL, NULL),
(21, 3, 'Gopalganj', NULL, NULL),
(22, 3, 'Kishoreganj', NULL, NULL),
(23, 3, 'Madaripur', NULL, NULL),
(24, 3, 'Manikganj\n            ', NULL, NULL),
(25, 3, 'Munshiganj', NULL, NULL),
(26, 3, 'Narayanganj', NULL, NULL),
(27, 3, 'Narshingdi', NULL, NULL),
(28, 3, 'Rajbari', NULL, NULL),
(29, 3, 'Shariatpur', NULL, NULL),
(30, 3, 'Tangail', NULL, NULL),
(31, 4, 'Bagerhat', NULL, NULL),
(32, 4, 'Chuadanga', NULL, NULL),
(33, 4, 'Jashore', NULL, NULL),
(34, 4, 'Jhenaidah', NULL, NULL),
(35, 4, 'Khulna', NULL, NULL),
(36, 4, 'Kushtia', NULL, NULL),
(37, 4, 'Magura', NULL, NULL),
(38, 4, 'Meherpur', NULL, NULL),
(39, 4, 'Narail', NULL, NULL),
(40, 4, 'Satkhira\n            ', NULL, NULL),
(41, 5, 'Jamalpur', NULL, NULL),
(42, 5, 'Mymensingh\n            ', NULL, NULL),
(43, 5, 'Netrokona', NULL, NULL),
(44, 5, 'Sherpur', NULL, NULL),
(45, 6, 'Bogura\n            ', NULL, NULL),
(46, 6, 'C. nawabganj\n            ', NULL, NULL),
(47, 6, 'Joypurhat', NULL, NULL),
(48, 6, 'Naogaon', NULL, NULL),
(49, 6, 'Natore', NULL, NULL),
(50, 6, 'Pabna', NULL, NULL),
(51, 6, 'Rajshahi', NULL, NULL),
(52, 6, 'Sirajganj\n            ', NULL, NULL),
(53, 7, 'Dinajpur', NULL, NULL),
(54, 7, 'Gaibandha', NULL, NULL),
(55, 7, 'Kurigram\n            ', NULL, NULL),
(56, 7, 'Lalmonirhat', NULL, NULL),
(57, 7, 'Nilphamari\n            ', NULL, NULL),
(58, 7, 'Panchagarh\n            ', NULL, NULL),
(59, 7, 'Rangpur', NULL, NULL),
(60, 7, 'Thakurgaon', NULL, NULL),
(61, 8, 'Habiganj', NULL, NULL),
(62, 8, 'Moulvibazar', NULL, NULL),
(63, 8, 'Sunamganj', NULL, NULL),
(64, 8, 'Sylhet', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ship_divisions`
--

CREATE TABLE `ship_divisions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `division_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ship_divisions`
--

INSERT INTO `ship_divisions` (`id`, `division_name`, `created_at`, `updated_at`) VALUES
(1, 'Barishal', NULL, NULL),
(2, 'Chattogram', NULL, NULL),
(3, 'Dhaka', NULL, NULL),
(4, 'Khulna', NULL, NULL),
(5, 'MYMENSINGH', NULL, NULL),
(6, 'Rajshahi', NULL, NULL),
(7, 'Rangpur', NULL, NULL),
(8, 'Sylhet', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ship_states`
--

CREATE TABLE `ship_states` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `division_id` bigint(20) UNSIGNED NOT NULL,
  `district_id` bigint(20) UNSIGNED NOT NULL,
  `state_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ship_states`
--

INSERT INTO `ship_states` (`id`, `division_id`, `district_id`, `state_name`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'Amtali', NULL, NULL),
(2, 1, 1, 'Bamna', NULL, NULL),
(3, 1, 1, 'Barguna-S', NULL, NULL),
(4, 1, 1, 'Betagi', NULL, NULL),
(5, 1, 1, 'Patharghata', NULL, NULL),
(6, 1, 1, 'Taltali', NULL, NULL),
(7, 1, 2, 'Agailjhara', NULL, NULL),
(8, 1, 2, 'Babuganj', NULL, NULL),
(9, 1, 2, 'Bakerganj', NULL, NULL),
(10, 1, 2, 'Banaripara', NULL, NULL),
(11, 1, 2, 'Barishal-S', NULL, NULL),
(12, 1, 2, 'Gouranadi', NULL, NULL),
(13, 1, 2, 'Hizla', NULL, NULL),
(14, 1, 2, 'Mehendiganj', NULL, NULL),
(15, 1, 2, 'Muladi', NULL, NULL),
(16, 1, 2, 'Uzirpur', NULL, NULL),
(17, 1, 3, 'Bhola-S', NULL, NULL),
(18, 1, 3, 'Borhanuddin', NULL, NULL),
(19, 1, 3, 'Charfassion', NULL, NULL),
(20, 1, 3, 'Daulatkhan', NULL, NULL),
(21, 1, 3, 'Lalmohan', NULL, NULL),
(22, 1, 3, 'Monpura', NULL, NULL),
(23, 1, 3, 'Tazumuddin', NULL, NULL),
(24, 1, 4, 'Jhalokathi-S', NULL, NULL),
(25, 1, 4, 'Kathalia', NULL, NULL),
(26, 1, 4, 'Nalchity', NULL, NULL),
(27, 1, 4, 'Rajapur', NULL, NULL),
(28, 1, 5, 'Bauphal', NULL, NULL),
(29, 1, 5, 'Dashmina', NULL, NULL),
(30, 1, 5, 'Dumki', NULL, NULL),
(31, 1, 5, 'Galachipa', NULL, NULL),
(32, 1, 5, 'Kalapara', NULL, NULL),
(33, 1, 5, 'Mirjaganj', NULL, NULL),
(34, 1, 5, 'Patuakhali-S\n            ', NULL, NULL),
(35, 1, 5, 'Rangabali', NULL, NULL),
(36, 1, 6, 'Bhandaria', NULL, NULL),
(37, 1, 6, 'Kawkhali', NULL, NULL),
(38, 1, 6, 'Mothbaria', NULL, NULL),
(39, 1, 6, 'Nazirpur', NULL, NULL),
(40, 1, 6, 'Nesarabad', NULL, NULL),
(41, 1, 6, 'Pirojpur-S\n            ', NULL, NULL),
(42, 1, 6, 'Zianagar', NULL, NULL),
(43, 2, 7, 'Akhaura', NULL, NULL),
(44, 2, 7, 'Ashuganj', NULL, NULL),
(45, 2, 7, 'B.Baria-S', NULL, NULL),
(46, 2, 7, 'Bancharampur', NULL, NULL),
(47, 2, 7, 'Bijoynagar', NULL, NULL),
(48, 2, 7, 'Kasba', NULL, NULL),
(49, 2, 7, 'Nabinagar', NULL, NULL),
(50, 2, 7, 'Nasirnagar', NULL, NULL),
(51, 2, 7, 'Sarail', NULL, NULL),
(52, 2, 8, 'Alikadam', NULL, NULL),
(53, 2, 8, 'Bandarban-S', NULL, NULL),
(54, 2, 8, 'Lama', NULL, NULL),
(55, 2, 8, 'Naikhyongchari', NULL, NULL),
(56, 2, 8, 'Rowangchari', NULL, NULL),
(57, 2, 8, 'Ruma', NULL, NULL),
(58, 2, 8, 'Thanchi', NULL, NULL),
(59, 2, 9, 'Faridganj', NULL, NULL),
(60, 2, 9, 'Chandpur-S', NULL, NULL),
(61, 2, 9, 'Haimchar', NULL, NULL),
(62, 2, 9, 'Haziganj', NULL, NULL),
(63, 2, 9, 'Kachua', NULL, NULL),
(64, 2, 9, 'Matlab (Dakshin)', NULL, NULL),
(65, 2, 10, 'Shahrasti', NULL, NULL),
(66, 2, 9, 'Matlab (Uttar)', NULL, NULL),
(67, 2, 10, 'Anwara', NULL, NULL),
(68, 2, 10, 'Banskhali', NULL, NULL),
(69, 2, 10, 'Boalkhali', NULL, NULL),
(70, 2, 10, 'Chandanish', NULL, NULL),
(71, 2, 10, 'Fatikchari', NULL, NULL),
(72, 2, 10, 'Hathazari', NULL, NULL),
(73, 2, 10, 'Karnaphuli', NULL, NULL),
(74, 2, 10, 'Lohagara', NULL, NULL),
(75, 2, 10, 'Mirsharai', NULL, NULL),
(76, 2, 10, 'Patiya', NULL, NULL),
(77, 2, 10, 'Rangunia', NULL, NULL),
(78, 2, 10, 'Raojan', NULL, NULL),
(79, 2, 10, 'Sandwip', NULL, NULL),
(80, 2, 10, 'Satkania', NULL, NULL),
(81, 2, 10, 'Sitakunda', NULL, NULL),
(82, 2, 11, 'Chakoria', NULL, NULL),
(83, 2, 11, 'Cox\'S Bazar-S', NULL, NULL),
(84, 2, 11, 'Kutubdia', NULL, NULL),
(85, 2, 11, 'Moheskhali', NULL, NULL),
(86, 2, 11, 'Pekua', NULL, NULL),
(87, 2, 11, 'Ramu', NULL, NULL),
(88, 2, 11, 'Teknaf', NULL, NULL),
(89, 2, 11, 'Ukhiya', NULL, NULL),
(90, 2, 12, 'Barura', NULL, NULL),
(91, 2, 12, 'Brahmanpara', NULL, NULL),
(92, 2, 12, 'Burichong', NULL, NULL),
(93, 2, 12, 'Chandina', NULL, NULL),
(94, 2, 12, 'Chouddagram', NULL, NULL),
(95, 2, 12, 'Cumilla-S', NULL, NULL),
(96, 2, 12, 'Cumilla-S Daksin', NULL, NULL),
(97, 2, 12, 'Daudkandi', NULL, NULL),
(98, 2, 12, 'Debidwar', NULL, NULL),
(99, 2, 12, 'Homna', NULL, NULL),
(100, 2, 12, 'Laksham', NULL, NULL),
(101, 2, 12, 'Lalmai', NULL, NULL),
(102, 2, 12, 'Meghna', NULL, NULL),
(103, 2, 12, 'Monohorganj', NULL, NULL),
(104, 2, 12, 'Muradnagar', NULL, NULL),
(105, 2, 12, 'Nangalkot', NULL, NULL),
(106, 2, 12, 'Titas', NULL, NULL),
(107, 2, 13, 'Chhagalniya', NULL, NULL),
(108, 2, 13, 'Daganbhuiyan', NULL, NULL),
(109, 2, 13, 'Fulgazi', NULL, NULL),
(110, 2, 13, 'Feni-S', NULL, NULL),
(111, 2, 13, 'Porshuram', NULL, NULL),
(112, 2, 13, 'Sonagazi', NULL, NULL),
(113, 2, 14, 'Dighinala', NULL, NULL),
(114, 2, 14, 'Khagrachari-S', NULL, NULL),
(115, 2, 14, 'Laxmichari', NULL, NULL),
(116, 2, 14, 'Mahalchari', NULL, NULL),
(117, 2, 14, 'Manikchari', NULL, NULL),
(118, 2, 14, 'Matiranga', NULL, NULL),
(119, 2, 14, 'Panchari', NULL, NULL),
(120, 2, 14, 'Ramgarh', NULL, NULL),
(121, 2, 15, 'Komol Nagar', NULL, NULL),
(122, 2, 15, 'Laxmipur-S', NULL, NULL),
(123, 2, 15, 'Raipur', NULL, NULL),
(124, 2, 15, 'Ramganj', NULL, NULL),
(125, 2, 15, 'Ramgati', NULL, NULL),
(126, 2, 16, 'Begumganj', NULL, NULL),
(127, 2, 16, 'Chatkhil', NULL, NULL),
(128, 2, 16, 'Companiganj', NULL, NULL),
(129, 2, 16, 'Hatiya', NULL, NULL),
(130, 2, 16, 'Kabir Hat', NULL, NULL),
(131, 2, 16, 'Noakhali-S', NULL, NULL),
(132, 2, 16, 'Senbag', NULL, NULL),
(133, 2, 16, 'Sonaimuri', NULL, NULL),
(134, 2, 16, 'Subarna Char', NULL, NULL),
(135, 2, 17, 'Baghaichari', NULL, NULL),
(136, 2, 17, 'Barkal', NULL, NULL),
(137, 2, 17, 'Belaichari', NULL, NULL),
(138, 2, 17, 'Juraichari', NULL, NULL),
(139, 2, 17, 'Kaptai', NULL, NULL),
(140, 2, 17, 'Kaukhali', NULL, NULL),
(141, 2, 17, 'Langadu', NULL, NULL),
(142, 2, 17, 'Nanniarchar', NULL, NULL),
(143, 2, 17, 'Rajosthali', NULL, NULL),
(144, 2, 17, 'Rangamati-S', NULL, NULL),
(145, 3, 18, 'Dhamrai', NULL, NULL),
(146, 3, 18, 'Dohar', NULL, NULL),
(147, 3, 18, 'Keraniganj', NULL, NULL),
(148, 3, 18, 'Nawabganj', NULL, NULL),
(149, 3, 18, 'Savar', NULL, NULL),
(150, 3, 19, 'Alfadanga', NULL, NULL),
(151, 3, 19, 'Bhanga', NULL, NULL),
(152, 3, 19, 'Boalmari', NULL, NULL),
(153, 3, 19, 'Charbhadrasan', NULL, NULL),
(154, 3, 19, 'Faridpur-S', NULL, NULL),
(155, 3, 19, 'Madhukhali', NULL, NULL),
(156, 3, 19, 'Nagarkanda', NULL, NULL),
(157, 3, 19, 'Sadarpur', NULL, NULL),
(158, 3, 19, 'Saltha', NULL, NULL),
(159, 3, 20, 'Gazipur-S', NULL, NULL),
(160, 3, 20, 'Kaliakoir', NULL, NULL),
(161, 3, 20, 'Kaliakoir', NULL, NULL),
(162, 3, 20, 'Kapasia', NULL, NULL),
(163, 3, 20, 'Sreepur', NULL, NULL),
(164, 3, 21, 'Gopalganj-S', NULL, NULL),
(165, 3, 21, 'Kasiani', NULL, NULL),
(166, 3, 21, 'Kotwalipara', NULL, NULL),
(167, 3, 21, 'Muksudpur', NULL, NULL),
(168, 3, 21, 'Tungipara', NULL, NULL),
(169, 3, 22, 'Austagram', NULL, NULL),
(170, 3, 22, 'Bajitpur', NULL, NULL),
(171, 3, 22, 'Bhairab', NULL, NULL),
(172, 3, 22, 'Hossainpur', NULL, NULL),
(173, 3, 22, 'Itna', NULL, NULL),
(174, 3, 22, 'Karimganj', NULL, NULL),
(175, 3, 22, 'Katiadi', NULL, NULL),
(176, 3, 22, 'Kishoreganj-S', NULL, NULL),
(177, 3, 22, 'Kuliarchar', NULL, NULL),
(178, 3, 22, 'Mithamoin', NULL, NULL),
(179, 3, 22, 'Nikli', NULL, NULL),
(180, 3, 22, 'Pakundia', NULL, NULL),
(181, 3, 22, 'Tarail', NULL, NULL),
(182, 3, 23, 'Kalkini', NULL, NULL),
(183, 3, 23, 'Madaripur-S', NULL, NULL),
(184, 3, 23, 'Rajoir', NULL, NULL),
(185, 3, 23, 'Shibchar', NULL, NULL),
(186, 3, 24, 'Daulatpur', NULL, NULL),
(187, 3, 24, 'Ghior', NULL, NULL),
(188, 3, 24, 'Harirampur', NULL, NULL),
(189, 3, 24, 'Manikganj-S', NULL, NULL),
(190, 3, 24, 'Saturia', NULL, NULL),
(191, 3, 24, 'Shivalaya', NULL, NULL),
(192, 3, 24, 'Singair', NULL, NULL),
(193, 3, 25, 'Gazaria', NULL, NULL),
(194, 3, 25, 'Lauhajong', NULL, NULL),
(195, 3, 25, 'Munshiganj-S', NULL, NULL),
(196, 3, 25, 'Sirajdikhan', NULL, NULL),
(197, 3, 25, 'Sreenagar', NULL, NULL),
(198, 3, 25, 'Tongibari', NULL, NULL),
(199, 3, 26, 'Araihazar', NULL, NULL),
(200, 3, 26, 'Bandar', NULL, NULL),
(201, 3, 26, 'Narayanganj-S\n        ', NULL, NULL),
(202, 3, 26, 'Rupganj', NULL, NULL),
(203, 3, 26, 'Sonargaon', NULL, NULL),
(204, 3, 27, 'Belabo', NULL, NULL),
(205, 3, 27, 'Monohardi', NULL, NULL),
(206, 3, 27, 'Narshingdi-S', NULL, NULL),
(207, 3, 27, 'Palash', NULL, NULL),
(208, 3, 27, 'Raipura', NULL, NULL),
(209, 3, 27, 'Shibpur', NULL, NULL),
(210, 3, 28, 'Baliakandi', NULL, NULL),
(211, 3, 28, 'Goalanda', NULL, NULL),
(212, 3, 28, 'Kalukhali', NULL, NULL),
(213, 3, 28, 'Pangsha', NULL, NULL),
(214, 3, 28, 'Rajbari-S', NULL, NULL),
(215, 3, 29, 'Bhedarganj', NULL, NULL),
(216, 3, 29, 'Damuddya', NULL, NULL),
(217, 3, 29, 'Goshairhat', NULL, NULL),
(218, 3, 29, 'Janjira', NULL, NULL),
(219, 3, 29, 'Naria', NULL, NULL),
(220, 3, 29, 'Shariatpur-S', NULL, NULL),
(221, 3, 30, 'Basail', NULL, NULL),
(222, 3, 30, 'Bhuapur', NULL, NULL),
(223, 3, 30, 'Delduar', NULL, NULL),
(224, 3, 30, 'Dhanbari', NULL, NULL),
(225, 3, 30, 'Ghatail', NULL, NULL),
(226, 3, 30, 'Gopalpur', NULL, NULL),
(227, 3, 30, 'Kalihati', NULL, NULL),
(228, 3, 30, 'Madhupur', NULL, NULL),
(229, 3, 30, 'Mirzapur', NULL, NULL),
(230, 3, 30, 'Nagarpur', NULL, NULL),
(231, 3, 30, 'Shakhipur', NULL, NULL),
(232, 3, 30, 'Tangail-S', NULL, NULL),
(233, 4, 31, 'Bagerhat-S', NULL, NULL),
(234, 4, 31, 'Chitalmari', NULL, NULL),
(235, 4, 31, 'Fakirhat', NULL, NULL),
(236, 4, 31, 'Kachua', NULL, NULL),
(237, 4, 31, 'Mollahat', NULL, NULL),
(238, 4, 31, 'Mongla', NULL, NULL),
(239, 4, 31, 'Morrelganj', NULL, NULL),
(240, 4, 31, 'Rampal', NULL, NULL),
(241, 4, 31, 'Sharankhola', NULL, NULL),
(242, 4, 32, 'Alamdanga', NULL, NULL),
(243, 4, 32, 'Chuadanga-S\n    ', NULL, NULL),
(244, 4, 32, 'Damurhuda', NULL, NULL),
(245, 4, 32, 'Jibannagar', NULL, NULL),
(246, 4, 33, 'Abhoynagar', NULL, NULL),
(247, 4, 33, 'Bagherpara', NULL, NULL),
(248, 4, 33, 'Chowgacha', NULL, NULL),
(249, 4, 33, 'Jashore-S\n    ', NULL, NULL),
(250, 4, 33, 'Jhikargacha', NULL, NULL),
(251, 4, 33, 'Keshabpur', NULL, NULL),
(252, 4, 33, 'Monirampur', NULL, NULL),
(253, 4, 33, 'Sarsha', NULL, NULL),
(254, 4, 34, 'Harinakunda', NULL, NULL),
(255, 4, 34, 'Jhenaidah-S', NULL, NULL),
(256, 4, 34, 'Kaliganj', NULL, NULL),
(257, 4, 34, 'Kotchandpur', NULL, NULL),
(258, 4, 34, 'Moheshpur', NULL, NULL),
(259, 4, 34, 'Shailkupa', NULL, NULL),
(260, 4, 35, 'Batiaghata', NULL, NULL),
(261, 4, 35, 'Dacope', NULL, NULL),
(262, 4, 35, 'Dighalia', NULL, NULL),
(263, 4, 35, 'Dumuria', NULL, NULL),
(264, 4, 35, 'Koira', NULL, NULL),
(265, 4, 35, 'Paikgacha', NULL, NULL),
(266, 4, 35, 'Phultala', NULL, NULL),
(267, 4, 35, 'Rupsa', NULL, NULL),
(268, 4, 35, 'Terokhada', NULL, NULL),
(269, 4, 36, 'Bheramara', NULL, NULL),
(270, 4, 36, 'Daulatpur', NULL, NULL),
(271, 4, 36, 'Khoksha', NULL, NULL),
(272, 4, 36, 'Kumarkhali', NULL, NULL),
(273, 4, 36, 'Kushtia-S', NULL, NULL),
(274, 4, 36, 'Mirpur', NULL, NULL),
(275, 4, 37, 'Magura-S\n    ', NULL, NULL),
(276, 4, 37, 'Mohammadpur', NULL, NULL),
(277, 4, 37, 'Salikha', NULL, NULL),
(278, 4, 37, 'Sreepur', NULL, NULL),
(279, 4, 38, 'Gangni', NULL, NULL),
(280, 4, 38, 'Meherpur-S', NULL, NULL),
(281, 4, 38, 'Mujib Nagar', NULL, NULL),
(282, 4, 39, 'Kalia', NULL, NULL),
(283, 4, 39, 'Lohagara', NULL, NULL),
(284, 4, 39, 'Narail-S\n    ', NULL, NULL),
(285, 4, 40, 'Assasuni', NULL, NULL),
(286, 4, 40, 'Debhata', NULL, NULL),
(287, 4, 40, 'Kalaroa', NULL, NULL),
(288, 4, 40, 'Kaliganj', NULL, NULL),
(289, 4, 40, 'Satkhira-S', NULL, NULL),
(290, 4, 40, 'Shyamnagar', NULL, NULL),
(291, 4, 40, 'Tala', NULL, NULL),
(292, 5, 41, 'Bakshiganj', NULL, NULL),
(293, 5, 41, 'Dewanganj', NULL, NULL),
(294, 5, 41, 'Islampur', NULL, NULL),
(295, 5, 41, 'Jamalpur-S', NULL, NULL),
(296, 5, 41, 'Madarganj', NULL, NULL),
(297, 5, 41, 'Melendah', NULL, NULL),
(298, 5, 41, 'Sarishabari', NULL, NULL),
(299, 5, 42, 'Bhaluka', NULL, NULL),
(300, 5, 42, 'Dhobaura', NULL, NULL),
(301, 5, 42, 'Fulbaria', NULL, NULL),
(302, 5, 42, 'Gaffargaon', NULL, NULL),
(303, 5, 42, 'Gouripur', NULL, NULL),
(304, 5, 42, 'Haluaghat', NULL, NULL),
(305, 5, 42, 'Ishwarganj', NULL, NULL),
(306, 5, 42, 'Muktagacha', NULL, NULL),
(307, 5, 42, 'Mymensingh-S', NULL, NULL),
(308, 5, 42, 'Nandail', NULL, NULL),
(309, 5, 42, 'Phulpur', NULL, NULL),
(310, 5, 42, 'Tarakanda', NULL, NULL),
(311, 5, 42, 'Trishal', NULL, NULL),
(312, 5, 43, 'Atpara', NULL, NULL),
(313, 5, 43, 'Barhatta', NULL, NULL),
(314, 5, 43, 'Durgapur', NULL, NULL),
(315, 5, 43, 'Kalmakanda', NULL, NULL),
(316, 5, 43, 'Kendua', NULL, NULL),
(317, 5, 43, 'Khaliajuri', NULL, NULL),
(318, 5, 43, 'Madan', NULL, NULL),
(319, 5, 43, 'Mohanganj', NULL, NULL),
(320, 5, 43, 'Netrakona-S\n    ', NULL, NULL),
(321, 5, 43, 'Purbadhala', NULL, NULL),
(322, 5, 44, 'Jhenaigati', NULL, NULL),
(323, 5, 44, 'Nakla', NULL, NULL),
(324, 5, 44, 'Nalitabari', NULL, NULL),
(325, 5, 44, 'Sherpur-S', NULL, NULL),
(326, 5, 44, 'Sreebordi', NULL, NULL),
(327, 6, 45, 'Adamdighi', NULL, NULL),
(328, 6, 45, 'Bogura-S\n    ', NULL, NULL),
(329, 6, 45, 'Dhunot', NULL, NULL),
(330, 6, 45, 'Dhupchancia', NULL, NULL),
(331, 6, 45, 'Gabtali', NULL, NULL),
(332, 6, 45, 'Kahaloo', NULL, NULL),
(333, 6, 45, 'Nandigram', NULL, NULL),
(334, 6, 45, 'Sariakandi', NULL, NULL),
(335, 6, 45, 'Shajahanpur', NULL, NULL),
(336, 6, 45, 'Sherpur', NULL, NULL),
(337, 6, 45, 'Shibganj', NULL, NULL),
(338, 6, 45, 'Sonatala', NULL, NULL),
(339, 6, 46, 'Bholahat', NULL, NULL),
(340, 6, 46, 'Gomostapur', NULL, NULL),
(341, 6, 46, 'Nachol', NULL, NULL),
(342, 6, 46, 'Nawabganj-S', NULL, NULL),
(343, 6, 46, 'Shibganj', NULL, NULL),
(344, 6, 47, 'Akkelpur', NULL, NULL),
(345, 6, 47, 'Joypurhat-S', NULL, NULL),
(346, 6, 47, 'Kalai', NULL, NULL),
(347, 6, 47, 'Khetlal', NULL, NULL),
(348, 6, 47, 'Panchbibi', NULL, NULL),
(349, 6, 48, 'Atrai', NULL, NULL),
(350, 6, 48, 'Badalgachi', NULL, NULL),
(351, 6, 48, 'Dhamoirhat', NULL, NULL),
(352, 6, 48, 'Manda', NULL, NULL),
(353, 6, 48, 'Mohadevpur', NULL, NULL),
(354, 6, 48, 'Naogaon-S\n    ', NULL, NULL),
(355, 6, 48, 'Niamatpur', NULL, NULL),
(356, 6, 48, 'Patnitala', NULL, NULL),
(357, 6, 48, 'Porsha', NULL, NULL),
(358, 6, 48, 'Raninagar', NULL, NULL),
(359, 6, 48, 'Shapahar', NULL, NULL),
(360, 6, 49, 'Bagatipara', NULL, NULL),
(361, 6, 49, 'Baraigram', NULL, NULL),
(362, 6, 49, 'Gurudaspur', NULL, NULL),
(363, 6, 49, 'Lalpur', NULL, NULL),
(364, 6, 49, 'Naldanga', NULL, NULL),
(365, 6, 49, 'Natore-S', NULL, NULL),
(366, 6, 49, 'Singra', NULL, NULL),
(367, 6, 50, 'Atghoria', NULL, NULL),
(368, 6, 50, 'Bera', NULL, NULL),
(369, 6, 50, 'Bhangura', NULL, NULL),
(370, 6, 50, 'Chatmohar', NULL, NULL),
(371, 6, 50, 'Faridpur', NULL, NULL),
(372, 6, 50, 'Ishwardi', NULL, NULL),
(373, 6, 50, 'Pabna-S', NULL, NULL),
(374, 6, 50, 'Santhia', NULL, NULL),
(375, 6, 50, 'Sujanagar', NULL, NULL),
(376, 6, 51, 'Bagha', NULL, NULL),
(377, 6, 51, 'Bagmara', NULL, NULL),
(378, 6, 51, 'Charghat', NULL, NULL),
(379, 6, 51, 'Durgapur', NULL, NULL),
(380, 6, 51, 'Godagari', NULL, NULL),
(381, 6, 51, 'Mohanpur', NULL, NULL),
(382, 6, 51, 'Paba', NULL, NULL),
(383, 6, 51, 'Puthia', NULL, NULL),
(384, 6, 51, 'Tanore', NULL, NULL),
(385, 6, 52, 'Belkuchi', NULL, NULL),
(386, 6, 52, 'Chowhali', NULL, NULL),
(387, 6, 52, 'Kamarkhand', NULL, NULL),
(388, 6, 52, 'Kazipur', NULL, NULL),
(389, 6, 52, 'Raiganj', NULL, NULL),
(390, 6, 52, 'Shahzadpur', NULL, NULL),
(391, 6, 52, 'Sirajganj-S', NULL, NULL),
(392, 6, 52, 'Tarash', NULL, NULL),
(393, 6, 52, 'Ullapara', NULL, NULL),
(394, 7, 53, 'Birampur', NULL, NULL),
(395, 7, 53, 'Birganj', NULL, NULL),
(396, 7, 53, 'Birol', NULL, NULL),
(397, 7, 53, 'Bochaganj', NULL, NULL),
(398, 7, 53, 'Chirirbandar', NULL, NULL),
(399, 7, 53, 'Dinajpur-S\n    ', NULL, NULL),
(400, 7, 53, 'Fulbari', NULL, NULL),
(401, 7, 53, 'Ghoraghat', NULL, NULL),
(402, 7, 53, 'Hakimpur', NULL, NULL),
(403, 7, 53, 'Kaharol', NULL, NULL),
(404, 7, 53, 'Khanshama', NULL, NULL),
(405, 7, 53, 'Nawabganj', NULL, NULL),
(406, 7, 53, 'Parbatipur', NULL, NULL),
(407, 7, 54, 'Fulchari', NULL, NULL),
(408, 7, 54, 'Gaibandha-S', NULL, NULL),
(409, 7, 54, 'Gobindaganj', NULL, NULL),
(410, 7, 54, 'Palashbari', NULL, NULL),
(411, 7, 54, 'Sadullapur', NULL, NULL),
(412, 7, 54, 'Saghata', NULL, NULL),
(413, 7, 54, 'Sundarganj', NULL, NULL),
(414, 7, 55, 'Bhurungamari', NULL, NULL),
(415, 7, 55, 'Chilmari', NULL, NULL),
(416, 7, 55, 'Fulbari', NULL, NULL),
(417, 7, 55, 'Kurigram-S', NULL, NULL),
(418, 7, 55, 'Nageswari', NULL, NULL),
(419, 7, 55, 'Rajarhat', NULL, NULL),
(420, 7, 55, 'Rajibpur', NULL, NULL),
(421, 7, 55, 'Rowmari', NULL, NULL),
(422, 7, 55, 'Ulipur', NULL, NULL),
(423, 7, 56, 'Aditmari', NULL, NULL),
(424, 7, 56, 'Hatibandha', NULL, NULL),
(425, 7, 56, 'Kaliganj', NULL, NULL),
(426, 7, 56, 'Lalmonirhat-S', NULL, NULL),
(427, 7, 56, 'Patgram', NULL, NULL),
(428, 7, 57, 'Dimla', NULL, NULL),
(429, 7, 57, 'Domar', NULL, NULL),
(430, 7, 57, 'Jaldhaka', NULL, NULL),
(431, 7, 57, 'Kishoreganj', NULL, NULL),
(432, 7, 57, 'Nilphamari-S', NULL, NULL),
(433, 7, 57, 'Sayedpur', NULL, NULL),
(434, 7, 58, 'Atwari', NULL, NULL),
(435, 7, 58, 'Boda', NULL, NULL),
(436, 7, 58, 'Debiganj', NULL, NULL),
(437, 7, 58, 'Panchagarh-S', NULL, NULL),
(438, 7, 58, 'Tetulia', NULL, NULL),
(439, 7, 59, 'Badarganj', NULL, NULL),
(440, 7, 59, 'Gangachara', NULL, NULL),
(441, 7, 59, 'Kaunia', NULL, NULL),
(442, 7, 59, 'Mithapukur', NULL, NULL),
(443, 7, 59, 'Pirgacha', NULL, NULL),
(444, 7, 59, 'Pirganj', NULL, NULL),
(445, 7, 59, 'Rangpur-S', NULL, NULL),
(446, 7, 59, 'Taraganj', NULL, NULL),
(447, 7, 60, 'Baliadangi', NULL, NULL),
(448, 7, 60, 'Haripur', NULL, NULL),
(449, 7, 60, 'Pirganj', NULL, NULL),
(450, 7, 60, 'Ranisankail', NULL, NULL),
(451, 7, 60, 'Thakurgaon-S', NULL, NULL),
(452, 8, 61, 'Azmiriganj', NULL, NULL),
(453, 8, 61, 'Bahubal', NULL, NULL),
(454, 8, 61, 'Baniachong', NULL, NULL),
(455, 8, 61, 'Chunarughat', NULL, NULL),
(456, 8, 61, 'Habiganj-S', NULL, NULL),
(457, 8, 61, 'Lakhai', NULL, NULL),
(458, 8, 61, 'Madhabpur', NULL, NULL),
(459, 8, 61, 'Nabiganj', NULL, NULL),
(460, 8, 61, 'Sayestaganj', NULL, NULL),
(461, 8, 62, 'Barlekha', NULL, NULL),
(462, 8, 62, 'Juri', NULL, NULL),
(463, 8, 62, 'Kamalganj', NULL, NULL),
(464, 8, 62, 'Kulaura', NULL, NULL),
(465, 8, 62, 'Moulvibazar-S\n    ', NULL, NULL),
(466, 8, 62, 'Rajnagar', NULL, NULL),
(467, 8, 62, 'Sreemangal', NULL, NULL),
(468, 8, 63, 'Biswamvarpur', NULL, NULL),
(469, 8, 63, 'Chatak', NULL, NULL),
(470, 8, 63, 'Dakhin Sunamganj', NULL, NULL),
(471, 8, 63, 'Derai', NULL, NULL),
(472, 8, 63, 'Dharmapasha', NULL, NULL),
(473, 8, 63, 'Doarabazar', NULL, NULL),
(474, 8, 63, 'Jagannathpur', NULL, NULL),
(475, 8, 63, 'Jamalganj', NULL, NULL),
(476, 8, 63, 'Sulla', NULL, NULL),
(477, 8, 63, 'Sunamganj-S\n    ', NULL, NULL),
(478, 8, 63, 'Tahirpur', NULL, NULL),
(479, 8, 64, 'Balaganj', NULL, NULL),
(480, 8, 64, 'Beanibazar', NULL, NULL),
(481, 8, 64, 'Biswanath', NULL, NULL),
(482, 8, 64, 'Companiganj', NULL, NULL),
(483, 8, 64, 'Dakshin Surma', NULL, NULL),
(484, 8, 64, 'Fenchuganj', NULL, NULL),
(485, 8, 64, 'Golapganj', NULL, NULL),
(486, 8, 64, 'Gowainghat', NULL, NULL),
(487, 8, 64, 'Jointiapur', NULL, NULL),
(488, 8, 64, 'Kanaighat', NULL, NULL),
(489, 8, 64, 'Osmaninagar', NULL, NULL),
(490, 8, 64, 'Sylhet-S', NULL, NULL),
(491, 8, 64, 'Zakiganj', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `role` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `image`, `email_verified_at`, `password`, `remember_token`, `role`, `created_at`, `updated_at`) VALUES
(1, 'Shahadat Hosssain', 'shahadat@gmail.com', 'backend/users/users_n0QrZM.jpg', NULL, '$2y$12$aDpwfdhUmRBV7IYGPK9Nk.MZWGaE1tS1MDVnzPHMkQp67Lln9MMye', NULL, 'admin', '2025-02-17 06:46:49', '2025-03-24 22:39:25'),
(5, 'Mariko Gonzalez', 'voby@mailinator.com', 'backend/users/usersMD7mRr.jpg', NULL, '$2y$12$1khHqmyDql6Vw3dE4Z3gVuEARFDUwVtmkSktCuTmIdby.19tVYEO6', NULL, 'editor', '2025-03-24 22:01:57', '2025-03-24 22:38:45'),
(6, 'Cameron Smith', 'segyfehat@mailinator.com', NULL, NULL, '$2y$12$Scp968IkU/Kx8tfke.z8V.MHmXYlAkMsf3zgVUWnI6Lyn56UvKGM6', NULL, 'editor', '2025-03-24 22:52:19', '2025-03-24 22:52:19'),
(7, 'Test User', 'test@example.com', NULL, '2025-03-25 13:48:11', '$2y$12$WxxN97G21yQG/U8yShvWjODjy17TQ7skBwA4v9ssv76vgtHclKVpS', '8FrZdWPEzw', NULL, '2025-03-25 13:48:14', '2025-03-25 13:48:14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_us`
--
ALTER TABLE `about_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_categories`
--
ALTER TABLE `blog_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `descriptions`
--
ALTER TABLE `descriptions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `emails`
--
ALTER TABLE `emails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hero_sections`
--
ALTER TABLE `hero_sections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newsletters`
--
ALTER TABLE `newsletters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ship_districts`
--
ALTER TABLE `ship_districts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ship_divisions`
--
ALTER TABLE `ship_divisions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ship_states`
--
ALTER TABLE `ship_states`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_us`
--
ALTER TABLE `about_us`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `blog_categories`
--
ALTER TABLE `blog_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `descriptions`
--
ALTER TABLE `descriptions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `emails`
--
ALTER TABLE `emails`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `hero_sections`
--
ALTER TABLE `hero_sections`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `newsletters`
--
ALTER TABLE `newsletters`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ship_districts`
--
ALTER TABLE `ship_districts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `ship_divisions`
--
ALTER TABLE `ship_divisions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `ship_states`
--
ALTER TABLE `ship_states`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=492;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
