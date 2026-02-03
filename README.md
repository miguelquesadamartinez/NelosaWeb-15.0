# Nelosa Web - Sitio Web Legacy de E-commerce

![License](https://img.shields.io/badge/license-MIT-blue.svg)
![PHP](https://img.shields.io/badge/PHP-5.6-purple.svg)
![MySQL](https://img.shields.io/badge/MySQL-5.7-orange.svg)

## 📋 Descripción del Proyecto

**Nelosa Web** es un sitio web de e-commerce legacy desarrollado a principios de los años 2000 para **Nelosa Accesorios**, una empresa española especializada en la venta de consumibles para impresoras, kits de recarga de tinta, y accesorios multimedia.

### Características Principales

- 🌍 **Sistema multiidioma**: Soporte para 6 idiomas (Español, Catalán, Inglés, Francés, Holandés, Portugués)
- 🛒 **Carrito de compra**: Sistema completo de pedidos online
- 👥 **Gestión de clientes**: Registro de usuarios y distribuidores
- 💬 **Sistema de foros**: Comunidad de usuarios integrada
- 📧 **Sistema de mailing**: Newsletter y comunicaciones con clientes
- 🖨️ **Base de datos de impresoras**: Instrucciones de recarga por marca/modelo
- 📦 **Gestión de productos**: Catálogo completo con descripciones multiidioma

## 🏗️ Arquitectura del Proyecto

### Tecnologías Utilizadas

| Tecnología     | Versión | Descripción                                             |
| -------------- | ------- | ------------------------------------------------------- |
| **PHP**        | 5.6     | Lenguaje de programación (último con soporte mysql\_\*) |
| **MySQL**      | 5.7     | Sistema de gestión de bases de datos                    |
| **Apache**     | 2.4     | Servidor web                                            |
| **Docker**     | 20.x+   | Contenedorización                                       |
| **phpMyAdmin** | Latest  | Administración de BD vía web                            |

### Estructura de Directorios

```
NelosaWeb-15.0/
├── gueb/                      # 🎯 Aplicación principal (ACTIVO)
│   ├── index.php              # Entrada principal (español)
│   ├── index.cat.php          # Entrada catalana
│   ├── index.eng.php          # Entrada inglesa
│   ├── index.fra.php          # Entrada francesa
│   ├── eMiKi/                 # ⚙️ Core del sistema
│   │   ├── Funciones_PHP.php  # Funciones principales (DB, textos)
│   │   ├── headers/           # Headers y sesiones
│   │   ├── Seg/               # Área administrativa segura
│   │   ├── db.manager/        # Gestión de base de datos
│   │   ├── emailCtrl/         # Control de emails
│   │   └── printer-db-mant/   # Mantenimiento BD impresoras
│   ├── paginas/               # 📄 Páginas principales
│   │   ├── productos/         # Catálogo de productos
│   │   ├── foro/              # Sistema de foros
│   │   ├── club/              # Registro de usuarios
│   │   ├── instrucciones/     # Instrucciones de recarga
│   │   └── varias/            # Páginas diversas
│   └── Styles/                # 🎨 Hojas de estilo
├── img/                       # 🖼️ Recursos de imágenes
│   ├── a.inkjet/              # Imágenes productos ink-jet
│   ├── a.laser/               # Imágenes productos laser
│   └── varias/                # Imágenes generales
├── archivos/                  # 📁 Recursos estáticos
│   ├── instrucciones.recarga/ # PDFs instrucciones
│   ├── catalogo/              # Catálogos descargables
│   └── video/                 # Videos demostrativos
├── Varios/                    # 🗄️ Recursos varios
│   └── Copias DB´s/           # ⚠️ Backups de base de datos
├── _OLD_/                     # ⛔ Código legacy (NO USAR)
├── docker/                    # 🐳 Configuración Docker
├── .github/                   # 📝 Documentación GitHub
│   └── copilot-instructions.md
├── docker-compose.yml         # 🐳 Orquestación de contenedores
├── Dockerfile                 # 🐳 Imagen PHP personalizada
└── README.md                  # 📖 Este archivo
```

## 🐳 Instalación con Docker

### Requisitos Previos

- [Docker Desktop](https://www.docker.com/products/docker-desktop/) instalado
- Git (opcional, para clonar el repositorio)
- 4GB RAM mínimo disponible
- 10GB espacio en disco

### Inicio Rápido (5 minutos)

#### 1️⃣ Clonar el repositorio (o descargar ZIP)

```bash
git clone https://github.com/tu-usuario/NelosaWeb-15.0.git
cd NelosaWeb-15.0
```

#### 2️⃣ Levantar los contenedores

```bash
docker-compose up -d
```

Esto iniciará 3 servicios:

- **MySQL 5.7** (puerto 3306)
- **Apache + PHP 5.6** (puerto 8080)
- **phpMyAdmin** (puerto 8081)

#### 3️⃣ Importar bases de datos

**En Windows:**

```cmd
docker\import-databases.bat
```

**En Linux/Mac:**

```bash
chmod +x docker/import-databases.sh
./docker/import-databases.sh
```

**Manualmente:**

```bash
# Entrar al contenedor MySQL
docker exec -it nelosa_mysql2 bash

# Importar base de datos principal
mysql -u nelosa_nelosa -pmqm1804 nelosa_nelosa < /backups/nelosa.net.sql

# Importar base de datos de textos
mysql -u nelosa_nelosa -pmqm1804 nelosa_nelosa_textos < /backups/nelosa_net_textos.sql

# Salir
exit
```

#### 4️⃣ Acceder a la aplicación

- **🌐 Sitio Web**: [http://localhost:8080/gueb/](http://localhost:8080/gueb/)
- **💾 phpMyAdmin**: [http://localhost:8081](http://localhost:8081)

### Credenciales de Acceso

#### Base de Datos MySQL

- **Host**: `localhost` (o `mysql` desde contenedores)
- **Puerto**: `3306`
- **Usuario**: `nelosa_nelosa`
- **Contraseña**: `mqm1804`
- **Base de datos principal**: `nelosa_nelosa`
- **Base de datos textos**: `nelosa_nelosa_textos`

#### phpMyAdmin

- **URL**: http://localhost:8081
- **Usuario**: `nelosa_nelosa`
- **Contraseña**: `mqm1804`

## 🗄️ Estructura de Base de Datos

### Base de Datos: `nelosa_nelosa`

| Tabla              | Descripción                                  |
| ------------------ | -------------------------------------------- |
| `Clientes`         | Datos de clientes registrados                |
| `Datas`            | Credenciales de login (email + password)     |
| `prods`            | Catálogo de productos (ref, precios, grupos) |
| `Cart_DB_Pedidos`  | Pedidos realizados                           |
| `Cart_DB_L_Pedido` | Líneas de pedido (detalle)                   |
| `foro_index`       | Temas del foro                               |
| `foro_resp`        | Respuestas del foro                          |
| `foro_aviso`       | Notificaciones de foro                       |
| `emails`           | Lista de emails para newsletter              |
| `Unsuscribed`      | Emails dados de baja                         |
| `Send_Ins`         | Control de envío de instrucciones            |

### Base de Datos: `nelosa_nelosa_textos`

| Tabla                           | Descripción                  |
| ------------------------------- | ---------------------------- |
| `txt_esp`, `txt_cat`, `txt_eng` | Textos traducidos por idioma |
| `txt_fra`, `txt_ned`, `txt_por` | (6 tablas, una por idioma)   |
| `Descs_esp`, `Descs_cat`, etc.  | Descripciones de productos   |

### Bases de Datos Adicionales (opcionales)

- **`nelosa_net_printers`**: Base de datos de impresoras y procedimientos de recarga
- **`nelosa_net_eMiKi`**: Datos administrativos y de gestión

## 🔧 Configuración del Sistema

### Sistema Multiidioma

El sitio soporta 6 idiomas mediante puntos de entrada separados:

```
/gueb/index.php      → Español (por defecto)
/gueb/index.cat.php  → Catalán
/gueb/index.eng.php  → Inglés
/gueb/index.fra.php  → Francés
/gueb/index.ned.php  → Holandés
/gueb/index.por.php  → Portugués
```

**Funcionamiento:**

1. Cada `index.{lang}.php` establece la variable `$idioma`
2. La función `getext($idioma, $text_id)` recupera textos de `txt_{lang}`
3. `getDenom()` y `getDesc()` obtienen descripciones de productos
4. Fallback automático a español si falta traducción + email a `info@nelosa.net`

### Conexiones a Base de Datos

El código utiliza funciones custom en `gueb/eMiKi/Funciones_PHP.php`:

```php
// Conexión estándar (nelosa_nelosa)
$link = conectarse();

// Conexión parametrizada
$link = conectarse_param("nelosa_nelosa_textos");

// Uso correcto (SIEMPRE pasar $link)
$result = mysql_query($query, $link);
```

### Sistema de Sesiones

Variables de sesión registradas en `gueb/eMiKi/headers/vbles_sesion.php`:

```php
session_register('usr');      // Usuario logueado
session_register('distri');   // ¿Es distribuidor?
session_register('idioma');   // Idioma actual
session_register('jost');     // localhost o nelosa.net
```

⚠️ **Nota**: `session_register()` está deprecated desde PHP 5.3.0

### Variable de Host ($jost)

Usada para alternar entre desarrollo y producción:

```php
$jost = "localhost";    // Desarrollo
$jost = "nelosa.net";   // Producción
```

## 🚨 Consideraciones de Seguridad (Legacy Code)

Este es un proyecto legacy con **vulnerabilidades conocidas**:

| ⚠️ Problema                | Descripción                      |
| -------------------------- | -------------------------------- |
| **SQL Injection**          | No usa prepared statements       |
| **Credenciales hardcoded** | Usuario/password en código       |
| **Funciones deprecated**   | `mysql_*` removidas en PHP 7.0   |
| **session_register()**     | Deprecated desde PHP 5.3         |
| **XSS**                    | Sin sanitización de inputs       |
| **Charset mixto**          | ISO-8859-1 + UTF-8 inconsistente |

### ⚠️ NO USAR EN PRODUCCIÓN sin modernización completa

## 🔄 Comandos Docker Útiles

```bash
# Ver logs en tiempo real
docker-compose logs -f web

# Reiniciar servicios
docker-compose restart

# Parar todos los servicios
docker-compose down

# Parar y eliminar volúmenes (⚠️ borra BD)
docker-compose down -v

# Reconstruir imagen PHP
docker-compose build --no-cache web

# Acceder al contenedor web
docker exec -it nelosa_web bash

# Acceder al contenedor MySQL
docker exec -it nelosa_mysql bash

# Ver estado de contenedores
docker-compose ps

# Ver uso de recursos
docker stats
```

## 🐛 Solución de Problemas

### Error: "Cannot connect to MySQL server"

```bash
# Verificar que MySQL está corriendo
docker-compose ps

# Verificar logs de MySQL
docker-compose logs mysql

# Reiniciar MySQL
docker-compose restart mysql
```

### Error: "Access denied for user"

Verifica las credenciales en `gueb/eMiKi/Funciones_PHP.php`:

```php
mysql_connect("localhost", "nelosa_nelosa", "mqm1804")
```

En Docker, usa `mysql` como host (no `localhost`):

```php
mysql_connect("mysql", "nelosa_nelosa", "mqm1804")
```

### Error: "Call to undefined function mysql_connect()"

PHP 7.0+ no tiene `mysql_*`. Usar PHP 5.6 (incluido en Docker):

```bash
docker-compose down
docker-compose up -d --build
```

### Página en blanco / Error 500

```bash
# Ver logs de PHP
docker exec nelosa_web tail -f /var/log/apache2/error.log

# o
docker-compose logs web
```

### Logs con aplicacion propia

```bash
# Imprimr un texto con variable, array o objeto
logVariable("User query result", $row, "DEBUG", "JuJu");

# Imprimir un texto
logError("Pass: " . $pwd, "PASS");

```

### Base de datos vacía después de importar

```bash
# Verificar que los archivos SQL están en Varios/Copias DB´s/
ls "Varios/Copias DB´s/"

# Reimportar manualmente
docker exec -i nelosa_mysql2 mysql -u nelosa_nelosa -pmqm1804 nelosa_nelosa < "Varios/Copias DB´s/nelosa.net.sql"
```

## 📚 Documentación Adicional

- [Copilot Instructions](.github/copilot-instructions.md) - Guía para IA sobre el proyecto
- [Estructura de Base de Datos](docker/mysql-init/README.md) - Detalles de las tablas
- [Funciones PHP Core](gueb/eMiKi/Funciones_PHP.php) - Funciones principales

## 📝 Notas del Desarrollador

### Autor Original

**Miguel Quesada Martínez**

- 🌐 Web original: www.nelosa.net

### Contexto Histórico

- **Época**: ~2000-2005
- **Stack**: PHP 4/5, MySQL 4.0, Apache 1.3/2.0
- **Paradigma**: Programación procedural
- **Encoding**: ISO-8859-1 (Latin1)
- **Browser target**: Internet Explorer 6, Netscape 7

### Estado Actual (2026)

- ✅ Código funcional en entorno dockerizado
- ⚠️ Requiere modernización para producción
- 📦 Backups completos de BD disponibles
- 🐳 Setup Docker listo para desarrollo

## 📄 Licencia

MIT License - Ver [LICENSE](LICENSE) para más detalles.

Copyright (c) 2026 Miguel Quesada Martínez

## 🔗 Enlaces Rápidos

- **Web local**: http://localhost:8080/gueb/
- **phpMyAdmin**: http://localhost:8081
- **Repositorio**: https://github.com/miguelquesadamartinez/NelosaWeb-15.0

---

**Última actualización**: Febrero 2026  
**Versión Docker**: 1.0.0  
**Estado**: ✅ Funcional en desarrollo | ⚠️ No apto para producción sin refactoring
