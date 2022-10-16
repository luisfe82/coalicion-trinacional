-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-09-2022 a las 04:55:49
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `trinacional`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articulo`
--

CREATE TABLE `articulo` (
  `idarticulo` int(11) NOT NULL,
  `fecha` date DEFAULT NULL,
  `categoria` varchar(100) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `encategoria` varchar(100) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `titulo` varchar(500) COLLATE utf8_spanish2_ci NOT NULL,
  `entitulo` varchar(500) COLLATE utf8_spanish2_ci NOT NULL,
  `autor` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `enautor` varchar(100) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `pais` varchar(50) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `enpais` varchar(50) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `contcorto` varchar(1000) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `encontcorto` varchar(1000) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `contlargo` varchar(3000) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `encontlargo` varchar(3000) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `imagen` varchar(100) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `imagenbarner` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `condicion` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `articulo`
--

INSERT INTO `articulo` (`idarticulo`, `fecha`, `categoria`, `encategoria`, `titulo`, `entitulo`, `autor`, `enautor`, `pais`, `enpais`, `contcorto`, `encontcorto`, `contlargo`, `encontlargo`, `imagen`, `imagenbarner`, `condicion`) VALUES
(3, '2022-09-10', 'Conferencias', 'Conferences', 'Clausura de la Conferencia Nacional de la Sección Mexicana de la Coalición Trinacional en Defensa de la Educación Pública.', 'Clausura de la Conferencia Nacional de la Sección Mexicana de la Coalición Trinacional en Defensa de la Educación Pública.', 'Coalición trinacional', 'Coalición trinacional', 'México', 'Mexico', 'Tras una jornada ardua de discusión y exposición de planteamientos políticos en torno a la política educativa del gobierno actual y ante una Coyuntura tan complicada a nivel internacional, la sección mexicana de la Coalición cerro está tarde las propuestas y tareas que llevará a la XV Conferencia Trinacional en Defensa de la Educación Púbica, a realizarse en Oaxaca, México los días 7, 8 y 9 de octubre de 2022.', 'Tras una jornada ardua de discusión y exposición de planteamientos políticos en torno a la política educativa del gobierno actual y ante una Coyuntura tan complicada a nivel internacional, la sección mexicana de la Coalición cerro está tarde las propuestas y tareas que llevará a la XV Conferencia Trinacional en Defensa de la Educación Púbica, a realizarse en Oaxaca, México los días 7, 8 y 9 de octubre de 2022.', '<p class=\"display-6\">Hacia la XV Conferencia Trinacional (México, Estados Unidos, Canadá).</p><br>        <p class=\"lead\">        &nbsp;&nbsp;Tras una jornada ardua de discusión y exposición de planteamientos políticos en torno a la política educativa del gobierno actual y ante una Coyuntura tan complicada a nivel internacional, la sección mexicana de la Coalición cerro está tarde las propuestas y tareas que llevará a la XV Conferencia Trinacional en Defensa de la Educación Púbica, a realizarse en Oaxaca, México los días 7, 8 y 9 de octubre de 2022.        <br><br>        <a href=\"conf-nacional.php\"><span class=\"lead text-terciario\">>>Enlace para ver todo el evento y su organización<<</span></a>        </p>', '<p class=\"display-6\">Hacia la XV Conferencia Trinacional (México, Estados Unidos, Canadá).</p><br>        <p class=\"lead\">        &nbsp;&nbsp;Tras una jornada ardua de discusión y exposición de planteamientos políticos en torno a la política educativa del gobierno actual y ante una Coyuntura tan complicada a nivel internacional, la sección mexicana de la Coalición cerro está tarde las propuestas y tareas que llevará a la XV Conferencia Trinacional en Defensa de la Educación Púbica, a realizarse en Oaxaca, México los días 7, 8 y 9 de octubre de 2022.        <br><br>        <a href=\"conf-nacional.php\"><span class=\"lead text-terciario\">>>Enlace para ver todo el evento y su organización<<</span></a>        </p>', '1663791448.jpg', '1663791448.jpg', 1),
(4, '2022-09-01', 'Conferencias', 'Conferences', 'Conferencia Nacional de la Sección Mexicana de la Coalición Trinacional en Defensa de la Educación Pública.', 'Conferencia Nacional de la Sección Mexicana de la Coalición Trinacional en Defensa de la Educación Pública.', 'Coalición trinacional', 'Coalición trinacional', 'México', 'Mexico', 'A las organizaciones sindicales, a los profesores, investigadores, estudiantes, activistas e interesados en defensa de la educación pública como un derecho social a participar en la Conferencia Nacional en Defensa de la Educación Pública 2022,se llevará a cabo del viernes 9 al sabado 10 de septiembre 2022', 'A las organizaciones sindicales, a los profesores, investigadores, estudiantes, activistas e interesados en defensa de la educación pública como un derecho social a participar en la Conferencia Nacional en Defensa de la Educación Pública 2022,se llevará a cabo del viernes 9 al sabado 10 de septiembre 2022', '<p class=\"display-6\">Hacia la XV Conferencia Trinacional (México, Estados Unidos, Canadá).</p><br>        <p class=\"lead\">        &nbsp;&nbsp;Los sistemas educativos en el mundo han sufrido profundos estragos a consecuencia del cierre de escuelas y el confinamiento producto del COVID-19. Para muchos estudiantes no sólo representó una interrupción temporal en su educación sino un final abrupto para la misma, al incorporarse al trabajo, perder a sus padres o tutores o simplemente no tener las condiciones suficientes para ponerse al corriente en sus aprendizajes. Esta situación ha transgredido el tejido social y educativo afectando a la educación pública en el mundo, y la educación en México no ha sido la excepción.         <br><br>        &nbsp;&nbsp;Mientras tanto los trabajadores de la educación sufrieron transformaciones múltiples en sus condiciones de trabajo y; su práctica docente y profesional, mientras que el aprendizaje en línea exacerbó las desigualdades en educación. Nuestro gobierno no contaba con las políticas, la infraestructura ni los recursos necesarios para desarrollar el aprendizaje en línea de manera que se garantizara que todos los niños y las niñas, jóvenes y universitarios pudieran participar en igualdad de condiciones.          <br><br>        &nbsp;&nbsp;Poco a poco comienza a estabilizarse la pandemia y, en consecuencia, comienza la reapertura de las escuelas y centros educativos a diferentes niveles, no obstante, esta reapertura no deshará el daño provocado en la educación, ni garantizará que todos los niños y jóvenes regresen a la escuela. Puesto que, muchos problemas que observamos hoy en el sector educativo son preexistentes a ella; la vulnerabilidad a la que se enfrentan los niños, familias y comunidades de bajos ingresos, la desigual cobertura en educación, la discriminación y exclusión por raza, clase y género, la precariedad salarial y de condiciones de trabajo de los docentes, entre muchos otros aspectos que durante años hemos denunciado desde la Coalición Trinacional en Defensa de la Educación Pública.        &nbsp;&nbsp;Ante este panorama consideramos necesaria una reflexión que nos permita identificar cuáles son los estragos que la pandemia ha ocasionado en la educación pública en México, así como identificar las acciones indispensables para superar los problemas provocados por ella e identificar las alternativas para reconstruir a las comunidades educativas que han sido afectadas por el distanciamiento social y el auto-centramiento provocado por el confinamiento; al mismo tiempo, necesitamos recuperar las demandas en defensa de la educación pública que apuntan a exigir al gobierno mexicano el cumplimiento de sus responsabilidades como garante del derecho a la educación; por ello:           <br><br>        </p>        <p class=\"display-6\"><b>Convocamos.</b></p><br>        <p class=\"lead\">        &nbsp;&nbsp;A las organizaciones sindicales, a los profesores, investigadores, estudiantes, activistas e interesados en', '<p class=\"display-6\">Hacia la XV Conferencia Trinacional (México, Estados Unidos, Canadá).</p><br>        <p class=\"lead\">        &nbsp;&nbsp;Los sistemas educativos en el mundo han sufrido profundos estragos a consecuencia del cierre de escuelas y el confinamiento producto del COVID-19. Para muchos estudiantes no sólo representó una interrupción temporal en su educación sino un final abrupto para la misma, al incorporarse al trabajo, perder a sus padres o tutores o simplemente no tener las condiciones suficientes para ponerse al corriente en sus aprendizajes. Esta situación ha transgredido el tejido social y educativo afectando a la educación pública en el mundo, y la educación en México no ha sido la excepción.         <br><br>        &nbsp;&nbsp;Mientras tanto los trabajadores de la educación sufrieron transformaciones múltiples en sus condiciones de trabajo y; su práctica docente y profesional, mientras que el aprendizaje en línea exacerbó las desigualdades en educación. Nuestro gobierno no contaba con las políticas, la infraestructura ni los recursos necesarios para desarrollar el aprendizaje en línea de manera que se garantizara que todos los niños y las niñas, jóvenes y universitarios pudieran participar en igualdad de condiciones.          <br><br>        &nbsp;&nbsp;Poco a poco comienza a estabilizarse la pandemia y, en consecuencia, comienza la reapertura de las escuelas y centros educativos a diferentes niveles, no obstante, esta reapertura no deshará el daño provocado en la educación, ni garantizará que todos los niños y jóvenes regresen a la escuela. Puesto que, muchos problemas que observamos hoy en el sector educativo son preexistentes a ella; la vulnerabilidad a la que se enfrentan los niños, familias y comunidades de bajos ingresos, la desigual cobertura en educación, la discriminación y exclusión por raza, clase y género, la precariedad salarial y de condiciones de trabajo de los docentes, entre muchos otros aspectos que durante años hemos denunciado desde la Coalición Trinacional en Defensa de la Educación Pública.        &nbsp;&nbsp;Ante este panorama consideramos necesaria una reflexión que nos permita identificar cuáles son los estragos que la pandemia ha ocasionado en la educación pública en México, así como identificar las acciones indispensables para superar los problemas provocados por ella e identificar las alternativas para reconstruir a las comunidades educativas que han sido afectadas por el distanciamiento social y el auto-centramiento provocado por el confinamiento; al mismo tiempo, necesitamos recuperar las demandas en defensa de la educación pública que apuntan a exigir al gobierno mexicano el cumplimiento de sus responsabilidades como garante del derecho a la educación; por ello:           <br><br>        </p>        <p class=\"display-6\"><b>Convocamos.</b></p><br>        <p class=\"lead\">        &nbsp;&nbsp;A las organizaciones sindicales, a los profesores, investigadores, estudiantes, activistas e interesados en', '1663800748.png', '1663800748.png', 1),
(5, '2022-06-16', 'Acciones', 'Actions', 'Solidaridad con la huelga del SUTIEMS', 'Solidaridad con la huelga del SUTIEMS', 'Coalición trinacional', 'Coalición trinacional', 'México', 'Mexico', 'Compartimos la carta de Solidaridad con la huelga del SUTIEMS, que enviamos al periódico La Jornada para su publicación.', 'Compartimos la carta de Solidaridad con la huelga del SUTIEMS, que enviamos al periódico La Jornada para su publicación.', '<p class=\"lead\">La Coalición Trinacional Respalda al Sutiems        <br>        &nbsp;&nbsp;Reconocemos la importancia que el gobierno de la capital otorga al modelo del Instituto de Educación Media Superior de la Ciudad de México (IEMS), al inaugurar en los últimos meses nuevos planteles y ampliar la matrícula para un sector de los jóvenes que requieren de mayor atención debido a sus condiciones socioeconómicas.        <br><br>        &nbsp;&nbsp;Lamentamos que a esa ampliación no corresponda un presupuesto para el funcionamiento y mejoramiento del enseñanza-aprendizaje. Sabemos del compromiso para establecer mejores condiciones de trabajo docente y administrativo en las instituciones educativas de la ciudad, particularmente las que dependen de su gestión y asignación presupuestal, en contraste a lo que sucede en otros sistemas de educación media superior, incluyendo los de la UNAM, donde prevalece el pago por hora pizarrón, eventualidad del empleo, largas jornadas laborales y salarios indignos.        <br><br>        &nbsp;&nbsp;Confiamos en la voluntad política de Claudia Sheinbaum para resolver las demandas, concretar el compromiso presidencial de aumento salarial por encima de la inflación e impulsar el modelo alternativo del IEMS, conquista de la izquierda en nuestro país.        Nuestra solidaridad con la lucha del Sutiems, nos adherimos a su consigna \"Por educación y trabajo dignos\".        <br><br>        &nbsp;&nbsp;María de la Luz Arriaga</p>', '<p class=\"lead\">La Coalición Trinacional Respalda al Sutiems        <br>        &nbsp;&nbsp;Reconocemos la importancia que el gobierno de la capital otorga al modelo del Instituto de Educación Media Superior de la Ciudad de México (IEMS), al inaugurar en los últimos meses nuevos planteles y ampliar la matrícula para un sector de los jóvenes que requieren de mayor atención debido a sus condiciones socioeconómicas.        <br><br>        &nbsp;&nbsp;Lamentamos que a esa ampliación no corresponda un presupuesto para el funcionamiento y mejoramiento del enseñanza-aprendizaje. Sabemos del compromiso para establecer mejores condiciones de trabajo docente y administrativo en las instituciones educativas de la ciudad, particularmente las que dependen de su gestión y asignación presupuestal, en contraste a lo que sucede en otros sistemas de educación media superior, incluyendo los de la UNAM, donde prevalece el pago por hora pizarrón, eventualidad del empleo, largas jornadas laborales y salarios indignos.        <br><br>        &nbsp;&nbsp;Confiamos en la voluntad política de Claudia Sheinbaum para resolver las demandas, concretar el compromiso presidencial de aumento salarial por encima de la inflación e impulsar el modelo alternativo del IEMS, conquista de la izquierda en nuestro país.        Nuestra solidaridad con la lucha del Sutiems, nos adherimos a su consigna \"Por educación y trabajo dignos\".        <br><br>        &nbsp;&nbsp;María de la Luz Arriaga</p>', '1663800940.jpg', '1663800941.jpg', 1),
(6, '2022-06-12', 'Solidaridad', 'Solidarity', 'Dieron inicio las actividades en la Casa del Obrero Socialista Antonio Vital. COSAV', 'Dieron inicio las actividades en la Casa del Obrero Socialista Antonio Vital. COSAV', 'Coalición trinacional', 'Coalición trinacional', 'México', 'Mexico', 'El 10 de junio, realizamos el Foro Qué pasa en el sector Salud, en la casa ubicada en Antonio García Cubas 122 A en la Colonia obrera, que albergará , provisionalmente a la COSAV.', 'El 10 de junio, realizamos el Foro Qué pasa en el sector Salud, en la casa ubicada en Antonio García Cubas 122 A en la Colonia obrera, que albergará , provisionalmente a la COSAV.', '<p class=\"text-terciario lead\">Contribuir a la formación y apoyo para la organización democrática e independiente de las trabajadoras y los trabajadores mexicanos</p>        <p class=\"lead\">        &nbsp;&nbsp; Dieron inicio las actividades en la Casa del Obrero Socialista Antonio Vital. COSAV        El 10 de junio, realizamos el Foro Qué pasa en el sector Salud, en la casa ubicada en Antonio García Cubas 122 A en la Colonia obrera, que albergará , provisionalmente a la COSAV.        <br><br>        &nbsp;&nbsp;En los próximos días, daremos a conocer el programa de actividades para el semestre en curso y los invitamos a conocer el proyecto, accediendo al Facebook de la Alianza de trabajadores de la Salud y empleados públicos, al de la Coalición Trinacional en defensa de la educación, Sección Mexicana y al de José Antonio Vital Galicia, que aún está vigente.        <br><br>        &nbsp;&nbsp;También , si fuera de su interés , los invitamos a formar parte del Comité fundador de la Casa del Obrero Socialista Antonio Vital, como un espacio de apoyo, asesoría, educación, comunicación y cultura, Un centro de información , análisis y sistematización de experiencias y elaboración de propuestas, de recuperación de la memoria histórica de las luchas, para contribuir a la formación y apoyo para la organización democrática e independiente de las trabajadoras y los trabajadores mexicanos.        <br><br>        El correo electrónico es: <b> saludyrevolucion1818@gmail.com</b><br>        Teléfono: <b>55 5676 1789</b>        </p>', '<p class=\"text-terciario lead\">Contribuir a la formación y apoyo para la organización democrática e independiente de las trabajadoras y los trabajadores mexicanos</p>        <p class=\"lead\">        &nbsp;&nbsp; Dieron inicio las actividades en la Casa del Obrero Socialista Antonio Vital. COSAV        El 10 de junio, realizamos el Foro Qué pasa en el sector Salud, en la casa ubicada en Antonio García Cubas 122 A en la Colonia obrera, que albergará , provisionalmente a la COSAV.        <br><br>        &nbsp;&nbsp;En los próximos días, daremos a conocer el programa de actividades para el semestre en curso y los invitamos a conocer el proyecto, accediendo al Facebook de la Alianza de trabajadores de la Salud y empleados públicos, al de la Coalición Trinacional en defensa de la educación, Sección Mexicana y al de José Antonio Vital Galicia, que aún está vigente.        <br><br>        &nbsp;&nbsp;También , si fuera de su interés , los invitamos a formar parte del Comité fundador de la Casa del Obrero Socialista Antonio Vital, como un espacio de apoyo, asesoría, educación, comunicación y cultura, Un centro de información , análisis y sistematización de experiencias y elaboración de propuestas, de recuperación de la memoria histórica de las luchas, para contribuir a la formación y apoyo para la organización democrática e independiente de las trabajadoras y los trabajadores mexicanos.        <br><br>        El correo electrónico es: <b> saludyrevolucion1818@gmail.com</b><br>        Teléfono: <b>55 5676 1789</b>        </p>', '1663801038.jpg', '1663801038.jpg', 1),
(7, '2022-08-05', 'Conferencias', 'Conferences', 'XV Conferencia Trinacional en Defensa de la Educación Pública', 'XV Conferencia Trinacional en Defensa de la Educación Pública', 'Coalición trinacional', 'Coalición trinacional', 'México', 'Mexico', 'Próxima a celebrarse en el estado de Oaxaca durante los días 7, 8 y 9 de octubre de 2022, la quinceava edición de la Conferencia Trinacional en Defensa de la Educación Pública', 'Próxima a celebrarse en el estado de Oaxaca durante los días 7, 8 y 9 de octubre de 2022, la quinceava edición de la Conferencia Trinacional en Defensa de la Educación Pública', '<p class=\"text-muted lead\">México / Estados Unidos / Canadá</p>        <br>        <p class=\"lead\">        &nbsp;&nbsp;Próxima a celebrarse en el estado de Oaxaca durante los días 7, 8 y 9 de octubre de 2022, la quinceava edición de la Conferencia Trinacional en Defensa de la Educación Pública, tendrá lugar ante las múltiples preocupaciones que docentes, sindicalistas, investigadores, estudiantes y activistas dentro del sector educativo comparten. Dicho espacio dará lugar a la reflexión y dialogo, tanto de las problemáticas que se vienen profundizando desde antes de la pandemia, como aquellos que se derivan de las dinámicas sociales que la pandemia y su administración de parte de los Estados impusieron a las comunidades educativas.        <br><br>        &nbsp;&nbsp;Contexto bajo el cual diversas personalidades, organizaciones y comunidades educativas en Norteamérica estaremos compartiendo y deliberando las propuestas necesarias para recuperar o profundizar procesos comunitarios, que hoy son fundamentales para enfrentar el contexto que enfrente la educación pública como derecho social y humano.        <br><br>        &nbsp;&nbsp;En breve daremos a conocer la convocatoria y la información correspondiente para que quienes tengan interés puedan participar y acceder a las discusiones, reflexiones y propuestas producto de esta quinceava conferencia.        <br>        </p>', '<p class=\"text-muted lead\">México / Estados Unidos / Canadá</p>        <br>        <p class=\"lead\">        &nbsp;&nbsp;Próxima a celebrarse en el estado de Oaxaca durante los días 7, 8 y 9 de octubre de 2022, la quinceava edición de la Conferencia Trinacional en Defensa de la Educación Pública, tendrá lugar ante las múltiples preocupaciones que docentes, sindicalistas, investigadores, estudiantes y activistas dentro del sector educativo comparten. Dicho espacio dará lugar a la reflexión y dialogo, tanto de las problemáticas que se vienen profundizando desde antes de la pandemia, como aquellos que se derivan de las dinámicas sociales que la pandemia y su administración de parte de los Estados impusieron a las comunidades educativas.        <br><br>        &nbsp;&nbsp;Contexto bajo el cual diversas personalidades, organizaciones y comunidades educativas en Norteamérica estaremos compartiendo y deliberando las propuestas necesarias para recuperar o profundizar procesos comunitarios, que hoy son fundamentales para enfrentar el contexto que enfrente la educación pública como derecho social y humano.        <br><br>        &nbsp;&nbsp;En breve daremos a conocer la convocatoria y la información correspondiente para que quienes tengan interés puedan participar y acceder a las discusiones, reflexiones y propuestas producto de esta quinceava conferencia.        <br>        </p>', '1663801115.jpg', '1663801115.jpg', 1),
(8, '2022-07-05', 'Campañas', 'Forums', 'Coalición Trinacional en Defensa de la Educación da a conocer folleto en la ANR de la CNTE', 'Coalición Trinacional en Defensa de la Educación da a conocer folleto en la ANR de la CNTE', 'Coalición trinacional', 'Coalición trinacional', 'México', 'Mexico', 'folleto \"Entre transformaciones y continuidades en el derecho a la educación pública en tiempos de la #4T\"', 'folleto \"Entre transformaciones y continuidades en el derecho a la educación pública en tiempos de la #4T\"', '<p class=\"text-terciario lead\">\"Entre transformaciones y continuidades en el derecho a la educación pública en tiempos de la #4T\"</p><br>        <p class=\"lead\">        &nbsp;&nbsp;Una comisión de la sección mexicana de la Coalición Trinacional en Defensa de la Educación Pública se hizo presente durante la Asamblea Nacional Representativa de la CNTE, para dar un saludo a los trabajos y compartir el folleto \"Entre transformaciones y continuidades en el derecho a la educación pública en tiempos de la #4T\".En donde se han recopilado diversos materiales de reflexión y balance político sobre las diversas problemáticas presentes en el sector educativo.        <br><br>        &nbsp;&nbsp;Compartimos la invitación a asistir el próximo martes 13 de septiembre en la Facultad de Ciencias Políticas y Sociales - #FCPyS de la #UNAM, a la presentación del más reciente material de discusión y debate sobre la política educativa y el derecho a la #educación en el marco del gobierno actual.Este folleto es un esfuerzo por compilar materiales escritos por compañeras y compañeros que integran la Sección Mexicana de la Coalición Trinacional en Defensa de la Educación Pública.        <br><br>         Podrás adquirir el folleto durante la presentación o bien se puede descargar escaneando el código QR en el cartel.</p>', '<p class=\"text-terciario lead\">\"Entre transformaciones y continuidades en el derecho a la educación pública en tiempos de la #4T\"</p><br>        <p class=\"lead\">        &nbsp;&nbsp;Una comisión de la sección mexicana de la Coalición Trinacional en Defensa de la Educación Pública se hizo presente durante la Asamblea Nacional Representativa de la CNTE, para dar un saludo a los trabajos y compartir el folleto \"Entre transformaciones y continuidades en el derecho a la educación pública en tiempos de la #4T\".En donde se han recopilado diversos materiales de reflexión y balance político sobre las diversas problemáticas presentes en el sector educativo.        <br><br>        &nbsp;&nbsp;Compartimos la invitación a asistir el próximo martes 13 de septiembre en la Facultad de Ciencias Políticas y Sociales - #FCPyS de la #UNAM, a la presentación del más reciente material de discusión y debate sobre la política educativa y el derecho a la #educación en el marco del gobierno actual.Este folleto es un esfuerzo por compilar materiales escritos por compañeras y compañeros que integran la Sección Mexicana de la Coalición Trinacional en Defensa de la Educación Pública.        <br><br>         Podrás adquirir el folleto durante la presentación o bien se puede descargar escaneando el código QR en el cartel.</p>', '1663801235.jpg', '1663801235.jpg', 1),
(9, '2022-08-05', 'Foros', 'Forums', 'Foro Regreso a clases presenciales en el ciclo escolar 2023-1', 'Foro Regreso a clases presenciales en el ciclo escolar 2023-1', 'Coalición trinacional', 'Coalición trinacional', 'México', 'Mexico', 'Sabemos que es una necesidad pedagógica y de salud mental, reencontrarnos en las aulas y los auditorios, para desarrollar los procesos de enseñanza - aprendizaje, de investigación, de difusión, de extensión', 'Sabemos que es una necesidad pedagógica y de salud mental, reencontrarnos en las aulas y los auditorios, para desarrollar los procesos de enseñanza - aprendizaje, de investigación, de difusión, de extensión', '<p class=\"text-terciario lead\">Las académicas y los académicos de la UNAM</p><br>        <p class=\"lead\">        &nbsp;&nbsp;Como acostumbran las autoridades universitarias, sin consulta alguna, han ordenado el regreso a clases presenciales en todos los niveles educativos y en todos los planteles universitarios.        <br><br>        &nbsp;&nbsp;Las académicas y los académicos de la UNAM, sabemos que es una necesidad pedagógica y de salud mental, reencontrarnos en las aulas y los auditorios, para desarrollar los procesos de enseñanza - aprendizaje, de investigación, de difusión, de extensión.         <br><br>        &nbsp;&nbsp;Sin embargo, muchas y muchos consideramos que es indispensable realizar un ejercicio de evaluación de lo que hemos vivido en la docencia durante la pandemia. Valorar la educación a través de plataformas, sus impactos en la enseñanza, en la intensificación y el alargamiento de nuestras jornadas laborales, así como las afectaciones de las condiciones de estudio de las y los jóvenes.        <br><br>        &nbsp;&nbsp;La Universidad tiene la obligación, de que los expertos de salud pública con que contamos hablen con las comunidades y nos expliquen la situación actual del COVID, en todas y cada una de las escuelas.</p>', '<p class=\"text-terciario lead\">Las académicas y los académicos de la UNAM</p><br>        <p class=\"lead\">        &nbsp;&nbsp;Como acostumbran las autoridades universitarias, sin consulta alguna, han ordenado el regreso a clases presenciales en todos los niveles educativos y en todos los planteles universitarios.        <br><br>        &nbsp;&nbsp;Las académicas y los académicos de la UNAM, sabemos que es una necesidad pedagógica y de salud mental, reencontrarnos en las aulas y los auditorios, para desarrollar los procesos de enseñanza - aprendizaje, de investigación, de difusión, de extensión.         <br><br>        &nbsp;&nbsp;Sin embargo, muchas y muchos consideramos que es indispensable realizar un ejercicio de evaluación de lo que hemos vivido en la docencia durante la pandemia. Valorar la educación a través de plataformas, sus impactos en la enseñanza, en la intensificación y el alargamiento de nuestras jornadas laborales, así como las afectaciones de las condiciones de estudio de las y los jóvenes.        <br><br>        &nbsp;&nbsp;La Universidad tiene la obligación, de que los expertos de salud pública con que contamos hablen con las comunidades y nos expliquen la situación actual del COVID, en todas y cada una de las escuelas.</p>', '1663801338.jpg', '1663801338.jpg', 1),
(10, '2022-03-02', 'Colaboraciones', 'Collaborations', 'Día Internacional de la Mujer 2022', 'Día Internacional de la Mujer 2022', 'Coalición trinacional', 'Coalición trinacional', 'México', 'Mexico', 'Igualdad de género hoy para un mañana sostenible', 'Igualdad de género hoy para un mañana sostenible', '<p class=\"lead\">        &nbsp;&nbsp; El tema del Día Internacional de la Mujer de hoy 8 de marzo de 2022, Igualdad de género hoy para un mañana sostenible, reconoce la contribución de las mujeres y las niñas de todo el mundo, que están liderando los esfuerzos de respuesta, mitigación y adaptación al cambio climático para construir un futuro más sostenible para todas las personas.        <br><br>        &nbsp;&nbsp;Potenciar la igualdad de género en el contexto de la crisis climática y la reducción del riesgo de desastres es uno de los mayores desafíos mundiales del siglo XXI. Los aspectos relacionados con el cambio climático y la sostenibilidad han tenido y seguirán teniendo consecuencias graves y duraderas en nuestro desarrollo social, económico y medioambiental.        <br><br>        &nbsp;&nbsp;Las personas más vulnerables y marginadas son quienes sufren sus efectos más nefastos. Cada vez es más evidente que las mujeres son más vulnerables al impacto del cambio climático que los hombres, ya que constituyen la mayoría de la población pobre del mundo y son más dependientes de los recursos naturales que están bajo la amenaza del cambio climático.        <br><br>        &nbsp;&nbsp;En el 2021, en el Foro Generación Igualdad, se puso en marcha la Coalición para la Acción sobre la acción feminista por la justicia climática, que reúne a Gobiernos, a empresas del sector privado, al sistema de las Naciones Unidas y a la sociedad civil con el fin de adoptar compromisos concretos para justicia climática. Este Día Internacional de la Mujer, la Coalición para la Acción está impulsando la inversión y la acción global centradas en financiar soluciones climáticas con justicia de género, aumentar el liderazgo de las mujeres en la economía verde, mejorar la resiliencia de las mujeres y las niñas a los desastres y los impactos climáticos e incrementar el uso de los datos sobre igualdad de género y clima.        <br><br>        <h5>Cronología de la conmemoración</h5>        <br><br>        &nbsp;&nbsp;La primera conmemoración se realizó el 19 de marzo de 1911 en Europa: Alemania, Austria, Dinamarca y Suiza; desde entonces se ha extendido a otros países y continentes.        <br><br>        &nbsp;&nbsp;Después de la revolución de 1917 ocurrida en la Unión Soviética, en 1922 la dirigente bolchevique Alexandra Kollontai (que desde su nombramiento como comisaria del Pueblo para la Asistencia Pública logró el voto para la mujer) consiguió que el 8 de marzo se considerase fiesta oficial en la Unión Soviética, aunque laborable. El 8 de mayo de 1965 por decreto del Sóviet Supremo de la Unión Soviética se declaró no laborable el Día Internacional de la Mujer.        <br><br>        &nbsp;&nbsp;Desde su aprobación oficial por la Unión Soviética la fiesta comenzó a celebrarse en otros muchos países. En China se celebra desde 1922. En España se celebró por primera vez en 1936.        <br><br>        &nbsp;&nbsp;En 1975, la ONU celebró el Año Internacional de la Mujer. En di', '<p class=\"lead\">        &nbsp;&nbsp; El tema del Día Internacional de la Mujer de hoy 8 de marzo de 2022, Igualdad de género hoy para un mañana sostenible, reconoce la contribución de las mujeres y las niñas de todo el mundo, que están liderando los esfuerzos de respuesta, mitigación y adaptación al cambio climático para construir un futuro más sostenible para todas las personas.        <br><br>        &nbsp;&nbsp;Potenciar la igualdad de género en el contexto de la crisis climática y la reducción del riesgo de desastres es uno de los mayores desafíos mundiales del siglo XXI. Los aspectos relacionados con el cambio climático y la sostenibilidad han tenido y seguirán teniendo consecuencias graves y duraderas en nuestro desarrollo social, económico y medioambiental.        <br><br>        &nbsp;&nbsp;Las personas más vulnerables y marginadas son quienes sufren sus efectos más nefastos. Cada vez es más evidente que las mujeres son más vulnerables al impacto del cambio climático que los hombres, ya que constituyen la mayoría de la población pobre del mundo y son más dependientes de los recursos naturales que están bajo la amenaza del cambio climático.        <br><br>        &nbsp;&nbsp;En el 2021, en el Foro Generación Igualdad, se puso en marcha la Coalición para la Acción sobre la acción feminista por la justicia climática, que reúne a Gobiernos, a empresas del sector privado, al sistema de las Naciones Unidas y a la sociedad civil con el fin de adoptar compromisos concretos para justicia climática. Este Día Internacional de la Mujer, la Coalición para la Acción está impulsando la inversión y la acción global centradas en financiar soluciones climáticas con justicia de género, aumentar el liderazgo de las mujeres en la economía verde, mejorar la resiliencia de las mujeres y las niñas a los desastres y los impactos climáticos e incrementar el uso de los datos sobre igualdad de género y clima.        <br><br>        <h5>Cronología de la conmemoración</h5>        <br><br>        &nbsp;&nbsp;La primera conmemoración se realizó el 19 de marzo de 1911 en Europa: Alemania, Austria, Dinamarca y Suiza; desde entonces se ha extendido a otros países y continentes.        <br><br>        &nbsp;&nbsp;Después de la revolución de 1917 ocurrida en la Unión Soviética, en 1922 la dirigente bolchevique Alexandra Kollontai (que desde su nombramiento como comisaria del Pueblo para la Asistencia Pública logró el voto para la mujer) consiguió que el 8 de marzo se considerase fiesta oficial en la Unión Soviética, aunque laborable. El 8 de mayo de 1965 por decreto del Sóviet Supremo de la Unión Soviética se declaró no laborable el Día Internacional de la Mujer.        <br><br>        &nbsp;&nbsp;Desde su aprobación oficial por la Unión Soviética la fiesta comenzó a celebrarse en otros muchos países. En China se celebra desde 1922. En España se celebró por primera vez en 1936.        <br><br>        &nbsp;&nbsp;En 1975, la ONU celebró el Año Internacional de la Mujer. En di', '1663801463.jpg', '1663801463.jpg', 1),
(11, '2021-11-10', 'Acciones', 'Actions', 'Presentación de Libro Educación', 'Presentación de Libro Educación', 'Coalición trinacional', 'Coalición trinacional', 'México', 'Mexico', 'La Coalición Trinacional en Defensa de la educación pública y el SUTIEMS invitan este sábado 13 de noviembre a la presentación del libro: Educación Pública, Neo-liberalismo y Profesores.', 'La Coalición Trinacional en Defensa de la educación pública y el SUTIEMS invitan este sábado 13 de noviembre a la presentación del libro: Educación Pública, Neo-liberalismo y Profesores.', '<p class=\"lead\">        &nbsp;&nbsp;La Coalición Trinacional en Defensa de la educación pública y el SUTIEMS invitan este sábado 13 de noviembre a la presentación del libro: Educación Pública, Neoliberalismo y Profesores.         <br><br>        &nbsp;&nbsp;Contaremos con la presencia del autor, quien es dirigente sindical de las y los trabajadores de la Educación en Ontario, Canadá.         <br><br>        &nbsp;&nbsp;La transmisión se llevará a cabo a través de la página de Facebook de la Coalición Trinacional y el canal de YouTube del SUTIEMS. Los esperamos.        <br><br>        &nbsp;&nbsp;El presente trabajo pretende aportar al análisis de la convicción social de que no existe relación entre neoliberalismo y globalización por un lado, y la tarea cotidiana de educar por otro, ya que en el interior de la misma conviven convicciones que remiten a las concepciones mismas de neoliberalismo, globalización, educación y Pedagogía. Éstas tienen un fondo de verdad parcial, gracias al trabajo que la ideología dominante1 realiza día a día, con la invalorable ayuda de los medios masivos de comunicación. Que sean verdades parciales ayuda a transformarlas en grandes desaciertos y obstáculos para comprender y transformar el mundo depredador en el que mal viven millones de personas en el mundo.        <br><br>        &nbsp;&nbsp;La tesis de la cual se parte es que el neoliberalismo, la globalización y la educación, son prácticas sociales que conforman una totalidad socio-político-económica y cultural no exenta de contradicciones. Estas últimas alientan y promueven tanto su legitimación como su superación. En otro orden, se considera probable que dicha superación cumpla su proceso en prácticas educativas en sentido amplio, y no tanto en el sentido restringido de educación al interior de las instituciones educativas. Esto parece obvio por ser las instituciones educativas la concreción de proyectos político-pedagógicos más direccionados que las prácticas educativas no formales que atraviesan la vida cotidiana. Lo planteado no es obstáculo para realizar el análisis hacia el interior de las instituciones educativas. Por el contrario, este ámbito exige ser estudiado, en el entendido de que siempre existe algún nivel de prácticas contra-hegemónicas de las que es necesario tomar conciencia para fortalecerlas en aras de la transformación, perspectiva pedagógica que convive con otras, más o menos conflictivamente. Puede entenderse a la Pedagogía como una pluralidad discursiva que da cuenta de estos fenómenos de diferentes maneras: al tiempo que se instala como discurso legitimador de lo existente y lo investiga descriptiva e incluso interpretativamente, construye una presencia crítica con prácticas de investigación también interpretativas pero con un propósito transformador, aunque éstas sean, a nuestro criterio, más escasas.        <br><br>        &nbsp;&nbsp;Interesa trabajar el tema particularmente con respecto a la formación docente tradicionalmente organizada p', '<p class=\"lead\">        &nbsp;&nbsp;La Coalición Trinacional en Defensa de la educación pública y el SUTIEMS invitan este sábado 13 de noviembre a la presentación del libro: Educación Pública, Neoliberalismo y Profesores.         <br><br>        &nbsp;&nbsp;Contaremos con la presencia del autor, quien es dirigente sindical de las y los trabajadores de la Educación en Ontario, Canadá.         <br><br>        &nbsp;&nbsp;La transmisión se llevará a cabo a través de la página de Facebook de la Coalición Trinacional y el canal de YouTube del SUTIEMS. Los esperamos.        <br><br>        &nbsp;&nbsp;El presente trabajo pretende aportar al análisis de la convicción social de que no existe relación entre neoliberalismo y globalización por un lado, y la tarea cotidiana de educar por otro, ya que en el interior de la misma conviven convicciones que remiten a las concepciones mismas de neoliberalismo, globalización, educación y Pedagogía. Éstas tienen un fondo de verdad parcial, gracias al trabajo que la ideología dominante1 realiza día a día, con la invalorable ayuda de los medios masivos de comunicación. Que sean verdades parciales ayuda a transformarlas en grandes desaciertos y obstáculos para comprender y transformar el mundo depredador en el que mal viven millones de personas en el mundo.        <br><br>        &nbsp;&nbsp;La tesis de la cual se parte es que el neoliberalismo, la globalización y la educación, son prácticas sociales que conforman una totalidad socio-político-económica y cultural no exenta de contradicciones. Estas últimas alientan y promueven tanto su legitimación como su superación. En otro orden, se considera probable que dicha superación cumpla su proceso en prácticas educativas en sentido amplio, y no tanto en el sentido restringido de educación al interior de las instituciones educativas. Esto parece obvio por ser las instituciones educativas la concreción de proyectos político-pedagógicos más direccionados que las prácticas educativas no formales que atraviesan la vida cotidiana. Lo planteado no es obstáculo para realizar el análisis hacia el interior de las instituciones educativas. Por el contrario, este ámbito exige ser estudiado, en el entendido de que siempre existe algún nivel de prácticas contra-hegemónicas de las que es necesario tomar conciencia para fortalecerlas en aras de la transformación, perspectiva pedagógica que convive con otras, más o menos conflictivamente. Puede entenderse a la Pedagogía como una pluralidad discursiva que da cuenta de estos fenómenos de diferentes maneras: al tiempo que se instala como discurso legitimador de lo existente y lo investiga descriptiva e incluso interpretativamente, construye una presencia crítica con prácticas de investigación también interpretativas pero con un propósito transformador, aunque éstas sean, a nuestro criterio, más escasas.        <br><br>        &nbsp;&nbsp;Interesa trabajar el tema particularmente con respecto a la formación docente tradicionalmente organizada p', '1663801583.jpg', '1663801583.jpg', 1),
(12, '2022-06-16', 'Campañas', 'Bells', 'Que la Educación virtual no te Desconecte Deshumanice', 'Que la Educación virtual no te Desconecte Deshumanice', 'Coalición trinacional', 'Coalición trinacional', 'México', 'Mexico', 'El 5 de octubre fue instituido por la UNESCO como el día mundial de los docentes,para reconocer la labor de maestras y maestros.', 'El 5 de octubre fue instituido por la UNESCO como el día mundial de los docentes,para reconocer la labor de maestras y maestros.', '<p class=\"lead\">RECONOCIMIENTO A LABOR DOCENTE        <br>        &nbsp;&nbsp;El 5 de octubre fue instituido por la UNESCO como el día mundial de los docentes, para reconocer la labor de maestras y maestros. En el momento crítico para la educación y la profesión de maestros y maestras que vivimos por la masificación de la educación virtualizada que han impuesto los gobiernos en el mundo, nos unimos a las voces de millones de docentes- de educación básica, media superior y superior- que reclamamos condiciones dignas de trabajo y el respeto a nuestro derecho a ser considerados en las decisiones de política educativa que adopten las autoridades.        <br><br>        &nbsp;&nbsp; En el marco de esta celebración, acudiremos el jueves 8 de octubre a las 12hs a Palacio Nacional a reiterar nuestras demandas de apertura de foros de discusión sobre la educación que necesitamos en la nueva realidad.        <br><br>        &nbsp;&nbsp; Que la SEP, dé a conocer el programa estratégico de mejora de infraestructura y garantía sanitaria de las instalaciones escolares para el regreso presencial a clases cuando así lo permitan las autoridades de Salud.        Acceso universal y gratuito a internet, como un bien público.        <br><br>        &nbsp;&nbsp; Condiciones de trabajo dignos, solicitamos se detenga el proceso de precarización laboral puesto en marcha y la sobresaturación de grupos en todos los niveles educativos, particularmente, el problema se agudiza en educación media superior, donde la mayoría de los profesores son pagados a destajo, por hora pizarrón impartida, atienden hasta 14 grupos, con más de 50 alumnos por actividad académica y con contratos interinos, retraso en sus pagos y un pobre apoyo para enfrentar clases a distancia o en línea.        <br><br>        &nbsp;&nbsp; Sección Mexicana de la Coalición Trinacional en Defensa de la Educación Pública.        <br><br></p>        <h5><b>María de la Luz Arriaga</b></h5>', '<p class=\"lead\">RECONOCIMIENTO A LABOR DOCENTE        <br>        &nbsp;&nbsp;El 5 de octubre fue instituido por la UNESCO como el día mundial de los docentes, para reconocer la labor de maestras y maestros. En el momento crítico para la educación y la profesión de maestros y maestras que vivimos por la masificación de la educación virtualizada que han impuesto los gobiernos en el mundo, nos unimos a las voces de millones de docentes- de educación básica, media superior y superior- que reclamamos condiciones dignas de trabajo y el respeto a nuestro derecho a ser considerados en las decisiones de política educativa que adopten las autoridades.        <br><br>        &nbsp;&nbsp; En el marco de esta celebración, acudiremos el jueves 8 de octubre a las 12hs a Palacio Nacional a reiterar nuestras demandas de apertura de foros de discusión sobre la educación que necesitamos en la nueva realidad.        <br><br>        &nbsp;&nbsp; Que la SEP, dé a conocer el programa estratégico de mejora de infraestructura y garantía sanitaria de las instalaciones escolares para el regreso presencial a clases cuando así lo permitan las autoridades de Salud.        Acceso universal y gratuito a internet, como un bien público.        <br><br>        &nbsp;&nbsp; Condiciones de trabajo dignos, solicitamos se detenga el proceso de precarización laboral puesto en marcha y la sobresaturación de grupos en todos los niveles educativos, particularmente, el problema se agudiza en educación media superior, donde la mayoría de los profesores son pagados a destajo, por hora pizarrón impartida, atienden hasta 14 grupos, con más de 50 alumnos por actividad académica y con contratos interinos, retraso en sus pagos y un pobre apoyo para enfrentar clases a distancia o en línea.        <br><br>        &nbsp;&nbsp; Sección Mexicana de la Coalición Trinacional en Defensa de la Educación Pública.        <br><br></p>        <h5><b>María de la Luz Arriaga</b></h5>', '1663801693.jpg', '1663801693.jpg', 1);
INSERT INTO `articulo` (`idarticulo`, `fecha`, `categoria`, `encategoria`, `titulo`, `entitulo`, `autor`, `enautor`, `pais`, `enpais`, `contcorto`, `encontcorto`, `contlargo`, `encontlargo`, `imagen`, `imagenbarner`, `condicion`) VALUES
(13, '2022-02-10', 'Solidaridad', 'Solidarity', 'José Antonio Vital Galicia', 'José Antonio Vital Galicia', 'Coalición trinacional', 'Coalición trinacional', 'México', 'Mexico', 'Falleció el luchador social José Antonio Vital Galicia, en la CDMX', 'Falleció el luchador social José Antonio Vital Galicia, en la CDMX', '<p class=\"lead\">        &nbsp;&nbsp; Ciudad de México. José Antonio Vital Galicia, luchador social desde hace más de cuatro décadas, falleció este sábado a los 63 años de edad en la Ciudad de México, víctima de cáncer biliar.        <br><br>        &nbsp;&nbsp;El deceso fue confirmado por la Alianza de Trabajadores de la Salud y Empleados Públicos, organización que coordinó y desde donde encabezó una lucha incansable por la seguridad social, los derechos de los trabajadores y la democracia sindical.&nbsp;&nbsp;&nbsp;&nbsp;Ciudad de México. José Antonio Vital Galicia, luchador social desde hace más de cuatro décadas, falleció este sábado a los 63 años de edad en la Ciudad de México, víctima de cáncer biliar.<br><br>        &nbsp;&nbsp;El deceso fue confirmado por la Alianza de Trabajadores de la Salud y Empleados Públicos, organización que coordinó y desde donde encabezó una lucha incansable por la seguridad social, los derechos de los trabajadores y la democracia sindical.        <br><br>        &nbsp;&nbsp;Desde la primera semana de diciembre de 2021, Antonio Vital permaneció internado en el hospital 20 de Noviembre del Instituto de Seguridad y Servicios Sociales para los Trabajadores del Estado (Issste) por un tumor en vías biliares, enfermedad detectada en agosto de ese año a partir de estudios médicos que él realizó por cuenta propia.        <br><br>        &nbsp;&nbsp;La basificación de 86 mil empleados del sector salud; la restructuración de créditos hipotecarios Fovissste que se volvieron impagables y el fortalecimiento de los servicios médicos y de seguridad social, fueron algunas de las demandas que Antonio Vital planteó desde la Alianza.        <br><br>        &nbsp;&nbsp;Asimismo, ha respaldado las luchas contra la privatización de los servicios médicos y solicitó la intervención de la Secretaría de la Función Pública para investigar el uso de los rendimientos del fondo de vivienda del Issste que asciende a 22 mil millones de pesos.        <br><br>        &nbsp;&nbsp;Antonio Vital fue dirigente sindical de la sección 14 del Sindicato Nacional de Trabajadores de la Secretaría de Salud (SNTSA). En 1976 participó en la lucha por igualar y homologar salarios y condiciones laborales de todo el personal del sector salud, lo cual logró en el año de 1985.        <br><br>        &nbsp;&nbsp;En 1978, durante la huelga realizada por más de 5 mil trabajadores en el Hospital General de México, Antonio Vital fue encarcelado y desde entonces mantuvo la lucha por el derecho a la salud y la vida.        <br><br>        &nbsp;&nbsp;Sus familiares y amigos dan el último adiós al luchador social en los velatorios del Issste, de la avenida San Fernando, en Tlalpan.</p>', '<p class=\"lead\">        &nbsp;&nbsp; Ciudad de México. José Antonio Vital Galicia, luchador social desde hace más de cuatro décadas, falleció este sábado a los 63 años de edad en la Ciudad de México, víctima de cáncer biliar.        <br><br>        &nbsp;&nbsp;El deceso fue confirmado por la Alianza de Trabajadores de la Salud y Empleados Públicos, organización que coordinó y desde donde encabezó una lucha incansable por la seguridad social, los derechos de los trabajadores y la democracia sindical.&nbsp;&nbsp;&nbsp;&nbsp;Ciudad de México. José Antonio Vital Galicia, luchador social desde hace más de cuatro décadas, falleció este sábado a los 63 años de edad en la Ciudad de México, víctima de cáncer biliar.<br><br>        &nbsp;&nbsp;El deceso fue confirmado por la Alianza de Trabajadores de la Salud y Empleados Públicos, organización que coordinó y desde donde encabezó una lucha incansable por la seguridad social, los derechos de los trabajadores y la democracia sindical.        <br><br>        &nbsp;&nbsp;Desde la primera semana de diciembre de 2021, Antonio Vital permaneció internado en el hospital 20 de Noviembre del Instituto de Seguridad y Servicios Sociales para los Trabajadores del Estado (Issste) por un tumor en vías biliares, enfermedad detectada en agosto de ese año a partir de estudios médicos que él realizó por cuenta propia.        <br><br>        &nbsp;&nbsp;La basificación de 86 mil empleados del sector salud; la restructuración de créditos hipotecarios Fovissste que se volvieron impagables y el fortalecimiento de los servicios médicos y de seguridad social, fueron algunas de las demandas que Antonio Vital planteó desde la Alianza.        <br><br>        &nbsp;&nbsp;Asimismo, ha respaldado las luchas contra la privatización de los servicios médicos y solicitó la intervención de la Secretaría de la Función Pública para investigar el uso de los rendimientos del fondo de vivienda del Issste que asciende a 22 mil millones de pesos.        <br><br>        &nbsp;&nbsp;Antonio Vital fue dirigente sindical de la sección 14 del Sindicato Nacional de Trabajadores de la Secretaría de Salud (SNTSA). En 1976 participó en la lucha por igualar y homologar salarios y condiciones laborales de todo el personal del sector salud, lo cual logró en el año de 1985.        <br><br>        &nbsp;&nbsp;En 1978, durante la huelga realizada por más de 5 mil trabajadores en el Hospital General de México, Antonio Vital fue encarcelado y desde entonces mantuvo la lucha por el derecho a la salud y la vida.        <br><br>        &nbsp;&nbsp;Sus familiares y amigos dan el último adiós al luchador social en los velatorios del Issste, de la avenida San Fernando, en Tlalpan.</p>', '1663801794.jpg', '1663801794.jpg', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carousel`
--

CREATE TABLE `carousel` (
  `idcarousel` int(20) NOT NULL,
  `fecha` date NOT NULL,
  `categoria` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `encategoria` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `titulo` varchar(500) COLLATE utf8_spanish2_ci NOT NULL,
  `entitulo` varchar(500) COLLATE utf8_spanish2_ci NOT NULL,
  `barra1` varchar(200) COLLATE utf8_spanish2_ci NOT NULL,
  `enbarra1` varchar(200) COLLATE utf8_spanish2_ci NOT NULL,
  `barra2` varchar(200) COLLATE utf8_spanish2_ci NOT NULL,
  `enbarra2` varchar(200) COLLATE utf8_spanish2_ci NOT NULL,
  `autor` varchar(200) COLLATE utf8_spanish2_ci NOT NULL,
  `enautor` varchar(200) COLLATE utf8_spanish2_ci NOT NULL,
  `pais` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `enpais` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `contcorto` varchar(1000) COLLATE utf8_spanish2_ci NOT NULL,
  `encontcorto` varchar(1000) COLLATE utf8_spanish2_ci NOT NULL,
  `contlargo` varchar(3000) COLLATE utf8_spanish2_ci NOT NULL,
  `encontlargo` varchar(3000) COLLATE utf8_spanish2_ci NOT NULL,
  `imagen` varchar(200) COLLATE utf8_spanish2_ci NOT NULL,
  `imagenart` varchar(200) COLLATE utf8_spanish2_ci NOT NULL,
  `imagenlat` varchar(200) COLLATE utf8_spanish2_ci NOT NULL,
  `condicion` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `carousel`
--

INSERT INTO `carousel` (`idcarousel`, `fecha`, `categoria`, `encategoria`, `titulo`, `entitulo`, `barra1`, `enbarra1`, `barra2`, `enbarra2`, `autor`, `enautor`, `pais`, `enpais`, `contcorto`, `encontcorto`, `contlargo`, `encontlargo`, `imagen`, `imagenart`, `imagenlat`, `condicion`) VALUES
(1, '2022-08-01', 'Conferencias', 'Conferences', 'Conferencia Nacional de la Sección Mexicana de la Coalición Trinacional en Defensa de la Educación Pública.', 'Conferencia Nacional de la Sección Mexicana de la Coalición Trinacional en Defensa de la Educación Pública.', 'Hacia la XV Conferencia Trinacional (México, Estados Unidos, Canadá).', 'Hacia la XV Conferencia Trinacional (México, Estados Unidos, Canadá).', 'Una educación pública para reconstruir la comunidad', 'Una educación pública para reconstruir la comunidad', 'Coalición trinacional', 'Coalición trinacional', 'Canadá', 'Mexico', 'A las organizaciones sindicales, a los profesores, investigadores, estudiantes, activistas e interesados en defensa de la educación pública como un derecho social a participar en la Conferencia Nacional en Defensa de la Educación Pública 2022,se llevará a cabo del viernes 9 al sábado 10 de septiembre 2022', 'A las organizaciones sindicales, a los profesores, investigadores, estudiantes, activistas e interesados en defensa de la educación pública como un derecho social a participar en la Conferencia Nacional en Defensa de la Educación Pública 2022,se llevará a cabo del viernes 9 al sábado 10 de septiembre 2022', '<p class=\"display-6\">Hacia la XV Conferencia Trinacional (México, Estados Unidos, Canadá).</p><br>        <p class=\"lead\">        &nbsp;&nbsp;Los sistemas educativos en el mundo han sufrido profundos estragos a consecuencia del cierre de escuelas y el confinamiento producto del COVID-19. Para muchos estudiantes no sólo representó una interrupción temporal en su educación sino un final abrupto para la misma, al incorporarse al trabajo, perder a sus padres o tutores o simplemente no tener las condiciones suficientes para ponerse al corriente en sus aprendizajes. Esta situación ha transgredido el tejido social y educativo afectando a la educación pública en el mundo, y la educación en México no ha sido la excepción.         <br><br>        &nbsp;&nbsp;Mientras tanto los trabajadores de la educación sufrieron transformaciones múltiples en sus condiciones de trabajo y; su práctica docente y profesional, mientras que el aprendizaje en línea exacerbó las desigualdades en educación. Nuestro gobierno no contaba con las políticas, la infraestructura ni los recursos necesarios para desarrollar el aprendizaje en línea de manera que se garantizara que todos los niños y las niñas, jóvenes y universitarios pudieran participar en igualdad de condiciones.          <br><br>        &nbsp;&nbsp;Poco a poco comienza a estabilizarse la pandemia y, en consecuencia, comienza la reapertura de las escuelas y centros educativos a diferentes niveles, no obstante, esta reapertura no deshará el daño provocado en la educación, ni garantizará que todos los niños y jóvenes regresen a la escuela. Puesto que, muchos problemas que observamos hoy en el sector educativo son preexistentes a ella; la vulnerabilidad a la que se enfrentan los niños, familias y comunidades de bajos ingresos, la desigual cobertura en educación, la discriminación y exclusión por raza, clase y género, la precariedad salarial y de condiciones de trabajo de los docentes, entre muchos otros aspectos que durante años hemos denunciado desde la Coalición Trinacional en Defensa de la Educación Pública.        &nbsp;&nbsp;Ante este panorama consideramos necesaria una reflexión que nos permita identificar cuáles son los estragos que la pandemia ha ocasionado en la educación pública en México, así como identificar las acciones indispensables para superar los problemas provocados por ella e identificar las alternativas para reconstruir a las comunidades educativas que han sido afectadas por el distanciamiento social y el auto-centramiento provocado por el confinamiento; al mismo tiempo, necesitamos recuperar las demandas en defensa de la educación pública que apuntan a exigir al gobierno mexicano el cumplimiento de sus responsabilidades como garante del derecho a la educación; por ello:           <br><br>        </p>        <p class=\"display-6\"><b>Convocamos.</b></p><br>        <p class=\"lead\">        &nbsp;&nbsp;A las organizaciones sindicales, a los profesores, investigadores, estudiantes, activistas e interesados en', '<p class=\"display-6\">Hacia la XV Conferencia Trinacional (México, Estados Unidos, Canadá).</p><br>        <p class=\"lead\">        &nbsp;&nbsp;Los sistemas educativos en el mundo han sufrido profundos estragos a consecuencia del cierre de escuelas y el confinamiento producto del COVID-19. Para muchos estudiantes no sólo representó una interrupción temporal en su educación sino un final abrupto para la misma, al incorporarse al trabajo, perder a sus padres o tutores o simplemente no tener las condiciones suficientes para ponerse al corriente en sus aprendizajes. Esta situación ha transgredido el tejido social y educativo afectando a la educación pública en el mundo, y la educación en México no ha sido la excepción.         <br><br>        &nbsp;&nbsp;Mientras tanto los trabajadores de la educación sufrieron transformaciones múltiples en sus condiciones de trabajo y; su práctica docente y profesional, mientras que el aprendizaje en línea exacerbó las desigualdades en educación. Nuestro gobierno no contaba con las políticas, la infraestructura ni los recursos necesarios para desarrollar el aprendizaje en línea de manera que se garantizara que todos los niños y las niñas, jóvenes y universitarios pudieran participar en igualdad de condiciones.          <br><br>        &nbsp;&nbsp;Poco a poco comienza a estabilizarse la pandemia y, en consecuencia, comienza la reapertura de las escuelas y centros educativos a diferentes niveles, no obstante, esta reapertura no deshará el daño provocado en la educación, ni garantizará que todos los niños y jóvenes regresen a la escuela. Puesto que, muchos problemas que observamos hoy en el sector educativo son preexistentes a ella; la vulnerabilidad a la que se enfrentan los niños, familias y comunidades de bajos ingresos, la desigual cobertura en educación, la discriminación y exclusión por raza, clase y género, la precariedad salarial y de condiciones de trabajo de los docentes, entre muchos otros aspectos que durante años hemos denunciado desde la Coalición Trinacional en Defensa de la Educación Pública.        &nbsp;&nbsp;Ante este panorama consideramos necesaria una reflexión que nos permita identificar cuáles son los estragos que la pandemia ha ocasionado en la educación pública en México, así como identificar las acciones indispensables para superar los problemas provocados por ella e identificar las alternativas para reconstruir a las comunidades educativas que han sido afectadas por el distanciamiento social y el auto-centramiento provocado por el confinamiento; al mismo tiempo, necesitamos recuperar las demandas en defensa de la educación pública que apuntan a exigir al gobierno mexicano el cumplimiento de sus responsabilidades como garante del derecho a la educación; por ello:           <br><br>        </p>        <p class=\"display-6\"><b>Convocamos.</b></p><br>        <p class=\"lead\">        &nbsp;&nbsp;A las organizaciones sindicales, a los profesores, investigadores, estudiantes, activistas e interesados en', '1663776746.png', '1663776746.png', '1663776746.png', 1),
(2, '2022-08-05', 'Conferencias', 'Conferences', 'XV Conferencia Trinacional en Defensa de la Educación Pública', 'XV Conferencia Trinacional en Defensa de la Educación Pública', 'XV Conferencia Trinacional en Defensa de la Educación Pública', 'XV Conferencia Trinacional en Defensa de la Educación Pública', 'Oaxaca, México 2022. México / Estados Unidos / Canadá', 'Oaxaca, México 2022. México / Estados Unidos / Canadá', 'Coalición trinacional', 'Coalición trinacional', 'México', 'Mexico', 'Próxima a celebrarse en el estado de Oaxaca durante los días 7, 8 y 9 de octubre de 2022, la quinceava edición de la Conferencia Trinacional en Defensa de la Educación Pública', 'Próxima a celebrarse en el estado de Oaxaca durante los días 7, 8 y 9 de octubre de 2022, la quinceava edición de la Conferencia Trinacional en Defensa de la Educación Pública', '<p class=\"lead\">México / Estados Unidos / Canadá        <br>        &nbsp;&nbsp;Próxima a celebrarse en el estado de Oaxaca durante los días 7, 8 y 9 de octubre de 2022, la quinceava edición de la Conferencia Trinacional en Defensa de la Educación Pública, tendrá lugar ante las múltiples preocupaciones que docentes, sindicalistas, investigadores, estudiantes y activistas dentro del sector educativo comparten. Dicho espacio dará lugar a la reflexión y dialogo, tanto de las problemáticas que se vienen profundizando desde antes de la pandemia, como aquellos que se derivan de las dinámicas sociales que la pandemia y su administración de parte de los Estados impusieron a las comunidades educativas.        <br><br>        &nbsp;&nbsp;Contexto bajo el cual diversas personalidades, organizaciones y comunidades educativas en Norteamérica estaremos compartiendo y deliberando las propuestas necesarias para recuperar o profundizar procesos comunitarios, que hoy son fundamentales para enfrentar el contexto que enfrente la educación pública como derecho social y humano.        <br><br>        &nbsp;&nbsp;En breve daremos a conocer la convocatoria y la información correspondiente para que quienes tengan interés puedan participar y acceder a las discusiones, reflexiones y propuestas producto de esta quinceava conferencia.        <br></p>', '<p class=\"lead\">México / Estados Unidos / Canadá        <br>        &nbsp;&nbsp;Próxima a celebrarse en el estado de Oaxaca durante los días 7, 8 y 9 de octubre de 2022, la quinceava edición de la Conferencia Trinacional en Defensa de la Educación Pública, tendrá lugar ante las múltiples preocupaciones que docentes, sindicalistas, investigadores, estudiantes y activistas dentro del sector educativo comparten. Dicho espacio dará lugar a la reflexión y dialogo, tanto de las problemáticas que se vienen profundizando desde antes de la pandemia, como aquellos que se derivan de las dinámicas sociales que la pandemia y su administración de parte de los Estados impusieron a las comunidades educativas.        <br><br>        &nbsp;&nbsp;Contexto bajo el cual diversas personalidades, organizaciones y comunidades educativas en Norteamérica estaremos compartiendo y deliberando las propuestas necesarias para recuperar o profundizar procesos comunitarios, que hoy son fundamentales para enfrentar el contexto que enfrente la educación pública como derecho social y humano.        <br><br>        &nbsp;&nbsp;En breve daremos a conocer la convocatoria y la información correspondiente para que quienes tengan interés puedan participar y acceder a las discusiones, reflexiones y propuestas producto de esta quinceava conferencia.        <br></p>', '1663290889.jpg', '1663290889.jpg', '1663290889.jpg', 1),
(3, '2022-07-28', 'Conferencias', 'Conferences', 'Coalición Trinacional en Defensa de la Educación da a conocer folleto en la ANR de la CNTE', 'Coalición Trinacional en Defensa de la Educación da a conocer folleto en la ANR de la CNTE', 'Coalición Trinacional en Defensa de la Educación', 'Coalición Trinacional en Defensa de la Educación', 'Da a conocer folleto en la ANR de la CNTE', 'Da a conocer folleto en la ANR de la CNTE', 'Coalición trinacional', 'Coalición trinacional', 'México', 'Mexico', 'folleto \"Entre transformaciones y continuidades en el derecho a la educación pública en tiempos de la #4T\"', 'folleto \"Entre transformaciones y continuidades en el derecho a la educación pública en tiempos de la #4T\"', '<p class=\"lead\">\"Entre transformaciones y continuidades en el derecho a la educación pública en tiempos de la #4T\"<br>        &nbsp;&nbsp;Una comisión de la sección mexicana de la Coalición Trinacional en Defensa de la Educación Pública se hizo presente durante la Asamblea Nacional Representativa de la CNTE, para dar un saludo a los trabajos y compartir el folleto \"Entre transformaciones y continuidades en el derecho a la educación pública en tiempos de la #4T\". En donde se han recopilado diversos materiales de reflexión y balance político sobre las diversas problemáticas presentes en el sector educativo.</p>', '<p class=\"lead\">\"Entre transformaciones y continuidades en el derecho a la educación pública en tiempos de la #4T\"<br>        &nbsp;&nbsp;Una comisión de la sección mexicana de la Coalición Trinacional en Defensa de la Educación Pública se hizo presente durante la Asamblea Nacional Representativa de la CNTE, para dar un saludo a los trabajos y compartir el folleto \"Entre transformaciones y continuidades en el derecho a la educación pública en tiempos de la #4T\". En donde se han recopilado diversos materiales de reflexión y balance político sobre las diversas problemáticas presentes en el sector educativo.</p>', '1663776932.jpg', '1663776932.jpg', '1663776932.jpg', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `idcategoria` int(20) NOT NULL,
  `nombre` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `ennombre` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `condicion` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`idcategoria`, `nombre`, `ennombre`, `condicion`) VALUES
(1, 'Acciones', 'Actions', 1),
(2, 'Colaboraciones', 'Collaborations', 1),
(3, 'Campañas', 'Bells', 1),
(4, 'Foros', 'Forums', 1),
(5, 'Conferencias Trinacionales', 'Trinational Conferences', 1),
(6, 'Solidaridad Internacional', 'International Solidarity', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `galeria`
--

CREATE TABLE `galeria` (
  `idgaleria` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `categoria` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `encategoria` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `titulo` varchar(500) COLLATE utf8_spanish2_ci NOT NULL,
  `entitulo` varchar(500) COLLATE utf8_spanish2_ci NOT NULL,
  `autor` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `enautor` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `pais` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `enpais` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `imagen` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `condicion` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `galeria`
--

INSERT INTO `galeria` (`idgaleria`, `fecha`, `categoria`, `encategoria`, `titulo`, `entitulo`, `autor`, `enautor`, `pais`, `enpais`, `imagen`, `condicion`) VALUES
(1, '2022-09-13', 'Acciones', 'Actions', 'Folleto', 'Folleto', 'Coalición trinacional', 'Tri-National', 'México', 'Mexico', '', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historia`
--

CREATE TABLE `historia` (
  `idhistoria` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `imagen` varchar(50) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `titulo` varchar(100) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `contenido` varchar(1000) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `pie` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `ten` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `cen` varchar(1000) COLLATE utf8_spanish2_ci NOT NULL,
  `pen` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `condicion` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `organiza`
--

CREATE TABLE `organiza` (
  `idorganiza` int(11) NOT NULL,
  `fecha` date DEFAULT NULL,
  `imagen` varchar(100) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `tipo` varchar(50) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `titulo` varchar(100) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `direc` varchar(200) COLLATE utf8_spanish2_ci NOT NULL,
  `url` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `fone` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `entipo` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `entitulo` varchar(100) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `endirec` varchar(200) COLLATE utf8_spanish2_ci NOT NULL,
  `condicion` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `organiza`
--

INSERT INTO `organiza` (`idorganiza`, `fecha`, `imagen`, `tipo`, `titulo`, `direc`, `url`, `fone`, `entipo`, `entitulo`, `endirec`, `condicion`) VALUES
(1, '2022-09-01', '1662079359.png', 'Sindicato, Sección Mexicana', 'SUTIEMS Sindicato de la Unión de los Trabajadores', 'Concepción Beistegui 1810 d. colonia Narvarte oriente, alcaldía Benito Juárez, CDMX c.p. 03020', 'INFO@SUTIEMS.ORG', '55 8464 1577', 'Sindicato, Seccion Mexicana', 'SUTIEMS Sindicato de la Unión de los Trabajadores', 'Concepción Beistegui 1810 d. colonia Narvarte oriente, alcaldía Benito Juárez, CDMX c.p. 03020', 1),
(2, '2022-09-01', '1662082942.png', 'Sindicato, Sección Canada', 'OSSTF/OFEESO Ontario Secondary School Teachers Federation', '49 Mobile Drive Toronto, ON M4A 1H5', 'https://www.osstf.on.ca/en-CA', '416-751-8300', 'Sindicato, Seccion Canada', 'OSSTF/OFEESO Ontario Secondary School Teachers Federation', '49 Mobile Drive Toronto, ON M4A 1H5', 1),
(3, '2022-09-01', '1662080190.png', 'Sindicato, Sección Mexicana', 'CETEG Coordinadora Estatal de los Trabajadores de la Educación en Guerrero', '*****', 'http://ceteg.blogspot.com/', '', 'Sindicato, Seccion Mexicana', 'CETEG Coordinadora Estatal de los Trabajadores de la Educación en Guerrero', '*****', 1),
(4, '2022-09-01', '1662080461.png', 'Sección, Sección Mexicana', 'Sección XXII, Oaxaca', 'Armenta y López #221, Centro Oaxaca de Juarez, Oaxaca', 'https://www.cencos22oaxaca.org/', '951 475 3348', 'Sección, Seccion Mexicana', 'Sección XXII, Oaxaca', 'Armenta y López #221, Centro Oaxaca de Juarez, Oaxaca', 1),
(5, '2022-09-01', '1662081002.png', 'Sindicato, Sección Mexicana', 'MMPV Movimiento Magisterial Popular Veracruzano', '*****', 'https://www.facebook.com/MMPVOFICIAL', '', 'Sindicato, Seccion Mexicana', 'MMPV Movimiento Magisterial Popular Veracruzano', '*****', 1),
(6, '2022-09-01', '1662082425.png', 'Sindicato, Seccion Canada', 'BCTF Federación de Maestros de la Columbia Británica', '100 - 550 West 6th Avenue Vancouver, Columbia Británica, Canadá V5Z 4P2', 'https://www.bctf.ca/', '604-871-2283', 'Sindicato, Seccion Canada', 'BCTF British Columbia Teachers Federation', '100 - 550 West 6th Avenue Vancouver, Columbia Británica, Canadá V5Z 4P2', 1),
(7, '2022-09-01', '1662083133.png', 'Sindicato, Seccion Estados Unidos', 'UTLA United Teachers Los Angeles', '3303 Wilshire Blvd., 10th Floor, Los Ángeles, CA 90010', 'www.utla.net', '213) 487-5560, (800) 556-8852', 'Sindicato, Seccion Estados Unidos', 'UTLA United Teachers Los Angeles', '3303 Wilshire Blvd., 10th Floor, Los Ángeles, CA 90010', 1),
(8, '2022-09-01', '1662083269.png', 'Sindicato', 'CTU Sindicato de Maestros de Chicago', 'Chicago, IL 60612', '', '', 'Sindicato', 'CTU Chicago Teachers Union', 'Chicago, IL 60612', 1),
(9, '2022-09-01', '1662083354.png', 'Sindicato, Seccion Estados Unidos', 'Colegio los ríos federación de maestros.', '2126 K Street Sacramento, CA 95816', 'https://www.lrcft.org/', '916-448-2452', 'Sindicato, Seccion Estados Unidos', 'Los Rios College Federation of Teachers', '2126 K Street Sacramento, CA 95816', 1),
(10, '2022-09-01', '1662083471.png', 'Plataforma de organizaciones, Organización fratern', 'Red Social para la Educación Pública en las Américas', 'Vancouver, Columbia Británica, Canadá V5K 1Z8', 'idea-network.ca', '604-708-1495', 'Plataforma de organizaciones, Organización fratern', 'IDEA Network Red SEPA', 'Vancouver, Columbia Británica, Canadá V5K 1Z8', 1),
(11, '2022-09-01', '1662083562.png', 'Organización político- social, Organización frater', 'Alianza de trabajadores de la salud y empleados públicos', 'Antonio García Cubas 122A, Obrera, Cuauhtémoc, 06800 Ciudad de México, CDMX', 'https://www.facebook.com/AlianzaDeTrabajadoresDeLaSaludYEmpleadosPublicos', '', 'Organización político- social, Organización frater', 'Alianza de trabajadores de la salud y empleados públicos', 'Antonio García Cubas 122A, Obrera, Cuauhtémoc, 06800 Ciudad de México, CDMX', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permiso`
--

CREATE TABLE `permiso` (
  `idpermiso` int(11) NOT NULL,
  `nombre` varchar(30) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `permiso`
--

INSERT INTO `permiso` (`idpermiso`, `nombre`) VALUES
(1, 'Escritorio'),
(2, 'Contenido'),
(3, 'Web'),
(4, 'Acceso');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `publica`
--

CREATE TABLE `publica` (
  `idpublica` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `categoria` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `encategoria` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `titulo` varchar(500) COLLATE utf8_spanish2_ci NOT NULL,
  `entitulo` varchar(500) COLLATE utf8_spanish2_ci NOT NULL,
  `autor` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `enautor` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `pais` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `enpais` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `contenido` varchar(1000) COLLATE utf8_spanish2_ci NOT NULL,
  `encontenido` varchar(1000) COLLATE utf8_spanish2_ci NOT NULL,
  `imagen` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `link` varchar(1000) COLLATE utf8_spanish2_ci NOT NULL,
  `archivo` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `condicion` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `publica`
--

INSERT INTO `publica` (`idpublica`, `fecha`, `categoria`, `encategoria`, `titulo`, `entitulo`, `autor`, `enautor`, `pais`, `enpais`, `contenido`, `encontenido`, `imagen`, `link`, `archivo`, `condicion`) VALUES
(2, '2022-09-10', 'Conferencias', 'Conferences', 'Folleto', 'Folleto', 'Coalición trinacional', 'Coalición trinacional', 'México', 'Mexico', 'Conferencia Trinacional Nacional', 'Conferencia Trinacional Nacional', '1663804601.png', 'https://drive.google.com/file/d/1AKmxEVBndTXi5g9Df0TdT-btxVsmPbaW/view?usp=sharing', '', 1),
(3, '2022-08-08', 'Foros', 'Forums', 'Folleto', 'Folleto', 'Coalición trinacional', 'Coalición trinacional', 'México', 'Mexico', 'Educacion en tiempos de la 4T', 'Educacion en tiempos de la 4T', '1663804707.jpg', 'https://drive.google.com/file/d/17TjuMTkbQW1d8GEaUrBFoR0FUFS3pvaO/view?fbclid=IwAR0CdeQHfGnnkSuhLemUoR4rOHdkroO4ShSseqfQ0hoW4B3r9GBD7gaA4so', '', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `idusuario` int(11) NOT NULL,
  `nombre` varchar(100) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `cargo` varchar(100) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `login` varchar(100) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `clave` varchar(100) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `imagen` varchar(45) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `condicion` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`idusuario`, `nombre`, `email`, `cargo`, `login`, `clave`, `imagen`, `condicion`) VALUES
(3, 'Luis Ramos', 'luisfediana@gmail.com', 'Administrador', 'Lramos', '8c6976e5b5410415bde908bd4dee15dfb167a9c873fc4bb8a81f6f2ab448a918', '1661734685.png', 1),
(4, 'Felipe Ramos', '', '', 'admin', '8c6976e5b5410415bde908bd4dee15dfb167a9c873fc4bb8a81f6f2ab448a918', '1661741289.png', 1),
(5, 'Eduardo', 'nombre@gmasil.com', 'admin', 'Eduardo', '8c6976e5b5410415bde908bd4dee15dfb167a9c873fc4bb8a81f6f2ab448a918', '1663289392.png', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario_permiso`
--

CREATE TABLE `usuario_permiso` (
  `idusuario_permiso` int(11) NOT NULL,
  `idusuario` int(11) NOT NULL,
  `idpermiso` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `usuario_permiso`
--

INSERT INTO `usuario_permiso` (`idusuario_permiso`, `idusuario`, `idpermiso`) VALUES
(9, 3, 1),
(10, 3, 2),
(11, 4, 1),
(16, 5, 1),
(17, 5, 2),
(18, 5, 3),
(19, 5, 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `video`
--

CREATE TABLE `video` (
  `idvideo` int(20) NOT NULL,
  `fecha` date NOT NULL,
  `categoria` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `encategoria` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `titulo` varchar(200) COLLATE utf8_spanish2_ci NOT NULL,
  `entitulo` varchar(200) COLLATE utf8_spanish2_ci NOT NULL,
  `autor` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `enautor` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `pais` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `enpais` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `contenido` varchar(1000) COLLATE utf8_spanish2_ci NOT NULL,
  `encontenido` varchar(1000) COLLATE utf8_spanish2_ci NOT NULL,
  `facebook` varchar(1000) COLLATE utf8_spanish2_ci NOT NULL,
  `twitter` varchar(1000) COLLATE utf8_spanish2_ci NOT NULL,
  `whatsapp` varchar(1000) COLLATE utf8_spanish2_ci NOT NULL,
  `link` varchar(1000) COLLATE utf8_spanish2_ci NOT NULL,
  `condicion` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `video`
--

INSERT INTO `video` (`idvideo`, `fecha`, `categoria`, `encategoria`, `titulo`, `entitulo`, `autor`, `enautor`, `pais`, `enpais`, `contenido`, `encontenido`, `facebook`, `twitter`, `whatsapp`, `link`, `condicion`) VALUES
(2, '2022-09-10', 'Conferencias', 'Conferences', 'Tema V. La Coalición Trinacional en Defensa de la educación Pública, a 30 años de su fundación: Retos y tareas. ', 'Tema V. La Coalición Trinacional en Defensa de la educación Pública, a 30 años de su fundación: Retos y tareas. ', 'Coalición trinacional', 'Coalición trinacional', 'México', 'Mexico', '- Conclusiones, presentación de relatorías <br>  - Propuestas hacia la 15 Conferencia Trinacional <br> Segundo día de la Conferencia Nacional de la sección mexicana de la Coalición Trinacional en Defensa de la Educación Pública.', '- Conclusiones, presentación de relatorías <br>  - Propuestas hacia la 15 Conferencia Trinacional <br> Segundo día de la Conferencia Nacional de la sección mexicana de la Coalición Trinacional en Defensa de la Educación Pública.', 'https://www.facebook.com/sharer/sharer.php?u=https://fb.watch/fHljTYBcwI/', 'https://l.facebook.com/l.php?u=https%3A%2F%2Ftwitter.com%2Fintent%2Ftweet%3Furl%3Dhttps%253A%252F%252Ffb.watch%252FfHljQYUgUw%252F%26text%3DConferencia%2520Nacional%252010%2520de%2520septiembre%26via%3DFacebookWatch%26fbclid%3DIwAR133VF8qxwHguxvrewpvqrHCS6ZseV2AG6EjvBtzsxMmSF6Lxi3_6VRoZk&h=AT1oP-pClMAhaXAk4uUmvcyCicnlmuZ_cA40w4EnyL8Ix4-mCZIVLrTJKAEZJRgBbWvswmSU4OQbrrj4de4P3FhoXA_NgOzr7U7RZhJgljgtrPdQhNthmGH2ccziO4t956UigvcIC_1GjcRuCgcUpQ&__tn__=J]-R&c[0]=AT2x-Dgzki-A8eRpuu1_TFmtZIhRgTpM0QEZvWH8EUe_X7BWVKLL930qQ3fulNiYWdnfmyY6vZHyZaFiTa2wV1aheMPJJzaOHU66mf16f4svYL9JXhq5aZhojNec-TWbH7_tVqwcV0y7snmLGxwUHb71Bro8B2QRbna1ZIX9Z349MaXQhTAicAP5ioa-yvKaRL2ojP_zitD7TenfzBg', 'https://l.facebook.com/l.php?u=https%3A%2F%2Fapi.whatsapp.com%2Fsend%3Ftext%3Dhttps%253A%252F%252Ffb.watch%252FfHljTtEFY4%252F%26fbclid%3DIwAR0d5kfD2POHoz6Y0SMnSt6f0zG7Iit7QPg0OTVP8H5Aj6Gkfa3HrT56uik&h=AT1oP-pClMAhaXAk4uUmvcyCicnlmuZ_cA40w4EnyL8Ix4-mCZIVLrTJKAEZJRgBbWvswmSU4OQbrrj4de4P3FhoXA_NgOzr7U7RZhJgljgtrPdQhNthmGH2ccziO4t956UigvcIC_1GjcRuCgcUpQ&__tn__=J]-R&c[0]=AT2x-Dgzki-A8eRpuu1_TFmtZIhRgTpM0QEZvWH8EUe_X7BWVKLL930qQ3fulNiYWdnfmyY6vZHyZaFiTa2wV1aheMPJJzaOHU66mf16f4svYL9JXhq5aZhojNec-TWbH7_tVqwcV0y7snmLGxwUHb71Bro8B2QRbna1ZIX9Z349MaXQhTAicAP5ioa-yvKaRL2ojP_zitD7TenfzBg', 'https://www.facebook.com/plugins/video.php?height=314&href=https%3A%2F%2Fwww.facebook.com%2Fcoaliciontrinacional.seccionmexicana%2Fvideos%2F622891729250034%2F&show_text=false&width=560&t=0', 1),
(3, '2022-09-10', 'Conferencias', 'Conferences', 'Tema III.- La reacción comunitaria: propuestas desde las comunidades educativas. (Proyectos alternativos) académicas (estudiantes, profesores).', 'Tema III.- La reacción comunitaria: propuestas desde las comunidades educativas. (Proyectos alternativos) académicas (estudiantes, profesores).', 'Coalición trinacional', 'Coalición trinacional', 'México', 'Mexico', '- Experiencia Escuelas Integrales. Sección XVIII <br> - Experiencia PTEO. Sección XXII <br> - Experiencia Veracruz. Colectivo Totlalto Yoltok', '- Experiencia Escuelas Integrales. Sección XVIII <br> - Experiencia PTEO. Sección XXII <br> - Experiencia Veracruz. Colectivo Totlalto Yoltok', 'https://www.facebook.com/sharer/sharer.php?u=https://fb.watch/fHmS4XR6FW/', 'https://twitter.com/intent/tweet?url=https%3A%2F%2Ffb.watch%2FfHm_oy29U6%2F&text=Conferencia%20Nacional&via=FacebookWatch&fbclid=IwAR1zBy8iksIbBLwm4B6ZW3kxp4teGJ5ciuQbfTgKgwdQJODlAB3VI_FEzVc', 'https://api.whatsapp.com/send?text=https%3A%2F%2Ffb.watch%2FfHm_rkn3yU%2F&fbclid=IwAR3KnbhRwQSraJGKs6tgrLDhf-QyBAy9BEKkxYfyqfjSbxe7OIjbqYKsqpw', 'https://www.facebook.com/plugins/video.php?height=314&href=https%3A%2F%2Fwww.facebook.com%2Fcoaliciontrinacional.seccionmexicana%2Fvideos%2F656732975576417%2F&show_text=false&width=560&t=0', 1),
(4, '2022-09-10', 'Conferencias', 'Conferences', 'Tema II. Nos dimos cuenta de que no estábamos preparados; Las medidas del gobierno en la pandemia de COVID. Evaluación de políticas gubernamentales y de acciones de las comunidades académicas (estudia', 'Tema II. Nos dimos cuenta de que no estábamos preparados; Las medidas del gobierno en la pandemia de COVID. Evaluación de políticas gubernamentales y de acciones de las comunidades académicas (estudia', 'Coalición trinacional', 'Coalición trinacional', 'México', 'Mexico', '- Evaluación de políticas educativas. Sara Unda. Profesora FES Zaragoza UNAM <br> - Acciones desde las comunidades. MMPV', '- Evaluación de políticas educativas. Sara Unda. Profesora FES Zaragoza UNAM <br> - Acciones desde las comunidades. MMPV', 'https://www.facebook.com/sharer/sharer.php?u=https://fb.watch/fHn20qoB1c/', 'https://l.facebook.com/l.php?u=https%3A%2F%2Ftwitter.com%2Fintent%2Ftweet%3Furl%3Dhttps%253A%252F%252Ffb.watch%252FfHn8eDkUKX%252F%26text%3Dconferencia%2520nacional%26via%3DFacebookWatch%26fbclid%3DIwAR1Jr9b3O2ITH5-lxaIpVMvd8UcDEnWKPJGA1VJYjNrkbvRI-3OoHtrdeBQ&h=AT1oP-pClMAhaXAk4uUmvcyCicnlmuZ_cA40w4EnyL8Ix4-mCZIVLrTJKAEZJRgBbWvswmSU4OQbrrj4de4P3FhoXA_NgOzr7U7RZhJgljgtrPdQhNthmGH2ccziO4t956UigvcIC_1GjcRuCgcUpQ&__tn__=J]-R&c[0]=AT1LkWga-gInoQd9Fc6qFAo98fEDDjiQHQX50AcL3xrX1pdWK1dJlF2m07611XR0vaUWUuvgCSE7AWTwaEXSLTc39uaWelURm1DTGIjQcMztsp3W2siyD8kO-vjvXwIPSKP-8S4yJI3qiIWvHbyV_9I8MgcihWq9D7wo2HSYp198DFK48B3fmct24E0ZyYYRO0RYILXkG-5IakeL0AQ', 'https://api.whatsapp.com/send?text=https%3A%2F%2Ffb.watch%2FfHn8fD_UW0%2F&fbclid=IwAR3Jrcjw4jJcv43dLwCGdxHg0tzLzslnuW-MJCg2DYk1vJtHf6ocQ-v5j6M', 'https://www.facebook.com/plugins/video.php?height=314&href=https%3A%2F%2Fwww.facebook.com%2Fcoaliciontrinacional.seccionmexicana%2Fvideos%2F435603585064145%2F&show_text=false&width=560&t=0', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `web`
--

CREATE TABLE `web` (
  `idweb` int(11) NOT NULL,
  `posicion` varchar(15) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `contenidoes` varchar(1000) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `contenidoen` varchar(1000) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `condicion` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `web`
--

INSERT INTO `web` (`idweb`, `posicion`, `contenidoes`, `contenidoen`, `condicion`) VALUES
(1, 'titulop', 'Coalición Trinacional en la Defensa de la Educación', 'Tri-National Coalition in defense of education', 1),
(2, 'descripcionp', 'La Sección Mexicana de la Coalición Trinacional en Defensa de la Educación Pública es un espacio donde confluyen las distintas tendencias democráticas del sindicalismo educativo mexicano. La coalición es un esfuerzo de convergencia de sindicatos universitarios secciones delegaciones democráticas del SNTE-CNTE y de sindicalistas-internacionalistas.', 'The Mexican Section of the Trinational Coalition in Defense of Public Education is a space where the different democratic tendencies of Mexican educational unionism converge. The coalition is an effort of convergence of university unions sections democratic delegations of the SNTE-CNTE and of unionist-internationalists.', 1),
(3, 'tcoalicion', 'Coalición', 'Tri-National', 1),
(4, 'tdefensa', 'Trinacional en Defensa', 'Coalition in defense', 1),
(5, 'teducacion', 'de la Educación Pública', 'of the Public education', 1),
(6, 'tinicio', 'Inicio', 'Home', 1),
(7, 'tquienes', 'Quienes Somos', 'About Us', 1),
(8, 'cquienes', 'Conoce nuestro origen demandas historia así como a las y los integrantes de la Coalición Trinacional en Defensa de la Educación Pública.', 'Learn about the origin of the demands of history and the members of the Trinational Coalition in Defense of Public Education.', 1),
(9, 'torigen', 'Origen e Historia', 'Origin and History', 1),
(10, 'tdefendemos', 'Lo que Defendemos', 'What We Stand For', 1),
(11, 'tactualidad', 'Actualidad', 'Present', 1),
(12, 'cactualidad', 'Entérate de las acciones cotidianas llevadas a cabo por las organizaciones de la Coalición Trinacional en Defensa de la Educación Pública.', 'Find out about the daily actions carried out by the organizations of the Trinational Coalition in Defense of Public Education.', 1),
(13, 'tacciones', 'Acciones', 'Actions', 1),
(14, 'tcolabora', 'Colaboraciones', 'Collaborations', 1),
(15, 'tluchas', 'Nuestras Luchas', 'Our Struggles', 1),
(16, 'cluchas', 'Conoce nuestra trayectoria de lucha en 30 años de organización y solidaridad internacional.', 'Learn about our trajectory of struggle in 30 years of international organization and solidarity.', 1),
(17, 'tcampañas', 'Campañas', 'Campaigns', 1),
(18, 'tforos', 'Foros', 'Forums', 1),
(19, 'tconferencias', 'Conferencias Trinacionales', 'Trinational Conferences', 1),
(20, 'tconferencia', 'Conferencias', 'Conference', 1),
(21, 'tsolidaridad', 'Solidaridad Internacional', 'International Solidarity', 1),
(22, 'tsolida', 'Solidaridad', 'Solidarity', 1),
(23, 'tarchivo', 'Archivo Trinacional', 'Trinational Archive', 1),
(24, 'carchivo', 'Consulta nuestras publicaciones y material documental en Defensa de la Educación Pública (México Estados Unidos y Canadá).', 'Check out our publications and documentary material in Defense of Public Education (Mexico United States and Canada).', 1),
(25, 'tbiblioteca', 'Biblioteca', 'Library', 1),
(26, 'themeroteca', 'Hemeroteca', 'Newspaper', 1),
(27, 'tpodcast', 'Podcast', 'Podcast', 1),
(28, 'tvideoteca', 'Videoteca', 'Video library', 1),
(29, 'tgaleria', 'Galería Fotos', 'Photo Gallery', 1),
(30, 'tblogs', 'Blogs', 'Blogs', 1),
(31, 'tidioma', 'Lenguaje', 'Language', 1),
(32, 'tespañol', 'Español', 'Spanish', 1),
(33, 'despañol', 'es', 'es', 1),
(34, 'tingles', 'Inglés', 'English', 1),
(35, 'dingles', 'en', 'en', 1),
(36, 'tnoticias', 'Noticias Nuevas', 'New News', 1),
(37, 'tfacebook', 'Facebook', 'Facebook', 1),
(38, 'teventos', 'Próximos Eventos', 'Upcoming Events', 1),
(39, 'tfecha', 'Fecha', 'Date', 1),
(40, 'tevento', 'Evento', 'Event', 1),
(41, 'tn-evento', 'Titulo', 'Name', 1),
(42, 'tcarteles', 'Carteles de Eventos', 'Event Posters', 1),
(43, 'torganiza', 'Organizaciones', 'Organizations', 1),
(44, 'titulodestacado', 'Noticias Destacadas', 'Outstanding news', 1),
(45, 'titulovideo', 'Video Destacado', 'Featured Video', 1),
(46, 'compartir', 'Compartir en:', 'share on:', 1),
(47, 'publica', 'Publicaciones', 'Publications', 1),
(48, 'ultimasentradas', 'Entradas Recientes', 'Recent logins', 1),
(49, 'corganiza', 'Conoce las organizaciones sindicales y sociales que difienden la educación pública en México Estados Unidos y Canadá. A partir de una agenda en común elabora propuestas y acciones que impulsan la lucha de muchas y muchos otros por la defensa de la Educación Pública.', 'Learn about the trade union and social organizations that defend public education in Mexico the United States and Canada. Based on a common agenda it develops proposals and actions that promote the struggle of many and many others for the defense of Public Education.', 1),
(50, 'tsiguenos', 'Síguenos en', 'Follow us on', 1),
(51, 'tcalle', 'Calle Conocida #23 Col. Centro Cd de México México', 'Calle Conocida #23 Col. Centro Cd de México Mexico', 1),
(52, 'ttelefono', '+012 345 67890', '+012 345 67890', 1),
(53, 'temail', 'contacto@coaliciontrinacional.org', 'contacto@coaliciontrinacional.org', 1),
(54, 'twww', 'https://www.coaliciontrinacional.org/', 'https://www.coaliciontrinacional.org/', 1),
(55, 'tredes', 'Redes Sociales', 'Social Media', 1),
(56, 'tanuncio', 'Ya falta poco para nuestro encuentro en este gran evento tan esperado...', 'Its almost time for our meeting in this long-awaited great event...', 1),
(57, 'tdescargar', 'Descargar', 'Download', 1),
(58, 'verp', 'Ver mas Publicaciones', 'See more publications', 1),
(59, 'verv', 'Ver mas Videos', 'See more Videos', 1),
(60, 'tcontacto', 'Contáctanos', 'contact us', 1),
(61, 'text-contact', '¡Nos encantaría saber de usted!', 'We would love to hear from you!', 1),
(62, 'tnombre', 'Primer Nombre Primer Apellido:', 'First name surname:', 1),
(63, 'tnombre1', 'Escribe tu Primer Nombre  Primer Apellido', 'Write your First Name First Last Name', 1),
(64, 'ttema', 'Tema de interes:', 'Subject of interest:', 1),
(65, 'ttema1', 'Escribe el tema de tu interes', 'Write the topic of your interest', 1),
(66, 'tcorreo', 'Correo Electronico:', 'Email:', 1),
(67, 'tcorreo1', 'Escrime tu correo electronico', 'Write your email', 1),
(68, 'tmensaje', 'Comentario:', 'Comment:', 1),
(69, 'tmensaje1', 'Escrime tu comentario', 'write your comment', 1),
(70, 'tenviar', 'Dar clic para Enviar', 'Click to Send', 1),
(71, 'tderecho', 'Todos los derechos reservados.', 'All rights reserved.', 1),
(72, 'tboton', 'Leer más...  ', 'Read more...', 1),
(73, 'thistoria', 'Origen e Historia', 'Origin and History', 1),
(74, 'thistoria1', '¿Qué es la Coalición Trinacional en Defensa de la Educación Pública?', 'What is the Trinational Coalition in Defense of Public Education?', 1),
(75, 'chistoria', 'Es una instancia de trabajo confluencia de organizaciones sindicales y sociales que difienden la educación pública en México Estados Unidos y Canadá. A partir de una agenda común elabora propuestas y acciones que impulsan la lucha de muchas y muchos otros por la defensa de la Educación Pública.', 'It is a working instance confluence of union and social organizations that differentiate public education in Mexico the United States and Canada. From a common agenda it elaborates proposals and actions that promote the struggle of many and many others for the defense of Public Education.', 1),
(76, 'chistoria1', 'La Coalición Trinacional lleva a cabo análisis de coyuntura económica y política por la que atraviesan los tres países enfocándose en la situación del sector educativo. Además hace suyo el objetivo de dar un seguimiento y generar frentes ante el proceso de privatización de derechos sociales en un marco de mayor autoritarismo y represión por los respectivos gobiernos.', 'The Trinational Coalition carries out analyses of the economic and political situation that the three countries are going through focusing on the situation of the education sector. It also endorses the objective of monitoring and generating fronts against the process of privatization of social rights in a framework of greater authoritarianism and repression by the respective governments.', 1),
(77, 'chistoria2', 'La Coalición ha celebrado una conferencia cada dos años alternando entre México Canadá y Estados Unidos. La 12ª Conferencia en Vancouver nuevamente ofreció la oportunidad a participantes para aprender más sobre las diversas realidades de los tres países al igual que las similitudes que reflejan la influencia de la globalización sobre la educación pública.', 'The Coalition has held a conference every two years alternating between Mexico Canada and the United States. The 12th Conference in Vancouver again offered the opportunity for participants to learn more about the diverse realities of the three countries as well as the similarities that reflect the influence of globalization on public education.', 1),
(78, 'thistoria2', 'Historia de la Coalición Trinacional', 'History of the Trinational Coalition', 1),
(79, 'thistoria3', 'Nuestras Demandas', 'Our Demands', 1),
(80, 'lhistoria1', 'Exigimos mejores condiciones del proceso de enseñanza aprendizaje. Mediante una ampliación de la partida presupuestaria destinada a la educación pública.', 'We demand better conditions for the teaching-learning process. By extending the budget line for public education.', 1),
(81, 'lhistoria2', 'Luchamos por una inclusión de las organizaciones de trabajadores padres de familia y las comunidades en la definición de las políticas educativas y culturales.', 'We fight for the inclusion of worker`s organizations parents and communities in the definition of educational and cultural policies.', 1),
(82, 'lhistoria3', 'Exigimos un alto a la creciente precarización del trabajo docente que se manifiesta en inseguridad en el empleo el predominio de una forma transfigurada de trabajo a destajo (pago por hora)para amplios sectores de trabajadores de la educación sin tiempo pagado para preparar clases evaluar; eventual sin seguridad social ni servicios de salud.', 'We demand an end to the growing precariousness of teaching work which manifests itself in job insecurity the predominance of a transfigured form of piecework (hourly pay) for large sectors of education workers without paid time to prepare classes evaluate; eventual without social security or health services.', 1),
(83, 'lhistoria4', 'Por la defensa de la educación como derecho social: pública laica gratuita en todos los niveles.', 'For the defense of education as a social right: public secular free at all levels.', 1),
(84, 'lhistoria5', 'Por la defensa de una educación crítica científica integral emancipadora.', 'For the defense of a critical scientific integral emancipatory education.', 1),
(85, 'lhistoria6', 'Rechazamos la visión empresarial que concibe a la educación como una mercancía como un negocio.', 'We reject the business vision that conceives of education as a commodity as a business.', 1),
(86, 'lhistoria7', 'Exigimos la eliminación de los exámenes estandarizados los cuáles se han convertido en la forma en que las empresas determinan sin criterios académicos los planes de estudio. En Estados Unidos se aplican desde preescolar hasta educación superior; en México ya invaden todos los niveles educativos. En Canadá también es creciente la aplicación de estas pruebas en educación básica y superior.', 'We demand the elimination of standardized tests which have become the way companies determine curricula without academic criteria. In the United States they apply from preschool to higher education; in Mexico they already invade all levels of education. In Canada the application of these tests in basic and higher education is also growing.', 1),
(87, 'lhistoria8', 'Por una educación que respete la libre autodeterminación de los pueblos.', 'For an education that respects the self-determination of peoples.', 1),
(88, 'lhistoria9', 'Por una educación que respete la diversidad cultural de las comunidades y recupere los valores de solidaridad respeto a la naturaleza y trabajo colectivo de los pueblos originarios.', 'For an education that respects the cultural diversity of the communities and recovers the values of solidarity respect for nature and collective work of the original peoples.', 1),
(89, 'lhistoria10', 'Por una educación que permita formar sujetos sociales para sociedades democráticas.', 'For an education that allows to form social subjects for democratic societies.', 1),
(90, 'tdefendemos1', '¿Que Defendemos?', 'What do we defend?', 1),
(91, 'tdefendemos2', 'El derecho a una Educación Publica', 'The right to a Public Education', 1),
(92, 'tdefendemos3', 'Protección a los Derechos Humanos', 'Protection of Human Rights', 1),
(93, 'tdefendemos4', 'Derecho a la Educación Gratuita', 'Right to Free Education', 1),
(94, 'tdefendemos5', 'No a la privatización de la Educación', 'No to the privatization of education', 1),
(95, 'tdefendemos6', 'No Lucrar la Educación', 'Do not profit from Education', 1),
(96, 'tdefendemos7', 'educación integral y accesible', 'comprehensive and accessible education', 1),
(97, 'tdefendemos8', 'igualdad entre las mujeres y los hombres', 'equality between women and men', 1),
(98, 'tdefendemos9', 'educación pública y gratuita', 'free public education', 1),
(99, 'tdefendemos10', 'educación para adultos', 'adult education', 1),
(100, 'tdefendemos11', 'no a exámenes estandarizados', 'no to standardized tests', 1),
(101, 'tdefendemos12', 'No al racismo la exclusión y la marginalización', 'No to racism exclusion and marginalization', 1),
(102, 'tdefendemos13', 'reducir los fracasos el abandono y la exclusión escolar', 'reduce failures dropouts and school exclusion', 1),
(103, 'tdefendemos14', 'aportes educativos', 'educational contributions', 1),
(104, 'tdefendemos15', 'autonomía institucional', 'institutional autonomy', 1),
(105, 'tdefendemos16', 'difución de la diversidad étnica', 'dissemination of ethnic diversity', 1),
(106, 'tdefendemos17', 'discriminación del personal de la educación', 'discrimination against education personnel', 1),
(107, 'tdefendemos18', 'utilización eficaz de las tecnologías de la información', 'effective use of information technologies', 1),
(108, 'tdefendemos19', 'Estructura Y Funcionamiento', 'Structure and operation', 1),
(109, 'tdefendemos20', 'Principios', 'Principles', 1),
(110, 'tdefendemos21', 'Las conferencias nacionales ordinarias', 'Ordinary national conferences', 1),
(111, 'tdefendemos22', 'Las Conferencias Trinacionales', 'Trinational Conferences', 1),
(112, 'tdefendemos23', 'Las reuniones plenarias ordinarias', 'Ordinary plenary meetings', 1),
(113, 'tdefendemos24', 'La plenaria ordinaria', 'The ordinary plenary', 1),
(114, 'tdefendemos25', 'Una coordinación colegiada', 'A collegial coordination', 1),
(115, 'tdefendemos26', 'Instancias de apoyo', 'Support instances', 1),
(116, 'cdefendemos1', 'Nosotros representamos al personal de la educaciónmiembros de los sindicatos de México de los Estados Unidos y de Canadáque están vinculados con la Coalición Trinacional para la Defensa de la Educación Pública. Nosotros coordinamos las actividades de defensa de la educación pública contra los efectos de la privatización y de la financiación estatal insuficiente que se han acentuado al firmarse el Tratado de Libre Comercio de América del Norte (TLCAN) en 1994 y durante la crisis económica del 2008 a continuación de la cual los gobiernos aplicaron restricciones presupuestarias al sistema de educación. Consideramos que la financiación adecuada y equitativa de la educación pública es una responsabilidad de los Estados y no debe estar sometida a los riesgos de la coyuntura económica.', 'We represent education personnel members of the unions of Mexico the United States and Canada who are linked to the Trinational Coalition for the Defense of Public Education. We coordinate the activities of defending public education against the effects of privatization and insufficient state funding which have been accentuated by the signing of the North American Free Trade Agreement (NAFTA) in 1994 and during the economic crisis of 2008 after which governments applied budgetary restrictions to the education system. We believe that adequate and equitable financing of public education is a responsibility of States and should not be subject to the risks of the economic situation.', 1),
(117, 'cdefendemos2', 'Afirmamos que la formación de base la formación profesional o técnica y la formación superior deben tener en cuenta las cuestiones de seguridad alimentaria la agricultura sostenible el desarrollo energético sostenible y la protección del medio ambiente así como las cuestiones relativas a los derechos humanos a la democracia a las relaciones interculturales al consumo responsable y al comercio equitativo con la perspectiva de un futuro viable.', 'Affirm that basic training vocational or technical training and higher education should take into account issues of food security sustainable agriculture sustainable energy development and environmental protection as well as issues relating to human rights democracy intercultural relations responsible consumption and fair trade  with the prospect of a viable future.', 1),
(118, 'cdefendemos3', 'Consideramos que es absolutamente necesario asegurar un financiamiento adecuado y equitativo de la educación pública. Hay que poner fin al sistema actual que favorece una escuela privada accesible a las clases más adineradas a expensas de una escuela pública con insuficiente financiación.', 'We believe that it is absolutely necessary to ensure adequate and equitable funding for public education. The current system that favours a private school accessible to the wealthiest classes must be put to an end at the expense of an underfunded public school.', 1),
(119, 'cdefendemos4', 'Constatamos por nuestra experiencia y reflexión colectiva que ni las políticas educativas nacionales ni las inversiones están a la altura para enfrentar los desafíos en un mundo donde el acceso más amplio a la educación es más necesario que nunca.', 'We see from our experience and collective reflection that neither national education policies nor investments are up to the challenges in a world where broader access to education is more necessary than ever.', 1),
(120, 'cdefendemos5', 'Tenemos la convicción de que hay que cambiar esta tendencia deplorable. Esto requiere una acción colectiva. Afirmamos que nuestros sistemas educativos necesitan importantes transformaciones democráticas. Vamos a continuar a través de nuestras organizaciones a trabajar sin descanso y solidariamente para que se efectúen cambios que respondan a las necesidades y al bienestar del pueblo.', 'We are convinced that this deplorable trend must be reversed. This requires collective action. We affirm that our education systems need major democratic transformations. We will continue through our organizations to work tirelessly and in solidarity so that changes are made that respond to the needs and well-being of the people.', 1),
(121, 'cdefendemos6', 'Afirmamos que la educación es un derecho social universal fundamental que comprende no solamente la formación general sino también la formación profesional o técnica. Este derecho debe estar asegurado por un servicio público bajo la responsabilidad del Estado y financiado por éste último. En consecuencia combatiremos solidariamente las políticas comerciales y elitistas que rigen en muchos lugares de América del Norte y que conducen a un aumento en la privatización de la educación.', 'We affirm that education is a fundamental universal social right that includes not only general training but also vocational or technical training. This right must be ensured by a public service under the responsibility of the State and financed by the latter. Consequently we will fight in solidarity the trade and elitist policies that govern in many parts of North America and that lead to an increase in the privatization of education.', 1),
(122, 'cdefendemos7', 'La educación no es una mercancía que sirve para enriquecer a las empresas. Los alumnos no son productos. Los padres de los alumnos y los estudiantes no son consumidores ni clientes de la educación. Los miembros del personal de la educación no son simples dispensadores de servicios. Nos oponemos firmemente a que la educación sea incluida en cualquier acuerdo sobre la liberalización del comercio de servicios. Nos oponemos a la comercialización de la educación y del conjunto de servicios públicos a la utilización en la educación de un discurso comercial y a la voluntad de imponer como parámetro la relación costo/beneficio.', 'Education is not a commodity that serves to enrich companies. Students are not products. Parents of students and students are not consumers or customers of education. Education staff members are not just service providers. We are strongly opposed to education being included in any agreement on the liberalization of trade in services. We oppose the commercialization of education and all public services the use in education of a commercial discourse and the will to impose as a parameter the cost/benefit ratio.', 1),
(123, 'cdefendemos8', 'Proclamamos que una educación integral y accesible debe formar personas libres y críticas ciudadanas y ciudadanos activos y comprometidos respetuosos de la diversidad y de los derechos humanos abiertos al mundo preocupados por el futuro del planeta y de su desarrollo duradero y que hayan obtenido una comprensión crítica de la globalización. Que debe formar a mujeres y hombres que estarán preparados para la vida al mundo del trabajo y al aprendizaje continuo más que a estar estrechamente entrenados en vista de un empleo particular.', 'We proclaim that a comprehensive and accessible education must form free and critical people active and committed citizens respectful of diversity and human rights open to the world concerned about the future of the planet and its lasting development and who have obtained a critical understanding of globalization. That it should train women and men who will be prepared for life the world of work and continuous learning rather than being closely trained in view of a particular job.', 1),
(124, 'cdefendemos9', 'Defendemos una educación accesible que sea un instrumento de justicia social y de emancipación de las personas durante toda su vida. Que prometa la igualdad entre las mujeres y los hombres sean cuales sean sus orígenes étnicos sus orientaciones sexuales sus creencias u opciones filosóficas y sus capacidades de aprendizaje. Ella forma seres humanos que preferirán la colaboración y la solidaridad a la competición sin límites que buscarán la paz la resolución justa y pacífica de los conflictos y que se opondrán a la violencia y a la militarización.', 'We defend an accessible education which is an instrument of social justice and emancipation of people throughout their lives. That it promises equality between women and men whatever their ethnic origins their sexual orientations their beliefs or philosophical choices and their learning abilities. It forms human beings who will prefer collaboration and solidarity to unlimited competition who will seek peace the just and peaceful resolution of conflicts and who will oppose violence and militarization.', 1),
(125, 'cdefendemos10', 'Luchamos por una educación pública y gratuita que sea plenamente accesible a todos los niveles de enseñanza y durante toda la vida. Estamos convencidos de que una educación de base obligatoria para todas y todos tanto jóvenes como adultos debería permitirles alcanzar un mínimo de once años de escolaridad. Rechazamos el proverbio que dice que el éxito de una gran cantidad es sinónimo de mediocridad. Afirmamos por el contrario que uno no podría lograr una educación de calidad sin democratización sin la eliminación de las desigualdades.', 'We strive for a free public education that is fully accessible to all levels of education and throughout life. We are convinced that compulsory basic education for all both young and old should enable them to achieve a minimum of eleven years of schooling. We reject the proverb that the success of a large number is synonymous with mediocrity. We affirm on the contrary that one could not achieve quality education without democratization without the elimination of inequalities.', 1),
(126, 'cdefendemos11', 'Apoyamos una visión de la educación de los adultos que garantice el derecho a la educación pública para toda la población adulta. Además exhortamos a los gobiernos a crear las condiciones de una cultura de educación a lo largo de toda la vida multiplicando las ocasiones para aprender en los medios de vida y de trabajo.', 'We support a vision of adult education that guarantees the right to public education for the entire adult population. In addition we urge governments to create the conditions for a culture of lifelong education multiplying opportunities for learning in livelihoods and workplaces.', 1),
(127, 'cdefendemos12', 'Nos oponemos a una concepción de la calidad estrechamente definida a partir de exámenes estandarizados y de otras medidas similares que tienen por efecto reducir la misión de la educación a lo que se puede medir fácilmente y que no tiene en cuenta las necesidades especiales de los estudiantes. Exigimos el retiro de esos exámenes que son utilizados como instrumentos de exclusión.', 'We oppose a narrowly defined conception of quality based on standardized tests and other similar measures that have the effect of reducing the mission of education to what can be easily measured and that does not take into account the special needs of students. We demand the withdrawal of those exams that are used as instruments of exclusion.', 1),
(128, 'cdefendemos13', 'Tenemos el propósito de combatir el racismo la exclusión y la marginalización que afectan a las minorías lingüísticas religiosas y culturales especialmente a los alumnos de las comunidades negras indígenas y latinoamericanas. Afirmamos que los alumnos discapacitados o con dificultad de adaptación o de aprendizaje los niños de la calle trabajadores o itinerantes deben tener acceso a servicios especiales que aseguren su escolarización. Por último exigimos que se preste una atención especial a la educación rural y al respeto a la cultura campesina.', 'Our purpose is to combat racism exclusion and marginalization which affect linguistic religious and cultural minorities especially students from black indigenous and Latin American communities. We affirm that students with disabilities or with difficulties in adaptation or learning street children workers or itinerant children should have access to special services that ensure their schooling. Finally we demand that special attention be paid to rural education and respect for peasant culture.', 1),
(129, 'cdefendemos14', 'Tenemos el propósito de continuar contribuyendo a la elaboración de modelos y de acercamientos pedagógicos que respondan a las necesidades sociales económicas y culturales de nuestros pueblos que aspiren a reducir los fracasos el abandono y la exclusión escolar. Favorecemos una gestión democrática de la educación en todos los niveles de la enseñanza y en todas las instituciones basada en la participación del personal de los estudiantes y de la comunidad.', 'We intend to continue contributing to the development of models and pedagogical approaches that respond to the social economic and cultural needs of our peoples which aspire to reduce failures dropout and school exclusion. We promote a democratic management of education at all levels of education and in all institutions based on the participation of staff students and the community.', 1),
(130, 'cdefendemos15', 'Reconocemos la importancia de los servicios que vienen a apoyar la acción educativa en el ambiente escolar así como el aporte educativo de otras instituciones (bibliotecas públicas estaciones de radio y canales de televisión educativos). Reconocemos la contribución y la valorización de los participantes de los medios de educación popular y de la acción comunitaria.', 'We recognize the importance of the services that come to support educational action in the school environment as well as the educational contribution of other institutions (public libraries radio stations and educational television channels). We recognize the contribution and appreciation of the participants of the means of popular education and community action.', 1),
(131, 'cdefendemos16', 'Afirmamos la necesidad de una enseñanza pública superior accesible gratuita y de calidad que sea respetuosa de la libertad académica de la libertad académica y de la autonomía institucional de las universidades y que garantice que las investigaciones sean al servicio del desarrollo de la sociedad y que no estén sujetas a las necesidades y requisitos de las empresas privadas.', 'We affirm the need for accessible free and quality higher public education which respects academic freedom academic freedom and the institutional autonomy of universities and ensures that research is at the service of the development of society and that it is not subject to the needs and requirements of private companies.', 1),
(132, 'cdefendemos17', 'Creemos en una educación laica respetuosa de las creencias religiosas y filosóficas del derecho a la secularización a la libertad de conciencia y a la igualdad.', 'We believe in a secular education respectful of religious and philosophical beliefs the right to secularization freedom of conscience and equality.', 1),
(133, 'cdefendemos18', 'Apoyamos la lucha de las naciones autóctonas y de los pueblos indígenas que exigen un control de sus instituciones educativas a fin de asegurar el respeto y la promoción de sus lenguas de sus culturas y de su herencia y de una educación que valorice y difunda la diversidad étnica así como la pluralidad cultural y lingüística. La educación pública debe integrar la historia y a la cultura de estos pueblos y el personal debe estar formado en ese sentido.', 'We support the struggle of indigenous nations and indigenous peoples who demand control of their educational institutions in order to ensure respect for and promotion of their languages cultures and heritage and for an education that values and disseminates ethnic diversity as well as cultural and linguistic plurality. Public education must integrate the history and culture of these peoples and staff must be trained in that regard.', 1),
(134, 'cdefendemos19', 'Reconocemos la importancia que tiene para las comunidades lingüísticas nacionales minoritarias el ejercer el control de sus instituciones educativas a fin de asegurar la difusión y la promoción de su lengua y su cultura.', 'We recognize the importance for national minority language communities of exercising control over their educational institutions in order to ensure the dissemination and promotion of their language and culture.', 1),
(135, 'cdefendemos20', 'Denunciamos la situación de desigualdad vivida por las mujeres que componen la gran mayoría del personal de la educación. Ellas deben recibir beneficios de protección de maternidad adecuada. Nos comprometemos también a luchar contra toda forma de discriminación relacionada al empleo.', 'We denounce the situation of inequality experienced by women who make up the vast majority of education personnel. They should receive adequate maternity protection benefits. We are also committed to combating all forms of employment-related discrimination.', 1),
(136, 'cdefendemos21', 'Afirmamos que los cambios necesarios para una educación democrática exigen una formación inicial sólida del personal de la educación así como una formación continua gratuita y accesible a todos y todas.<br  Para terminar reafirmamos con convicción que la educación es un derecho no un privilegio. La democracia a la que aspiramos está hecha de igualdad de libertad para todos y de solidaridad. Ella se basa en la dignidad de la persona en las buenas condiciones de vida en el respeto de los derechos políticos económicos culturales ambientales y sociales de todas y de todos.', 'We affirm that the changes necessary for democratic education require a solid initial training of education personnel as well as free continuing training accessible to all. <br> Finally we reaffirm with conviction that education is a right not a privilege. The democracy to which we aspire is made up of equality freedom for all and solidarity. It is based on the dignity of the person on good living conditions on respect for the political economic cultural environmental and social rights of all.', 1),
(137, 'cdefendemos22', 'Reconocemos la importancia de una utilización eficaz de las tecnologías de la información y de la comunicación (TIC) con fines educativos que respondan a las necesidades y prioridades identificadas por la comunidad y no por los intereses comerciales. Favorecemos en particular la creación de una red con el propósito de compartir los conocimientos y la difusión de una cultura de trabajo en colaboración. Llamamos la atención sobre los riesgos relacionados a una utilización restringida de los TIC y sobre las prácticas que tratan de eludir la soberanía nacional en educación. Nos oponemos de este modo a una utilización de la educación virtual y a distancia como sustituto a una educación directa y de calidad.', 'We recognize the importance of the effective use of information and communication technologies (ICTs) for educational purposes that respond to the needs and priorities identified by the community and not by commercial interests. We favour in particular the creation of a network with the purpose of sharing knowledge and spreading a culture of collaborative work. We draw attention to the risks associated with a restricted use of ICTs and to practices that seek to circumvent national sovereignty in education. We are thus opposed to the use of virtual and distance education as a substitute for direct and quality education.', 1),
(138, 'cdefendemos23', 'La sección mexicana de la Coalición Trinacional se rige por principios democráticos:', 'The Mexican section of the Trinational Coalition is governed by democratic principles:', 1),
(139, 'cdefendemos24', 'Prioriza la unidad en la diversidad de las organizaciones que la conforman.', 'Prioritize unity in the diversity of the organizations that make it up.', 1),
(140, 'cdefendemos25', 'La toma de decisiones es por consenso', 'Decision making is by consensus', 1),
(141, 'cdefendemos26', 'Reivindica la solidaridad internacional de clase', 'Calls for international class solidarity', 1),
(142, 'cdefendemos27', 'La participación es voluntaria consciente y definida por las instancias de cada sindicato o sección sindical.En su funcionamiento la Sección Mexicana cuenta con tres instancias:', 'Participation is voluntary conscious and defined by the bodies of each union or trade union section. In its operation the Mexican Section has three instances:', 1),
(143, 'cdefendemos28', 'Se realizan cada dos años asisten los delegados nombrados para tal efecto por sus sindicatos o secciones. Las extraordinarias dependiendo de las necesidades y del período de realización de', 'They are held every two years attended by delegates appointed for this purpose by their unions or sections. The extraordinary ones depending on the needs and the period of realization of', 1),
(144, 'cdefendemos29', 'En ellas se discuten los problemas centrales de coyuntura y de período se definen líneas generales de plan de trabajo para presentarlos a la Conferencia Trinacional.', 'They discuss the central problems of conjuncture and period define general lines of work plan to present them to the Trinational Conference.', 1),
(145, 'cdefendemos30', 'Se realizan con una periodicidad mensual (el primer sábado de cada mes) y a ellas asisten al menos un representante de cada sindicato sección o delegación y de los académicos-sindicalistas. Si hay asuntos urgentes se realizan reuniones plenarias extraordinarias convocadas por la coordinación colegiada.', 'They are held on a monthly basis (the first Saturday of each month) and are attended by at least one representative of each union section or delegation and of the academic-trade unionists. If there are urgent matters extraordinary plenary meetings are held convened by the collegiate coordination.', 1),
(146, 'cdefendemos31', 'Analiza los problemas de la coyuntura y define las acciones a realizar en el período; asigna tareas y responsabilidades nombra a los delegados entre los compañeros representantes de los sindicatos y las secciones para asistir a los eventos nacionales e internacionales a los que es convocada la sección mexicana.', 'Analyzes the problems of the conjuncture and defines the actions to be carried out in the period; assigns tasks and responsibilities appoints delegates among the fellow representatives of the unions and sections to attend the national and international events to which the Mexican section is summoned.', 1),
(147, 'cdefendemos32', 'Formada por dos representantes de las organizaciones de educación básica dos representantes de las organizaciones de educación superior y un académico sindicalista (Cinco integrantes). La Coordinación Colegiada será nombrada por la Conferencia Nacional ordinaria.', 'Formed by two representatives of basic education organizations two representatives of higher education organizations and one academic unionist (Five members). The Collegiate Coordination shall be appointed by the ordinary National Conference.', 1),
(148, 'cdefendemos33', 'Esta coordinación colegiada dura dos años en funciones para su renovación se buscará que haya rotación de las organizaciones sindicales de cada nivel que asuman esta responsabilidad y de los académicos-sindicalistas a efecto de que todas las organizaciones participen de esta responsabilidad en algún momento.', 'This collegiate coordination lasts two years in office for its renewal it will be sought that there is rotation of the trade union organizations of each level that assume this responsibility and of the academic-unionists so that all the organizations participate in this responsibility at some point.', 1),
(149, 'cdefendemos34', 'La sección mexicana organiza comisiones y equipos de apoyo para su mejor funcionamiento entre otros un Comité Editorial responsable de la edición de la revista de la Coalición y de otras publicaciones una Secretaria Técnica que da seguimiento a los acuerdos de las instancias organiza el archivo el directorio y mantiene la vinculación permanente entre los integrantes de la coalición.', 'The Mexican section organizes commissions and support teams for its better functioning among others an Editorial Committee responsible for the edition of the Coalition`s magazine and other publications a Technical Secretariat that follows up on the agreements of the instances organizes the archive the directory and maintains the permanent link between the members of the coalition.', 1),
(150, 'temail2', 'infocoali@coaliciontrinacional.org', 'infocoali@coaliciontrinacional.org', 1),
(151, 'temail3', 'trinationalusa@coaliciontrinacional.org', 'trinationalusa@coaliciontrinacional.org', 1),
(152, 'temail4', 'trinationalcanada@coaliciontrinacional.org', 'trinationalcanada@coaliciontrinacional.org', 1),
(153, 'tvisualizar', 'Visualizar Video', 'View Video', 1),
(154, 'tgaleria3', 'Contenido', 'Contents', 1),
(155, 'tgaleria4', 'Archivos Historicos', 'Historical Archives', 1),
(156, 'tconferencia3', 'Contenido', 'Contents', 1),
(157, 'tconferencia4', 'Archivos Historicos', 'Historical Archives', 1),
(158, 'topcion', 'Opcion', 'Option', 1),
(159, 'tpresiona', 'Presiona para ver el contenido completo', 'Click to see the full content', 1),
(160, 'tseccionmx', 'Sección México', 'Mexico Section', 1),
(161, 'tseccionca', 'Sección Canada', 'Canada Section', 1),
(162, 'tseccionus', 'Sección Estados Unidos', 'United States Section', 1),
(163, 'tseccioninfo', 'Información Trinacional', 'Tri-national Information', 1),
(164, 'tpara', 'Para', 'For', 1),
(165, 'tgracias', 'Gracias por Contactarnos', 'Thank you for contacting us', 1),
(166, 'tcancelar', 'Cancelar', 'Cancel', 1),
(167, 'tpagina', 'Pagina', 'Page', 1),
(168, 'tdefinir', 'La Coalición Trinacional en Defensa de la Educación Pública es un espacio donde confluyen las distintas tendencias democráticas del sindicalismo educativo mexicano. La coalición es un esfuerzo de convergencia de sindicatos universitarios secciones delegaciones democráticas del SNTE-CNTE y de sindicalistas-internacionalistas; ha generado espacios sociales en defensa de la educación pública donde han participado padres de familia estudiantes organizaciones sociales y personas interesadas en apoyar la educación pública como un derecho social.', 'The Trinational Coalition in Defense of Public Education is a space where the different democratic tendencies of Mexican educational unionism converge. The coalition is an effort of convergence of university unions sections democratic delegations of the SNTE-CNTE and unionists-internationalists; it has generated social spaces in defense of public education where parents students social organizations and people interested in supporting public education as a social right have participated.', 1),
(169, 'tprueba', 'prueba', 'test', 1),
(170, 'text-gal1', 'Acciones Trinacionales', 'Trinational Actions', 1),
(171, 'text-gal2', 'Colaboraciones Internacionales', 'International Collaborations', 1),
(172, 'text-gal3', 'Campañas', 'Bells', 1),
(173, 'text-gal4', 'Foros', 'Forums', 1),
(174, 'text-gal5', 'Conferencias', 'Conferences', 1),
(175, 'text-gal6', 'Solidaridad Internacional', 'International Solidarity', 1),
(176, 'cont-gal1', 'Aqui encontraras albunes de los eventos y acciones tinacionales que la Coalición realiza en Defensa de la Educación Pública.', 'Here you will find albums of the international events and actions that the Coalition carries out in Defense of Public Education.', 1),
(177, 'cont-gal2', 'Aqui encontraras albunes de los eventos y acciones tinacionales que la Coalición realiza en Defensa de la Educación Pública.', 'Here you will find albums of the international events and actions that the Coalition carries out in Defense of Public Education.', 1),
(178, 'cont-gal3', 'Aqui encontraras albunes de los eventos y acciones tinacionales que la Coalición realiza en Defensa de la Educación Pública.', 'Here you will find albums of the international events and actions that the Coalition carries out in Defense of Public Education.', 1),
(179, 'cont-gal4', 'Aqui encontraras albunes de los eventos y acciones tinacionales que la Coalición realiza en Defensa de la Educación Pública.', 'Here you will find albums of the international events and actions that the Coalition carries out in Defense of Public Education.', 1),
(180, 'cont-gal5', 'Aqui encontraras albunes de los eventos y acciones tinacionales que la Coalición realiza en Defensa de la Educación Pública.', 'Here you will find albums of the international events and actions that the Coalition carries out in Defense of Public Education.', 1),
(181, 'cont-gal6', '<b><i>Aqui encontraras albunes</i></b> de los eventos y acciones tinacionales que la Coalición realiza en Defensa de la Educación Pública.', '<b><i>Here you will find</i></b> albums of the international events and actions that the Coalition carries out in Defense of Public Education.', 1),
(184, 'ztitulo', 'test', 'test', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `articulo`
--
ALTER TABLE `articulo`
  ADD PRIMARY KEY (`idarticulo`);

--
-- Indices de la tabla `carousel`
--
ALTER TABLE `carousel`
  ADD PRIMARY KEY (`idcarousel`);

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`idcategoria`);

--
-- Indices de la tabla `galeria`
--
ALTER TABLE `galeria`
  ADD PRIMARY KEY (`idgaleria`);

--
-- Indices de la tabla `historia`
--
ALTER TABLE `historia`
  ADD PRIMARY KEY (`idhistoria`);

--
-- Indices de la tabla `organiza`
--
ALTER TABLE `organiza`
  ADD PRIMARY KEY (`idorganiza`);

--
-- Indices de la tabla `permiso`
--
ALTER TABLE `permiso`
  ADD PRIMARY KEY (`idpermiso`);

--
-- Indices de la tabla `publica`
--
ALTER TABLE `publica`
  ADD PRIMARY KEY (`idpublica`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idusuario`);

--
-- Indices de la tabla `usuario_permiso`
--
ALTER TABLE `usuario_permiso`
  ADD PRIMARY KEY (`idusuario_permiso`),
  ADD KEY `fk_usuario_permiso_usuario_idx` (`idusuario`),
  ADD KEY `fk_usuario_permiso_permiso_idx` (`idpermiso`);

--
-- Indices de la tabla `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`idvideo`);

--
-- Indices de la tabla `web`
--
ALTER TABLE `web`
  ADD PRIMARY KEY (`idweb`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `articulo`
--
ALTER TABLE `articulo`
  MODIFY `idarticulo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `carousel`
--
ALTER TABLE `carousel`
  MODIFY `idcarousel` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `idcategoria` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `galeria`
--
ALTER TABLE `galeria`
  MODIFY `idgaleria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `historia`
--
ALTER TABLE `historia`
  MODIFY `idhistoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `organiza`
--
ALTER TABLE `organiza`
  MODIFY `idorganiza` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `permiso`
--
ALTER TABLE `permiso`
  MODIFY `idpermiso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `publica`
--
ALTER TABLE `publica`
  MODIFY `idpublica` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idusuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `usuario_permiso`
--
ALTER TABLE `usuario_permiso`
  MODIFY `idusuario_permiso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `video`
--
ALTER TABLE `video`
  MODIFY `idvideo` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `web`
--
ALTER TABLE `web`
  MODIFY `idweb` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=185;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `usuario_permiso`
--
ALTER TABLE `usuario_permiso`
  ADD CONSTRAINT `fk_usuario_permiso_permiso` FOREIGN KEY (`idpermiso`) REFERENCES `permiso` (`idpermiso`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_usuario_permiso_usuario` FOREIGN KEY (`idusuario`) REFERENCES `usuario` (`idusuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
