--
-- Base sql for tech projects
--

-- --------------------------------------------------------

--
-- Table structure for table `PROJECT_users`
--

CREATE TABLE IF NOT EXISTS `PROJECT_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(500) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `group` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `reset_key` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

