# Hyperia
Administrácia používateľov + Login/Register System.

(Len škoda že som sa skôr nespýtal na zadanie, je celkom jasné že som ho trochu inak pochopil :) )

# Zdroje

Laracast - The PHP Practitioner

Phinx (plugin) - Migrácie

# Ako spustiť:
1. Nastavenie databázy v súboroch phinx.yml (pre migrácie) a config.php
2. Migrácia databázy: vendor/bin/phinx migrate -e development
3. Zapnutie servera: php -S localhost:8888
