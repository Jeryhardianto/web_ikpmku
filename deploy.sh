#!/usr/bin/env bash
# Deploy ke vm-gpu: rsync source, build image, restart.
# Alias SSH `vm-gpu` didefinisikan di dev-ops/home-server/config.
set -euo pipefail

HOST=${DEPLOY_HOST:-vm-gpu}
DIR=${DEPLOY_DIR:-/home/vm-gpu/ikpmku}

# Tanpa --delete-excluded: file yang di-exclude (terutama .env.prod) harus
# tetap aman dari --delete.
rsync -az --delete \
  --exclude '.git' \
  --exclude '.env*' \
  --exclude 'node_modules' \
  --exclude 'user_guide' \
  --exclude 'application/cache/*' \
  --exclude 'application/logs/*' \
  --exclude '.DS_Store' \
  ./ "$HOST:$DIR/"

ssh "$HOST" "cd $DIR && docker compose --env-file .env.prod -f compose.prod.yaml up -d --build"
ssh "$HOST" "cd $DIR && docker compose --env-file .env.prod -f compose.prod.yaml ps"
