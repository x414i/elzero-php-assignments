# Lesson 10 – PHP Basics Assignment 10

## 📝 Description
This assignment is about **Variable Variables** in PHP.  
The goal is to **print the word `Web` five different ways** using what we learned about variables and string interpolation.

---

## 🔹 Given Code
```php
<?php
// Elzero Web School
// PHP - Basics
// Lesson 10

$name = "elzero";
$$name = "Web";
````

* `$name` contains the string `"elzero"`
* `$$name` creates a new variable `$elzero` with the value `"Web"`

---

## 🔹 Solution

```php
<?php
// Elzero Web School
// PHP - Basics
// Lesson 10

$name = "elzero";
$$name = "Web";

echo $$name;        // Method 1: Variable Variable
echo "<br>";

echo $elzero;       // Method 2: Direct Variable
echo "<br>";

echo "${$name}";    // Method 3: Variable Variable with {}
echo "<br>";

echo "${elzero}";   // Method 4: Variable inside string
echo "<br>";

echo "Web";         // Method 5: Direct string
```

---

## 🔍 Explanation of Methods

1. **`$$name`**

   * Accesses the variable created dynamically (`$elzero`)

2. **`$elzero`**

   * Direct access to the generated variable

3. **`${$name}`**

   * Variable variable syntax with curly braces

4. **`${elzero}`**

   * Variable interpolation inside a string

5. **`"Web"`**

   * Direct string output (valid and acceptable)

---

## ✅ Expected Output

```
Web
Web
Web
Web
Web
```

---

## 🧠 Key Concepts Used

* Variable Variables (`$$`)
* Curly braces `{}` with variables
* String interpolation
* Echo output