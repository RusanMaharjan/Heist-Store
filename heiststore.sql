/*
SQLyog Community v13.1.6 (64 bit)
MySQL - 10.4.8-MariaDB : Database - heist_store
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`heist_store` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `heist_store`;

/*Table structure for table `posts` */

DROP TABLE IF EXISTS `posts`;

CREATE TABLE `posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `topic_id` int(11) DEFAULT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `published` tinyint(4) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  KEY `topic_id` (`topic_id`),
  CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`topic_id`) REFERENCES `topics` (`id`) ON DELETE SET NULL ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4;

/*Data for the table `posts` */

insert  into `posts`(`id`,`user_id`,`topic_id`,`title`,`image`,`body`,`published`,`created_at`) values 
(15,31,1,'The Catcher in the Rye','1613297858_1.jpg','&lt;p&gt;&lt;strong&gt;The &quot;brilliant, funny, meaningful novel&quot; (The New Yorker) that established J. D. Salinger as a leading voice in American literature--and that has instilled in millions of readers around the world a lifelong love of books.&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;&lt;br&gt;&amp;nbsp;&lt;/p&gt;&lt;p&gt;&quot;If you really want to hear about it, the first thing you\'ll probably want to know is where I was born, and what my lousy childhood was like, and how my parents were occupied and all before they had me, and all that David Copperfield kind of crap, but I don\'t feel like going into it, if you want to know the truth.&quot;&lt;/p&gt;&lt;p&gt;The hero-narrator of The Catcher in the Rye is an ancient child of sixteen, a native New Yorker named Holden Caufield. Through circumstances that tend to preclude adult, secondhand description, he leaves his prep school in Pennsylvania and goes underground in New York City for three days.&lt;/p&gt;&lt;p&gt;&amp;nbsp;&lt;/p&gt;&lt;h1&gt;&lt;strong&gt;May 1, 1991&lt;/strong&gt;&lt;/h1&gt;&lt;p&gt;by &lt;a href=&quot;https://www.amazon.com/J-D-Salinger/e/B000APYJ8Y/ref=dp_byline_cont_book_1&quot;&gt;J.D. Salinger&lt;/a&gt;&lt;/p&gt;',1,'2021-02-13 18:47:57'),
(16,30,4,'The Four Agreements','1613221532_2.jpg','&lt;p&gt;In The Four Agreements, don Miguel Ruiz reveals the source of self-limiting beliefs that rob us of joy and create needless suffering. Based on ancient Toltec wisdom, The Four Agreements offer a powerful code of conduct that can rapidly transform our lives to a new experience of freedom, true happiness, and love.&lt;br&gt;&lt;br&gt;&bull; A New York Times bestseller for over a decade&lt;br&gt;&bull; An international bestseller translated into 46 languages worldwide&lt;br&gt;&lt;br&gt;&quot;This book by don Miguel Ruiz, simple yet so powerful, has made a tremendous difference in how I think and act in every encounter.&quot; &mdash; Oprah Winfrey&lt;br&gt;&lt;br&gt;&quot;Don Miguel Ruiz&rsquo;s book is a roadmap to enlightenment and freedom.&rdquo; &mdash; Deepak Chopra, Author, The Seven Spiritual Laws of Success&lt;br&gt;&lt;br&gt;&ldquo;An inspiring book with many great lessons.&rdquo; &mdash; Wayne Dyer, Author, Real Magic&lt;br&gt;&lt;br&gt;&ldquo;In the tradition of Castaneda, Ruiz distills essential Toltec wisdom, expressing with clarity and impeccability what it means for men and women to live as peaceful warriors in the modern world.&rdquo; &mdash; Dan Millman, Author, Way of the Peaceful Warrior&lt;/p&gt;&lt;p&gt;&amp;nbsp;&lt;/p&gt;&lt;p&gt;&lt;strong&gt;Written by:&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;&lt;strong&gt;Don Miguel Ruiz, Janet Mills&lt;/strong&gt;&lt;/p&gt;',1,'2021-02-13 18:50:32'),
(17,30,6,'Ready Player Two is a Warning about artificial intelligence. An AI could write a better book','1613221736_3.jpg','&lt;p&gt;There&rsquo;s a long-running line of children&rsquo;s books where you provide the kid&rsquo;s details &ndash; name, age, favourite hobbies &ndash; and they all get mail-merged into the narrative, making the youngster the central character in their own story and providing the illusion of personalisation at a low cost. &lt;i&gt;Ready Player Two&lt;/i&gt;, the sequel to the hugely popular &lt;i&gt;Ready Player One&lt;/i&gt;, offers a similar experience.&lt;/p&gt;&lt;p&gt;Like its predecessor, it&rsquo;s a tedious slog through arcane pop culture references &ndash; &lt;i&gt;The Silmarillion&lt;/i&gt;, the music of Prince, the movies of John Hughes &ndash; sprinkled in so lazily that you could replace them with your own favourites, or swap them right out and be left with a much shorter, and probably better book.&lt;/p&gt;&lt;p&gt;&amp;nbsp;&lt;/p&gt;&lt;p&gt;The action picks up immediately after the events of &lt;i&gt;Ready Player One&lt;/i&gt;, which is set in the near-future, in a world where vast swathes of the population spend most of their day living inside a virtual reality simulation called the OASIS, to escape from the poverty, crime and general awfulness of life on Earth.&lt;/p&gt;&lt;p&gt;The protagonist, Wade Watts, is a nerdy teenager living in the &lsquo;stacks&rsquo; outside Oklahoma City &ndash; a shanty-town comprised of literal stacks of trailers and RVs &ndash; who devotes all of his time to an in-OASIS treasure hunt devised by billionaire James Halliday, the late co-creator of the simulation, as a Willy Wonka-esque means to find an heir to his fortune.&lt;/p&gt;&lt;p&gt;While the plot of the first book is relatively predictable (spoilers ahead) &ndash; Wade wins the prize, gets the girl etc &ndash; when it was published in 2011 it did offer a somewhat visionary glimpse of the potential of what we now call the &lsquo;metaverse,&rsquo; a simulated world that&rsquo;s open to everyone. Today, designers of virtual worlds cite it as something of an &lt;a href=&quot;https://fortune.com/2015/07/10/ready-player-one-vr/&quot;&gt;inspiration&lt;/a&gt; for their creations.&lt;/p&gt;&lt;p&gt;But the book divided audiences. The central conceit is that Halliday loved the video games and movies he grew up with, and so those hoping to win the prize and become his heir needed to have an encyclopedic knowledge of 1980s arcade games and trivia to decipher his clues. The result was that &lt;i&gt;Ready Player One&lt;/i&gt; was like reading an IMDB trivia page for a film you hadn&rsquo;t seen, or being stuck next to the most boring guy at a party, desperately trying to make eye contact with someone to come and rescue you while he bangs on about KITT from &lt;i&gt;Knight Rider&lt;/i&gt;. The OASIS had the potential to be anything, but author Ernest Cline turned it into a geek&rsquo;s playground &ndash; as if humans simply stopped making popular culture after about 2010 and just wallowed in nostalgia.&lt;/p&gt;',1,'2021-02-13 18:53:56'),
(18,30,7,'Into the Wild','1613221841_4.jpg','&lt;p&gt;&lt;strong&gt;Jon Krakauer\'s &lt;/strong&gt;&lt;i&gt;&lt;strong&gt;Into the Wild &lt;/strong&gt;&lt;/i&gt;&lt;strong&gt;examines true story of Chris McCandless, a young man, who in 1992 walked deep into the Alaskan wilderness and whose SOS note and emaciated corpse were found four months later.&lt;/strong&gt;&lt;br&gt;&lt;br&gt;International bestselling author Jon Krakauer explores the obsession which leads some people to explore the outer limits of self, leave civilization behind and seek enlightenment through solitude and contact with nature.&lt;br&gt;&lt;br&gt;A 2007 film adaptation of &lt;i&gt;Into the Wild&lt;/i&gt; was directed by Sean Penn and starred Emile Hirsch and Kristen Stewart.&lt;/p&gt;&lt;p&gt;&amp;nbsp;&lt;/p&gt;&lt;p&gt;&lt;strong&gt;Written By:&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;&lt;strong&gt;Jon Krakauer&lt;/strong&gt;&lt;/p&gt;',1,'2021-02-13 18:55:41'),
(19,30,8,'The power of Positive Thinking','1613221991_5.jpg','&lt;p&gt;&lt;i&gt;&quot;This book is written with the sole objective of helping the reader achieve a happy, satisfying, and worthwhile life.&quot;&lt;/i&gt;&lt;/p&gt;&lt;p&gt;The precursor to &lt;i&gt;The Secret, The Power of Positive Thinking&lt;/i&gt; has helped millions of men and women to achieve fulfillment in their lives. In this phenomenal bestseller, Dr. Peale demonstrates the power of faith in action. With the practical techniques outlined in this book, you can energize your life -- and give yourself the initiative needed to carry out your ambitions and hopes. You\'ll learn how to:&lt;/p&gt;&lt;ul&gt;&lt;li&gt;Expect the best and get it&lt;/li&gt;&lt;li&gt;Believe in yourself and in everything you do&lt;/li&gt;&lt;li&gt;Develop the power to reach your goals&lt;/li&gt;&lt;li&gt;Break the worry habit and achieve a relaxed life&lt;/li&gt;&lt;li&gt;Improve your personal and professional relationships&lt;/li&gt;&lt;li&gt;Assume control over your circumstances&lt;/li&gt;&lt;li&gt;Be kind to yourself&lt;/li&gt;&lt;/ul&gt;&lt;p&gt;&lt;strong&gt;Written by:&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;&lt;a href=&quot;https://www.goodreads.com/author/show/8435.Norman_Vincent_Peale&quot;&gt;&lt;strong&gt;Norman Vincent Peale&lt;/strong&gt;&lt;/a&gt;&lt;/p&gt;',1,'2021-02-13 18:58:11'),
(20,30,9,'The Glass Castle','1613222064_6.jpg','&lt;p&gt;A tender, moving tale of unconditional love in a family that, despite its profound flaws, gave the author the fiery determination to carve out a successful life on her own terms.&lt;br&gt;&lt;br&gt;Jeannette Walls grew up with parents whose ideals and stubborn nonconformity were both their curse and their salvation. Rex and Rose Mary Walls had four children. In the beginning, they lived like nomads, moving among Southwest desert towns, camping in the mountains. Rex was a charismatic, brilliant man who, when sober, captured his children\'s imagination, teaching them physics, geology, and above all, how to embrace life fearlessly. Rose Mary, who painted and wrote and couldn\'t stand the responsibility of providing for her family, called herself an &quot;excitement addict.&quot; Cooking a meal that would be consumed in fifteen minutes had no appeal when she could make a painting that might last forever.&lt;br&gt;&lt;br&gt;Later, when the money ran out, or the romance of the wandering life faded, the Walls retreated to the dismal West Virginia mining town -- and the family -- Rex Walls had done everything he could to escape. He drank. He stole the grocery money and disappeared for days. As the dysfunction of the family escalated, Jeannette and her brother and sisters had to fend for themselves, supporting one another as they weathered their parents\' betrayals and, finally, found the resources and will to leave home.&lt;br&gt;&lt;br&gt;What is so astonishing about Jeannette Walls is not just that she had the guts and tenacity and intelligence to get out, but that she describes her parents with such deep affection and generosity. Hers is a story of triumph against all odds, but also a tender, moving tale of unconditional love in a family that despite its profound flaws gave her the fiery determination to carve out a successful life on her own terms.&lt;br&gt;&lt;br&gt;For two decades, Jeannette Walls hid her roots. Now she tells her own story.&amp;nbsp;&lt;/p&gt;&lt;p&gt;&amp;nbsp;&lt;/p&gt;&lt;p&gt;&lt;strong&gt;Written by:&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;&lt;strong&gt;Jeannette Walls&lt;/strong&gt;&lt;/p&gt;',1,'2021-02-13 18:59:24'),
(21,30,14,'Blud','1613222148_7.jpg','&lt;p&gt;&quot;Throughout [BLUD], McKibbens breathes brilliant life into language, forging lush, rhythmic poems that are both fiercely urgent and tightly controlled, dark and flickering with fairy-tale-like magic. . . . Stunning, unflinching, fearless.&quot;―&lt;i&gt;Booklist&lt;/i&gt; Starred Review&lt;/p&gt;&lt;p&gt;&quot;Chicana poet, activist, and witchy folk hero of the disenfranchised. . . . [McKibbens] creates these spaces of witness with her feral and boundary-pushing poems that speak unflinchingly of topics often swept under the rug: rape, domestic violence, body shaming, mental illness, prejudice.&quot;―&lt;i&gt;Ploughshares&lt;/i&gt;&lt;/p&gt;&lt;p&gt;&quot;McKibbens, a pioneer in the art of performance poetry, presents her audience [with] selfless honesty.&quot;―&lt;i&gt;The Rumpus&lt;/i&gt;&lt;/p&gt;&lt;p&gt;&quot;Rachel McKibbens . . . reminds us why poetry as testimony is so necessary.&quot; ―Poetry Foundation&lt;/p&gt;&lt;p&gt;McKibbens\'s &lt;i&gt;blud&lt;/i&gt; is a collection of dark, rhythmic poems interested in the ways in which inherited things―bloodlines, mental illnesses, trauma―affect their inheritors. Reveling in form and sound, McKibbens\'s writing takes back control, undaunted by the idea of sinking its teeth into the ugliest moments of life, while still believing―and looking for―the good underneath all the bruising.&lt;/p&gt;&lt;p&gt;&lt;strong&gt;From &quot;untitled (lost love)&quot;:&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;&lt;i&gt;To my daughters I need to say:&lt;/i&gt;&lt;br&gt;&lt;i&gt;Go with the one who loves you biblically.&lt;/i&gt;&lt;br&gt;&lt;i&gt;The one whose love lifts its head to you&lt;/i&gt;&lt;br&gt;&lt;i&gt;despite its broken neck. Whose body&lt;/i&gt;&lt;br&gt;&lt;i&gt;bursts sixteen arms electric&lt;/i&gt;&lt;br&gt;&lt;i&gt;to carry you, gentle the way&lt;/i&gt;&lt;br&gt;&lt;i&gt;old grief is gentle.&lt;/i&gt;&lt;br&gt;&lt;i&gt;Love the love that is messy&lt;/i&gt;&lt;br&gt;&lt;i&gt;in all its too much . . .&lt;/i&gt;&lt;/p&gt;&lt;p&gt;&lt;strong&gt;Rachel McKibbens&lt;/strong&gt; is a poet, activist, playwright, essayist, and two-time New York Foundation for the Arts poetry fellow. She is the author of four books and founder of The Pink Door, an annual writing retreat open exclusively to women of color. She lives in Rochester, New York.&lt;/p&gt;&lt;p&gt;&amp;nbsp;&lt;/p&gt;&lt;p&gt;&lt;strong&gt;Written by:&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;&lt;strong&gt;Rachel McKibbens&lt;/strong&gt;&lt;/p&gt;',1,'2021-02-13 19:00:48');

/*Table structure for table `topics` */

DROP TABLE IF EXISTS `topics`;

CREATE TABLE `topics` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4;

/*Data for the table `topics` */

insert  into `topics`(`id`,`name`,`description`) values 
(1,'Life','<p>Life</p>'),
(4,'Inspiration','<p>Inspiration Book</p>'),
(5,'Quotes','<p>Quotes</p>'),
(6,'Fiction','<p>Fiction&nbsp;</p>'),
(7,'Biography','<p>Biography</p>'),
(8,'Motivation','<p>Motivation</p>'),
(9,'Life Lesson','<p>Life Lesson</p>'),
(14,'Poetry','<p>Poems</p>');

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `admin` tinyint(4) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8mb4;

/*Data for the table `users` */

insert  into `users`(`id`,`admin`,`username`,`email`,`password`,`created_at`) values 
(30,1,'Rusan Maharjan','rusanmhz789@gmail.com','$2y$10$.T6PjIiD6ypuKhWHugexWe5hoh1vBY56EjPj9StztWyNLFmFvSe.a','2021-02-13 18:33:14'),
(32,0,'Ezio Auditore','ezio@gmail.com','$2y$10$lapCcMmHvuZdBlhuVKNl1.WdxhDWa1Ic/dlmO58J0jG9c.gCGGFdW','2021-02-19 14:24:33');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
