#!/bin/bash

rm -rf tree
rm -rf result1.jpg

export GDAL_ALLOW_LARGE_LIBJPEG_MEM_ALLOC=1

python=python3

montage *.jpg -limit memory 0 -limit map 0 -mode concatenate -tile 4x  -texture ../barktile2.jpg -compress JPEG -quality 30  result1.jpg

$python  gdal2tiles-multiprocess.py -l -p raster -z 0-5 -w none result1.jpg tree

rm -rf ../tree

cp -rf tree ../

mv result1.jpg result.jpg

