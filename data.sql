set sql_mode = "no_auto_value_on_zero";
start transaction;
set time_zone = "+00:00";
create table `user'(
  `name` varchar(15) NOT NULL,
  `email` varchar(10) not null,
  `bal` varchar(10) not null
  )ENGINE=InnoDB DEFAULT CHARSET=latin1;
  
  insert into  `user`(`name`,`email`,`bal`) values
  ('Abi', 'abi@yahoo.com', '5000'),
  ('Divya','divyak@gmail.com','33000'),
  ('Giftlin Bibi','giftlinbibie@gmail.com','45000');
  ('Hamlin Hemi','hamlinhemi@yahoo.com','2000'),
  ('Joe Akash','joeak.ash123@gmail.com','30000'),
  ('Jirinto', 'jirintoaakansh@gmail.com','55000'),
  ('Kavya','kavyaraam54@gmail.com','6000'),
  ('Shaili','shailijikmi@gmail.com','9000'),
  ('Subashree','subashree@gmail.com','4400');
  
  
  
  
  
alter table `user`
  add primary key (`email`);
commit;
