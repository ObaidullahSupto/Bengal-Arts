-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 30, 2018 at 08:34 AM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `new_bijoy_bangla`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE IF NOT EXISTS `about` (
  `id` int(11) NOT NULL,
  `catagories` varchar(255) NOT NULL,
  `catagories_details` text NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `catagories`, `catagories_details`) VALUES
(18, 'Vision', '<p>The Arts programme of Bengal Foundation supports the practice and understanding of visual arts in Bangladesh. Rooted in its local context, the Programme acts as a platform where artists, curators and researchers can exchange ideas and pursue their practice all year long, on a day-to-day basis.</p>\r\n\r\n<p>The approach of the Visual Arts programme is comprehensive: it ambitions to foster an arts ecosystem within which critical discourse, curatorial practice and contemporary artistic creation mutually reinforce each other. Its actions are incremental: it mounts small or medium-sized projects of uncompromising quality, while always trying to maximise their impact on the local and regional arts scene. Its philosophy is non-commercial: all the events it proposes are entirely non-for-profit.</p>\r\n\r\n<p>Active since the year 2000, the Visual Arts programme of Bengal Foundation has consistently expanded the range of its activities. It curates and produces exhibitions of art, which it documents through catalogues and books. It supports art and research projects through dedicated grants. It gives awards, either directly or in partnership with other trusts. It maintains a practice studio in Dhaka where it encourage mechanisms of peer-review and master-classes, and an Arts college in Narail. It arranges workshops, residencies or open talks. It publishes art books. It supports specific projects organised by other institutions. The aim at the core of the activities of the Visual Arts programme is to highlight the incredible creativity of the visual arts sector in Bangladesh and to make it thrive.</p>\r\n\r\n<p>Because of its rich history, the Visual Arts programme of Bengal Foundation cultivates a long-term perspective. With the ambition to preserve and spread knowledge about visual arts from Bangladesh and the greater region of Bengal, it has reserved a curated section of this website to a large spectrum of self-produced and other archived material. Centred on Bengali Modern art but also comprising contemporary creation, the unique art collections of Bengal Foundation and of its Chairman, Mr. Abul Khair, are another key aspect of this long-term endeavour. The programme intends to foster a dynamic relationship between the masters of the past and new creation through the exhibition, documentation and contextualisation of the collections in various projects in Bangladesh and abroad.</p>'),
(16, 'Trust', '<p>In <a href="http://www.onthisday.com/date/1992/december" target="_blank">December 1992</a> the Tate Trustees announced their intention to create a separate gallery for international modern and contemporary art in London.The former Bankside Power Station was selected as the new gallery site in 1994. The following year, Swiss architects Herzog &amp; De Meuron were appointed to convert the building into a gallery. That their proposal retained much of the original character of the building was a key factor in this decision.</p>\r\n\r\n<p>The iconic power station, built in two phases between 1947 and 1963, was designed by Sir Giles Gilbert Scott. It consisted of a stunning turbine hall, 35 metres high and</p>\r\n'),
(17, 'History', '<p>After a succession of specific projects starting with the support to a landmark S.M. Sultan exhibition in Dhaka in 1987, Bengal Foundation formalised its engagement with visual arts in 2000.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>That year it simultaneously set up a dedicated visual arts programme to design various non-profit activities in the field, and it opened the commercial Bengal Gallery of Fine Arts. The goal for a non-profit foundation to open a commercial operation was to contribute to the development of a local art market from which artists could draw revenue and support their practice. The decision was also made with the ambition that the production of exhibitions with the highest standards of quality and their contextualisation in dedicated publications would foster the understanding and appreciation of visual arts locally. The opening of a second commercial gallery, Bengal Art Lounge, in another area of Dhaka in 2011 was made to broaden the same aims. Over the years, both galleries produced dozens of exhibitions and participated to various international art fairs.</p>\r\n\r\n<p>In parallel, the Arts programme multiplied non-profit initiatives such as the opening of practice spaces to encourage and facilitate the development of the arts, the organisation of workshops, residencies and art camps, the support to specific projects such as the first-ever participation of Bangladesh to the Venice Biennale in 2011 and the production of non-commercial exhibitions with an educational aim. In early 2016, with a small but robust art market solidly rooted in Bangladesh, Bengal Foundation decided to close its commercial operations and to expand the non-for-profit activities of its Arts programme.</p>\r\n\r\n<p>Today the programme supports the visual arts ecosystem at large, including artists but also curators, researchers and critical writers. Under this holistic approach, it invites all actors in the field to engage on a day-to-day basis with the activities of uncompromising quality it quality it strives to develop.</p>\r\n'),
(22, 'History', '<p>nnn<strong>nnnn</strong></p>\r\n'),
(23, 'Vision', '<p>cccccccc vvvvvvvvvvvvvv</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `aid` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `pass` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `designation` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_permission_status` varchar(20) COLLATE utf8_unicode_ci DEFAULT 'Editor'
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`aid`, `username`, `email`, `pass`, `designation`, `user_permission_status`) VALUES
(12, 'Bengal Arts', 'bengal@gmail.com', '636a3392490a15a3ec21e067d4156524', 'Developers', 'Admin'),
(13, 'supto', 'o.supto@gmail.com', '123456789', 'Developers', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `apply`
--

CREATE TABLE IF NOT EXISTS `apply` (
  `id` int(11) NOT NULL,
  `a_name` varchar(50) NOT NULL,
  `date` varchar(50) NOT NULL,
  `a_details` text NOT NULL,
  `image` varchar(500) NOT NULL,
  `images_caption` varchar(50) NOT NULL,
  `artist_name` varchar(50) NOT NULL,
  `v_link` varchar(255) NOT NULL,
  `l_image` varchar(500) DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=30 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `apply`
--

INSERT INTO `apply` (`id`, `a_name`, `date`, `a_details`, `image`, `images_caption`, `artist_name`, `v_link`, `l_image`) VALUES
(7, 'Apply for Raku workshop', '12/8/2017', '<p>Michael Andrews was born in Norwich, England, the second child of Thomas Victor Andrews and his wife Gertrude Emma Green. He completed his National service between 1947 and 1949, nineteen months of which was spent in Egypt.[1] From 1949 to 1953 he studied at the Slade School of Fine Art under William Coldstream, Lucian Freud, William Townsend and Lawrence Gowing. Fellow students and friends there included Victor Willing, Keith Sutton, Diana Cumming, Euan Uglow and Craigie Aitchison. In 1953 he spent six months in Italy after receiving a Rome Scholarship in Painting.</p>\r\n\r\n<p>From 1958 he taught at the Slade and Chelsea School of Art. February 1958 &ndash; June 1960 he held a fellowship at the Digswell Arts Trust,[2] for a period sharing a studio with Patrick Swift. In 1959 his painting A Man Who Suddenly Fell Over was acquired by the Tate Gallery. In the 1960s he painted works showing parties; later, the &quot;Lights&quot; series presented views from the air. Andrews was much impressed by a visit to Ayers Rock in 1983, but the works he produced toward the end of his life are of scenes from Scotland and London. In 1981 he moved to the village of Saxlingham Nethergate in his home county of Norfolk. He was a member of the Norwich Twenty Group.</p>\r\n\r\n<p>He painted Sax AD 832[3] in 1982 to celebrate 1,150 years of the village&#39;s history. The painting was auctioned at Christie&#39;s London on 20 June 2007 and was sold for &pound;692,000. Major exhibitions of Andrews&#39; works were held by the Arts Council in 1981 and Tate Britain in 2001.</p>\r\n\r\n<p>In 1994 he underwent an operation for cancer. He died in London on 19 July 1995. He is buried in Glenartney in Perthshire.</p>\r\n\r\n<p>Michael Andrews played a deaf-mute in Lorenza Mazzetti&#39;s Free Cinema film Together, alongside Eduardo Paolozzi (1955).</p>\r\n', '7.jpg', 'Impression of Dhaka', ' Conducted by Richard Crook', 'https://www.youtube.com/', NULL),
(8, 'Apply for Raku workshop', '12/8/2017', '<p>Michael Andrews was born in Norwich, England, the second child of Thomas Victor Andrews and his wife Gertrude Emma Green. He completed his National service between 1947 and 1949, nineteen months of which was spent in Egypt.[1] From 1949 to 1953 he studied at the Slade School of Fine Art under William Coldstream, Lucian Freud, William Townsend and Lawrence Gowing. Fellow students and friends there included Victor Willing, Keith Sutton, Diana Cumming, Euan Uglow and Craigie Aitchison. In 1953 he spent six months in Italy after receiving a Rome Scholarship in Painting.</p>\r\n\r\n<p>From 1958 he taught at the Slade and Chelsea School of Art. February 1958 &ndash; June 1960 he held a fellowship at the Digswell Arts Trust,[2] for a period sharing a studio with Patrick Swift. In 1959 his painting A Man Who Suddenly Fell Over was acquired by the Tate Gallery. In the 1960s he painted works showing parties; later, the &quot;Lights&quot; series presented views from the air. Andrews was much impressed by a visit to Ayers Rock in 1983, but the works he produced toward the end of his life are of scenes from Scotland and London. In 1981 he moved to the village of Saxlingham Nethergate in his home county of Norfolk. He was a member of the Norwich Twenty Group.</p>\r\n\r\n<p>He painted Sax AD 832[3] in 1982 to celebrate 1,150 years of the village&#39;s history. The painting was auctioned at Christie&#39;s London on 20 June 2007 and was sold for &pound;692,000. Major exhibitions of Andrews&#39; works were held by the Arts Council in 1981 and Tate Britain in 2001.</p>\r\n\r\n<p>In 1994 he underwent an operation for cancer. He died in London on 19 July 1995. He is buried in Glenartney in Perthshire.</p>\r\n\r\n<p>Michael Andrews played a deaf-mute in Lorenza Mazzetti&#39;s Free Cinema film Together, alongside Eduardo Paolozzi (1955).</p>\r\n\r\n<p>&nbsp;</p>\r\n', '8.jpg', 'Impression of Dhaka', 'Conducted by  Richard Crook', 'https://www.youtube.com', NULL),
(9, 'Apply for membership in Bengal Practice Studio ', '', 'Bengal Practice Studio is now open after its relocation. It is now situated in the ground floor of\r\nGyantapas Abdur Razzak Bidyapeeth. The Bengal Practice Studio is now providing multiple facilities\r\nto the artists such as printmaking under the banner of Safiuddin Bengal Printmaking Studio and\r\neStudio. Interested artists are encouraged to apply for membership.\r\nThe studio will operate from Friday to Wednesday from 11am till 7pm and will remain closed on\r\nThursdays. For membership procedure and other details, please contact: +880 1844050676.\r\nBengal Practice Studio.House 60.Road 7/A.Dhanmondi.Dhaka.Bangladesh.Tel: +880\r\n9617171015.+880 1844050676.www.bengalfoundation.org', '9.jpg', '', '', '', '9.jpg'),
(10, 'Ganesh Haloi Bengal Research Grant', ' Deadline : September 15, 2017', '<p>Bengal Foundation is calling for research proposals on visual art of greater Bengal region for the Ganesh\r\nHaloi Bengal Research Grant 2017. The Grant of 2 lacs Bangladeshi taka is hosted by Bengal Foundation\r\non behalf of artist and researcher Ganesh Haloi.\r\nThe researchers/ writers are requested to submit a research proposal of a maximum of 1000 words on\r\nthe mentioned topic and submit it by September 15.\r\nThe grant aims to encourage artists, critical writers and researchers in developing focused research on\r\nart for which they might not find appropriate funding otherwise.\r\nThe grant to be attributed once every two years by a specifically appointed jury is intended for small-\r\nscale and original projects that can be completed within a 12-month time frame.</p>\r\n<p>Ganesh Haloi, Born in 1936 in Jamalpur, now Bangladesh, moved to Kolkata after the partition. The\r\ntrauma of the uprooting left its mark on his work as it did on some other painters of his generation. He is\r\none of the few artists whose works represent the essence of the greater Bengal region. His artistic\r\njourney include a great deal of research works including study of miniatures at Banasthali (Rajasthan)\r\nand research on Ajanta frescoes for six years in the initial days of his career.</p>\r\n\r\n<p>The application is now closed. </p>', '10.jpg', '', '', '', '10.jpg'),
(29, 'Obaidullah Supto', '30/05/2018', '<p>Bengal Practice Studio is now open after its relocation. It is now situated in the ground floor of Gyantapas Abdur Razzak Bidyapeeth. The Bengal Practice Studio is now providing multiple facilities to the artists such as printmaking under the banner of Safiuddin Bengal Printmaking Studio and eStudio. Interested artists are encouraged to apply for membership. The studio will operate from Friday to Wednesday from 11am till 7pm and will remain closed on Thursdays. For membership procedure and other details, please contact: +880 1844050676. Bengal Practice Studio.House 60.Road 7/A.Dhanmondi.Dhaka.Bangladesh.Tel: +880 9617171015.+880 184405...</p>\r\n', '29.jpg', 'Myself', 'Myself', 'www.youtube.com', '29.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `art`
--

CREATE TABLE IF NOT EXISTS `art` (
  `id` int(11) NOT NULL,
  `artists_id` int(11) NOT NULL,
  `photo` text,
  `vedio_array` text COMMENT 'json including',
  `audio` text,
  `artwork` text,
  `artwork_title` text,
  `images_array` text,
  `artwork_short_dis` text
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `art`
--

INSERT INTO `art` (`id`, `artists_id`, `photo`, `vedio_array`, `audio`, `artwork`, `artwork_title`, `images_array`, `artwork_short_dis`) VALUES
(16, 14, '15025243612969_59b145e09a0e2fabb6bc28bb298f09a4.jpg', '<iframe width="560" height="315" src="https://www.youtube.com/embed/iZp8OAZeg84" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>', '<iframe width=\\"560\\" height=\\"315\\" src=\\"https://www.youtube.com/embed/R3JZOsCMn3A\\" frameborder=\\"0\\" allowfullscreen></iframe>', '<p>The&nbsp;<strong>Bangladesh Liberation War</strong><sup><a href=\\"https://en.wikipedia.org/wiki/Bangladesh_Liberation_War#cite_note-13\\">[a]</a></sup>&nbsp;(<a href=\\"https://en.wikipedia.org/wiki/Bengali_language\\" title=\\"Bengali language\\">Bengali</a>:&nbsp;à¦®à§à¦•à§à¦¤à¦¿à¦¯à§à¦¦à§à¦§&nbsp;<em>Muktijuddho</em>), also known as the&nbsp;<strong>Bangladesh War of Independence</strong>, or simply the&nbsp;<strong>Liberation War</strong>&nbsp;in Bangladesh, was a revolution and&nbsp;<a href=\\"https://en.wikipedia.org/wiki/War\\" title=\\"War\\">armed conflict</a>&nbsp;sparked by the rise of the&nbsp;<a href=\\"https://en.wikipedia.org/wiki/Bengali_nationalism\\" title=\\"Bengali nationalism\\">Bengali nationalist</a>&nbsp;and&nbsp;<a href=\\"https://en.wikipedia.org/wiki/Self-determination\\" title=\\"Self-determination\\">self-determination</a>&nbsp;movement in what was then&nbsp;<a href=\\"https://en.wikipedia.org/wiki/East_Pakistan\\" title=\\"East Pakistan\\">East Pakistan</a>&nbsp;and the&nbsp;<a href=\\"https://en.wikipedia.org/wiki/1971_Bangladesh_genocide\\" title=\\"1971 Bangladesh genocide\\">1971 Bangladesh genocide</a>. It resulted in the independence of the&nbsp;<a href=\\"https://en.wikipedia.org/wiki/Bangladesh\\" title=\\"Bangladesh\\">People&#39;s Republic of Bangladesh</a>. The war began after the&nbsp;<a href=\\"https://en.wikipedia.org/wiki/Pakistan\\" title=\\"Pakistan\\">Pakistani</a><a href=\\"https://en.wikipedia.org/wiki/Military_dictatorship\\" title=\\"Military dictatorship\\">military junta</a>&nbsp;based in&nbsp;<a href=\\"https://en.wikipedia.org/wiki/West_Pakistan\\" title=\\"West Pakistan\\">West Pakistan</a>&nbsp;launched&nbsp;<a href=\\"https://en.wikipedia.org/wiki/Operation_Searchlight\\" title=\\"Operation Searchlight\\">Operation Searchlight</a>&nbsp;against the people of East Pakistan on the night of 25 March 1971. It pursued the systematic elimination of nationalist Bengali civilians, students,&nbsp;<a href=\\"https://en.wikipedia.org/wiki/Intelligentsia\\" title=\\"Intelligentsia\\">intelligentsia</a>, religious minorities and armed personnel. The junta annulled the results of the&nbsp;<a href=\\"https://en.wikipedia.org/wiki/Pakistani_general_election,_1970\\" title=\\"Pakistani general election, 1970\\">1970 elections</a>&nbsp;and arrested&nbsp;<a href=\\"https://en.wikipedia.org/wiki/Prime_minister-designate\\" title=\\"Prime minister-designate\\">Prime minister-designate</a>&nbsp;<a href=\\"https://en.wikipedia.org/wiki/Sheikh_Mujibur_Rahman\\" title=\\"Sheikh Mujibur Rahman\\">Sheikh Mujibur Rahman</a>.</p>\r\n\r\n<p>Rural and urban areas across East Pakistan saw extensive military operations and air strikes to suppress the tide of&nbsp;<a href=\\"https://en.wikipedia.org/wiki/Civil_disobedience\\" title=\\"Civil disobedience\\">civil disobedience</a>&nbsp;that formed following the 1970 election stalemate. The&nbsp;<a href=\\"https://en.wikipedia.org/wiki/Pakistan_Army\\" title=\\"Pakistan Army\\">Pakistan Army</a>, which had the backing of Islamists, created radical religious militias &ndash; the&nbsp;<a href=\\"https://en.wikipedia.org/wiki/Razakar_(Pakistan)\\" title=\\"Razakar (Pakistan)\\">Razakars</a>,&nbsp;<a href=\\"https://en.wikipedia.org/wiki/Al-Badr_(East_Pakistan)\\" title=\\"Al-Badr (East Pakistan)\\">Al-Badr</a>&nbsp;and&nbsp;<a href=\\"https://en.wikipedia.org/wiki/Al-Shams_(East_Pakistan)\\" title=\\"Al-Shams (East Pakistan)\\">Al-Shams</a>&nbsp;&ndash; to assist it during raids on the local populace.<sup><a href=\\"https://en.wikipedia.org/wiki/Bangladesh_Liberation_War#cite_note-14\\">[13]</a></sup><sup><a href=\\"https://en.wikipedia.org/wiki/Bangladesh_Liberation_War#cite_note-15\\">[14]</a></sup><sup><a href=\\"https://en.wikipedia.org/wiki/Bangladesh_Liberation_War#cite_note-16\\">[15]</a></sup><sup><a href=\\"https://en.wikipedia.org/wiki/Bangladesh_Liberation_War#cite_note-17\\">[16]</a></sup><sup><a href=\\"https://en.wikipedia.org/wiki/Bangladesh_Liberation_War#cite_note-18\\">[17]</a></sup>&nbsp;Members of the Pakistani military and supporting militias engaged in mass murder, deportation and&nbsp;<a href=\\"https://en.wikipedia.org/wiki/Rape_during_the_Bangladesh_Liberation_War\\" title=\\"Rape during the Bangladesh Liberation War\\">genocidal rape</a>. The capital&nbsp;<a href=\\"https://en.wikipedia.org/wiki/Dhaka\\" title=\\"Dhaka\\">Dhaka</a>&nbsp;was the scene of numerous massacres, including the&nbsp;<a href=\\"https://en.wikipedia.org/wiki/1971_Dhaka_University_massacre\\" title=\\"1971 Dhaka University massacre\\">Dhaka University killings</a>. An estimated 10 million Bengali&nbsp;<a href=\\"https://en.wikipedia.org/wiki/Refugee\\" title=\\"Refugee\\">refugees</a>&nbsp;fled to neighboring India, while 30 million were internally displaced.<sup><a href=\\"https://en.wikipedia.org/wiki/Bangladesh_Liberation_War#cite_note-19\\">[18]</a></sup>&nbsp;<a href=\\"https://en.wikipedia.org/wiki/Sectarian_violence\\" title=\\"Sectarian violence\\">Sectarian violence</a>&nbsp;broke out between Bengalis and&nbsp;<a href=\\"https://en.wikipedia.org/wiki/Persecution_of_Biharis_in_Bangladesh\\" title=\\"Persecution of Biharis in Bangladesh\\">Urdu-speaking immigrants</a>. An academic consensus prevails that the atrocities committed by the Pakistani military were a&nbsp;<a href=\\"https://en.wikipedia.org/wiki/Genocide\\" title=\\"Genocide\\">genocide</a>.</p>\r\n', ' Bangladesh Liberation war, 1971', '{"1":"15025243612969_59b145e09a0e2fabb6bc28bb298f09a41.jpg","2":"15025243612969_59b145e09a0e2fabb6bc28bb298f09a42.jpg","3":"15025243612969_59b145e09a0e2fabb6bc28bb298f09a43.jpg"}', '<p>According to the &quot;2000 Copyright Act of Bangladesh&quot;, artistic recreations of public architecture and art work are exceptions to the rights of authors.</p>\r\n'),
(17, 22, '15025243612969_59b145e09a0e2fabb6bc28bb298f09a4.jpg', '<iframe width="480" height="270" src="https://www.youtube.com/embed/55Yo94_43nw" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>', NULL, NULL, NULL, '{"1":"1 (0).jpg","2":"1 (1).jpg","3":"1 (4 (1).jpg","4":"1 (4 (2).jpg","5":"1 (7).JPG","6":"1 (8).jpg"}', NULL),
(23, 22, '151782828324675_a41948dc567363fba1f5c16b3840b4af.jpg', '', '', '', '', '[]', ''),
(24, 22, '151782829511545_a41948dc567363fba1f5c16b3840b4af.jpg', '', '', '', '', '[]', ''),
(25, 22, '151782830722652_a41948dc567363fba1f5c16b3840b4af.jpg', '', '', '', '', '[]', ''),
(26, 22, '15178283208127_a41948dc567363fba1f5c16b3840b4af.jpg', '', '', '', '', '[]', ''),
(27, 22, '151782833631066_a41948dc567363fba1f5c16b3840b4af.jpg', '', '', '', '', '[]', ''),
(28, 22, '151782835024042_a41948dc567363fba1f5c16b3840b4af.jpg', '', '', '', '', '[]', ''),
(29, 22, '1517828366104_a41948dc567363fba1f5c16b3840b4af.jpg', '', '', '', '', '[]', ''),
(30, 22, '151782837724440_a41948dc567363fba1f5c16b3840b4af.jpg', '', '', '', '', '[]', 'this is ronnie ahmed'),
(31, 22, '151782844026193_a41948dc567363fba1f5c16b3840b4af.jpg', '', '', '', '', '[]', ''),
(32, 22, '151782845420839_a41948dc567363fba1f5c16b3840b4af.jpg', '', '', '', '', '[]', ''),
(33, 22, '151782846928342_a41948dc567363fba1f5c16b3840b4af.jpg', '', '', '', '', '[]', ''),
(34, 22, '151782861828605_a41948dc567363fba1f5c16b3840b4af.jpg', '', '', '', '', '[]', ''),
(36, 22, '152256828030091_8917582abc8e75ade4595d0c04ae2703.jpg', '', '', '', '', 'null', '<p>sdfsd</p>\r\n'),
(37, 23, '152283563815630_12ffcec7c07ed8990f1cd25e87026707.jpg', '', '', '', '', 'null', '<p>short description&nbsp;</p>\r\n'),
(39, 23, '15228359386092_12ffcec7c07ed8990f1cd25e87026707.jpg', '', '', '', '', 'null', '<p>The chair of Lat shaheb&nbsp;</p>\r\n'),
(40, 23, '152283602627984_12ffcec7c07ed8990f1cd25e87026707.jpg', '', '', '', '', 'null', '<p>Dhali Al Mamoon Time Coincidence &amp; History Exhibition BGFA 23-01-2016_0265</p>\r\n'),
(41, 23, '152308014212806_bfefd720c6b5341576aefe0fe6d0a260.jpg', '', '', '', '', 'null', '<p>pitbull</p>\r\n'),
(43, 0, '152758397121530_o8vtko5i8ojc6et2s209j8ku14.jpg', '', '', '', '', 'null', ''),
(44, 24, '152758404314632_o8vtko5i8ojc6et2s209j8ku14.jpg', '', '', '', '', 'null', '<p>Bengal Practice Studio is now open after its relocation. It is now situated in the ground floor of Gyantapas Abdur Razzak Bidyapeeth. The Bengal Practice Studio is now providing multiple facilities to the artists such as printmaking under the banner of Safiuddin Bengal Printmaking Studio and eStudio. Interested artists are encouraged to apply for membership.&nbsp;</p>\r\n'),
(45, 0, '152758410219589_o8vtko5i8ojc6et2s209j8ku14.jpg', '', '', '', '', 'null', '<p>Bengal Practice Studio is now open after its relocation. It is now situated in the ground floor of Gyantapas Abdur Razzak Bidyapeeth. The Bengal Practice Studio is now providing multiple facilities to the artists such as printmaking under the banner of Safiuddin Bengal Printmaking Studio and eStudio. Interested artists are encouraged to apply for membership.&nbsp;</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `artists`
--

CREATE TABLE IF NOT EXISTS `artists` (
  `id` int(11) NOT NULL,
  `artists_name` varchar(100) NOT NULL,
  `title` text,
  `image_` text,
  `video` varchar(500) NOT NULL,
  `birth_date` date NOT NULL,
  `about` text,
  `text` text,
  `slider` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `artists`
--

INSERT INTO `artists` (`id`, `artists_name`, `title`, `image_`, `video`, `birth_date`, `about`, `text`, `slider`) VALUES
(14, 'Zainul Abedin', 'Painting, drawing', '150252376311488_59b145e09a0e2fabb6bc28bb298f09a4.jpg', '', '1914-12-29', '<p><strong>Zainul Abedin</strong>&nbsp;(29 December 1914&nbsp;&ndash; 28 May 1976) was a Bengali painter. He got the break through in 1944 with his Famine Series paintings of 1943. After partition he moved to Pakistan; and finally when Bangladesh was created in 1971, he was rightly considered by&nbsp;<a href=\\"https://en.wikipedia.org/wiki/Syed_Manzoorul_Islam\\" title=\\"Syed Manzoorul Islam\\">Syed Manzoorul Islam</a>&nbsp;as the founding father of Bangladeshi&nbsp;<a href=\\"https://en.wikipedia.org/wiki/Modern_art\\" title=\\"Modern art\\">modern art</a>.<sup><a href=\\"https://en.wikipedia.org/wiki/Zainul_Abedin#cite_note-1\\">[1]</a></sup>&nbsp;In 1948 he helped establish the Institute of Arts and Crafts (now&nbsp;<a href=\\"https://en.wikipedia.org/wiki/Faculty_of_Fine_Arts,_University_of_Dhaka\\" title=\\"Faculty of Fine Arts, University of Dhaka\\">Faculty of Fine Arts</a>) at&nbsp;<a href=\\"https://en.wikipedia.org/wiki/Dhaka_University\\" title=\\"Dhaka University\\">Dhaka University</a>.<sup><a href=\\"https://en.wikipedia.org/wiki/Zainul_Abedin#cite_note-Alom193873-2\\">[2]</a></sup>&nbsp;<a href=\\"https://en.wikipedia.org/wiki/The_Indian_Express\\" title=\\"The Indian Express\\">The Indian Express</a>&nbsp;described him as a Legendary Bangladeshi painter.<sup><a href=\\"https://en.wikipedia.org/wiki/Zainul_Abedin#cite_note-indianexpress-3\\">[3]</a></sup>&nbsp;Like many of his contemporaries, his paintings on the&nbsp;<a href=\\"https://en.wikipedia.org/wiki/Bengal_famine_of_1943\\" title=\\"Bengal famine of 1943\\">Bengal famine of 1943</a>&nbsp;is probably his most characteristic work. He was given the title&nbsp;<em>Shilpacharya</em>&nbsp;(Great Teacher of the Arts) in&nbsp;<a href=\\"https://en.wikipedia.org/wiki/Bangladesh\\" title=\\"Bangladesh\\">Bangladesh</a>&nbsp;for his artistic and visionary qualities.</p>\r\n', '<h2>Paintings</h2>\r\n\r\n<p>Among all the contemporary works of Abedin, his famine sketches of the 1940s are his most remarkable works. He created his famine painting set, which, when exhibited in 1944, brought him even more critical acclaim. The miserable situation of the starving people during the Great Famine of Bengal in 1943 touched his heart. He made his own ink by burning charcoal and used it on cheap, ordinary packing paper. He depicted those starving people who were dying by the road-side.<sup><a href=\\"https://en.wikipedia.org/wiki/Zainul_Abedin#cite_note-Alom193873-2\\">[2]</a></sup>&nbsp;Abedin not only documented the famine, he also revealed the famine&#39;s sinister face through the skeletal figures of people fated to die of starvation.&nbsp;<sup><a href=\\"https://en.wikipedia.org/wiki/Zainul_Abedin#cite_note-15\\">[15]</a></sup></p>\r\n\r\n<p>Abedin depicted this inhuman story with very human emotions. These drawings became iconic images of human suffering. These sketches helped him find his way in a realistic approach that focused on the human suffering, struggle and protest. He was more socially aware focusing on the working class and their struggles.<sup><a href=\\"https://en.wikipedia.org/wiki/Zainul_Abedin#cite_note-16\\">[16]</a></sup>&nbsp;The Rebel Cow marks a high point of that style. This particular brand of realism combines social inquiry and the protest with higher aesthetics. He was an influential member of the&nbsp;<a href=\\"https://en.wikipedia.org/wiki/Calcutta_Group\\" title=\\"Calcutta Group\\">Calcutta Group</a>&nbsp;of progressive artists and was friends with&nbsp;<a href=\\"https://en.wikipedia.org/wiki/Huseyn_Shaheed_Suhrawardy\\" title=\\"Huseyn Shaheed Suhrawardy\\">Shahid Suhrawardy</a>&nbsp;and&nbsp;<a href=\\"https://en.wikipedia.org/wiki/Ahmed_Ali_(writer)\\" title=\\"Ahmed Ali (writer)\\">Ahmed Ali</a>&nbsp;of the&nbsp;<a href=\\"https://en.wikipedia.org/wiki/Progressive_Writers%27_Movement\\" title=\\"Progressive Writers\\'' Movement\\">Progressive Writers&#39; Movement</a>.<sup><a href=\\"https://en.wikipedia.org/wiki/Zainul_Abedin#cite_note-17\\">[17]</a></sup>&nbsp;He made modernist paintings of&nbsp;<a href=\\"https://en.wikipedia.org/wiki/Santhal_people\\" title=\\"Santhal people\\">Santhal people</a>. Notable among them is &quot;Two Santhal Women&quot;.<sup><a href=\\"https://en.wikipedia.org/wiki/Zainul_Abedin#cite_note-18\\">[18]</a></sup></p>\r\n\r\n<p>He visited Palestinian camps in Syria and Jordan in 1970 and made 60-70 paintings of the refugees there.<sup><a href=\\"https://en.wikipedia.org/wiki/Zainul_Abedin#cite_note-19\\">[19]</a></sup>&nbsp;He also painted the&nbsp;<a href=\\"https://en.wikipedia.org/wiki/1970_Bhola_cyclone\\" title=\\"1970 Bhola cyclone\\">1970 Bhola cyclone</a>&nbsp;that devastated the then East Pakistan.<sup><a href=\\"https://en.wikipedia.org/wiki/Zainul_Abedin#cite_note-dawn776951-10\\">[10]</a></sup></p>\r\n', 'no'),
(15, 'Aminul Islam', 'Painting, drawing', '150252486524511_59b145e09a0e2fabb6bc28bb298f09a4.jpg', '', '1923-08-10', '<p><strong>Sheikh Mohammed Sultan</strong>&nbsp;(known as&nbsp;<strong>SM Sultan</strong>; 10 August 1923 &ndash; 10 October 1994), was a&nbsp;<a href=\\"https://en.wikipedia.org/wiki/Bengali_people\\" title=\\"Bengali people\\">Bengali</a>&nbsp;<a href=\\"https://en.wikipedia.org/wiki/Avant-garde\\" title=\\"Avant-garde\\">avant-garde</a>&nbsp;artist who worked in painting and drawing. His fame rests on his striking depictions of exaggeratedly muscular Bangladeshi peasants engaged in the activities of their everyday lives.<sup><a href=\\"https://en.wikipedia.org/wiki/SM_Sultan#cite_note-samaj-1\\">[1]</a></sup></p>\r\n\r\n<p>For his achievement in fine arts he was awarded with the&nbsp;<a href=\\"https://en.wikipedia.org/wiki/Ekushey_Padak\\" title=\\"Ekushey Padak\\">Ekushey Padak</a>&nbsp;in 1982; the Bangladesh Charu Shilpi Sangsad Award in 1986; and the&nbsp;<a href=\\"https://en.wikipedia.org/wiki/Independence_Day_Award\\" title=\\"Independence Day Award\\">Independence Day Award</a>&nbsp;in 1993.<sup><a href=\\"https://en.wikipedia.org/wiki/SM_Sultan#cite_note-bdnews-2\\">[2]</a></sup>&nbsp;His works are held in several major collections in Bangladesh, including the&nbsp;<a href=\\"https://en.wikipedia.org/wiki/Bangladesh_National_Museum\\" title=\\"Bangladesh National Museum\\">Bangladesh National Museum</a>, the&nbsp;<a href=\\"https://en.wikipedia.org/wiki/National_Art_Gallery_(Bangladesh)\\" title=\\"National Art Gallery (Bangladesh)\\">National Art Gallery (Bangladesh)</a>, the S.M. Sultan Memorial Museum, and the Bengal Foundation.</p>\r\n', '<h3>Indian and Pakistani period[<a href=\\"https://en.wikipedia.org/w/index.php?title=SM_Sultan&amp;action=edit&amp;section=3\\" title=\\"Edit section: Indian and Pakistani period\\">edit</a>]</h3>\r\n\r\n<p>Sultan left art school after three years, in 1944, and traveled around India. He earned his living by drawing portraits of Allied soldiers encamped along his route. His first exhibition was a solo one in Shimla, India, in 1946.<sup><a href=\\"https://en.wikipedia.org/wiki/SM_Sultan#cite_note-german-3\\">[3]</a></sup>&nbsp;Next, after&nbsp;<a href=\\"https://en.wikipedia.org/wiki/Partition_of_India\\" title=\\"Partition of India\\">Partition</a>, came two individual exhibitions in Pakistan: Lahore in 1948 and Karachi in 1949. None of his artworks from this period survived, mainly due to Sultan&#39;s own indifference towards preserving his work.<sup><a href=\\"https://en.wikipedia.org/wiki/SM_Sultan#cite_note-Banglapedia-4\\">[4]</a></sup><sup><a href=\\"https://en.wikipedia.org/wiki/SM_Sultan#cite_note-tipu-6\\">[6]</a></sup></p>\r\n\r\n<p>The&nbsp;<a href=\\"https://en.wikipedia.org/wiki/Institute_of_International_Education\\" title=\\"Institute of International Education\\">Institute of International Education</a>&nbsp;(IIE) in New York ran an International Arts Program that brought exceptionally promising foreign artists between the ages of 25 and 35, selected jointly by their country&#39;s ministry of education and the IEE, to the United States for a stay of several weeks. The institute provided round-trip transportation and grants for living expenses. The program included visits to museums, a period of creative work or study at a school, consultations with leading American artists, and exhibition of the visitors&#39; work.<sup><a href=\\"https://en.wikipedia.org/wiki/SM_Sultan#cite_note-7\\">[7]</a></sup><sup><a href=\\"https://en.wikipedia.org/wiki/SM_Sultan#cite_note-8\\">[8]</a></sup><sup><a href=\\"https://en.wikipedia.org/wiki/SM_Sultan#cite_note-9\\">[9]</a></sup></p>\r\n\r\n<p>Sultan&#39;s official selection by the government in Karachi made it possible for him to visit the United States in the early 1950s,<sup><a href=\\"https://en.wikipedia.org/wiki/SM_Sultan#cite_note-10\\">[note 1]</a></sup><sup><a href=\\"https://en.wikipedia.org/wiki/SM_Sultan#cite_note-cabinet-11\\">[10]</a></sup>&nbsp;and exhibit his work at the IEE in New York; at the YMCA in Washington, D.C.; in Boston; at the International House of the University of Chicago; and at Michigan University, Ann Arbor. Later he traveled to England, where he participated in the annual open-air group exhibition at Victoria Embankment Gardens, Hampstead, London.<sup><a href=\\"https://en.wikipedia.org/wiki/SM_Sultan#cite_note-german-3\\">[3]</a></sup><sup><a href=\\"https://en.wikipedia.org/wiki/SM_Sultan#cite_note-Banglapedia-4\\">[4]</a></sup></p>\r\n\r\n<p>The following year, while teaching art at a school in Karachi, he came into contact with leading Pakistani artists&nbsp;<a href=\\"https://en.wikipedia.org/wiki/Abdur_Rahman_Chughtai\\" title=\\"Abdur Rahman Chughtai\\">Abdur Rahman Chughtai</a>&nbsp;and&nbsp;<a href=\\"https://en.wikipedia.org/wiki/Shakir_Ali_(artist)\\" title=\\"Shakir Ali (artist)\\">Shakir Ali</a>, with whom he developed a lasting friendship. After a period living and painting in&nbsp;<a href=\\"https://en.wikipedia.org/wiki/Kashmir\\" title=\\"Kashmir\\">Kashmir</a>, Sultan returned to his native Narail in 1953. He settled down in an abandoned building overlooking the&nbsp;<a href=\\"https://en.wikipedia.org/wiki/Chitra_River\\" title=\\"Chitra River\\">Chitra River</a>, where he lived with an eclectic collection of pets.<sup><a href=\\"https://en.wikipedia.org/wiki/SM_Sultan#cite_note-Banglapedia-4\\">[4]</a></sup><sup><a href=\\"https://en.wikipedia.org/wiki/SM_Sultan#cite_note-dictionary-12\\">[11]</a></sup>&nbsp;He lived close to the land and far from the outside art world for the next twenty-three years, developing a reputation as a whimsical recluse and a Bohemian.<sup><a href=\\"https://en.wikipedia.org/wiki/SM_Sultan#cite_note-german-3\\">[3]</a></sup><sup><a href=\\"https://en.wikipedia.org/wiki/SM_Sultan#cite_note-textbook-13\\">[12]</a></sup></p>\r\n\r\n<p>Sultan&#39;s drawings, such as his self-portrait, are characterized by their economy and compactness. The lines are powerful and fully developed. His early paintings were influenced by the Impressionists. In his oils he employed Van Gogh&#39;s impasto technique. His watercolors, predominantly landscapes, are bright and lively.<sup><a href=\\"https://en.wikipedia.org/wiki/SM_Sultan#cite_note-Banglapedia-4\\">[4]</a></sup><sup><a href=\\"https://en.wikipedia.org/wiki/SM_Sultan#cite_note-dastagir-14\\">[13]</a></sup></p>\r\n\r\n<p>The themes of his paintings are nature and rural life.<sup><a href=\\"https://en.wikipedia.org/wiki/SM_Sultan#cite_note-Banglapedia-4\\">[4]</a></sup>&nbsp;S Amjad Ali, writing in 1952 for Pakistan Quarterly, described Sultan as a &quot;landscape artist.&quot; Any human figures in his scenes were secondary. In Ali&#39;s view Sultan painted from memory in a style that had no definite identity or origins.<sup><a href=\\"https://en.wikipedia.org/wiki/SM_Sultan#cite_note-dastagir-14\\">[13]</a></sup></p>\r\n\r\n<h3>Bangladeshi period</h3>\r\n\r\n<p>Between Sultan&#39;s 1969 individual exhibition at the Khulna Club, Khulna, and the first National Art Exhibition (a group exhibition), in Dhaka, in 1975,<sup><a href=\\"https://en.wikipedia.org/wiki/SM_Sultan#cite_note-nree-15\\">[14]</a></sup>&nbsp;a transformation took place in his work.<sup><a href=\\"https://en.wikipedia.org/wiki/SM_Sultan#cite_note-tipu-6\\">[6]</a></sup><sup><a href=\\"https://en.wikipedia.org/wiki/SM_Sultan#cite_note-dastagir-14\\">[13]</a></sup></p>\r\n\r\n<p>Agricultural laborers engaged in everyday activities such as ploughing, planting, threshing, and fishing took center stage on his canvases. The landscape - farmland, rivers, villages - was still present, but as a backdrop. What was distinctive about his figures, such as those in&nbsp;<em>Char Dakhal</em>&nbsp;(1976), was their exaggeratedly muscular physique. In this way he made obvious the inner strength of the sturdy, hard working peasants, the backbone of Bangladesh, something that would have remained hidden in a more realistic depiction.<sup><a href=\\"https://en.wikipedia.org/wiki/SM_Sultan#cite_note-samaj-1\\">[1]</a></sup><sup><a href=\\"https://en.wikipedia.org/wiki/SM_Sultan#cite_note-tipu-6\\">[6]</a></sup><sup><a href=\\"https://en.wikipedia.org/wiki/SM_Sultan#cite_note-cabinet-11\\">[10]</a></sup><sup><a href=\\"https://en.wikipedia.org/wiki/SM_Sultan#cite_note-textbook-13\\">[12]</a></sup></p>\r\n\r\n<p>Sultan did some of his best work in the 1970s and 1980s. In 1976 the Bangladesh Shilpakala Academy put on an individual exhibition of his work. It was his first major exhibition and his first in Dhaka.<sup><a href=\\"https://en.wikipedia.org/wiki/SM_Sultan#cite_note-samaj-1\\">[1]</a></sup><sup><a href=\\"https://en.wikipedia.org/wiki/SM_Sultan#cite_note-dictionary-12\\">[11]</a></sup>&nbsp;The next year he was selected as a member of the panel of judges for the Asian Art Biennale in Dhaka.<sup><a href=\\"https://en.wikipedia.org/wiki/SM_Sultan#cite_note-cabinet-11\\">[10]</a></sup>&nbsp;The catalog of his solo exhibition at the German Cultural Center, Dhaka, in 1987, described how he saw his subjects:</p>\r\n\r\n<blockquote>\r\n<p>These people who lived close to the soil, who bore on their shoulders the burden of civilization did not appear to Sultan to be weak, debilitated, starving creatures who deserved pity and sympathy. Quite the contrary, he saw their bulging muscles, their vigorous torso, their overpowering vitality, their well-rounded buttocks and swelling breasts ready to come to grip with life.<sup><a href=\\"https://en.wikipedia.org/wiki/SM_Sultan#cite_note-german-3\\">[3]</a></sup></p>\r\n</blockquote>\r\n', 'no'),
(16, 'Mustafa Monwar', 'painter, sculptor, artist', '15025251029868_59b145e09a0e2fabb6bc28bb298f09a4.jpg', '  <iframe width="854" height="480" src="https://www.youtube.com/embed/Zefj73MjpcU" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>', '1935-09-01', '<p><strong>Mustafa Manwar</strong>&nbsp;(born 1 September 1935) is a&nbsp;<a href="\\" title="\\">Bangladeshi</a>&nbsp;artist. He is a painter, sculptor, radio performer and professor of fine arts. He is currently the chairman of Bangladesh&nbsp;<a href="\\" title="\\">Shishu Academy</a>. He was awarded&nbsp;<a href="\\" title="\\">Ekushey Padak</a>&nbsp;in 2004.<sup><a href="\\">[1]</a></sup></p>\r\n', '<p>Manwar started his career as lecturer at the&nbsp;<a href="\\" title="\\">East Pakistan College of Arts and Crafts</a>. Later, he joined&nbsp;<a href="\\" title="\\">Bangladesh Television</a>&nbsp;as director general. Later he would also serve as the director general of the Shilpakala Academy and the National Media Institute. He would also serve as a managing director of the FDC.<sup><a href="\\">[2]</a></sup></p>\r\n', 'no'),
(18, 'Dilara Begum Jolly', 'Painting, drawing', '150252376311488_59b145e09a0e2fabb6bc28bb298f09a4.jpg', '', '1914-12-29', '<p><strong>Zainul Abedin</strong>&nbsp;(29 December 1914&nbsp;&ndash; 28 May 1976) was a Bengali painter. He got the break through in 1944 with his Famine Series paintings of 1943. After partition he moved to Pakistan; and finally when Bangladesh was created in 1971, he was rightly considered by&nbsp;<a href=\\"https://en.wikipedia.org/wiki/Syed_Manzoorul_Islam\\" title=\\"Syed Manzoorul Islam\\">Syed Manzoorul Islam</a>&nbsp;as the founding father of Bangladeshi&nbsp;<a href=\\"https://en.wikipedia.org/wiki/Modern_art\\" title=\\"Modern art\\">modern art</a>.<sup><a href=\\"https://en.wikipedia.org/wiki/Zainul_Abedin#cite_note-1\\">[1]</a></sup>&nbsp;In 1948 he helped establish the Institute of Arts and Crafts (now&nbsp;<a href=\\"https://en.wikipedia.org/wiki/Faculty_of_Fine_Arts,_University_of_Dhaka\\" title=\\"Faculty of Fine Arts, University of Dhaka\\">Faculty of Fine Arts</a>) at&nbsp;<a href=\\"https://en.wikipedia.org/wiki/Dhaka_University\\" title=\\"Dhaka University\\">Dhaka University</a>.<sup><a href=\\"https://en.wikipedia.org/wiki/Zainul_Abedin#cite_note-Alom193873-2\\">[2]</a></sup>&nbsp;<a href=\\"https://en.wikipedia.org/wiki/The_Indian_Express\\" title=\\"The Indian Express\\">The Indian Express</a>&nbsp;described him as a Legendary Bangladeshi painter.<sup><a href=\\"https://en.wikipedia.org/wiki/Zainul_Abedin#cite_note-indianexpress-3\\">[3]</a></sup>&nbsp;Like many of his contemporaries, his paintings on the&nbsp;<a href=\\"https://en.wikipedia.org/wiki/Bengal_famine_of_1943\\" title=\\"Bengal famine of 1943\\">Bengal famine of 1943</a>&nbsp;is probably his most characteristic work. He was given the title&nbsp;<em>Shilpacharya</em>&nbsp;(Great Teacher of the Arts) in&nbsp;<a href=\\"https://en.wikipedia.org/wiki/Bangladesh\\" title=\\"Bangladesh\\">Bangladesh</a>&nbsp;for his artistic and visionary qualities.</p>\r\n', '<h2>Paintings</h2>\r\n\r\n<p>Among all the contemporary works of Abedin, his famine sketches of the 1940s are his most remarkable works. He created his famine painting set, which, when exhibited in 1944, brought him even more critical acclaim. The miserable situation of the starving people during the Great Famine of Bengal in 1943 touched his heart. He made his own ink by burning charcoal and used it on cheap, ordinary packing paper. He depicted those starving people who were dying by the road-side.<sup><a href=\\"https://en.wikipedia.org/wiki/Zainul_Abedin#cite_note-Alom193873-2\\">[2]</a></sup>&nbsp;Abedin not only documented the famine, he also revealed the famine&#39;s sinister face through the skeletal figures of people fated to die of starvation.&nbsp;<sup><a href=\\"https://en.wikipedia.org/wiki/Zainul_Abedin#cite_note-15\\">[15]</a></sup></p>\r\n\r\n<p>Abedin depicted this inhuman story with very human emotions. These drawings became iconic images of human suffering. These sketches helped him find his way in a realistic approach that focused on the human suffering, struggle and protest. He was more socially aware focusing on the working class and their struggles.<sup><a href=\\"https://en.wikipedia.org/wiki/Zainul_Abedin#cite_note-16\\">[16]</a></sup>&nbsp;The Rebel Cow marks a high point of that style. This particular brand of realism combines social inquiry and the protest with higher aesthetics. He was an influential member of the&nbsp;<a href=\\"https://en.wikipedia.org/wiki/Calcutta_Group\\" title=\\"Calcutta Group\\">Calcutta Group</a>&nbsp;of progressive artists and was friends with&nbsp;<a href=\\"https://en.wikipedia.org/wiki/Huseyn_Shaheed_Suhrawardy\\" title=\\"Huseyn Shaheed Suhrawardy\\">Shahid Suhrawardy</a>&nbsp;and&nbsp;<a href=\\"https://en.wikipedia.org/wiki/Ahmed_Ali_(writer)\\" title=\\"Ahmed Ali (writer)\\">Ahmed Ali</a>&nbsp;of the&nbsp;<a href=\\"https://en.wikipedia.org/wiki/Progressive_Writers%27_Movement\\" title=\\"Progressive Writers\\'' Movement\\">Progressive Writers&#39; Movement</a>.<sup><a href=\\"https://en.wikipedia.org/wiki/Zainul_Abedin#cite_note-17\\">[17]</a></sup>&nbsp;He made modernist paintings of&nbsp;<a href=\\"https://en.wikipedia.org/wiki/Santhal_people\\" title=\\"Santhal people\\">Santhal people</a>. Notable among them is &quot;Two Santhal Women&quot;.<sup><a href=\\"https://en.wikipedia.org/wiki/Zainul_Abedin#cite_note-18\\">[18]</a></sup></p>\r\n\r\n<p>He visited Palestinian camps in Syria and Jordan in 1970 and made 60-70 paintings of the refugees there.<sup><a href=\\"https://en.wikipedia.org/wiki/Zainul_Abedin#cite_note-19\\">[19]</a></sup>&nbsp;He also painted the&nbsp;<a href=\\"https://en.wikipedia.org/wiki/1970_Bhola_cyclone\\" title=\\"1970 Bhola cyclone\\">1970 Bhola cyclone</a>&nbsp;that devastated the then East Pakistan.<sup><a href=\\"https://en.wikipedia.org/wiki/Zainul_Abedin#cite_note-dawn776951-10\\">[10]</a></sup></p>\r\n', 'no'),
(20, 'Mahbubur Rahman', 'painter, sculptor, artist', '15025251029868_59b145e09a0e2fabb6bc28bb298f09a4.jpg', '', '1935-09-01', '<p><strong>Mustafa Manwar</strong>&nbsp;(born 1 September 1935) is a&nbsp;<a href=\\"https://en.wikipedia.org/wiki/Bangladesh\\" title=\\"Bangladesh\\">Bangladeshi</a>&nbsp;artist. He is a painter, sculptor, radio performer and professor of fine arts. He is currently the chairman of Bangladesh&nbsp;<a href=\\"https://en.wikipedia.org/wiki/Shishu_Academy\\" title=\\"Shishu Academy\\">Shishu Academy</a>. He was awarded&nbsp;<a href=\\"https://en.wikipedia.org/wiki/Ekushey_Padak\\" title=\\"Ekushey Padak\\">Ekushey Padak</a>&nbsp;in 2004.<sup><a href=\\"https://en.wikipedia.org/wiki/Mustafa_Monwar#cite_note-ds17Feb2004-1\\">[1]</a></sup></p>\r\n', '<p>Manwar started his career as lecturer at the&nbsp;<a href=\\"https://en.wikipedia.org/wiki/Faculty_of_Fine_Arts,_University_of_Dhaka\\" title=\\"Faculty of Fine Arts, University of Dhaka\\">East Pakistan College of Arts and Crafts</a>. Later, he joined&nbsp;<a href=\\"https://en.wikipedia.org/wiki/Bangladesh_Television\\" title=\\"Bangladesh Television\\">Bangladesh Television</a>&nbsp;as director general. Later he would also serve as the director general of the Shilpakala Academy and the National Media Institute. He would also serve as a managing director of the FDC.<sup><a href=\\"https://en.wikipedia.org/wiki/Mustafa_Monwar#cite_note-2\\">[2]</a></sup></p>\r\n', 'no'),
(22, 'Ronni Ahmmed', 'Freelance artist', '22.jpg', '<iframe width="560" height="315" src="https://www.youtube.com/embed/BmIS501RS7Y" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>', '1971-10-12', '<p>Born in 1971, Dhaka, Bangladesh.</p>\r\n\r\n<p>Education<br />\r\n2002: BFA, Institute of Fine Arts, University of Dhaka, Bangladesh.</p>\r\n\r\n<p><br />\r\nRonni Ahmmed is an absurdist with a penchant for articulating the social-political realities in hyperboles. Four consecutive solo exhibitions - the first, &#39;Untitled&#39;, in 2002 and the second, &#39;Mythoronnia&#39; in 2004, both at Alliance Francaise, Dhaka; &#39;Archaeology of Noah&#39;s Ark&#39;, in 2005, in Dhaka and Chittagong, at respective galleries of Alliance Francaise, and lastly, &#39;Tales of Pseudo Myth&#39;, at Bengal Gallery of Fine Arts in 2006, Dhaka, were testimony to his outr&eacute; sensibilities. The Bengal show was a turning point for this young artist, as it brought into view his ability to redefine his own aesthetic strategies subjecting his imagery to extreme manipulations. In terms of the changes that his imagery went through, his politically charged images have been slowly replaced by poetical ones, as is evident in his 100-foot long &#39;Archaeology of Noah&#39;s Arc&#39;, which caused quite a stir in the Bangladeshi art scene due to the fact that it aligned the popular with the mythical with an spontaneity that breaches the established notion of the dichotomous relation between high and low art. His &lsquo;Tomb of Kara Qoez&rsquo;, an installation that uses numerous drinking glasses and painted eggs, has recently been showcased in Venice, at OPEN 24, curated by Paolo De Grandis, co-curated by Carlotta Scarpa, organized by Arte Communications, in collaboration with the Department of Culture of the Venice City Council.</p>\r\n\r\n<p>Present Position&nbsp;<br />\r\nFreelance artist</p>\r\n', '<p><a href="http://artasiapacific.com/Magazine/WebExclusives/GodsAndBeasts" target="_blank">God and Beasts, Ronni Ahmmed, Web review by Melia Belli Bose, Art Asia Pacific</a></p>\r\n', 'no'),
(23, 'Dhali Al Mamoon', 'Artist ', '23.jpg', '<iframe width="854" height="480" src="https://www.youtube.com/embed/SqKBiHF5lBs" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>', '1958-01-02', '<p>Dhali Al Mamoon (b. 1958, Chandpur, Bangladesh) is a Bangladeshi artist and art educator based in Chittagong. His drawings, paintings, kinetic sculptures and installations explore issues of knowledge, history and identity. Mamoon often constructs complex, melodramatic experiences that are allegorical in effect and often cast new light on the understanding of memory in his homeland.</p>\r\n\r\n<p>Recent solo exhibitions of Mamoon&rsquo;s works include &quot;Time, Coincidence and History&quot; (Bengal Gallery of Fine Arts, Dhaka, 2016) and &quot;Aponayon/Elimination&quot; (Bengal Art Lounge, Dhaka, 2014). In 2013, his works were presented in the Bangladesh Pavilion at La Biennale di Venezia. Mamoon was awarded with the Grand Prize at the 12th Asian Art Biennale, Bangladesh (2006). His works have been collected by the Bangladesh National Museum; Bengal Foundation, Bangladesh; Ibsen Museum, Norway; Fukuoka Asian Art Museum, Japan amongst several other public and private collections.<br />\r\n&nbsp;</p>\r\n', '<p>Art critic Giorgio Guglielmino and artist &nbsp;Wakilur Rahman&nbsp;<br />\r\nspeak to Dhali Al Mamoon on October 28, 2012.<br />\r\nGiorgio: The thing that strikes me about your art work is the prevalence of political references, especially from Western political ideologies of the 70&#39;s. I&#39;m curious to see if you were also influenced by the art movements of the West?</p>\r\n\r\n<p>Dhali: There is no way that I can avoid Western influence and there are many reasons for that. For one we cannot escape the colonial history of our country. Even in terms of &nbsp;art education, the making of art, even the esthetic sense, and political ideas, everything came from the West. From our student days we questioned these things but we could not go beyond that. Probably, this is the problem of every post-colonial country.&nbsp;</p>\r\n\r\n<p>I have been teaching at the university for 26 years, and I have found many problems, for instance nothing is contextual, nothing is space and time related. From the curriculum to the methodology of teaching ,we are just copying the West without questioning. That&#39;s the real problem, which I try to address and solve in my works. I criticize myself and try to go beyond that.</p>\r\n\r\n<p>Giorgio: Even thought I am not an expert in Pakistani art, it seems to me that Pakistani artists, despite a similar history of colonisation, are quite good at using their roots as a tool to go ahead. Take for instance the rebirth of miniature painting which was heralded by a small group of artists like Rashid Rana, who used a traditional form to convey a conceptual idea. But maybe that is not the case in Bangladesh?</p>\r\n\r\n<p>Dhali: This is an interesting debate. This development in Pakistan is very recent, it happened over the last decade. Before the partition, the art activity was centered in East Pakistan but now I think the Pakistani arts are doing better. The question of influence becomes relevant again at this point. If you look at the people who are making these changes, they are coming from abroad, they are educated abroad and are mostly members of the diaspora. So when they come back, they look at the past and try to address it again with new ideas, creating a new discourse, even though I don&#39;t know what it is. The appreciation of art comes from the West, those that come back bring it with them along &nbsp;with the consciousness of how the west looks as us... As students we were also preoccupied with the idea of identity and trying to figure out what it really means.</p>\r\n\r\n<p>Wakil: From this aspect, I would like to add that the generation of artists who founded the art institute in the 50&#39;s had a different role to play from ours. They spent most of their power and energy to establish the art college, but they did not continue to found a system based on intellectual practice. This is the case in the government academies in Dhaka, Chittagong, and Rajshahi. Some individuals can try to change things, to start something new, but they are faced with the opposition of the power alliance, which does not encourage intellectual discourse. That is one major problem &ndash; that institutionally there is no tradition of intellectual exercise.</p>\r\n\r\n<p>G: Let me make a big jump. I think in every art scene artists rely greatly on the support of the collectors. I think one of the issues, I don&#39;t want to call it a problem, but it is definitely an issue, is the lack of committed collectors of contemporary art. What is your opinion on that?</p>\r\n\r\n<p>D: I do agree with you but the existing paradox is there is a total lack of art professionals - museum directors, collectors, art critics, gallerists, whatever. In the development of contemporary art in the West you can observe the relationship between art and society &ndash; you see how it is related to commerce, to commodity, to individualism. What we have here is just the reflection of all of this, and somehow it is not really focused it is blurred.&nbsp;</p>\r\n\r\n<p>G: I think it is a pity because from a very cold and market oriented point of view, Bangladeshi art is still very cheap compared to international standards therefore I am surprised that there is not a small group of collectors that decide to invest, and maybe invest is not a great word, but to build a nucleus of contemporary art which honestly would cost very little.</p>\r\n\r\n<p>W: This word &#39;collecting&#39; has just become popular very recently, before it was just on a very individual level. And even our government institutions they never collected with an objective in mind. But a nation has a need to see its past. If we see the collections of the Shilpakala academy or the National Museum, we will not see any contextual historical point of view. This is necessary for our art praxis, for the development of our idea of identity.</p>\r\n\r\n<p><br />\r\nIn the last 10 &ndash; 15 years we see the appearance of a new generation, they are young, they are earning large sums of money and now they are interested in collecting art. But again the question arises, what kind of art? In our student years most of the art was collected by foreigners, embassy people were interested in landscape artists, because they were collecting souvenirs</p>\r\n\r\n<p>D: But that is not art collection&hellip;</p>\r\n\r\n<p>W: That was the situation. Now I see one or two collectors that are becoming clam and quiet and they say &#39;ok my house is full&#39; and what does that mean? Now after 15 years they are becoming a little bit more conscious.</p>\r\n\r\n<p>D: What is missing is the understanding of art, in regard to the institutes, the artist, the critics, even art collectors and galleries. We do not consider our art as an art. As a generation we tried, but we failed, to create our own definition. But we are questioning, what is art? What is the role of art?</p>\r\n\r\n<p>G: But do you think that also the young artists are asking themselves these questions?</p>\r\n\r\n<p>D: I am really frustrated sometimes because I do not get these questions from the younger generation because they are busy looking after their career. I hope some of them are.&nbsp;<br />\r\nW: Since you are a teacher you see it through your experience. But what I see is that the situation of students has changed very much in the last decade or so. We can not compare it with our time. The questions have also changed. Perhaps it&#39;s a generation problem and we do not understand them. But it is true, that there is a lack of understanding of art. What kind of questions do they have? I do not know, but I am not very optimistic.</p>\r\n\r\n<p>D: Maybe because we belong to the same age, and to the same contemporary group and understanding, I agree with Wakil, if you look at my painting, if you go through my whole journey, you can find that there was a search for something. When I was painting, I was trying to incorporate the local tradition, like the cinema banner and rikshaw art. From my point of view and understanding of the language of art, I tried to imix the local flavors with the technique. The same applies to my installations.&nbsp;</p>\r\n\r\n<p>When you are suffering from an identity crisis, it is like a disease, it is a complex. So if you are not free from it, you can not create. It is a burden, when I am looking for identity everything I do is preoccupied with that. But there are so many things in life, art is not only about identity, it is more than that. Maybe for the new generation, because the whole global scenario has changed, this is no longer an issue. You can no longer claim that contemporary art is from the West, because the whole idea has shifted. And in the next 10 -20 years everything will be different.</p>\r\n\r\n<p>G: I would like to return to the question of identity. Before coming here I was in Argentina, and that is another country with a huge identity problem. The attitude was similar to that which I found here. Gallerists, artists, collectors, are all isolated and do not communicate with one another. When I went to Brazil, I found a people with a very strong sense of who they are and a completely different attitude. The art community &ndash; artists, curators, critics, gallerists, museum directors, are cohesive and work together as an army to move ahead as a whole structure. And that is something I did not find here and I wonder if this has something to do with the lack of understanding of identity and its strengths.&nbsp;</p>\r\n\r\n<p>D: If you look at the art scene as a whole, how people are appreciating, representing, discussing art, you do not see communication. But we have to move forward. As an artist I have to keep asking myself in which direction. Taking in consideration history, genealogy, politics, genes, tradition, it is all very complex.&nbsp;</p>\r\n\r\n<p>G: Can we talk a little bit about the reinterpretation of history, &nbsp;since the exhibit is based on genocide. What I see happening in Bangladesh, is a fervent nationalism which is negative. Is that something that you worry about?</p>\r\n\r\n<p>D: Nationalism is an important element to me. I want to address this issue in a different way in the exhibit. In my recent works, I tried to create a vocabulary though images and objects, because I believe that objects and images have the ability to create a dialogue with the viewers, and through them I try to address this issue.<br />\r\n&nbsp;</p>\r\n', 'yes'),
(24, 'Obaidullah Supto', 'Developer', '24.jpg', 'www.youtube.com ', '1994-12-17', '<p>Hey guys this is supto :D :P</p>\r\n', '<p>Hey guys this is supto :D&nbsp;</p>\r\n', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `artist_gallery_home`
--

CREATE TABLE IF NOT EXISTS `artist_gallery_home` (
  `id` int(11) NOT NULL,
  `img1` text NOT NULL,
  `img2` text NOT NULL,
  `img3` text NOT NULL,
  `img4` text NOT NULL,
  `img5` text NOT NULL,
  `artist_link` text NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `artist_gallery_home`
--

INSERT INTO `artist_gallery_home` (`id`, `img1`, `img2`, `img3`, `img4`, `img5`, `artist_link`) VALUES
(16, '15210232451170_caf654b7f1bea2daca8017ac2b5d4f60.jpg', '15210232451170_caf654b7f1bea2daca8017ac2b5d4f602.jpg', '15210232451170_caf654b7f1bea2daca8017ac2b5d4f603.jpg', '15210232451170_caf654b7f1bea2daca8017ac2b5d4f604.jpg', '15210232451170_caf654b7f1bea2daca8017ac2b5d4f605.jpg', 'https://bijoyekushe.net/Bengal_Arts/artist_profile.php?GetId=14');

-- --------------------------------------------------------

--
-- Table structure for table `exibiution`
--

CREATE TABLE IF NOT EXISTS `exibiution` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `discription` text,
  `image_` text,
  `exi_date` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=277 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `exibiution`
--

INSERT INTO `exibiution` (`id`, `title`, `discription`, `image_`, `exi_date`) VALUES
(24, 'Ephemeral : Perennial', '<p>an exhibition of performance art</p>\r\n<p>12 aug - 10 sep</p>', 'Untitled-2.jpg', '2017-08-12'),
(26, 'Ephemeral : Perennial', '<p>an exhibition of performance art</p>\r\n<p>6 aug - 10 aug</p>', 'Untitled-1.jpg', '2017-08-12'),
(27, '', '', '3.jpg', '2017-08-12'),
(28, '', '', '4.jpg', '2017-08-12'),
(29, '', '', '5.jpg', '2017-08-12'),
(30, '', '', '6.jpg', '2017-08-12'),
(31, '', '', '7.jpg', '2017-08-12'),
(32, '', '', '8.jpg', '2017-08-12'),
(33, '', '', '9.jpg', '2017-08-12'),
(34, '', '', '1.jpg', '2016-08-12'),
(35, '', '', '2.jpg', '2016-06-12'),
(36, '', '', '3.jpg', '2016-08-12'),
(37, '', '', '4.jpg', '2016-08-12'),
(38, '', '', '5.jpg', '2016-08-12'),
(39, '', '', '6.jpg', '2016-08-12'),
(40, '', '', '7.jpg', '2016-08-12'),
(41, '', '', '8.jpg', '2016-08-12'),
(42, '', '', '9.jpg', '2016-08-12'),
(91, '', '', '1.jpg', '2015-08-12'),
(92, '', '', '2.jpg', '2015-06-12'),
(93, '', '', '3.jpg', '2015-08-12'),
(94, '', '', '4.jpg', '2015-08-12'),
(95, '', '', '5.jpg', '2015-08-12'),
(96, '', '', '6.jpg', '2015-08-12'),
(97, '', '', '7.jpg', '2015-08-12'),
(98, '', '', '8.jpg', '2015-08-12'),
(99, '', '', '9.jpg', '2015-08-12'),
(100, '', '', '1.jpg', '2014-08-12'),
(101, '', '', '2.jpg', '2014-06-12'),
(102, '', '', '3.jpg', '2014-08-12'),
(103, '', '', '4.jpg', '2014-08-12'),
(104, '', '', '5.jpg', '2014-08-12'),
(105, '', '', '6.jpg', '2014-08-12'),
(106, '', '', '7.jpg', '2014-08-12'),
(107, '', '', '8.jpg', '2014-08-12'),
(108, '', '', '9.jpg', '2014-08-12'),
(109, '', '', '1.jpg', '2013-08-12'),
(110, '', '', '2.jpg', '2013-06-12'),
(111, '', '', '3.jpg', '2013-08-12'),
(112, '', '', '4.jpg', '2013-08-12'),
(113, '', '', '5.jpg', '2013-08-12'),
(114, '', '', '6.jpg', '2013-08-12'),
(115, '', '', '7.jpg', '2013-08-12'),
(116, '', '', '8.jpg', '2013-08-12'),
(117, '', '', '9.jpg', '2013-08-12'),
(118, '', '', '1.jpg', '2012-08-12'),
(119, '', '', '2.jpg', '2012-06-12'),
(120, '', '', '3.jpg', '2012-08-12'),
(121, '', '', '4.jpg', '2012-08-12'),
(122, '', '', '5.jpg', '2012-08-12'),
(123, '', '', '6.jpg', '2012-08-12'),
(124, '', '', '7.jpg', '2012-08-12'),
(125, '', '', '8.jpg', '2012-08-12'),
(126, '', '', '9.jpg', '2012-08-12'),
(127, '', '', '1.jpg', '2011-08-12'),
(128, '', '', '2.jpg', '2011-06-12'),
(129, '', '', '3.jpg', '2011-08-12'),
(130, '', '', '4.jpg', '2011-08-12'),
(131, '', '', '5.jpg', '2011-08-12'),
(132, '', '', '6.jpg', '2011-08-12'),
(133, '', '', '7.jpg', '2011-08-12'),
(134, '', '', '8.jpg', '2011-08-12'),
(135, '', '', '9.jpg', '2011-08-12'),
(136, '', '', '1.jpg', '2010-08-12'),
(137, '', '', '2.jpg', '2010-06-12'),
(138, '', '', '3.jpg', '2010-08-12'),
(139, '', '', '4.jpg', '2010-08-12'),
(140, '', '', '5.jpg', '2010-08-12'),
(141, '', '', '6.jpg', '2010-08-12'),
(142, '', '', '7.jpg', '2010-08-12'),
(143, '', '', '8.jpg', '2010-08-12'),
(144, '', '', '9.jpg', '2010-08-12'),
(145, '', '', '1.jpg', '2009-08-12'),
(146, '', '', '2.jpg', '2009-06-12'),
(147, '', '', '3.jpg', '2009-08-12'),
(148, '', '', '4.jpg', '2009-08-12'),
(149, '', '', '5.jpg', '2009-08-12'),
(150, '', '', '6.jpg', '2009-08-12'),
(151, '', '', '7.jpg', '2009-08-12'),
(152, '', '', '8.jpg', '2009-08-12'),
(153, '', '', '9.jpg', '2009-08-12'),
(154, '', '', '1.jpg', '2009-08-12'),
(155, '', '', '2.jpg', '2009-06-12'),
(156, '', '', '3.jpg', '2009-08-12'),
(157, '', '', '4.jpg', '2009-08-12'),
(158, '', '', '5.jpg', '2009-08-12'),
(159, '', '', '6.jpg', '2009-08-12'),
(160, '', '', '7.jpg', '2009-08-12'),
(161, '', '', '8.jpg', '2009-08-12'),
(162, '', '', '9.jpg', '2009-08-12'),
(163, '', '', '1.jpg', '2008-08-12'),
(164, '', '', '2.jpg', '2008-06-12'),
(165, '', '', '3.jpg', '2008-08-12'),
(166, '', '', '4.jpg', '2008-08-12'),
(167, '', '', '5.jpg', '2008-08-12'),
(168, '', '', '6.jpg', '2008-08-12'),
(169, '', '', '7.jpg', '2008-08-12'),
(170, '', '', '8.jpg', '2008-08-12'),
(171, '', '', '9.jpg', '2008-08-12'),
(172, '', '', '1.jpg', '2007-08-12'),
(173, '', '', '2.jpg', '2007-06-12'),
(174, '', '', '3.jpg', '2007-08-12'),
(175, '', '', '4.jpg', '2007-08-12'),
(176, '', '', '5.jpg', '2007-08-12'),
(177, '', '', '6.jpg', '2007-08-12'),
(178, '', '', '7.jpg', '2007-08-12'),
(179, '', '', '8.jpg', '2007-08-12'),
(180, '', '', '9.jpg', '2007-08-12'),
(181, '', '', '1.jpg', '2006-08-12'),
(182, '', '', '2.jpg', '2006-06-12'),
(183, '', '', '3.jpg', '2006-08-12'),
(184, '', '', '4.jpg', '2006-08-12'),
(185, '', '', '5.jpg', '2006-08-12'),
(186, '', '', '6.jpg', '2006-08-12'),
(187, '', '', '7.jpg', '2006-08-12'),
(188, '', '', '8.jpg', '2006-08-12'),
(189, '', '', '9.jpg', '2006-08-12'),
(190, '', '', '1.jpg', '2005-08-12'),
(191, '', '', '2.jpg', '2005-06-12'),
(192, '', '', '3.jpg', '2005-08-12'),
(193, '', '', '4.jpg', '2005-08-12'),
(194, '', '', '5.jpg', '2005-08-12'),
(195, '', '', '6.jpg', '2005-08-12'),
(196, '', '', '7.jpg', '2005-08-12'),
(197, '', '', '8.jpg', '2005-08-12'),
(198, '', '', '9.jpg', '2005-08-12'),
(199, '', '', '1.jpg', '2004-08-12'),
(200, '', '', '2.jpg', '2004-06-12'),
(201, '', '', '3.jpg', '2004-08-12'),
(202, '', '', '4.jpg', '2004-08-12'),
(203, '', '', '5.jpg', '2004-08-12'),
(204, '', '', '6.jpg', '2004-08-12'),
(205, '', '', '7.jpg', '2004-08-12'),
(206, '', '', '8.jpg', '2004-08-12'),
(207, '', '', '9.jpg', '2004-08-12'),
(208, '', '', '1.jpg', '2003-08-12'),
(209, '', '', '2.jpg', '2003-06-12'),
(210, '', '', '3.jpg', '2003-08-12'),
(211, '', '', '4.jpg', '2003-08-12'),
(212, '', '', '5.jpg', '2003-08-12'),
(213, '', '', '6.jpg', '2003-08-12'),
(214, '', '', '7.jpg', '2003-08-12'),
(215, '', '', '8.jpg', '2003-08-12'),
(216, '', '', '9.jpg', '2003-08-12'),
(217, '', '', '1.jpg', '2002-08-12'),
(218, '', '', '2.jpg', '2002-06-12'),
(219, '', '', '3.jpg', '2002-08-12'),
(220, '', '', '4.jpg', '2002-08-12'),
(221, '', '', '5.jpg', '2002-08-12'),
(222, '', '', '6.jpg', '2002-08-12'),
(223, '', '', '7.jpg', '2002-08-12'),
(224, '', '', '8.jpg', '2002-08-12'),
(225, '', '', '9.jpg', '2002-08-12'),
(226, '', '', '1.jpg', '2001-08-12'),
(227, '', '', '2.jpg', '2001-06-12'),
(228, '', '', '3.jpg', '2001-08-12'),
(229, '', '', '4.jpg', '2001-08-12'),
(230, '', '', '5.jpg', '2001-08-12'),
(231, '', '', '6.jpg', '2001-08-12'),
(232, '', '', '7.jpg', '2001-08-12'),
(233, '', '', '8.jpg', '2001-08-12'),
(234, '', '', '9.jpg', '2001-08-12'),
(235, '', '', '1.jpg', '2000-08-12'),
(236, '', '', '2.jpg', '2000-06-12'),
(237, '', '', '3.jpg', '2000-08-12'),
(238, '', '', '4.jpg', '2000-08-12'),
(239, '', '', '5.jpg', '2000-08-12'),
(240, '', '', '6.jpg', '2000-08-12'),
(241, '', '', '7.jpg', '2000-08-12'),
(242, '', '', '8.jpg', '2000-08-12'),
(243, '', '', '9.jpg', '2000-08-12'),
(252, 'this is title', '<p>dasdsa</p>\r\n', '152101562510351_387764d125ec8a4a99d0a4fcd3bd0dfe.jpg', '2018-03-14'),
(253, 'New Title ttttkhjkh', '', '253.JPG', '2018-03-14'),
(254, '1', '<p>1 des</p>\r\n', '152102449523079_caf654b7f1bea2daca8017ac2b5d4f60.jpg', '2018-03-14'),
(255, '2', '<p>2 des</p>\r\n', '152102452229908_caf654b7f1bea2daca8017ac2b5d4f60.jpg', '2018-03-14'),
(256, '3 ', '<p>3 des</p>\r\n', '152102455819040_caf654b7f1bea2daca8017ac2b5d4f60.jpg', '2018-03-01'),
(257, '4', '<p>4 des</p>\r\n', '15210245721661_caf654b7f1bea2daca8017ac2b5d4f60.jpg', '2018-03-16'),
(258, '5', '<p>5 des</p>\r\n', '15210245896937_caf654b7f1bea2daca8017ac2b5d4f60.jpg', '2018-04-13'),
(259, '6', '<p>6 des</p>\r\n', '15210246062418_caf654b7f1bea2daca8017ac2b5d4f60.jpg', '2018-01-19'),
(260, '7', '<p>7 des</p>\r\n', '152102462729123_caf654b7f1bea2daca8017ac2b5d4f60.jpg', '2018-03-16'),
(261, '8', '<p>8 des</p>\r\n', '152102465124706_caf654b7f1bea2daca8017ac2b5d4f60.jpg', '2018-03-30'),
(271, 'Subtext', '<p>Subtext&nbsp;</p>\r\n\r\n<p>4 - 28&nbsp;February&nbsp;&nbsp;</p>\r\n', '152283279113367_12ffcec7c07ed8990f1cd25e87026707.jpg', '2018-02-04'),
(272, 'Subtext', '<p>4 &ndash; 24 February, 2018&nbsp;</p>\r\n', '152283358630402_12ffcec7c07ed8990f1cd25e87026707.jpg', '2018-02-04'),
(273, 'dsadsa', '<p>dsdsdsa</p>\r\n', '152307817711617_bfefd720c6b5341576aefe0fe6d0a260.jpg', '2018-04-07'),
(274, 'Developer', '<p>Bengal Practice Studio is now open after its relocation. It is now situated in the ground floor of Gyantapas Abdur Razzak Bidyapeeth. The Bengal Practice Studio is now providing multiple facilities to the artists such as printmaking under the banner of Safiuddin Bengal Printmaking Studio and eStudio. Interested artists are encouraged to apply for membership.</p>\r\n', '152758426131499_o8vtko5i8ojc6et2s209j8ku14.jpg', '2018-03-05'),
(275, 'Developer', '<p>abcd</p>\r\n', '152758431128136_o8vtko5i8ojc6et2s209j8ku14.jpg', '2017-05-29'),
(276, 'Developer', '<p>Bengal Practice Studio is now open after its relocation.</p>\r\n', '152758435111265_o8vtko5i8ojc6et2s209j8ku14.jpg', '2017-01-02');

-- --------------------------------------------------------

--
-- Table structure for table `exibiution_details`
--

CREATE TABLE IF NOT EXISTS `exibiution_details` (
  `id` int(11) NOT NULL,
  `exibitution_id` int(11) NOT NULL,
  `about_` text,
  `vedio_array` text COMMENT 'json including',
  `text_dis` text,
  `catalog_file_pdf` text,
  `images_array` text,
  `link` varchar(250) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `exibiution_details`
--

INSERT INTO `exibiution_details` (`id`, `exibitution_id`, `about_`, `vedio_array`, `text_dis`, `catalog_file_pdf`, `images_array`, `link`) VALUES
(11, 24, '<p>Michael Andrews was born in Norwich, England, the second child of Thomas Victor Andrews and his wife Gertrude Emma Green. He completed his National service between 1947 and 1949, nineteen months of which was spent in Egypt.[1] From 1949 to 1953 he studied at the Slade School of Fine Art under William Coldstream, Lucian Freud, William Townsend and Lawrence Gowing. Fellow students and friends there included Victor Willing, Keith Sutton, Diana Cumming, Euan Uglow and Craigie Aitchison. In 1953 he spent six months in Italy after receiving a Rome Scholarship in Painting.</p>\r\n\r\n<p>From 1958 he taught at the Slade and Chelsea School of Art. February 1958 &ndash; June 1960 he held a fellowship at the Digswell Arts Trust,[2] for a period sharing a studio with Patrick Swift. In 1959 his painting A Man Who Suddenly Fell Over was acquired by the Tate Gallery. In the 1960s he painted works showing parties; later, the &quot;Lights&quot; series presented views from the air. Andrews was much impressed by a visit to Ayers Rock in 1983, but the works he produced toward the end of his life are of scenes from Scotland and London. In 1981 he moved to the village of Saxlingham Nethergate in his home county of Norfolk. He was a member of the Norwich Twenty Group.</p>\r\n\r\n<p>He painted Sax AD 832[3] in 1982 to celebrate 1,150 years of the village&#39;s history. The painting was auctioned at Christie&#39;s London on 20 June 2007 and was sold for &pound;692,000. Major exhibitions of Andrews&#39; works were held by the Arts Council in 1981 and Tate Britain in 2001.</p>\r\n\r\n<p>In 1994 he underwent an operation for cancer. He died in London on 19 July 1995. He is buried in Glenartney in Perthshire.</p>\r\n\r\n<p>Michael Andrews played a deaf-mute in Lorenza Mazzetti&#39;s Free Cinema film Together, alongside Eduardo Paolozzi (1955).</p>\r\n', 'https://www.youtube.com/', '<p>Michael Andrews was born in Norwich, England, the second child of Thomas Victor Andrews and his wife Gertrude Emma Green. He completed his National service between 1947 and 1949, nineteen months of which was spent in Egypt.[1] From 1949 to 1953 he studied at the Slade School of Fine Art under William Coldstream, Lucian Freud, William Townsend and Lawrence Gowing. Fellow students and friends there included Victor Willing, Keith Sutton, Diana Cumming, Euan Uglow and Craigie Aitchison. In 1953 he spent six months in Italy after receiving a Rome Scholarship in Painting.</p>\r\n\r\n<p>From 1958 he taught at the Slade and Chelsea School of Art. February 1958 &ndash; June 1960 he held a fellowship at the Digswell Arts Trust,[2] for a period sharing a studio with Patrick Swift. In 1959 his painting A Man Who Suddenly Fell Over was acquired by the Tate Gallery. In the 1960s he painted works showing parties; later, the &quot;Lights&quot; series presented views from the air. Andrews was much impressed by a visit to Ayers Rock in 1983, but the works he produced toward the end of his life are of scenes from Scotland and London. In 1981 he moved to the village of Saxlingham Nethergate in his home county of Norfolk. He was a member of the Norwich Twenty Group.</p>\r\n\r\n<p>He painted Sax AD 832[3] in 1982 to celebrate 1,150 years of the village&#39;s history. The painting was auctioned at Christie&#39;s London on 20 June 2007 and was sold for &pound;692,000. Major exhibitions of Andrews&#39; works were held by the Arts Council in 1981 and Tate Britain in 2001.</p>\r\n\r\n<p>In 1994 he underwent an operation for cancer. He died in London on 19 July 1995. He is buried in Glenartney in Perthshire.</p>\r\n\r\n<p>Michael Andrews played a deaf-mute in Lorenza Mazzetti&#39;s Free Cinema film Together, alongside Eduardo Paolozzi (1955).</p>\r\n', '150252179028587_59b145e09a0e2fabb6bc28bb298f09a4.pdf', '{"1":"150252179028587_59b145e09a0e2fabb6bc28bb298f09a41.jpg","2":"150252179028587_59b145e09a0e2fabb6bc28bb298f09a42.jpg","3":"150252032818469_59b145e09a0e2fabb6bc28bb298f09a4_1.jpg"}', 'https://www.youtube.com/'),
(12, 26, '<p>&nbsp;Michael Andrews was born in Norwich, England, the second child of Thomas Victor Andrews and his wife Gertrude Emma Green. He completed his National service between 1947 and 1949, nineteen months of which was spent in Egypt.[1] From 1949 to 1953 he studied at the Slade School of Fine Art under William Coldstream, Lucian Freud, William Townsend and Lawrence Gowing. Fellow students and friends there included Victor Willing, Keith Sutton, Diana Cumming, Euan Uglow and Craigie Aitchison. In 1953 he spent six months in Italy after receiving a Rome Scholarship in Painting.</p>\r\n', 'https://www.youtube.com', '<p>&nbsp;Michael Andrews was born in Norwich, England, the second child of Thomas Victor Andrews and his wife Gertrude Emma Green. He completed his National service between 1947 and 1949, nineteen months of which was spent in Egypt.[1] From 1949 to 1953 he studied at the Slade School of Fine Art under William Coldstream, Lucian Freud, William Townsend and Lawrence Gowing. Fellow students and friends there included Victor Willing, Keith Sutton, Diana Cumming, Euan Uglow and Craigie Aitchison. In 1953 he spent six months in Italy after receiving a Rome Scholarship in Painting.</p>\r\n', '150252223910095_59b145e09a0e2fabb6bc28bb298f09a4.pdf', '{"1":"150252223910095_59b145e09a0e2fabb6bc28bb298f09a41.jpg","2":"150252223910095_59b145e09a0e2fabb6bc28bb298f09a42.jpg","3":"150252223910095_59b145e09a0e2fabb6bc28bb298f09a43.jpg"}', ''),
(13, 27, '<p>&nbsp;Michael Andrews was born in Norwich, England, the second child of Thomas Victor Andrews and his wife Gertrude Emma Green. He completed his National service between 1947 and 1949, nineteen months of which was spent in Egypt.[1] From 1949 to 1953 he studied at the Slade School of Fine Art under William Coldstream, Lucian Freud, William Townsend and Lawrence Gowing. Fellow students and friends there included Victor Willing, Keith Sutton, Diana Cumming, Euan Uglow and Craigie Aitchison. In 1953 he spent six months in Italy after receiving a Rome Scholarship in Painting.</p>\r\n', 'https://www.youtube.com', '<p>&nbsp;Michael Andrews was born in Norwich, England, the second child of Thomas Victor Andrews and his wife Gertrude Emma Green. He completed his National service between 1947 and 1949, nineteen months of which was spent in Egypt.[1] From 1949 to 1953 he studied at the Slade School of Fine Art under William Coldstream, Lucian Freud, William Townsend and Lawrence Gowing. Fellow students and friends there included Victor Willing, Keith Sutton, Diana Cumming, Euan Uglow and Craigie Aitchison. In 1953 he spent six months in Italy after receiving a Rome Scholarship in Painting.</p>\r\n', '150252263525245_59b145e09a0e2fabb6bc28bb298f09a4.pdf', '{"1":"150252263525245_59b145e09a0e2fabb6bc28bb298f09a41.jpg","2":"150252263525245_59b145e09a0e2fabb6bc28bb298f09a42.jpg","3":"150252263525245_59b145e09a0e2fabb6bc28bb298f09a43.jpg"}', ''),
(16, 252, '<p>this is about</p>\r\n', 'https://youtu.be/9dHLFD_Jveo', '<p>fdsfdsf</p>\r\n', NULL, '{"1":"152101566514716_387764d125ec8a4a99d0a4fcd3bd0dfe1.jpg","2":"152101566514716_387764d125ec8a4a99d0a4fcd3bd0dfe2.jpg","3":"152101566514716_387764d125ec8a4a99d0a4fcd3bd0dfe3.jpg","4":"152101566514716_387764d125ec8a4a99d0a4fcd3bd0dfe4.jpg","5":"152101566514716_387764d125ec8a4a99d0a4fcd3bd0dfe5.jpg"}', 'fdfsf'),
(17, 253, '<p>About dfsdfsdfdsfd</p>\r\n', '', '<p>Text fgdfgfdgfd</p>\r\n', NULL, '{"1":"152101629020215_387764d125ec8a4a99d0a4fcd3bd0dfe1.jpg","2":"152101629020215_387764d125ec8a4a99d0a4fcd3bd0dfe2.jpg","3":"152101629020215_387764d125ec8a4a99d0a4fcd3bd0dfe3.jpg","4":"152101629020215_387764d125ec8a4a99d0a4fcd3bd0dfe4.jpg","5":"152101629020215_387764d125ec8a4a99d0a4fcd3bd0dfe5.jpg","6":"152101629020215_387764d125ec8a4a99d0a4fcd3bd0dfe6.jpg","7":"152101629020215_387764d125ec8a4a99d0a4fcd3bd0dfe7.jpg","8":"152101629020215_387764d125ec8a4a99d0a4fcd3bd0dfe8.jpg","9":"152101629020215_387764d125ec8a4a99d0a4fcd3bd0dfe9.jpg","10":"152101629020215_387764d125ec8a4a99d0a4fcd3bd0dfe10.jpg"}', 'https://www.youtube.com/watch?v=9dHLFD_Jveo'),
(24, 272, '<p>Subtext is a culmination of texts, symbols and images to re-explore the relationship of text and image. A white cube is temporarily transformed into a reading room with an overlap between text-based art and art-based-text. It is an imaginary library formed for the artists and art audience to test the symbiosis of form and meaning.</p>\r\n\r\n<p>Subtext features a display of two hundred fifty six books on art across the world covering diverse subjects including history, biography, theories, philosophy, manifestos and more. The intertwined play of art and text are reflected in video, drawing and installation works by nine artists.</p>\r\n\r\n<p>The participating artists are Abir Shome, Bishwajit Goswami, Emran Sohel, Marzia Farhana, Mustafa Zaman, Palash Bhattacharjee, Razib Datta, Wakilur Rahman and Zihan Karim.</p>\r\n', '', '<p>This is text&nbsp;</p>\r\n', NULL, '{"1":"152283372110915_12ffcec7c07ed8990f1cd25e870267071.jpg","2":"152283372110915_12ffcec7c07ed8990f1cd25e870267072.jpg","3":"152283372110915_12ffcec7c07ed8990f1cd25e870267073.jpg","4":"152283372110915_12ffcec7c07ed8990f1cd25e870267074.jpg","5":"152283372110915_12ffcec7c07ed8990f1cd25e870267075.jpg","6":"152283372110915_12ffcec7c07ed8990f1cd25e870267076.jpg","7":"152283372110915_12ffcec7c07ed8990f1cd25e870267077.jpg","8":"152283372110915_12ffcec7c07ed8990f1cd25e870267078.jpg","9":"152283372110915_12ffcec7c07ed8990f1cd25e870267079.jpg"}', 'https://bengalfoundation.org/?news=subtext'),
(25, 254, '<p>hfiof</p>\r\n', '', '', NULL, '{"1":"1522834185286_12ffcec7c07ed8990f1cd25e870267071.jpg"}', ''),
(26, 276, '<p>My name is supto</p>\r\n', '', '<p>Supto</p>\r\n', NULL, '{"1":"152758453020759_o8vtko5i8ojc6et2s209j8ku141.jpg","2":"152758453020759_o8vtko5i8ojc6et2s209j8ku142.jpg"}', 'www.google.com');

-- --------------------------------------------------------

--
-- Table structure for table `home_slider`
--

CREATE TABLE IF NOT EXISTS `home_slider` (
  `id` int(11) NOT NULL,
  `heading` text NOT NULL,
  `title` text NOT NULL,
  `img_cap` varchar(1000) NOT NULL,
  `s_text` varchar(5000) NOT NULL,
  `date` varchar(1000) NOT NULL,
  `image` varchar(5000) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=33 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `home_slider`
--

INSERT INTO `home_slider` (`id`, `heading`, `title`, `img_cap`, `s_text`, `date`, `image`) VALUES
(11, 'Bangladesh in Documenta 14', 'Upheavals', 'Kassel, Germany', '<p>Michael Andrews Was Born In Norwich, England, The Second Child Of Thomas Victor Andrews And His Wife Gertrude Emma Green. He Completed His National Service Between 1947 And 1949, Nineteen Months Of Which Was Spent In Egypt.[1] From 1949 To 1953 He Studied At The Slade School Of Fine Art Under William Coldstream, Lucian Freud, William Townsend And Lawrence Gowing. Fellow Students And Friends There Included Victor Willing, Keith Sutton, Diana Cumming, Euan Uglow And Craigie Aitchison. In 1953 He Spent Six Months In Italy After Receiving A Rome Scholarship In Painting.</p>\r\n\r\n<p>From 1958 He Taught At The Slade And Chelsea School Of Art. February 1958 &ndash; June 1960 He Held A Fellowship At The Digswell Arts Trust,[2] For A Period Sharing A Studio With Patrick Swift. In 1959 His Painting A Man Who Suddenly Fell Over Was Acquired By The Tate Gallery. In The 1960s He Painted Works Showing Parties; Later, The &quot;Lights&quot; Series Presented Views From The Air. Andrews Was Much Impressed By A Visit To Ayers Rock In 1983, But The Works He Produced Toward The End Of His Life Are Of Scenes From Scotland And London. In 1981 He Moved To The Village Of Saxlingham Nethergate In His Home County Of Norfolk. He Was A Member Of The Norwich Twenty Group.</p>\r\n\r\n<p>He Painted Sax AD 832[3] In 1982 To Celebrate 1,150 Years Of The Village&#39;s History. The Painting Was Auctioned At Christie&#39;s London On 20 June 2007 And Was Sold For &pound;692,000. Major Exhibitions Of Andrews&#39; Works Were Held By The Arts Council In 1981 And Tate Britain In 2001.</p>\r\n\r\n<p>In 1994 He Underwent An Operation For Cancer. He Died In London On 19 July 1995. He Is Buried In Glenartney In Perthshire.</p>\r\n\r\n<p>Michael Andrews Played A Deaf-Mute In Lorenza Mazzetti&#39;s Free Cinema Film Together, Alongside Eduardo Paolozzi (1955).</p>\r\n', 'June to September, 2017 ', '11.jpg'),
(10, 'Ephemeral : Perennial', 'Upheavals', 'An exhibition of performance art', '<p>Michael Andrews Was Born In Norwich, England, The Second Child Of Thomas Victor Andrews And His Wife Gertrude Emma Green. He Completed His National Service Between 1947 And 1949, Nineteen Months Of Which Was Spent In Egypt.[1] From 1949 To 1953 He Studied At The Slade School Of Fine Art Under William Coldstream, Lucian Freud, William Townsend And Lawrence Gowing. Fellow Students And Friends There Included Victor Willing, Keith Sutton, Diana Cumming, Euan Uglow And Craigie Aitchison. In 1953 He Spent Six Months In Italy After Receiving A Rome Scholarship In Painting.</p>\r\n\r\n<p>From 1958 He Taught At The Slade And Chelsea School Of Art. February 1958 &ndash; June 1960 He Held A Fellowship At The Digswell Arts Trust,[2] For A Period Sharing A Studio With Patrick Swift. In 1959 His Painting A Man Who Suddenly Fell Over Was Acquired By The Tate Gallery. In The 1960s He Painted Works Showing Parties; Later, The &quot;Lights&quot; Series Presented Views From The Air. Andrews Was Much Impressed By A Visit To Ayers Rock In 1983, But The Works He Produced Toward The End Of His Life Are Of Scenes From Scotland And London. In 1981 He Moved To The Village Of Saxlingham Nethergate In His Home County Of Norfolk. He Was A Member Of The Norwich Twenty Group.</p>\r\n\r\n<p>He Painted Sax AD 832[3] In 1982 To Celebrate 1,150 Years Of The Village&#39;s History. The Painting Was Auctioned At Christie&#39;s London On 20 June 2007 And Was Sold For &pound;692,000. Major Exhibitions Of Andrews&#39; Works Were Held By The Arts Council In 1981 And Tate Britain In 2001.</p>\r\n\r\n<p>In 1994 He Underwent An Operation For Cancer. He Died In London On 19 July 1995. He Is Buried In Glenartney In Perthshire.</p>\r\n\r\n<p>Michael Andrews Played A Deaf-Mute In Lorenza Mazzetti&#39;s Free Cinema Film Together, Alongside Eduardo Paolozzi (1955).</p>\r\n', '12 August to 10 September, 2017', '10.jpg'),
(12, 'Ganesh Haloi Bengal Research Grant 2017', 'research proposals ', 'Bengal Foundation is calling for research proposals ', '<p>&nbsp;</p>\r\n\r\n<p>Bengal Foundation is calling for research proposals on visual arts of greater Bengal region for the Ganesh Haloi Bengal Research Grant 2017. The Grant of 2 lacs Bangladeshi taka will be attributed by Bengal Foundation on behalf of artist and researcher Ganesh Haloi. Interested researchers and writers are invited to submit a research proposal of a maximum of 1000 words by September 10. For more, visit:&nbsp;<a href="http://www.bengalfoundation.org/?news=ganesh-haloi-bengal-research-grant-2017" rel="noopener nofollow" target="_blank">http://www.bengalfoundation.org/?news=ganesh-haloi-bengal-research-grant-2017</a></p>\r\n', '', '12.jpg'),
(13, 'Upheavals at Kathmandu Triennale', 'research proposals ', 'Bangladesh through the eyes of eight artists', '<p>&nbsp;</p>\r\n\r\n<p>Bengal Foundation is calling for research proposals on visual arts of greater Bengal region for the Ganesh Haloi Bengal Research Grant 2017. The Grant of 2 lacs Bangladeshi taka will be attributed by Bengal Foundation on behalf of artist and researcher Ganesh Haloi. Interested researchers and writers are invited to submit a research proposal of a maximum of 1000 words by September 10. For more, visit:&nbsp;<a href="http://www.bengalfoundation.org/?news=ganesh-haloi-bengal-research-grant-2017" rel="noopener nofollow" target="_blank">http://www.bengalfoundation.org/?news=ganesh-haloi-bengal-research-grant-2017</a></p>\r\n', '26 March to 9 April, 2017', '13.jpg'),
(23, 'Heading', 'Designation ', 'Image Caption Subtext', '<p>&nbsp;Slider Text Subtext begins today</p>\r\n', '2018-03-08', '23.jpg'),
(29, '4 â€“ 24 February, 2018', 'Subtext', 'Subtext', '<p>Subtext is a culmination of texts, symbols and images to re-explore the relationship of text and image. A white cube is temporarily transformed into a reading room with an overlap between text-based art and art-based-text. It is an imaginary library formed for the artists and art audience to test the symbiosis of form and meaning.</p>\r\n\r\n<p>Subtext features a display of two hundred fifty six books on art across the world covering diverse subjects including history, biography, theories, philosophy, manifestos and more. The intertwined play of art and text are reflected in video, drawing and installation works by nine artists.<br />\r\nThe participating artists are Abir Shome, Bishwajit Goswami, Emran Sohel, Marzia Farhana, Mustafa Zaman, Palash Bhattacharjee, Razib Datta, Wakilur Rahman and Zihan Karim.</p>\r\n', '2018-02-04', '29.jpg'),
(32, 'OS', 'Developer', 'Image', '<p>Hey guys this is supto :D&nbsp;</p>\r\n', '1994-12-17', '32.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `home_update`
--

CREATE TABLE IF NOT EXISTS `home_update` (
  `id` int(11) NOT NULL,
  `image` varchar(5000) NOT NULL,
  `img_cap` text NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=48 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `home_update`
--

INSERT INTO `home_update` (`id`, `image`, `img_cap`) VALUES
(23, '23.jpg', 'Dhali Al Mamoon');

-- --------------------------------------------------------

--
-- Table structure for table `people`
--

CREATE TABLE IF NOT EXISTS `people` (
  `id` int(250) NOT NULL,
  `name` varchar(30) NOT NULL,
  `about` varchar(1500) NOT NULL,
  `picture` varchar(250) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=39 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `people`
--

INSERT INTO `people` (`id`, `name`, `about`, `picture`) VALUES
(14, 'Abir Shome', 'Spending 14 years with Bengal Foundation Sarwar Jahan Shanto has witnessed the uphill journey of the modern art scene of Bangladesh.\r\n His growth is influenced by the vision and energy of Bengal Foundation to lay a strong base for a vibrant realm of visual art in Bangladesh.\r\n As a core member of Bengal Foundation Sarwar has worked to develop the process and concept of show making, to encourage critical writing practice, \r\nto develop public relation practice with potential stakeholders of visual arts to engage general people with appreciation and most importantly to establish and\r\n nurture a small but flourishing art market for the sustainability of visual artists. Sarwar and other members of Foundation has contributed their best to establish \r\nBengal Gallery of Fine Arts as the premier gallery of Bangladesh. Sarwar now taking care of Operation, Administration and Finance of the Arts Programme of Bengal\r\n Foundation.', '14.jpg'),
(15, 'Sadia Marium\r\n', 'The approach of the Visual Arts programme is comprehensive: it ambitions to foster an arts ecosystem within which critical discourse, curatorial practice and\r\n contemporary artistic creation mutually reinforce each other. Its actions are incremental: it mounts small or medium-sized projects of uncompromising quality,\r\n while always trying to maximise their impact on the local and regional arts scene. Its philosophy is non-commercial: all the events it proposes are entirely', '15.jpg'),
(16, 'Israt Layla', 'Spending 14 years with Bengal Foundation Sarwar Jahan Shanto has witnessed the uphill journey of the modern art scene of Bangladesh.\r\n His growth is influenced by the vision and energy of Bengal Foundation to lay a strong base for a vibrant realm of visual art in Bangladesh. \r\nAs a core member of Bengal Foundation Sarwar has worked to develop the process and concept of show making, to encourage critical writing practice, \r\nto develop public relation practice with potential stakeholders of visual arts to engage general people with appreciation and most importantly to\r\n establish and nurture a small but flourishing art market for the sustainability of visual artists. Sarwar and other members of Foundation has contributed their\r\n best to establish Bengal Gallery of Fine Arts as the premier gallery of Bangladesh. Sarwar now taking care of Operation, Administration and Finance of the Arts \r\nProgramme of Bengal Foundation.', '16.jpg'),
(38, 'Obaidullah Supto', 'Abcd efgh ijkl mnop qr stu vwx yz. Abcd efgh ijkl mnop qr stu vwx yz. Abcd efgh ijkl mnop qr stu vwx yz. Abcd efgh ijkl mnop qr stu vwx yz. Abcd efgh ijkl mnop qr stu vwx yz. Abcd efgh ijkl mnop qr stu vwx yz. Abcd efgh ijkl mnop qr stu vwx yz. Abcd efgh ijkl mnop qr stu vwx yz. Abcd efgh ijkl mnop qr stu vwx yz. Abcd efgh ijkl mnop qr stu vwx yz. Abcd efgh ijkl mnop qr stu vwx yz. Abcd efgh ijkl mnop qr stu vwx yz. Abcd efgh ijkl mnop qr stu vwx yz. ', '38.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `venue`
--

CREATE TABLE IF NOT EXISTS `venue` (
  `id` int(11) NOT NULL,
  `image` varchar(5000) NOT NULL,
  `details` varchar(255) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `venue`
--

INSERT INTO `venue` (`id`, `image`, `details`) VALUES
(20, '20.jpg', 'Bengal Gallery of Fine Arts\r\nHouse 42, Road 16 (New)\r\nDhanmondi, Dhaka\r\n'),
(21, '21.jpg', '      Daily Star Bengal Arts Precinct \r\n64-65 Kazi Nazrul Islam Avenue \r\nKarwan Bazar, Dhaka\r\n'),
(22, '22.jpg', 'Bengal Practice Studio\r\nHouse 60, Road 7/A\r\nDhanmondi, Dhaka\r\n'),
(27, '27.jpg', 'Bengal Practice Studio is now open after its relocation. It is now situated in the ground floor of Gyantapas Abdur Razzak Bidyapeeth. The Bengal Practice Studio is now providing multiple facilities to the artists such as printmaking under the banner of Sa');

-- --------------------------------------------------------

--
-- Table structure for table `workshop`
--

CREATE TABLE IF NOT EXISTS `workshop` (
  `id` int(11) NOT NULL,
  `workshop_name` varchar(255) NOT NULL,
  `conducted_name` varchar(255) NOT NULL,
  `short_dip` varchar(1000) NOT NULL,
  `images` varchar(5000) NOT NULL,
  `workshop_details` text NOT NULL,
  `v_link` varchar(255) NOT NULL,
  `catagories` varchar(255) DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=52 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `workshop`
--

INSERT INTO `workshop` (`id`, `workshop_name`, `conducted_name`, `short_dip`, `images`, `workshop_details`, `v_link`, `catagories`) VALUES
(7, 'Printmaking Worshop', 'Shahid Kabirdfwwwwww', 'We''ve done this because it''s clear we didn''t understand exactly what we were doing. We''ve been shipping many features over the years aimed at allowing community creators to receive a share of the rewards, and in the past, they''ve been received well. It''s obvious now that this case is different.', '7.jpg', '<p>We&#39;ve done this because it&#39;s clear we didn&#39;t understand exactly what we were doing. We&#39;ve been shipping many features over the years aimed at allowing community creators to receive a share of the rewards, and in the past, they&#39;ve been received well. It&#39;s obvious now that this case is different.</p>\r\n', 'https://www.youtube.com/', 'Workshop'),
(9, 'Impression of Dhaka', ' Richard Crook', 'We''re going to remove the payment feature from the Skyrim workshop. For anyone who spent money on a mod, we''ll be refunding you the complete amount. We talked to the team at Bethesda and they agree.', '9.jpg', '<p>We&#39;re going to remove the payment feature from the Skyrim workshop. For anyone who spent money on a mod, we&#39;ll be refunding you the complete amount. We talked to the team at Bethesda and they agree.</p>\r\n', 'https://www.youtube.com/', 'Workshop'),
(10, 'ACT Curatorial Practice Workshop', 'Sharmini Pereira Alice Ko', 'To help you understand why we thought this was a good idea, our main goals were to allow mod makers the opportunity to work on their mods full time if they wanted to, and to encourage developers to provide better support to their mod communities. We thought this would result in better mods for everyone, both free & paid. We wanted more great mods becoming great products, like Dota, Counter-strike, DayZ, and Killing Floor, and we wanted that to happen organically for any mod maker who wanted to take a shot at it.', '10.jpg', '<p>To help you understand why we thought this was a good idea, our main goals were to allow mod makers the opportunity to work on their mods full time if they wanted to, and to encourage developers to provide better support to their mod communities. We thought this would result in better mods for everyone, both free &amp; paid. We wanted more great mods becoming great products, like Dota, Counter-strike, DayZ, and Killing Floor, and we wanted that to happen organically for any mod maker who wanted to take a shot at it.</p>\r\n', 'https://www.youtube.com/', 'Workshop'),
(11, 'Live Video Performance Art Workshop', 'Richard Crook', ' we underestimated the differences between our previously successful revenue sharing models, and the addition of paid mods to Skyrim''s workshop. We understand our own game''s communities pretty well, but stepping into an established, years old modding community in Skyrim was probably not the right place to start iterating. We think this made us miss the mark pretty badly, even though we believe there''s a useful feature somewhere here.', '11.jpg', '<p><br />\r\nwe underestimated the differences between our previously successful revenue sharing models, and the addition of paid mods to Skyrim&#39;s workshop. We understand our own game&#39;s communities pretty well, but stepping into an established, years old modding community in Skyrim was probably not the right place to start iterating. We think this made us miss the mark pretty badly, even though we believe there&#39;s a useful feature somewhere here.</p>\r\n', 'https://www.youtube.com/', 'Workshop'),
(12, 'Impression of Dhaka', 'Richard Crook', 'We''re going to remove the payment feature from the Skyrim workshop. For anyone who spent money on a mod, we''ll be refunding you the complete amount. We talked to the team at Bethesda and they agree.', '12.jpg', '<p>We&#39;re going to remove the payment feature from the Skyrim workshop. For anyone who spent money on a mod, we&#39;ll be refunding you the complete amount. We talked to the team at Bethesda and they agree.</p>\r\n', 'https://www.youtube.com', 'Workshop'),
(13, 'Moulding Worshop', 'Shahid Kabir', 'We''ve done this because it''s clear we didn''t understand exactly what we were doing. We''ve been shipping many features over the years aimed at allowing community creators to receive a share of the rewards, and in the past, they''ve been received well. It''s obvious now that this case is different.', '13.jpg', '<p>We&#39;ve done this because it&#39;s clear we didn&#39;t understand exactly what we were doing. We&#39;ve been shipping many features over the years aimed at allowing community creators to receive a share of the rewards, and in the past, they&#39;ve been received well. It&#39;s obvious now that this case is different.</p>\r\n', 'https://www.youtube.com/', 'Workshop'),
(14, 'Printmaking Worshop', 'Shahid Kabir', 'We''ve done this because it''s clear we didn''t understand exactly what we were doing. We''ve been shipping many features over the years', '14.jpg', '<p>We&#39;ve done this because it&#39;s clear we didn&#39;t understand exactly what we were doing. We&#39;ve been shipping many features over the years</p>\r\n', 'https://www.youtube.com/', 'Workshop'),
(15, 'Moulding Worshop', 'Richard Crook', 'We''ve done this because it''s clear we didn''t understand exactly what we were doing. We''ve been shipping many features over the years aimed at allowing community creators to receive a share of the rewards, and in the past, they''ve been received well. It''s obvious now that this case is different.', '15.jpg', '<p>We&#39;ve done this because it&#39;s clear we didn&#39;t understand exactly what we were doing. We&#39;ve been shipping many features over the years aimed at allowing community creators to receive a share of the rewards, and in the past, they&#39;ve been received well. It&#39;s obvious now that this case is different.</p>\r\n', 'https://www.youtube.com/', 'Workshop'),
(17, 'Impression of Dhaka', ' Richard Crook', 'We''re going to remove the payment feature from the Skyrim workshop. For anyone who spent money on a mod, we''ll be refunding you the complete amount. We talked to the team at Bethesda and they agree.', '9.jpg', '<p>We&#39;re going to remove the payment feature from the Skyrim workshop. For anyone who spent money on a mod, we&#39;ll be refunding you the complete amount. We talked to the team at Bethesda and they agree.</p>\r\n', 'https://www.youtube.com/', 'Event'),
(18, 'ACT Curatorial Practice Workshop', 'Sharmini Pereira Alice Ko', 'To help you understand why we thought this was a good idea, our main goals were to allow mod makers the opportunity to work on their mods full time if they wanted to, and to encourage developers to provide better support to their mod communities. We thought this would result in better mods for everyone, both free & paid. We wanted more great mods becoming great products, like Dota, Counter-strike, DayZ, and Killing Floor, and we wanted that to happen organically for any mod maker who wanted to take a shot at it.', '10.jpg', '<p>To help you understand why we thought this was a good idea, our main goals were to allow mod makers the opportunity to work on their mods full time if they wanted to, and to encourage developers to provide better support to their mod communities. We thought this would result in better mods for everyone, both free &amp; paid. We wanted more great mods becoming great products, like Dota, Counter-strike, DayZ, and Killing Floor, and we wanted that to happen organically for any mod maker who wanted to take a shot at it.</p>\r\n', 'https://www.youtube.com/', 'Event'),
(19, 'Live Video Performance Art Workshop', 'Richard Crook', ' we underestimated the differences between our previously successful revenue sharing models, and the addition of paid mods to Skyrim''s workshop. We understand our own game''s communities pretty well, but stepping into an established, years old modding community in Skyrim was probably not the right place to start iterating. We think this made us miss the mark pretty badly, even though we believe there''s a useful feature somewhere here.', '11.jpg', '<p><br />\r\nwe underestimated the differences between our previously successful revenue sharing models, and the addition of paid mods to Skyrim&#39;s workshop. We understand our own game&#39;s communities pretty well, but stepping into an established, years old modding community in Skyrim was probably not the right place to start iterating. We think this made us miss the mark pretty badly, even though we believe there&#39;s a useful feature somewhere here.</p>\r\n', 'https://www.youtube.com/', 'Event'),
(20, 'Impression of Dhaka', 'Richard Crook', 'We''re going to remove the payment feature from the Skyrim workshop. For anyone who spent money on a mod, we''ll be refunding you the complete amount. We talked to the team at Bethesda and they agree.', '12.jpg', '<p>We&#39;re going to remove the payment feature from the Skyrim workshop. For anyone who spent money on a mod, we&#39;ll be refunding you the complete amount. We talked to the team at Bethesda and they agree.</p>\r\n', 'https://www.youtube.com', 'Event'),
(21, 'Moulding Worshop', 'Shahid Kabir', 'We''ve done this because it''s clear we didn''t understand exactly what we were doing. We''ve been shipping many features over the years aimed at allowing community creators to receive a share of the rewards, and in the past, they''ve been received well. It''s obvious now that this case is different.', '13.jpg', '<p>We&#39;ve done this because it&#39;s clear we didn&#39;t understand exactly what we were doing. We&#39;ve been shipping many features over the years aimed at allowing community creators to receive a share of the rewards, and in the past, they&#39;ve been received well. It&#39;s obvious now that this case is different.</p>\r\n', 'https://www.youtube.com/', 'Event'),
(22, 'Printmaking Worshop', 'Shahid Kabir', 'We''ve done this because it''s clear we didn''t understand exactly what we were doing. We''ve been shipping many features over the years', '14.jpg', '<p>We&#39;ve done this because it&#39;s clear we didn&#39;t understand exactly what we were doing. We&#39;ve been shipping many features over the years</p>\r\n', 'https://www.youtube.com/', 'Event'),
(23, 'Moulding Worshop', 'Richard Crook', 'We''ve done this because it''s clear we didn''t understand exactly what we were doing. We''ve been shipping many features over the years aimed at allowing community creators to receive a share of the rewards, and in the past, they''ve been received well. It''s obvious now that this case is different.', '15.jpg', '<p>We&#39;ve done this because it&#39;s clear we didn&#39;t understand exactly what we were doing. We&#39;ve been shipping many features over the years aimed at allowing community creators to receive a share of the rewards, and in the past, they&#39;ve been received well. It&#39;s obvious now that this case is different.</p>\r\n', 'https://www.youtube.com/', 'Event'),
(48, 'Practice as Research by Sabih Ahmed', 'Sabih Ahmed ', 'New Delhi based researcher Sabih Ahmed from Asia Art Archive had an interactive session with a houseful audience at the Gyantapas Abdur Razzaq Bidyapeeth premises on September 19. In the talk titled â€œPractice as Researchâ€ Sabih gave a comprehensive idea about how he conceptualises and leads research initiatives on art, has led projects digitising artist archives, creating digital bibliographies of art across multiple languages, and has organised colloquia and seminars around archiving and uncharted educational resources. His experience as a member of the Curatorial Collegiate of the 11th Shanghai Biennale was also talked over which presented some fresh ideas about how an archive could be curated creatively. ', '48.jpg', '<p>New Delhi based researcher Sabih Ahmed from Asia Art Archive had an interactive session with a houseful audience at the Gyantapas Abdur Razzaq Bidyapeeth premises on September 19. In the talk titled &ldquo;Practice as Research&rdquo; Sabih gave a comprehensive idea about how he conceptualises and leads research initiatives on art, has led projects digitising artist archives, creating digital bibliographies of art across multiple languages, and has organised colloquia and seminars around archiving and uncharted educational resources. His experience as a member of the Curatorial Collegiate of the 11th Shanghai Biennale was also talked over which presented some fresh ideas about how an archive could be curated creatively.&nbsp;<br />\r\n&nbsp;</p>\r\n', 'https://youtu.be/Zefj73MjpcU', 'Residency'),
(49, 'Development', 'OS', 'My Name is Supto :D .... ', '49.jpg', '<p>My name is supto.&nbsp;My name is supto&nbsp;My name is supto.My name is supto&nbsp;My name is supto</p>\r\n', 'www.youtube.com', 'Workshop'),
(50, 'Development', 'OS', 'My Name is Supto :D .... ', '50.jpg', '<p>My name is suptoMy name is suptoMy name is suptoMy name is suptoMy name is suptoMy name is supto....</p>\r\n', 'www.youtube.com', 'Workshop'),
(51, 'Development', 'OS', 'My Name is Supto :D .... ', '51.jpg', '<p>My name is suptoMy name is suptoMy name is suptoMy name is supto</p>\r\n', 'www.youtube.com', 'Practice Studio');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`aid`),
  ADD UNIQUE KEY `aid` (`aid`);

--
-- Indexes for table `apply`
--
ALTER TABLE `apply`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `art`
--
ALTER TABLE `art`
  ADD PRIMARY KEY (`id`),
  ADD KEY `artists_id` (`artists_id`);

--
-- Indexes for table `artists`
--
ALTER TABLE `artists`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `artist_gallery_home`
--
ALTER TABLE `artist_gallery_home`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exibiution`
--
ALTER TABLE `exibiution`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exibiution_details`
--
ALTER TABLE `exibiution_details`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uniqui` (`exibitution_id`);

--
-- Indexes for table `home_slider`
--
ALTER TABLE `home_slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_update`
--
ALTER TABLE `home_update`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `people`
--
ALTER TABLE `people`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `venue`
--
ALTER TABLE `venue`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `workshop`
--
ALTER TABLE `workshop`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `aid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `apply`
--
ALTER TABLE `apply`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `art`
--
ALTER TABLE `art`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=46;
--
-- AUTO_INCREMENT for table `artists`
--
ALTER TABLE `artists`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `artist_gallery_home`
--
ALTER TABLE `artist_gallery_home`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `exibiution`
--
ALTER TABLE `exibiution`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=277;
--
-- AUTO_INCREMENT for table `exibiution_details`
--
ALTER TABLE `exibiution_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `home_slider`
--
ALTER TABLE `home_slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `home_update`
--
ALTER TABLE `home_update`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=48;
--
-- AUTO_INCREMENT for table `people`
--
ALTER TABLE `people`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=39;
--
-- AUTO_INCREMENT for table `venue`
--
ALTER TABLE `venue`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `workshop`
--
ALTER TABLE `workshop`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=52;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `exibiution_details`
--
ALTER TABLE `exibiution_details`
  ADD CONSTRAINT `exibiution_details_ibfk_1` FOREIGN KEY (`exibitution_id`) REFERENCES `exibiution` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
