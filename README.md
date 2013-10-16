Cliner
===================

This is a command line utility framework to help us script up good tools in php. 

The idea is to incorporate basic MVC setup to allow us to write scripts in a very organized fashion. 

Setup
===================
All your code goes into the app directory. Generally you want to put your business logic in the controller folder. 

The command: <pre><code>php cliner.php [controller] [action] [argv0....]</code></pre>

will maps to <pre><code>Controller::Action(argv....)</code></pre>

Name Convention
===================
You should name all your controllers: [Name]Controller.php
