# Lesson 04 – PHP Basics Assignment 04

## 📝 Description
This assignment is about **using the newline character `\n`** in PHP strings.  
The goal is to **print each word on a separate line** instead of all words appearing on the same line.  

---

## 🔹 Original Code
```php
<?php
// Elzero Web School
// PHP - Basics
// Lesson 04

echo "We \n Love \n Elzero \n Web \n School";
```
Current Output (Incorrect):

`We \n Love \n Elzero \n Web \n School`


The `\n` is displayed literally when printed in HTML because the browser ignores newline characters.

## 🔹 Solution

To make each word appear on a separate line in a browser, we can replace `\n` with `<br>` tags:

```php 
<?php

echo "We <br> Love <br> Elzero <br> Web <br> School";

?>
```
Output in Browser: 

```php 
We
Love
Elzero
Web
School
```

✅ Notes

`\n` works for CLI (terminal) output but not in browser HTML.

In HTML, use`<br>`to create a line break.

Alternative for CLI:

`echo "We \nLove \nElzero \nWeb \nSchool";`


This will work correctly if you run the script in terminal or command line.