# Configuración de Hosts para Desarrollo Local

## Problema

El código fuente utiliza la variable `$jost` para alternar entre `localhost` y `nelosa.net`. En algunos archivos esta variable está hardcodeada.

## Solución

### Opción 1: Modificar archivos PHP (Recomendado)

Busca y reemplaza en los archivos principales:

**gueb/eMiKi/Funciones_PHP.php:**

```php
// Cambiar de:
function conectarse_param($param) {
   $jost = "localhost";  // o "nelosa.net"

   if (!($linkparam=mysql_connect("localhost", "nelosa_nelosa", "mqm1804"))) {
   // ...
}

// A:
function conectarse_param($param) {
   // Usar 'mysql' como host en Docker
   if (!($linkparam=mysql_connect("mysql", "nelosa_nelosa", "mqm1804"))) {
   // ...
}
```

**En todos los archivos index.\*.php:**

```php
// Cambiar:
$jost = "nelosa.net" ;

// Por:
$jost = "localhost" ;
```

### Opción 2: Configurar archivo hosts del sistema

Para que `nelosa.net` apunte a localhost:

**Windows:**

1. Abrir Bloc de notas como Administrador
2. Abrir: `C:\Windows\System32\drivers\etc\hosts`
3. Añadir al final:

```
127.0.0.1    nelosa.net
127.0.0.1    www.nelosa.net
```

4. Guardar

**Linux/Mac:**

```bash
sudo nano /etc/hosts
```

Añadir:

```
127.0.0.1    nelosa.net
127.0.0.1    www.nelosa.net
```

### Opción 3: Usar variables de entorno

Crear archivo `.env` en la raíz:

```env
DB_HOST=mysql
DB_USER=nelosa_nelosa
DB_PASS=mqm1804
DB_NAME=nelosa_nelosa
DB_NAME_TEXTS=nelosa_nelosa_textos
```

Luego modificar `Funciones_PHP.php` para leer de entorno:

```php
$db_host = getenv('DB_HOST') ?: 'localhost';
$db_user = getenv('DB_USER') ?: 'nelosa_nelosa';
// etc...
```

## Host para conexión MySQL dentro de Docker

⚠️ **IMPORTANTE**: Cuando PHP corre en Docker y se conecta a MySQL que también está en Docker, el host debe ser el **nombre del servicio**: `mysql`

```php
// ❌ NO funcionará en Docker:
mysql_connect("localhost", "user", "pass")

// ✅ SÍ funciona en Docker:
mysql_connect("mysql", "user", "pass")
```

## Solución rápida para desarrollo

Si no quieres modificar el código, puedes hacer un link simbólico del contenedor MySQL:

```bash
# En docker-compose.yml, añadir a 'web':
extra_hosts:
  - "nelosa.net:172.18.0.2"  # IP del contenedor MySQL
```

O más simple, añadir alias al servicio MySQL:

```yaml
mysql:
  # ...
  networks:
    nelosa_network:
      aliases:
        - localhost
        - nelosa.net
```

## Verificar conectividad

Desde el contenedor web:

```bash
docker exec -it nelosa_web bash

# Probar conexión
ping mysql
telnet mysql 3306
```

## Logs de errores

Si hay problemas de conexión, revisar:

```bash
# Logs de Apache/PHP
docker exec nelosa_web tail -f /var/log/apache2/error.log

# Logs de MySQL
docker-compose logs mysql
```
