#!/usr/bin/env bash
# Packages theme/coffee-shop into dist/coffee-shop.zip, ready for Appearance → Themes → Add New → Upload.
set -euo pipefail
cd "$(dirname "$0")/.."
mkdir -p dist
rm -f dist/coffee-shop.zip
(cd theme && zip -qr ../dist/coffee-shop.zip coffee-shop -x '*.DS_Store')
echo "Built dist/coffee-shop.zip"
