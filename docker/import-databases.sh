#!/bin/bash
# Script para importar todas las bases de datos

echo "========================================="
echo "Importando bases de datos Nelosa..."
echo "========================================="

# Colores para output
GREEN='\033[0;32m'
YELLOW='\033[1;33m'
NC='\033[0m' # No Color

# Verificar que el contenedor MySQL esté corriendo
if ! docker ps | grep -q nelosa_mysql2; then
    echo "Error: El contenedor MySQL no está corriendo."
    echo "Ejecuta: docker-compose up -d"
    exit 1
fi

# Esperar a que MySQL esté listo
echo "${YELLOW}Esperando a que MySQL esté listo...${NC}"
sleep 5

# Importar base de datos principal
echo "${GREEN}Importando nelosa_nelosa...${NC}"
docker exec -i nelosa_mysql2 mysql -u nelosa_nelosa -pmqm1804 nelosa_nelosa < "Varios/Copias DB´s/nelosa.net.sql"

# Importar base de datos de textos
echo "${GREEN}Importando nelosa_nelosa_textos...${NC}"
docker exec -i nelosa_mysql2 mysql -u nelosa_nelosa -pmqm1804 nelosa_nelosa_textos < "Varios/Copias DB´s/nelosa_net_textos.sql"

echo ""
echo "========================================="
echo "${GREEN}¡Importación completada!${NC}"
echo "========================================="
echo ""
echo "Accesos:"
echo "  - Web: http://localhost:8080/gueb/"
echo "  - phpMyAdmin: http://localhost:8081"
echo "  - Usuario MySQL: nelosa_nelosa"
echo "  - Contraseña: mqm1804"
echo ""
