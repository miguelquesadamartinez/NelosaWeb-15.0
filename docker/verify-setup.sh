#!/bin/bash
# Script de verificación del entorno Nelosa Web

echo "================================================"
echo "  🔍 Verificación del Entorno Nelosa Web"
echo "================================================"
echo ""

# Colores
GREEN='\033[0;32m'
RED='\033[0;31m'
YELLOW='\033[1;33m'
NC='\033[0m' # No Color

check_mark="${GREEN}✓${NC}"
cross_mark="${RED}✗${NC}"
warning_mark="${YELLOW}⚠${NC}"

# Función para verificar comando
check_command() {
    if command -v $1 &> /dev/null; then
        echo -e "$check_mark $1 está instalado"
        return 0
    else
        echo -e "$cross_mark $1 NO está instalado"
        return 1
    fi
}

# Función para verificar puerto
check_port() {
    if nc -z localhost $1 2>/dev/null; then
        echo -e "$cross_mark Puerto $1 está ocupado"
        return 1
    else
        echo -e "$check_mark Puerto $1 está libre"
        return 0
    fi
}

# Verificar Docker
echo "1️⃣  Verificando Docker..."
if check_command docker; then
    docker_version=$(docker --version | cut -d ' ' -f3 | cut -d ',' -f1)
    echo "   Versión: $docker_version"
else
    echo -e "${RED}   ❌ Por favor instala Docker Desktop${NC}"
    exit 1
fi
echo ""

# Verificar Docker Compose
echo "2️⃣  Verificando Docker Compose..."
if check_command docker-compose; then
    compose_version=$(docker-compose --version | cut -d ' ' -f3 | cut -d ',' -f1)
    echo "   Versión: $compose_version"
else
    echo -e "${RED}   ❌ Por favor instala Docker Compose${NC}"
    exit 1
fi
echo ""

# Verificar Docker corriendo
echo "3️⃣  Verificando Docker Engine..."
if docker ps &> /dev/null; then
    echo -e "$check_mark Docker Engine está corriendo"
else
    echo -e "$cross_mark Docker Engine NO está corriendo"
    echo -e "${YELLOW}   ⚠ Por favor inicia Docker Desktop${NC}"
    exit 1
fi
echo ""

# Verificar puertos disponibles
echo "4️⃣  Verificando puertos..."
all_ports_free=true
check_port 8080 || all_ports_free=false
check_port 8081 || all_ports_free=false
check_port 3306 || all_ports_free=false

if [ "$all_ports_free" = false ]; then
    echo -e "${YELLOW}   ⚠ Algunos puertos están ocupados${NC}"
    echo "   Puedes cambiar los puertos en docker-compose.yml"
fi
echo ""

# Verificar archivos SQL
echo "5️⃣  Verificando backups de BD..."
if [ -d "Varios/Copias DB´s" ]; then
    echo -e "$check_mark Directorio de backups existe"
    
    if [ -f "Varios/Copias DB´s/nelosa.net.sql" ]; then
        size=$(ls -lh "Varios/Copias DB´s/nelosa.net.sql" | awk '{print $5}')
        echo -e "$check_mark nelosa.net.sql encontrado ($size)"
    else
        echo -e "$cross_mark nelosa.net.sql NO encontrado"
    fi
    
    if [ -f "Varios/Copias DB´s/nelosa_net_textos.sql" ]; then
        size=$(ls -lh "Varios/Copias DB´s/nelosa_net_textos.sql" | awk '{print $5}')
        echo -e "$check_mark nelosa_net_textos.sql encontrado ($size)"
    else
        echo -e "$cross_mark nelosa_net_textos.sql NO encontrado"
    fi
else
    echo -e "$cross_mark Directorio 'Varios/Copias DB´s' NO encontrado"
fi
echo ""

# Verificar contenedores
echo "6️⃣  Verificando contenedores..."
if docker ps --format '{{.Names}}' | grep -q nelosa_mysql2; then
    echo -e "$check_mark Contenedor MySQL está corriendo"
    mysql_status="running"
else
    echo -e "$warning_mark Contenedor MySQL NO está corriendo"
    mysql_status="stopped"
fi

if docker ps --format '{{.Names}}' | grep -q nelosa_web; then
    echo -e "$check_mark Contenedor Web está corriendo"
    web_status="running"
else
    echo -e "$warning_mark Contenedor Web NO está corriendo"
    web_status="stopped"
fi

if docker ps --format '{{.Names}}' | grep -q nelosa_phpmyadmin2; then
    echo -e "$check_mark Contenedor phpMyAdmin está corriendo"
    phpmyadmin_status="running"
else
    echo -e "$warning_mark Contenedor phpMyAdmin NO está corriendo"
    phpmyadmin_status="stopped"
fi
echo ""

# Verificar conectividad
if [ "$mysql_status" = "running" ] && [ "$web_status" = "running" ]; then
    echo "7️⃣  Verificando conectividad..."
    
    # Test web
    if curl -s http://localhost:8080/gueb/ > /dev/null; then
        echo -e "$check_mark Sitio web accesible en http://localhost:8080/gueb/"
    else
        echo -e "$cross_mark Sitio web NO accesible"
    fi
    
    # Test phpMyAdmin
    if curl -s http://localhost:8081 > /dev/null; then
        echo -e "$check_mark phpMyAdmin accesible en http://localhost:8081"
    else
        echo -e "$cross_mark phpMyAdmin NO accesible"
    fi
    echo ""
fi

# Resumen
echo "================================================"
echo "  📊 RESUMEN"
echo "================================================"
echo ""

if [ "$mysql_status" = "running" ] && [ "$web_status" = "running" ]; then
    echo -e "${GREEN}✅ Sistema listo para usar!${NC}"
    echo ""
    echo "Accesos:"
    echo "  🌐 Web:        http://localhost:8080/gueb/"
    echo "  💾 phpMyAdmin: http://localhost:8081"
    echo "  🗄️  MySQL:     localhost:3306"
    echo ""
    echo "Credenciales MySQL:"
    echo "  Usuario:   nelosa_nelosa"
    echo "  Password:  mqm1804"
    echo ""
else
    echo -e "${YELLOW}⚠️  Los contenedores no están corriendo${NC}"
    echo ""
    echo "Ejecuta para iniciar:"
    echo "  docker-compose up -d"
    echo ""
    echo "Y luego importa las BD con:"
    echo "  ./docker/import-databases.sh"
    echo ""
fi

echo "================================================"
