#!/bin/bash
set -e

if [ -n "$PORT" ]; then
    echo "Configurando Apache para porta $PORT"
    sed -i "s/Listen 80/Listen $PORT/g" /etc/apache2/ports.conf
    sed -i "s/:80/:$PORT/g" /etc/apache2/sites-available/000-default.conf
fi

apache2-foreground
