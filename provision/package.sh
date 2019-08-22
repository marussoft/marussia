#!/usr/bin/env bash 

if [ -z "$1" ]
then
    echo "Error! Argument missing. Enter the key for reset packages!"
    exit
fi

if [ -e ./provision/base/$1.sh ] 
then
    sudo sh ./provision/base/$1.sh
    exit
fi

echo "Invalid argument $1!"
