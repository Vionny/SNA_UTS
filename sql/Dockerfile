FROM mysql:latest

RUN echo "CREATE DATABASE IF NOT EXISTS redlockdb;USE redlockdb;CREATE TABLE IF NOT EXISTS `user` (ID INT NOT NULL PRIMARY KEY,Nama VARCHAR(255) NOT NULL,Alamat VARCHAR(255) NOT NULL,Jabatan VARCHAR(255) NOT NULL);INSERT INTO `user` VALUES(1, 'Eca', 'Jl. Kemanggisan', 'Manager'),(2, 'Arya', 'Tanjung Duren', 'Staff'),(3, 'Sora', 'Jl. Elkia','Staff');"


ENV HOSTNAME mysql
ENV USERNAME root
ENV DB redlockdb
ENV PASSWORD db


EXPOSE 3306

CMD ["mysqld"]