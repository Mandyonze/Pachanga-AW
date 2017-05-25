CREATE TABLE `pachanga`.`distritos` (
    `id` VARCHAR(20) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL
    , `url` VARCHAR(500) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL
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
  , `nombre` VARCHAR(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL
  , `distrito` VARCHAR(20) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL
  , `correo` VARCHAR(60) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL
  , `skill` int DEFAULT NULL
  , `valoracion` int DEFAULT NULL
  , PRIMARY KEY (`id`)
  , FOREIGN KEY (`distrito`) REFERENCES distritos(`id`) ON DELETE CASCADE
) ENGINE = InnoDB CHARSET=utf8 COLLATE utf8_unicode_ci;

CREATE TABLE `pachanga`.`polideportivos` (
  `id` VARCHAR(40) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL
  , `distrito` VARCHAR(20) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL
  , `url` VARCHAR(500) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL
  , PRIMARY KEY (`id`)
  , FOREIGN KEY (`distrito`) REFERENCES distritos(`id`) ON DELETE CASCADE
)ENGINE = InnoDB CHARSET=utf8 COLLATE utf8_unicode_ci;


INSERT INTO `polideportivos` (`id`, `distrito`, `url`) VALUES
('Polideportivo Municipal de la Arganzuela', 'Arganzuela', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24307.53754664887!2d-3.7209421414903154!3d40.39905382948238!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd42264722274855%3A0x487d05d8b335a6b3!2sPolideportivo+Municipal+de+la+Arganzuela!5e0!3m2!1sen!2ses!4v1495739317595'),
('Centro Deportivo Municipal Marqués de Samaranch', 'Arganzuela', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24307.53754664887!2d-3.7209421414903154!3d40.39905382948238!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd4227d94677fee1%3A0x4195d93e6cad24c2!2sCentro+Deportivo+Municipal+Marqu%C3%A9s+de+Samaranch!5e0!3m2!1sen!2ses!4v1495739611866');

CREATE TABLE `pachanga`.`partidos` (
  `id` int(20) NOT NULL AUTO_INCREMENT
  , `nombre` VARCHAR(40) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL
  , `polideportivo` VARCHAR(40) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL
  , `fecha` DATETIME NOT NULL
  , `creador` VARCHAR(20) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL
  , `goles1` int(11) DEFAULT NULL
  , `goles2` int(11) DEFAULT NULL
  , PRIMARY KEY (`id`)
  , UNIQUE (`nombre`)
  , FOREIGN KEY (`creador`) REFERENCES usuarios(`id`) ON DELETE CASCADE
  , FOREIGN KEY (`polideportivo`) REFERENCES polideportivos(`id`) ON DELETE CASCADE
)ENGINE = InnoDB CHARSET=utf8 COLLATE utf8_unicode_ci;

INSERT INTO `partidos` (`id`, `polideportivo`, `fecha`, `creador`, `goles1`, `goles2`) VALUES
(NULL, 'Centro Deportivo Municipal Marqués de Sa', '2017-05-26 06:37:00', 'riusqui', NULL, NULL)
;
CREATE TABLE `pachanga`.`participantes` (
  `partido` int(20) NOT NULL
  , `usuario` VARCHAR(20) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL
  , `equipo` int(11) DEFAULT NULL
  , PRIMARY KEY (`partido`, `usuario`)
  , FOREIGN KEY (`partido`) REFERENCES partidos(`id`) ON DELETE CASCADE
  , FOREIGN KEY (`usuario`) REFERENCES usuarios(`id`) ON DELETE CASCADE
)ENGINE = InnoDB CHARSET=utf8 COLLATE utf8_unicode_ci;

INSERT INTO `participantes` (`partido`, `usuario`, `equipo`) VALUES
('1', 'andres', '1'),
('1', 'borja', '2')
;
