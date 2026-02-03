@echo off
REM Script para importar todas las bases de datos en Windows

echo =========================================
echo Importando bases de datos Nelosa...
echo =========================================

REM Verificar que el contenedor MySQL este corriendo
docker ps | findstr nelosa_mysql2 >nul
if errorlevel 1 (
    echo Error: El contenedor MySQL no esta corriendo.
    echo Ejecuta: docker-compose up -d
    exit /b 1
)

REM Esperar a que MySQL este listo
echo Esperando a que MySQL este listo...
timeout /t 5 /nobreak >nul

REM Importar base de datos principal
echo Importando nelosa_nelosa...
docker exec -i nelosa_mysql2 mysql -u nelosa_nelosa -pmqm1804 nelosa_nelosa < "Varios\Copias DB´s\nelosa.net.sql"

REM Importar base de datos de textos
echo Importando nelosa_nelosa_textos...
docker exec -i nelosa_mysql2 mysql -u nelosa_nelosa -pmqm1804 nelosa_nelosa_textos < "Varios\Copias DB´s\nelosa_net_textos.sql"

echo.
echo =========================================
echo Importacion completada!
echo =========================================
echo.
echo Accesos:
echo   - Web: http://localhost:8080/gueb/
echo   - phpMyAdmin: http://localhost:8081
echo   - Usuario MySQL: nelosa_nelosa
echo   - Contrasena: mqm1804
echo.

pause
