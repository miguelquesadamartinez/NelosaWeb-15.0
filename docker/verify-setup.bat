@echo off
REM Script de verificacion del entorno Nelosa Web

echo ================================================
echo   Verificacion del Entorno Nelosa Web
echo ================================================
echo.

REM Verificar Docker
echo 1. Verificando Docker...
docker --version >nul 2>&1
if errorlevel 1 (
    echo [X] Docker NO esta instalado
    echo     Por favor instala Docker Desktop
    pause
    exit /b 1
) else (
    echo [OK] Docker esta instalado
    docker --version
)
echo.

REM Verificar Docker Compose
echo 2. Verificando Docker Compose...
docker-compose --version >nul 2>&1
if errorlevel 1 (
    echo [X] Docker Compose NO esta instalado
    pause
    exit /b 1
) else (
    echo [OK] Docker Compose esta instalado
    docker-compose --version
)
echo.

REM Verificar Docker corriendo
echo 3. Verificando Docker Engine...
docker ps >nul 2>&1
if errorlevel 1 (
    echo [X] Docker Engine NO esta corriendo
    echo     Por favor inicia Docker Desktop
    pause
    exit /b 1
) else (
    echo [OK] Docker Engine esta corriendo
)
echo.

REM Verificar archivos SQL
echo 4. Verificando backups de BD...
if exist "Varios\Copias DB´s" (
    echo [OK] Directorio de backups existe
    
    if exist "Varios\Copias DB´s\nelosa.net.sql" (
        echo [OK] nelosa.net.sql encontrado
    ) else (
        echo [X] nelosa.net.sql NO encontrado
    )
    
    if exist "Varios\Copias DB´s\nelosa_net_textos.sql" (
        echo [OK] nelosa_net_textos.sql encontrado
    ) else (
        echo [X] nelosa_net_textos.sql NO encontrado
    )
) else (
    echo [X] Directorio 'Varios\Copias DB´s' NO encontrado
)
echo.

REM Verificar contenedores
echo 5. Verificando contenedores...
docker ps 2>nul | findstr nelosa_mysql >nul
if errorlevel 1 (
    echo [!] Contenedor MySQL NO esta corriendo
    set mysql_running=0
) else (
    echo [OK] Contenedor MySQL esta corriendo
    set mysql_running=1
)

docker ps 2>nul | findstr nelosa_web >nul
if errorlevel 1 (
    echo [!] Contenedor Web NO esta corriendo
    set web_running=0
) else (
    echo [OK] Contenedor Web esta corriendo
    set web_running=1
)

docker ps 2>nul | findstr nelosa_phpmyadmin >nul
if errorlevel 1 (
    echo [!] Contenedor phpMyAdmin NO esta corriendo
) else (
    echo [OK] Contenedor phpMyAdmin esta corriendo
)
echo.

REM Resumen
echo ================================================
echo   RESUMEN
echo ================================================
echo.

if %mysql_running%==1 if %web_running%==1 (
    echo Sistema listo para usar!
    echo.
    echo Accesos:
    echo   Web:        http://localhost:8080/gueb/
    echo   phpMyAdmin: http://localhost:8081
    echo   MySQL:      localhost:3306
    echo.
    echo Credenciales MySQL:
    echo   Usuario:   nelosa_nelosa
    echo   Password:  mqm1804
) else (
    echo Los contenedores no estan corriendo
    echo.
    echo Ejecuta para iniciar:
    echo   docker-compose up -d
    echo.
    echo Y luego importa las BD con:
    echo   docker\import-databases.bat
)

echo.
echo ================================================
pause
