# Machine Test

##DESCRIPTION

1) Make a function that will calculate the internet speed.
2) After that there will be a start button that will start the function. 
3) after completion of function values will get from the function and add to database(mysql)
4) that values will show the bottom of the page in a data-table
5)there will be a delete button too that will delete the row
Note: adding, deleting, and refreshing the values will be done by angular js for backend use php with codeignitor 

## Folder Structure

```
codeigniter/
├── angular/
│   ├── js
│   ├── partials
├── application/
├── composer.json
├── bower.json
├── gulpfile.js
├── composer.lock
├── public/
│   ├── .htaccess
│   └── index.php
└── vendor/
```

## Installation
```
git clone https://github.com/arafay696/machine-test.git
```

```
create db name: machine-test and import from db directory
```

```
npm i -g bower && npm i -g gulp
```

```
cd machine-test && composer update && npm install && bower install
```

## Run

To provide the JS and CSS files and to keep track of changes to these files:
```
gulp
```

Start application:
```
http://localhost/machine-test
```

## Requirements

- PHP 5.6.4 or later
- `composer` command (See [Composer Installation](https://getcomposer.org/doc/00-intro.md#installation-linux-unix-osx))
- NPM
- Gulp
- `bower` command (See [Bower installation](https://bower.io/))

Enjoy! Any feedback is welcome.