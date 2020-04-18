# Wordpress Development Container

This is a skelton of a project that allows you to easily set up VS Code to begin doing [Wordpress](https://wordpress.org/) plugin development immediately.

## Prerequisites

* You must have [Docker](https://www.docker.com/get-started) and [Docker compose](https://docs.docker.com/compose/install/) installed
* You need [VS Code](https://code.visualstudio.com/download) installed and the [Remote Containers Extension](https://marketplace.visualstudio.com/items?itemName=ms-vscode-remote.remote-containers) installed in it

## Start

1. Clone this repo into onto your computer

1. Open the folder in VS Code

1. Hit `Ctrl+Shift+P` or `F1` to show the command palette

1. Type `Remote-Containers: Reopen in Container`

1. Write your plugin in the `my-new-plugin` folder

1. To deploy the plugin, hit `Ctrl+Shift+P` to show the command palette and type `Tasks: RunTask`

1. Click enter (`Deploy Plugin` should be selected)

1. Open http://localhost:8080/wp-admin/plugins.php

1.  You should see the plugin deployed. You will ned to hit activate for it to have any effect.

## Notes

* The first time you open your wordpress instance you will need to go through the installation process. You only need to do this once unless you clear your my sql db volume.
* I would suggest renaming the folder from `my-new-plugin` to something more appropriate to your plugin. Once you do that, you will need to update  [tasks.json](.vscode\tasks.json) with the new folder name

## Known issues

* Sometimes the compose gets in a bad state after making changes to the file. You may need to delete the containers manually and prune your volumes to get it to start correctly again.
