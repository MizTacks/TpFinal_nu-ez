drop database DBPuzzles;
create database DBPuzzles;
use DBPuzzles;

create table usuarios(
    ID int primary key auto_increment,
    usuario varchar (30),
    contraseña varchar (30)
);

insert into usuarios values
(1,"MizTacks","YungBlud"),
("","Martin","Bokitapapa");

create table cubos(
 id int primary key auto_increment,
 Nombre varchar(30),
 Marca varchar(30),
 Precio int,
 Descripcion varchar(200),
 img varchar(300)
);

insert into cubos values
(1,"Latch Cube","Okamoto",420,"Los movimientos estan limitados al sentido de las flechas.","https://images-na.ssl-images-amazon.com/images/I/51RKEZF9bAL._SY300_.jpg"),
("","Gear Cube","Oskar van Deventer",600,"Los engranajes que lo conforman giran al moverse.","https://mmtcdn.blob.core.windows.net/084395e6770c4e0ebc5612f000acae8f/mmtcdn/Products6022-640x640-1109132692.jpg"),
("","Holey Skewb Extreme","Tony Fischer",850,"Variacion del Skewb Extreme, que es una variacion del Skewb normal xd","https://thegioirubik.com/wp-content/uploads/2016/11/Mefferts-Holey-Skewb-Extreme1.jpg"),
("","Kokonotsu Pillow","Meffert's",680,"Cubo 3x3 con 9 colores que no deben repetirse en ninguna de las 6 caras a la vez, similar a la modalidad del Sudoku","https://www.maskecubos.com/3297-thickbox_default/feliks-9.jpg"),
("","Pyraminx","Aiduy",750,"Clasico rompecabezas piramidal en version 3x3 de 4 colores neon con pegatinas de fibra de carbono que dan mejor agarre y resaltan su aspecto","https://images-na.ssl-images-amazon.com/images/I/71uvJGlBLzL._SY355_.jpg"),
("","Megaminx","QiYi",500,"El Megaminx tiene la forma de un dodecaedro, posee 12 piezas centrales, una en cada cara; 20 esquinas y 30 aristas.","https://i.pinimg.com/originals/75/67/75/756775830f533f547e8f7b1267f2111f.jpg"),
("","Void Cube Z","Rubik",720,"Tiene esquinas redondeadas y una perforacion tridimensional que ocupa los 6 centros y da un aspecto hueco.","https://ae01.alicdn.com/kf/HTB1OKKSavfsK1RjSszbq6AqBXXa4/Micube-Rounded-Void-Pillowed-Cube-3x3x3-Speed-Cube-Cubo-Magico-Educational-Toys-Magic-Cube-Puzzle-Black.jpg");

