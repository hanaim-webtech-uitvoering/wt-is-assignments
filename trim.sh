#!/bin/bash

find . -type f -name '*.php' -exec sed -i '' '/START/,/END/d' {} +

