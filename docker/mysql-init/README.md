# Scripts de Migración de Base de Datos

Este directorio contiene los scripts necesarios para inicializar las bases de datos de Nelosa Web.

## Archivos

- **00-create-databases.sql**: Crea las bases de datos vacías con el charset correcto
- **01-init-databases.sh**: Script de ayuda que muestra instrucciones para importar datos

## Bases de Datos

El proyecto utiliza 2 bases de datos principales:

1. **nelosa_nelosa**: Base de datos principal
   - Clientes, pedidos, productos, foros
   - Tablas de control y configuración
   - Sistema de emails y suscripciones

2. **nelosa_nelosa_textos**: Base de datos de traduciones
   - Textos multiidioma (txt_esp, txt_cat, txt_eng, txt_fra, txt_ned, txt_por)
   - Descripciones de productos por idioma (Descs\_\*)

## Importación Manual

Los scripts SQL de backup están en `Varios/Copias DB´s/`. Para importar:

```bash
# 1. Entrar al contenedor MySQL
docker exec -it nelosa_mysql2 bash

# 2. Base de datos principal (OBLIGATORIO)
mysql -u nelosa_nelosa -pmqm1804 nelosa_nelosa < /backups/nelosa.net.sql

# 3. Base de datos de textos multiidioma (OBLIGATORIO)
mysql -u nelosa_nelosa -pmqm1804 nelosa_nelosa_textos < /backups/nelosa_net_textos.sql

# 4. Base de datos de impresoras (OPCIONAL)
mysql -u nelosa_nelosa -pmqm1804 nelosa_nelosa < /backups/nelosa.net.printers.sql

# 5. Base de datos eMiKi - datos administrativos (OPCIONAL)
mysql -u nelosa_nelosa -pmqm1804 nelosa_nelosa < /backups/nelosa_net_eMiKi.sql

# 6. Base de datos de emails (OPCIONAL)
mysql -u nelosa_nelosa -pmqm1804 nelosa_nelosa < /backups/nelosa.net.emails.sql

# 7. Backup alternativo de base de datos principal (OPCIONAL)
mysql -u nelosa_nelosa -pmqm1804 nelosa_nelosa < /backups/nelosa.net.2.sql

# 8. Backup alternativo de base de datos de impresoras (OPCIONAL)
mysql -u nelosa_nelosa -pmqm1804 nelosa_nelosa < /backups/nelosa.net.printers.2.sql
```

### Descripción de cada backup:

| Archivo                     | Base de Datos        | Descripción                                          | Prioridad          |
| --------------------------- | -------------------- | ---------------------------------------------------- | ------------------ |
| `nelosa.net.sql`            | nelosa_nelosa        | BD principal con clientes, productos, pedidos, foros | ⚠️ **OBLIGATORIO** |
| `nelosa_net_textos.sql`     | nelosa_nelosa_textos | Traducciones y descripciones multiidioma             | ⚠️ **OBLIGATORIO** |
| `nelosa.net.printers.sql`   | nelosa_nelosa        | Datos de impresoras y procedimientos de recarga      | 🔵 Opcional        |
| `nelosa_net_eMiKi.sql`      | nelosa_nelosa        | Tablas administrativas y de gestión                  | 🔵 Opcional        |
| `nelosa.net.emails.sql`     | nelosa_nelosa        | Listas de correos y suscriptores                     | 🔵 Opcional        |
| `nelosa.net.2.sql`          | nelosa_nelosa        | Backup alternativo de la BD principal                | 🟡 Backup          |
| `nelosa.net.printers.2.sql` | nelosa_nelosa        | Backup alternativo de impresoras                     | 🟡 Backup          |

### Importación desde fuera del contenedor:

```bash
# Base de datos principal
docker exec -i nelosa_mysql2 mysql -u nelosa_nelosa -pmqm1804 nelosa_nelosa < "Varios/Copias DB´s/nelosa.net.sql"

# Base de datos de textos
docker exec -i nelosa_mysql2 mysql -u nelosa_nelosa -pmqm1804 nelosa_nelosa_textos < "Varios/Copias DB´s/nelosa_net_textos.sql"

# Base de datos de impresoras (opcional)
docker exec -i nelosa_mysql2 mysql -u nelosa_nelosa -pmqm1804 nelosa_nelosa < "Varios/Copias DB´s/nelosa.net.printers.sql"

# Base de datos eMiKi (opcional)
docker exec -i nelosa_mysql2 mysql -u nelosa_nelosa -pmqm1804 nelosa_nelosa < "Varios/Copias DB´s/nelosa_net_eMiKi.sql"

# Base de datos de emails (opcional)
docker exec -i nelosa_mysql2 mysql -u nelosa_nelosa -pmqm1804 nelosa_nelosa < "Varios/Copias DB´s/nelosa.net.emails.sql"
```

## Charset y Collation

Las bases de datos utilizan:

- **Character Set**: latin1 (ISO-8859-1)
- **Collation**: latin1_spanish_ci

Esto es necesario para mantener compatibilidad con el código PHP legacy que espera ISO-8859-1.
