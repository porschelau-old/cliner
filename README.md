Cliner
===================

This is a command line utility framework to help us script up good tools in php. 

The idea is to incorporate basic MVC setup to allow us to write scripts in a very organized fashion. 

Setup
===================
All your code goes into the app directory. Generally you want to put your business logic in the controller folder. 

The command: php cliner.php [controller] [action] [argv0....]

will maps to 

[controller]::[action](argv0....);

Name Convention
===================
You should name all your controllers: [Name]Controller.php
