-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 24, 2025 at 07:31 PM
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
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `white_logo` varchar(255) NOT NULL,
  `dark_logo` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `name`, `white_logo`, `dark_logo`, `created_at`, `updated_at`) VALUES
(3, 'logitech', 'backend/brands/white_logo_hpRv0t.svg', 'backend/brands/dark_logo_rH6sPj.svg', '2025-03-04 07:27:42', '2025-03-04 07:27:42'),
(4, 'dropcam', 'backend/brands/white_logo_8WajTL.svg', 'backend/brands/dark_logo_7wlxkr.svg', '2025-03-04 07:28:08', '2025-03-04 07:28:08'),
(5, 'Ryzen', 'backend/brands/white_logo_BMXgQ1.svg', 'backend/brands/dark_logo_ae4Lpc.svg', '2025-03-04 07:29:33', '2025-03-04 07:29:33'),
(6, 'adidas', 'backend/brands/white_logo_xbydWw.svg', 'backend/brands/dark_logo_FtBAtn.svg', '2025-03-04 07:30:02', '2025-03-04 07:30:02'),
(7, 'mandiri', 'backend/brands/white_logo_eWWKur.svg', 'backend/brands/dark_logo_vQyfLQ.svg', '2025-03-04 07:30:28', '2025-03-04 07:30:28'),
(8, 'amazon', 'backend/brands/white_logo_nA7Nr9.svg', 'backend/brands/dark_logo_3fTedJ.svg', '2025-03-04 07:30:46', '2025-03-04 07:30:46');

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
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `phone`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(1, 'Inez Weeks', 'qujineve@mailinator.com', '', 'Ea non ex dolore fug', 'Enim distinctio Dol', '2025-02-19 08:13:33', '2025-02-19 08:13:33'),
(2, 'Oscar Horne', 'dytujehed@mailinator.com', '', 'Ea non ex dolore fug', 'hello', '2025-02-19 08:15:48', '2025-02-19 08:15:48'),
(3, 'Jackson Soto', 'nodiwib@mailinator.com', '', 'Asperiores nobis fug', 'Magnam consequatur', '2025-02-25 08:45:17', '2025-02-25 08:45:17'),
(4, 'Castor Douglas', 'pebode@mailinator.com', '', 'Dolorem fugiat illum', 'Amet est in volupt', '2025-02-25 08:49:19', '2025-02-25 08:49:19'),
(5, 'Emery Cabrera', 'benypufud@mailinator.com', '', 'Inventore sed ex fug', 'Ex reiciendis qui ex', '2025-02-25 09:05:00', '2025-02-25 09:05:00'),
(6, 'Ivan Duran', 'cedaroj@mailinator.com', '', 'Dolorem quis aute se', 'Pariatur Consequatu', '2025-02-28 07:01:23', '2025-02-28 07:01:23'),
(7, 'Quinn Mcmahon', 'wanow@mailinator.com', '', 'Sunt dicta voluptate', 'Magna expedita liber', '2025-02-28 07:01:47', '2025-02-28 07:01:47'),
(8, 'Amy Tyler', 'jerudu@mailinator.com', '', 'Eos recusandae Imp', 'Non quaerat et volup', '2025-02-28 07:02:40', '2025-02-28 07:02:40'),
(9, 'Dean Howell', 'zeto@mailinator.com', '', 'Deserunt est qui ul', 'Voluptas omnis vel e', '2025-02-28 07:04:12', '2025-02-28 07:04:12'),
(10, 'Phillip Kerr', 'dotynogiwi@mailinator.com', '', 'Facilis molestiae es', 'Neque ullam est qui', '2025-02-28 07:05:58', '2025-02-28 07:05:58'),
(11, 'Herrod Harrell', 'jedeligy@mailinator.com', '', 'Aute nihil perferend', 'Inventore id beatae', '2025-02-28 07:25:29', '2025-02-28 07:25:29'),
(12, 'Roanna Nunez', 'tuzukicuh@mailinator.com', '', 'Officia non laudanti', 'In aliquid est adip', '2025-03-02 05:14:37', '2025-03-02 05:14:37'),
(13, 'Nayda Meadows', 'lexeqyge@mailinator.com', '', 'Veniam et dolore cu', 'Consequatur quisqua', '2025-03-04 09:22:41', '2025-03-04 09:22:41'),
(14, 'Athena Bradford', 'nufu@mailinator.com', '', 'Et autem asperiores', 'Dolores dolorum elig', '2025-03-04 09:23:55', '2025-03-04 09:23:55'),
(15, 'Michelle Mcfarland', 'nenybuhyv@mailinator.com', '', 'Enim dicta incididun', 'Sit voluptatem susci', '2025-03-04 09:34:46', '2025-03-04 09:34:46');

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
-- Table structure for table `features`
--

CREATE TABLE `features` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `icon` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `features`
--

INSERT INTO `features` (`id`, `title`, `icon`, `description`, `created_at`, `updated_at`) VALUES
(8, 'Intuitive Navigation', 'backend/feature/feature_7iQEsN.svg', 'We design seamless and user-friendly interfaces that ensure effortless navigation and enhanced user engagement.', '2025-03-03 07:08:18', '2025-03-03 07:08:18'),
(9, 'Responsive & Adaptive Design', 'backend/feature/feature_4IZ64h.svg', 'Our designs adapt perfectly across all screen sizes and devices, providing a consistent experience for every user.', '2025-03-03 07:11:43', '2025-03-03 07:11:43'),
(10, 'Conversion-Focused UI', 'backend/feature/feature_ArsZOb.svg', 'We craft visually appealing interfaces optimized for higher user interaction, engagement, and conversions.', '2025-03-03 07:11:59', '2025-03-03 07:11:59');

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
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
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
(24, '2025_03_03_224101_create_brands_table', 20);

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
-- Table structure for table `pricings`
--

CREATE TABLE `pricings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `price` double NOT NULL,
  `discount_price` float DEFAULT NULL,
  `description` varchar(255) NOT NULL,
  `services` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pricings`
--

INSERT INTO `pricings` (`id`, `title`, `price`, `discount_price`, `description`, `services`, `created_at`, `updated_at`) VALUES
(1, 'Starter Plan', 299, 299, 'Since the services are stored as a string, you need to convert them back.', 'up to 3 pages/screens,Wireframing & basic prototyping,Mobile & desktop responsiveness,2 revisions,Delivery in 5 days', '2025-02-24 07:44:59', '2025-03-05 11:39:29'),
(2, 'Standard Plan', 599, 599, 'or teams with traction that are ready to grow quickly.', 'up to 7 pages/screens,Wireframing & interactive prototyping,User experience optimization,Mobile & desktop responsiveness,4 revisions,Delivery in 7 days', '2025-02-24 07:46:39', '2025-03-05 11:39:36'),
(3, 'Advanced Plan', 999, 999, 'For established companies looking to take things to the next level.', 'up to 12 pages/screens,Advanced wireframing & high-fidelity prototyping,User research & usability testing,Mobile,tablet & desktop optimization,Unlimited revisions,Delivery in 10 days', '2025-02-24 07:47:44', '2025-03-05 11:39:44');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` text NOT NULL,
  `category` varchar(255) NOT NULL,
  `short_desp` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `client` varchar(255) DEFAULT NULL,
  `project_date` varchar(255) NOT NULL,
  `project_url` varchar(255) DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `gallery` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `name`, `category`, `short_desp`, `image`, `client`, `project_date`, `project_url`, `description`, `gallery`, `created_at`, `updated_at`) VALUES
(18, 'Replacements for Premiere Pro', 'UI/UX Design', 'Creating Engaging & Impactful Content', 'backend/projects/project_dReyeW.jpg', 'Tarik Holder', '2025-02-26 22:24:06', 'https://www.pymumiqehukerik.cc', '<ul data-start=\"800\" data-end=\"1077\"><li data-start=\"800\" data-end=\"873\">Professional <strong data-start=\"815\" data-end=\"843\">promo &amp; explainer videos</strong> to tell your brand’s story.</li><li data-start=\"874\" data-end=\"941\">High-quality <strong data-start=\"889\" data-end=\"915\">social media video ads</strong> that capture attention.</li><li data-start=\"942\" data-end=\"1006\">Smooth <strong data-start=\"951\" data-end=\"983\">motion graphics &amp; animations</strong> for a dynamic touch.</li><li data-start=\"1007\" data-end=\"1077\">Expert <strong data-start=\"1016\" data-end=\"1043\">YouTube &amp; reels editing</strong> to boost your content strategy.</li></ul>', 'backend/projects/gallery/gallery_8mqqgk.jfif', '2025-02-27 06:24:06', '2025-02-27 06:24:06'),
(19, 'Video Editing Software', 'UI/UX Design', 'Improve Your Video Editing Skills', 'backend/projects/project_g2yraL.jpg', 'Sybil Mercer', '2024-12-07', 'https://www.pymumiqehukerik.cc', '<h3 data-start=\"733\" data-end=\"799\"><span style=\"background-color: var(--bs-card-bg); color: var(--bs-card-color); font-family: var(--bs-body-font-family); font-size: var(--bs-body-font-size); font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align);\">Professional </span><strong data-start=\"815\" data-end=\"843\" style=\"background-color: var(--bs-card-bg); color: var(--bs-card-color); font-family: var(--bs-body-font-family); font-size: var(--bs-body-font-size); text-align: var(--bs-body-text-align);\">promo &amp; explainer videos</strong><span style=\"background-color: var(--bs-card-bg); color: var(--bs-card-color); font-family: var(--bs-body-font-family); font-size: var(--bs-body-font-size); font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align);\"> to tell your brand’s story.</span></h3><ul data-start=\"800\" data-end=\"1077\"><li data-start=\"874\" data-end=\"941\">High-quality <strong data-start=\"889\" data-end=\"915\">social media video ads</strong> that capture attention.</li><li data-start=\"942\" data-end=\"1006\">Smooth <strong data-start=\"951\" data-end=\"983\">motion graphics &amp; animations</strong> for a dynamic touch.</li><li data-start=\"1007\" data-end=\"1077\">Expert <strong data-start=\"1016\" data-end=\"1043\">YouTube &amp; reels editing</strong> to boost your content strategy.</li></ul>', 'backend/projects/gallery/gallery_VqvnT3.jfif', '2025-02-27 06:25:46', '2025-02-27 06:25:46'),
(20, 'double sided business card', 'Graphic Design', 'design awesome double sided business card', 'backend/projects/project_Rims18.jpg', 'Tarik Holder', '2025-02-05', 'https://www.pymumiqehukerik.cc', '<h3 data-start=\"364\" data-end=\"437\"><span style=\"background-color: var(--bs-card-bg); color: var(--bs-card-color); font-family: var(--bs-body-font-family); font-size: var(--bs-body-font-size); font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align);\">Eye-catching </span><strong data-start=\"453\" data-end=\"473\" style=\"background-color: var(--bs-card-bg); color: var(--bs-card-color); font-family: var(--bs-body-font-family); font-size: var(--bs-body-font-size); text-align: var(--bs-body-text-align);\">logos &amp; branding</strong><span style=\"background-color: var(--bs-card-bg); color: var(--bs-card-color); font-family: var(--bs-body-font-family); font-size: var(--bs-body-font-size); font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align);\"> that make a lasting impression.</span></h3><ul data-start=\"438\" data-end=\"731\"><li data-start=\"508\" data-end=\"592\">Professional <strong data-start=\"523\" data-end=\"546\">marketing materials</strong> like flyers, brochures, and business cards.</li><li data-start=\"593\" data-end=\"666\">Visually appealing <strong data-start=\"614\" data-end=\"639\">social media graphics</strong> tailored for engagement.</li><li data-start=\"667\" data-end=\"731\">Sleek and intuitive <strong data-start=\"689\" data-end=\"706\">UI/UX designs</strong> for websites and apps.</li><li data-start=\"667\" data-end=\"731\"><span style=\"font-family: Arial, sans-serif;\"><font color=\"#424242\">Fiverr freelancer will provide Business Cards &amp; Stationery services and design awesome double sided business card including Design Concepts within 2 days</font></span></li></ul>', 'backend/projects/gallery/gallery_W8D0tr.jpg', '2025-02-27 06:36:28', '2025-02-27 06:36:28'),
(21, 'Graphic Designer Business Card', 'Graphic Design', 'Designer Business Card Designs and Examples', 'backend/projects/project_kPwdLV.jpg', 'Sybil Mercer', '2025-02-26 22:38:41', 'https://www.jatojesacup.me.uk', '<p data-pm-slice=\"1 1 []\">We might often hear the term graphic design that we always associate them with anything related to design and we no longer bother to know what really is graphic design and how important is it in today’s generation.</p><p>Basically, graphic design is&nbsp;considered a subset of visual communication and communication design. This involves visual communication as well as problem solving using typography, photography, and/or illustration. The person working this kind of job is the so called graphic designers. You may also see <a target=\"_blank\" rel=\"noopener\" class=\"custom-link\" href=\"https://www.examples.com/design/business-card-logo-design-examples.html\">business card logo design examples</a>.</p><p>Graphic designers create artistic symbols, images, and text and combine them together, forming and conveying&nbsp;ideas and messages. As we observed in our environment, graphic designs are commonly used in corporate designs such as logos and trademark for branding, editorial designs such as in newspapers, books, and magazines, advertising, communication design, <a target=\"_blank\" rel=\"noopener\" class=\"custom-link\" href=\"https://www.examples.com/business/responsive-web-design-useful-tools.html\">web design</a>, signage, product packaging, as well as way finding or environmental design.</p><p>Hence, if you are looking for someone who create these designs for you, better look for a credible graphic design to work for your project. On the other hand, if you are graphic designer yourself, better promote and enhance your branding through <a target=\"_blank\" rel=\"noopener\" class=\"custom-link\" href=\"https://www.examples.com/design/business-card.html\">simple business cards</a> just like the examples presented.</p>', 'backend/projects/gallery/gallery_kNEdun.jpg', '2025-02-27 06:38:41', '2025-02-27 06:38:41'),
(22, 'Art Nouveau', 'Graphic Design ', 'Graphic Design Styles to Integrate Within Your Designs', 'backend/projects/project_ddsU5T.webp', 'Georgia Mccoy', '2025-02-13', 'https://www.youtube.com/embed/dCCFn6e2m2w?si=5KkZGoMJWXZ4dpR3', 'Graphic design is an ever expanding creative discipline. With our graphic design course, we teach you how to make research a fundamental part of your design process. You will develop diverse and well researched references for each brief you tackle, which in turn allows you to back up and argue for your design choices as they relate to the brief.', '', '2025-02-27 06:40:28', '2025-02-27 06:40:28'),
(24, 'A Winning Digital Marketing', 'Mobile App UI/UX Design', 'Reach, engage, and convert your ideal customers with original, relevant content from HLM.', 'backend/projects/project_E1K8JS.jfif', 'Hayes Rollins', '2025-02-09', 'https://www.jatojesacup.me.uk', '<h3 data-start=\"2011\" data-end=\"2076\"><ul style=\"--tw-border-spacing-x: 0; --tw-border-spacing-y: 0; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-pan-x: ; --tw-pan-y: ; --tw-pinch-zoom: ; --tw-scroll-snap-strictness: proximity; --tw-gradient-from-position: ; --tw-gradient-via-position: ; --tw-gradient-to-position: ; --tw-ordinal: ; --tw-slashed-zero: ; --tw-numeric-figure: ; --tw-numeric-spacing: ; --tw-numeric-fraction: ; --tw-ring-inset: ; --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgb(59 130 246 / 0.5); --tw-ring-offset-shadow: 0 0 #0000; --tw-ring-shadow: 0 0 #0000; --tw-shadow: 0 0 #0000; --tw-shadow-colored: 0 0 #0000; --tw-blur: ; --tw-brightness: ; --tw-contrast: ; --tw-grayscale: ; --tw-hue-rotate: ; --tw-invert: ; --tw-saturate: ; --tw-sepia: ; --tw-drop-shadow: ; --tw-backdrop-blur: ; --tw-backdrop-brightness: ; --tw-backdrop-contrast: ; --tw-backdrop-grayscale: ; --tw-backdrop-hue-rotate: ; --tw-backdrop-invert: ; --tw-backdrop-opacity: ; --tw-backdrop-saturate: ; --tw-backdrop-sepia: ; --tw-contain-size: ; --tw-contain-layout: ; --tw-contain-paint: ; --tw-contain-style: ; margin: var(--artdeco-reset-base-margin-zero); padding: var(--artdeco-reset-base-padding-zero); border: var(--artdeco-reset-base-border-zero); font-size: 20px; vertical-align: var(--artdeco-reset-base-vertical-align-baseline); background: var(--artdeco-reset-base-background-transparent); list-style-type: disc; width: 736px; overflow-wrap: break-word; font-family: -apple-system, system-ui, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, &quot;Fira Sans&quot;, Ubuntu, Oxygen, &quot;Oxygen Sans&quot;, Cantarell, &quot;Droid Sans&quot;, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Lucida Grande&quot;, Helvetica, Arial, sans-serif; color: rgba(0, 0, 0, 0.9);\"><li style=\"--tw-border-spacing-x: 0; --tw-border-spacing-y: 0; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-pan-x: ; --tw-pan-y: ; --tw-pinch-zoom: ; --tw-scroll-snap-strictness: proximity; --tw-gradient-from-position: ; --tw-gradient-via-position: ; --tw-gradient-to-position: ; --tw-ordinal: ; --tw-slashed-zero: ; --tw-numeric-figure: ; --tw-numeric-spacing: ; --tw-numeric-fraction: ; --tw-ring-inset: ; --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgb(59 130 246 / 0.5); --tw-ring-offset-shadow: 0 0 #0000; --tw-ring-shadow: 0 0 #0000; --tw-shadow: 0 0 #0000; --tw-shadow-colored: 0 0 #0000; --tw-blur: ; --tw-brightness: ; --tw-contrast: ; --tw-grayscale: ; --tw-hue-rotate: ; --tw-invert: ; --tw-saturate: ; --tw-sepia: ; --tw-drop-shadow: ; --tw-backdrop-blur: ; --tw-backdrop-brightness: ; --tw-backdrop-contrast: ; --tw-backdrop-grayscale: ; --tw-backdrop-hue-rotate: ; --tw-backdrop-invert: ; --tw-backdrop-opacity: ; --tw-backdrop-saturate: ; --tw-backdrop-sepia: ; --tw-contain-size: ; --tw-contain-layout: ; --tw-contain-paint: ; --tw-contain-style: ; margin-top: 24px; margin-left: 32px; padding: var(--artdeco-reset-base-padding-zero); border: var(--artdeco-reset-base-border-zero); font-size: var(--artdeco-reset-base-font-size-hundred-percent); vertical-align: var(--artdeco-reset-base-vertical-align-baseline); background: var(--artdeco-reset-base-background-transparent); text-align: left;\"><span style=\"--tw-border-spacing-x: 0; --tw-border-spacing-y: 0; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-pan-x: ; --tw-pan-y: ; --tw-pinch-zoom: ; --tw-scroll-snap-strictness: proximity; --tw-gradient-from-position: ; --tw-gradient-via-position: ; --tw-gradient-to-position: ; --tw-ordinal: ; --tw-slashed-zero: ; --tw-numeric-figure: ; --tw-numeric-spacing: ; --tw-numeric-fraction: ; --tw-ring-inset: ; --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgb(59 130 246 / 0.5); --tw-ring-offset-shadow: 0 0 #0000; --tw-ring-shadow: 0 0 #0000; --tw-shadow: 0 0 #0000; --tw-shadow-colored: 0 0 #0000; --tw-blur: ; --tw-brightness: ; --tw-contrast: ; --tw-grayscale: ; --tw-hue-rotate: ; --tw-invert: ; --tw-saturate: ; --tw-sepia: ; --tw-drop-shadow: ; --tw-backdrop-blur: ; --tw-backdrop-brightness: ; --tw-backdrop-contrast: ; --tw-backdrop-grayscale: ; --tw-backdrop-hue-rotate: ; --tw-backdrop-invert: ; --tw-backdrop-opacity: ; --tw-backdrop-saturate: ; --tw-backdrop-sepia: ; --tw-contain-size: ; --tw-contain-layout: ; --tw-contain-paint: ; --tw-contain-style: ; margin: var(--artdeco-reset-base-margin-zero); padding: var(--artdeco-reset-base-padding-zero); border: var(--artdeco-reset-base-border-zero); font-size: var(--artdeco-reset-base-font-size-hundred-percent); vertical-align: var(--artdeco-reset-base-vertical-align-baseline); background: var(--artdeco-reset-base-background-transparent); outline: var(--artdeco-reset-base-outline-zero); font-weight: 700;\">Students -</span>&nbsp;College students with basic knowledge of marketing can learn and start their career in the digital marketing field.</li><li style=\"--tw-border-spacing-x: 0; --tw-border-spacing-y: 0; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-pan-x: ; --tw-pan-y: ; --tw-pinch-zoom: ; --tw-scroll-snap-strictness: proximity; --tw-gradient-from-position: ; --tw-gradient-via-position: ; --tw-gradient-to-position: ; --tw-ordinal: ; --tw-slashed-zero: ; --tw-numeric-figure: ; --tw-numeric-spacing: ; --tw-numeric-fraction: ; --tw-ring-inset: ; --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgb(59 130 246 / 0.5); --tw-ring-offset-shadow: 0 0 #0000; --tw-ring-shadow: 0 0 #0000; --tw-shadow: 0 0 #0000; --tw-shadow-colored: 0 0 #0000; --tw-blur: ; --tw-brightness: ; --tw-contrast: ; --tw-grayscale: ; --tw-hue-rotate: ; --tw-invert: ; --tw-saturate: ; --tw-sepia: ; --tw-drop-shadow: ; --tw-backdrop-blur: ; --tw-backdrop-brightness: ; --tw-backdrop-contrast: ; --tw-backdrop-grayscale: ; --tw-backdrop-hue-rotate: ; --tw-backdrop-invert: ; --tw-backdrop-opacity: ; --tw-backdrop-saturate: ; --tw-backdrop-sepia: ; --tw-contain-size: ; --tw-contain-layout: ; --tw-contain-paint: ; --tw-contain-style: ; margin-top: 24px; margin-left: 32px; padding: var(--artdeco-reset-base-padding-zero); border: var(--artdeco-reset-base-border-zero); font-size: var(--artdeco-reset-base-font-size-hundred-percent); vertical-align: var(--artdeco-reset-base-vertical-align-baseline); background: var(--artdeco-reset-base-background-transparent); text-align: left;\"><span style=\"--tw-border-spacing-x: 0; --tw-border-spacing-y: 0; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-pan-x: ; --tw-pan-y: ; --tw-pinch-zoom: ; --tw-scroll-snap-strictness: proximity; --tw-gradient-from-position: ; --tw-gradient-via-position: ; --tw-gradient-to-position: ; --tw-ordinal: ; --tw-slashed-zero: ; --tw-numeric-figure: ; --tw-numeric-spacing: ; --tw-numeric-fraction: ; --tw-ring-inset: ; --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgb(59 130 246 / 0.5); --tw-ring-offset-shadow: 0 0 #0000; --tw-ring-shadow: 0 0 #0000; --tw-shadow: 0 0 #0000; --tw-shadow-colored: 0 0 #0000; --tw-blur: ; --tw-brightness: ; --tw-contrast: ; --tw-grayscale: ; --tw-hue-rotate: ; --tw-invert: ; --tw-saturate: ; --tw-sepia: ; --tw-drop-shadow: ; --tw-backdrop-blur: ; --tw-backdrop-brightness: ; --tw-backdrop-contrast: ; --tw-backdrop-grayscale: ; --tw-backdrop-hue-rotate: ; --tw-backdrop-invert: ; --tw-backdrop-opacity: ; --tw-backdrop-saturate: ; --tw-backdrop-sepia: ; --tw-contain-size: ; --tw-contain-layout: ; --tw-contain-paint: ; --tw-contain-style: ; margin: var(--artdeco-reset-base-margin-zero); padding: var(--artdeco-reset-base-padding-zero); border: var(--artdeco-reset-base-border-zero); font-size: var(--artdeco-reset-base-font-size-hundred-percent); vertical-align: var(--artdeco-reset-base-vertical-align-baseline); background: var(--artdeco-reset-base-background-transparent); outline: var(--artdeco-reset-base-outline-zero); font-weight: 700;\">Sales/ Marketing professional-</span>&nbsp;People with MBA degree working as sales or marketing person can explore this field which will give a niche edge in their profile as digital marketing requires strategies for getting the desired result.</li><li style=\"--tw-border-spacing-x: 0; --tw-border-spacing-y: 0; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-pan-x: ; --tw-pan-y: ; --tw-pinch-zoom: ; --tw-scroll-snap-strictness: proximity; --tw-gradient-from-position: ; --tw-gradient-via-position: ; --tw-gradient-to-position: ; --tw-ordinal: ; --tw-slashed-zero: ; --tw-numeric-figure: ; --tw-numeric-spacing: ; --tw-numeric-fraction: ; --tw-ring-inset: ; --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgb(59 130 246 / 0.5); --tw-ring-offset-shadow: 0 0 #0000; --tw-ring-shadow: 0 0 #0000; --tw-shadow: 0 0 #0000; --tw-shadow-colored: 0 0 #0000; --tw-blur: ; --tw-brightness: ; --tw-contrast: ; --tw-grayscale: ; --tw-hue-rotate: ; --tw-invert: ; --tw-saturate: ; --tw-sepia: ; --tw-drop-shadow: ; --tw-backdrop-blur: ; --tw-backdrop-brightness: ; --tw-backdrop-contrast: ; --tw-backdrop-grayscale: ; --tw-backdrop-hue-rotate: ; --tw-backdrop-invert: ; --tw-backdrop-opacity: ; --tw-backdrop-saturate: ; --tw-backdrop-sepia: ; --tw-contain-size: ; --tw-contain-layout: ; --tw-contain-paint: ; --tw-contain-style: ; margin-top: 24px; margin-left: 32px; padding: var(--artdeco-reset-base-padding-zero); border: var(--artdeco-reset-base-border-zero); font-size: var(--artdeco-reset-base-font-size-hundred-percent); vertical-align: var(--artdeco-reset-base-vertical-align-baseline); background: var(--artdeco-reset-base-background-transparent); text-align: left;\"><span style=\"--tw-border-spacing-x: 0; --tw-border-spacing-y: 0; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-pan-x: ; --tw-pan-y: ; --tw-pinch-zoom: ; --tw-scroll-snap-strictness: proximity; --tw-gradient-from-position: ; --tw-gradient-via-position: ; --tw-gradient-to-position: ; --tw-ordinal: ; --tw-slashed-zero: ; --tw-numeric-figure: ; --tw-numeric-spacing: ; --tw-numeric-fraction: ; --tw-ring-inset: ; --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgb(59 130 246 / 0.5); --tw-ring-offset-shadow: 0 0 #0000; --tw-ring-shadow: 0 0 #0000; --tw-shadow: 0 0 #0000; --tw-shadow-colored: 0 0 #0000; --tw-blur: ; --tw-brightness: ; --tw-contrast: ; --tw-grayscale: ; --tw-hue-rotate: ; --tw-invert: ; --tw-saturate: ; --tw-sepia: ; --tw-drop-shadow: ; --tw-backdrop-blur: ; --tw-backdrop-brightness: ; --tw-backdrop-contrast: ; --tw-backdrop-grayscale: ; --tw-backdrop-hue-rotate: ; --tw-backdrop-invert: ; --tw-backdrop-opacity: ; --tw-backdrop-saturate: ; --tw-backdrop-sepia: ; --tw-contain-size: ; --tw-contain-layout: ; --tw-contain-paint: ; --tw-contain-style: ; margin: var(--artdeco-reset-base-margin-zero); padding: var(--artdeco-reset-base-padding-zero); border: var(--artdeco-reset-base-border-zero); font-size: var(--artdeco-reset-base-font-size-hundred-percent); vertical-align: var(--artdeco-reset-base-vertical-align-baseline); background: var(--artdeco-reset-base-background-transparent); outline: var(--artdeco-reset-base-outline-zero); font-weight: 700;\">Individuals/Freelancers-</span>&nbsp;Individuals who are working in the different field and want to become freelancers in their part-time can learn digital marketing.</li><li style=\"--tw-border-spacing-x: 0; --tw-border-spacing-y: 0; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-pan-x: ; --tw-pan-y: ; --tw-pinch-zoom: ; --tw-scroll-snap-strictness: proximity; --tw-gradient-from-position: ; --tw-gradient-via-position: ; --tw-gradient-to-position: ; --tw-ordinal: ; --tw-slashed-zero: ; --tw-numeric-figure: ; --tw-numeric-spacing: ; --tw-numeric-fraction: ; --tw-ring-inset: ; --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgb(59 130 246 / 0.5); --tw-ring-offset-shadow: 0 0 #0000; --tw-ring-shadow: 0 0 #0000; --tw-shadow: 0 0 #0000; --tw-shadow-colored: 0 0 #0000; --tw-blur: ; --tw-brightness: ; --tw-contrast: ; --tw-grayscale: ; --tw-hue-rotate: ; --tw-invert: ; --tw-saturate: ; --tw-sepia: ; --tw-drop-shadow: ; --tw-backdrop-blur: ; --tw-backdrop-brightness: ; --tw-backdrop-contrast: ; --tw-backdrop-grayscale: ; --tw-backdrop-hue-rotate: ; --tw-backdrop-invert: ; --tw-backdrop-opacity: ; --tw-backdrop-saturate: ; --tw-backdrop-sepia: ; --tw-contain-size: ; --tw-contain-layout: ; --tw-contain-paint: ; --tw-contain-style: ; margin-top: 24px; margin-left: 32px; padding: var(--artdeco-reset-base-padding-zero); border: var(--artdeco-reset-base-border-zero); font-size: var(--artdeco-reset-base-font-size-hundred-percent); vertical-align: var(--artdeco-reset-base-vertical-align-baseline); background: var(--artdeco-reset-base-background-transparent); text-align: left;\"><span style=\"--tw-border-spacing-x: 0; --tw-border-spacing-y: 0; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-pan-x: ; --tw-pan-y: ; --tw-pinch-zoom: ; --tw-scroll-snap-strictness: proximity; --tw-gradient-from-position: ; --tw-gradient-via-position: ; --tw-gradient-to-position: ; --tw-ordinal: ; --tw-slashed-zero: ; --tw-numeric-figure: ; --tw-numeric-spacing: ; --tw-numeric-fraction: ; --tw-ring-inset: ; --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgb(59 130 246 / 0.5); --tw-ring-offset-shadow: 0 0 #0000; --tw-ring-shadow: 0 0 #0000; --tw-shadow: 0 0 #0000; --tw-shadow-colored: 0 0 #0000; --tw-blur: ; --tw-brightness: ; --tw-contrast: ; --tw-grayscale: ; --tw-hue-rotate: ; --tw-invert: ; --tw-saturate: ; --tw-sepia: ; --tw-drop-shadow: ; --tw-backdrop-blur: ; --tw-backdrop-brightness: ; --tw-backdrop-contrast: ; --tw-backdrop-grayscale: ; --tw-backdrop-hue-rotate: ; --tw-backdrop-invert: ; --tw-backdrop-opacity: ; --tw-backdrop-saturate: ; --tw-backdrop-sepia: ; --tw-contain-size: ; --tw-contain-layout: ; --tw-contain-paint: ; --tw-contain-style: ; margin: var(--artdeco-reset-base-margin-zero); padding: var(--artdeco-reset-base-padding-zero); border: var(--artdeco-reset-base-border-zero); font-size: var(--artdeco-reset-base-font-size-hundred-percent); vertical-align: var(--artdeco-reset-base-vertical-align-baseline); background: var(--artdeco-reset-base-background-transparent); outline: var(--artdeco-reset-base-outline-zero); font-weight: 700;\">People who want to switch career-</span>&nbsp;Individuals who are interested in marketing and want desk job can pursue their career in digital marketing.</li><li style=\"--tw-border-spacing-x: 0; --tw-border-spacing-y: 0; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-pan-x: ; --tw-pan-y: ; --tw-pinch-zoom: ; --tw-scroll-snap-strictness: proximity; --tw-gradient-from-position: ; --tw-gradient-via-position: ; --tw-gradient-to-position: ; --tw-ordinal: ; --tw-slashed-zero: ; --tw-numeric-figure: ; --tw-numeric-spacing: ; --tw-numeric-fraction: ; --tw-ring-inset: ; --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgb(59 130 246 / 0.5); --tw-ring-offset-shadow: 0 0 #0000; --tw-ring-shadow: 0 0 #0000; --tw-shadow: 0 0 #0000; --tw-shadow-colored: 0 0 #0000; --tw-blur: ; --tw-brightness: ; --tw-contrast: ; --tw-grayscale: ; --tw-hue-rotate: ; --tw-invert: ; --tw-saturate: ; --tw-sepia: ; --tw-drop-shadow: ; --tw-backdrop-blur: ; --tw-backdrop-brightness: ; --tw-backdrop-contrast: ; --tw-backdrop-grayscale: ; --tw-backdrop-hue-rotate: ; --tw-backdrop-invert: ; --tw-backdrop-opacity: ; --tw-backdrop-saturate: ; --tw-backdrop-sepia: ; --tw-contain-size: ; --tw-contain-layout: ; --tw-contain-paint: ; --tw-contain-style: ; margin-top: 24px; margin-left: 32px; padding: var(--artdeco-reset-base-padding-zero); border: var(--artdeco-reset-base-border-zero); font-size: var(--artdeco-reset-base-font-size-hundred-percent); vertical-align: var(--artdeco-reset-base-vertical-align-baseline); background: var(--artdeco-reset-base-background-transparent); text-align: left;\"><span style=\"--tw-border-spacing-x: 0; --tw-border-spacing-y: 0; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-pan-x: ; --tw-pan-y: ; --tw-pinch-zoom: ; --tw-scroll-snap-strictness: proximity; --tw-gradient-from-position: ; --tw-gradient-via-position: ; --tw-gradient-to-position: ; --tw-ordinal: ; --tw-slashed-zero: ; --tw-numeric-figure: ; --tw-numeric-spacing: ; --tw-numeric-fraction: ; --tw-ring-inset: ; --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgb(59 130 246 / 0.5); --tw-ring-offset-shadow: 0 0 #0000; --tw-ring-shadow: 0 0 #0000; --tw-shadow: 0 0 #0000; --tw-shadow-colored: 0 0 #0000; --tw-blur: ; --tw-brightness: ; --tw-contrast: ; --tw-grayscale: ; --tw-hue-rotate: ; --tw-invert: ; --tw-saturate: ; --tw-sepia: ; --tw-drop-shadow: ; --tw-backdrop-blur: ; --tw-backdrop-brightness: ; --tw-backdrop-contrast: ; --tw-backdrop-grayscale: ; --tw-backdrop-hue-rotate: ; --tw-backdrop-invert: ; --tw-backdrop-opacity: ; --tw-backdrop-saturate: ; --tw-backdrop-sepia: ; --tw-contain-size: ; --tw-contain-layout: ; --tw-contain-paint: ; --tw-contain-style: ; margin: var(--artdeco-reset-base-margin-zero); padding: var(--artdeco-reset-base-padding-zero); border: var(--artdeco-reset-base-border-zero); font-size: var(--artdeco-reset-base-font-size-hundred-percent); vertical-align: var(--artdeco-reset-base-vertical-align-baseline); background: var(--artdeco-reset-base-background-transparent); outline: var(--artdeco-reset-base-outline-zero); font-weight: 700;\">CMO-</span>&nbsp;Attaining a clear knowledge about the concepts makes the CMO proficient at delivering his suggestions and contribution.</li><li style=\"--tw-border-spacing-x: 0; --tw-border-spacing-y: 0; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-pan-x: ; --tw-pan-y: ; --tw-pinch-zoom: ; --tw-scroll-snap-strictness: proximity; --tw-gradient-from-position: ; --tw-gradient-via-position: ; --tw-gradient-to-position: ; --tw-ordinal: ; --tw-slashed-zero: ; --tw-numeric-figure: ; --tw-numeric-spacing: ; --tw-numeric-fraction: ; --tw-ring-inset: ; --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgb(59 130 246 / 0.5); --tw-ring-offset-shadow: 0 0 #0000; --tw-ring-shadow: 0 0 #0000; --tw-shadow: 0 0 #0000; --tw-shadow-colored: 0 0 #0000; --tw-blur: ; --tw-brightness: ; --tw-contrast: ; --tw-grayscale: ; --tw-hue-rotate: ; --tw-invert: ; --tw-saturate: ; --tw-sepia: ; --tw-drop-shadow: ; --tw-backdrop-blur: ; --tw-backdrop-brightness: ; --tw-backdrop-contrast: ; --tw-backdrop-grayscale: ; --tw-backdrop-hue-rotate: ; --tw-backdrop-invert: ; --tw-backdrop-opacity: ; --tw-backdrop-saturate: ; --tw-backdrop-sepia: ; --tw-contain-size: ; --tw-contain-layout: ; --tw-contain-paint: ; --tw-contain-style: ; margin-top: 24px; margin-left: 32px; padding: var(--artdeco-reset-base-padding-zero); border: var(--artdeco-reset-base-border-zero); font-size: var(--artdeco-reset-base-font-size-hundred-percent); vertical-align: var(--artdeco-reset-base-vertical-align-baseline); background: var(--artdeco-reset-base-background-transparent); text-align: left;\"><span style=\"--tw-border-spacing-x: 0; --tw-border-spacing-y: 0; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-pan-x: ; --tw-pan-y: ; --tw-pinch-zoom: ; --tw-scroll-snap-strictness: proximity; --tw-gradient-from-position: ; --tw-gradient-via-position: ; --tw-gradient-to-position: ; --tw-ordinal: ; --tw-slashed-zero: ; --tw-numeric-figure: ; --tw-numeric-spacing: ; --tw-numeric-fraction: ; --tw-ring-inset: ; --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgb(59 130 246 / 0.5); --tw-ring-offset-shadow: 0 0 #0000; --tw-ring-shadow: 0 0 #0000; --tw-shadow: 0 0 #0000; --tw-shadow-colored: 0 0 #0000; --tw-blur: ; --tw-brightness: ; --tw-contrast: ; --tw-grayscale: ; --tw-hue-rotate: ; --tw-invert: ; --tw-saturate: ; --tw-sepia: ; --tw-drop-shadow: ; --tw-backdrop-blur: ; --tw-backdrop-brightness: ; --tw-backdrop-contrast: ; --tw-backdrop-grayscale: ; --tw-backdrop-hue-rotate: ; --tw-backdrop-invert: ; --tw-backdrop-opacity: ; --tw-backdrop-saturate: ; --tw-backdrop-sepia: ; --tw-contain-size: ; --tw-contain-layout: ; --tw-contain-paint: ; --tw-contain-style: ; margin: var(--artdeco-reset-base-margin-zero); padding: var(--artdeco-reset-base-padding-zero); border: var(--artdeco-reset-base-border-zero); font-size: var(--artdeco-reset-base-font-size-hundred-percent); vertical-align: var(--artdeco-reset-base-vertical-align-baseline); background: var(--artdeco-reset-base-background-transparent); outline: var(--artdeco-reset-base-outline-zero); font-weight: 700;\">Business Owners-</span>&nbsp;a Business owner who want to run their business and want to implement digital strategies on their own can learn and run their business more effectively with digital knowledge.</li></ul></h3>', 'backend/projects/gallery/gallery_GaZT2S.webp', '2025-02-27 08:11:30', '2025-02-27 08:11:30'),
(25, 'Create Professionally', 'UI/UX Design', 'It can be challenging for a beginner to think of fresh and exciting video editing ideas.', 'backend/projects/project_abxGne.webp', 'Hayes Rollins', '2025-01-25', 'https://www.youtube.com/embed/-dr-wvPjGFo?si=2VVVoAzlvHNUD45P', '<p style=\"margin-bottom: 16px; font-size: 18px; line-height: 30px; color: rgb(29, 29, 29); font-family: Inter-custom-woff2, sans-serif;\">Video templates are a great option for beginners as they can help you create entertaining structures for your videos. Preset templates are available with certain&nbsp;<span style=\"display: inline-block;\">video editing software</span>, such as Riverside. They include features like title cards, transitions, intros and outros.</p><p style=\"margin-bottom: 16px; font-size: 18px; line-height: 30px; color: rgb(29, 29, 29); font-family: Inter-custom-woff2, sans-serif;\">Most preset templates are customizable. This makes it possible to put your own creative vision onto a premade structure. Templates are a simple option for adding flair and give your video a professional and consistent appearance.</p>', 'backend/projects/gallery/gallery_8KRFS2.jpg', '2025-02-27 08:14:05', '2025-02-27 08:14:05'),
(26, 'iHeartDogs', 'Interaction Design', 'Here’s a successful e-commerce brand that doesn’t shy away from sharing their profits with charitable causes. iHeartDogs is a company that sells a variety of dog items such as collars, treats, bracelets.', 'backend/projects/project_iPvWcm.png', '', '2025-03-02 00:27:04', 'https://www.youtube.com/embed/QsY8fnvMn6c?si=wTXaY1AvuuYlTGsJ', NULL, NULL, '2025-03-02 08:27:04', '2025-03-02 08:27:04'),
(27, 'Raborn Media', 'Website UI/UX Optimization', 'Raborn Media is your partner in building results-driven websites.', 'backend/projects/project_XfZHup.jpg', '', '2025-03-02 00:34:15', 'https://www.lyherekiwohe.cc', NULL, NULL, '2025-03-02 08:34:15', '2025-03-02 08:34:15'),
(28, 'Digi-X', 'Website UI/UX Optimization', 'Digi-X is a web development agency that can help you make sure that your website reflects the best of what your company has to offer,', 'backend/projects/project_7RpDCW.jpeg', '', '2025-03-02 00:33:04', 'https://www.youtube.com/embed/XKPRVkpkRms?si=m6pQHhalBpQ6Bx-j', NULL, NULL, '2025-03-02 08:33:04', '2025-03-02 08:33:04'),
(29, 'Your Path Finder', 'Website UI/UX Optimization', 'e-commerce shop, we can help you reach your audience in a powerful and creative way. Your business has a story to tell, and your website should tell it.', 'backend/projects/project_zJE24M.jpg', '', '2025-03-02 00:35:53', 'https://www.jaxizyvynemigy.info', NULL, NULL, '2025-03-02 08:35:53', '2025-03-02 08:35:53');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `icon` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `short_desp` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `title`, `icon`, `description`, `short_desp`, `image`, `created_at`, `updated_at`) VALUES
(9, 'UI/UX Design', 'bi bi-easel', '<li data-start=\"1158\" data-end=\"1224\">Strategic <strong data-start=\"1170\" data-end=\"1197\">social media management</strong> for consistent branding.</li><li data-start=\"1225\" data-end=\"1295\">Data-driven <strong data-start=\"1239\" data-end=\"1264\">targeted ad campaigns</strong> to reach the right audience.</li><li data-start=\"1296\" data-end=\"1365\">Creative <strong data-start=\"1307\" data-end=\"1340\">content creation &amp; scheduling</strong> for higher engagement.</li><li data-start=\"1366\" data-end=\"1436\">Effective <strong data-start=\"1378\" data-end=\"1417\">influencer marketing collaborations</strong> to expand reach.</li>', 'Creating visually appealing and user-friendly interfaces that enhance user experience.', 'backend/service/service_8jU57V.jpg', '2025-02-27 05:40:09', '2025-02-27 05:40:09'),
(10, 'Mobile App UI/UX Design', 'bi bi-calendar4-week', '<ul><li>Professional <strong data-start=\"817\" data-end=\"845\">promo &amp; explainer videos</strong> to tell your brand’s story.</li><li>High-quality <strong data-start=\"891\" data-end=\"917\">social media video ads</strong> that capture attention.</li><li>Smooth <strong data-start=\"953\" data-end=\"985\">motion graphics &amp; animations</strong> for a dynamic touch.</li><li>Expert <strong data-start=\"1018\" data-end=\"1045\">YouTube &amp; reels editing</strong> to boost your content strategy.</li></ul>', 'Designing seamless and engaging mobile app interfaces for better user interaction.', 'backend/service/service_Ldlfnp.jpg', '2025-02-27 05:41:35', '2025-02-27 05:41:35'),
(11, 'Website UI/UX Optimization', 'bi bi-broadcast', '<h4 data-start=\"364\" data-end=\"438\"><strong data-start=\"369\" data-end=\"436\">&nbsp;</strong><span style=\"background-color: var(--bs-card-bg); color: var(--bs-card-color); font-family: var(--bs-body-font-family); font-size: var(--bs-body-font-size); font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align);\">Eye-catching </span><strong data-start=\"454\" data-end=\"474\" style=\"background-color: var(--bs-card-bg); color: var(--bs-card-color); font-family: var(--bs-body-font-family); font-size: var(--bs-body-font-size); text-align: var(--bs-body-text-align);\">logos &amp; branding</strong><span style=\"background-color: var(--bs-card-bg); color: var(--bs-card-color); font-family: var(--bs-body-font-family); font-size: var(--bs-body-font-size); font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align);\"> that make a lasting impression.</span></h4><ul data-start=\"439\" data-end=\"732\"><li data-start=\"509\" data-end=\"593\">Professional <strong data-start=\"524\" data-end=\"547\">marketing materials</strong> like flyers, brochures, and business cards.</li><li data-start=\"594\" data-end=\"667\">Visually appealing <strong data-start=\"615\" data-end=\"640\">social media graphics</strong> tailored for engagement.</li><li data-start=\"668\" data-end=\"732\">Sleek and intuitive <strong data-start=\"690\" data-end=\"707\">UI/UX designs</strong> for websites and apps.</li></ul>', 'Enhancing website design, navigation, and accessibility to improve user engagement and conversions.', 'backend/service/service_FAenzd.jpg', '2025-02-27 05:43:06', '2025-02-27 05:43:06'),
(12, 'Design System & Branding', 'bi bi-bounding-box-circles', '<h3 data-start=\"1435\" data-end=\"1509\"><span style=\"background-color: var(--bs-card-bg); color: var(--bs-card-color); font-family: var(--bs-body-font-family); font-size: var(--bs-body-font-size); font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align);\">Complete </span><strong data-start=\"1521\" data-end=\"1553\" style=\"background-color: var(--bs-card-bg); color: var(--bs-card-color); font-family: var(--bs-body-font-family); font-size: var(--bs-body-font-size); text-align: var(--bs-body-text-align);\">brand strategy &amp; positioning</strong><span style=\"background-color: var(--bs-card-bg); color: var(--bs-card-color); font-family: var(--bs-body-font-family); font-size: var(--bs-body-font-size); font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align);\"> for a cohesive identity.</span></h3><ul data-start=\"1510\" data-end=\"1718\"><li data-start=\"1581\" data-end=\"1645\">Professional <strong data-start=\"1596\" data-end=\"1618\">brand style guides</strong> to maintain consistency.</li><li data-start=\"1646\" data-end=\"1718\">Unique <strong data-start=\"1655\" data-end=\"1689\">merchandise &amp; packaging design</strong> that enhances recognition.</li></ul>', 'Developing a cohesive design system with consistent typography, color schemes, and UI elements.', 'backend/service/service_XxhjIw.jpg', '2025-02-27 05:56:06', '2025-02-27 05:56:06'),
(13, 'Interaction Design', 'bi bi-chat-square-text', '<ul data-start=\"1792\" data-end=\"2009\"><li data-start=\"1792\" data-end=\"1861\">Persuasive <strong data-start=\"1805\" data-end=\"1837\">website copy &amp; landing pages</strong> to boost conversions.</li><li data-start=\"1862\" data-end=\"1935\">Engaging <strong data-start=\"1873\" data-end=\"1910\">social media captions &amp; ad copies</strong> for better engagement.</li><li data-start=\"1936\" data-end=\"2009\">SEO-optimized <strong data-start=\"1952\" data-end=\"1977\">blog posts &amp; articles</strong> to improve online visibility.</li></ul>', 'Crafting intuitive interactions and animations that enhance the user\'s journey and provide feedback through visual and motion design.', 'backend/service/service_Rfl1kU.png', '2025-02-27 05:58:09', '2025-02-27 05:58:09'),
(14, 'Accessibility Design', 'bi bi-activity icon', '<ul data-start=\"2077\" data-end=\"2262\"><li data-start=\"2077\" data-end=\"2133\"><strong data-start=\"2079\" data-end=\"2109\">Google Ads &amp; PPC campaigns</strong> for targeted traffic.</li><li data-start=\"2134\" data-end=\"2195\"><strong data-start=\"2136\" data-end=\"2172\">Facebook &amp; Instagram advertising</strong> for audience growth.</li><li data-start=\"2196\" data-end=\"2262\"><strong data-start=\"2198\" data-end=\"2232\">YouTube ads &amp; video promotions</strong> to enhance brand awareness.</li></ul>', 'Ensuring that designs meet accessibility standards, making products usable for people with disabilities, and enhancing inclusivity.', 'backend/service/service_sMFMYn.jpeg', '2025-02-27 05:59:54', '2025-02-27 05:59:54'),
(15, 'Frontend Development', 'bi bi-easel', '<p> Our frontend experts design seamless and intuitive user interfaces, ensuring smooth interactions and an enhanced user experience.</p>', 'Designing smooth and interactive user experiences.', 'backend/service/service_XgAqxJ.jpg', '2025-03-02 06:50:46', '2025-03-02 06:50:46');

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
('6f4RIhUVbhRd9syWrSgegb8BqjJyM9wAWeRq15YB', NULL, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/134.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiNWgxQ2xORFM3aWNYZWxQRUtWSnFZMmNYYTZGazRQUjFUcmxvMEVPUSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NTI6Imh0dHA6Ly9sb2NhbGhvc3QvQWdlbmN5LVBvcnRmb2xpby1tYXN0ZXIvYmFzZS9wdWJsaWMiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1742834836),
('9gXvGbj5LVNKtZWqCGTbtCtis8ZqQA1p0QLhijEp', NULL, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/134.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiNzFNbVZleFJIZ21YZUFickU1ZUpvZnk1cTJvWmVTME1sbUZ4TG5ObyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NTI6Imh0dHA6Ly9sb2NhbGhvc3QvQWdlbmN5LVBvcnRmb2xpby1tYXN0ZXIvYmFzZS9wdWJsaWMiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1742834834),
('uOgjwLXemoHnEWWPoC0muQ7wcXRndIBkCeafDueh', 1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/134.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiSVRmeXFjazNyVkJDdXd5QnFZTHVXaEtXQm9OR0VyZWJRekJ3eUV4aSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NjI6Imh0dHA6Ly9sb2NhbGhvc3QvQWdlbmN5LVBvcnRmb2xpby1tYXN0ZXIvYmFzZS9wdWJsaWMvYmxvZy9saXN0Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czozOiJ1cmwiO2E6MDp7fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7fQ==', 1742839191);

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
(1, 'backend/setting/logo_oYHaNb.png', 'backend/setting/dark_logo_g5IOzx.png', 'backend/setting/favicon_ePanFH.png', 'Dhaka, Mirpur-2', '+1 (871) 424-5909', 'nafugofedy@mailinator.com', '#', '#', '#', '#', '#', '01586548540', 'Base', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4967.473047998453!2d90.35640713404075!3d23.803186122749143!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c0e73f16be8d%3A0xcf14921445f8c82f!2sPizzaBurg!5e0!3m2!1sen!2sbd!4v1740874090332!5m2!1sen!2sbd', 452, 94, 1526, 32, 'Join 5000+ Startups Thriving with Base', 'Take your business to the next level with our expert solutions. Unlock growth, innovation, and success with seamless support and cutting-edge strategies.', NULL, '2025-03-05 06:17:46');

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` text NOT NULL,
  `designation` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `twitter` varchar(255) DEFAULT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `instagram` varchar(255) DEFAULT NULL,
  `linkedin` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `name`, `designation`, `image`, `twitter`, `facebook`, `instagram`, `linkedin`, `created_at`, `updated_at`) VALUES
(6, 'Walter White', 'Chief Executive Officer', 'backend/team/team_chEnwq.jpg', '#', '#', '#', NULL, '2025-02-25 07:54:32', '2025-02-25 07:54:32'),
(7, 'Joseph Tran ', 'Product Manager', 'backend/team/team_VKAq6e.jpg', '#', '#', '#', NULL, '2025-02-25 07:54:52', '2025-02-25 07:54:52'),
(11, 'William Anderson', 'CTO', 'backend/team/team_6IRCDG.jpg', NULL, NULL, NULL, NULL, '2025-02-25 08:11:06', '2025-02-25 08:11:06');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `quate` text NOT NULL,
  `client` varchar(255) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `quate`, `client`, `designation`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Hello, I would like to inform you that the property is still open for viewing. Would you like to arrange an appointment?', 'Barrett Lopez', 'Vel voluptatibus ani', 'backend/client/project_2TQk7J.jpg', '2025-02-18 12:10:49', '2025-02-18 12:10:49'),
(3, 'The following code uses object URLs, which is much more efficient than data URL for viewing large images (A data URL is a huge string containing all of the file data, whereas an object URL, is just a short string referencing the file data in-memory):', 'Solomon Sharpe', 'Iste tempora laboris', 'backend/client/project_Z70mxP.jpg', '2025-02-18 12:12:54', '2025-02-18 12:12:54'),
(4, '(A data URL is a huge string containing all of the file data, whereas an object URL, is just a short string referencing the file data in-memory', 'Oliver Lindsey', 'Quam laboriosam fug', 'backend/client/project_FwhBiw.jpg', '2025-02-18 12:13:09', '2025-02-18 12:13:09'),
(6, 'Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper', 'Saul Goodman', 'Ceo &amp; Founder', 'backend/client/client_mLvsJI.jpg', '2025-02-25 07:44:18', '2025-02-25 07:44:18'),
(8, 'Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et', 'Md Shahadat', 'Web Developer', 'backend/client/client_qomKTi.jpg', '2025-02-26 10:33:11', '2025-02-26 10:33:11');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Shahadat Hosssain', 'shahadat@gmail.com', NULL, '$2y$12$aDpwfdhUmRBV7IYGPK9Nk.MZWGaE1tS1MDVnzPHMkQp67Lln9MMye', NULL, '2025-02-17 06:46:49', '2025-03-24 10:52:11');

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
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `features`
--
ALTER TABLE `features`
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
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `pricings`
--
ALTER TABLE `pricings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
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
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

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
-- AUTO_INCREMENT for table `features`
--
ALTER TABLE `features`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `newsletters`
--
ALTER TABLE `newsletters`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pricings`
--
ALTER TABLE `pricings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
