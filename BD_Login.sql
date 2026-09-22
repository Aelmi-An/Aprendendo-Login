create database teste_PHP;
use teste_PHP;

create table login(
id int not null primary key auto_increment,
email varchar(100) not null,
senha varchar(100)
);
select*from login;
insert into login(email) values ('Cain@gmail.com');
update login set email = 'Abel@gmail.com' where id=4;
update login set email = 'Adão@gmail.com' where id=1;
update login set email = 'Eva@gmail.com' where id=2;