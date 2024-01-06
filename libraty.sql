CREATE TABLE authors(
    authorid int (11) NOT NULL AUTO_INCREMENT,
    name varchar(55) NOT NULL DEFAULT '',
    PRIMARY KEY (authorid)
)ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=5;

INSERT INTO authors (authorid, name) VALUES
                                         (1,'J.R.R Tolkien'),
                                         (2,'Alex Haley'),
                                         (3,'Tom Clancy'),
                                         (4,'Isaac Asimov');
CREATE TABLE books(
    bookid int(11) NOT NULL AUTO_INCREMENT,
    authorid int(11) NOT NULL DEFAULT '0',
    title varchar(55) NOT NULL DEFAULT '',
    ISBN varchar(25) NOT NULL DEFAULT '',
    pub_year smallint(6) NOT NULL DEFAULT'0',
    available tinyint (4) NOT NULL ,
    PRIMARY KEY (bookid)
)ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=19;
INSERT INTO books(bookid, authorid,title,ISBN, pub_year, available) VALUES
                                                                        (1,1,'AAA','0-9999-999',1999,1),
                                                                        (2,1,'BBB','0-9899-999',1989,1),
                                                                        (3,2,'ACA','0-9999-989',1979,1),
                                                                        (4,3,'ADA','0-9779-999',1997,1),
                                                                        (5,4,'A4AA','0-9999-999',1999,1)




