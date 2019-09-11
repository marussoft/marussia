# -*- mode: ruby -*-
# vi: set ft=ruby :

Vagrant.configure("2") do |config|
    
    config.vm.box = "debian/stretch64"
    config.vm.define "dev-marussia"
    config.vm.hostname = "marussia.local"
    
    config.vm.network "forwarded_port", guest: 3306, host: 3306
    
    config.vm.network "private_network", ip: "192.168.33.10"
    
    config.vm.synced_folder ".", "/vagrant", disabled: true
    
    config.vm.synced_folder ".", "/var/www/marussia.local", id: "v-root", mount_options: ["rw", "tcp", "nolock", "noacl", "async"], type: "nfs", nfs_udp: false
    
    config.vm.provider "virtualbox" do |vb|
        
        vb.gui = false
        
        vb.memory = "1024"
    end
    
    config.vm.provision "shell", path: "./provision/base/packages.sh"
    config.vm.provision "shell", path: "./provision/base/nginx.sh"
    config.vm.provision "shell", path: "./provision/base/php.sh"
    config.vm.provision "shell", path: "./provision/base/mysql.sh"
    config.vm.provision "shell", path: "./provision/config.sh"
    
end
