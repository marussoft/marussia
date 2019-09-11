#!/usr/bin/env bash

if [ -z "$1" ]
then
    echo "Error! Argument missing. Enter the argument for configuration!"
    exit
fi

if [ -e ./provision/$1.sh ]
then
    sudo sh ./provision/$1.sh $2
    exit
fi

echo "Invalid argument $1!"
