#!/usr/bin/env bash

echo "*** Installing base packages"

# Update apt
sudo apt update

# upgrade distribution packages
sudo apt -y dist-upgrade

# Required for add-apt-repository
sudo apt install -y software-properties-common build-essential 

# install packages
sudo apt install -y git mc curl

sudo curl -sL https://deb.nodesource.com/setup_8.x | sudo -E bash -

sudo apt install -y npm

echo "*** Packages is already installed..."
