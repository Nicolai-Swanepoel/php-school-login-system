CREATE DATABASE IF NOT EXISTS `db_ref`;

USE db_ref;


CREATE TABLE IF NOT EXISTS `tbl_user`
(
  user_id INT NOT NULL AUTO_INCREMENT,
  user_firstname VARCHAR(100),
  user_lastname VARCHAR(100),
  user_studentnum VARCHAR(100),
  user_email VARCHAR(100),
  user_password VARCHAR(100),
  CONSTRAINT PRIMARY KEY(user_id)
);

CREATE TABLE IF NOT EXISTS `tbl_book`
(
  book_id INT NOT NULL AUTO_INCREMENT,
  book_author VARCHAR(100),
  book_initial VARCHAR(20),
  book_date VARCHAR(100),
  book_title VARCHAR(100),
  book_edition VARCHAR(50),
  book_location VARCHAR(100),
  book_publisher VARCHAR(100),
  user_id INT,
  CONSTRAINT PRIMARY KEY(book_id),
  CONSTRAINT FOREIGN KEY (user_id) REFERENCES tbl_user(user_id)
);


CREATE TABLE IF NOT EXISTS `tbl_dictionary`
(
  dictionary_id INT NOT NULL AUTO_INCREMENT,
  dictionary_title  VARCHAR(100),
  dictionary_year INT NOT NULL,
  dictionary_location VARCHAR(100),
  dictionary_publisher VARCHAR(100),
  user_id INT,
  CONSTRAINT PRIMARY KEY(dictionary_id),
  CONSTRAINT FOREIGN KEY (user_id) REFERENCES tbl_user(user_id)
);


CREATE TABLE IF NOT EXISTS `tbl_edictionary`
(
  edictionary_id INT NOT NULL AUTO_INCREMENT,
  edictionary_webtitle VARCHAR(100),
  edictionary_copyrightdate VARCHAR(100),
  edictionary_wordresearch VARCHAR(100),
  edictionary_url VARCHAR(100),
  edictionary_dateaccess VARCHAR(100),
  user_id INT,
  CONSTRAINT PRIMARY KEY(edictionary_id),
  CONSTRAINT FOREIGN KEY (user_id) REFERENCES tbl_user(user_id)
);


CREATE TABLE IF NOT EXISTS `tbl_journalarticle`
(
  journalarticle_id INT NOT NULL AUTO_INCREMENT,
  journalarticle_surname VARCHAR(100),
  journalarticle_initials VARCHAR(30),
  journalarticle_yearpublished VARCHAR(100),
  journalarticle_articletitle VARCHAR(100),
  journalarticle_journaltitle VARCHAR(100),
  journalarticle_volume INT NOT NULL,
  journalarticle_numpages INT NOT NULL,
  user_id INT,
  CONSTRAINT PRIMARY KEY(journalarticle_id),
  CONSTRAINT FOREIGN KEY (user_id) REFERENCES tbl_user(user_id)
);


CREATE TABLE IF NOT EXISTS `tbl_newspaperarticle`
(
  newspaperarticle_id INT NOT NULL AUTO_INCREMENT,
  newspaperarticle_surname VARCHAR(100),
  newspaperarticle_initials VARCHAR(30),
  newspaperarticle_yearpublished VARCHAR(100),
  newspaperarticle_titlepublication VARCHAR(100),
  newspaperarticle_newsarticletitle VARCHAR(100),
  newspaperarticle_newspapertitle VARCHAR(100),
  newspaperarticle_articlepagenum INT NOT NULL,
  newspaperarticle_daymonth VARCHAR(100),
  user_id INT,
  CONSTRAINT PRIMARY KEY(newspaperarticle_id),
  CONSTRAINT FOREIGN KEY (user_id) REFERENCES tbl_user(user_id)
);



CREATE TABLE IF NOT EXISTS `tbl_enewspaperarticle`
(
  enewspaperarticle_id INT NOT NULL AUTO_INCREMENT,
  enewspaperarticle_surname VARCHAR(100),
  enewspaperarticle_initials VARCHAR(30),
  enewspaperarticle_yearpublished VARCHAR(100),
  enewspaperarticle_enewsarticletitle VARCHAR(100),
  enewspaperarticle_enewspapertitle VARCHAR(100),
  enewspaperarticle_daymonth VARCHAR(100),
  enewspaperarticle_url VARCHAR(100),
  enewspaperarticle_dateaccessed VARCHAR(100),
  user_id INT,
  CONSTRAINT PRIMARY KEY(enewspaperarticle_id),
  CONSTRAINT FOREIGN KEY (user_id) REFERENCES tbl_user(user_id)
);



CREATE TABLE IF NOT EXISTS `tbl_internetarticle`
(
  internetarticle_id INT NOT NULL AUTO_INCREMENT,
  internetarticle_surname VARCHAR(100),
  internetarticle_initials VARCHAR(30),
  internetarticle_yearpublished VARCHAR(100),
  internetarticle_articletitle VARCHAR(100),
  internetarticle_url VARCHAR(100),
  internetarticle_dateaccessed VARCHAR(100),
  user_id INT,
  CONSTRAINT PRIMARY KEY(internetarticle_id),
  CONSTRAINT FOREIGN KEY (user_id) REFERENCES tbl_user(user_id)
);



CREATE TABLE IF NOT EXISTS `tbl_enewsletter`
(
  enewsletter_id INT NOT NULL AUTO_INCREMENT,
  enewsletter_surname VARCHAR(100),
  enewsletter_initials VARCHAR(30),
  enewsletter_yearpublished VARCHAR(100),
  enewsletter_enewslettertitle VARCHAR(100),
  enewsletter_url VARCHAR(100),
  enewsletter_dateaccessed VARCHAR(100),
  user_id INT,
  CONSTRAINT PRIMARY KEY(enewsletter_id),
  CONSTRAINT FOREIGN KEY (user_id) REFERENCES tbl_user(user_id)
);


CREATE TABLE IF NOT EXISTS `tbl_pcorrespondence`
(
  pcorrespondence_id INT NOT NULL AUTO_INCREMENT,
  pcorrespondence_surname VARCHAR(100),
  pcorrespondence_initials VARCHAR(30),
  pcorrespondence_yearpublished VARCHAR(100),
  pcorrespondence_topic VARCHAR(100),
  pcorrespondence_type VARCHAR(100),
  pcorrespondence_date VARCHAR(100),
  pcorrespondence_location VARCHAR(100),
  user_id INT,
  CONSTRAINT PRIMARY KEY(pcorrespondence_id),
  CONSTRAINT FOREIGN KEY (user_id) REFERENCES tbl_user(user_id)
);



CREATE TABLE IF NOT EXISTS `tbl_movie`
(
  movie_id INT NOT NULL AUTO_INCREMENT,
  movie_title VARCHAR(100),
  movie_yearreleased VARCHAR(30),
  movie_directortitle VARCHAR(30),
  user_id INT,
  CONSTRAINT PRIMARY KEY(movie_id),
  CONSTRAINT FOREIGN KEY (user_id) REFERENCES tbl_user(user_id)
);
