# Guía de Inicio Rápido - Nelosa Web

## 🚀 Puesta en marcha en 3 pasos

### Paso 1: Levantar contenedores

```bash
docker-compose up -d
```

### Paso 2: Importar bases de datos

**Windows:**

```cmd
docker\import-databases.bat
```

**Linux/Mac:**

```bash
chmod +x docker/import-databases.sh
./docker/import-databases.sh
```

### Paso 3: Abrir navegador

```
http://localhost:8080/gueb/
```

## 📋 Checklist de Verificación

- [ ] Docker Desktop está corriendo
- [ ] Puertos 8080, 8081 y 3306 están libres
- [ ] Contenedores iniciados: `docker-compose ps`
- [ ] Base de datos importada
- [ ] Web funciona en http://localhost:8080/gueb/
- [ ] phpMyAdmin accesible en http://localhost:8081

## ⚡ Comandos Rápidos

```bash
# Ver logs en tiempo real
docker-compose logs -f

# Reiniciar todo
docker-compose restart

# Parar servicios
docker-compose down

# Entrar a MySQL
docker exec -it nelosa_mysql2 mysql -u nelosa_nelosa -pmqm1804

# Ver estado
docker-compose ps
```

## 🆘 Problemas Comunes

**Error de conexión MySQL:**

```bash
docker-compose restart mysql
```

**Página en blanco:**

```bash
docker-compose logs web
```

**Puerto 8080 ocupado:**
Edita `docker-compose.yml` y cambia `8080:80` por `9090:80`

---

📖 **Documentación completa**: Ver [README.md](README.md)
