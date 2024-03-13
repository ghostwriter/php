#!/bin/sh

# This script will delete all caches in GitHub Actions

echo "Fetching list of cache keys"
cacheKeys=$(gh cache list --limit 10000 --order asc --sort size_in_bytes | cut -f 1)

echo "Deleting caches"
for cacheKey in $cacheKeys
do
    echo "Deleting cache: $cacheKey"
    gh cache delete $cacheKey
done

echo "Done"
