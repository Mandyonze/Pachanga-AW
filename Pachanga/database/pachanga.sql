CREATE TABLE `pachanga`.`distritos` (
    `id` VARCHAR(20) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL
    , PRIMARY KEY (`id`)
) ENGINE = InnoDB CHARSET=utf8 COLLATE utf8_unicode_ci;

INSERT INTO `distritos` (`id`) VALUES
('Fuencarral-El Pardo'),
('Moncloa-Aravaca'),
('Tetuán'),
('Hortaleza'),
('Chamartín'),
('Ciudad Lineal'),
('Chamberí'),
('Barrio de Salamanca'),
('San Blas'),
('Barajas'),
('Centro'),
('Retiro'),
('Arganzuela'),
('Moratalaz'),
('Villaverde'),
('Usera'),
('Latina'),
('Carabanchel'),
('Vicálvaro'),
('Puente de Vallecas'),
('Villa de Vallecas');



CREATE TABLE `pachanga`.`usuarios` (
  `id` VARCHAR(20) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL
  , `password` CHAR(32) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL
  , `distrito` VARCHAR(20) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL
  , `correo` VARCHAR(60) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL
  , `skill` int(10) DEFAULT NULL
  , `valoracion` int(10) DEFAULT NULL
  , PRIMARY KEY (`id`)
  , FOREIGN KEY (`distrito`) REFERENCES distritos(`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
