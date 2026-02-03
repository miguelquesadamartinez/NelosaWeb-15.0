# Historial de Cambios

## [1.0.0] - 2026-02-03

### ✨ Añadido

- ✅ Configuración completa de Docker con docker-compose.yml
- ✅ Dockerfile para PHP 5.6 con soporte legacy mysql\_\*
- ✅ Servicio MySQL 5.7 con configuración óptima
- ✅ Servicio phpMyAdmin para gestión de BD
- ✅ Scripts de importación de bases de datos (Windows y Linux)
- ✅ Scripts de inicialización automática de BD
- ✅ README.md completo con documentación exhaustiva
- ✅ QUICK-START.md con guía rápida de inicio
- ✅ CONFIGURATION.md con opciones de configuración avanzada
- ✅ Instrucciones para GitHub Copilot (.github/copilot-instructions.md)
- ✅ .dockerignore y .gitignore optimizados
- ✅ Documentación de estructura de base de datos

### 📝 Documentado

- ✅ Arquitectura completa del proyecto
- ✅ Estructura de directorios con emojis y descripciones
- ✅ Sistema multiidioma (6 idiomas)
- ✅ Funciones core del sistema
- ✅ Patrones de conexión a base de datos
- ✅ Sistema de sesiones (legacy)
- ✅ Vulnerabilidades de seguridad conocidas
- ✅ Comandos Docker útiles
- ✅ Troubleshooting común
- ✅ Tablas de bases de datos principales

### 🔧 Configurado

- ✅ PHP 5.6 con extensiones mysql, mysqli, pdo
- ✅ Apache con mod_rewrite habilitado
- ✅ MySQL 5.7 con authentication plugin legacy
- ✅ Charset ISO-8859-1 (Latin1) para compatibilidad
- ✅ Variables de entorno para desarrollo
- ✅ Volúmenes persistentes para MySQL
- ✅ Red Docker bridge personalizada
- ✅ Puertos expuestos (8080, 8081, 3306)

### 📦 Incluido

- ✅ Backups completos de bases de datos en `Varios/Copias DB´s/`
- ✅ Base de datos principal: nelosa.net.sql
- ✅ Base de datos de textos: nelosa_net_textos.sql
- ✅ Base de datos de impresoras (opcional)
- ✅ Base de datos eMiKi (opcional)

### ⚠️ Notas de Seguridad

- ⚠️ Código legacy con vulnerabilidades conocidas
- ⚠️ NO usar en producción sin refactoring completo
- ⚠️ SQL injection risks (sin prepared statements)
- ⚠️ Credenciales hardcoded en código
- ⚠️ Funciones deprecated (mysql\_\*, session_register)

### 🎯 Próximos Pasos Sugeridos

- [ ] Migración de mysql\_\* a mysqli o PDO
- [ ] Actualización a PHP 7.4/8.x
- [ ] Implementar prepared statements
- [ ] Externalizar configuración (credenciales)
- [ ] Añadir sanitización de inputs
- [ ] Migrar sesiones a $\_SESSION
- [ ] Tests automatizados
- [ ] CI/CD pipeline
- [ ] Modernización del frontend
- [ ] Documentación de API (si se crea)

### 📊 Estadísticas del Proyecto

- **Líneas de código PHP**: ~10,000+
- **Tablas de base de datos**: ~50+
- **Idiomas soportados**: 6
- **Años de código**: ~20+ años
- **Versión PHP mínima**: 5.6
- **Versión MySQL mínima**: 5.5
- **Tamaño de backups**: ~50MB

### 👥 Contribuidores

- **Miguel Quesada Martínez** - Desarrollo original (2000-2005)
- **Miguel Quesada Martínez** - Dockerización y documentación (2026)

---

## Formato de Versionado

Este proyecto sigue [Semantic Versioning](https://semver.org/):

- **MAJOR**: Cambios incompatibles en API
- **MINOR**: Nuevas funcionalidades compatibles
- **PATCH**: Correcciones de bugs compatibles

## Categorías de Cambios

- **✨ Añadido**: Nuevas funcionalidades
- **🔧 Cambiado**: Cambios en funcionalidad existente
- **🐛 Corregido**: Corrección de bugs
- **⚠️ Deprecated**: Funcionalidades obsoletas
- **🗑️ Eliminado**: Funcionalidades removidas
- **🔒 Seguridad**: Parches de seguridad
- **📝 Documentado**: Mejoras en documentación
