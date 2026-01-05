# Lesson 07 – PHP Basics Assignment 07

## 📝 Description
This assignment focuses on **type juggling and type casting** in PHP.  
The goal is to **print a numeric value and its data type** without modifying the original string or its type.

---

## 🚫 Restrictions
- ❌ Do NOT modify the string content: `"Hello PHP"`
- ❌ Do NOT change the string type
- ✅ Use PHP type casting and built-in functions only

---

## 🔹 Given Code
```php
echo "Hello PHP";
echo '<br>';
echo "Hello PHP";
```

## 🔹 Solution
```
<?php
// Elzero Web School
// PHP - Basics
// Lesson 07

echo (int)(bool)"Hello PHP";
echo "<br>";
echo gettype((int)"Hello PHP");
```
## 🔍 Explanation

1. `"Hello PHP"`

- A non-empty string in PHP evaluates to `true` when cast to boolean.

2. `(bool)"Hello PHP"`

 - Converts the string to `true`.

3. `(int)(bool)"Hello PHP"`

Converts `true` to integer → `1`.

4. gettype((int)"Hello PHP")

- Casting a string to `(int)` results in an integer type.

- `gettype()` confirms the data type as integer.

✅ Expected Output
``` 
1
integer

```
## 🧠 Key Concepts Used

- Type casting `(bool)` and `(int)`
- PHP automatic type juggling
- `gettype()` for detecting data types
