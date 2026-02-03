#!/bin/bash
# Script de inicialización de base de datos para NelosaWeb
# Este script se ejecuta automáticamente cuando el contenedor MySQL se inicia por primera vez

echo "========================================="
echo "Inicializando bases de datos Nelosa..."
echo "========================================="

# Esperar a que MySQL esté completamente iniciado
sleep 10

# Crear bases de datos
echo "Creando bases de datos..."
mysql -u root -prootpassword <<-EOSQL
    CREATE DATABASE IF NOT EXISTS nelosa_nelosa CHARACTER SET latin1 COLLATE latin1_spanish_ci;
    CREATE DATABASE IF NOT EXISTS nelosa_nelosa_textos CHARACTER SET latin1 COLLATE latin1_spanish_ci;
    
    GRANT ALL PRIVILEGES ON nelosa_nelosa.* TO 'nelosa_nelosa'@'%';
    GRANT ALL PRIVILEGES ON nelosa_nelosa_textos.* TO 'nelosa_nelosa'@'%';
    FLUSH PRIVILEGES;
EOSQL

echo "Bases de datos creadas exitosamente."
echo ""
echo "========================================="
echo "IMPORTANTE: Importar datos manualmente"
echo "========================================="
echo ""
echo "Las estructuras de base de datos están creadas."
echo "Para importar los datos, ejecuta estos comandos:"
echo ""
echo "1. Entrar al contenedor MySQL:"
echo "   docker exec -it nelosa_mysql bash"
echo ""
echo "2. Importar base de datos principal:"
echo "   mysql -u nelosa_nelosa -pmqm1804 nelosa_nelosa < /backups/nelosa.net.sql"
echo ""
echo "3. Importar base de datos de textos:"
echo "   mysql -u nelosa_nelosa -pmqm1804 nelosa_nelosa_textos < /backups/nelosa_net_textos.sql"
echo ""
echo "4. (Opcional) Importar base de datos de impresoras:"
echo "   mysql -u nelosa_nelosa -pmqm1804 nelosa_nelosa < /backups/nelosa.net.printers.sql"
echo ""
echo "5. (Opcional) Importar base de datos eMiKi:"
echo "   mysql -u nelosa_nelosa -pmqm1804 nelosa_nelosa < /backups/nelosa_net_eMiKi.sql"
echo ""
echo "========================================="
