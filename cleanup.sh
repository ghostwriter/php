#!/bin/sh

echo "Fetching list of cache keys"
cacheKeys=$(gh actions-cache list --limit 100 --order asc --sort last-used | cut -f 1)

echo "Deleting caches"
for cacheKey in $cacheKeys
do
    gh actions-cache delete $cacheKey --confirm
done

echo "Done"
