drop table if exists `users`;
create table `users` (
    ID int not null auto_increment,
    Nama VARCHAR(50) not null,
    Alamat VARCHAR(50) not null,
    Jabatan VARCHAR(50) not null,    
    primary key (ID)
);
insert into `users` (Nama, Alamat, Jabatan) values
    ("Hades","PIK","Pilot"),
    ("Poseidon","PIK","BMKG"),
    ("ZEUS","PIK","Langit");