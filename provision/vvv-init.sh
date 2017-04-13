#!/usr/bin/env bash
# Provision WordPress Stable

# Make a database, if we don't already have one
echo -e "\nCreating database 'sandbox_default' (if it's not already there)"
mysql -u root --password=root -e "CREATE DATABASE IF NOT EXISTS sandbox_default"
mysql -u root --password=root -e "GRANT ALL PRIVILEGES ON sandbox_default.* TO wp@localhost IDENTIFIED BY 'wp';"
echo -e "\n DB operations done.\n\n"

# Nginx Logs
mkdir -p ${VVV_PATH_TO_SITE}/log
touch ${VVV_PATH_TO_SITE}/log/error.log
touch ${VVV_PATH_TO_SITE}/log/access.log