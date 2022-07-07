# Static HTML Boilerplate using PHP
[![Build Status](https://travis-ci.org/joemccann/dillinger.svg?branch=master)](https://travis-ci.org/joemccann/dillinger)

Simple instruction to setup

```sh
$ git clone https://github.com/kabilashgit/static-project-template.git
$ cd <project-Directory>
$ npm install
$ php -S localhost:8000 || php -S YOUR_LOCAL_IP:PORT
$ npm run watch
```
For production environments...
```sh
$ npm run prod
```

## Usage
In `index.php` add the following details and feel free to add more details to this array which is relevant to the page. 
```sh
$data = [
  'meta' =>  [
    'title' => 'Home',
    'page_desc' => '',
    'page_image' => ''
  ]
]
```
`Working js files` folder contains the 
  - `custom js` file (write all your custom logics here)
  - `vendor` folder for any 3rd party libraries

# Frameworks & Library used

  - Bootstrap Latest version (Flexbox)
  - Jquery
  - SCSS
  - Laravel Mix




###### Created by Manikandan K
