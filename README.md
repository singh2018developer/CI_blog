# CI_blog
please edit database setup according to your system

Note:-- 
please set id only to primary and autoincrement but not the user_id, post_id or category_id.
READ ALL info carefully.

for ci_blog data base
user table

CREATE TABLE users
(
id int,
name varchar(255),
username varchar(255),
email varchar(255),
password varchar(255)
);
*****************************

for category table

CREATE TABLE categories
(
id int,
user_id int,
name varchar(255)
);

******************************
for comments table

CREATE TABLE comments
(
id int,
post_id int,
name varchar(255),
email varchar(255),
body varchar(255)
);

***********************************

for posts Table

CREATE TABLE posts
(
id int,
category_id int,
user_id int,
title varchar(255),
slug varchar(255),
body varchar(255),
post_image varchar(255)
);
