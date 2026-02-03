-- Script de inicialización de base de datos para NelosaWeb
-- Crea las bases de datos necesarias con el charset correcto

-- Base de datos principal
CREATE DATABASE IF NOT EXISTS `nelosa_nelosa` 
    DEFAULT CHARACTER SET latin1 
    COLLATE latin1_spanish_ci;

-- Base de datos de textos multiidioma
CREATE DATABASE IF NOT EXISTS `nelosa_nelosa_textos` 
    DEFAULT CHARACTER SET latin1 
    COLLATE latin1_spanish_ci;

-- Otorgar permisos al usuario
GRANT ALL PRIVILEGES ON `nelosa_nelosa`.* TO 'nelosa_nelosa'@'%' IDENTIFIED BY 'mqm1804';
GRANT ALL PRIVILEGES ON `nelosa_nelosa_textos`.* TO 'nelosa_nelosa'@'%' IDENTIFIED BY 'mqm1804';

FLUSH PRIVILEGES;
