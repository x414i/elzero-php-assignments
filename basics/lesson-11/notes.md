# Lesson 11 – PHP Basics Assignment 11

## 📝 Description
This assignment explains the difference between **assigning by value** and **assigning by reference** in PHP.  
The goal is to make the variable **`$b` equal to `100`** without modifying the original values `100` and `200`.

---

## 🔹 Given Code (Incorrect Result)
```php
$a = 200;
$b = $a;
$a = 100;

echo $b; // 200 ❌
```

### ❌ Problem

* `$b = $a;` copies the value of `$a`
* After copying, `$b` becomes independent
* Changing `$a` later does not affect `$b`

---

## 🔹 Solution

```php
<?php
// Elzero Web School
// PHP - Basics
// Lesson 11

$a = 200;
$b = &$a; // Assign by reference
$a = 100;

echo $b; // 100 ✅
```

---

## 🔍 Explanation

1. `$a = 200`

   * `$a` holds the initial value

2. `$b = &$a`

   * `$b` becomes a reference to `$a`
   * Both variables point to the same memory location

3. `$a = 100`

   * The value is updated in memory

4. `echo $b`

   * Outputs `100` because `$b` references `$a`

---

## 🧠 Key Concepts Used

* Assignment by value (`=`)
* Assignment by reference (`=&`)
* Memory referencing in PHP

---

## ✅ Expected Output

```
100
```

---

## 📌 Summary

* Use `=` to copy values
* Use `=&` to create references
* References allow variables to stay synchronized

```

---

## ✅ Conventional Commit (جاهز)

```bash
git add lesson11.php
git commit -m "feat(reference): demonstrate assignment by reference to sync variable values"
```