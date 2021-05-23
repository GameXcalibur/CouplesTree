#!/bin/bash

rm -rf tree
rm -rf result.jpg

export GDAL_ALLOW_LARGE_LIBJPEG_MEM_ALLOC=1

python=python3

montage *.jpg  -mode concatenate -tile 4x  -texture ../barktile2.jpg -compress JPEG -quality 30  result.jpg

$python  gdal2tiles-multiprocess.py -l -p raster -z 0-5 -w none result.jpg tree

rm -rf ../tree

cp -rf tree ../

