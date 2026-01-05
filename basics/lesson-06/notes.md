# Lesson 06 – PHP Basics Assignment 06

## 📝 Description

This assignment focuses on **Nowdoc syntax** in PHP and how it behaves with:

- Indentation
- Variable parsing
- Delimiter rules

You are required to:
- Fix a syntax error
- Remove **exactly 2 characters** to get the required output

---

## 🔹 Original Code

```php
<?php

$something = "Programming";

echo <<<'code'
Hello \PHP\
We Love $something
        code;
```
## ❌ Problems Explanation
### 🔴 Error [1]: Indentation Issue

The closing identifier (code;) must start at the beginning of the line.
No spaces or tabs are allowed before it.

## ❌ Wrong
```
        code;

```

## ✅ Correct
```
code;
```

## 🔴 Error [2]: Variables Not Parsed

Nowdoc syntax (<<<'code') does NOT parse variables, so $something will be printed as plain text instead of its value.

## 🔧 Required Fix
### ✅ Step 1: Fix the indentation

Move code; to the start of the line.

### ✅ Step 2: Remove exactly 2 characters

Remove the single quotes from the identifier:
```
echo <<<code

```
This converts Nowdoc → Heredoc, which allows variable parsing.

## ✅ Final Correct Code

```
<?php

$something = "Programming";

echo <<<code
Hello \PHP\
We Love $something
code;

```

## 🔹 Needed Output
```
Hello \PHP\
We Love Programming

```

### ✅ Key Notes

- Nowdoc `(<<<'code')` → variables are NOT parsed

- Heredoc `(<<<code)` → variables ARE parsed

- Closing identifier must:

    - Match the opening identifier exactly

    - Start at column `0`

    - End with a semicolon `(;)`