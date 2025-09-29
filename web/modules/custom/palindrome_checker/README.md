# Palindrome Checker Module

A simple custom Drupal 10 or 11 module to check if a word or phrase is a palindrome.

---

## Features

- Provides a simple form to check palindromes.
- Implements `hook_help()` to show module information.
- Cleans input (ignores spaces, punctuation, and capitalization).
- Optional: Can be extended with blocks, menu links, or admin settings.

---

## Installation

1. Place the module folder in your Drupal installation:

/web/modules/custom/palindrome_checker

2. Clear the cache:

- drush cr

3. Enable the module:

- drush en palindrome_checker

## Usage

1. Visit the page:

- http://my-first-drupal10-app.lndo.site:8000/palindrome-checker

2. Enter a word or phrase and click Check.

3. The module will tell you whether it is a palindrome or not.

## Screenshot:

- Palindrome Word

- ![Alt text](https://github.com/soniaakter08/Drupal_Project/blob/master/web/modules/custom/palindrome_checker/image/palindrome-checker_01.png)

- Not Palindrome Word

- ![Alt text](https://github.com/soniaakter08/Drupal_Project/blob/master/web/modules/custom/palindrome_checker/image/palindrome-checker_02.png)
