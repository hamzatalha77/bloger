-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 29, 2021 at 02:39 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hamza`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `user` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `pass` varchar(60) NOT NULL,
  `chemin` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `user`, `email`, `pass`, `chemin`) VALUES
(114, 'zed', 'hamza_ta7@hotmail.co', '81dc9bdb52d04dc20036dbd8313ed055', '2020_12_20_22_43_IMG_0329.JPG'),
(130, 'penta', 'hamza_ta7@hotmail.com', '1234', '2020_12_12_00_29_IMG_0122.JPG');

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE `article` (
  `id` int(11) NOT NULL,
  `title` varchar(150) NOT NULL,
  `object` text NOT NULL,
  `user` varchar(25) NOT NULL,
  `chemin` varchar(255) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`id`, `title`, `object`, `user`, `chemin`, `date`) VALUES
(31, 'How it works', 'Posts can include text, photos, or videos to promote Business Profiles. Theyâ€™re visible to users through: \r\n\r\nThe â€œUpdatesâ€ or â€œOverviewâ€ tabs of the Business Profile on mobile on Search and Maps based on various signals\r\nThe â€œFrom the Ownerâ€ section of the Business Profile on your computer on Search and Maps', 'zed', 'Lunar_Beast_Veigo_Splash.jpg', '2021-02-06'),
(38, 'video using its URL and phpvideo using its URL and php', 'video using its URL and phpvideo using its URL and phpvideo using its URL and phpvideo using its URL and phpvideo using its URL and php', 'zed', 'WhatsApp Image 2021-02-05 at 13.27.35.jpeg', '2021-02-06'),
(56, 'How to create a blog in PHP and MySQL database', 'How to create a blog in PHP and MySQL databaseHow to create a blog in PHP and MySQL databaseHow to create a blog in PHP and MySQL databaseHow to create a blog in PHP and MySQL databaseHow to create a blog in PHP and MySQL databaseHow to create a blog in PHP and MySQL databaseHow to create a blog in PHP and MySQL databaseHow to create a blog in PHP and MySQL databaseHow to create a blog in PHP and MySQL databaseHow to create a blog in PHP and MySQL database', 'zed', 'pic2.jpg', '2021-02-07'),
(57, 'vadvocated a complfffementary v', 'fdfdsfdsfdsf', 'zed', 'Groupe 51 (2).png', '2021-02-07'),
(58, 'OrDzu_xveDo', 'fdgfdgdfgdg', 'zed', 'Groupe 60.png', '2021-02-07');

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `matricul` varchar(255) NOT NULL,
  `chemin` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`id`, `name`, `email`, `matricul`, `chemin`) VALUES
(6, 'hamza talha', 'hamza_ta7@hotmail.com', 'bw44757', 'images/8cce0f497159061cad54b7ea44e47f0d.JPG'),
(8, 'saad jadir', 'saad@gmail.com', 'bw5496', 'images/52e519305f3ae0c927e268ebb588b906.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` int(11) NOT NULL,
  `user_client` varchar(20) NOT NULL,
  `email_client` varchar(50) NOT NULL,
  `pass_client` varchar(20) NOT NULL,
  `image_client` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `user_client`, `email_client`, `pass_client`, `image_client`) VALUES
(5, 'hamza', 'hamza_ta7@hotmail.com', '1234', ''),
(6, 'zed', 'hamza_ta7@hotmail.com', '1234', '');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `post_id` int(100) NOT NULL,
  `username` varchar(255) NOT NULL,
  `comment` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `user_id`, `post_id`, `username`, `comment`, `date`) VALUES
(1, 0, 26, 'hamza', 'dsqdqdqdq', '2021-02-20 11:37:11'),
(2, 0, 26, 'hamza', 'fsfsff', '2021-02-20 11:46:09'),
(3, 0, 26, 'hamza', 'fsfsff', '2021-02-20 11:49:49'),
(4, 0, 26, 'zed', 'dsdqdqdq', '2021-02-20 11:50:25'),
(5, 0, 31, 'zed', 'dqdqdq', '2021-02-20 11:50:41'),
(6, 0, 26, 'zed', 'dqdqdqd', '2021-02-20 11:54:38'),
(7, 0, 26, 'zed', 'ffffff', '2021-02-20 11:58:05'),
(8, 0, 26, 'zed', 'ddddd', '2021-02-20 12:05:46'),
(9, 0, 26, 'zed', 'ffffffffff', '2021-02-20 12:06:36'),
(10, 0, 26, 'hamza', 'fsdfsdfsf', '2021-02-20 13:51:27'),
(11, 0, 26, 'hamza', 'wwwwwwwwwwwwwwwwwwwwwwwwwwwwwwww', '2021-02-20 13:51:34'),
(12, 0, 0, 'hamza', 'ggfdgd', '2021-02-20 14:14:47'),
(13, 0, 0, 'hamza', 'fdfdsfs', '2021-02-20 14:15:04'),
(14, 0, 0, 'hamza', 'fdsfsf', '2021-02-20 14:16:24'),
(15, 0, 0, 'hamza', 'fsfff', '2021-02-20 14:17:01'),
(16, 0, 31, 'hamza', 'fdsfsdf', '2021-02-20 14:18:35'),
(17, 0, 29, 'hamza', 'fdfdsfs', '2021-02-20 14:18:45'),
(18, 0, 33, 'hamza', 'fsfdsfs', '2021-02-20 14:23:55'),
(19, 0, 33, 'hamza', 'fdsfsdfs', '2021-02-20 14:24:02'),
(20, 0, 33, 'hamza', 'fsfdsfsd', '2021-02-20 14:24:07'),
(21, 0, 33, 'zed', 'fdfsdfs', '2021-02-20 14:25:50'),
(22, 0, 26, '', 'fdsfds', '2021-02-20 22:31:10'),
(23, 0, 33, 'hamza', 'dfdfs', '2021-02-27 11:50:41');

-- --------------------------------------------------------

--
-- Table structure for table `livres`
--

CREATE TABLE `livres` (
  `id` int(11) NOT NULL,
  `auteur` varchar(255) NOT NULL,
  `nom_livre` varchar(255) NOT NULL,
  `prix` varchar(255) NOT NULL,
  `chemin` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `livres`
--

INSERT INTO `livres` (`id`, `auteur`, `nom_livre`, `prix`, `chemin`) VALUES
(2, 'fdfsf', 'hd', '55', 'images/f32527717fb9a650478bf2fb327d4648.'),
(4, 'sqdq', 'dqsdsq', '1512', 'images/09f2f8cf7581d0252d8ca227c96482e1.'),
(5, 'hamza', 'talha', '777', 'images/c1b357efd9dd866207560cde6725dba0.JPG');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `title` varchar(150) NOT NULL,
  `object` longtext NOT NULL,
  `photos` varchar(255) NOT NULL,
  `date` datetime NOT NULL,
  `user` varchar(25) NOT NULL,
  `link` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `object`, `photos`, `date`, `user`, `link`) VALUES
(26, 'Whatâ€™s in the way of quality antenatal care for women in West and Central Africa', 'Globally, nearly 300,000 women die from pregnancy-related causes each year. Most of these deaths are in the low-income countries of sub-Saharan Africa and South Asia.\r\n\r\nThe leading causes of maternal mortality include severe bleeding, hypertensive disorders, infection, unsafe abortion and embolism. There are also indirect causes such as HIV, malaria and anaemia. About three in four maternal deaths could be prevented if women had adequate access to quality care before, during and after pregnancy.\r\n\r\nQuality antenatal care can save lives by identifying and addressing health problems that can cause pregnancy complications and poor birth outcomes. But the women most at risk tend to be the ones who do not access life-saving health services. Barriers to quality antenatal care include lack of information, cultural practices, poverty and distance to health services. Others are inadequate and poor health services.\r\n\r\nThere is already global evidence of social and economic differences in access to maternal health care and the quality of that care. We sought to understand the quality of antenatal care in sub-Saharan Africa. Countries in the West and Central African sub-region have notably poor reproductive health indicators, as well as high levels of poverty and civil unrest or political fragility.\r\nYet, the region has been largely underrepresented in empirical research. Research findings can help inform policy and programme interventions for improving the reach and quality of antenatal care. They can also contribute to reducing the unacceptable rates of maternal and newborn deaths in the region.\r\n\r\nAt the time of our study, household survey data from the same source were available for seven countries in the United Nations region of West and Central Africa: Central African Republic (CAR), Chad, the Democratic Republic of Congo (DRC), Ghana, Nigeria, Sierra Leone and Togo. We analysed the data on 32,718 women whose pregnancies resulted in a live birth, considering the levels of poverty in the households and communities where these women resided.\r\nWhat we found\r\nOur findings indicated that one in four pregnant women did not receive antenatal care. The majority of these women were in Chad (37%) and Nigeria (38%). Among women who had antenatal care, the majority received low-quality care. This means receiving fewer than five of six possible antenatal care services. The proportion of women who received high quality antenatal care ranged from 3% in Chad to 33% in Nigeria.\r\n\r\nAmong women who received antenatal care, the most common services provided across all seven countries were blood pressure monitoring and tetanus vaccination. The figures ranged from 79% in Chad to 99% in Ghana for blood pressure monitoring. For tetanus vaccination they ranged from 87% in the DRC to 97% in Sierra Leone.\r\n\r\nLess frequently provided services included HIV testing, malaria treatment and blood tests. We also found that higher levels of household wealth increased the likelihood of women reporting high-quality antenatal care. Poorer households are in the top 20% of the household wealth index. This measures the living standard of a family, based on the possession of certain household goods and infrastructure. The relationship of household wealth with quality of antenatal care was more noticeable in the DRC, Ghana, Nigeria, Sierra Leone and Togo.\r\n\r\nSimilarly, women who had secondary or higher levels of education were between two and three times as likely to receive high-quality antenatal care as women without formal education. With the exception of Chad, women who had more antenatal care visits reported high quality care.\r\n\r\nOur results indicate that the quality of antenatal care varied according to the level of poverty in communities. Women who lived in poor communities were between 15% and 52% less likely to report high-quality antenatal care. Poor communities are clusters of households headed by someone with no formal education, and in the lowest 20% of the wealth index. The poorest household wealth quantile is the lowest 20%.\r\n\r\nThe findings indicate that living in a poor household and in close proximity to poor households is a risk factor for low quality antenatal care. Poor women and their families are already vulnerable and may have underlying conditions that can increase their risks for experiencing pregnancy complications and poor birth outcomes. But these women may miss out on the benefits of antenatal care altogether because they face financial and social barriers to healthcare.', '2021_02_03_19_12_IMG_1065.JPG', '2021-02-15 19:23:58', 'zed', '8UqaI33iwfU'),
(27, 'Mothers who earned straight Aâ€™s in high school manage the same number of employees as fathers who got failing grades', 'The big idea\r\nMothers who showed the most academic promise in high school have the same leadership opportunities as fathers who performed the worst, according to our new peer-reviewed study. That is, in their early-to-mid careers, mothers who got straight Aâ€™s end up overseeing a similar number of employees as men who got Fâ€™s.\r\n\r\nTo reach these conclusions, we used a U.S. national survey that since 1979 has tracked a group of baby boomers born from 1957 through 1964. We focused on the 5,000 or so participants for whom researchers obtained high school transcripts and then compared the data with their responses to career-focused surveys taken over an 11-year period from 1988 to 1998 â€“ a period when most of them were in their 30s.\r\n\r\nOverall, our results showed that men manage more employees than women regardless of their GPA. For participants without children, the leadership gap between men and women was fairly constant across GPA levels, with men managing about two to three workers more on average.\r\nWhat was most interesting to us is what we learned when we focused only on parents. Fathers with 4.0 GPAs reported overseeing an average of 19 people, compared with 10 for childless men with similar grades and about five for fathers with a 1.0 or less. In contrast, the best-performing mothers managed fewer than five people, compared with seven for childless women with top GPAs and three for mothers with the worst grades.\r\nIn other words, becoming a parent boosts leadership opportunities for men while diminishing them for women. Even attaining a college or advanced degree had the same effect, helping fathers but doing little for mothers. Other research reveals that men have a faster route to leadership positions across occupations, including in stereotypically feminine fields such as human resources and health care.\r\n\r\nWhy it matters\r\nRecent economics research has highlighted â€œlost Einsteinsâ€ â€“ the really smart students from poor families who never become inventors because they donâ€™t receive the same advantages and support that even low-achieving kids from rich families do.\r\n\r\nThe same can be said for women, whose talents have long been underutilized by corporate America. Our research showed that even the most talented and brightest women experience diminished leadership prospects on account of gender-related barriers, especially if they became mothers.\r\n\r\nBut the problem isnâ€™t motherhood or fatherhood per se. Past research has shown itâ€™s more about how society views mothers and fathers and the associated stereotypes that contribute to gendered outcomes. For example, fathers could be getting more leadership opportunities because employers stereotype them as better fits for positions that emphasize authority, long work hours and travel. Mothers, on the other hand, may see fewer chances because employers falsely believe they are less committed or competent.\r\n\r\nEmployers could help overcome this problem by reviewing how they evaluate workers and adopting fairer promotion practices that are more likely to recognize womenâ€™s talent. More family-friendly policies such as paid leave and subsidized child care could also help.\r\n\r\nWhat still isnâ€™t known\r\nGiven the limits of our sample, we do not know how our findings translate to younger groups, such as millennials. But given that progress toward equality in the workplace has slowed or even stalled on certain measures in recent decades, we believe itâ€™s likely that the leadership prospects of academically gifted women havenâ€™t improved much.\r\n\r\nWhatâ€™s next\r\nCOVID-19 has harmed womenâ€™s employment and productivity more than menâ€™s, particularly among parents because of a lack of child care support. We plan to conduct additional research to better understand how womenâ€™s leadership opportunities may have been affected by the pandemic.', '2020_12_14_11_57_IMG_0171.JPG', '2021-02-15 23:33:49', 'zed', 'AR5huU19q1w'),
(29, 'Mother and baby homes inquiry: now reveal the secrets of Irelandâ€™s psychiatric hospitals', 'Mother and baby homes were institutions where unmarried women were sent to have their babies, often arriving destitute having been denied support by the childâ€™s father, and even their own family, simply for falling pregnant outside marriage. The Irish government has recently published an inquiry into conditions at these homes, where 56,000 women spent time between 1922 and 1998 when the last closed. A report on similar homes in Northern Ireland has also recently been published.\r\n\r\nThe Irish governmentâ€™s inquiry is the latest investigation into institutions that together constituted what we have described as a network of â€œcoercive confinementâ€. This also included reformatory and industrial schools, psychiatric hospitals, county homes (former workhouses) and Magdalen laundries. Yet the largest part of this landscape of confinement â€“ institutions run by the state, particularly psychiatric hospitals â€“ has gone unexamined.\r\n\r\nThe first inquiry was the Commission to Inquire into Child Abuse in reformatory and industrial schools. The resulting Ryan report in 2009 estimated some 42,000 children had passed through them between the 1930s and the 1970s. Former pupils gave evidence of the physical and sexual abuse they had experienced.\r\n\r\nThe Ryan report found that the Catholic religious orders that ran the schools colluded in covering up abuse, and the Department of Education responsible for monitoring them was â€œdeferential and submissiveâ€ to the religious orders, with its inspection regimes â€œfundamentally flawed and incapable of being effective.â€\r\n\r\nSee what others are saying about this article on twitter.\r\nMore recently, the McAleese report published in 2013 investigated the Magdalen laundries. Also run by Catholic orders, an estimated 10,000 women were kept working in unpaid labour. They lived in harsh conditions, sometimes for years, entering via the criminal justice system, from industrial schools, mother and baby homes or other institutions, through self-admission, or having been sent there by their families.\r\n\r\nThese three inquiries show how Ireland and other countries have begun to grapple with a legacy of maltreatment, particularly where children are involved, in the very institutions that were supposed to ensure their wellbeing.', '2020_12_29_01_42_IMG_0441.JPG', '2021-02-15 23:36:24', 'zed', 'X0MKKYepF70'),
(30, 'Womenâ€™s health is better when women have more control in their society', 'Gender disparities in health are not a phenomenon unique to the pandemic. Long before COVID-19, women made less money than men, had more child care responsibilities and were at increased risk of gender-based violence. But now, the pandemic has made them, and their children, even more vulnerable.\r\n\r\nWomen typically live longer than men but experience generally worse health, including higher risk for many chronic diseases, a phenomenon often referred to as the health-survival paradox. Many see this as due to biological differences between women and men. Female reproductive hormones affect many tissues in the body; pregnancy and childbirth come with additional risks to health.\r\n\r\nBut a large body of research suggests human health is strongly influenced by social circumstances. Living in societies that are more unequal is associated with negative health outcomes. Preferences for sons can cause neglect of daughters, which can lead to poor health and even death. What role, then, do gender norms play in subtler gender health disparities?\r\n\r\nTwo of us are anthropologists, the other an epidemiologist. Together our team developed a study to investigate how male-biased versus female-biased gender norms impact health.\r\n\r\nGet news thatâ€™s free, independent and based on evidence.', '2020_12_15_19_18_IMG_0224.JPG', '2021-02-15 23:37:09', 'zed', 'v0zPF5w_UWw'),
(31, 'Why werenâ€™t there any great women artists? In gratitude to Linda Nochlin', 'In January 1971, Art News published Linda Nochlinâ€™s Why have there been no great women artists?Her essay was both a clarion call for a new generation of women and a signal to change the institutions that shape the understanding of art.Nochlin was not writing from the perspective of an artist, frustrated at the lack of recognition, nor was she simply claiming that past women geniuses had seen their work relegated to the attic.Rather, as one of the great authorities on 19th century European art, she gave a scathing and detailed analysis of how and why white bourgeois men were â€œgreatâ€ while women and people of colour were not.See what others are saying about this article on twitter.She wrote:â€¦ the question of womenâ€™s equality â€” in art as in any other realm â€” devolves not upon the relative benevolence or ill-will of individual men, nor the self-confidence or abjectness of individual women, but rather on the very nature of our institutional structures themselves and the view of reality which they impose on the human beings who are part of them.Instead of falling into the popular trap of claiming that minor women artists in the canon of art history should simply be reclassified as major, Nochlin deftly gave an account of the circumstances under which art was made, and artists taught.Until the 19th century gave us the romantic cult of the individual, art came from studios with masters, apprentices and assistants. Women werenâ€™t artists for the same reason we werenâ€™t carpenters. As with other trades, skills were passed down through generations.Some women worked in their fathersâ€™ studios. The Italian painter, Orazio Gentileschi, actively supported the career of his daughter Artemisia Gentileschi, so she became known as an artist.', '2020_12_14_01_02_IMG_0160.JPG', '2021-02-15 23:37:57', 'zed', '1fx1hh3m1Fw'),
(33, 'MeToo in 2021: Global activists continue to build on the movement against sexual violence', 'Although the COVID-19 pandemic was the headline of 2020 globally, for many countries this past year was also characterized by new and revamped #MeToo reckonings.\r\n\r\nIn Turkey, an anonymous Twitter user shared that she was sexually harassed by a famous writer. This sparked an outpouring of tweets under the hashtag #UykularÄ±nÄ±zKaÃ§sÄ±n (#MayYouLoseSleep), with users sharing their own experiences with sexual violence.\r\n\r\nIn Egypt, an anonymous Instagram page was created to warn others about a man accused of being a sexual predator. (Its creator, 22-year-old Nadeen Ashraf, later revealed her identity.) Within a week, the page (@assaultpolice) gained 70,000 followers, and thousands of Egyptian women shared on social media their own testimonies of sexual violence.', '2020_12_08_23_45_IMG_0009.JPG', '2021-02-15 23:43:16', 'zed', 'eFah8TCWOro');

-- --------------------------------------------------------

--
-- Table structure for table `pro`
--

CREATE TABLE `pro` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `object` varchar(255) NOT NULL,
  `user` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pro`
--

INSERT INTO `pro` (`id`, `title`, `object`, `user`) VALUES
(1, 'dsqdsqd', 'dsqdq', 'hamza');

-- --------------------------------------------------------

--
-- Table structure for table `produit`
--

CREATE TABLE `produit` (
  `ID` int(11) NOT NULL,
  `libelle` varchar(255) NOT NULL,
  `prix` float NOT NULL,
  `qtestock` int(11) NOT NULL,
  `chemin` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produit`
--

INSERT INTO `produit` (`ID`, `libelle`, `prix`, `qtestock`, `chemin`) VALUES
(1, 'ff', 25, 22, 'images/a53d823c5cce13905e85b0f8eb2d6423.gif'),
(2, 'dsq', 35, 35, 'images/b06b7e93cba68f670c8957d0099af0ba.');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_comment`
--

CREATE TABLE `tbl_comment` (
  `comment_id` int(11) NOT NULL,
  `parent_comment_id` int(11) NOT NULL,
  `comment` varchar(200) NOT NULL,
  `user` varchar(20) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_comment`
--

INSERT INTO `tbl_comment` (`comment_id`, `parent_comment_id`, `comment`, `user`, `date`) VALUES
(1, 0, 'fdsfdfsd', 'zed', '2021-02-19 16:51:30'),
(2, 1, 'fdsfdsfsdfsf', 'zed', '2021-02-19 16:52:18'),
(3, 0, 'fdfdsfsd', 'penta', '2021-02-19 16:53:36'),
(4, 3, 'dfsfdsfdsf', 'penta', '2021-02-19 16:53:41'),
(5, 4, 'dfdfdsfs', 'zed', '2021-02-19 17:58:00'),
(6, 0, 'dqdqsd', 'hamza', '2021-02-20 00:15:35'),
(7, 6, 'dsdqdqd', 'hamza', '2021-02-20 00:15:42');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `livres`
--
ALTER TABLE `livres`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pro`
--
ALTER TABLE `pro`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produit`
--
ALTER TABLE `produit`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl_comment`
--
ALTER TABLE `tbl_comment`
  ADD PRIMARY KEY (`comment_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=134;

--
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `livres`
--
ALTER TABLE `livres`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `pro`
--
ALTER TABLE `pro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `produit`
--
ALTER TABLE `produit`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_comment`
--
ALTER TABLE `tbl_comment`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
