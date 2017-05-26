CREATE TABLE `pachanga`.`distritos` (
    `id` VARCHAR(20) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL
    , `url` VARCHAR(500) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL
    , PRIMARY KEY (`id`)

) ENGINE = InnoDB CHARSET=utf8 COLLATE utf8_unicode_ci;

INSERT INTO `distritos` (`id` , `url`) VALUES
('Fuencarral-El Pardo' , 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d40802.00737393798!2d-3.8023044154422685!3d40.52772726654345!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd4229fa4409226f%3A0x1f4d57e1bdbd396f!2sFuencarral-El+Pardo%2C+28048+Madrid!5e0!3m2!1ses!2ses!4v1495788212479'),
('Moncloa-Aravaca' , 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24293.014895944812!2d-3.7907224354894837!3d40.439260629191914!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd4187ba902ea801%3A0x2efcb6589fe8a8a1!2sMoncloa+-+Aravaca%2C+Madrid!5e0!3m2!1ses!2ses!4v1495788321768'),
('Tetuán' , 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12142.648135609335!2d-3.7088765989875343!3d40.46061661975998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd422906e34771eb%3A0x9887e1ccf09cb673!2zVGV0dcOhbiwgTWFkcmlk!5e0!3m2!1ses!2ses!4v1495788373013'),
('Hortaleza' , 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24277.981313581975!2d-3.654879435442395!3d40.48084712888548!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd422e9403c02749%3A0x47c6610e0a0ed372!2sHortaleza%2C+Madrid!5e0!3m2!1ses!2ses!4v1495788408916'),
('Chamartín' , 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24285.255218848728!2d-3.6935608354651572!3d40.460730179033334!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd4229243f6c7975%3A0x84f77087e19461b6!2sChamart%C3%ADn%2C+Madrid!5e0!3m2!1ses!2ses!4v1495788447001'),
('Ciudad Lineal' , 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24289.63851980748!2d-3.6648089854789196!3d40.44860357912283!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd422f24768cf4d1%3A0x69ba594b6467a377!2sCdad.+Lineal%2C+Madrid!5e0!3m2!1ses!2ses!4v1495788501362'),
('Chamberí' , 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12147.06064656968!2d-3.7128486489943837!3d40.43619866980505!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd42285f85f3365f%3A0x41f08339a8690f52!2sChamber%C3%AD%2C+Madrid!5e0!3m2!1ses!2ses!4v1495788566596'),
('Barrio de Salamanca' , 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12147.884718150815!2d-3.6844207489956373!3d40.43163706981352!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd4228b8e2b7b727%3A0x2343f6316e2f37b7!2sSalamanca%2C+Madrid!5e0!3m2!1ses!2ses!4v1495788631468'),
('San Blas' , 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24296.615719271063!2d-3.6070225855007645!3d40.429294629265755!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd422fe5a7d75773%3A0xf96b3a23da8f98cb!2sSan+Blas-Canillejas%2C+Madrid!5e0!3m2!1ses!2ses!4v1495788663136'),
('Barajas' , 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24278.468293839924!2d-3.593870985443893!3d40.47950057889536!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd4231e0cc808cfb%3A0x498db67d1ab6dcea!2sBarajas%2C+28042+Madrid!5e0!3m2!1ses!2ses!4v1495788713943'),
('Centro' , 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12150.378864623328!2d-3.7153382989995296!3d40.41782826983917!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd42287e9fd06215%3A0xd5e109ff23e3d0c1!2sCentro%2C+Madrid!5e0!3m2!1ses!2ses!4v1495788756466'),
('Retiro' , 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12152.147547198236!2d-3.6848521990022935!3d40.4080336198574!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd4228a0462ae9a5%3A0xb810b11635a3dc76!2sRetiro%2C+Madrid!5e0!3m2!1ses!2ses!4v1495788787167'),
('Arganzuela' , 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12153.930650358336!2d-3.7069027990050674!3d40.39815711987579!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd4227ccbb997967%3A0x2f04ce021cb188ed!2sArganzuela%2C+Madrid!5e0!3m2!1ses!2ses!4v1495788840185'),
('Moratalaz' , 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12152.590626036452!2d-3.651454099002958!3d40.40557961986197!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd4225ecd0c5bf63%3A0x2df9c554f8298330!2sMoratalaz%2C+Madrid!5e0!3m2!1ses!2ses!4v1495788889278'),
('Villaverde' , 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24327.959546655115!2d-3.7086088855989283!3d40.34245817991602!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd4226c565cbac31%3A0x5891073918172aa7!2sVillaverde%2C+Madrid!5e0!3m2!1ses!2ses!4v1495788921502'),
('Usera' , 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12157.54369118521!2d-3.709878699010679!3d40.37813856991326!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd4226536e5067c5%3A0x952d3e5f8795d3f5!2sUsera%2C+Madrid!5e0!3m2!1ses!2ses!4v1495788955951'),
('Latina' , 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24311.559238801212!2d-3.795930885547521!3d40.387913679574105!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd41885dce1c4fab%3A0x74d96a0d24669d8c!2sLatina%2C+Madrid!5e0!3m2!1ses!2ses!4v1495789123605'),
('Carabanchel' , 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24313.907753488787!2d-3.7553469855549064!3d40.381407079622846!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd42278805dd1c6d%3A0x7c0f9872e0e3d4b5!2sCarabanchel%2C+Madrid!5e0!3m2!1ses!2ses!4v1495789159373'),
('Vicálvaro' , 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24310.36114671582!2d-3.5914329855437916!3d40.39123267954929!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd42256914050a71%3A0x260340f4bc004bb1!2sVic%C3%A1lvaro%2C+Madrid!5e0!3m2!1ses!2ses!4v1495789194070'),
('Puente de Vallecas' , 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24313.155382943358!2d-3.673238435552542!3d40.38349162960723!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd4225d0994ed505%3A0x41cc0ff30381931!2sPuente+de+Vallecas%2C+Madrid!5e0!3m2!1ses!2ses!4v1495789258678'),
('Villa de Vallecas' , 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24324.723867201283!2d-3.6350960355887794!3d40.35142962984828!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd42248b9a3606b5%3A0x1801617181ceab09!2sVilla+de+Vallecas%2C+Madrid!5e0!3m2!1ses!2ses!4v1495789298050');



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
  `id` VARCHAR(150) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL
  , `distrito` VARCHAR(20) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL
  , `url` VARCHAR(500) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL
  , PRIMARY KEY (`id`)
  , FOREIGN KEY (`distrito`) REFERENCES distritos(`id`) ON DELETE CASCADE
)ENGINE = InnoDB CHARSET=utf8 COLLATE utf8_unicode_ci;


INSERT INTO `polideportivos` (`id`, `distrito`, `url`) VALUES
('Polideportivo Municipal de la Arganzuela', 'Arganzuela', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24307.53754664887!2d-3.7209421414903154!3d40.39905382948238!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd42264722274855%3A0x487d05d8b335a6b3!2sPolideportivo+Municipal+de+la+Arganzuela!5e0!3m2!1sen!2ses!4v1495739317595'),
('Centro Deportivo Municipal Marqués de Samaranch', 'Centro', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24307.53754664887!2d-3.7209421414903154!3d40.39905382948238!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd4227d94677fee1%3A0x4195d93e6cad24c2!2sCentro+Deportivo+Municipal+Marqu%C3%A9s+de+Samaranch!5e0!3m2!1sen!2ses!4v1495739611866'),
('Club Deportivo Somontes', 'Fuencarral-El Pardo', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d48568.56091908148!2d-3.73931519297668!3d40.46342648564293!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd422823045ea175%3A0x5ac245282533c528!2sClub+Deportivo+Somontes!5e0!3m2!1ses!2ses!4v1495790030508'),
('Club El Tejar De Somontes', 'Fuencarral-El Pardo', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d48568.56091908148!2d-3.73931519297668!3d40.46342648564293!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd4180b633c38855%3A0x81ca53ac12456ccc!2sClub+El+Tejar+De+Somontes!5e0!3m2!1ses!2ses!4v1495790090642'),
('Polideportivo Santa Ana', 'Fuencarral-El Pardo', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d48543.498895874545!2d-3.7313538208984443!3d40.49807560000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd422bd6ebb48f4b%3A0xb8d120d0dd37212f!2sPolideportivo+Santa+Ana!5e0!3m2!1ses!2ses!4v1495790141972'),
('Centro Polideportivo Municipal Fernando Martín', 'Moncloa-Aravaca', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d194174.25565351255!2d-3.8364209920484718!3d40.49798574279992!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd4229ae3a6386a1%3A0xc72efaf080fa013d!2sCentro+Polideportivo+Municipal+Fernando+Mart%C3%ADn!5e0!3m2!1ses!2ses!4v1495790262320'),
('Polideportivo Municipal La Bombilla', 'Moncloa-Aravaca', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d194174.25565351255!2d-3.8364209920484718!3d40.49798574279992!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd422823264c4515%3A0x9cadea98e9a3083d!2sPolideportivo+Municipal+La+Bombilla!5e0!3m2!1ses!2ses!4v1495790319216'),
('Polideportivo Municipal José María Cagigal', 'Moncloa-Aravaca', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d194174.25565351255!2d-3.8364209920484718!3d40.49798574279992!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd4228188c1d8917%3A0x243d095b52a81126!2sPolideportivo+Municipal+Jos%C3%A9+Mar%C3%ADa+Cagigal!5e0!3m2!1ses!2ses!4v1495790355743'),
('Polideportivo Municipal Triángulo de Oro', 'Tetuán', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12141.835162306508!2d-3.7094996735589674!3d40.46511411974956!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd42290fe8bab9ef%3A0x6bb8df2b52224454!2sPolideportivo+Municipal+Tri%C3%A1ngulo+de+Oro!5e0!3m2!1ses!2ses!4v1495790414797'),
('Polideportivo Rodríguez Sahagún', 'Tetuán', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12141.835162306508!2d-3.7094996735589674!3d40.46511411974956!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd4229a3bfa4b6d3%3A0x8e8bcdc7c50f495a!2sPolideportivo+Rodr%C3%ADguez+Sahag%C3%BAn!5e0!3m2!1ses!2ses!4v1495790467673'),
('Centro deportivo municipal PLAYA VICTORIA', 'Tetuán', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12141.835162306508!2d-3.7094996735589674!3d40.46511411974956!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd422907503486eb%3A0x1c00b977b57d156!2sCentro+deportivo+municipal+PLAYA+VICTORIA!5e0!3m2!1ses!2ses!4v1495790522804'),
('Centro Deportivo Municipal Hortaleza', 'Hortaleza', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d97134.71234412311!2d-3.770785514047018!3d40.46509265202265!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd422eb76530fd63%3A0x3d75b18cf62118ac!2sCentro+Deportivo+Municipal+Hortaleza!5e0!3m2!1ses!2ses!4v1495790653903'),
('Centro Deportivo Municipal Luis Aragonés', 'Hortaleza', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d97134.71234412311!2d-3.770785514047018!3d40.46509265202265!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd422efa1012ee57%3A0x5ae76e0c9679cfca!2sCentro+Deportivo+Municipal+Luis+Aragon%C3%A9s!5e0!3m2!1ses!2ses!4v1495790688913'),
('OLIMPICO HORTALEZA', 'Hortaleza', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d97134.71234412311!2d-3.770785514047018!3d40.46509265202265!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd422e8d85e47845%3A0xa3f994afd6fa7484!2sOLIMPICO+HORTALEZA!5e0!3m2!1ses!2ses!4v1495790898850'),
('Forus Chamartín', 'Chamartín', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12143.617730991875!2d-3.6826412735652436!3d40.4552521197681!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd4229244218b3f3%3A0xf29356fe8482cc17!2sForus+Chamart%C3%ADn!5e0!3m2!1ses!2ses!4v1495790952289'),
('Polideportivo Municipal Pradillo', 'Chamartín', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12143.617730991875!2d-3.6826412735652436!3d40.4552521197681!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd4228d0b16ba4e9%3A0x8200abb2c4b28b8e!2sPolideportivo+Municipal+Pradillo!5e0!3m2!1ses!2ses!4v1495790983421'),
('Centro Deportivo Municipal Concepción', 'Ciudad Lineal', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d48574.474982580316!2d-3.708906116622414!3d40.45524650566729!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd422f3ed0f2f3f5%3A0x5f4b217e3d724162!2sCentro+Deportivo+Municipal+Concepci%C3%B3n!5e0!3m2!1ses!2ses!4v1495791048813'),
('Centro Deportivo Municipal de Pueblo Nuevo', 'Ciudad Lineal', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d48574.474982580316!2d-3.708906116622414!3d40.45524650566729!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd422f6be177a2af%3A0x9a8f4e6253a0892e!2sCentro+Deportivo+Municipal+de+Pueblo+Nuevo!5e0!3m2!1ses!2ses!4v1495791081866'),
('Centro Deportivo Municipal La Almudena', 'Ciudad Lineal', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d48574.474982580316!2d-3.708906116622414!3d40.45524650566729!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd422f64af3cfb5b%3A0x4827c4503901c660!2sCentro+Deportivo+Municipal+La+Almudena!5e0!3m2!1ses!2ses!4v1495791116381'),
('Instalaciones Deportivas Canal de Isabel II', 'Chamberí', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12146.920234554183!2d-3.713659073577159!3d40.43697586980181!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd42285849a11ec1%3A0xaf9a69a6d0b60a2f!2sInstalaciones+Deportivas+Canal+de+Isabel+II!5e0!3m2!1ses!2ses!4v1495791158588'),
('Colegio Chamberí - Polideportivo', 'Chamberí', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12146.920234554183!2d-3.713659073577159!3d40.43697586980181!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd42288d2bc745f5%3A0xc11d923db9d2a0b2!2sColegio+Chamber%C3%AD+-+Polideportivo!5e0!3m2!1ses!2ses!4v1495791251021'),
('Centro Deportivo Municipal Gimnasio Moscardó', 'Barrio de Salamanca', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d48587.684994896306!2d-3.739923916813993!3d40.43697025627503!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd4228c86bc1ff4b%3A0x752faedb9e25a8c4!2sCentro+Deportivo+Municipal+Gimnasio+Moscard%C3%B3!5e0!3m2!1ses!2ses!4v1495791310082'),
('Centro Deportivo Municipal Fuente del Berro', 'Barrio de Salamanca', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d48587.684994896306!2d-3.739923916813993!3d40.43697025627503!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd4228ac56b4305f%3A0x5d40433ab51169c3!2sCentro+Deportivo+Municipal+Fuente+del+Berro!5e0!3m2!1ses!2ses!4v1495791385695'),
('C. D. M. Viding Alcántara', 'Barrio de Salamanca', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d48587.684994896306!2d-3.739923916813993!3d40.43697025627503!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x7c9c100c82993d2!2sC.+D.+M.+Viding+Alc%C3%A1ntara!5e0!3m2!1ses!2ses!4v1495791451582'),
('Centro Deportivo Municipal San Blas', 'San Blas', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3037.112367205747!2d-3.616690585266431!3d40.428510679363804!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd422f9a83a113e7%3A0xaabcdd0edcde3e8a!2sCentro+Deportivo+Municipal+San+Blas!5e0!3m2!1ses!2ses!4v1495791490825'),
('Centro Deportivo Municipal Pepu Hernández', 'San Blas', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1805.8835781047296!2d-3.606913348825837!3d40.42829616382!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x52672ff9698d79e4!2sCentro+Deportivo+Municipal+Pepu+Hern%C3%A1ndez!5e0!3m2!1ses!2ses!4v1495791853475'),
('Centro Deportivo Municipal de Barajas', 'Barajas', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d97086.7311448966!2d-3.6740844599652194!3d40.49825985863146!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd422e2e9a005911%3A0x8e1b35c8244b0bb9!2sCentro+Deportivo+Municipal+de+Barajas!5e0!3m2!1ses!2ses!4v1495792004423'),
('Polideportivo Jose Caballero', 'Barajas', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d97086.7311448966!2d-3.6740844599652194!3d40.49825985863146!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd422daadeeaaaab%3A0x62360f3001e51015!2sPolideportivo+Jose+Caballero!5e0!3m2!1ses!2ses!4v1495792029050'),
('Pabellón Villa de Madrid', 'Barajas', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d97086.7311448966!2d-3.6740844599652194!3d40.49825985863146!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd422e2dda4171d9%3A0xa1c6afebaf552a55!2sPabell%C3%B3n+Villa+de+Madrid!5e0!3m2!1ses!2ses!4v1495792060286'),
('Centro Deportivo Municipal Escuelas de San Antón', 'Centro', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d97086.79233358259!2d-3.674084647966178!3d40.4982175760128!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd422888bd33ed83%3A0x7aff58d6b4a90943!2sCentro+Deportivo+Municipal+Escuelas+de+San+Ant%C3%B3n!5e0!3m2!1ses!2ses!4v1495792241751'),
('Centro Deportivo Municipal La Chopera', 'Centro', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d97148.7451357044!2d-3.726269706559929!3d40.45538817126448!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x74b4ffc8efaffc9c!2sCentro+Deportivo+Municipal+La+Chopera!5e0!3m2!1ses!2ses!4v1495792354813'),
('Centro Deportivo Municipal Daoiz y Velarde', 'Retiro', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12151.826209870193!2d-3.6891730105319986!3d40.40981327510508!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd422610d123e7dd%3A0x3a572cc3da2ad751!2sCentro+Deportivo+Municipal+Daoiz+y+Velarde+1!5e0!3m2!1ses!2ses!4v1495791692536'),
('Centro Deportivo Municipal PEÑUELAS', 'Arganzuela', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d97218.02029377558!2d-3.7230425638391065!3d40.40745214468209!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd4227cc8daa44b3%3A0xe01ace9bf3702ae!2sCentro+Deportivo+Municipal+PE%C3%91UELAS!5e0!3m2!1ses!2ses!4v1495791546383'),
('Centro Deportivo Municipal la Elipa', 'Moratalaz', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d10218.804284250487!2d-3.660364702407545!3d40.40732905299275!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x2150f3604568e6e8!2sCentro+Deportivo+Municipal+la+Elipa!5e0!3m2!1ses!2ses!4v1495791368206'),
('Centro Deportivo Municipal Moratalaz', 'Moratalaz', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3038.4744061971323!2d-3.633603784377862!3d40.39834006468124!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd422597f4948629%3A0xe706348be1a34f3!2sCentro+Deportivo+Municipal+Moratalaz!5e0!3m2!1ses!2ses!4v1495791245927'),
('Polideportivo Municipal Raúl González', 'Villaverde', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24326.76169937175!2d-3.7023694604492596!3d40.3457796!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd4226c641ba93d9%3A0xb96e6eb20e85df65!2sPolideportivo+Municipal+Ra%C3%BAl+Gonz%C3%A1lez!5e0!3m2!1ses!2ses!4v1495791170186'),
('Polideportivo Plata y Castañar', 'Villaverde', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24315.00510568323!2d-3.7200552957500714!3d40.37836654885248!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd42273ddc650495%3A0x5b1b3929c5e401e5!2sPolideportivo+Plata+y+Casta%C3%B1ar!5e0!3m2!1ses!2ses!4v1495791129796'),
('Polideportivo Municipal el Espinillo de Madrid', 'Villaverde', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24315.027749809367!2d-3.7200552910639697!3d40.37830380477195!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd4226ebeba119ff%3A0x9dd6a46c43416c7f!2sPolideportivo+Municipal+el+Espinillo+de+Madrid!5e0!3m2!1ses!2ses!4v1495791083170'),
('Centro Deportivo Municipal Miguel Guillén Prim Madrid', 'Villa de Vallecas', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d48628.373385204395!2d-3.6861233828056204!3d40.380634216336645!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x9e843b3bfd68dc35!2sCentro+Deportivo+Municipal+Miguel+Guill%C3%A9n+Prim+Madrid!5e0!3m2!1ses!2ses!4v1495790225546'),
('Polideportivo palomeras', 'Villa de Vallecas', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24311.904757798304!2d-3.664435326993062!3d40.38695646780276!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd4225b045e2bc9f%3A0x9abb987b48a0700c!2sPolideportivo+palomeras!5e0!3m2!1ses!2ses!4v1495789992916'),
('Polideportivo Municipal Alberto García', 'Puente de Vallecas', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d48628.373385204395!2d-3.6861233828056204!3d40.380634216336645!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xaee74a54855639f4!2sPolideportivo+Municipal+Alberto+Garc%C3%ADa!5e0!3m2!1ses!2ses!4v1495790149797'),
('Centro Deportivo Municipal Puente de Vallecas', 'Puente de Vallecas', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24311.857850946715!2d-3.664158776992873!3d40.38708641773869!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd4225df1bcacbd7%3A0x1401dbe40972632f!2sCentro+Deportivo+Municipal+Puente+de+Vallecas!5e0!3m2!1ses!2ses!4v1495789922433'),
('Centro Deportivo Municipal Vicálvaro', 'Vicálvaro', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4296.4127762724875!2d-3.6038840590112167!3d40.40834992494303!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x13a0c89c2115f8b0!2sCentro+Deportivo+Municipal+Vic%C3%A1lvaro!5e0!3m2!1ses!2ses!4v1495790328258'),
('Pabellon Antonio Mata', 'Vicálvaro', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12150.087445953508!2d-3.615583359357509!3d40.419441906009126!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd422f90857e8f99%3A0x5ce8e7d331bfeff1!2sPabellon+Antonio+Mata!5e0!3m2!1ses!2ses!4v1495790457231'),
('Complejo Deportivo Municipal de la Mina', 'Carabanchel', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24316.270012677316!2d-3.7580718270104914!3d40.37486152376269!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd41882649a69ddd%3A0x7d1b246c2c0b54f3!2sComplejo+Deportivo+Municipal+de+la+Mina!5e0!3m2!1ses!2ses!4v1495790549000'),
('Duet Sports Francisco Fernández Ochoa', 'Carabanchel', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24316.24736892687!2d-3.7580718316967814!3d40.37492427123543!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd42277dbec49961%3A0x78d8d0c82fc63b8f!2sDuet+Sports+Francisco+Fern%C3%A1ndez+Ochoa!5e0!3m2!1ses!2ses!4v1495790627168'),
('Centro Deportivo Amorós', 'Carabanchel', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24316.22472516961!2d-3.7580718363830616!3d40.37498701864633!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd418832c2cf3205%3A0xba1fbbf5a969a94b!2sCentro+Deportivo+Amor%C3%B3s!5e0!3m2!1ses!2ses!4v1495790688230'),
('Instalación Deportiva Municipal Aluche', 'Latina', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24313.262230006585!2d-3.7897672604491732!3d40.38319560000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd41885ae7783827%3A0x6d18f08a0faa16a6!2sInstalaci%C3%B3n+Deportiva+Municipal+Aluche!5e0!3m2!1ses!2ses!4v1495790770735'),
('Polideportivo Gallur', 'Latina', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24316.179437634484!2d-3.7580718457556217!3d40.375112513282616!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd4227f1a8868c93%3A0x92271f91f1c95bbc!2sPolideportivo+Gallur!5e0!3m2!1ses!2ses!4v1495790817002'),
('Polideportivo Municipal De Orcasitas', 'Usera', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d97252.84534654276!2d-3.842297390882475!3d40.38333660498531!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd4227b08d161ad5%3A0x60d4d3d361a1f967!2sPolideportivo+Municipal+De+Orcasitas!5e0!3m2!1ses!2ses!4v1495790889626'),
('Pabellón Jesús Rollan', 'Usera', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24315.07303804091!2d-3.720055281691867!3d40.3781783164254!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd4227a662e47bef%3A0xf8ec9fd386bbeb0c!2sPabell%C3%B3n+Jes%C3%BAs+Rollan!5e0!3m2!1ses!2ses!4v1495790951239'),
('Polideportivo Municipal SAN FERMÍN', 'Usera', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24315.05039392856!2d-3.7200552863779186!3d40.37824106062959!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd42265770835143%3A0xc1289cef502cc3c7!2sPolideportivo+Municipal+SAN+FERM%C3%8DN!5e0!3m2!1ses!2ses!4v1495790994234');

CREATE TABLE `pachanga`.`partidos` (
  `id` int(20) NOT NULL AUTO_INCREMENT
  , `nombre` VARCHAR(40) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL
  , `polideportivo` VARCHAR(150) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL
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
(NULL, 'Centro Deportivo Municipal Marqués de Samaranch', '2017-05-26 06:37:00', 'riusqui', NULL, NULL),
(NULL, 'Centro Deportivo Municipal Marqués de Samaranch', '2017-05-27 09:37:00', 'axwel', NULL, NULL)
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
