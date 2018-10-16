# Basic MVC Framework 

This MVC framework is written in PHP and is based on an opensource framework by [Brad Traversy](http://traversymedia.com) 

## Quick use:

You can use this framework in 2 ways:

1. Full PHP MVC => Views are written in here and saved in the app/views folder.

2. Partial PHP MVC (Only Model and Controller) => The controller has api endpoints which output JSON data and the Views are written in another language. Could even be hosted in another container or server. This would purely serve as the backend.

## Requirements

This setup uses php composer and that can be installed by using [homebrew](https://brew.sh) on the mac or [chocolatey](https://chocolatey.org)

## Quick Install:

**MACOS:**

1. Install homebrew (if you haven't already)
`/usr/bin/ruby -e "$(curl -fsSL https://raw.githubusercontent.com/Homebrew/install/master/install)"`

2. Install php composer
`brew install composer`

**Windows:**

1. Install chocolatey (if you haven't already)

* Run this command in the CMD.exe (Command Prompt) with administrator priviledges

`@"%SystemRoot%\System32\WindowsPowerShell\v1.0\powershell.exe" -NoProfile -InputFormat None -ExecutionPolicy Bypass -Command "iex ((New-Object System.Net.WebClient).DownloadString('https://chocolatey.org/install.ps1'))" && SET "PATH=%PATH%;%ALLUSERSPROFILE%\chocolatey\bin"`

* Run this command in Powershell with administrator priviledges
`Set-ExecutionPolicy Bypass -Scope Process -Force; iex ((New-Object System.Net.WebClient).DownloadString('https://chocolatey.org/install.ps1'))`

After installation restart the terminal window you use, this can be anything (CMD, Powershell or git bash) as long as it has admin priviledges so it can write any packages to the PATH variable if it needs to do this.

2. Install php composer
`chocolatey install composer -y`

3. Restart your terminal window

## Docker containers

This repository **does not** include the docker-compose file to setup a LAMP stack. [You can find those instructions here](https://github.com/to-jk11/php-container-kit/blob/master/docs/install.md) 

Note that the credentials that are stored in this repository for the LAMP stack refer to the docker setup in that link. However you are free to change those to what you require.

## Important

The DB connection works for demo containers using the supplied credentials
These credentials work with the setup used in the demo videos
You NEED to Change them for when you use this setup in production