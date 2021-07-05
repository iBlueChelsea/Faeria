-- Database for Cheekia React App
CREATE DATABASE cheekia;
GRANT ALL ON cheekia.* TO 'cheekia'@'localhost' IDENTIFIED BY 'phpmyadmin';
GRANT ALL ON cheekia.* TO 'cheekia'@'127.0.0.1' IDENTIFIED BY 'phpmyadmin';

-- Create Table Users
CREATE TABLE users (
    id int NOT NULL AUTO_INCREMENT,
    name varchar(255),
    password varchar(255),
    PRIMARY KEY (id)
);

-- Create Table Games
CREATE TABLE games (
    id int NOT NULL AUTO_INCREMENT,
    player1 int,
    player2 int,
    react_state json,
    is_finished boolean,
    winner int,
    PRIMARY KEY (id),
    FOREIGN KEY (player1) REFERENCES users(id),
    FOREIGN KEY (player2) REFERENCES users(id),
    FOREIGN KEY (winner) REFERENCES users(id)
);

-- Create Table Decks
CREATE TABLE decks (
    id int NOT NULL AUTO_INCREMENT,
    player int,
    deck_name varchar(255),
    cover int,
    cards json,
    cost float,
    PRIMARY KEY (id),
    FOREIGN KEY (player) REFERENCES users(id)
);

-- Create Table Cards
CREATE TABLE cards (
    id int NOT NULL,
    name varchar(255),
    type varchar(255),
    faeria int,
    forest int,
    desert int,
    mountain int,
    lake int,
    wild int,
    attack int,
    health int,
    movement_range int,
    haste boolean,
    dash int,
    aquatic boolean,
    flying boolean,
    jump boolean,
    taunt boolean,
    divine boolean,
    protection boolean,
    ranged boolean,
    summon boolean,
    gift boolean,
    lastword boolean,
    production boolean,
    target boolean,
    legendary boolean,
    playable boolean,
    PRIMARY KEY (id)
);

-- Insert Into Table Cards
INSERT INTO cards (id,name,type,faeria,forest,desert,mountain,lake,wild,attack,health,movement_range,haste,dash,aquatic,flying,jump,taunt,divine,protection,ranged,summon,gift,lastword,production,target,legendary,playable) VALUES
(0,"Cheeksplore","event",0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,1,0,0),
(1,"Mercheek","creature",4,0,0,0,2,0,2,3,1,0,0,1,0,0,0,0,0,0,0,1,0,0,0,0,1),
(2,"Dolphin Cheekrider","creature",5,0,0,0,3,0,3,6,1,0,0,0,0,1,0,0,0,0,0,0,0,0,0,0,1),
(3,"Clamcheek","creature",3,0,0,0,2,0,1,3,1,0,0,0,0,0,0,0,0,0,0,0,1,0,0,0,1),
(4,"Ninja Cheek","creature",4,0,0,0,3,0,3,3,1,1,0,0,0,1,0,0,0,0,0,0,0,0,0,0,1),
(5,"Song of the Mercheek","event",3,0,0,0,2,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,1,0,1),
(6,"Cheek in a bottle","event",1,0,0,0,2,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,1),
(7,"Cheekie in a lamp","event",0,0,0,0,3,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,1),
(8,"Cheek lord","creature",5,0,0,0,3,0,5,5,1,0,0,0,0,1,0,0,0,0,1,0,0,0,0,0,1),
(9,"Rain of Cheek","event",6,0,0,0,4,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,1),
(10,"Cheekdrop","creature",1,0,0,0,1,0,1,1,1,0,0,1,0,0,0,0,0,0,0,0,0,0,0,0,1),
(11,"Cheekmoon","event",9,0,0,0,4,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,1,1),
(12,"Cheekpearl","creature",2,0,0,0,2,0,1,1,1,0,0,0,0,0,1,1,1,0,0,0,0,0,0,0,0),
(13,"Crabcheek","creature",4,0,0,0,2,0,6,4,1,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),
(14,"Cheekcano","creature",6,0,0,3,0,0,5,6,1,0,0,0,0,0,0,0,0,0,1,0,0,0,0,0,1),
(15,"Cheekdevil","creature",3,0,0,1,0,0,4,3,1,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,1),
(16,"Cheekflame","creature",3,0,0,2,0,0,2,3,1,0,0,0,0,0,0,0,0,0,0,1,0,0,0,0,1),
(17,"Cheekblast","event",3,0,0,2,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,1,0,1),
(18,"Cheekflame Faerie","creature",4,0,0,2,0,0,4,2,1,0,0,0,0,0,0,0,0,1,0,0,0,0,0,0,1),
(19,"Baby Cheekdevil","creature",4,0,0,2,0,0,0,1,1,0,0,0,0,0,0,0,0,0,0,0,0,1,0,0,1),
(20,"Ghostcheek Tower","creature",4,0,0,3,0,0,0,4,1,0,0,0,0,0,0,0,0,0,0,0,0,1,0,0,1),
(21,"Ghostcheek","creature",2,0,0,2,0,0,2,1,1,0,0,0,1,0,0,0,0,0,0,0,0,0,0,0,1),
(22,"Ghostcheek Alchemist","creature",4,0,0,3,0,0,2,4,1,0,0,0,0,0,0,0,0,0,0,1,0,0,0,0,1),
(23,"Cheekruption","event",5,0,0,3,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,1),
(24,"Suncheek","creature",8,0,0,4,0,0,5,5,5,0,0,0,1,0,0,1,0,0,0,0,1,0,0,1,1),
(25,"Cheekflower","creature",1,1,0,0,0,0,1,1,1,0,0,0,0,0,0,0,0,0,1,0,0,0,0,0,1),
(26,"Cavecheek dweller","creature",4,2,0,0,0,0,2,4,1,0,0,0,0,0,0,0,0,0,0,1,0,0,0,0,1),
(27,"Mushroom Cheek","creature",4,3,0,0,0,0,3,4,1,0,0,0,0,0,0,0,0,0,1,0,0,0,0,0,1),
(28,"Cheekshrooms","creature",1,1,0,0,0,0,1,2,1,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,1),
(29,"Cheektree Giant","creature",6,4,0,0,0,0,6,8,1,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,1),
(30,"Cheekworld Tree","creature",10,5,0,0,0,0,7,9,1,0,0,0,0,0,0,0,0,0,1,0,0,0,0,1,1),
(31,"Cheek Shaman","creature",4,2,0,0,0,0,1,3,1,0,0,0,0,0,0,0,0,0,0,1,0,0,0,0,1),
(32,"Cheekfox","creature",3,2,0,0,0,0,3,4,1,0,2,0,0,0,0,0,0,0,0,0,0,0,0,0,1),
(33,"Cheekbloom Spirit","creature",4,1,0,0,0,0,1,2,1,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,1),
(34,"Cheekshield Spirit","event",3,2,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,1,0,1),
(35,"Cheek Dancers","event",3,2,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,1,0,1),
(36,"Cheeksphynx","creature",6,0,2,0,0,0,3,6,1,0,0,0,0,0,0,0,0,0,1,0,0,0,0,0,1),
(37,"Cheeksphynx A","creature",6,0,2,0,0,0,3,6,1,0,0,0,0,0,0,0,0,0,1,0,0,0,0,0,0),
(38,"Cheeksphynx B","creature",6,0,2,0,0,0,3,6,1,0,0,0,0,0,0,0,0,0,1,0,0,0,0,0,0),
(39,"Cheeksphynx C","creature",6,0,2,0,0,0,3,6,1,0,0,0,0,0,0,0,0,0,0,1,0,0,0,0,0),
(40,"Mummy Cheek","creature",4,0,1,0,0,0,3,5,1,0,0,0,0,0,0,0,0,0,0,0,0,1,0,0,1),
(41,"Cheeksquito","creature",2,0,1,0,0,0,1,1,1,0,0,0,1,0,0,0,0,0,0,0,1,0,0,0,1),
(42,"Cheek Air Balloon","creature",5,0,2,0,0,0,5,5,1,0,1,0,1,0,0,0,0,0,0,0,0,0,0,0,1),
(43,"Balloon Cheek","creature",2,0,1,0,0,0,1,2,1,0,0,0,1,0,0,0,0,0,0,0,0,0,0,0,1),
(44,"Dragon Cheekrider","creature",6,0,3,0,0,0,6,6,3,0,0,0,1,0,0,0,0,0,0,0,1,0,0,0,1),
(45,"Baby Dragoncheek","creature",2,0,2,0,0,0,2,2,2,0,0,0,1,0,0,0,0,0,0,0,0,0,0,0,1),
(46,"Cheek Glider","event",2,0,2,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,1,0,1),
(47,"Cheek Pyramid","creature",10,0,4,0,0,0,5,9,1,0,0,0,0,0,0,1,0,0,0,0,0,1,0,1,1),
(48,"Cheek Wind","event",0,0,2,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,1,0,1),
(49,"Canopic Cheekjar","event",6,0,3,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,1,0,1),
(50,"Cavecheek","creature",4,0,0,0,0,0,4,4,1,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,1),
(51,"Book of Cheek","event",2,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,1),
(52,"Milk of the Cheek","event",2,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,1);
