# Lesson 03 – PHP Basics Assignment 03

## 📝 Description
This assignment is about **escaping characters in strings** in PHP.  
The goal is to **print a string containing quotes, backslashes, and dollar signs** without using Heredoc or Nowdoc.  

You need to **replace the placeholders** in `echo "???"` to match the required output.

---

## 🔹 Required Output
Hello "Elzero" \ """ We Love "$$PHP"


- `\"` → Escapes double quotes inside a string  
- `\\` → Escapes a single backslash  
- `$$` → Displays two dollar signs  

---

## 🔹 Original Code (Starter)
```php
<?php
// Elzero Web School
// PHP - Basics
// Lesson 03

echo "???";
```
## 🔹 Solution
```php
<?php

// Escaping quotes, backslashes, and dollar signs
echo "Hello \"Elzero\" \\\\ \"\"\" We Love \"\$\$PHP\"";

?>

```
Explanation:

- `\"` → Used to print a double quote `"`

- `\\\\` → Used to print two backslashes `\\`

- `\"\"\"` → Prints three double quotes `"""`

- `\$\$PHP` → Prints $$PHP (dollar signs are escaped with \)

## 🔹 Output

Hello `"Elzero" \\ """ We Love "$$PHP"`


