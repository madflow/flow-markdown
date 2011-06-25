# README

## What is Markdown?

> Markdown is a text-to-HTML conversion tool for web writers. Markdown allows you to write using an easy-to-read, easy-to-write plain text format, then convert it to structurally valid XHTML (or HTML). Source: <http://daringfireball.net/projects/markdown/>

## What is this \Flow\Markdown\Parser

This script is a fork from php-markdown by Michel Fortin <http://michelf.com/>. The main work has been just refactoring the code for a PHP 5.3 environment.

The plugins for Wordpress etc. have been dropped from the code.

## Requirements

- PHP >= 5.3

## Usage

- Add Flow\(Markdown) namespace to your autoloader.
- Create instance and happily transform markdown to HTML. 
   - $parser = new \Flow\Mardown\Parser();
   - $html = $parser->transform('# Markdown String');

# Authors

- Florian Reiss <http://github/madflow/> 

- PHP Markdown by Michel Fortin <http://michelf.com/> 

- Mardown Syntax by John Gruber  <http://daringfireball.net/>