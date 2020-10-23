-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 06, 2015 at 11:28 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `jashn`
--

-- --------------------------------------------------------

--
-- Table structure for table `botd`
--

CREATE TABLE IF NOT EXISTS `botd` (
  `id` int(32) NOT NULL AUTO_INCREMENT,
  `head` text NOT NULL,
  `byname` varchar(200) NOT NULL,
  `content` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `botd`
--

INSERT INTO `botd` (`id`, `head`, `byname`, `content`) VALUES
(1, 'Indian Roots:', 'Noor & Nayan', 'Rajasthani and Punjabi flavours infuse the event, adding to the Indian Roots.'),
(2, 'Opening Dance:\r\n', 'Nayan & Noor.', 'The variety of dance forms showcase swirls of flourishing colour.');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE IF NOT EXISTS `gallery` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `imgsrc` varchar(500) NOT NULL,
  `about` varchar(100) NOT NULL,
  `extra` varchar(110) NOT NULL,
  `day` int(10) NOT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=84 ;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `imgsrc`, `about`, `extra`, `day`) VALUES
(5, 'd2/IMG_477780942.JPG', '', 'EXTRA', 2),
(6, 'd2/IMG_864254045.JPG', '', 'EXTRA', 2),
(8, 'd2/IMG_780861937.JPG', '', 'EXTRA', 2),
(9, 'd2/IMG_305352857.JPG', '', 'EXTRA', 2),
(10, 'd2/IMG_423610357.JPG', '', 'EXTRA', 2),
(11, 'd2/IMG_790092562.JPG', '', 'EXTRA', 2),
(66, 'd4/IMG_206453298.JPG', '', 'EXTRA', 4),
(67, 'd4/IMG_597119743.JPG', '', 'EXTRA', 4),
(68, 'd4/IMG_550518271.JPG', '', 'EXTRA', 4),
(69, 'd4/IMG_858689297.JPG', '', 'EXTRA', 4),
(70, 'd4/IMG_354037814.JPG', '', 'EXTRA', 4),
(71, 'd4/IMG_318091121.JPG', '', 'EXTRA', 4),
(72, 'd4/IMG_221275046.JPG', '', 'EXTRA', 4),
(73, 'd4/IMG_889387720.JPG', '', 'EXTRA', 4),
(74, 'd4/IMG_513437529.JPG', '', 'EXTRA', 4),
(75, 'd4/IMG_462721836.JPG', '', 'EXTRA', 4),
(76, 'd5/IMG_575203601.JPG', '', 'EXTRA', 5),
(77, 'd5/IMG_416674201.JPG', '', 'EXTRA', 5),
(78, 'd5/IMG_461429548.JPG', '', 'EXTRA', 5),
(79, 'd5/IMG_249098788.JPG', '', 'EXTRA', 5),
(80, 'd5/IMG_370863925.JPG', '', 'EXTRA', 5),
(81, 'd5/IMG_234699012.JPG', '', 'EXTRA', 5),
(82, 'd5/IMG_772738987.JPG', '', 'EXTRA', 5),
(83, 'd5/IMG_532136139.JPG', '', 'EXTRA', 5);

-- --------------------------------------------------------

--
-- Table structure for table `guestart`
--

CREATE TABLE IF NOT EXISTS `guestart` (
  `id` int(30) NOT NULL AUTO_INCREMENT,
  `guart_head` varchar(600) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `guart_cont` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `extra` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `guestart`
--

INSERT INTO `guestart` (`id`, `guart_head`, `guart_cont`, `extra`) VALUES
(1, 'PARIKRAMA', '<p>Parikrama is a legendary rock band,playing basically Classic Rock based music,fused with Indian \n\nInstruments like the Tabla and the Violin, and has been around for  24 years .\n</p>\n<p>The band has done more than 3000 shows till date in India and Worldwide, Including countries like USA, \n\nRussia , Canada , Vietnam , UK, Cambodia , Laod, Ethopia , Nigeria , Oman, UAE , Bhutan , Nepal , \n\nSingapore Etc . </p>\n\n<p>Parikrama has had a very successful tour of the UK earlier,where they were promoted by none other \n\nthan IRON MAIDEN and their legendary manager Mr. ROD SMALLWOOD. Iron maiden saw Parikrama , at \n\nbangalore, and  you could hear what they thought of the band , in the documentary shot on Parikrama \n\nby BBC, and shown on their show " DESI DNA",in UK. </p>\n\n<p>IRON MAIDEN invited Parikrama to 07 shows in the UK, including the mighty DOWNLOAD FESTIVAL  and venues like Rio ( Leeds ) , The Underground ( Camden ) , The Peel ( kingston ) Etc.</p>', ''),
(2, 'Jaya Iyer and Lokesh Jain', '<p>''Syah Safed Ke Parey ...''</p><P >\nCoevolved\nand performed by Jaya Iyer and Lokesh Jain – is an interactive\ntheatrical piece.</P>\n<P >The\nstory line meanders through time and space- where two college\nstudents exploring a script are faced with critical questions about\nthe script that civilizations having been living. It raises questions\nabout power, truth, rational thinking, compassion creativity etc.</P>\n<P>From\nBuddha to Socrates, Jesus to Galileo, Khan Abdul Gaffar khan to HH\nDalai Lama and finally Mahatma Gandhi to our own selves – what\nmakes some one strong- why are massive states and religious\ninstitutions afraid of these lone voices, voices of reason and voices\nof compassion. Why do we as a collective seek stifle these small\nstill voice, the conscience of the society?</P>\n<P >About\nJaya</P>\n<P >For\nover two and half decades&nbsp;Jaya&nbsp;has been exploring the warp\nand weft of the world art, social development and ecological\nintegrity. She specializes in theatre for self and social development\nand has worked with several NGOs, government institutions, schools,\ncolleges and communities. \n</P>\n<P >&She\nwas a part of Living theatre academy of drama- founded by Ebrahim\nAlkazi and has worked with several other directors of repute. She was\nawarded UNESCO Aschberg bursary to study the theater of the oppressed\nwith Augusto Boal, and also WISCOMP scholar of peace fellowship.&nbsp;</P>\n<P >She\nconceptualized and directed several plays which have been critically\nacclaimed and has facilitated communities to share their own stories\nas theatrical pieces. She has worked extensively in Uttarakhand,,\nAssam, Bundhelkhand, Rajathan and Central Indian belt. \n</P>\n', ''),
(5, 'Maya Krishna Rao ', '<p>Quality Street</p>\n\n<p>By Chimamanda Ngozi Adichie Ms Njoku of Lagos can barely cope with her US-returned daughter, Sochienne, who insists on marrying a Kenyan and that too, in their rundown country house where the floor slopes....</p>\n\n<p>Costume - Sabaina Jerchewsky \nDirected and performed by Maya Krishna Rao</p>\n\n<p>About Maya</p>\n\n<p>‘Metaphor could well be Maya Rao’s middle name……She appears with this work to be almost a rare find…..Maya Rao is capable of using several divergent forms of art into one wholesome and superbly etched production. Congratulations.’ Times of India, Jan. 1, 1994.</p>\n\n\n<p>‘Maya Krishna Rao’s theatre is like the titles she devises: spunky and elliptical. …you can’t deny its seductive, intriguing appeal….The effect is not only electric but also, for a production so technologically ‘constructed’, deeply moving. …..’ Times of India, Apr. 24, 2005\n</p>\n', ''),
(6, 'MUSIC BASTI', '<p>Music Basti has formed a (musical) community that comprises its NGO partners, donor partners, teaching artists, volunteers, musicians, and countless supporters. From creating fun musical experiences for vulnerable children in 2008, Music Basti has matured into an organization focused on creating a space for personal growth and nurturing key life-skills today. In 2013, MUSIC BASTI restructured its initiatives to launch the RESOUND program, they work with over 150 students around Delhi and is led by a trained group of teaching artists.</p>', '');

-- --------------------------------------------------------

--
-- Table structure for table `jashn_1_images`
--

CREATE TABLE IF NOT EXISTS `jashn_1_images` (
  `id` int(123) NOT NULL AUTO_INCREMENT,
  `img_url` varchar(432) NOT NULL,
  `ip` varchar(20) NOT NULL,
  `extra` varchar(500) NOT NULL,
  `time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `id` (`id`,`img_url`,`ip`,`extra`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `jashn_1_images`
--

INSERT INTO `jashn_1_images` (`id`, `img_url`, `ip`, `extra`, `time`) VALUES
(19, 'images/_MG_1136 (1).JPG', '::1', '0IMG_1989.JPG=name|Size=974779|Type=image/jpeg', '0000-00-00 00:00:00'),
(20, 'images/jashan_sbs_2015_logo.JPG', '::1', '0IMG_1989.JPG=name|Size=974779|Type=image/jpeg', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `byname` varchar(200) NOT NULL,
  `head` text NOT NULL,
  `content` text NOT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `byname`, `head`, `content`) VALUES
(1, 'Anonymous', 'The First Step...', '       Jashn 2015 took off today with its first few formative \r\n\r\nsteps. The excitement and exhilaration was quite \r\n\r\npalpable ? students were really looking forward to their \r\n\r\nroles and parts to play in the celebratory annual event of \r\n\r\nStep By Step School. The venues and the teachers-in- \r\n\r\ncharge were busy not only controlling students but also \r\n\r\nsteering them in the right direction. Through the hour, \r\n\r\ninstructions were being issued, auditions were underway \r\n\r\nand play practise was in full swing. SBS mag reporters \r\n\r\nwere crawling corridors to pick any piece of interesting \r\n\r\nnews. Apart from pulsating activities in almost all venues, \r\n\r\nthe reporters also spotted a lot of clueless individuals \r\n\r\nhankering around the obvious and not so obvious alcoves \r\n\r\nand corners. We hope that by tomorrow, that the \r\n\r\nprocesses will be a little more streamlined and on the \r\n\r\nmove.\r\n\r\nUntil then...'),
(2, 'Our visit to the Poetry Slam venue gave us an insight into what we should expect from the event.', 'POETRY SLAM', '<p>Neha Ma’am had a positive outlook on the fate of the Poetry Slam. She felt that the Poetry Slam is an ingenious way to perform life experiences. </p>\r\n\r\n<p>She was extremely impressed with those who had auditioned and looks forward to making poetry Slam a regular SBS event. </p>\r\n'),
(3, '', 'A BYTE OF EVERYTHING', '<p>It is said that it is from the depths of chaos that new life emerges, and it is sincerely hoped that the case would be the same for Unplugged and the Choir. </p>\r\n\r\n<p>The Tabla room resounded with the tapping of 9 sets of students practicing their set rhythms. </p>\r\n'),
(4, 'Mallika Chandra of 10 D reports from the Music Room, covering (and humming!) the fusion.', 'Music Being The Remedy', '<p>The blending of ‘Rolling in the Deep’ and ‘O Re Piya’ - sounds weird, right? I have to confess, however, that it is the best thing I’ve heard in ages. It works like magic, slowly but intensely. </p>\r\n\r\n<p>I enjoyed listening to it and the singers enjoyed singing it. They worked exceptionally hard on their scales. They sang in high spirits and in no time we were in a place where we forgot all our problems and just contentedly listened to their melodious voices - their music was truly our remedy. </p>\r\n\r\n<p>The singers didn’t have a smooth start. They had problems reaching high notes, but their passion for the song didn’t let this obstacle stop them from making this song an incredible one. They were indeed trying to make their Pitch ‘Perfect’. </p>\r\n\r\n<p>No words are enough to explain the chills that ran down my spine while I heard their song, and I cannot wait for others to experience these melodious goose bumps which work even better than magic! </p>\r\n'),
(5, 'Diksha of 9 B and Manya of 10 E survey the scene backstage and report.', 'Meanwhile, Backstage...', '<p>Jashn 2015 not only comprises of the kids who showcase their talents on stage but also the dozens of students who work backstage, taking charge of areas from costumes to art to photography, not to mention us reporters! </p>\r\n\r\n<p>The web-designers were worked with great concentration and passion. They had a positive attitude towards their work. “Hopefully the website will be up by today,” says the optimistic incharge, Mamta Ma’am. On the other hand, Ushers and the Seva students who had no work took the opportunity to relax in their respective rooms. </p>\r\n\r\n<p>The students who were a part of the Info Hub  had everything under control, from working hard to coming up with innovative ideas. They have begun work on the leaflets which contain descriptions of all the events. </p>\r\n\r\n<p>Our core production team can be seen almost everywhere, putting up posters and delivering messages. Hats off to them for keeping Jashn 2015 together, despite it being immensely tiring. </p>\r\n\r\n<p>One vital backstage field is the art and design department. While some students were busy making invitation cards, others were starting the basic layouts for stage graffiti. We’re surely looking forward to seeing the handiwork of that new element! </p>\r\n\r\n<p>Be it onstage or offstage everyone’s working hard. 3 days down 16 more to go!!! </p>\r\n'),
(6, 'Aditi and Somya of 9B attend the dance rehearsals and report.', 'Dance - The Art of Finding & Losing Oneself ', '<p>Step By Step’s dancers are preparing a breath-taking performance for the much awaited Jashn 2015. </p>\r\n\r\n<p>With intricate steps the dancers express themselves through graceful body movements along with the music. The dancers relaxed themselves through meditation before beginning their rehearsals. These students show passion in every step of the way and relentlessly practice to attain flawlessness. </p>\r\n\r\n<p>They practiced many different forms of dance in individual groups and taught each other steps. Their teamwork was evident in the way that they helped each other and corrected each other’s mistakes. </p>\r\n\r\n<p>The energetic environment enthused anyone who entered and motivated them to dance freely.\r\n“Dance is a way to find yourself and lose yourself……all at the same time.” We look forward to watching these elegant dancers put up an astounding performance. </p>\r\n'),
(7, 'Ananya Kaushik of 10 D reports on the amazing fusion we all await.\r\n', 'Music For The Soul', '<p>Western and Indian tunes fused together don’t sit well with most people but trust me, here at SBS, it works! It works for your ears, it works for your heart. </p>\r\n\r\n<p>The voices of this extremely talented and tenacious group of singers not only lets your ears celebrate, but makes it an enjoyable experience as a whole. The voices transport you to another world. A world of magic. A world of symphony. </p>\r\n\r\n<p>This group does not only singing with their vocal cords but with their heart and soul and you can feel it in their voice. They may have problems with their pitch but that doesn’t come in the way of their spirits. They sing their hearts out and you forget to notice the little things. You forget your \r\nsurroundings and you forget the world, all that you have is the moment. This is music. This is what music should be. </p>\r\n'),
(8, 'Tejaswi Rawal and Srinjan Gupta of 9 E give us an update on what’s brewing in the CLTs on Day 4.', 'The Spoken Word', '<p>The CLT houses practices for Monologue, Compèring and the Poetry Slam. </p>\r\n\r\n<p>In the Monologue area, Abha ma’am efficiently guides the students, giving them feedback and discussing topics. They have made a list of things to be accomplished and how to go about organizing their event. This is the first time such an event will find a home in SBS and it casts the limelight on a new crop of talented students.</p>\r\n\r\n<p>Meanwhile, in the tiered lecture hall, the participants of Poetry Slam and Compèring struggle to be heard over each other''s voices. The participants are  to showcase an assortment of touching poems sure to reach the hearts of the audience, while the comperes can be heard taking rounds of the floor, attempting to burn their lines to memory.</p>\r\n'),
(9, '', 'DRAMA HALL', '<p>The Drama Hall was overrun by dancers today. For a crowd of forty excited participants, there were only two teachers present. </p>\r\n\r\n<p>There are seven dances planned for SBS Jashn. The basic classical dances include Kathak, Bharatnatayam, Odissi, along with contemporary dance styles - Bhangra - incorporating copious amounts of chunni -  and the versatile Hip hop. </p>\r\n\r\n<p>It was interesting to learn that there will be two *special* dances - one is called the “Human Piano”, which will require the strenuous effort of 11 girls and 12 boys. The second, which is shrouded in skepticism, is the “Game of Thrones” dance. </p>\r\n'),
(11, 'Aditya Singla of 10 B interviews Shreyash, a participant in one of\r\nthe One Act Plays to be performed at Jashn 2015.', 'INTERVIEW - One Act Play', '<P STYLE="margin-left: 1in; text-indent: -1in; margin-bottom: 0in"><FONT COLOR="#222222"><B><SPAN STYLE="background: #ffffff">Aditya</SPAN></B></FONT><FONT COLOR="#222222"><SPAN STYLE="background: #ffffff">:\r\n	First off, what is this play about?</SPAN></FONT></P>\r\n<P STYLE="margin-left: 1in; text-indent: -1in; margin-bottom: 0in"><BR>\r\n</P>\r\n<P STYLE="margin-left: 1in; text-indent: -1in; margin-bottom: 0in"><FONT COLOR="#222222"><B><SPAN STYLE="background: #ffffff">Shreyash</SPAN></B></FONT><FONT COLOR="#222222"><SPAN STYLE="background: #ffffff">:\r\n	It''s about an unfortunate man who falls into a manhole in Mumbai.\r\nCountless people pass by him without trying to help him or even\r\ngiving him a second thought. </SPAN></FONT><FONT COLOR="#222222"><I><SPAN STYLE="background: #ffffff">{Spoilers!}\r\n</SPAN></I></FONT><FONT COLOR="#222222"><SPAN STYLE="background: #ffffff">The\r\nplay ends with the man being completely abandoned and at the mercy of\r\nYamraj.</SPAN></FONT></P>\r\n<P STYLE="margin-left: 1in; text-indent: -1in; margin-bottom: 0in"><BR>\r\n</P>\r\n<P STYLE="margin-left: 1in; text-indent: -1in; margin-bottom: 0in"><FONT COLOR="#222222"><B><SPAN STYLE="background: #ffffff">Aditya</SPAN></B></FONT><FONT COLOR="#222222"><SPAN STYLE="background: #ffffff">:\r\n	That''s interesting.. What is your role in the play, and are you\r\nfacing any problems in trying to become your character?</SPAN></FONT></P>\r\n<P STYLE="margin-left: 1in; text-indent: -1in; margin-bottom: 0in"><BR>\r\n</P>\r\n<P STYLE="margin-left: 1in; text-indent: -1in; margin-bottom: 0in"><FONT COLOR="#222222"><B><SPAN STYLE="background: #ffffff">Shreyash</SPAN></B></FONT><FONT COLOR="#222222"><SPAN STYLE="background: #ffffff">:\r\n	I''m a drunkard and have a good many of lines to go with that\r\ncharacter. Yes, I do face problems in trying to become my character,\r\nas this is the first time I have ever played a drunkard.</SPAN></FONT></P>\r\n<P STYLE="margin-left: 1in; text-indent: -1in; margin-bottom: 0in"><BR>\r\n</P>\r\n<P STYLE="margin-left: 1in; text-indent: -1in; margin-bottom: 0in"><FONT COLOR="#222222"><B><SPAN STYLE="background: #ffffff">Aditya</SPAN></B></FONT><FONT COLOR="#222222"><SPAN STYLE="background: #ffffff">:\r\n	Do you think this play will be a success?</SPAN></FONT></P>\r\n<P STYLE="margin-left: 1in; text-indent: -1in; margin-bottom: 0in"><BR>\r\n</P>\r\n<P STYLE="margin-left: 1in; text-indent: -1in; margin-bottom: 0in"><FONT COLOR="#222222"><B><SPAN STYLE="background: #ffffff">Shreyash</SPAN></B></FONT><FONT COLOR="#222222"><SPAN STYLE="background: #ffffff">:	Yes,\r\nthis play will be a definite success and will be interesting for all\r\nwho watch it. That''s obvious though, as I''ll be in the play.</SPAN></FONT></P>\r\n<P STYLE="margin-left: 1in; text-indent: -1in; margin-bottom: 0in"><BR>\r\n</P>\r\n<P STYLE="margin-left: 1in; text-indent: -1in; margin-bottom: 0in"><FONT COLOR="#222222"><B><SPAN STYLE="background: #ffffff">Aditya</SPAN></B></FONT><FONT COLOR="#222222"><SPAN STYLE="background: #ffffff">:\r\n	Could you improve the script in any way?</SPAN></FONT></P>\r\n<P STYLE="margin-left: 1in; text-indent: -1in; margin-bottom: 0in"><BR>\r\n</P>\r\n<P STYLE="margin-left: 1in; text-indent: -1in; margin-bottom: 0in"><FONT COLOR="#222222"><B><SPAN STYLE="background: #ffffff">Shreyash</SPAN></B></FONT><FONT COLOR="#222222"><SPAN STYLE="background: #ffffff">:\r\n	Not really as this play is extremely well thought out and extremely\r\ncreative. However, I feel the role of the policeman could be improved\r\nas the scene involving the policeman isn''t powerful enough.</SPAN></FONT></P>\r\n<P STYLE="margin-left: 1in; text-indent: -1in; margin-bottom: 0in"><BR>\r\n</P>\r\n<P STYLE="margin-left: 1in; text-indent: -1in; margin-bottom: 0in"><FONT COLOR="#222222"><B><SPAN STYLE="background: #ffffff">Aditya</SPAN></B></FONT><FONT COLOR="#222222"><SPAN STYLE="background: #ffffff">:\r\n	Have you learnt anything from your experience here?</SPAN></FONT></P>\r\n<P STYLE="margin-left: 1in; text-indent: -1in; margin-bottom: 0in"><BR>\r\n</P>\r\n<P STYLE="margin-left: 1in; text-indent: -1in; margin-bottom: 0in"><FONT COLOR="#222222"><B><SPAN STYLE="background: #ffffff">Shreyash</SPAN></B></FONT><FONT COLOR="#222222"><SPAN STYLE="background: #ffffff">:\r\n	I have definitely learnt something of value over here. Tanishq is\r\nextremely experienced and his advice will help me to be a better\r\nactor in the future.</SPAN></FONT></P>\r\n'),
(12, '', 'Plugging\r\nthe Unplugged<br>(And\r\nBackstage)', '<P ALIGN=CENTER STYLE="margin-bottom: 0in"><FONT COLOR="#222222"><I><SPAN STYLE="background: #ffffff">Srinjon\r\nGupta, Amna Kapoor, and Tejaswi Rawal of 9 E explore one of the most\r\nexciting events at Jashn 2015, while also covering what goes on\r\nbehind the scenes.</SPAN></I></FONT></P>\r\n<P STYLE="margin-bottom: 0in"><BR>\r\n</P>\r\n<P STYLE="margin-bottom: 0in"><FONT COLOR="#222222"><SPAN STYLE="background: #ffffff">The\r\nevent has finally kicked off! A great start with various songs\r\ngracefully sung. However the time available was restricted and\r\ndedication will be required to put up a truly impressive production.\r\nSongs like </SPAN></FONT><FONT COLOR="#222222"><I><SPAN STYLE="background: #ffffff">Viva\r\nLa Vida</SPAN></I></FONT><FONT COLOR="#222222"><SPAN STYLE="background: #ffffff">,\r\n</SPAN></FONT><FONT COLOR="#222222"><I><SPAN STYLE="background: #ffffff">O\r\nRe Piya</SPAN></I></FONT><FONT COLOR="#222222"><SPAN STYLE="background: #ffffff">,\r\n</SPAN></FONT><FONT COLOR="#222222"><I><SPAN STYLE="background: #ffffff">The\r\nWorld Is Our Playground</SPAN></I></FONT><FONT COLOR="#222222"><SPAN STYLE="background: #ffffff">\r\nand </SPAN></FONT><FONT COLOR="#222222"><I><SPAN STYLE="background: #ffffff">Footloose</SPAN></I></FONT><FONT COLOR="#222222"><SPAN STYLE="background: #ffffff">\r\nwere sung. The in charges were happy with their groups and hoped to\r\nget more accomplished. Soulful jamming in Instrumentals added to the\r\nfestivity of Jashn 2015.</SPAN></FONT></P>\r\n<P STYLE="margin-bottom: 0in"><BR>\r\n</P>\r\n<P STYLE="margin-bottom: 0in"><FONT COLOR="#222222"><SPAN STYLE="background: #ffffff">Meanwhile,\r\nthe students part of backstage were less productive. As they don’t\r\nhave much to do so long before the final performance, the students\r\ntalked amongst themselves for the majority of the two periods. That\r\nis, until Anita Ma’am came in to chide them. After that, it doesn’t\r\nseem like we will be hearing much sound from that room anymore!</SPAN></FONT></P>\r\n<P STYLE="margin-left: 1in; text-indent: -1in; margin-bottom: 0in"><BR>\r\n</P>\r\n'),
(13, 'Diksha\r\nof 9 B and Manya of 10 E elaborate on Performance Poetry', 'More\r\nThan Just Simple Poetry', '<P STYLE="margin-bottom: 0in"><FONT COLOR="#222222"><SPAN STYLE="background: #ffffff">A\r\nnew, fascinating element of Jashn 2015 is Performance Poetry. So,\r\nwhat is the difference between this and plain old recitation? This is\r\npoetry that is specifically composed for a performance before an\r\naudience. It’s not simply reciting poetry - it is performing\r\npoetry. It tends to focus on the enactment of the words themselves,\r\nthe dynamics of intonation, gestures, facial expressions, and more.</SPAN></FONT></P>\r\n<P STYLE="margin-bottom: 0in"><BR>\r\n</P>\r\n<P STYLE="margin-bottom: 0in"><FONT COLOR="#222222"><SPAN STYLE="background: #ffffff">The\r\npoets of SBS are going to present topics that touch their hearts -\r\nfor instance, rape, freedom, and terrorism. They spoke with great\r\npassion and feeling, using appropriate voice modulation, body\r\nlanguage and actions during practice. They also incorporated devices\r\nsuch as rhythm, rhyme and repetition to captivate the audience and\r\ncreate a certain atmosphere.</SPAN></FONT></P>\r\n<P STYLE="margin-bottom: 0in"><BR>\r\n</P>\r\n<P STYLE="margin-bottom: 0in"><FONT COLOR="#222222"><SPAN STYLE="background: #ffffff">The\r\nteachers in charge, Sonal ma’am and Neha ma’am, helped the poets\r\nby listening to them individually and giving them suggestions on how\r\nthey could improve. They told them to be more emotive and to adjust\r\ntheir pace in order to convey the meaning of the poems as accurately\r\nas possible. In addition to this, the poets themselves observed one\r\nanother and gave their inputs. As Sonal ma’am rightly said, “We’re\r\nall in this together!”</SPAN></FONT></P>\r\n'),
(14, 'Aditi\r\nand Somya of 9B report on the backstage happenings.', 'Jashn\r\n2015’s Backbone', '<P STYLE="margin-bottom: 0in"><FONT COLOR="#222222"><SPAN STYLE="background: #ffffff">There\r\nare many other aspects in a performance than just those onstage.\r\nThose who are a part of other departments such as- SEVA, Photography,\r\nCostumes etc. are the backbone of the entire event. They play a\r\ncrucial role in the production of the whole occasion. </SPAN></FONT>\r\n</P>\r\n<P STYLE="margin-bottom: 0in"><BR>\r\n</P>\r\n<P STYLE="margin-bottom: 0in"><FONT COLOR="#222222"><SPAN STYLE="background: #ffffff">The\r\nstudents in Seva have used their artistic skills to paint a large\r\nnumber of traditional pots and diyas with great precision. They will\r\nset up stalls on the day of the performance to sell these pieces of\r\nartwork to collect funds.</SPAN></FONT></P>\r\n<P STYLE="margin-bottom: 0in"><BR>\r\n</P>\r\n<P STYLE="margin-bottom: 0in"><FONT COLOR="#222222"><SPAN STYLE="background: #ffffff">Cookies\r\nand cupcakes are something which we all can look forward to during\r\nthe course of Jashn 2015. The Home Science students are baking these\r\nwonderful treats after great consideration, discussion and Anita\r\nMa’am’s approval.</SPAN></FONT></P>\r\n<P STYLE="margin-bottom: 0in"><BR>\r\n</P>\r\n<P STYLE="margin-bottom: 0in"><FONT COLOR="#222222"><SPAN STYLE="background: #ffffff">Step\r\nBy Step has its very own costume designers for the performers in the\r\nupcoming Jashn 2015. There is a storm of Ideas for the costumes and\r\nalready a few approved designs.</SPAN></FONT></P>\r\n<P STYLE="margin-bottom: 0in"><BR>\r\n</P>\r\n<P STYLE="margin-bottom: 0in"><FONT COLOR="#222222"><SPAN STYLE="background: #ffffff">Overall,\r\nthe preparations for Jashn are running smoothly behind the scenes!</SPAN></FONT></P>\r\n'),
(15, 'Udayan\r\nSingh of 10 D interviews Shubhankar, a participant in one of the One\r\nAct Plays to be performed at Jashn 2015.', 'INTERVIEW\r\n- One Act Play', '<P STYLE="margin-left: 1in; text-indent: -1in; margin-bottom: 0in"><FONT COLOR="#222222"><B><SPAN STYLE="background: #ffffff">Udayan</SPAN></B></FONT><FONT COLOR="#222222"><SPAN STYLE="background: #ffffff">:	To\r\nbegin with, what inspired you to join the play?</SPAN></FONT></P>\r\n<P STYLE="margin-left: 1in; text-indent: -1in; margin-bottom: 0in"><BR>\r\n</P>\r\n<P STYLE="margin-left: 1in; text-indent: -1in; margin-bottom: 0in"><FONT COLOR="#222222"><B><SPAN STYLE="background: #ffffff">Shubhankar</SPAN></B></FONT><FONT COLOR="#222222"><SPAN STYLE="background: #ffffff">:	Well,\r\nI felt that I could speak in front of my parents with clarity and\r\ngreat confidence. I''m very passionate about drama and am willing to\r\ntake part in any play - be it a small or big role.</SPAN></FONT></P>\r\n<P STYLE="margin-left: 1in; text-indent: -1in; margin-bottom: 0in"><BR>\r\n</P>\r\n<P STYLE="margin-left: 1in; text-indent: -1in; margin-bottom: 0in"><FONT COLOR="#222222"><B><SPAN STYLE="background: #ffffff">Udayan</SPAN></B></FONT><FONT COLOR="#222222"><SPAN STYLE="background: #ffffff">:	And\r\nwhat is your role exactly?</SPAN></FONT></P>\r\n<P STYLE="margin-left: 1in; text-indent: -1in; margin-bottom: 0in"><BR>\r\n</P>\r\n<P STYLE="margin-left: 1in; text-indent: -1in; margin-bottom: 0in"><FONT COLOR="#222222"><B><SPAN STYLE="background: #ffffff">Shubhankar</SPAN></B></FONT><FONT COLOR="#222222"><SPAN STYLE="background: #ffffff">:	Glad\r\nyou asked, I am a politician who does not care about society. You\r\ncould see me as a hypocrite who strives to help people who need help\r\nbut when the opportunity arises, I do not take action.</SPAN></FONT></P>\r\n<P STYLE="margin-left: 1in; text-indent: -1in; margin-bottom: 0in"><BR>\r\n</P>\r\n<P STYLE="margin-left: 1in; text-indent: -1in; margin-bottom: 0in"><FONT COLOR="#222222"><B><SPAN STYLE="background: #ffffff">Udayan</SPAN></B></FONT><FONT COLOR="#222222"><SPAN STYLE="background: #ffffff">:	Quite\r\nan intriguing role. Anyway - to the question at hand, what is the\r\nmain premise of the play?</SPAN></FONT></P>\r\n<P STYLE="margin-left: 1in; text-indent: -1in; margin-bottom: 0in"><BR>\r\n</P>\r\n<P STYLE="margin-left: 1in; text-indent: -1in; margin-bottom: 0in"><FONT COLOR="#222222"><B><SPAN STYLE="background: #ffffff">Shubhankar:	</SPAN></B></FONT><FONT COLOR="#222222"><SPAN STYLE="background: #ffffff">Well\r\nthe play revolves around the tale of an unlucky man who falls into a\r\npothole in Mumbai. It deals with how society has degraded and how\r\npeople don''t help each other out. In the end the man falls to the\r\ncruel whims of despair.</SPAN></FONT></P>\r\n<P STYLE="margin-left: 1in; text-indent: -1in; margin-bottom: 0in"><BR>\r\n</P>\r\n<P STYLE="margin-left: 1in; text-indent: -1in; margin-bottom: 0in"><FONT COLOR="#222222"><B><SPAN STYLE="background: #ffffff">Udayan:	</SPAN></B></FONT><FONT COLOR="#222222"><SPAN STYLE="background: #ffffff">Wow,\r\npowerful stuff! What do you feel about the cast selection? Do you\r\nfeel that the play would be a success?</SPAN></FONT></P>\r\n<P STYLE="margin-left: 1in; text-indent: -1in; margin-bottom: 0in"><BR>\r\n</P>\r\n<P STYLE="margin-left: 1in; text-indent: -1in; margin-bottom: 0in"><FONT COLOR="#222222"><B><SPAN STYLE="background: #ffffff">Shubhankar:	</SPAN></B></FONT><FONT COLOR="#222222"><SPAN STYLE="background: #ffffff">Of\r\ncourse the play would be a success. I am very confident about it. As\r\nfor the cast I feel it is quite good and experienced as it is. </SPAN></FONT>\r\n</P>\r\n<P STYLE="margin-left: 1in; text-indent: -1in; margin-bottom: 0in"><FONT COLOR="#222222"><SPAN STYLE="background: #ffffff">\r\n	Tanishq is very talented and experienced. He offers a commanding\r\nvoice and appears as a leader. Anvi and Kshiti are great as well and\r\nI look forward in working with them. Adhip is the best actor in\r\ntenth, after me of course. Bharat and Shreyash are also focused and\r\ngood. They''re new so they need to learn.</SPAN></FONT></P>\r\n<P STYLE="margin-left: 1in; text-indent: -1in; margin-bottom: 0in"><BR>\r\n</P>\r\n<P STYLE="margin-left: 1in; text-indent: -1in; margin-bottom: 0in"><FONT COLOR="#222222"><B><SPAN STYLE="background: #ffffff">Udayan:	</SPAN></B></FONT><FONT COLOR="#222222"><SPAN STYLE="background: #ffffff">How\r\nlong would the play be?</SPAN></FONT></P>\r\n<P STYLE="margin-left: 1in; text-indent: -1in; margin-bottom: 0in"><BR>\r\n</P>\r\n<P STYLE="margin-left: 1in; text-indent: -1in; margin-bottom: 0in"><FONT COLOR="#222222"><B><SPAN STYLE="background: #ffffff">Shubhankar:	</SPAN></B></FONT><FONT COLOR="#222222"><SPAN STYLE="background: #ffffff">It\r\nwould be roughly 10- 20 minutes. </SPAN></FONT>\r\n</P>\r\n<P STYLE="margin-left: 1in; text-indent: -1in; margin-bottom: 0in"><BR>\r\n</P>\r\n<P STYLE="margin-left: 1in; text-indent: -1in; margin-bottom: 0in"><FONT COLOR="#222222"><B><SPAN STYLE="background: #ffffff">Udayan:	</SPAN></B></FONT><FONT COLOR="#222222"><SPAN STYLE="background: #ffffff">Thanks\r\nfor you time and best of luck!</SPAN></FONT></P>\r\n<P STYLE="margin-left: 1in; text-indent: -1in; margin-bottom: 0in"><BR>\r\n</P>\r\n<P STYLE="margin-left: 1in; text-indent: -1in; margin-bottom: 0in"><FONT COLOR="#222222"><B><SPAN STYLE="background: #ffffff">Shubhankar:	</SPAN></B></FONT><FONT COLOR="#222222"><SPAN STYLE="background: #ffffff">Thanks!</SPAN></FONT></P>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `qotd`
--

CREATE TABLE IF NOT EXISTS `qotd` (
  `id` int(30) NOT NULL AUTO_INCREMENT,
  `ans` varchar(500) NOT NULL,
  `question` varchar(500) NOT NULL,
  `extra` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `qotd`
--

INSERT INTO `qotd` (`id`, `ans`, `question`, `extra`) VALUES
(1, '30', 'Day 1: How many colours have been used  in the logo of Jashn,2015?', '30'),
(3, 'Iron Maiden', 'For which band has Parikrama opened thrice?', 'Iron Maiden'),
(4, '2', 'How many Cafe Coffee Day stalls have been planned to be set up for Jashn 2015?', '2'),
(5, 'Opening Dance', 'Which event is "Human Piano" a part of?', 'Opening Dance'),
(6, 'Goonj', 'What was Jashn 2015 supposed to be called before we settled on "Jashn"?', 'Goonj'),
(7, 'Shalini Ma''am', 'Where could you go to collect Entry Passes for Parikrama?', 'Shalini Ma''am'),
(8, 'Maya Rao', 'Which artiste will be performing "Quality Street"?', 'Maya Rao');

-- --------------------------------------------------------

--
-- Table structure for table `shedule`
--

CREATE TABLE IF NOT EXISTS `shedule` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `content` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `shedule`
--

INSERT INTO `shedule` (`id`, `content`) VALUES
(1, 'Make Website'),
(2, 'Upload website'),
(3, 'Sending Invites'),
(4, 'Having Fun'),
(5, 'Listening to Songs'),
(6, 'Final Setup'),
(7, 'The 2 day show');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
