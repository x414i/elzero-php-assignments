# Lesson 05 – PHP Basics Assignment 05

## 📝 Description
This assignment is a **string challenge** in PHP.  
The goal is to **print multiple lines exactly as required**, including all quotes and special characters, with each sentence appearing on a new line.

---

## 🚫 Restrictions
- ❌ **Do NOT use the backslash `\` as an escape character**
- ❌ **Do NOT use HTML elements** such as `<br>`

---

## 🔹 Needed Output
Hello "'Elzero'"
We Love $Programming$
Languages Specially "PHP"

---

## 🔹 Solution

In this solution, we rely on the following concepts:

- **Single-quoted strings** allow us to print:
  - Double quotes `"`
  - Dollar signs `$`
  - Text as-is without variable parsing
- Writing the text on **multiple lines inside the string**
- Using the PHP function **`nl2br()`** to convert newline characters into line breaks automatically when displayed in the browser

```php
<?php
// Elzero Web School
// PHP - Basics
// Lesson 05

echo nl2br(
'Hello " \'Elzero\' "
We Love $Programming$
Languages Specially "PHP"'
);
```
## ✅ Notes

- nl2br() converts newline characters into HTML line breaks without writing `<br>` manually

- The string is written across multiple lines to preserve the required output format

- No backslash `\` was used for escaping

- No HTML tags were written explicitly

## 🔹 Expected Output (Browser or View Source)
```
Hello "'Elzero'"

We Love $Programming$

Languages Specially "PHP"
```