-- donde exista una db con el mismo nombre la elimina
drop schema if exists `test_php`;

-- se crear la DB 
create schema  if not exists `test_php` default  character set utf8 collate  utf8_spanish2_ci;
USE `test_php`; 

-- se crear la tabla
CREATE TABLE  `persona`(
`nombre_usuario` text not null,
`carrera` text not null,
`no_cuenta` int(10) not null,
`direccion` text not null,
`telefono` varchar (8) not null,
`email` text not null,
`password` varchar (8) not null,
`fecha_registro` datetime not null default current_timestamp,
`permisos` int (11) not null default '2'
)engine=Innodb default charset=utf8;
-- define el motor de la db que se va a oucupar
-- agregar dos registros
insert into `persona`(`nombre_usuario`, `carrera`,`no_cuenta`,`direccion`,`telefono`,`email`,`password`,`fecha_registro`,`permisos`)values
('Aaron Velasco','ico','413112576','gloria 15','5612315','aaron@gmail.com','123456','2020-05-12 17:40:00',2);

insert into `persona`(`nombre_usuario`, `carrera`,`no_cuenta`,`direccion`,`telefono`,`email`,`password`,`fecha_registro`,`permisos`)values
('Eric Ayehualtencatl','ico','317094301','San Blas','5542315','ericmonroy@gmail.com','123456','2020-05-12 17:40:00',2);

insert into `persona`(`nombre_usuario`, `carrera`,`no_cuenta`,`direccion`,`telefono`,`email`,`password`,`fecha_registro`,`permisos`)values
('Gustavo Arreola','ico','413746766','San Cristobal 15','5631215','gustavo@gmail.com','123456','2020-05-12 17:40:00',2);
insert into `persona`(`nombre_usuario`, `carrera`,`no_cuenta`,`direccion`,`telefono`,`email`,`password`,`fecha_registro`,`permisos`)values
('Alejandro Martinez','ico','318112576','Las Lomas 7','3152315','Alejandro@gmail.com','123456','2020-05-12 17:40:00',2);
insert into `persona`(`nombre_usuario`, `carrera`,`no_cuenta`,`direccion`,`telefono`,`email`,`password`,`fecha_registro`,`permisos`)values
('Carlos Velasco','ico','316112576','Glorieta','5531315','Carlos@gmail.com','123456','2020-05-12 17:40:00',2);
insert into `persona`(`nombre_usuario`, `carrera`,`no_cuenta`,`direccion`,`telefono`,`email`,`password`,`fecha_registro`,`permisos`)values
('Juan Orozco','ico','313112576','glorieta 15','5412315','juan@gmail.com','123456','2020-05-12 17:40:00',2);
insert into `persona`(`nombre_usuario`, `carrera`,`no_cuenta`,`direccion`,`telefono`,`email`,`password`,`fecha_registro`,`permisos`)values
('Gabriel Beltran','ico','312112576','Palmas','5542315','gabriel@gmail.com','123456','2020-05-12 17:40:00',2);
insert into `persona`(`nombre_usuario`, `carrera`,`no_cuenta`,`direccion`,`telefono`,`email`,`password`,`fecha_registro`,`permisos`)values
('Luna Garcia','ico','317112576','Colon 5','3152315','luna@gmail.com','123456','2020-05-12 17:40:00',2);
insert into `persona`(`nombre_usuario`, `carrera`,`no_cuenta`,`direccion`,`telefono`,`email`,`password`,`fecha_registro`,`permisos`)values
('Alicia Beltran','ico','314112576','Blas 15','5512815','alicia@gmail.com','123456','2020-05-12 17:40:00',2);
insert into `persona`(`nombre_usuario`, `carrera`,`no_cuenta`,`direccion`,`telefono`,`email`,`password`,`fecha_registro`,`permisos`)values
('Juana Gomez','ico','123112576','Cantla','5452315','juana@gmail.com','123456','2020-05-12 17:40:00',2);
insert into `persona`(`nombre_usuario`, `carrera`,`no_cuenta`,`direccion`,`telefono`,`email`,`password`,`fecha_registro`,`permisos`)values
('Beatriz Silva','ico','319112576','San Juan','5252315','beatriz@gmail.com','123456','2020-05-12 17:40:00',2);
insert into `persona`(`nombre_usuario`, `carrera`,`no_cuenta`,`direccion`,`telefono`,`email`,`password`,`fecha_registro`,`permisos`)values
('Emiliano Lili','ico','319112576','Salvador 6','5615195','emiliano@gmail.com','123456','2020-05-12 17:40:00',2);
insert into `persona`(`nombre_usuario`, `carrera`,`no_cuenta`,`direccion`,`telefono`,`email`,`password`,`fecha_registro`,`permisos`)values
('Ali Candelarioo','ico','312112576','gloriana 14','5831315','ali@gmail.com','123456','2020-05-12 17:40:00',2);
insert into `persona`(`nombre_usuario`, `carrera`,`no_cuenta`,`direccion`,`telefono`,`email`,`password`,`fecha_registro`,`permisos`)values
('Anderson Silva','ico','412102576','glorietasa 12','5613035','anderson@gmail.com','123456','2020-05-12 17:40:00',2);
insert into `persona`(`nombre_usuario`, `carrera`,`no_cuenta`,`direccion`,`telefono`,`email`,`password`,`fecha_registro`,`permisos`)values
('Bisal Martinez','ico','413158076','escutia 3','5655615','bisal@gmail.com','123456','2020-05-12 17:40:00',2);
insert into `persona`(`nombre_usuario`, `carrera`,`no_cuenta`,`direccion`,`telefono`,`email`,`password`,`fecha_registro`,`permisos`)values
('Ana Torres','ico','413111246','Cristobal 19','5611115','cristobal@gmail.com','123456','2020-05-12 17:40:00',2);


-- define la llave primaria
alter table `persona`
  add primary key (`no_cuenta`);
commit;

-- commit confirma la trasaccion o proceso actual, haciendo que sus cambios sean permanentes
