# Minesweeper

A simple Minesweeper clone to test employee candidates.

### Tools in use

* [Symfony 2](http://symfony.com)
* [Composer package management](http://getcomposer.org)
* [Git version control](http://git-scm.org)

### Goals

Fork this repository and implement a working Minesweeper game. The ground work and the basics are done, but the gameplay needs work.

Feel free to implement / work on any part of the project and try to make it a working Minesweeper game.

Here are a few ideas what to implement:

* The "make move" controller action needs to be implemented.
 * If clicked on a mine, it should explode.
 * If clicked on an empty cell, reveal it either as empty or as a number.
* The mines are currently shown, hide them.
* We need numbers to describe the number of mines around certain cells.
* Controllable mine density (currently it's 50% mines).
* Clicking on an empty cell should reveal neighbor empty cells (expanding reveal).
 
### Getting started

_Note: Whenever you want to run a command, either use `sf` (Windows) or `./sf.sh` (Unix) depending on your operating system._

0. Install [Git version control](http://git-scm.org).
0. Fork this repository using the [Fork](https://github.com/Loiste/Minesweeper/fork_select)-button on the top of the page.
0. Clone (`git@github.com:YOUR_ACCOUNT/Minesweeper.git`) your own fork to your local computer.
0. Install/setup [Composer package management](http://getcomposer.org) (i.e. download the Composer.phar file to the project root folder).
0. Run `php composer.phar install` to install dependencies.
0. Run `sf assets:install --symlink web`.
0. Lastly, run `sf assetic:dump`.

That's it, try to access the game at `http://localhost/minesweeper/web/app_dev.php` (or `app.php` for production mode).

#### Development guide

Refer to the [Symfony 2 official homepage](http://symfony.com) for great documentation.

##### Dump assets
If you make changes to asset files (.css, .js), make sure to run `sf assetic:dump`. Alternatively, you can keep a watcher running with `sf assetic:dump --watch`.

##### Clearing the cache
To clear the cache (sometimes needed depending on the situation), run `sf cache:clear --no-warmup`. Usually you don't want to warm up the cache.

