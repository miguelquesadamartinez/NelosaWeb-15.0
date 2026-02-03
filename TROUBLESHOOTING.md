# 🐛 Troubleshooting Avanzado - Nelosa Web

## Problemas Comunes y Soluciones

### 1. Error: "Cannot connect to MySQL server"

#### Síntomas

- Página en blanco
- Error 500
- "Warning: mysql_connect(): Can't connect to MySQL server"

#### Diagnóstico

```bash
# Verificar que MySQL está corriendo
docker-compose ps

# Ver logs de MySQL
docker-compose logs mysql

# Verificar conectividad desde contenedor web
docker exec nelosa_web ping mysql
```

#### Soluciones

**A. Host incorrecto en código**

```php
// ❌ NO funciona en Docker
mysql_connect("localhost", "user", "pass")

// ✅ Cambiar a:
mysql_connect("mysql", "user", "pass")
```

**B. MySQL no está listo**

```bash
# Esperar 10 segundos y reintentar
docker-compose restart mysql
sleep 10
```

**C. Credenciales incorrectas**
Verificar en `gueb/eMiKi/Funciones_PHP.php`:

```php
mysql_connect("mysql", "nelosa_nelosa", "mqm1804")
```

---

### 2. Base de datos vacía / sin tablas

#### Diagnóstico

```bash
# Entrar a MySQL
docker exec -it nelosa_mysql mysql -u nelosa_nelosa -pmqm1804

# Verificar bases de datos
SHOW DATABASES;

# Usar base de datos
USE nelosa_nelosa;

# Ver tablas
SHOW TABLES;

# Salir
exit;
```

#### Solución

```bash
# Reimportar base de datos
docker exec -i nelosa_mysql mysql -u nelosa_nelosa -pmqm1804 nelosa_nelosa < "Varios/Copias DB´s/nelosa.net.sql"

# Verificar importación
docker exec -it nelosa_mysql mysql -u nelosa_nelosa -pmqm1804 -e "SELECT COUNT(*) as tables FROM information_schema.tables WHERE table_schema='nelosa_nelosa'"
```

---

### 3. Página en blanco sin errores

#### Diagnóstico

```bash
# Ver logs de PHP en tiempo real
docker exec nelosa_web tail -f /var/log/apache2/error.log

# O ver todos los logs
docker-compose logs -f web
```

#### Causas comunes

**A. Errores de sintaxis PHP**

```bash
# Verificar sintaxis de archivo específico
docker exec nelosa_web php -l /var/www/html/gueb/index.php
```

**B. Sesiones no funcionan**

```bash
# Verificar permisos de /tmp
docker exec nelosa_web ls -la /tmp

# Verificar configuración PHP
docker exec nelosa_web php -i | grep session
```

**C. Include paths incorrectos**
Verificar rutas relativas en includes:

```php
// Puede fallar dependiendo del directorio actual
include("../eMiKi/Funciones_PHP.php");

// Mejor usar ruta absoluta
include($_SERVER['DOCUMENT_ROOT'] . "/gueb/eMiKi/Funciones_PHP.php");
```

---

### 4. Error 404 / Página no encontrada

#### Síntomas

- "404 Not Found"
- "The requested URL was not found"

#### Solución

**A. Verificar URL correcta**

```
✅ http://localhost:8080/gueb/
✅ http://localhost:8080/gueb/index.php
❌ http://localhost:8080/
❌ http://localhost:8080/index.php
```

**B. Verificar mod_rewrite**

```bash
docker exec nelosa_web apache2ctl -M | grep rewrite
```

**C. Verificar .htaccess**

```bash
# Ver si existe
docker exec nelosa_web ls -la /var/www/html/gueb/.htaccess

# Ver configuración Apache
docker exec nelosa_web cat /etc/apache2/apache2.conf | grep AllowOverride
```

---

### 5. Caracteres raros / Encoding incorrecto

#### Síntomas

- Acentos muestran "Ã©" en vez de "é"
- "Ã±" en vez de "ñ"

#### Diagnóstico

```bash
# Verificar charset en MySQL
docker exec -it nelosa_mysql mysql -u nelosa_nelosa -pmqm1804 -e "SHOW VARIABLES LIKE 'char%';"

# Verificar collation de tablas
docker exec -it nelosa_mysql mysql -u nelosa_nelosa -pmqm1804 -e "SELECT table_name, table_collation FROM information_schema.tables WHERE table_schema='nelosa_nelosa' LIMIT 5;"
```

#### Solución

**A. Convertir BD a latin1**

```sql
ALTER DATABASE nelosa_nelosa CHARACTER SET latin1 COLLATE latin1_spanish_ci;
ALTER TABLE tabla_ejemplo CONVERT TO CHARACTER SET latin1 COLLATE latin1_spanish_ci;
```

**B. Meta tag en HTML**

```html
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
```

**C. Header en PHP**

```php
header('Content-Type: text/html; charset=ISO-8859-1');
```

---

### 6. Puerto ocupado

#### Síntomas

```
Error response from daemon: Ports are not available:
listen tcp 0.0.0.0:8080: bind: address already in use
```

#### Solución

**A. Cambiar puerto en docker-compose.yml**

```yaml
web:
  ports:
    - "9090:80" # Cambiar 8080 por 9090
```

**B. Encontrar y cerrar proceso**

```bash
# Windows
netstat -ano | findstr :8080
taskkill /PID <PID> /F

# Linux/Mac
lsof -ti:8080 | xargs kill -9
```

---

### 7. Volumen MySQL no persiste

#### Síntomas

- Datos se pierden al reiniciar Docker
- Hay que reimportar BD cada vez

#### Diagnóstico

```bash
# Ver volúmenes
docker volume ls | grep nelosa

# Inspeccionar volumen
docker volume inspect nelosawebsite-150_mysql_data
```

#### Solución

**A. Recrear volumen**

```bash
# Parar contenedores
docker-compose down

# Eliminar volumen (⚠️ borra datos)
docker volume rm nelosawebsite-150_mysql_data

# Recrear y reiniciar
docker-compose up -d
```

**B. Backup manual**

```bash
# Crear backup
docker exec nelosa_mysql mysqldump -u nelosa_nelosa -pmqm1804 nelosa_nelosa > backup_$(date +%Y%m%d).sql

# Restaurar backup
docker exec -i nelosa_mysql mysql -u nelosa_nelosa -pmqm1804 nelosa_nelosa < backup_20260203.sql
```

---

### 8. Performance lento

#### Diagnóstico

```bash
# Ver uso de recursos
docker stats

# Ver logs lentos de MySQL
docker exec nelosa_mysql mysql -u root -prootpassword -e "SHOW VARIABLES LIKE 'slow_query%';"
```

#### Solución

**A. Aumentar recursos Docker**
Docker Desktop → Settings → Resources:

- CPU: 4 cores
- Memory: 4GB
- Swap: 2GB

**B. Optimizar MySQL**
En `docker-compose.yml`:

```yaml
mysql:
  command: >
    --default-authentication-plugin=mysql_native_password
    --sql_mode=""
    --max_connections=100
    --innodb_buffer_pool_size=256M
```

**C. Cache de consultas**

```bash
docker exec -it nelosa_mysql mysql -u root -prootpassword
SET GLOBAL query_cache_size = 16777216;
SET GLOBAL query_cache_type = ON;
```

---

### 9. phpMyAdmin no carga

#### Síntomas

- "Access denied for user"
- Página en blanco
- Error 502 Bad Gateway

#### Solución

**A. Verificar credenciales**
En `docker-compose.yml`:

```yaml
phpmyadmin:
  environment:
    PMA_HOST: mysql
    PMA_USER: nelosa_nelosa
    PMA_PASSWORD: mqm1804
```

**B. Reiniciar servicio**

```bash
docker-compose restart phpmyadmin
```

**C. Acceso root**
Si necesitas acceso root:

```yaml
phpmyadmin:
  environment:
    PMA_USER: root
    PMA_PASSWORD: rootpassword
```

---

### 10. Logs muy grandes

#### Síntomas

- Docker Desktop lento
- Disco lleno
- Logs de gigabytes

#### Solución

**A. Limpiar logs**

```bash
# Ver tamaño de logs
docker ps -a --format "{{.Names}}" | xargs -I {} sh -c 'echo "{}:"; docker inspect {} | grep LogPath | cut -d'"' -f4 | xargs ls -lh'

# Limpiar logs
truncate -s 0 $(docker inspect --format='{{.LogPath}}' nelosa_web)
truncate -s 0 $(docker inspect --format='{{.LogPath}}' nelosa_mysql)
```

**B. Limitar tamaño en docker-compose.yml**

```yaml
services:
  web:
    logging:
      driver: "json-file"
      options:
        max-size: "10m"
        max-file: "3"
```

---

## 🆘 Comandos de Emergencia

### Reset completo

```bash
# ⚠️ CUIDADO: Borra TODO
docker-compose down -v
docker system prune -a
docker-compose up -d --build
# Reimportar BD
```

### Verificación de salud

```bash
# Health check MySQL
docker exec nelosa_mysql mysqladmin ping -u nelosa_nelosa -pmqm1804

# Health check Web
curl -I http://localhost:8080/gueb/

# Health check phpMyAdmin
curl -I http://localhost:8081
```

### Backup completo

```bash
# Backup de bases de datos
docker exec nelosa_mysql sh -c 'exec mysqldump --all-databases -u root -prootpassword' > backup_all_$(date +%Y%m%d_%H%M%S).sql

# Backup de volumen
docker run --rm -v nelosawebsite-150_mysql_data:/data -v $(pwd):/backup ubuntu tar czf /backup/mysql_volume_backup.tar.gz /data
```

---

## 📞 Soporte

Si ninguna solución funciona:

1. **Revisar logs completos:**

   ```bash
   docker-compose logs > logs_completos.txt
   ```

2. **Información del sistema:**

   ```bash
   docker version > sistema_info.txt
   docker-compose version >> sistema_info.txt
   docker info >> sistema_info.txt
   ```

3. **Crear issue en GitHub** con:
   - logs_completos.txt
   - sistema_info.txt
   - Descripción del problema
   - Pasos para reproducir
