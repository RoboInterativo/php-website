#!/bin/bash
ansible-playbook -v -i  inventories/dev/hosts  pre-install.yml
