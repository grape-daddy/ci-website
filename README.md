CI-Website
==========================

<h2>Requirements</h2>
<ul>
<li>
<a href="http://twitter.github.com/bootstrap/" target="_blank">Bootstrap</a></li>
<li>
<a href="http://jquery.com/" target="_blank">jQuery</a></li>
</ul>


<h2>Functionalities:</h2>

<ul>
  <li>Signup/Login/Logout</li>
  <li>List data content with pagination, search, and filters</li>
</ul>
------------------------------------------------------------------

<h2>Mysql Dump</h2>

```

CREATE TABLE `ci_sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(45) NOT NULL DEFAULT '0',
  `user_agent` varchar(120) NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text NOT NULL,
  PRIMARY KEY (`session_id`),
  KEY `last_activity_idx` (`last_activity`)
) ENGINE=MyISAM;

CREATE TABLE `login_sessions` (
  `pid` int(11) NOT NULL AUTO_INCREMENT,
  `token_id` varchar(50) NOT NULL,
  `uid` int(11) NOT NULL,
  `ip_address` varchar(50) NOT NULL,
  `last_access_time` datetime NOT NULL
  PRIMARY KEY (`pid`)
) ENGINE=MyISAM;

CREATE TABLE `users` (
  `pid` int(11) NOT NULL AUTO_INCREMENT,
  `gid` int(11) NOT NULL DEFAULT 2,
  `uid` varchar(50) NOT NULL,
  `upwd` varchar(50) NOT NULL,
  PRIMARY KEY (`pid`),
  UNIQUE KEY `uid` (`uid`)
) ENGINE=InnoDB;

```
