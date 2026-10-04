#!/bin/sh
D=/var/backups/chinois/$(date +%Y%m%d_%H%M)
mkdir -p "$D" && cp -a /var/lib/chinois/*.json "$D"/ 2>/dev/null
ls -1dt /var/backups/chinois/*/ | tail -n +31 | xargs -r rm -rf
