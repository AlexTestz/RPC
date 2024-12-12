# Usar una imagen oficial de PHP como base
FROM php:8.2-cli

# Copiar los archivos PHP al contenedor
COPY . /usr/src/myapp
WORKDIR /usr/src/myapp

# Exponer el puerto para la comunicación RPC
EXPOSE 12345

# Comando por defecto para iniciar el servidor
CMD ["php", "server.php"]
