[![Build Status](https://secure.travis-ci.org/madflow/node-rcommand.png)](http://travis-ci.org/madflow/flow-markdown)

# README

## What is Markdown?

> Markdown is a text-to-HTML conversion tool for web writers. Markdown allows you to write using an easy-to-read, easy-to-write plain text format, then convert it to structurally valid XHTML (or HTML). Source: <http://daringfireball.net/projects/markdown/>

## What is this \Madflow\Markdown\Parser

This script is a fork from php-markdown by Michel Fortin <http://michelf.com/>. The main work has been just refactoring the code for a PHP 5.3 environment.

The plugins for Wordpress etc. have been dropped from the code.

## Requirements

- PHP >= 5.3

## Usage

- Add Madflow\(Markdown) namespace to your autoloader.
- Create instance and happily transform markdown to HTML. 
   - $parser = new \Madflow\Markdown\Parser();
   - $html = $parser->transform('# Markdown String');

# Authors

- Florian Reiss <https://github.com/madflow/flow-markdown/>

- PHP Markdown by Michel Fortin <http://michelf.com/> 

- Markdown Syntax by John Gruber  <http://daringfireball.net/>